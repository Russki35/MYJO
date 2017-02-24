<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User_journalist;
use App\Formations;
use App\Experiences;
use App\Journalist;

class JournalistsController extends Controller
{	
	public function show()
	{	
		$id = Auth::id(); // Arnaque pou récupérer l'id du mec connecté

		//check dans user_journalist quel id_journalist where id_user=$id stocké dans $id_journalist
			// 1 - on cherche avec condition dans la jointure
		$user_journalist_request = User_journalist::where('id_user', $id)->get();

			// 2 - Ici on épluche le tableau (s'aider du dd($user_journalist_request);) afin de trouver la bonne info dans le tableau multidimensionnel
		$id_journalist = $user_journalist_request[0]['id_journalist'];
		
			// 3 - On peut enfin checker dans la table journaliste !
		$journalist = Journalist::find($id_journalist);
		return view('profiles.profile', compact('journalist'));
	}

	public function showUser(Journalist $journalist)//Wildcard
	{
		
		//dd($journalist);
		//Ici on appelle toutes les données de la table journalist, on choisi au détail les infos souhaitées directement en les appelant dans la vue
		

		return view('profiles.profile', compact('journalist'));
	}

	public function edit(Journalist $journalist)
	{
		$journalist = Journalist::find($journalist);
		return view('profiles.edit', compact('journalist'));

	}

	public function create(Journalist $journalist)
	{


		return view('profiles.create', compact('journalist'));

	}

	public function store()
	{


		//dd(request()->available);

		/*$this->validate(request(), [

			'title' => 'required', //required|min:3 -> minimum 3 caractères
			'profile_title' => 'required',
			'location' => 'required',
			'seniority' => 'required',
			'price' => 'required',
			'experience' => 'required',
			'description' => 'required'
			

		]);*/

		//-------------------------------------
		//             FORMATION
		//-------------------------------------

		// Cherche à savoir si la formation est déjà existante
		$formation = Formations::where('user_id', Auth::user()->id);

		// Si la formation n'existe pas, on la créé
		if( ! $formation->count() )
		{
			Formations::create([
				'certificate' => request()->formation,//avant experience ici
				'organisation' => request()->formation,//avant experience ici
				'acquired' => 'niveau',
				'obtention_date' => '2017-01-15',
				'user_id' => Auth::user()->id,
			]);

		} 
		// Sinon, on modifie la formation
		else 
		{
			$datas = [
				'organisation' => request()->formation,
			];

			$formation->update($datas);
		}
		//-------------------------------------
		//             EXPERIENCE
		//-------------------------------------

		$experience = Experiences::where('user_id', Auth::user()->id);

		// Si la formation n'existe pas, on la créé
		if( ! $experience->count() )
		{
			Experiences::create([
				'title' => request()->experience,
				'description' => request()->experience,
				'role' => request()->experience,
				'start_date' => 'datetime',
				'end_date' => 'datetime',
				'user_id' => Auth::user()->id,


			]);

		} 
		// Sinon, on modifie la formation
		else 
		{
			$datas = [
				'organisation' => request()->experience,
			];

			$experience->update($datas);
		}

		/*$journalist = Auth::user();

		return view('profiles.create', compact('journalist'));*/

		//-------------------------------------
		//             JOURNALIST
		//-------------------------------------

		$journalist = Journalist::where('user_id', Auth::user()->id);

		// Si la formation n'existe pas, on la créé
		if( ! $journalist->count() )
		{
			Journalist::create([
				'location' => request()->journalist,
				'price' => 'decimal',
				'picture' => request()->journalist,
				'user_id' => Auth::user()->id,
			]);

		} 
		// Sinon, on modifie la formation
		else 
		{
			$datas = [
				'journalist' => request()->journalist,
			];

			$journalist->update($datas);
		}

		$journalist = Auth::user();

		return view('profiles.create', compact('journalist'));

	}
	
}

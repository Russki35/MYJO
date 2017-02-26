<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User_journalist;
use App\Formations;
use App\Experiences;
use App\Journalist;
use App\User;
use Carbon\Carbon;

class JournalistsController extends Controller
{	
	public function show_old()
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

	public function show()
	{
		$user_id = Auth::user()->id;
		//dd($journalist);
		//Ici on appelle toutes les données de la table journalist, on choisi au détail les infos souhaitées directement en les appelant dans la vue
		
		$formation = Formations::where('user_id', $user_id)->first();
		$experience = Experiences::where('user_id', $user_id)->first();
		$journalist = Journalist::where('user_id', $user_id)->first();
		/*$user = Users::where('user_id', $user_id)->first();//ajouté 20h36*/

		return view('profiles.profile', compact('journalist','experience','formation','user'));
		
	}

	public function edit(User $user)
	{
		$journalist = Journalist::find($journalist);
		return view('profiles.edit', compact('journalist'));

	}

	public function create(User $user)
	{
		$formation = Formations::where('user_id', $user->id)->first();
		$experience = Experiences::where('user_id', $user->id)->first();
		$journalist = Journalist::where('user_id', $user->id)->first();
		/*$user = Users::where('user_id', $user_id)->first();//ajouté 20h36*/

		return view('profiles.create', compact('journalist','experience','formation','user'));

	}

	public function store()
	{
		// Définition de la variable user_id
		// Retrouve l'id de l'utilisateur connecté
		$user_id = Auth::user()->id;


		//-------------------------------------
		//             FORMATION
		//-------------------------------------

		// Cherche à savoir si la formation est déjà existante
		$formation = Formations::where('user_id', $user_id)->first();

		// Si la formation n'existe pas, on la créé
		 //dd(request()->all()); 
		if( ! $formation instanceof Formations )
		{


			$formation = Formations::create([
				'certificate' => '', //-> à définir dans l'HTML
				'organisation' => request()->organisation,
				'acquired' => 'niveau',
				'obtention_date' => '2000-01-01', //-> à définir dans l'HTML
				'user_id' => $user_id,
			]);

		} 
		// Sinon, on modifie la formation
		else 
		{
			//dd($formation);
			$datas = [
				'certificate' => '', //-> à définir dans l'HTML
				'organisation' => request()->organisation,
				'acquired' => 'niveau',
				'obtention_date' => '2000-01-01', //-> à définir dans l'HTML
				'user_id' => $user_id,
			];

			/*$datas = [
				'organisation' => request()->organisation,
			];*/

			

			$formation->fill( $datas )->save();
		}
		//-------------------------------------
		//             EXPERIENCE
		//-------------------------------------
		
		$experience = Experiences::where('user_id', $user_id)->first();

		// Si la formation n'existe pas, on la créé
		if( ! $experience instanceof Experiences )
		{
			// dd($user_id);
			$experience = Experiences::create([
				'user_id' => $user_id,
				'title' => request()->title,
				'resume' => request()->resume,
				'start_date' => request()->start_date,
				'end_date' => request()->end_date,

				
			]);

		} 
		// Sinon, on modifie la formation
		else 
		{
			//dd('toto');
			$datas = [
				'user_id' => $user_id,
				'title' => request()->title,
				'resume' => request()->resume,
				'start_date' => request()->start_date,
				'end_date' => request()->end_date,
			];

			/*$datas = [
				'resume' => request()->resume,
			];*/


			

			$experience->fill( $datas )->save();
		}

		//-------------------------------------
		//             JOURNALIST
		//-------------------------------------

		$journalist = Journalist::where('user_id', $user_id)->first();

		
		if( ! $journalist instanceof Journalist )
		{
			$journalist = Journalist::create([

				'firstname' => request()->firstname,//ajouté 21h18
				'lastname' => request()->lastname,//ajouté 21h18
				'profile_title' => request()->profile_title,
				'location' => request()->location,
				'price' => request()->price,
				'description' => request()->description,
				'picture' => request()->picture,//mime|jpeg
				'user_id' => $user_id,
			]);

		} 
		
		else 
		{
			$datas = [
				'profile_title' => request()->profile_title,
				'location' => request()->location,
				'price' => request()->price,
				'description' => request()->description,
				'picture' => request()->picture,//mime|jpeg
				'user_id' => $user_id,
			];

			$journalist->fill( $datas )->save();
		}

		$journalist = Journalist::where('user_id', $user_id)->first();

		//-------------------------------------
		//               USERS
		//-------------------------------------

		
		/*if( ! $user instanceof Users )
		{
			$user = Users::create([

				'firstname' => request()->profile_title,
				'lastname' => request()->location,
				'email' => request()->location,
				
			]);

		} 
		
		else 
		{
			$datas = [
				'profile_title' => request()->profile_title,
				'location' => request()->location,
				'price' => request()->price,
				'description' => request()->description,
				'picture' => request()->picture,//mime|jpeg
				'user_id' => $user_id,
			];

			$journalist->fill( $datas )->save();
		}*/

		//return redirect()->route('create_profile');
		return redirect()->route('profile_profile');

	}

	//Ajouté 18h28


	public function showDisplay()
	{
		
		/*$profile = profile::all();*/

		
		/*$journalist = Journalist::all();*/
		

		return view('profiles.display');

	}
	//compact('journalist','experience','formation','user'));
}

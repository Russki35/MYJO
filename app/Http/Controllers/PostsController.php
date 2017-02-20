<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{
    
	public function index()
	{

		//Afficher les posts dans index(homepage)
		$posts = Post::latest()->get();

		// Cette vue à maintenant accès à tous les posts
		return view('posts.index', compact('posts'));

	}

	public function show(Post $post) // ou show($id)
	{

		//$post = Post::find($id);

		return view('posts.show', compact('post'));

	}

	public function create()
	{

		return view('posts.create');

	}

	public function store()
	{

		//Validation formulaire
		$this->validate(request(), [

			'title' => 'required', //required|min:3 -> minimum 3 caractères

			'body' => 'required'

		]);

		//dd(request()->all()); //Ici on pourrai egalement choisir les infos que l'on souhaite (title, body etc...)

		//On créer ici un nouveau post récupérant les données

		$post = new Post;

		$post->title = request('title');

		$post->body = request('body');

		/*Post::create([

			'title' => request('title');

			'body' => request('body');
		]);*/


		//Sauvegarder dans la BDD

		$post->save();


		//Redirige où l'on veut (homepage par exemple)

		return redirect('/');

	}



}

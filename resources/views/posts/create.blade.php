@extends('layouts.master')

@section('content')

	<div class="col-sm-8 blog-main">


		<h1>Publish a Post</h1>

		<form method="POST" action="/MYJO/public/posts">

			{{ csrf_field() }}

  			<div class="form-group">
    			<label for="title">Title</label>
    			<input type="text" class="form-control" id="title" name="title"><!-- Une manière simple de demander la validation d'un champs serai d'ajouter 'required' à la fin de l'input, mais cette méthode n'est pas reconnue par tous les navigateurs-->
  			</div>

  			<div class="form-group">
    			<label for="body">Body</label>
    			<textarea class="form-control" id="body" name="body"></textarea>
  			</div>

  		
  			<div class="form-group">

  				<button type="submit" class="btn btn-primary">Submit</button>

  			</div>

  			<!-- Affiche les erreurs de remplissage des champs -->

  			@include('layouts.errors')

			</form>	



				

	</div>

@endsection
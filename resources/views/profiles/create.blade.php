@extends('welcome')

@section('content')
    <form method="post" action="">
    {{ csrf_field() }}
    <!-- 1ER BLOC presentation -->
             <div class="bg_light_3 section_offset_3">
	             <div class="container ">
	             	<div class="row">
	             		 <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
	             		 	<div class="row">

		             		 	<div class=" m_right_10 ">
											<img class="img-rounded img-responsive" src="images/journalist.jpg" alt="">
								</div>
							</div>	
	             		 </div>

	             		 <div class="row fw_light col-lg-8 col-md-8 col-sm-8">
	             		 
		             		    <div class="col-xs-12 description">


		             		  	         <div>
		             		  				<label class="profil">Nom</label>
		             		  					<input type="text" placeholder="Votre nom" id="lastname" name="lastname" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->lastname ) && ! old('lastname') ){{ $journalist->lastname }}@else{{ old('lastname') }}@endif" required>
		             		  			</div>

		             		  				<hr>

		             		  			<div>
											<label class="profil">Prénom</label>
		             		  					<input type="text" placeholder="Votre prénom" id="firstname" name="firstname" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->firstname ) && ! old('firstname') ){{ $journalist->firstname }}@else{{ old('lastname') }}@endif" required>
		             		  			</div>

		             		  				<hr>

		             		  			<div>
		             		  				<h5 class="profil m_bottom_20">Titre professionnel</h5>
		             		  					<input type="text" placeholder="Intitulé du poste" id="profile_title" name="profile_title" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->profile_title ) && ! old('profile_title') ){{ $journalist->profile_title }}@else{{ old('profile_title') }}@endif" required>
		             		  			</div>
		             		  				
		             		  			<br>

		             		  			<p ><i class="icon_size_4 icon-location-1"></i>    Localisation</p><br>
		             		  				<input type="text" placeholder="Ville" id="location" name="location" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->location ) && ! old('location') ){{ $journalist->location }}@else{{ old('location') }}@endif" required>
		             		  				<br>
		             		  	</div>

		             		  	<div class=" m_top_10 description col-xs-12">		
		             		  			<ul class="m_top_10 list-inline">
			             		  			<li class="col-xs-4">
				             		  			<ul >
					             		   			<li class="h4">Tarif</li>
					             		   			<li class="h4 fw_light"><input type="text" placeholder="Tarif" id="price" name="price" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->price ) && ! old('price') ){{ $journalist->price }}@else{{ old('price') }}@endif"></li>
					             		   		</ul>
					             		   	</li>
					             		   
					             		   	<li class="col-xs-6 m_left_15">
			             		   				<ul>
					             		   			<li class="h4">Disponibilité</li>
					             		   			<li class="h4 fw_light">
			             		   				Je suis disponible<br>
			             		   				<input name="available" type="checkbox"></li>
			             		   				</ul>
			             		   			</li>
		             		   			</ul>		
	             		   			</div>

	             		   			

		             		
		             	
	    
				       		
				      

				     		<!-- Description -->
						    <div class="description col-xs-12 m_top_10 " >
	                       
		                       <p ><h4 class="m_bottom_20 ">Quelques mots pour me décrire</h4></p>
		                       <textarea id="desription" name="description" class="r_corners color_grey w_full fw_light" value="@if( is_object( $journalist ) && isset( $journalist->description ) && ! old('description') ){{ $journalist->description }}@else{{ old('description') }}@endif" required></textarea>
		                       
		                       
		                       

		                       
		                       </p>
	                       
	                     	</div>  
	                     	
	                     	<!-- Expériences -->
	                     	<div class="description col-xs-12 m_top_10" >
	                       
		                       <h5 class="m_bottom_20 ">Expérience</h5>

		                       		<p class="color_purple m_bottom_10 ">
		                       			<input type="text" placeholder="Entreprise" id="title" name="title" class="color_purple m_bottom_10 " value="@if( is_object( $experience ) && isset( $experience->title ) && ! old('title') ){{ $experience->title }}@else{{ old('title') }}@endif" required>
		                       		</p>

		                       		<textarea type="text" placeholder="Décrivez vos expériences professionnelles" id="resume" name="resume" class="r_corners color_grey w_full fw_light" value="@if( is_object( $experience ) && isset( $experience->resume ) && ! old('resume') ){{ $experience->resume }}@else{{ old('resume') }}@endif" required></textarea>

		                       <h5 class="m_bottom_20 ">Période</h5>
		                       <p>
		                       		<input type="date" placeholder="Début" id="start_date" name="start_date" class="t_align_r m_bottom_10 " value="@if( is_object( $experience ) && isset( $experience->start_date ) && ! old('start_date') ){{ $experience->start_date }}@else{{ old('start_date') }}@endif" required></p>

		                       	<input type="date" placeholder="Fin" id="end_date" name="end_date" class="t_align_r m_bottom_10 " value="@if( is_object( $experience ) && isset( $experience->end_date ) && ! old('end_date') ){{ $experience->end_date }}@else{{ old('end_date') }}@endif" required></p>
		                       
		                       
				                    
	                     	</div>  
							
							<!-- Portfolio -->
	                     	<div class=" description col-xs-12 m_top_10" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Portfolio</h5></p>
		                       <p ><img class="img-responsive" src="images/pirate.jpg">             
		                       </p>
	                       
	                     	</div>  

							<!-- Formations -->
	                     	<div class="description col-xs-12 m_top_10" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Formations</h5>


		                       <textarea type="text" placeholder="Décrivez en détail vos études et diplômes obtenus" id="organisation" name="organisation" class="r_corners color_grey w_full fw_light" value="@if( is_object( $formation ) && isset( $formation->organisation ) && ! old('organisation') ){{ $formation->organisation }}@else{{ old('organisation') }}@endif" required></textarea></p>

		                       <!-- organisation = cv -->

		                       
		                       
		                       <!-- <div class="col-xs-6">
		                       		<p class="fw_ex_bold color_purple m_bottom_10 ">WebForce3</p>
		                       </div>

		                       <div class="  col-xs-6">
		                       		<p class="t_align_r m_bottom_10 ">Novembre 2016 - Février 2017</p>
		                       </div>
				                    <div class="col-xs-12">
				                       <p class="fw_light">Développeur-intégrateur web </p>
	                       			</div> -->
	                     	</div>  

	                     	<!-- Recommandations -->
	                     	<div class="description col-xs-12 m_top_10" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Recommandations</h5></p>
		                       
		                       
	                       	</div>

	                       	<!-- Langues -->
	                     	<div class="description col-xs-12 m_top_10" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Langues</h5></p>
		                       
		                       <a href="/profile">
		                       <button type="submit" class="btn btn-primary">Envoyer</button>
		                       </a>
		                       
	                       	</div>


	                     	 
      					</div> <!-- Fin de row -->

				</div>
			</div>
				 </div>
	</form>
@include('layouts.errors');
@endsection
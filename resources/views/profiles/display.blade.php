@extends('welcome')

@section('content')

            
	        
			
	         <!-- CRITERES -->
			
			<div class="bg_light_3 section_offset_3">
				<div class="container-full ">
					<div class="row">

				       		<div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
				         		<div class="text-center fs_medium checkbox" >
				          			<div class="bg_light_2 r_corners privacy m_bottom_20">
										<form action="" method="get" class="login_form m_bottom_20">
										
										
										
										<div data-toggle="buttons">
											<h5 class="color_dark m_bottom_5 fw_light">Tarif/jour max</h5>
               								<input type="range" name="price" max="2000" value="350" class="g_light_2 m_bottom_10">

               								<h5 class="color_dark m_bottom_5 fw_light">Niveau d'expérience</h5>

											<label class="list-group-item btn btn-block" for="0-2 ans">
											<input id="0-2 ans" value="0-2 ans" name="seniority[]" type="checkbox">0-2 ans</label>
											<label class="list-group-item btn btn-block" for="2-7 ans">
											<input id="2-7 ans" value="2-7 ans" name="seniority[]" type="checkbox">2-7 ans</label>
											<label class="list-group-item btn btn-block" for="7 ans et +">
											<input id="7 ans et +" value="7 ans et +" class="m_bottom_20" name="seniority[]" type="checkbox" >7 ans et +</label>

											<h5 class="color_dark m_bottom_5 m_top_10 fw_light">Langues</h5>

											<label class="list-group-item btn btn-block" for="francais">
											<input id="francais" value="1" name="lea_id[]" type="checkbox">Français</label>
											<label class="list-group-item btn btn-block" for="anglais">
											<input id="anglais" value="2" name="lea_id[]" type="checkbox">Anglais</label>
											<label class="list-group-item btn btn-block" for="espagnol">
											<input id="espagnol" value="3" name="lea_id[]" type="checkbox">Espagnol</label>

											<h5 class="color_dark m_bottom_5 m_top_10 fw_light">Disponibilité</h5>

											<label class="list-group-item btn btn-block" for="tps_plein_only">
											<input  id="temps_plein_only" value="false" name="part_time" type="checkbox">Temps plein uniquement</label>
										
										</div>
										

				          				<!-- <input type="reset" value="Réinitialiser"><br> -->
						                <!-- Bouton simple sans soumettre de formulaire  -->
										<input class="m_top_10 button_type_2 color_purple" type="submit" value="Appliquer les filtres">

									</div>

										

						                
				          				
				          			

				          			 </form> <!-- Fin du formulaire -->
				         		</div>
				     		</div>
				      

				     		<!-- DESCRIPTION -->

				     		@foreach($journalists as $journalist)
						    <div class=" recherche col-lg-9 col-md-9 col-sm-9 m_top_10 m_bottom_10" >
	                       		<div >
			                        <aside class="col-lg-2 col-sm-3 col-xs-6">
                        				<img class="img-rounded img-responsive" src="images/journalist.jpg" alt="">
                   					</aside>

                   					<div class="m_top_10 profil col-lg-2 col-sm-3 col-xs-6 ">
                   					    <p>							
		             		  				<h5 style="color: #41bedd;" class="m_bottom_5 ">{{$journalist->firstname}} {{$journalist->lastname}}</h5>
		             		  				<h6 class="m_bottom_5 fw_light">{{$journalist->profile_title}}</h6>
		             		  				<h6 class="m_bottom_5 fs_medium  m_bottom_20">{{$journalist->location}}</h6>
		             		  			</p>
		             		  			
		             		  				<p ><i class=" profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-half-alt"></i>
		             		  			</p>
                   					   
                   					</div>

                   					<div class="col-sm-4 col-lg-5 col-xs-12 m_top_20">

                   						<p>
                   							<h6 style="color: #41bedd;" class="m_bottom_20 ">Description</h6>
                   							{{$journalist->description}}
                   						</p>
                   						  
									</div>

                   					<div class="col-sm-2 col-lg-3 ">

                   						<div class="col-xs-6">
                   							<!-- <p class="h4 fs_medium "></p> -->
                   							<h6 style="color: #41bedd;" class="m_bottom_20 ">Tarif journalier</h6>
                   								<button type="button" class="m_bottom_20 btn btn-success btn-lg">{{$journalist->price}}</button>

                   							<a href="profile/{{$journalist->id}}">
                   								<button type="button" class="m_bottom_20 btn btn-success btn-lg">Voir profil de {{$journalist->firstname}} {{$journalist->lastname}}</button>
                   							</a>

                   						</div>

                   						
                   							
                   						

                   						<div class="col-xs-6">
                   							<p class="h4 fw_light ">{{$journalist->available}}<br>
                   							<!-- <span class="h4"> Immédiate</span></p> -->
                   						</div>
                   					</div>
			                      
	                       		</div>
	                     	</div>  
	                     	
	                     	@endforeach
							

	                     	<!-- <ul>
									        <li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Auto</li>
							        		<li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Tipiak</li>
							        		<li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Youporn</li><li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Auto</li>
							        		<li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Tipiak</li>
							        		<li class="tags button_type_1 color_purple transparent  fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Youporn</li>
									     </ul> --> 
	                     	 
      					</div> <!-- Fin de row -->

				
			</div>




@include('layouts.errors');

@endsection
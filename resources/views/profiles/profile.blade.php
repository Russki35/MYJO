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

	             		 		

		             		 	<div class="m_right_10 ">
										

										<img src="{{ asset( $journalist->picture )}}" >	
											
								</div>
							</div>	
	             		 </div>

	             		  <div class=" row fw_light col-lg-4 col-md-4 col-sm-4">
		             		  <div class=" col-xs-12 description   ">
		             		  	         <p >
		             		  				<h3 class="profil ">{{ $journalist->firstname }}  {{ $journalist->lastname }}</h3>
		             		  				<h5 class="profil m_bottom_20">{{ $journalist->profile_title }}</h5>
		             		  			</p>

		             		  			<p ><i class="icon_size_4 icon-location-1"></i>  {{ $journalist->location }}</p>
		             		  				<p ><i class=" profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-half-alt"></i>
		             		  			</p>
		             		  	</div>
		             		  	

		             		  </div>
	             		 	 <div class="row col-lg-4 col-md-4 col-sm-4 f_right m_bottom_10 m_left_15">
	             		   		<div class="col-xs-12">	
	             		   			<button class="button_type_3 color_purple r_corners tt_uppercase fs_medium m_top_20 tr_all f_left m_right_10 m_md_bottom_10 ">Contacter le journaliste</button>
	             		   		</div>
	             		   		<!-- Tarif / Dispo -->
	             		   		<div class="col-xs-12">		
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
					             		   			<li class="h4 fw_light">{{ $journalist->available }}
			             		   				Je suis disponible<br>
			             		   				<input name="available" type="checkbox"></li>
			             		   				</ul>
			             		   			</li>
		             		   			</ul>		
	             		   			</div>
	             		  		</div>
	             		  	</div>
	             		  </div>
	              </div>
	        
			
	         <!-- TAGS et DESCRIPTIONS -->
			
			<div class="bg_light_3 section_offset-3">
				<div class="container ">
					<div class="row">
				       		<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
				         		<div class="row">
				          
						           <aside class="col-lg-12 col-sm-10 col-xs-12 h3 color_blue">
						             Télévision
						           </aside>
						           <aside class="col-lg-12 col-sm-10 col-xs-12 color_blue">
						           		<ul>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Histoire</li>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Société</li>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Auto</li>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Sport</li>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Actualité</li>
									    </ul>   
						           </aside >
						           <aside class=" col-xs-12 h3 color_pink">
						           		Radio
						           </aside>
						           <aside class="col-xs-12 color_pink">
						           		<ul>
									        <li class="tags button_type_1 color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Histoire</li>
									        <li class="tags button_type_1 color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Société</li>
									        
									        <li class="tags button_type_1  color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Actualité</li>
									     </ul>   
						           </aside>
			          			 <aside class=" col-xs-12 h3 color_purple">
						           		Web et presse écrite
						           </aside>
						           <aside class="col-xs-12 color_purple">
						           		<ul>
									        <li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Auto</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Sport</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Société</li>
									     </ul>   
						           </aside>
				         		</div>
				     		</div>
				      
				     	<!-- Description -->
						    <div class="description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       		
		                       <p ><h5 class="m_bottom_20 ">Quelques mots pour me décrire</h5></p>
		                       <p class="fw_light">{{ $journalist->description }}
		                       
		                       
		                       </p>
	                       
	                     	</div>  
	                     	
	                     	<!-- Expériences -->
	                     	<div class=" description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Expériences</h5></p>
		                       
		                       <div class="col-xs-6">
		                       		<p class="fw_ex_bold color_purple m_bottom_10 ">{{ $experience->title }}</p>
		                       </div>
		                       <div class="  col-xs-6">
		                       		<p class="t_align_r m_bottom_10 ">{{ $experience->start_date }} - {{ $experience->end_date }}</p>
		                       </div>
				                    <div >
				                       <p class="fw_light">{{ $experience->resume }}</p>
	                       			</div>
	                     	</div>  
							
							<!-- Portfolio -->
	                     	<div class=" col-sm-offset-4 description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Portfolio</h5></p>
		                       <p ><img class="img-responsive" src="images/pirate.jpg">             
		                       </p>
	                       
	                     	</div>  
							<!-- Formations -->
	                     	<div class="col-sm-offset-4 description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Formations</h5><!-- <textarea type="text" placeholder="Formation" id="organisation" name="organisation" class="r_corners color_grey w_full fw_light" value="@if( is_object( $formation ) && isset( $formation->organisation ) && ! old('organisation') ){{ $formation->organisation }}@else{{ old('organisation') }}@endif" required></textarea></p> -->
		                       <!-- organisation = cv -->
		                       <div class="col-xs-6">
		                       		<p class="fw_light">{{ $formation->organisation }}</p>
		                       </div>
		                        
	                       
		                       <p ><h5 class="m_bottom_20 ">Recommandations</h5></p>
		                       
		                       
	                       	</div>
	                       	<!-- Langues -->
	                     	<div class="col-sm-offset-4 description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Langues</h5></p>
		                       
		                       <!-- ajouter langues en dur-->
		                       
	                       	</div>

	                       	
	                     	 
      					</div> <!-- Fin de row -->
				</div>
			</div>
	</form>
@include('layouts.errors');

@endsection



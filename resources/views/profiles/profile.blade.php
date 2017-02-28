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

		             		 	<div class="col-xs-12 profile_photo ">
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

		             		  			<p ><i class="icon_size_4 icon-location-1"></i>{{ $journalist->location }}</p>
		             		  				<p ><i class=" profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-half-alt"></i>
		             		  			</p>
		             		  	</div>
		             		  	

		             		  </div>
		             		  <div class="row col-lg-4 col-md-4 col-sm-4 f_right m_bottom_10">
	             		   		<div class="col-xs-12">	
	             		   			<button class="button_type_3 color_purple r_corners tt_uppercase fs_medium m_top_20 tr_all f_left m_right_10 m_md_bottom_10 ">Contacter le journaliste</button>
	             		   		</div>
	             		   		<!-- Tarif / Dispo -->
	             		   		<iv class="col-xs-12">		
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
					             		   			<button type="button" class="m_bottom_20 btn btn-success btn-lg">Disponible</button><br>
			             		   				<!-- <input name="available" type="checkbox"></li> -->
			             		   				</ul>
			             		   			</li>
		             		   			</ul>		
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
						           	<aside class=" col-xs-12 h3 color_purple">
						           		Langues
						           	</aside>
						           	<aside class="col-xs-12 color_purple">
						           		<ul>
									        <li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Anglais</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Espagnol</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Russe</li>
									     </ul>   
						           	</aside>

				         		</div>
				     		</div>
				      
				     	<!-- Description -->
						    <div class="row  col-lg-8 col-md-8 col-sm-8  m_bottom_30">

							    <div class=" description col-xs-12 " >
		                       		
			                       	<p ><h5 class="m_bottom_20 ">Quelques mots pour me décrire</h5></p>
			                      	<p class="fw_light">{{ $journalist->description }}                     
			                       
			                       	</p>
		                       
		                     	</div>  
		                     	
		                     	<!-- Expériences -->
		                     	<div class="description col-xs-12 m_top_20" >
		                       
			                       <p ><h5 class="m_bottom_20 ">Expérience</h5></p>
			                       
			                       <div class="col-xs-6">
			                       		<p class="fw_ex_bold color_purple m_bottom_10 ">{{ $experience->title }}</p>
			                       </div>
			                       <div class="  col-xs-6">
			                       		<p class="t_align_r m_bottom_10 ">Du  {{ $experience->start_date }}  au  {{ $experience->end_date }}</p>
			                       </div>
					                    <div >
					                       <p class="fw_light">{{ $experience->resume }}</p>
		                       			</div>
		                     	</div>  
								
								<!-- Portfolio -->
		                     	<div class="description col-xs-12 m_top_20" >
		                       
			                       <p ><h5 class="m_bottom_20 ">Portfolio</h5></p>

			                       <div class="col-xs-6">
			                       	<p ><img class="img-responsive" src="images/journalist.jpg">        
			                       </p>
			                       </div>

			                       <div class="col-xs-6">
			                       	<p ><img class="img-responsive" src="images/journalist.jpg">        
			                       </p>
			                       </div>
		                       
		                     	</div>  
								<!-- Formations -->
		                     	<div class="description col-xs-12 m_top_20" >
		                       
			                       <p ><h5 class="m_bottom_20 ">Formations</h5></p>
			                       <div class="col-xs-6">
			                       		<p class="fw_light">{{ $formation->organisation }}</p>
			                       </div>
			                        
		                       
			                      
			                       
			                       
		                       	</div>

		                       	<div class="description col-xs-12 m_top_20" >
		                       	 <h5 class="m_bottom_20 ">Recommandations</h5>
		                       	 <p class="fw_light">
		                       	 Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram </p>
		                       	 </div>
		                       	 
		                       	
	                     	 
      					</div> 
					</div><!-- Fin de row -->
				</div>
		</div>
	</form>
@include('layouts.errors');

@endsection



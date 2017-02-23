@extends('welcome')

@section('content')
    
    <!-- 1ER BLOC presentation -->
             <div class="bg_light_3 section_offset_3">
	             <div class="container ">
	             	<div class="row">
	             		 <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
	             		 	<div class="row">

		             		 	<div class=" col-xs-12 profile_photo img-responsive ">
											<img src="images/journalist.jpg" alt="">
								</div>
							</div>	
	             		 </div>

	             		 <div class=" row fw_light col-lg-4 col-md-4 col-sm-4">
		             		  <div class=" col-xs-12 description   ">
		             		  	         <p >
		             		  				<h3 class="profil "> {{$journalist->firstname}} {{$journalist->lastname}}</h3>
		             		  				<h5 class="profil m_bottom_20">Rédacteur en chef</h5>
		             		  			</p>

		             		  			<p ><i class="icon_size_4 icon-location-1"></i>  Paris</p>
		             		  				<p ><i class=" profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-1"></i><i class="profil_i color_red icon-star-half-alt"></i>
		             		  			</p>
		             		  	</div>
		             		  	<div class="col-xs-12">		
		             		  			<ul class="list-inline">
			             		   			<li>Tarif</li>
			             		   			<li>Expérience</li>
			             		   			<li>Disponibilité</li>
	             		   				</ul>	

	             		   				<ul class="list-inline">
			             		   			<li>400 €</li>
			             		   			<li>5 ans</li>
			             		   			<li>immédiate</li>
	             		   				</ul>		
	             		   		</div>

		             		  </div>
		             		  <div class="row col-lg-4 col-md-4 col-sm-4 f_right m_bottom_10">
	             		   		<button class="button_type_3 color_purple r_corners tt_uppercase fs_medium m_top_20 tr_all f_left m_right_10 m_md_bottom_10 ">Contacter le journaliste</button>
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
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Tipiak</li>
									        <li class="tags button_type_1 color_blue transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Youporn</li>
									    </ul>   
						           </aside >

						           <aside class=" col-xs-12 h3 color_pink">
						           		Radio
						           </aside>

						           <aside class="col-xs-12 color_pink">
						           		<ul>
									        <li class="tags button_type_1 color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Histoire</li>
									        <li class="tags button_type_1 color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Société</li>
									        
									        <li class="tags button_type_1  color_pink transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Youporn</li>
									     </ul>   

						           </aside>
			          			 <aside class=" col-xs-12 h3 color_purple">
						           		Web et presse écrite
						           </aside>

						           <aside class="col-xs-12 color_purple">
						           		<ul>
									        <li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Auto</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Tipiak</li>
							        		<li class="tags button_type_1 color_purple transparent r_corners fs_medium tr_all f_left m_right_10 m_sm_bottom_10">Youporn</li>
									     </ul>   

						           </aside>
				         		</div>
				     		</div>
				      

				     		<!-- Description -->
						    <div class="description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Quelques mots pour me décrire</h5></p>
		                       <p class="fw_light">Je suis un marin d'eau douce voyageant en eaux troubles depuis ma plus tendre enfance et ayant écumé toutes les mers du Nord et de Navarre.<br>
		                       A la fois pirate et corsaire, les Tipiak et autres pâtés n'ont plus de secrets pour moi. <br><br>
		                       Spécialiste en Corona et limonade, je peux tout aussi bien réaliser un reportage sur la culture du houblon transgénique en Laponie du Sud qu'une immersion aux seins de YouPorn.
		                       
		                       
		                       </p>
	                       
	                     	</div>  
	                     	
	                     	<!-- Expériences -->
	                     	<div class="f_right description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Expériences</h5></p>
		                       
		                       <div class="col-xs-6">
		                       		<p class="fw_ex_bold color_purple m_bottom_10 ">Tipiak</p>
		                       </div>

		                       <div class="  col-xs-6">
		                       		<p class="t_align_r m_bottom_10 ">Novembre 2007 - Janvier 2012</p>
		                       </div>
				                    <div class="col-xs-12">
				                       <p class="fw_light">Pirate professionnel </p>
	                       			</div>
	                     	</div>  
							
							<!-- Portfolio -->
	                     	<div class=" f_right description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Portfolio</h5></p>
		                       <p ><img class="img-responsive" src="images/pirate.jpg">             
		                       </p>
	                       
	                     	</div>  

							<!-- Formations -->
	                     	<div class="f_right description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Formations</h5></p>
		                       
		                       <div class="col-xs-6">
		                       		<p class="fw_ex_bold color_purple m_bottom_10 ">WebForce3</p>
		                       </div>

		                       <div class="  col-xs-6">
		                       		<p class="t_align_r m_bottom_10 ">Novembre 2016 - Février 2017</p>
		                       </div>
				                    <div class="col-xs-12">
				                       <p class="fw_light">Développeur-intégrateur web </p>
	                       			</div>
	                     	</div>  

	                     	<!-- Recommandations -->
	                     	<div class="f_right description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Recommandations</h5></p>
		                       
		                       
	                       	</div>

	                       	<!-- Langues -->
	                     	<div class="f_right description col-lg-8 col-md-8 col-sm-8  m_bottom_30" >
	                       
		                       <p ><h5 class="m_bottom_20 ">Langues</h5></p>
		                       
		                       
	                       	</div>
	                     	 
      					</div> <!-- Fin de row -->

				</div>
			</div>

@endsection



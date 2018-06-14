<?php
$siteKey = '6LdEY14UAAAAAMKIlaQMDvuwKb6n1QTG1pc8Xjgp'; // votre clé publique
$secret = '6LdEY14UAAAAAG0Bf8x4PpNjZwgzSqcJlzikp2yD'; // votre clé privée
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<link rel="apple-touch-icon" sizes="57x57" href="images/favico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favico/avicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Updave, mise à jours et gestion de site internet</title>
<META NAME="Keywords" CONTENT="Site internet, mise à jours, gestion de site internet, integration site internet">
<meta name="description" content="Updave, prestation de service dans la mise à jours et gestion de site internet pour TPE et PME, retaurant, salon de coifure, Agence immo, etc...." />

<!--gogle font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
<!--fin gogle font-->



<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsiveslides.css" /><!--diapo-->
<link rel="stylesheet" type="text/css" href="css/menu.css" /><!--menu header version portable-->
<link rel="stylesheet" type="text/css" href="css/scrol.css" /><!--css scrol page-->
<link rel="stylesheet" type="text/css" href="css/style1.css" />

<!-- effet ici menu version portable -->



<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/formulaire.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--slider-->
  <script src="js/responsiveslides.min.js"></script>
  <script>
  $( "overlay overlay-hugeinc open .navmobile a" ).click(function( event ) {
  event.preventDefault();
  alert("coucou");
  $( this ).hide();
  
});
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        speed: 800
      }); 
	  
	     });
		
	
	
	/* ====== Add Smooth effect ===== */
$(function() {
  var scrollToAnchor = function( id ) {
    var elem = $("section[id='"+ id +"']"); // on crée une balise d'ancrage
    if ( typeof elem.offset()  === "undefined" ) { // on verifie si l'élément existe
		elem = $("#"+id); }
    if ( typeof elem.offset()  !== "undefined" ) { // si l'élément existe, on continue
      $('html, body').animate({
              scrollTop: elem.offset().top }, 600 );} // on défini un temps de défilement de page
  };
  $("a").click(function( event ) { // on attache la fonction au click
    if ( $(this).attr("href").match("#") ) { // on vérifie qu'il s'agit d'une ancre
      event.preventDefault();
      var href = $(this).attr('href').replace('#', '') // on scroll vers la cible
      scrollToAnchor( href ); }
  });
});
	
/* ====== Add current marker vertical nav / section ===== */
/*$('#op-verticalnav .op-v-link, #op-horizontalnav .op-v-link').click(function(){
    var href = $(this).attr('href');
	$('li .op-v-link.active').removeClass("active");
    $(this).addClass( "active" );
     return false;
});*/
/* ====== add class on pagination if the section is visible ====== */
$(document).scroll(function() {
    var cutoff = $(window).scrollTop() + 200; // on défini la position de déclenchement (*1)
    // Find current section and highlight nav menu
    var curSec = $.find('.current'); // on cherche l'élément (section) avec la class current
    var curID = $(curSec).attr('id'); // on récupère son ID
    var curNav = $.find('a[href=#'+curID+']'); // on cherche l'élément de navigation correspondant (*2)
	$('li .op-v-link').removeClass('active'); // on nettoie la navigation de la class active présente
    $(curNav).addClass('active'); // (*2) -> on ajoute la class active

    $('section').each(function(){
       if($(this).offset().top + $(this).height() > cutoff){ // si la section est dans le champ de scroll
            $('section').removeClass('current') // on nettoie les sections de la class current présente
            $(this).addClass('current'); // on ajoute la class current à la section visible
            return false; // on stoppe l'iteration (le cas contraire, seule la derniere section se verra ajoutée la class)
        }
    });
});
	
  </script>
    
<!-- fin slider-->


</head>

<body>
                             <!-- Start horizontal navigation -->
                             <div class="row">
                                <nav>
                                    <div id="op-horizontalnav">
                                        <ul class="op-sectionlist">
                                            <li class="op-v-item"><a class="op-v-link" href="#home">Accueil</a></li>
                                            <li class="op-v-item"><a class="op-v-link" href="#price">Prestations et tarifs</a></li>
                                            <li class="op-v-item"><a class="op-v-link" href="#about">Mon parcours</a></li>
                                            <li class="op-v-item"><a class="op-v-link" href="#contact">Contact</a></li>
                                       </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- end horizontal navigation -->

<div id="global">

                 
	<header>
   
     <div class="row">
                          <div class=" col-md-3 col-md-offset-1 col-xs-12 center"><img class="logo" src="images/Updave-tel.png" alt=""></div>
         				   <div class="col-md-4 picto col-xs-12 ">  
                           <p class="center slogan"><strong>Mise à jour et gestion de site internet</strong></p>                                
                             
                              
                          
				 </div>   
                  
                  <div class="col-md-4 col-xs-12 picto">
                   <p class="telhead center"> <a href="tel:0767934175">07 67 93 41 75</a></p>
                            <p class="facebook center">contact.updave@gmail.com</p>
                            
                            
                         </div>
                </div>
   <div class="row ">
           <div class="col-md-12 center hidden-lg  hidden-md ">
        <section>
           <button id="trigger-overlay" type="button">Menu</button>
        </section>
        </div>
 <div class="overlay overlay-hugeinc"><!-- effet ici -->
        <button type="button" class="overlay-close">Close</button>
            <nav class="navmobile">
                <ul>
                    <li><a href="#home">Accueil</a>&nbsp;</li>
                    <li><a href="#price">Tarifs et prestations</a>&nbsp;</li>
                    <li><a href="#about">Mon parcours</a>&nbsp;</li>
                    <li><a href="#contact">Contact</a>&nbsp;</li>
                </ul>
            </nav>
    </div>
    <!-- Start vertical navigation -->
<div id="op-verticalnav">
<ul class="op-sectionlist">
<li class="op-v-item"><a class="op-v-link" href="#home"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Retour vers accueil</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#price"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Prestations et services</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#about"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Mon parcour</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#contact"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Formulaire de contact</span></span></a></li>

</ul>
</div>

   <!-- script menu version portable -->
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
	     <div>
                         <ul class="rslides" id="slider1">
                            <li><img src="images/diapo/image1.jpg" alt=""></li>
                            <li><img src="images/diapo/image2.jpg" alt=""></li>
                            <li><img src="images/diapo/image3.jpg" alt=""></li>
                            <li><img src="images/diapo/image4.jpg" alt=""></li>
                        </ul>
                      </div>
          
     </header>
     
     
     
   <div id="home"></div>
        
     <div class="row hidden-xs">   
  <div class="separateur">&nbsp;</div>
</div>


        <div class="bloc2">
        
	 <div class="container">
    <h1>Modification et gestion de site pour TPE & PME</h1>
	<div class="row">
            <div class="col-md-4 col-md-offset-1 center">
           
            <img  class="img-responsive margimg" src="images/presentation.jpg" alt="Updave gestion de site internet prés d'orléans à la chapelle saint Mesmin." /></div>
            
             <div class="col-md-6 justify">
             <div class="item" data-aos="zoom-in">
             		<p><strong>Updave</strong> est une jeune T.P.E situé à la <strong>Chapelle Saint Mesmin</strong> dans le <strong>Loiret </strong>à côté <strong>d'Orléans</strong>, spécialisé dans la mise à jour et la gestions de site internet pour T.P.E et P.M.E.</p>
                    <p>Après une expèrience de 15 années dans le numérique d'on 11 ans comme webmaster au seins d'une grosse agence web, j'ai pus identifier les soucis rencontrer par les entrepreneurs liè à la maintenenance et à la mise à jours de leurs sites internet.</p>
                    <p>Le premiers souci est le manques de temps. Pour beaucoup d'entrepreneur la gestions d'un site internet est cronophage et compliqué après une journée de travail</p>
                    <p>le deuxièmes soucis est dus à un manque de connaissances techniques ou un souci avec l'outil informatique. Par exemple faire une belle mise en page, intégrer des photos aux bon format, etc....</p>
                    <p>le manque d'envis ( j'ai autre chose à faire ) .  </p>
                     
             </div>
               </div>
     </div>
     <p>&nbsp;</p> 
     <div class="row">
      <div class="col-md-7 justify "><p>Votre site internet est la vitrine de votre entreprise, même si vous ne faîtes pas de vente en ligne . Ce type de support vous permet de bénéficier d'une visibilité supplémentaire, d'ou l'importance de le tenir à jours.</p>
      <p><strong>Updave</strong> vous propose une solution d'accompagnement, de tranquilité et de conseil, afin de vous dégager du temps.</p>
      <p>Pour toute demande de renseignement vous pouvez nous contacter au: <strong>07 67 93 41 75</strong> ou par mail : <strong>contact.updave@gmail.com</strong></p>
  
       
      </div>
      <div class="col-md-4">
           
            <img  class="img-responsive margimg" src="images/cyber.jpg" alt="Updave gestion de site internet prés d'orléans à la chapelle saint Mesmin." />
            </div>
      </div>
            
        
    </div>

    </div>
          
           <div id="price"></div>
  <div class="separateur">&nbsp;</div>

<div class="bloc2">

    
    
    <!--Début  Modal -->
    
    
    <div id="myModal2" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est idéale pour de petite intervention qui nécessite une ou deux heures de travail.</p>
    <ul class="presta">
    <li>Modification texte</li>
    <li>Modification image</li> 
    </ul>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    
    
    
    <div id="myModal3" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    <div id="myModal4" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>

	<div id="myModal5" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    <div id="myModal6" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    
    <div id="myModal7" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    <div id="myModal8" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Pourquoi à l'heure ?</h4>
    </div>
    <div class="modal-body">
    <p>La prestation à l'heure est faite pour de petite intervention qui nécessite une ou deux heures de travail, comme par exemple changer une image changer du texte, retouche de mise en page.   </p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    
    <div id="myModal9" class="modal fade" role="dialog"> 
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Site one page</h4>
    </div>
    <div class="modal-body">
    <p>Rapide d'accés le site internet one page est ergonomique et très épuré, idéale pour un site vitrine pour présenter sont activité et ses services. Navigation rapide et agréable sur smartphone.</p>
    <p>Pour toute demande de renseignement : <strong>contact-updave@gmail.com</strong></p>
     <p><strong>Les points forts</strong></p>
     <ul class="presta">
  			<li>Ouverture rapide</li>
             <li>Ergonomique</li>
             <li>Information rapide d'accés</li>
             <li>Idéale pour smartphone</li>
	 </ul>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    
    </div>
    </div>
    
    
    
    
    
    
    


<!-- Fin madal -->

    <h2>Prestations et tarifs</h2>

    <div class="container">
    
        <div class="row">
            <div class="col-md-6 ">
				 <ul class="presta">
                    <li>Modification textes et images</li>
                    <li>Modification menus et cartes de restaurants</li>
                    <li>Intégration produits catalogue de vente en ligne</li>
                    <li>Intégration et conception de supports vidéo</li>
                    <li>Retouche charte graphique </li>
      
                </ul>
			</div>
            
            <div class="col-md-6 ">
				 <ul class="presta">
                    <li>Mise en page</li>
                    <li>Conseil d’ergonomie</li>
                    <li>Mise à jour réseaux sociaux</li>
                    <li>Référencement naturel</li>
                     <li>Réalisation site internet one page</li>
                </ul>
			</div>
          
        </div>


    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="encart">
            <h2>Tarif à l'heure</h2><p class="center"><span class="texte-tarif">50€</span></p>
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal2">En savoir plus </button>
            </div>
        </div>
   		 <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>Forfait 3h</h2><p class="center"><span class="texte-tarif">140€</span></p> 
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal3">En savoir plus </button>
            </div>
    	</div>
	 <div class="col-md-4 col-xs-12">
     	<div class="encart"><h2>Forfait 5h</h2><p class="center"><span class="texte-tarif">240€</span></p> 
    	<button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal4">En savoir plus </button>
        </div> 
     </div>
 </div> 
                
<div class="clear">&nbsp; </div>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>Forfait 7h</h2><p class="center"><span class="texte-tarif">300€</span></p> 
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal5">En savoir plus </button>
            </div> 
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>Plus de 7h</h2><p><span class="texte-tarif">Sur devis</span></p> 
            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal6">En savoir plus </button>
            </div>
         </div>
        <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>catalogue de vente en ligne </h2><p class="center"><span class="texte-tarif">Sur devis</span></p> <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal7">En savoir plus </button>
            </div> 
        </div> 
    </div>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>Forfait vidéo </h2><p class="center"><span class="texte-tarif">Sur devis</span></p>
             <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal8">En savoir plus </button>
            </div> 
        </div> 
        <div class="col-md-4 col-xs-12">
            <div class="encart"><h2>Creation site one page</h2><p class="center"><span class="texte-tarif">Sur devis</span></p>
             <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal9">En savoir plus </button>
            </div> 
        </div> 
        
    </div>

    </div> <!-- fin container--> 
          
</div><!-- fin bloc 2-->


<div id="about"></div>
     <div class="separateur">&nbsp;</div>
        
<div class="bloc2">
 <div class="container">
     
	<div class="row">
            <div class="col-md-4 col-md-offset-1 center">  <p>&nbsp;</p><img src="images/anonyme.png" alt="Updave gestion de site internet" /></div>
             <div class="col-md-6">
             <p>&nbsp;</p>
             	<p class="justify">
                 Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.

Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.

Ob haec et huius modi multa, quae cernebantur in paucis, omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur: Praetextatus ex urbi praefecto et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur.

Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.
                
                
                </p>
             </div>
      </div>

</div>

</div>


    <div id="contact"></div>
  <div class="separateur2">&nbsp;</div>

<div class="bloc1">

	
 	<h2>Me contacter</h2>
 
 <p>&nbsp;</p>

<div id="after_submit"><?php /*?><?php if ($_POST['envoi']) { ?> message envoyé <?php }elseif (!$_POST['envoi']){ ?> erreur <?php }; ?><?php */?></div>


<form id="contactForm" action="send_message.php" method="post" enctype="multipart/form-data">
  <div class="row">
  <div class="col-lg-6 col-xs-12">
  
  <label class="required" for="sujet">Sujet du message :</label><br />
    <input id="subject" class="input" name="subject" type="text" value="" size="30" /><br />
    
    <label  for="name">Votre nom:</label><br />
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    
<!--    <span id="name_validation" class="error_message"></span>-->
    
      <label  for="tel">Tél :</label><br />
    <input id="tel" class="input" name="tel" type="text" value="" size="30" /><br />
    
    <label class="required" for="email">Votre email:</label><br />
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />

    </div>
      <div class="col-lg-5 col-xs-12">
 <label  for="message">Votre message:</label><br />
    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    
    </div>
   </div>
      <p>&nbsp;</p>
      <div class="row">
          <div class=" center col-md-2 col-md-offset-3 col-xs-12">
                <div class="g-recaptcha" data-sitekey="6LdEY14UAAAAAMKIlaQMDvuwKb6n1QTG1pc8Xjgp"></div>
          
         </div>
         <div class="col-md-1"></div>
          <div class="col-md-3 col-xs-12"><br><input id="submit_button" type="submit" value="Envoyer" /></div>
 	 </div>
       <p>&nbsp;</p>
  		
          
      <!-- display the response returned after form submit
          <span class="response"></span>-->
</form>
       
 </div>

  <div class="separateur">&nbsp;</div>
  <p>&nbsp; </p>  
    
 <div class="bloc2">
	<h2>Mentions légales </h2>
 			<div class="container">
                 <div class="row">
					  <div class="col-md-12">
                       <p>Directeur de publication : Letaillieur David</p>
                       <p>Coordonées hébergeur: OVH , 2 rue Kellermann - 59100 Roubaix - France - Tel: 09 72 10 10 07</p>
                       <p>Non de l'entreprise : Updave ( Société en couveuse d'entreprise PES 45)</p>
                       <p>Siret couveuse: 399 385 236 00043</p>
                       <p>Site internet couveuse d'entreprise: <a href="http://www.pes45.org" target="_blank">http://www.pes45.org</a></p>
                       <p>Association loi 1901</p>
                     </div>
                     <p>&nbsp;</p>
           	  </div>
    		</div>
 
 </div>
 
 

 </div>	
   <div id="mentions"></div>
 
</body>
</html>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Gurqui</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gsdk.css" rel="stylesheet"/>
    
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--custom css-->
    <link href="style.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,500|Libre+Baskerville' rel='stylesheet' type='text/css'>
    
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
       
    
</head>
<body>
<?php  

      // check for a successful form post  
      if (isset($_GET['s'])) echo "<div class=\"alert alert-success alert-dismissible text-center\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>".$_GET['s']."</div>";  

      // check for a form error  
      elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger alert-dismissible text-center\" role=\"alert\">".$_GET['e']."</div>";  

?>

<nav class="navbar navbar-ct-azure navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
       <a class="navbar-brand" href="#">El Gurqui</a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" data-nav-image='assets/img/blog_1.png'>
     
      <ul class="nav navbar-nav navbar-right">
            <li class="active">
                <a href="#gurqui">
                     El gurqui
                </a>
            </li>
            <li>
                <a href="#menu">
                     Menú
                </a>
            </li>
            <li>
                <a href="#como-llegar">
                     Cómo llegar
                </a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#myModal">
                     Reservas
                </a>
            </li>
          
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Modal -->
   
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
     <div class="modal-dialog">
   
       <div class="modal-content">
   
         <div class="modal-header">
   
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   
           <h4 class="modal-title" id="myModalLabel">Reserva</h4>
   
         </div>
   
         <div class="modal-body">
   
           <form method="POST" action="contact-form-submission.php" role="form">
                       <div class="col-md-12">
           				
           				     <label>Nombre</label>
           				     <input type="text" value="" placeholder="" class="form-control" name="contact_name" id="input1" />
           				
                       </div>
                       <div class="col-md-12">
                         <label>Email o teléfono</label>
                         <input type="text" name="contact_email" id="input2" placeholder="" class="form-control">
                       </div>
						<div class="col-md-12">
						  <label>Cantidad de personas</label>
						  <select name="cant_personas" class="selectpicker" data-style="form-control" data-menu-style="">
						     
						         <option disabled selected> Escoger cantidad</option>
						     
						         <option value="1">1 </option>
						         <option value="2">2 </option>
						         <option value="3">3 </option>
						         <option value="4">4 </option>
						         <option value="5">5 </option>
						         <option value="6">6 </option>
						         <option value="7">7 </option>
						         <option value="8">8 </option>
						         <option value="9">9 </option>
						         <option value="10o+">10 o +</option>
						     
						     </select>
						</div>

                       <div class="col-md-12">
                       <label>Algo que agregar?</label>
                         <textarea name="contact_message" id="input4" placeholder="" class="form-control"></textarea>
                       </div>
                       <div class="col-md-12">
                         
                         <input type="hidden" name="save" value="contact"> 
                         <!--<button class="btn btn-round btn-info btn-lg" data-toggle="morphing" data-rotation-color="azure" type="submit">Enviar</button> -->
                         
                         <button type="submit" class="btn btn-primary">Enviar</button>
                       </div>
                     </form>

         </div>
   <div class="modal-footer">
   
           <!--<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
   
           <button type="button" class="btn btn-info btn-simple">Save</button>-->
   
         </div>
         
   
       </div>
   
     </div>
   
   </div><!--fin modal-->

<div class="wrapper">

	    
	    <div class="parallax">
	       <div class="container">
	            <figure><img src="assets/images/logo-gurqui.png" width="417" alt="Gurqui" /></figure>
	       </div><!--fin container--> 
	       <div class="parallax-image">
	            <img src="assets/images/bg-poster.jpg">
	        </div>
			<!--<div id="video_container">
		       <video preload autoplay loop id="bgvid" poster="assets/images/bg-poster.jpg">
		         <source src="assets/video/yc_skyline.mp4" type="video/mp4">
		         <source src="assets/video/yc_skyline.webm" type="video/webm">
		         <source src="assets/video/yc_skyline.m4v" type="video/m4v">
		           Tu navegador no sopora el tag de video
		       </video>
		     </div>  -->
		     
  		</div><!--fin parallax-->
    
    <div  id="gurqui" class="main">
        <div class="section">
        
        <div class="container">
        
        	<!--<h2>Gurqui</h2>-->
        	<p class="intro">Imagineu-vos una barreja entre un sopar de pel·lícula de Woody Allen i un paladar cubà. El Gurqui es troba en un d'aquells entresòls tan característics de l'Eixample, i està decorat de forma imaginativa com si fos una casa decorada amb mobles d'antiquari. Un local íntim i especial que només obre a les nits i convida a la tertúlia distesa mentre es gaudeix de la seva cuina, de les millors que es poden trobar a Barcelona.</p>
        	
        	<div class="row">
        		<div class="col-md-1 col-sm-1">
        		</div><!--fin col md 2-->
        		<div class="col-md-2 col-sm-1">
        		</div><!--fin col md 2-->
        		
        		<div class="col-md-2 col-sm-3 col-xs-12 perfil">
	        		<img src="assets/images/xesca.jpg" alt="Xesca, Sommelier" class="img-circle"/>  
	        		<p class="nombre">Xesca</p> 
	        		<p class="info">Sommelier</p>
        		</div><!--fin col md 2-->
        		<div class="col-md-2 col-sm-2">
        		</div><!--fin col md 2-->
        		
        		<div class="col-md-2 col-sm-3 col-xs-12 perfil">
	        		<img src="assets/images/albert.jpg" alt="Albert, Chef" class="img-circle"/>  
	        		<p class="nombre">Albert</p> 
	        		<p class="info">Chef</p>
        		</div><!--fin col md 3-->
        		
        		<div class="col-md-2 col-sm-1">
        		</div><!--fin col md 2-->
        		<div class="col-md-1">
        		</div><!--fin col md 2-->
        	
        	</div><!--fin row-->
        
       		</div><!--fin div gurqui-->
      
    
   
    <div class="container imagenes">
    	<div class="row">
    	
    		<div class="col-md-3 primera">
    			
    				<a class="fancybox" rel="gallery1" href="assets/images/img-puerta-big.jpg" >
    					<img src="assets/images/img-puerta.jpg" alt=" "/>  
    				</a>
    			
    				<a class="fancybox" rel="gallery1" href="assets/images/img-corchos-big.jpg" >
    				<img src="assets/images/img-corchos.jpg" alt=" "/>  
    				</a>
    		
    		</div><!--fin columna 3-->
    		
    		<div class="col-md-2 segunda">
    			<a class="fancybox" rel="gallery1" href="assets/images/img-patio-big.jpg" >
	    			<img src="assets/images/img-patio.jpg" alt=" "/>  
	    		</a>
    		</div><!--fin columna-->
    		
    		<div class="col-md-7 tercera">
    			<div class="row">
    				<div class="col-md-4 uno">
    				<a class="fancybox" rel="gallery1" href="assets/images/img-cervezas-big.jpg" >
    					<img src="assets/images/img-cervezas.jpg" alt=" "/>  
    				</a>	
    				</div><!--fin col md 4-->
    				
    				<div class="col-md-4 dos">
    					<a class="fancybox" rel="gallery1" href="assets/images/img-cucharones-big.jpg" >
    						<img src="assets/images/img-cucharones.jpg" alt=" "/>  
    					</a>
    				</div><!--fin col md 4-->
    				
    				<div class="col-md-4 tres">
    					<a class="fancybox" rel="gallery1" href="assets/images/img-mesa-big.jpg" >
    						<img src="assets/images/img-mesa.jpg" alt=" "/>  
    						</a>
    				</div><!--fin col md 4-->
    			
    			</div><!--fin row--> 
    			<div class="row">
    		
    				
    				<div class="col-md-6 cinco">
    					<a class="fancybox" rel="gallery1" href="assets/images/img-perchero-big.jpg" title="">
    					 <img src="assets/images/img-perchero.jpg" alt=" "/>  
    					 </a>
    				</div><!--fin col md 4-->
    				
    				<div class="col-md-6 seis">
    					<a class="fancybox" rel="gallery1" href="assets/images/img-corchos-big.jpg" title="">
    						<img src="assets/images/img-corchos.jpg" alt=" "/> 
    					</a>	 
    				</div><!--fin col md 4-->
    			
    			</div><!--fin row--> 
    		</div><!--fin columna-->
    		

    	</div><!--fin row-->
    	</div><!--fin container-->
    	
    	</div><!--fin section-->
    	</div><!--fin main-->
    	
    	<div id="menu" class="main carta">
    	
    		<h2>La Carta</h2>
    		
    		<div class="bg-carta">
    			<div class="container">
		    		<div class="row">
		    		
		    			<div class="col-md-4 col-sm-4 col-xs-12">
		    				<h3>Primeros</h3>
		    				<div class="col-md-12 marco-carta">
		    				</div><!--fin marco-->
		    			</div><!--fin col md 4-->
		    			<div class="col-md-4 col-sm-4 col-xs-12">
		    				<h3>2dos</h3>
		    				<div class="col-md-12 marco-carta">
		    				</div><!--fin marco-->
		    			</div><!--fin col md4-->
		    			<div class="col-md-4 col-sm-4 col-xs-12">
		    				<h3>Vinos</h3>
		    				<div class="col-md-12 marco-carta">
		    				</div><!--fin marco-->
		    			</div><!--fin md 4-->
		    		
		    		</div><!--fin row-->
		    	</div><!--fin container-->
	    	</div><!--fin bg carta-->
    	
    		
    	</div><!--fin main-->
    	
    	<div id="como-llegar" class="main contacto">
    	
    		<img src="assets/images/bg_contacto.jpg"  alt=" "/> 
    		
    		<div class="container">
    			<div class="col-md-6 col-md-offset-3">
    				<h3>Contacto y Reserva</h3>
    				<div class="btn-footer">
    				<a href="#" data-toggle="modal" data-target="#myModal" class="reserva-footer btn btn-primary btn-sm">
    				     Reserva Aquí
    				</a>
    				</div><!--fin div-->
    				
    				
	    				<div class="text">
		    				<p>c/ Mallorca 303. 08009, Barcelona</p>
		    				<p>+34 93 458 5216</p>
		    				<p class="mail">contacto@gurqui.com</p>
		    			</div><!--fin text-->	
	    				
    				<h3>Horarios</h3>
    					<div class="text">
    						<p><strong>De Martes a Sábado, a partir de las 20:00</strong></p>
    						</div><!--fin text-->
    				
    				<h3>Cómo llegar al Gurqui</h3>
    				
    				<ul class="nav nav-text" role="tablist">
    				<li class="active">
    				<a data-toggle="tab" role="tab" href="#description-horizontal" aria-expanded="true"> En Coche </a>
    				</li>
    				<li class="">
    				<a data-toggle="tab" role="tab" href="#special-horizontal" aria-expanded="false"> En Bicicleta </a>
    				</li>
    				<li class="">
    				<a data-toggle="tab" role="tab" href="#legal-horizontal" aria-expanded="false"> En Bus / Metro </a>
    				</li>
    				
    				</ul>
    				
    				<div class="tab-content">
    				<div id="description-horizontal" class="tab-pane active">
    				<p><strong>Si vienes subiendo por Diagonal: </strong><br/>
    				Toma Mallorca a la Izquierda, El Gurqui está entre Girona y Bruc.</p>
    				
    				<p><strong>Si vienes bajando por Diagonal:</strong> <br/>
    				Toma Bruc a la derecha y la primera es Mallorca. <br/>
    				Hay estacionamientos en la calle. </p>
    				</div>
    				<div id="special-horizontal" class="tab-pane">
    				<p>Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo.</p>
    				</div>
    				<div id="legal-horizontal" class="tab-pane">
    				<p>Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. </p>
    				</div>
    				
    				</div><!--fin tabs nav-->
    				
    				<div class="card card-background">
    				   
    			   	 <div class="map" id="map">
    			   	 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2992.9443591754266!2d2.1665993999999964!3d41.39701470000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smallorca+303+08009%2C+barcelona!5e0!3m2!1ses!2ses!4v1426280545455" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
    			   	 </div>
    				</div> <!-- end card -->
    			
    			</div><!--fin col-md 4-->
    		</div><!--fin container-->
    	
    		
    	</div><!--fin main-->

</body>
 
      <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
  
  	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  	
  	<!--  Plugins -->
  	<script src="assets/js/gsdk-checkbox.js"></script>
  	<script src="assets/js/gsdk-morphing.js"></script>
  	<script src="assets/js/gsdk-radio.js"></script>
  	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
  	<script src="assets/js/bootstrap-select.js"></script>
  	<script src="assets/js/bootstrap-datepicker.js"></script>
  	<script src="assets/js/chartist.min.js"></script>
      <script src="assets/js/jquery.tagsinput.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  	
  	 
  	 <script src="assets/js/demo.js"></script>
  	   
  	   	  
  	   
  	
  	  <!-- GSDK Pro functions -->
  	  <script src="assets/js/get-shit-done.js"></script>
  	  
  	  <script type="text/javascript">
  	      $().ready(function(){
  	          $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);
  	      });       
  	  </script> 
  	
  	<!-- Add fancyBox -->
  	<link rel="stylesheet" href="assets/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
  	<script type="text/javascript" src="assets/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
  	
  	<!-- Optionally add helpers - button, thumbnail and/or media -->
  	<link rel="stylesheet" href="assets/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
  	<script type="text/javascript" src="assets/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  	<script type="text/javascript" src="assets/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
  	
  	<link rel="stylesheet" href="assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  	<script type="text/javascript" src="assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>    
  	<script>
  	$(document).ready(function() {
  		$(".fancybox").fancybox({
  			openEffect	: 'none',
  			closeEffect	: 'none'
  		});
  	});
  	</script>
  	
  	<script>
  	/* smooth scrolling for nav sections */
  	$('ul.nav li>a').click(function(){
  	  var link = $(this).attr('href');
  	  var posi = $(link).offset().top;
  	  $('body,html').animate({scrollTop:posi},700);
  	});
  	</script>
  
         
    
</html>
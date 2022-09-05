<?php
session_start();
error_reporting(0);


?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title> home </title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="compte.css">
         <!--profile style  -->
        
        <link rel="stylesheet" href="stylehome.css" >
        <link rel="stylesheet" href="landing_page.css" >
        <link rel="stylesheet" href="footer.css" >
        
        <link rel="stylesheet" href="style_offres.css">
      
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
        
        

                         <!--w3schools-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





        <!-- Bootstrap CSS -->
       
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Responsive CSS --> 
    <link rel="stylesheet" href="css/responsive.css"> 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>
 
            
      
  
            <!-- navbar-->
            
                
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.jpg" style="border-radius:50% ; max-height:40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 " >
        
          <li class="nav-item">
            <a class="nav-link" href="#offres" >Offres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chambres"  >Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Restauration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"  >Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"  >Se Connecter</a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </nav>
                  <!-- ******************************************** -->
               
 

        <!-- slider -->

  <section class="home" id="home" >

    <div id="carouselExampleCaptions all" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
     <!-- here -->       <h5 class="animated bounceInRight" style="animation-delay: 1s;"><span class="A" style="color:white;font-size:35px;">Welcome in the best hôtel</span></h5>
        <!-- here -->     <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;"></p>
            <div class="animated bounceInRight py-3 " style="animation-delay: 2s;">
              <a href="#offres">
                 Offres
              </a>
            </div>         
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/11.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="animated bounceInRight" style="animation-delay: 1s;"><span class="A" style="color:white;font-size:35px;">For more information,contact us here </span></h5>
            <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;"></p>
            <div class="animated bounceInRight py-3" style="animation-delay: 2s;">
              <a href="#contact">
                  Contact
              </a>
            </div>         
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/3.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="animated bounceInRight" style="animation-delay: 1s;"></h5>
            <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s;"><span class="A" style="color:white;font-size:35px;">thank you for your visite </span></p>
            <div class="animated bounceInRight py-3" style="animation-delay: 2s;">
              <a href="index.php">
                Se Connecter
              </a>
            </div>         
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

   </section>
        
        
        
    <!-- offers_area_start -->   
    <div class="offers_area padding_top" id="offre">
        
 
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3 id="offres" >Offres</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/1.png" alt="">
                        </div>
                        <h3 >jusqu'à 35% de réduction sur <br>
                            les chambres et suites cluby</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>taille de 3 Adults et 2 enfants </li>
                            
                        </ul>
                        <a href="index.php" class="book_now " >reserver</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/2.png" alt="">
                        </div>
                        <h3 >jusqu'à 35% de réduction sur <br>
                            les chambres et suites cluby</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>taille de 3 Adults et 2 enfants </li>
                            
                        </ul>
                        <a href="index.php" class="book_now">reserver</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/3.png" alt="">
                        </div>
                        <h3 >jusqu'à 35% de réduction sur <br>
                            les chambres et suites cluby</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>taille de 3 Adults et 2 enfants </li>
                            
                        </ul>
                        <a href="index.php" class="book_now">reserver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- features_room_startt -->
    

    <div class="features_room" id="chambres">
        
        <div class="container">
            
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3 >Chambres</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">


            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/1.png" alt="Image">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span >D'aprés 250 MAD/nuit</span>
                            <h3>Chambre Superieur </h3>
                        </div>
                        <a href="index.php" class="line-button reserve"  name="" >reserver</a>
                    </div>
                </div>
            </div>
           
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>D'aprés $350/nuit</span>
                            <h3>chambre Deluxe</h3>
                        </div>
                        <a href="index.php" class="line-button" name="chambreDeluxe" id="chambre-deluxe" onclick="ajouter(this.id)">reserver</a>
                    </div>
                  
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>D'aprés $450/nuit</span>
                            <h3 >chambre de Signature</h3>
                        </div>
                        <a href="index.php" class="line-button"  id="chambreSignature"  >reserver</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span >D'aprés $550/nuit</span>
                            <h3>chambre des couples</h3>
                        </div>
                        <a href="index.php" class="line-button" id="chambrCeouple" >reserver</a>
                    </div>
                </div>
            </div> 
            
            
        </div>
    </div>
    <!-- features_room_end -->



	<!-- Start Menu -->
    

	<div class="menu-box  p-3 mb-5 bg-body padding_top " id="menu" style="margin-top:50px ;">
		<div class="container">
           
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h3>Restauration</h3>
						<h2 >Menu</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center" >
						<div class="button-group filter-button-group ms-auto">
							<button class="active menu-button" data-filter="*" role="tab" >All</button>
							<button   class="menu-button" data-filter=".drinks" role="tab" >Drinks</button>
							<button class="menu-button" data-filter=".lunch" role="tab" >Lunch</button>
							<button  class="menu-button" data-filter=".dinner" role="tab">Dinner</button>
						</div>
                        <!-- recherche -->
                        <form class="d-flex" >
                            <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search" id="search">
                            <a href="#" class="btn btn-outline-primary"  role="button" aria-disabled="false" accesskey="enter" id="searchButton" >Search</a>
                            <div id="suggestion"></div>
                          </form>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
            
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Jus de raisin </h4>
							<p>Made with love .</p>
                            <span class="d-flex justify-content-between">
							<h5>7 MAD</h5>
                            <a href="index.php" class="line-button reserve" >reserver</a>
                        </span>
						</div>
					</div>
                    
				</div>
				
				
        <div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Jus de Grenade</h4>
							<p> Made with Love.</p>
                            
                <span class="d-flex justify-content-between">
							    <h5>9 MAD</h5>
                  <a href="index.php" class="line-button reserve" id="grenade" >resrver</a>
                </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Jus Citron</h4>
							<p>jus de citron .</p>

                            <span class="d-flex justify-content-between">
							<h5>10 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="citron" >reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<h4>Burger</h4>
							<p> Made with Love </p>
                           
                            <span class="d-flex justify-content-between">
							<h5>15 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="viande" >reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Viande</h4>
							<p> Made with Love.</p>

                            <span class="d-flex justify-content-between">
							<h5>18 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="viande" >reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Poisson</h4>
							<p> Made with Love.</p>

                            <span class="d-flex justify-content-between">
							<h5>20 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="poisson" >reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Cake</h4>
							<p> Made with Love.</p>

                            <span class="d-flex justify-content-between">
							<h5>10 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="cake" >reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Sushi</h4>
							<p> Made with Love.</p>

                            <span class="d-flex justify-content-between">
							<h5>22 MAD</h5>
                            <a href="index.php" class="line-button reserve" id="sushi">reserver</a>
                            </span>

						</div>
					</div>
				</div>
				
                    <div class="col-lg-4 col-md-6 special-grid dinner">
                        <div class="gallery-single fix">
                            <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                            <div class="why-text">
                                <h4>Tajin</h4>
                                <p> Made with Love.</p>

                                <span class="d-flex justify-content-between">         
                                <h5>25 MAD</h5>
                                <a href="index.php" class="line-button reserve" id="tajin">reserver</a>
                                </span>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                            <img src="images/img-010.jpg" class="img-fluid" alt="Image">
                            <div class="why-text">
                                <h4 >soupe</h4>
                                <p>Made wihth love .</p>

                                <span class="d-flex justify-content-between">         
                                <h5>10 MAD</h5>
                                <a href="index.php" class="line-button reserve" id="tacos" onclick="ajouter(this.id)">reserver</a>
                                </span>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                            <img src="images/img-011.jpg" class="img-fluid" alt="Image">
                            <div class="why-text">
                                <h4 >Tacos</h4>
                                <p> Made with Love.</p>

                                <span class="d-flex justify-content-between">         
                                <h5>35 MAD</h5>
                                <a href="index.php" class="line-button reserve" id="pizza">reserver</a>
                                </span>

                            </div>
                        </div>
                    </div>
				
				
				
				
			
				
			</div>
		</div>
	</div>

</div>

</div>
</div>
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    </body>

    <?php require 'footer.php' ?>
    
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> 
<!-- *********************************-->
<script src="main.js"></script>    
<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
 
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>



<!--   about home  -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- fin about home -->


</html>
</doctype>
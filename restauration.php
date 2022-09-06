<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
        <title> compte </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="compte.css">
         <!--profile style  -->
        <link rel="stylesheet" href="profile.css" >
         <!-- facture style -->
        <link rel="stylesheet" href="facture.css">
    <!-- footer style -->
        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap CSS -->
       
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Responsive CSS --> 
    <link rel="stylesheet" href="css/responsive.css"> 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    
    
    <!--- rooms css-->
   <link rel="stylesheet" href="css_2/owl.carousel.min.css">
   <link rel="stylesheet" href="css_2/theme-default.css">
   <link rel="stylesheet" href="css_2/bootstrap.min.css">
    <link rel="stylesheet" href="css_2/magnific-popup.css"> 
    <link rel="stylesheet" href="css_2/font-awesome.min.css"> 
    <link rel="stylesheet" href="css_2/themify-icons.css">
    <link rel="stylesheet" href="css_2/nice-select.css">   
    <link rel="stylesheet" href="css_2/flaticon.css"> 
    <link rel="stylesheet" href="css_2/gijgo.css">
    <link rel="stylesheet" href="css_2/animate.css">
    <link rel="stylesheet" href="css_2/slicknav.css">
    <link rel="stylesheet" href="css_2/style.css">
 </head>  

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll" >
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="#" >Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " href="compte.php" >Offres</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link " href="compte.php" >Chambres</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" href="restauration.php" >
                              Restauration
                            </a>
                            </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link" href="reservation.php" >
                              Reservation
                            </a>
                            </li> -->
                            
                            
                            <!-- facture -->

                            <li class="nav-item">
                            <a class="nav-link" id="facture" href="#"  >
                                    
                                facture <img src="icon-facture1.jpg" width="20px">
                               
                            </a>
                          </li>
                        <!--compte-->
                            <li class="nav-item " id="compte-link">
                                <a class="nav-link " href="#compte-div"><img src="user.png" id="compte-img" alt="image compte"></a>
                            </li>
                                  
                         
                        </ul>

                        
                      </div>
                      
                      
                    </div>
                </nav>
                  <!-- ******************************************** -->
    </header> 




    <div class="menu-box shadow p-3 mb-5 bg-body rounded" id="menu">
		<div class="container">
           
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h3>Restauration</h3>
						<h2 style="font-family:'Times New Roman', Times, serif;">Menu</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center" >
						<div class="button-group filter-button-group mx-auto">
							<button class="active menu-button" data-filter="*" role="tab" style="font-family:'Times New Roman', Times, serif;">All</button>
							<button   class="menu-button" data-filter=".drinks" role="tab" style="font-family:'Times New Roman', Times, serif;">Drinks</button>
							<button class="menu-button" data-filter=".lunch" role="tab" style="font-family:'Times New Roman', Times, serif;">Lunch</button>
							<button  class="menu-button" data-filter=".dinner" role="tab" style="font-family:'Times New Roman', Times, serif;">Dinner</button>
						</div>
                        <!-- recherche -->
                        <form class="d-flex" >
                            <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search" id="search">
                            <a href="#" class="btn btn-outline-primary"  role="button" aria-disabled="false" accesskey="enter" id="searchButton" style="font-family:'Times New Roman', Times, serif;">Search</a>
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
							<h4  style="font-family:'Times New Roman', Times, serif;">Jus de Raisin</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
                            <span class="d-flex justify-content-between">
							<h5> $7</h5>
                            <a href="#" class="line-button reserve" id="reservation" id="raisin" onclick="ajouter(this.id)">ajouter au panier</a>
                        </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Jus de Grenade</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
                            
                            <span class="d-flex justify-content-between">
							    <h5> $9.79</h5>
                                <a href="#" class="line-button reserve" id="grenade" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Jus Citron</h4>
							<p>jus de citron .</p>

                            <span class="d-flex justify-content-between">
							<h5> $10.79</h5>
                            <a href="#" class="line-button reserve" id="citron" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<h4 style="font-family:'Times New Roman', Times, serif;">Burger</h4>
							<p> Made with Love </p>
                           
                            <span class="d-flex justify-content-between">
							<h5> $15.79</h5>
                            <a href="#" class="line-button reserve" id="burger" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Viande</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>

                            <span class="d-flex justify-content-between">
							<h5> $18.79</h5>
                            <a href="#" class="line-button reserve" id="viande" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Poisson</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>

                            <span class="d-flex justify-content-between">
							<h5> $20.79</h5>
                            <a href="#" class="line-button reserve" id="poisson" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Cake</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>

                            <span class="d-flex justify-content-between">
							<h5> $10</h5>
                            <a href="#" class="line-button reserve" id="cake" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-08.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Sushi</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>

                            <span class="d-flex justify-content-between">
							<h5> $22.79</h5>
                            <a href="#" class="line-button reserve" id="sushi" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4  style="font-family:'Times New Roman', Times, serif;">Tajin</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>

                            <span class="d-flex justify-content-between">         
							<h5> $24.79</h5>
                            <a href="#" class="line-button reserve" id="tajin" onclick="ajouter(this.id)">ajouter au panier</a>
                            </span>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
    
</body> 


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
 integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script>  




<script src="main.js"></script> 
<script src="procces.js"></script> 
   
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



    <!-- JS_2here -->
<script src="js_2/vendor/modernizr-3.5.0.min.js"></script>


<script src="js_2/popper.min.js"></script>
<script src="js_2/bootstrap.min.js"></script>
<script src="js_2/owl.carousel.min.js"></script>
<script src="js_2/isotope.pkgd.min.js"></script>
<script src="js_2/ajax-form.js"></script>
<script src="js_2/waypoints.min.js"></script>
<script src="js_2/jquery.counterup.min.js"></script>
<script src="js_2/imagesloaded.pkgd.min.js"></script>
<script src="js_2/scrollIt.js"></script>
<script src="js_2/jquery.scrollUp.min.js"></script>
<script src="js_2/wow.min.js"></script>
<script src="js_2/nice-select.min.js"></script>
<script src="js_2/jquery.slicknav.min.js"></script>
<script src="js_2/jquery.magnific-popup.min.js"></script>
<script src="js_2/plugins.js"></script>
<script src="js_2/gijgo.min.js"></script>


    
</html>
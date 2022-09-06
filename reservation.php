
<?php session_start() ;
require  'db.class.connect.php' ;

require  'facture.php' ;
$DB = new DB();
$facture= new facture($DB) ;

?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>reservation</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="reserve/bootstrap.min.css">    
    
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
			<link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
        
   
	<!-- < Site CSS reserve -->
    <link rel="stylesheet" href="css/style.css">    
	<!--  Pickadate CSS reserve -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!--  Responsive CSS reserve -->
    <link rel="stylesheet" href="reserve/responsive.css">
    <!--  Custom CSS reserve -->

	<link rel="stylesheet" href="landing_page.css">  
	<link rel="stylesheet" href="stylehome.css">  
	<link rel="stylesheet" href="compte.css">
	<link rel="stylesheet" href="profile.css" >



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.jpg" style="border-radius:50% ; max-height:40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 " >
           <!-- facture -->
            <li class="nav-item">
                <a class="nav-link" id="facture" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    
                     Facture <img src="icon-facture1.jpg" width="20px">
                               
                </a>
             </li>
          <li class="nav-item">
            <a class="nav-link" href="compte.php" >Offres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compte.php"  >Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compte.php">Restauration</a>
          </li>
          <!--compte-->
            <li class="nav-item " id="compte-link">
                <a class="nav-link " href="#compte-div"><img src="user.png" id="compte-img" alt="image compte" width="30px"></a>
            </li>
          
        </ul>
       
      </div>
    </div>
  </nav>
</header>
				 <!-- profile -->
				 <div class="hide action " id="compte-div">
                        <div class="profile">   
                        <img src="" alt="" >
                  </div> 
                  <div class="menu">
                      <h3><?php echo $_SESSION['username']; ?></h3>
                      <ul>
                          
                          <li><img src="settings.png" alt="">  <a href="change-password.php" > Parametre </a> </li>
                          <li><img src="log-out.png" alt=""> <a href="logout.php"  > Logout </a> </li>
                      </ul>
                  </div>
</div>

				<!-- Modal -->
<div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody">
          
          <!-- <form method="POST" action="facture.php" > -->

              <table  cellspacing="1" cellpadding="10" >      
                  <thead>
                      <tr>
                          <th width=40%>produit</th>
                          <th width=20%>prix</th>
                          <th width=20%>quantité</th>
                          <th width=20%>option</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                
                    <?php 
                // affichage des chambres reserver
                                $idsCh= array_keys($_SESSION['chambre']) ;
                                if(empty($idsCh)){
                                    $rooms= array();
                                }
                                else {
                                    $rooms = $DB->query('SELECT * FROM chambre where id_chambre IN ('.implode(',',$idsCh).')') ;

                                      
                                }
            
            
            
                                foreach($rooms as $room): 
                                                ?>
                                <tr>
                                    <td width=40%><?= $room->nom ?></td>
                                    <td width=20%><?= $room->prix ?> MAD</td>
                                     <td width=20%> <?= $_SESSION['chambre'][$room->id_chambre]?> </td>
                                    <td width=20%><a href="compte.php?delChambre=<?=$room->id_chambre ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td> 
                                </tr>
                    <?php endforeach ; ?>

                    <?php 
                            
                            // affichage de menu 
                            $ids= array_keys($_SESSION['facture']) ;
                            if(empty($ids)){
              $prod = array();
            }
            else {
                $prod = $DB->query('SELECT * FROM menu where id IN ('.implode(',',$ids).')') ;

                
            }
            
            
            
            foreach($prod as $p): 
                ?>
                                <tr>
                                    <td width=40%><?= $p->nom ?></td>
                                    <td width=20%><?= $p->prix ?> MAD</td>
                                     <td width=20%> <?= $_SESSION['facture'][$p->id]?></td>
                                    <td width=20%><a href="compte.php?delMenu=<?=$p->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td> 
                                </tr>
                                <?php endforeach ; ?>    
                    

                     
                            
                           
                            
                            


        
                    
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="modal-footer justify-content-between ">
                        <div><p>total :<span id="total"><?=$facture->total()?></span> MAD </p></div>
                        <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="reservation.php"><button type="button" class="btn btn-primary" id="valider" >valider</button></a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center padding_top">
						<h2></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6 text-center mx-auto">
									<h3>Reserver</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input id="input_date" class="datepicker picker__input form-control" name="date" type="text" value="" equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input id="input_time" class="time form-control picker__input" required data-error="Please enter time">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person" onchange="nb_personne()">
											  <option disabled selected>Select Person*</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-6 mx-auto">
		
									
										<div class="submit-button text-center"><div></div>
											<input class="btn btn-common " type="submit" id="reserve" value="Resever Maintenant" onclick="confirm('reservation effectuée ')" >
											<div id="msgSubmit" class="h3 text-center hidden"></div> 
											<div class="clearfix"></div> 
										</div>
									</div>
								</div>
								
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
	
	<!-- End Reservation -->
<script>
	function nb_personne(){
		var select=document.getElementById('person');
		var nb_p = select.options[select.selectedIndex].value ;
		$.get("reservation.php",{nb_person: nb_p }).done() ;
					
	}
	
	
		
		

	
</script>
<?php if(isset($_GET['nb_person'])){
			$peronne = $_GET['nb_person'] ;
			
		}
	if(isset($_GET['date'])){
		
		if(isset($_SESSION['chambre'])){

			foreach ($_SESSION['chambre'] as $chambre){

				$DB->query("INSERT INTO reservation(id_user,date_res,produit_chambre) VALUES ('".$_SESSION['id']."','".$_GET["date"]."',".$chambre.")") ;
			}
		}
		if(isset($_SESSION['facture'])){
			
			foreach ($_SESSION['facture'] as $menu){

				$DB->query("INSERT INTO reservation(id_user,date_res,produit_menu) VALUES ('".$_SESSION['id']."','".$_GET["date"]."',".$menu.")") ;
			}
		}
		

	} 
	
	
	?>

	<!-- start payment -->
	<div class="row">
		<div class="text-center mx-auto col-lg-5">
	 <div id="paypal-button-container" class ="text-center  "></div>
	</div>
	</div>



	
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>avis des clients</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>

				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>

	<!-- End Customer Reviews -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://www.paypal.com/sdk/js?client-id=AdwlNXA5hVK36KLw1Vb3lyL2iVjeal6klVtYzTlV3B3UWHKAPWpcSDOnmW5mKWnasfBYl30nEPuWQMFZ"></script>
<script src="paypal.js"></script>
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

	<script src="main.js"></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
 integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script> 

</body>
</html>

<?php
session_start();
require  'db.class.connect.php' ;
require  'facture.php' ;
$DB = new DB();
$facture= new facture($DB) ;
// $chambre = new chambre($DB) ;



     // connection to data base
     //include 'db_connect.php';



?>
<?php 
if(isset($_GET['delMenu'])){
    
    $facture->delMenu($_GET['delMenu']) ;
}
if(isset($_GET['delChambre'])){
    
    $facture->delChambre($_GET['delChambre']) ;
    
}
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title> compte </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- 
            google fonts
         -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="compte.css">
         <!--profile style  -->
        <link rel="stylesheet" href="profile.css" >
         
       
        <!-- footer css  -->
        <link rel="stylesheet" href="footer.css" >
        


        <!-- footer style -->
        
        <link rel="stylesheet" href="stylehome.css">
        <link rel="stylesheet" href="landing_page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">   
        
        

         
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Responsive CSS --> 
    <link rel="stylesheet" href="css/responsive.css"> 
    
    
    <link rel="stylesheet" href="style_offres.css">
    


    </head>
    <body>

    
  
<div class="container-fluid" >
            
      
 
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
            <a class="nav-link" href="#offres" >Offres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chambres"  >Chambres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Restauration</a>
          </li>
          <!--compte-->
            <li class="nav-item " id="compte-link">
                <a class="nav-link " href="#compte-div"><img src="user.png" id="compte-img" alt="image compte" width="30px"></a>
            </li>
          
        </ul>
       
      </div>
    </div>
  </nav>
                  <!-- ******************************************** -->
            

    
  
      <div class="container-fluid bg-body">


        
    <!-- offers_area_start -->   
    <div class="offers_area padding_top" id="offre">
       
    
             <!-- profile -->
                <div class="hide action " id="compte-div">
                        <div class="profile">   
                        <img src="" alt="" >
                  </div> 
                  <div class="menu">
                    
                      <ul>
                          
                          <li><img src="settings.png" alt="">  <a href="change-password.php" > Parametre </a> </li>
                          <li><img src="log-out.png" alt=""> <a href="logout.php"  > Logout </a> </li>
                      </ul>
                  </div>

                </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3 id="offres">Offres</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/1.png" alt="">
                        </div>
                        <h3>jusqu'à 35% de réduction sur <br>
                            les chambres et suites cluby</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>taille de 3 Adults et 2 enfants </li>
                            
                        </ul>
                        <a href="#" class="book_now " >reserver</a>
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
                        <a href="#" class="book_now">reserver</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/3.png" alt="">
                        </div>
                        <h3>jusqu'à 35% de réduction sur <br>
                            les chambres et suites cluby</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>taille de 3 Adults et 2 enfants </li>
                            
                        </ul>
                        <a href="#" class="book_now">reserver</a>
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
            <?php 
                $rooms = $DB->query("SELECT * FROM chambre ") ;
            
                foreach($rooms as $room ) :
            ?>

            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/<?= $room->id_chambre ?>.png" alt="Image">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span >D'aprés <?= $room->prix ?> MAD/nuit</span>
                            <h3  ><?= $room->nom ?></h3>
                        </div>
                        <a href="process.php?id_chambre=<?= $room->id_chambre?>" class="line-button reserve"  name="" >reserver</a>
                    </div>
                </div>
            </div>
            <?php endforeach ; 
            
            ?>
            
        </div>

    </div>
    <!-- features_room_end -->
    

    <div class="menu-box  p-3 mb-5 bg-body rounded padding_top" id="menu" style="margin-top:50px ;">
		<div class="container">
           
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h3>Restauration</h3>
						<h2>Menu</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center" >
						<div class="button-group filter-button-group mx-auto">
							<button class="active menu-button" data-filter="*" role="tab" >All</button>
							<button   class="menu-button" data-filter=".drinks" role="tab" >Drinks</button>
							<button class="menu-button" data-filter=".lunch" role="tab" >Lunch</button>
							<button  class="menu-button" data-filter=".dinner" role="tab" >Dinner</button>
						</div>
                        <!-- recherche -->
                        <form class="d-flex" >
                            <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search" id="search">
                            <a href="#" class="btn btn-outline-primary"  role="button" aria-disabled="false" accesskey="enter" id="searchButton" style="font-family:'Times New Roman', Times, serif;">Search</a>
                            <!-- <div id="suggestion"></div> -->
                          </form>
					</div>
				</div>
			</div>
            
				
			<div class="row special-list">
                <!-- affichage des elements de menu qui existe dans la base de donnees  -->
            
    
                

                 
                
                    
                   
                       
                
            <?php
                $products = $DB->query("SELECT * FROM menu ");
                // var_dump($products);
                foreach($products as $product):  
            ?>
				<div class="col-lg-4 col-md-6 special-grid <?= $product->categorie ?>">
					<div class="gallery-single fix">
						<img src="images/img-0<?= $product->id ?>.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4><?= $product->nom ?></h4>
							<p>Made with love .</p>
                            <span class="d-flex justify-content-between">
							<h5><?= $product->prix?> MAD</h5>
                            <a href="process.php?id=<?=$product->id ?>" class="line-button reserve" >ajouter au facture</a>
                        </span>
						</div>
					</div>
                    
				</div>
				<?php  endforeach  ; ?>
                <?php
                   
                // if(isset($_GET['id'])){
                //     $produit = $DB->query('SELECT id FROM menu WHERE id=:id',array('id' => $_GET['id'])) ;
                    
                //     // var_dump($produit);

                //     if(empty($produit)){
                //         die("se produit n'exite pas ") ;
                //     }
                    
                //      $facture->add($produit[0]->id) ;
                //     // die('le produit a ete bien ajouter a votre facture') ;
                //     // var_dump($_SESSION['facture']);
                // }

                
                // ?>
                



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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
 integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script>       


<!-- *********************************-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="main.js"></script> 


   
<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>

	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	
	
    
    <script src="js/custom.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.time.js"></script>
    <script src="js/picker.date.js"></script>

<!-- JS_2here -->





<script>


// ajouter() ;
// function ajouter(){
//     $.ajax({
//         method:"GET",
//        url:'facture.php',
//        data:{name:id},
//        success:function(data){
//                $('tbody').append(data);
//               console.log(data);
              
//            },
//        error:function(){
//            alert(' data not succesed ')
//        }
//     }) 

// // }

// (function)($){
//     $('.reserve').click(function(event){
//      event.preventDefault();
//      $.Ajax(
//          url:$(this).attr('href'),
//          method="GET",
//          data;{},
//          success:function(reponse){
//              console.log(reponse);
//          }
//      )
//      )}
// }
(function($){
    $('.reserve').click(function(event){
     event.preventDefault();
    $.get($(this).attr('href'),{},function(data){
      
        if(data.error){
            alert(data.message);
        }
        else {
            if(data.message){
                
               
                swal({
                    title:'',
                    text:data.message,
                    icon:'success',
                    
                    buttons:true 
                    
                }).then((ok)=> {
                    if(ok){
                        location.href="compte.php" ;
                    }
                })
                   
                    
            
            }
                
            }
            
            
        
    },'json');
    
})
return false ;
})(jQuery) ;
// $('.swal-button').click(function(){
//     location.href='compte.php';
//     console.log('data');
// })



    </script>


</html>

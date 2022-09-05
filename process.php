<?php
require  'db.class.connect.php' ;
    require  'facture.php' ;
    $DB = new DB();
    $facture= new facture($DB) ;
    $json = array('error' => true ) ;
    

    if(isset($_GET['id'])){
        $produit = $DB->query('SELECT id FROM menu WHERE id=:id',array('id' => $_GET['id'])) ;
                    
                    // var_dump($produit);

            if(empty($produit)){
                 $json['message'] ="ce produit n'existe pas " ;
            }
                    
           
            
            $facture->addMenu($produit[0]->id) ;
            $json['error']= false ;
             $json['total']= $facture->total() ;
            $json['message'] ="le produit a bien été ajouté à votre facture " ;


            
            
            
        }
    if(isset($_GET['id_chambre'])){
            $room = $DB->query('SELECT id_chambre FROM chambre WHERE id_chambre=:id_chambre',array('id_chambre' => $_GET['id_chambre'])) ;
                       
    
                if(empty($room)){
                     $json['message'] ="ce produit n'existe pas " ;
                }
                        
               
                 $facture->addChambre($room[0]->id_chambre) ;
                $json['error']= false ;
                //   $json['total']= $facture->total() ;
                $json['message'] ="le produit a bien été ajouté à votre facture " ;
     }

               

    if(isset($_GET['payment'])){
        $DB->query("INSERT INTO facture(id_user,montant,date) VALUES ('".$_SESSION['id']."','".$facture->total()."','".date('d-m-Y')."')") ;
        unset($_SESSION['facture']);
        unset($_SESSION['chambre']);
        header('Location : reservation.php');
    } 
        
echo json_encode($json);
                
?>
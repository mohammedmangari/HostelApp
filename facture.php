 
<?php 

class facture{

  private $DB ;
  public function __construct($DB){
    if(!isset($_SESSION)){
      session_start();
    }
    if(!isset($_SESSION['facture']) || !isset($_SESSION['chambre']) ){
      $_SESSION['facture']=array();
      $_SESSION['chambre']=array();
       
    }
    $this->DB = $DB  ;
    
    
  }

  public function total(){
    $total = 0 ;
    $ids= array_keys($_SESSION['facture']) ;
    $idsCh= array_keys($_SESSION['chambre']) ;
  
          if(empty($ids)){
              $products = array();
              
          }else{
            $products = $this->DB->query('SELECT id,prix FROM menu where id IN ('.implode(',',$ids).')') ;

          }
          if(empty($idsCh)){
            $rooms = array() ;
          }
          else {
              $rooms = $this->DB->query('SELECT id_chambre,prix FROM chambre where id_chambre IN ('.implode(',',$idsCh).')') ;
       
          } 
          foreach($products as $product){
            $total += $product->prix * $_SESSION['facture'][$product->id] ;
          }
          foreach($rooms as $room){
            $total += $room->prix * $_SESSION['chambre'][$room->id_chambre] ;
          }
          

          return $total ;
  }
public function addMenu($idProduct){
  if(isset( $_SESSION['facture'][$idProduct])){
    $_SESSION['facture'][$idProduct]++ ;
  }
  else{
    $_SESSION['facture'][$idProduct] = 1 ;
    
  }
  
}
public function addChambre($idProduct){
  if(isset( $_SESSION['chambre'][$idProduct])){
    $_SESSION['chambre'][$idProduct]++ ;
  }
  else{
    $_SESSION['chambre'][$idProduct] = 1 ;
    
  }
  
}

public function delMenu($idProduct){
  unset($_SESSION['facture'][$idProduct]) ;
}

public function delChambre($idProduct){
  unset($_SESSION['chambre'][$idProduct]) ;
}
} 


?>

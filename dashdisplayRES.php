<?php

include "config.php";

if(isset($_POST['RES'])){
    
        $table='<div class="table-responsive py-3">
      <table class="table table-striped table-sm">
        <thead>
               <tr>
                <th scope="col">Numero de commend</th>
                <th scope="col">Client</th>
                <th scope="col">date</th>
                <th scope="col">Produit </th>
                <th scope="col">prix</th>
                <th scope="col" colspan="2"> <span style="padding-left:25%"></span>OPERATIONS</th>
                </tr>
  
        </thead>';

        $select="SELECT  p.id, p.produit_menu, u.username ,  p.date_res, m.nom, m.prix FROM reservation p JOIN menu m ON p.produit_menu = m.id JOIN users u on u.id = p.id_user;";
        $res=mysqli_query($conn,$select);

        
        while($row=mysqli_fetch_assoc($res)){
            
         $table.='<tr>
                  <td>'.$row["produit_menu"].'</td>
                  <td>'.$row["username"].'</td>
                  <td>'.$row["date_res"].'</td>
                  <td>'.$row["nom"].'</td>
                  <td>'.$row["prix"].'</td>
                  <td style="padding-left:10px"><button class="btn btn-outline-primary " style="font-size:13px; color: black;"  onclick="UpdateRES('.$row['id'].')" ><span><img src="Update.gif" width="30px"/></span></button></td>  
                  <td><button class="btn btn-outline-warning " style="font-size:14px; color: black;"   onclick="DeleteRES('.$row['id'].')" ><span><img src="Delete.gif" width="30px" /></span></button></td>
                </tr> 
          ';
          
        }
        $table.='</table></div>';      
        echo $table;
}


?>

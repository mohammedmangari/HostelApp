<?php

include "config.php";

if(isset($_POST['Displaysend'])){
    $table='<div class="table-responsive py-3">
      <table class="table table-striped table-sm">
        <thead>
               <tr>
                <th scope="col">image</th>
                <th scope="col">Repas</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Prix (Dhs)</th>
                <th scope="col" colspan="2"> <span style="padding-left:25%"></span>OPERATIONS</th>
                </tr>
  
        </thead>';

        $select="SELECT * FROM menu group by  categorie ,nom ";
        $res=mysqli_query($conn,$select);
        
        
        while($row=mysqli_fetch_assoc($res)){
            
         $table.='<tr>
         <td><a href="http://localhost/GET_PAST/projet_dev_web_log_in_page/projet1/login_register/'.$row['image'].'"><img src='.$row['image'].' width="50px" alt="insert image"></a></td>
                  <td>'.$row["nom"].'</td>
                  <td>'.$row["categorie"].'</td>
                  <td>'.$row["prix"].'</td>
                  <td style="padding-left:10px"><button class="btn btn-outline-primary " style="font-size:13px; color: black;"  onclick="UpdateProdact('.$row['id'].')" ><span><img src="Update.gif" width="30px"/></span></button></td>  
                  <td><button class="btn btn-outline-warning " style="font-size:14px; color: black;"   onclick="DeleteProdact('.$row['id'].')" ><span><img src="Delete.gif" width="30px" /></span></button></td>
                </tr> 
          ';
          
        }
        $table.='</table></div>';      
        echo $table;
}


/* 
data-bs-toggle="modal" data-bs-target="#checkdel"
<div class="modal fade" id="checkdel" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    Show a second modal and hide this one with the button below.
    </div>
    <div class="modal-footer">
    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" onclick="DeleteProdact('.$row['id'].')" >Open second modal</button>
    </div>
</div>
</div>
</div>
*/


?>

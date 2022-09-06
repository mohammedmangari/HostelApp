<?php

include "config.php";
if(isset($_POST['DFACT'])){
         $table='<div class="table-responsive py-3">
          <table class="table table-striped table-sm">
           <thead>
             <tr>
                <th scope="col">Numero de Facture</th>
                <th scope="col">Numero de client</th>
                <th scope="col">Date</th>
                <th scope="col">Montant(Dhs)</th>
              
                <th scope="col" colspan="2"> <span style="padding-left:25%"></span>OPERATIONS</th>
                </tr>
        </thead>';

        $select="SELECT * FROM facture group by id";
        $res=mysqli_query($conn,$select);

        
        while($row=mysqli_fetch_assoc($res)){
            
         $table.='<tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["id_user"].'</td>
                  <td>'.$row["date"].'</td>
                  <td>'.$row["montant"].'</td>
                  
                  <td style="padding-left:10px"><button class="btn btn-outline-primary " style="font-size:13px; color: black;"  onclick="UpdateFC('.$row['id'].')" ><span><img src="Update.gif" width="30px"/></span></button></td>  
                  <td><button class="btn btn-outline-warning " style="font-size:14px; color: black;"   onclick="DeleteFACT('.$row['id'].')" ><span><img src="Delete.gif" width="30px" /></span></button></td>
                </tr>              
          ';
          
        }
        $table.='</table></div>';      
        echo $table;
}else{
  echo "no";
}

?>


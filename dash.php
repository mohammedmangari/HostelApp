
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>friend's hotel</title>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" class="">

  <!--  -->
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

  

  <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes"16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<lin rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
<link rel="stylesheet" href="assets/bootstrap/bootstrap4-alpha3.min.css">


		
<style>
@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&display=swap');
table{
  font-family: 'Advent Pro', sans-serif;
font-family: 'Alata', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Secular One', sans-serif;1
}

			body {
				background-color: #fafafa;
				font-size: 16px;
				line-height: 1.5;
      }


      h1,h2,h3,h4,h5,h6 {
				font-weight: 400;	
			}
			
			#header {
				border-bottom: 5px solid #37474F;
				color: #37474F;
				margin-bottom: 1.5rem;
				padding: 1rem 0;
			}

    
			


</style>

  <!--  -->

</head>
<body>

<?php

include 'config.php';

?>









<!-- Modal -->
<div class="modal fade" id="Ajoute_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajoute</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="mb-3">
            <label for="IName" class="form-label">Produit:</label><input type="text" class="form-control" name="Name" id="IName" />
        </div>  
        <div class="mb-3">
            <label for="Iprix" class="form-label">Prix:</label><input type="text" class="form-control" name="prix" id="Iprix"/>
        </div>
        <div class="mb-3">
            <label for="Isize" class="form-label">Size:</label><input type="text" class="form-control" name="size" id="Isize"/>
        </div>
        <div class="mb-3">
            <label for="Imag" class="form-label">Image:</label><input type="file" class="form-control" name="imag" id="Imag"/>
        </div>
        <div class="modal-footer">
        <input id="submit" type="button" class="btn btn-submit btn-primary"  value="Submit" />
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <input type="reset" value="Reset"  class="btn btn-warning" >
        </div>
    </form>

      </div>
    </div>
  </div>
</div>
  
<!-- end -->





<!-- Modal -->
<div class="modal fade" id="Update_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="mb-3">
            <label for="UName" class="form-label">Produit:</label><input type="text" class="form-control" name="Name" id="UName" />
        </div>  
        <div class="mb-3">
            <label for="Uprix" class="form-label">Prix:</label><input type="text" class="form-control" name="prix" id="Uprix"/>
        </div>
        <div class="mb-3">
            <label for="Usize" class="form-label">Size:</label><input type="text" class="form-control" name="size" id="Usize"/>
        </div>
        <div class="mb-3">
            <label for="UImag" class="form-label">Image:</label><input type="file" class="form-control" name="imag" id="UImag"/>
        </div>
        <div class="modal-footer">
        <input id="update" type="button" class="btn btn-submit btn-primary" onclick="updateprd()"  value="Update" />
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <input type="reset" value="Reset"  class="btn btn-warning" >

        <input type="hidden" id="hiddendata">
        </div>
    </form>

      </div>
    </div>
  </div>
</div>
  
<!-- end -->











<!-- end -->


<!-- navbare -->
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><span style="color:#FFC107">friend's</span> <span style="color:rgb(102, 102, 214);">hotel</span></a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <div class="w-100"></div>
      <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                 <a class="nav-link px-3" href="../index.php">Se déconnecter</a>
            </div>
      </div>
</header>
<!-- end navbar -->


<!--dashboard-->
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashbord.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash2.php">
              <span data-feather="file"></span>
              Commandes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Restauration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash3.php">
              <span data-feather="users"></span>
              Employeurs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash4.php">
              <span data-feather="bar-chart-2"></span>
              Factures
            </a>
          </li>
          
        </ul>

       <!-- Reports-->


       
        <ul class="nav flex-column mb-2">
          
          <li class="nav-item">
            <a class="nav-link py-5" href="#">
              <img src="dashimg/fd.png" style="padding-top:60px; padding-right:40px" width="200px">
            </a>
          </li>
        </ul>
      </div>

    </nav>
  <!-- end dashboard -->


  <!-- main -->
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     




<br>
<br>

<!-- with ajax and jquery -->
   
                  <div class='container'>
                          <div class='row' id='RESTORATION'>
                              <div class='h1 col-6' style='color:#37474F '>Restauration</div>
                              <div class='col-6'><button type='button' class='btn btn-primary'  style='margin-left :70%; font-size:13px;'  data-bs-toggle='modal' data-bs-target='#Ajoute_menu'><span><img src="Add.gif" width="30px"></span></button></div>
                          </div>
                    </div>

                    <div id="displaydatatable">
                             <!-- display table using Ajax and jquery -->
                    </div>

<!-- end display table with ajax and jquery -->
   
       
<!-- underligne -->
      <!-- <hr style="color: rgb(116, 56, 227); font-size:large;"> -->
<!-- -------------------------------------------------------------------------------------------------------------------- -->
  

   

<!-- script link -->

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<!-- js / Ajax / jquery / php -->

<script>
$(document).ready(function() {

  // for dont headin table when we refrache browser
    DisplayData();
    // DisplayEMP();

// when we ckick in shubmit button (Model 2)  this function hase been "declanched"
$("#submit").click(function() {
  // data input in Model 2
     var VName = $("#IName").val();
     
     var Vprix = $("#Iprix").val();

     var Vsize = $("#Isize").val();

     var Vmag = $("#Imag").val();
  // checking if all  data it's input by admin 


  
     if(VName.length === 0 ){
    //  $("#IName").after("<span>Merci de remplir ce champ</span>");
    //  $("#Iprix").after("<span>Merci de remplir ce champ</span>");
    //  $("#Isize").after("<span>Merci de remplir ce champ</span>");
    //  $("#Imag").after("<span>Merci de remplir ce champ</span>");
    //  return false;
    
    window.alert("Merci de entrer un nom correspondant a votre produit");
    return false;
     }
     
     if(Vprix.length === 0 ){
      window.alert("Merci de entrer un prix correspondant a votre produit");
    return false;
     }
    if(Vsize.length === 0 ){
     window.alert("Merci de entrer une categorie  correspondant a votre produit");
    return false;
     }
     if(Vmag.length === 0 ){
      window.alert("Merci de entrer une image correspondant a votre produit");
    return false;
     }
// Ajaxjquery  post this data in dashinsete.php page  for insert in database  
         $.ajax({
         type: "POST",
         url: "dashinsert.php",
         data: {
             Name: VName,
             prix: Vprix,
             size: Vsize,
             image: Vmag
         },
         cache: false,
         success: function(data) {
           $('#Ajoute_menu').modal('hide');
           DisplayData();
         },

         error: function(xhr, status, error) {
              console.error(xhr);
         }
     });
//  end Ajax/jquery
      
 });





});

// this function display data  in table at our page  (input table with data in <div id ="displaydatatable"></div>)

function DisplayData(){
  var DisplayData="true";
  $.ajax({
    url:"dashdisplay.php",
    type:"post",
    data:{
           Displaysend: DisplayData
    },
   
      success: function(data,status){
      $("#displaydatatable").html(data);
    }
    })
  }

// delete Prodact

function DeleteProdact(deleteid){
$.ajax({
  url:"dashdelete.php",
  type:"GET",
  data:{
    Deletesend: deleteid
  },
  success:function(data,status){
    DisplayData()
  }
})
}

function UpdateProdact(Upid){
  $('#hiddendata').val(Upid);
  $.post("dashupdate.php",{Upid:Upid},function(data,status){
        var Prodid = JSON.parse(data);
        $('#UName').val(Prodid.nom);
        $('#Uprix').val(Prodid.prix);
        $('#Usize').val(Prodid.categorie);
        $('#UImag').val(Prodid.image);
  });
        $('#Update_menu').modal("show");
}

function updateprd(){
  var upname = $('#UName').val();
  var upprix = $('#Uprix').val();
  var upsize = $('#Usize').val();
  var upimage = $('#UImag').val();
  var uphid =  $('#hiddendata').val();

 $.post("dashupdate2.php",{
  upname:upname,
  upprix:upprix,
  upsize:upsize,
  upimage:upimage,
  uphid:uphid
},function(data,status){
   $('#Update_menu').modal('hide');
   DisplayData();});
}


// ------------------------------



// function DisplayEMP(){
//   var DisplayEMP="true";
//   $.ajax({
//     url:"dashdisplyEMP.php",
//     type:"post",
//     data:{
//            Displaysend: DisplayEMP
//     },  
//       success: function(data,status){
//       $("#displayEMP").html(data);
//     }
//     });
//   }

  // -----------------------------
  
</script>

 

</body>
</html>




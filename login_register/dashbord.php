<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title> friend's hotel </title>
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



<link rel="stylesheet" href="DASHCSS.css">
<!-- -------------------------- -->
 


		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<title>Annual Sales - 2015</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/bootstrap/bootstrap4-alpha3.min.css">
		
		<style>
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
			
			#revenue-tag {
				font-weight: inherit !important;
				border-radius: 0px !important;
			}
			
			.card {
				border: 0rem;
				border-radius: 0rem;
			}
			
			.card-header {
				background-color: #6666D6;
				border-radius: 0 !important;
				color:	white;
				margin-bottom: 0;
				padding:	1rem;
			}
			
			.card-block {
				border: 1px solid #cccccc;	
			}
			
			.shadow {
				box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14),
										0 1px 18px 0 rgba(0, 0, 0, 0.12),
										0 3px 5px -1px rgba(0, 0, 0, 0.2);
			}
			
			#revenue-column-chart, #products-revenue-pie-chart, #orders-spline-chart {
				height: 300px;
				width: 100%;
			}			

      .canvasjs-chart-credit
{
    display: none !important;
}

		</style>
		
		<!-- Scripts -->
		<script src="assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="assets/tether/tether.min.js"></script>
		<script src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
	



<!-- -------------------------------- -->
</head>


<body>

<?php

include 'config.php';

?>



<!-- navbare -->
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><span style="color:#FFC107">friend's</span> <span style="color:rgb(102, 102, 214);">hotel</span></a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>
      <div class="w-100"></div>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
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
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash2.php">
              <span data-feather="file"></span>
              Réservation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash.php">
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
                <a class="nav-link py-5" href="#" >
                  <img src="dashimg/background_card1.gif" style="padding-top:60px; padding-right:40px" width="250px">
                </a>
              </li>
        </ul>
      </div>
    </nav>
  <!-- end dashboard -->
  
  <!-- main -->
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     


<div class="container">
			<h2 id="header">
				<strong>Ventes annuelles</strong>
				<small class="text-muted">janvier 2022 - décembre 2022</small>
			</h2>
			
			<div class="row m-b-1">
				<div class="col-xs-12">
					<div class="card shadow">
						<h4 class="card-header">Revenu <span class="tag tag-success" id="revenue-tag">$20,341,300</span></h4>
						<div class="card-block">
							<div id="revenue-column-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->

			<div class="row m-b-1">
				<div class="col-lg-6  my-3">
					<div class="card shadow">
						<h4 class="card-header">Chiffre d'affaires par produit</h4>
						<div class="card-block">
							<div id="products-revenue-pie-chart"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6  my-3">
					<div class="card shadow">
						<h4 class="card-header">Ordres</h4>
						<div class="card-block">
							<div id="orders-spline-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->









    </div>
          </div>
              </div>
                      </div>

  

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

<?php
include 'config.php';
$sqli="SELECT * from users group by id ";
$res=mysqli_query($conn,$sqli);
$row = mysqli_num_rows($res);


$i='01';
$C=1;
$A= array();
while($C<=12){
$sql="SELECT * FROM facture  where date = '2022-{$i}-01' ";
$rest=mysqli_query($conn,$sql);
$rowt = mysqli_num_rows($rest);
array_push($A,$rowt);
$C=$i+1;
$i="0"."$C";
// print_r($A);
// echo $A[$C-2];
}

echo 
'<script>
  
			$(function () {
				var totalRevenue = 15341110;
				
				// CanvasJS column chart to show revenue from Jan 2015 - Dec 2015
				var revenueColumnChart = new CanvasJS.Chart("revenue-column-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					axisX: {
						labelFontSize: 14,
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						labelFontSize: 14,
						prefix: "$"
					},
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					data: [
						{
							type: "column",
							yValueFormatString: "$###,###.##",
							dataPoints: [
								{ x: new Date("1 Jan 2022"), y: 1071550 },
								{ x: new Date("1 Feb 2022"), y: 1071550 },
								{ x: new Date("1 Mar 2022"), y: 1286200 },
								{ x: new Date("1 Apr 2022"), y: 1106900 },
								{ x: new Date("1 May 2022"), y: 1033800 },
								{ x: new Date("1 Jun 2022"), y: 1017160 },
								{ x: new Date("1 Jul 2022"), y: 1458000 },
								{ x: new Date("1 Aug 2022"), y: 1165850 },
								{ x: new Date("1 Sep 2022"), y: 2294220 },
								{ x: new Date("1 Oct 2022"), y: 2201700 },
								{ x: new Date("1 Nov 2022"), y: 2288400 },
								{ x: new Date("1 Dec 2022"), y: 1648600 }
							]
						}
					]
				});

      
				
				revenueColumnChart.render();
       

    
				
				//CanvasJS pie chart to show product wise annual revenue for 2015
				var productsRevenuePieChart = new CanvasJS.Chart("products-revenue-pie-chart", {
					animationEnabled: true,
					theme: "theme2",
					legend: {
						fontSize: 14
					},
					toolTip: {
						borderThickness: 0,
						
						cornerRadius: 0
					},
					data: [
						{       
							indexLabelFontColor: "#676464",
							indexLabelFontSize: 14,
							legendMarkerType: "square",
							legendText: "{indexLabel}",
							showInLegend: true,
							startAngle:  90,
							type: "pie",
							dataPoints: [
								{  y: 6289855, name:"chambre Deluxe", indexLabel: "chambre Deluxe - 41%", legendText: "chambre Deluxe", exploded: true },
								{  y: 2761400, name:"chambre des couples", indexLabel: "chambre des couples - 18%", legendText: "chambre des couples" },
								{  y: 3681866, name:"chambre de Signature", indexLabel: "chambre de Signature - 24%", legendText: "chambre de Signature", color: "#8064a1" },
								{  y: 2607989, name:"chambre superieure", indexLabel: "chambre superieure - 17%", legendText: "chambre superieure" }
							]
						}
					]
				});
      
      
				productsRevenuePieChart.render();

     
        
				
				//CanvasJS spline chart to show orders from Jan 2015 to Dec 2015
				var ordersSplineChart = new CanvasJS.Chart("orders-spline-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					axisX: {
						labelFontSize: 14,
						maximum: new Date("31 Dec 2022"),
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						gridThickness: 0,
						labelFontSize: 14,
						lineThickness: 2
					},

				data: [
						{
							type: "spline",
							dataPoints: [
								{ x: new Date("1 Jan 2022"), y: '.$A[0].'},
								{ x: new Date("1 Feb 2022"), y: '.$A[1].'},
								{ x: new Date("1 M$r 2022"), y: '.$A[2].'},
								{ x: new Date("1 Apr 2022"), y: '.$A[3].'},
								{ x: new Date("1 May 2022"), y: '.$A[4].'},
								{ x: new Date("1 Jun 2022"), y: '.$A[5].'},
								{ x: new Date("1 Jul 2022"), y: '.$A[6].'},
								{ x: new Date("1 Aug 2022"), y: '.$A[7].'},
								{ x: new Date("1 Sep 2022"), y: '.$A[8].'},
								{ x: new Date("1 Oct 2022"), y: '.$A[9].'},
								{ x: new Date("1 Nov 2022"), y: '.$A[10].'},
								{ x: new Date("1 Dec 2022"), y: '.$A[11].'}
							]
						}
					]

				});
       
       
        
				ordersSplineChart.render();
       
				
			});
		</script>'
    ?>






</body>
</html>


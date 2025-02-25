<?php
	include 'config.php';
  header('location: ad_addproducts.php');
  exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dates Fruits</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Bar Graph High Charts Scripts -->
  <!-- Bar Graph High Charts Scripts -->
  <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
  <script src="assets/js/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script src="assets/js/highcharts-more.js"></script>
  <!-- <script src="assets/js/highchart.js"></script>
  <script src="assets/js/highcharts-more.js"></script>
  <script src="assets/js/exporting.js"></script>
  <script src="assets/js/export-data.js"></script>
  <script src="assets/js/accessibility.js"></script> -->
  <!-- End Bar Graph High Charts Scripts -->

  <!-- End Bar Graph High Charts Scripts -->

  <style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 320px;
        max-width: 660px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
  </style>

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("ad_header.php") ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("ad_sidebar.php") ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active"><a href="#"> Dashboard<a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Products</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bxs-bar-chart-alt-2 text-info"></i>
                    </div>
                    <div class="ps-3">
                        <?php
                          require 'config.php';
                          $result = mysqli_query($conn, 'SELECT SUM(status) AS price1 FROM products WHERE status = 1'); 
                          $row = mysqli_fetch_assoc($result); 
                          $products = $row['price1'];
                        ?>
                      <h6 style="font-size:20px"><?php $products; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Profit Card -->
            <div class="col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Profit</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='fa-solid fa-peso-sign'></i>
                    </div>
                    <div class="ps-3">
                        
                      <h6 style="font-size:20px"></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Costs Card -->
            <div class="col-xl-4">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total Costs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash"></i>
                    </div>
                    <div class="ps-3">
                      
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div>
        <!-- End Left side columns -->

        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Inventory Reports -->
            <div class="col-lg-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li><a class="dropdown-item" href="#">Weekly</a></li>
                    <li><a class="dropdown-item" href="#">Monthly</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Inventory Reports</h5>

                  <?php
                  include "config.php"; 
                  $query = "SELECT * FROM products ORDER BY purchased DESC limit 4"; 
                  $getData = $conn->query($query);
                  ?>

                  <figure class="highcharts-figure">
                      <div id="container"></div>
                  </figure>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div>

        <!-- <div class="col-lg-6">
          <div class="row">

            <div class="col-12">
              <div class="card recent-sales overflow-auto">
              
                <div class="card-body">
                  <h5 class="card-title">Sales Reports </h5>

                  <?php 
                    include "config.php"; 
                    if(isset($_GET['from_date'])&& isset($_GET['to_date'])){
                      $from = $_GET['from_date'];
                      $to = $_GET['to_date'];

                      $query = $conn->query("
                        SELECT 
                        MONTHNAME(date_ord) as mname,
                          sum(amount_paid) as total
                          FROM orders
                          WHERE date_ord BETWEEN '$from' AND '$to' AND status = 1
                          
                          GROUP BY MONTH(date_ord);
                      ");

                      foreach($query as $data)
                      {
                        $month[] = $data['mname'];
                        $amount[] = $data['total'];
                      }
                    }else{
                      $cy = date('Y');

                      $query = $conn->query("
                        SELECT 
                        MONTHNAME(date_ord) as mname,
                          sum(amount_paid) as total
                          FROM orders
                          WHERE YEAR(date_ord) = '$cy' AND status = 1
                          GROUP BY MONTH(date_ord);
                      ");

                      foreach($query as $data)
                      {
                        $month[] = $data['mname'];
                        $amount[] = $data['total'];
                      }
                      
                    }
                  ?>

                  <form action="" method="GET">
                    <input type="date" name="from_date">
                    <input type="date" name="to_date">

                    <button type="submit" style="border-color: red; border-radius: 5rem"><i class="bi bi-search"></i></button>
                  </form>

                  <figure class="highcharts-figure">
                    <div id="container1"></div>
                  </figure>
                </div>
              </div>   
            </div>  
          </div>
        </div> -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("ad_footer.php") ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <!-- High-Charts  -->
  <script>
    // Data retrieved from https://netmarketshare.com/
    // Build the chart
    const chart = Highcharts.chart('container1', {
      title: {
        text: 'Monthly Total Sales'
      },
      xAxis: {
          categories: <?php echo json_encode($month); ?>
      },
      series: [{
          type: 'column',
          name: 'Sales Php',
          colorByPoint: true,
          data: <?php echo json_encode($amount, JSON_NUMERIC_CHECK); ?>,
          showInLegend: false
      }]
    });

    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Best Sellers'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Purchased',
            colorByPoint: true,
            data: [
              <?php
                $data = '';
                if ($getData->num_rows>0){
                    while ($row = $getData->fetch_object()){
                        $data.='{ name:"'.$row->name.'",y:'.$row->purchased.'},';
                    }
                }
                echo $data;
              ?>
            ]
        }]
    });
  </script>

</body>

</html>
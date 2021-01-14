<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Data Covid19</title>

  <!-- Font Awesome Icons --><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <span class="brand-text font-weight-light"><b>FINIX</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">About us</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

  
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark text-center">Data Kasus Covid19 Global & Indonesia</h1>
            <!--
            <br>
            <center>
       <div class="col-lg-7 card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>“Kesehatan selalu tampak berharga setelah kita kehilangannya.”</p>
      <footer class="blockquote-footer">Someone...<cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
</center> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h3 class="m-0 text-dark">Data Kasus Global</h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);" class="small-box bg-danger">
              <div class="inner">
                <p style="margin-bottom: 0">TOTAL POSITIF</p>
                <h3 style="margin-bottom: 0"><?php echo $globalPos['value']; ?></h3>
                <p>Orang</p>
              </div>
              <div class="icon">
                <i class=""> <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div style="background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);" class="small-box bg-success">
              <div class="inner">
                <p style="margin-bottom: 0">TOTAL SEMBUH</p>
                <h3 style="margin-bottom: 0"><?php echo $globalSemb['value']; ?></h3>

                <p>Orang</p>
              </div>
              <div class="icon">
                       <i class=""> <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="small-box bg-purple">
              <div class="inner">
                <p style="margin-bottom: 0">TOTAL MENINGGAL</p>
                <h3 style="margin-bottom: 0"><?php echo $globalMeni['value']; ?></h3>

                <p>Orang</p>
              </div>
              <div class="icon">
                <i class=""> <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
           <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h3 class="m-0 text-dark">Data Kasus Covid19 Indonesia  <i class="">  <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50"></i></h3>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span style="background: transparent;" class="info-box-icon bg-transparent"><i class=""> <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">POSITIF</span>
                <span class="info-box-number"><?php echo $indonesia['positif'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-transparent">  <i class=""> <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SEMBUH</span>
                <span class="info-box-number"><?php echo $indonesia['sembuh'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-transparent"><i class=""> <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">MENINGGAL</span>
                <span class="info-box-number"><?php echo $indonesia['meninggal'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
       
     
        <div class="row">
          
          <div class="col-12">
             <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kasus Covid19 di Indonesia Berdasarkan Provinsi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>PROVINSI</th>
                  <th>POSITIF</th>
                  <th>SEMBUH</th>
                  <th>MENINGGAL</th>
                </tr>
                </thead>
                <tbody>
                <?php 
  $no = 1;
  foreach ($provinsi as $value) { ?>
  
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $value['attributes']['Provinsi']; ?></td>
    <td><?php echo number_format($value['attributes']['Kasus_Posi']); ?></td>
    <td><?php echo number_format($value['attributes']['Kasus_Semb']); ?></td>
    <td><?php echo number_format($value['attributes']['Kasus_Meni']); ?></td>
  </tr>
  <?php $no++; } ?>
                
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          </div>

        </div>

        <div class="row">
          
          <div class="col-12">
             <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kasus Covid19 Global</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NEGARA</th>
                  <th>POSITIF</th>
                  <th>SEMBUH</th>
                  <th>MENINGGAL</th>
                </tr>
                </thead>
                <tbody>
                <?php 
  $no = 1;
  foreach ($global as $value) { ?>
  
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $value['attributes']['Country_Region']; ?></td>
    <td><?php echo number_format($value['attributes']['Confirmed']); ?></td>
    <td><?php echo number_format($value['attributes']['Recovered']); ?></td>
    <td><?php echo number_format($value['attributes']['Deaths']); ?></td>
  </tr>
  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          </div>

        </div>

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/adminlte.min.js');?>"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#example2").DataTable();
  });
</script>

</body>
</html>

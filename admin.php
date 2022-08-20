<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
  <style>
    #foglalas{
      text-align: center !important;
    }
    tbody, td, tfoot, th, thead, tr{
      border-width: thin !important; 
    }
    a{
      color: black !important;
    }
    .content-wrapper{
        background-color: #a0baac !important;
    }
    body > div > nav{
      background-color:#5e857d !important;
    }
    [class*=sidebar-dark-]{
      background-color: #537b77 !important;
    }
    html, body {
      height: 100%;
      width: 100%;
    }
    div#foglalas_wrapper.dataTables_wrapper.dt-bootstrap5{
      
      margin: 10px !important;
      padding: 10px !important;
    border: thin solid black;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- bal navbar link -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link" style="color:black;">Home</a>
      </li>
    </ul>
    <!-- jobb navbar link -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          </a>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="admin.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aurora</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/clau.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Siklós Claudia</a>
          <a href="logout.php">Kijelentkezés</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        </ul>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">admin oldal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
          
        <table id="foglalas" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>iD</th>
                <th>Név</th>
                <th>Email</th>
                <th>Telefonszám</th>
                <th>TB szám</th>
                <th>utasok száma</th>
                <th>plussz Ágy</th>
                <th>idegenvezetés</th>
                <th>Utasbiztosítás</th>
                <th>Egyéb</th>
            </tr>
        </thead>
        <tbody> 
        
        <?php
        require_once('./conf.php');
        $conn = mysqli_connect($server, $user, $password, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * from `utas`  ";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            print(mysqli_error($conn) . ' ' . mysqli_errno($conn));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['nev']); ?></td>
                <td><?php print($row['email']); ?></td>
                <td><?php print($row['telefonszam']); ?></td>
                <td><?php print($row['tb_szam']); ?></td>
                <td><?php print($row['utasok_szama']); ?></td>
                <td><?php print($row['plusz_agy']); ?></td>
                <td><?php print($row['idegenvezetes']); ?></td>
                <td><?php print($row['utasbiztositas']); ?></td>
                <td><?php print($row['egyeb']); ?></td>
            </tr>
            <?php
            }
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th>iD</th>
                <th>Név</th>
                <th>Email</th>
                <th>Telefonszám</th>
                <th>TB szám</th>
                <th>utasok száma</th>
                <th>plussz Ágy</th>
                <th>idegenvezetés</th>
                <th>Utasbiztosítás</th>
                <th>Egyéb</th>
            </tr>
        </tfoot>
    </table>
        </div>
              <!-- /.card-body -->
        </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
               <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script>
          $('#foglalas').DataTable( {
          responsive: true
          } );

        $(document).ready(function () {
            $('#foglalas').DataTable();
        });
        </script>

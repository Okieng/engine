<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Mate - Parallax Website Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/line-icons.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.theme.css">
    <link rel="stylesheet" href="../../css/nivo-lightbox.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/slicknav.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/main.css">    
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../../css/utama.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

    <!-- Header Section Start -->
   <!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
              <img src="http://beatoftheweek.com/theme/frontend/responsive/style/default/image/user.png" class="img-responsive" alt="">
          </div>
          <!-- END SIDEBAR USERPIC -->
          <!-- SIDEBAR USER TITLE -->
          <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                Admin
            </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
          <a href="#" class="btn btn-commonn wow">Setting</a>
          <a href="#" class="btn btn-commonn wow">Logout</a>
      </div>
      <!-- END SIDEBAR BUTTONS -->
      <!-- SIDEBAR MENU -->
      <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
                <a href="/pembayaran">
                  <i class="glyphicon glyphicon-home"></i>
              Rekapan </a>
          </li>
      </ul>
  </div>
  <!-- END MENU -->
</div>
</div>
<div class="col-md-9">
    <h3>Edit Pembayaran</h3>
    <div class="row">

@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif

<?php 
        $student = $pembayaran->siswa_id;
 ?>


<form class="" action="/pembayaran/{{$pembayaran->id}}" method="post">


    
      <div class="form-group">
      <label for="siswa_id">Nama Siswa</label>
                  <select class="form-control-1 form-control-line" name="siswa_id">
                    @foreach ($user as $use)
                    <option value="{{$use->id}}" 
                    <?php 
                      if($student == $use->id){
                        echo "selected";
                      }
                    ?>
                    >{{$use->nama}}</option>
                    @endforeach
                  </select>
    </div>
    
     <div class="form-group">
        <label for="kelas">Kelas </label>
        <input type="text" class="form-control-1 form-control-line" id="kelas" name="kelas" value="{{ $pembayaran->kelas }}" placeholder="Kelas">
    </div>
    
    Keterangan : <br>
  <input type="radio" name="checklist" value="false"
      <?php 
        if($pembayaran->checklist == "false"){
          echo "checked";
        }
      ?>
  >Belum <br>
  <input type="radio" name="checklist" value="true"
      <?php 
        if($pembayaran->checklist == "true"){
          echo "checked";
        }
      ?>
  >Selesai <br>

    <div class="form-group">
        <label for="bln_pembayaran">Bulan Pembayaran </label>
        <input type="text" class="form-control-1 form-control-line" id="bln_pembayaran" name="bln_pembayaran" value="{{ $pembayaran->bln_pembayaran }}" placeholder="Bulan Pembayaran">
    </div>
    
    <div class="form-group">
        <label for="tgl_pembayaran">Tanggal Pembayaran </label>
        <input type="date" class="form-control-1 form-control-line" id="tgl_pembayaran" name="tgl_pembayaran" value="{{ $pembayaran->tgl_pembayaran }}" placeholder="Bulan Pembayaran">
    </div>
    
    Tipe Pembayaran : <br>
  <input type="radio" name="tipe_pembayaran" value="SPP"
      <?php 
        if($pembayaran->tipe_pembayaran == "SPP"){
          echo "checked";
        }
      ?>
  >SPP <br>
  <input type="radio" name="tipe_pembayaran" value="Praktek"
      <?php 
        if($pembayaran->tipe_pembayaran == "Praktek"){
          echo "checked";
        }
      ?>
  >Praktek <br>
    <input type="radio" name="tipe_pembayaran" value="DSP"
      <?php 
        if($pembayaran->tipe_pembayaran == "DSP"){
          echo "checked";
        }
      ?>
  >DSP <br>
    

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
     <input class="btn btn-sm btn-primary" type="submit" name="name" value="Edit">
    <a class="btn btn-sm btn-primary" href="/pembayaran">Cancel</a>
    



</form>
    </div>
</div>
</div>
</div>
<!-- Footer Section Start -->
<footer>          
  <div class="container">
    <div class="row">
      <!-- Footer Links -->
      <div class="col-lg-6 col-sm-6 col-xs-12">
        <ul class="footer-links">
          <li>
            <a href="#">Homepage</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">About Us</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</div>
<div class="col-lg-6 col-sm-6 col-xs-12">
    <div class="copyright">
      <p>Copyright</p>
  </div>
</div>  
</div>
</div>
</footer>
<!-- Footer Section End --> 

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="lnr lnr-arrow-up"></i>
</a>

<div id="loader">
  <div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div>
</div>     

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="../../js/jquery-min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/jquery.mixitup.js"></script>
<script src="../../js/nivo-lightbox.js"></script>
<script src="../../js/owl.carousel.js"></script>    
<script src="../../js/jquery.stellar.min.js"></script>    
<script src="../../js/jquery.nav.js"></script>    
<script src="../../js/scrolling-nav.js"></script>    
<script src="../../js/jquery.easing.min.js"></script>    
<script src="../../js/smoothscroll.js"></script>    
<script src="../../js/jquery.slicknav.js"></script>     
<script src="../../js/wow.js"></script>   
<script src="../../js/jquery.vide.js"></script>
<script src="../../js/jquery.counterup.min.js"></script>    
<script src="../../js/jquery.magnific-popup.min.js"></script>    
<script src="../../js/waypoints.min.js"></script>    
<script src="../../js/form-validator.min.js"></script>
<script src="../../js/contact-form-script.js"></script>   
<script src="../../js/main.js"></script>
</body>
</html>



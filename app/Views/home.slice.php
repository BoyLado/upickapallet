
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Starter</title>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="http://localhost/adminupickapallet/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="http://localhost/adminupickapallet/assets/AdminLTE/dist/css/adminlte.min.css?v=3.2.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">


<style type="text/css">

.image-container {
  display: flex;
  flex-wrap: wrap;
}

.image-container img {
  width: calc(10% - 10px);
  margin-right: 10px;
  margin-bottom: 10px;
}

.image-container img:last-child {
  margin-right: 0;
}

@media screen and (max-width: 768px) {
  .image-container img {
    width: calc(33.33% - 10px);
  }
}

@media screen and (max-width: 480px) {
  .image-container img {
    width: calc(50% - 10px);
  }
}

/*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}

  #imgtxt {
    display: flex;
    align-items: center;
  }
  
  .img {
    margin-right: 10px;
  }

  .container {
  display: flex;
  flex-wrap: wrap;
}

.box {
  width: 200px;
  height: 150px;
  margin: 1px;
  background-color: #ccc;
  border: 1px solid #000;
}
#box1 {
  width: 150px;
  height: 150px;
  background-color: #38B6FF;
  border: 1px solid #000;
  padding: 20px;
  margin-bottom: 15px;
  }

   .footer {
         background-color: #333;
         color: #fff;
         padding: 20px;
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         align-items: center;
      }

      .footer-logo {
         font-size: 24px;
         font-weight: bold;
      }

      .footer-links {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         align-items: center;
      }

      .footer-links a {
         color: #fff;
         margin-right: 10px;
         text-decoration: none;
      }

      .footer-login {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         align-items: center;
      }

      .footer-login button {
         background-color: #007bff;
         color: #fff;
         padding: 10px 20px;
         border: none;
         border-radius: 3px;
         font-size: 16px;
         cursor: pointer;
      }

      @media screen and (max-width: 600px) {
         .footer {
            flex-direction: column;
            align-items: center;
         }

         .footer-links {
            margin-bottom: 10px;
         }

         .footer-login {
            margin-top: 10px;
         }
      }
/* .container {
  display: flex;
  flex-wrap: wrap;
}

#box1 {
  width: 150px;
  height: 150px;
  background-color: #38B6FF;
  border: 1px solid #000;
  padding: 20px;
  margin-bottom: 15px;
}
.box {
  width: 300px;
  height: 150px;
  background-color: white;
  border: 1px solid #000;
  padding: 20px;
  margin-bottom: 15px;
}

.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.description {
  font-size: 16px;
  line-height: 1.5;
}
*/
 </style>
</head>
<body class="layout-top-nav" data-new-gr-c-s-check-loaded="14.1101.0" data-gr-ext-installed="" style="height: auto;">
<div class="wrapper">

<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
<div class="container">
<a href="../../index3.html" class="navbar-brand">
<img src="http://localhost/adminupickapallet/assets/img/upp-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light"><b>U PICK A PALLET LLC</b></span>
</a>
<button class="navbar-toggler order-1 d-none" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse order-3" id="navbarCollapse">


   <form class="form-inline ml-0 ml-md-3">
      <div style="width: 750px;" class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
         </div>
      </div>
   </form>
</div>

   <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

   <li class="nav-item dropdown">
   <a class="nav-link" data-toggle="dropdown" href="#">
   <i class="fas fa-cart-plus"></i>
   <span class="badge badge-danger navbar-badge">3</span>
   </a>
   <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
   <a href="#" class="dropdown-item">

   <div class="media">
   <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
   <div class="media-body">
   <h3 class="dropdown-item-title">
   Brad Diesel
   <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
   </h3>
   <p class="text-sm">Call me whenever you can...</p>
   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
   </div>
   </div>

   </a>
   <div class="dropdown-divider"></div>
   <a href="#" class="dropdown-item">

   <div class="media">
   <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
   <div class="media-body">
   <h3 class="dropdown-item-title">
   John Pierce
   <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
   </h3>
   <p class="text-sm">I got your message bro</p>
   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
   </div>
   </div>

   </a>
   <div class="dropdown-divider"></div>
   <a href="#" class="dropdown-item">

   <div class="media">
   <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
   <div class="media-body">
   <h3 class="dropdown-item-title">
   Nora Silvester
   <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
   </h3>
   <p class="text-sm">The subject goes here</p>
   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
   </div>
   </div>

   </a>
   <div class="dropdown-divider"></div>
   <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
   </div>
   </li>

   <li class="nav-item dropdown">
   <a class="nav-link" data-toggle="dropdown" href="#">
   <i class="far fa-envelope"></i>
   <span class="badge badge-warning navbar-badge">15</span>
   </a>
   </li>

   </ul>


</div>
</div>
</nav>


   <div class="content-wrapper" style="min-height: 734px;">
      <div class="content-header">
      <div class="card-body">
         <div class="row">
           <div class="col-sm-4">
             <div class="card">
               <div class="card-body">
                 <img src="http://localhost/adminupickapallet/assets/img/banner.png" class="img-fluid" alt="Responsive image">
               </div>
             </div>
           </div>
           <div class="col-sm-4 d-none d-lg-block d-md-block">
             <div class="card">
               <div class="card-body">
                  <center>
                 <video width="100%" controls>
                 <source src="mov_bbb.mp4" type="video/mp4">
                 <source src="mov_bbb.ogg" type="video/ogg">
                 Your browser does not support HTML video.
               </video>
               </center>
               </div>
             </div>
           </div>
           <div class="col-sm-4 d-none d-lg-block d-md-block">
             <div class="card">
               <div class="card-body">
                <img src="http://localhost/adminupickapallet/assets/img/banner.png" class="img-fluid" alt="Responsive 
                image">
               </div>
             </div>
           </div>
         </div>
         
      </div>
      </div>
         <div class="image-container">
           <img src="http://localhost/adminupickapallet/assets/img/1.png" alt="Image 1">
           <img src="http://localhost/adminupickapallet/assets/img/2.png" alt="Image 2">
           <img src="http://localhost/adminupickapallet/assets/img/3.png" alt="Image 3">
           <img src="http://localhost/adminupickapallet/assets/img/4.png" alt="Image 4">
           <img src="http://localhost/adminupickapallet/assets/img/5.png" alt="Image 5">
           <img src="http://localhost/adminupickapallet/assets/img/6.png" alt="Image 6">
           <img src="http://localhost/adminupickapallet/assets/img/7.png" alt="Image 7">
           <img src="http://localhost/adminupickapallet/assets/img/8.png" alt="Image 8">
           <img src="http://localhost/adminupickapallet/assets/img/9.png" alt="Image 9">
           <img src="http://localhost/adminupickapallet/assets/img/10.png" alt="Image 10">
         </div>
         <!-- Top content -->
         <div class="card-body">
<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3 active">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img8">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img8">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img8">
                </div>
                <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                    <img src="http://localhost/adminupickapallet/assets/img/10.png" class="img-fluid mx-auto d-block" alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</div>
   <div><hr>
      <center>
      <h1><strong>MARCH EVENTS</strong></h1>
      <p>Get your Season Pass to join the upcoming events below!</p>
   </center>
   </div>
   
<div class="content-header">
      <div class="card-body">
         <div class="row">
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  Tuesday Auction
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  Wednesday Auction
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
      </div>
   
         <div class="row">
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  Thursday Auction
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  Friday Auction
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
           </div>
         <div class="row">
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  SAT $1 MEGA SALE
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="card">
               <div class="card-body">
                  <div class="card card-danger">
                  <div class="card-header">
                  <h4 class="card-title w-100">
                  <a class="d-block w-100">
                  Saturday Auction
                  </a>
                  </h4>
                  </div>
                  </div>
                 <p class="description">Auction will start from 5pm to 9pm with starting bid of $5 only and a minimum increment of $1.</p>
               </div>
             </div>
           </div>
         </div>

</div>
</div>



<footer style="background-color: #38B6FF;"class="footer">
      <div class="footer-logo">U PICK A PALLET <b>LLC</b></div>
      <div class="footer-links">
         <i style="margin-right: 10px;" class="fa-xl fa-brands fa-square-facebook"></i>
         <i style="margin-right: 10px;" class="fa-xl fa-brands fa-square-twitter"></i>
         <i style="margin-right: 10px;" class="fa-xl fa-brands fa-square-instagram"></i>
         <i style="margin-right: 10px;" class="fa-xl fa-brands fa-square-youtube"></i>
      </div>
      <div class="footer-login">
         <button style="margin-right: 5px; background-color: white; color: black;">Login</button>
         <button style="background-color: white; color: black;">Settings</button>
      </div>
   </footer>

<script src="http://localhost/adminupickapallet/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script src="http://localhost/adminupickapallet/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="http://localhost/adminupickapallet/assets/AdminLTE/dist/js/adminlte.min.js?v=3.2.0"></script>


<script type="text/javascript">
   /*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

</script>

</script>


<script src="http://localhost/adminupickapallet/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script src="http://localhost/adminupickapallet/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="http://localhost/adminupickapallet/assets/AdminLTE/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>

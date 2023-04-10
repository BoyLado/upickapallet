@extends('template-guest.layout')

@section('page_title',$pageTitle)



@section('custom_styles')
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/css/select2.min.css">

<style type="text/css">
  /*INTERNAL STYLES*/
  /*.image-container {
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
   }*/
</style>

@endsection



@section('page_content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container">
         <div class="row">
           <div class="col-sm-4">
             <div class="card">
               <div class="card-body">
                 <img src="<?php echo base_url(); ?>/public/assets/img/upp/season-pass-banner.jpeg" class="img-fluid" alt="Responsive image">
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
                <img src="<?php echo base_url(); ?>/public/assets/img/upp/season-pass-banner.jpeg" class="img-fluid" alt="Responsive 
                image">
               </div>
             </div>
           </div>
         </div>

         <div class="d-none d-lg-flex" style="display:flex; flex-wrap: nowrap; width: 100%;">
            <a href="<?php echo base_url(); ?>/who-we-are" class="mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-1.jpeg" class="img img-thumbnail" alt="Image 1">
            </a>
            <a href="<?php echo base_url(); ?>/sign-up" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-2.jpeg" class="img img-thumbnail" alt="Image 2">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-3.jpeg" class="img img-thumbnail" alt="Image 3">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-4.jpeg" class="img img-thumbnail" alt="Image 4">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-5.jpeg" class="img img-thumbnail" alt="Image 5">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-6.jpeg" class="img img-thumbnail" alt="Image 6">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-7.jpeg" class="img img-thumbnail" alt="Image 7">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-8.jpeg" class="img img-thumbnail" alt="Image 8">
            </a>
            <a href="<?php echo base_url(); ?>/contact-us" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-9.jpeg" class="img img-thumbnail" alt="Image 9">
            </a>
            <a href="#" class="ml-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-10.jpeg" class="img img-thumbnail" alt="Image 10">
            </a>
         </div>

         <div class="d-flex d-lg-none" style="display:flex; flex-wrap: nowrap; width: 100%;">
            <a href="<?php echo base_url(); ?>/who-we-are" class="mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-1.jpeg" class="img img-thumbnail" alt="Image 1">
            </a>
            <a href="<?php echo base_url(); ?>/sign-up" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-2.jpeg" class="img img-thumbnail" alt="Image 2">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-3.jpeg" class="img img-thumbnail" alt="Image 3">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-4.jpeg" class="img img-thumbnail" alt="Image 4">
            </a>
            <a href="#" class="ml-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-5.jpeg" class="img img-thumbnail" alt="Image 5">
            </a>
         </div>
         <div class="p-1"></div>
         <div class="d-flex d-lg-none" style="display:flex; flex-wrap: nowrap; width: 100%;">
            <a href="#" class="mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-6.jpeg" class="img img-thumbnail" alt="Image 6">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-7.jpeg" class="img img-thumbnail" alt="Image 7">
            </a>
            <a href="#" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-8.jpeg" class="img img-thumbnail" alt="Image 8">
            </a>
            <a href="<?php echo base_url(); ?>/contact-us" class="ml-1 mr-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-9.jpeg" class="img img-thumbnail" alt="Image 9">
            </a>
            <a href="#" class="ml-1">
               <img src="<?php echo base_url(); ?>/public/assets/img/upp/nav-10.jpeg" class="img img-thumbnail" alt="Image 10">
            </a>
         </div>
      </div>

      <hr>

      <div class="container">
         <h3 class="text-bold"><span class="text-red">LIVE</span> AUCTIONS</h3>
         
      </div>

      <div class="container">
         <div class="container-fluid">
              <div id="carousel-example" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner row w-100 mx-auto" role="listbox">
                      <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3 active">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img1">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img2">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img3">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img4">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img5">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img6">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img7">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img8">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img8">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img8">
                      </div>
                      <div class="carousel-item col-2 col-sm-6 col-md-4 col-lg-3">
                          <img src="<?php echo base_url(); ?>/public/assets/img/Mart.gif" class="img-fluid mx-auto d-block" alt="img8">
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
</div>

@endsection



@section('custom_scripts')

<!-- Plugins -->
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>

<script src="<?php echo base_url(); ?>/public/assets/js/index.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
      $('.carousel').carousel({
        interval: false,
      });
   });
</script>

@endsection


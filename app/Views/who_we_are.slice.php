@extends('template-guest.layout')

@section('page_title',$pageTitle)



@section('custom_styles')
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/css/select2.min.css">

<style type="text/css">
  /*INTERNAL STYLES*/
  
  #cont {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        #card1 {
            width: 30%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,.2);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        #cardheader {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }

        #cardbody {
            padding: 20px;
            text-align: center;
        }

        #cardbutton {
            display: block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .card {
                width: 45%;
            }
        }

        @media screen and (max-width: 480px) {
            .card {
                width: 100%;
            }
        }

</style>

@endsection



@section('page_content')

<div class="content-wrapper">
   <div class="content-header">
      
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
</div>
</section>

<section class="content">
                <div class="container">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-6 text-center d-flex align-items-center justify-content-center">
                            <div class="">
                            <h1 style="text-align: left; font-size: 60px;"><b>Who we are?</b></h1>
                            <p style="text-align: justify"; class="lead mb-4 ">U Pick A Pallet LLC is the top liquidation outlet center in Southern Illinois. It is a family owned and operated business that takes pride in providing quality products and ridiculously low prices. <br>



                            The name of the company was derived from pallets of merchandise where we allow people to pick their own pallets. Not only we sell pallets of merchandise but we also have a retail division offering online auctions and sale events. It is currently located at 323 Broadway Street, Mount Vernon, Illinois.
                            </p>
                            </div>
                        </div>
                        <div class="col-6">
                           <video width="100%" controls>
                              <source src="mov_bbb.mp4" type="video/mp4">
                              <source src="mov_bbb.ogg" type="video/ogg">
                              Your browser does not support HTML video.
                           </video>
                        </div>
                    </div>
                        <div class="card-body row">
                                <div class="col-6 text-center d-flex align-items-center justify-content-center">
                                    <div class="">
                                    <img style="width: 500px;"src="http://localhost/adminupickapallet/assets/img/banner.png" class="img-fluid" alt="Responsive image">

                                    </div>
                                </div>
                            <div class="col-6">
                                               <p style="text-align: justify"; class="lead mb-5"> U Pick A Pallet LLC has been operating in Mount Vernon Illinois since 2020. The company sells a variety of liquidated merchandise from a variety of big box retailers. The store has been open to the general public since then, until we started this year, 2023, with season pass policy.</p>
                            </div>
                        </div>

                         <div class="card-body row">
                            <h1 style="text-align: left; font-size: 60px;"><strong>Products and Services</strong></h1>
                      
                        <center>
                        <h5 style="text-align: left;"><b>Merchandise Pallets</b></h5>
                        
                            <p style="text-align: justify"; class="lead mb-4">
                        The company sells merchandise pallets that contain a variety of products all for one price. Merchandise pallets consist of overstocks, customer returns, clearance items, box damaged items and in deliverables. Average merchandise pallet weighs 600 pounds with height up to 6-foot tall. We sell pallets exactly how we receive them from the big box retailers so no one can guarantee the quality or condition of any item found on merchandise pallets. People may receive damaged items on purchased merchandise pallets but we are upfront and honest about how the process of liquidation works. The company is selective on our programs and most buyers do extremely well reselling products from our merchandise pallets on marketplace, eBay and other online sales channels. </p>
                        </div>
                        <center>
                        <div class="card-body row">
                        <img style="width: 1000px;"src="http://localhost/adminupickapallet/assets/img/banner.png" class="img-fluid" alt="Responsive image">
                        </div>
                        </center>
                        <div class="card-body row">
                             <div class="col-6">
                                <h5><b>Individual Bargains</b></h5> 

                                <p style="text-align: justify;" class="lead mb-4">We break pallets into individual bargains and sell these at the lowest price. We host sale events every month with specific days and times. The events we host mostly are tier-down sales where we offer individual merchandise at a certain day and price becomes lower after every day. Moreover, we host ultimate sales, black Friday sales, Fill-A-Bag events and many more.
                            </div>
                                <div class="col-6 text-center d-flex align-items-center justify-content-center">
                                    <div class="">
                                    <img style="width: 400px;"src="http://localhost/adminupickapallet/assets/img/banner.png" class="img-fluid" alt="Responsive image">

                                    </div>
                                </div>
                                 <div class="card-body row">
                                 <h5><b>Auctions</b></h5>

                                Every week, we host online auctions. It mostly held up to 5 times a week with special and scanned condition items. We also host live in person once a month.
                                 </div>
                        </div>
                        <div id="cont" class="card-container">
                            <div id="card1" class="card">
                                <div id="cardheader"class="card-header">BIN SALES EVENT</div>
                                <div id="cardbody"class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu velit consectetur, molestie quam et, vulputate sem. Donec nec eleifend orci.</p>
                                    <button id="cardbutton"class="card-button">BOOK NOW</button>
                                </div>
                            </div>
                            <div id="card1" class="card">
                                <div id="cardheader" class="card-header">PALLET SALES EVENT</div>
                                <div id="cardbody"class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu velit consectetur, molestie quam et, vulputate sem. Donec nec eleifend orci.</p>
                                    <button  id="cardbutton"class="card-button">BOOK NOW</button>
                                </div>
                            </div>
                            <div id="card1" class="card">
                                <div id="cardheader" class="card-header">LIVE IN PERSON AUCTION</div>
                                <div id="cardbody"class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu velit consectetur, molestie quam et, vulputate sem. Donec nec eleifend orci.</p>
                                    <button  id="cardbutton" class="card-button">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                  
                        </div>
                
           </section>

                    </div>
   
            </div>

   </div>
</div>

@endsection



@section('custom_scripts')

<!-- Plugins -->
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>

<!-- Custom Scripts -->

<script type="text/javascript">
   $(document).ready(function(){
    //jQuery Events

      

   });
</script>

@endsection


<footer class="main-footer">
   <div class="container">
      <div class="float-right d-none d-sm-inline">
         Anything you want
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
   </div>
</footer>

<!-- JS Libraries here! -->

<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?php echo base_url(); ?>/public/assets/js/helpers/common_helper.js"></script>

<!-- ==========================================================================================> -->

<!-- Custom JS [JQuery Events] -->

<script type="text/javascript">
  let summernoteConfig = {
    toolbar: [
      // ['style', ['bold', 'italic', 'underline', 'clear']],
      // ['font', ['strikethrough', 'superscript', 'subscript']],
      // ['fontsize', ['fontname','fontsize']],
      // ['color', ['color']],
      // ['para', ['ul', 'ol', 'paragraph']],
      // ['height', ['height']],
      // ['insert', ['table','picture','link','video','hr']]
      ['style', ['style']],
      ['font', ['bold', 'italic', 'underline', 'clear']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      // ['insert', ['link', 'picture', 'video']],
    ],
    height: 300
  };

  let _waitMeLoaderConfig = {
    //none, rotateplane, stretch, orbit, roundBounce, win8,
    //win8_linear, ios, facebook, rotation, timer, pulse,
    //progressBar, bouncePulse or img
    effect:'roundBounce',
    //place text under the effect (string).
    text:'Processing, Please Wait...',
    //background for container (string).
    bg:'rgba(255,255,255,0.7)',
    //color for background animation and text (string).
    color:'#000',
    //max size
    // maxSize:'',
    //wait time im ms to close
    waitTime: 0,
    //url to image
    // source:'<?php echo base_url(); ?>/public/assets/img/upp-logo.png',
    //or 'horizontal'
    textPos:'vertical',
    //font size
    fontSize:'',
  };

  HELPER.autoLogout();
</script>

@yield('custom_scripts')
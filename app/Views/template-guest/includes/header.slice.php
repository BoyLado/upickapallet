

<!-- CSS Libraries here! -->

<link rel="icon" href="<?php echo base_url(); ?>/public/assets/img/upp-logo.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- ==========================================================================================> -->

<!-- Custom Internal Styles -->

<style type="text/css">

	/* width */
	::-webkit-scrollbar {
	  width: 5px;
	}

	/* Track */
	::-webkit-scrollbar-track {
	  background: #f1f1f1; 
	}
	 
	/* Handle */
	::-webkit-scrollbar-thumb {
	  background: #888; 
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
	  background: #555; 
	}
	
	/* Header fixed to the top of the modal */
	.modal-header--sticky {
	  position: sticky;
	  top: 0;
	  background-color: inherit; /* [1] */
	  z-index: 1055; /* [2] */
	}

	/* Footer fixed to the bottom of the modal */
	.modal-footer--sticky {
	  position: sticky;
	  bottom: 0;
	  background-color: inherit; /* [1] */
	  z-index: 1055; /* [2] */
	}

	.note-dropdown-menu {
    z-index: 1056;
	}

</style>

@yield('custom_styles')
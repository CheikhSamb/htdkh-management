<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>htdkh-management | Member Liste</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/ss/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.transitions.css')}}">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/notika-custom-icon.css')}}">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/wave/waves.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/wave/button.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/main.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{url('/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?php include "header.php";?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <!-- Menu principal start 
    
    |++++++++++++++++++++++++++++++|-->
    
    <?php include "menu.php";?>

<!--|++++++++++++++++++++++++++++++|-->
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-support"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Liste des membres</h2>
										<p>Informations membres de la daara</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="/new-member"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Ajouter un nouveau membre | Secteur : {{$secteur->libelle}}</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <!-- <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div> -->
                        <div class="table-responsive">
                            <form method="POST" action="add-secteur-member">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>SELECTION</th>
                                       <th>MATRIC.</th>
                                       <th>PRENOM</th>
                                       <th>NOM</th>
                                       <th>TEL</th>
                                       <th>SPECIALITE</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        foreach ($members as $memb) {
                                           ?>
                                           <tr>
                                            <td><input type="checkbox" name="members[]" value="{{$memb->id}}" class=""></td>
                                            <td>DK0001</td>
                                            <td><?=$memb->prenom;?></td>
                                            <td><?=$memb->nom;?></td>
                                            <td><?=$memb->telephone;?></td>
                                            <td><?=$memb->specialite;?></td>
                                            
                                           </tr>
                                           <?php $i++;
                                        }

                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>SELECTIONNEZ</th>
                                       <th>MATRIC.</th>
                                       <th>PRENOM</th>
                                       <th>NOM</th>
                                       <th>TEL</th>
                                       <th>SPECIALITE</th>

                                    </tr>
                                    <td colspan="6" align="right"> 
                                        <input type="hidden" name="secteur_id" value="{{$secteur->id_secteur}}">
                                        <div class="breadcomb-report">
                                    <a href="new-membre-secteur"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Ajouter membre(s)</button></a>
                                </div>
                                    </td>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <font size="9px">
                        <p>Copyright © 2019. All rights reserved. Designed by pôle informatique HTDKH</p>
                    </font>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    ============================================ -->
    <script src="{{url('/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{url('/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{url('/js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{url('/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{url('/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{url('/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{url('/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{url('/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{url('/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{url('/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{url('/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{url('/js/flot/jquery.flot.js')}}"></script>
    <script src="{{url('/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{url('/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
        ============================================ -->
    <script src="{{url('/js/knob/jquery.knob.js')}}"></script>
    <script src="{{url('/js/knob/jquery.appear.js')}}"></script>
    <script src="{{url('/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
        ============================================ -->
    <script src="{{url('/js/wave/waves.min.js')}}"></script>
    <script src="{{url('/js/wave/wave-active.js')}}"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="{{url('/js/icheck/icheck.min.js')}}"></script>
    <script src="{{url('/js/icheck/icheck-active.js')}}"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="{{url('/js/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
        ============================================ -->
    <script src="{{url('/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
     <script src="{{url('js/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('js/data-table/data-table-act.js')}}"></script>
    <script src="{{url('/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{url('/js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{url('/js/tawk-chat.js')}}"></script>
</body>

</html>
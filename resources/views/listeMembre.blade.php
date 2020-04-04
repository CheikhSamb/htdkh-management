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
    <link rel="shortcut icon" type="image/x-icon" href="{{'img/favicon.ico'}}">
    <!-- Google Fonts
		============================================ -->
    <link href="{{'https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900'}}" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/font-awesome.min.css'}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/owl.carousel.css'}}">
    <link rel="stylesheet" href="{{'css/owl.theme.css'}}">
    <link rel="stylesheet" href="{{'css/owl.transitions.css'}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/meanmenu/meanmenu.min.css'}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/animate.css'}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/normalize.css'}}">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/wave/waves.min.css'}}">
    <link rel="stylesheet" href="{{'css/wave/button.css'}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/scrollbar/jquery.mCustomScrollbar.min.css'}}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/notika-custom-icon.css'}}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{'css/jquery.dataTables.min.css'}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/main.css'}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{'style.css'}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{'css/responsive.css'}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{'js/vendor/modernizr-2.8.3.min.js'}}"></script>
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
									<a href="/new-member"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Ajouter un nouveau membre</button></a>
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
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>MATRIC.</th>
                                       <th>PRENOM</th>
                                       <th>NOM</th>
                                       <th>TEL</th>
                                       <th>SPECIALITE</th>
                                       <th>+ DE DETAIL</th>
                                       <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                        foreach ($members as $memb) {
                                           ?>
                                           <tr>
                                            <td><?=$i;?></td>
                                            <td>DK0001</td>
                                            <td><?=$memb->prenom;?></td>
                                            <td><?=$memb->nom;?></td>
                                            <td><?=$memb->telephone;?></td>
                                            <td><?=$memb->specialite;?></td>
                                            <td>
                                                <a href="/dossier-membre/{{$memb->id}}" title="Ouvrir">
                                                <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-search"><font face="calibri"> Dossier</font></i></button>
                                            </a> </td>
                                            <td>
                                                <a href="/delete-membre/{{$memb->id}}" title="Supprimer">
                                                <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                                </a>
                                                <a href="/archiver-membre/{{$memb->id}}" title="Archiver membre">
                                                <button class="btn btn-warning warning-icon-notika" onclick="return(confirm('Valider archivage ?'));"><i class="notika-icon notika-sent"> <font face="calibri"> Archiver</font></i></button>
                                                </a>
                                            </td>
                                           </tr>
                                           <?php $i++;
                                        }

                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>#</th>
                                       <th>MATRIC.</th>
                                       <th>PRENOM</th>
                                       <th>NOM</th>
                                       <th>TEL</th>
                                       <th>SPECIALITE</th>
                                       <th>+ DE DETAIL</th>
                                       <th>ACTION</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
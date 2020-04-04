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
<font face="">
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
										<h2>MENSUALITE</h2>
										<p>Gestion des cotisations mensuelles</span></p>
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
           
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="data-table-list"> <legend><h4><b>LISTE MOIS COTISATION</b></h4> </legend>
                        <!-- <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div> -->
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Libellé mois</th>
                                       <th>Cotisations</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($mois as $m)
                                        {
                                            ?>
                                            <tr>
                                                <td>#</td>
                                                <td>{{$m->libelle_mois.' '.$m->annee}}</td>
                                                <td>
                                                <a href="/voir-cotisation/{{$m->id_mois}}" title="Ouvrir">
                                                <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-search"><font face="calibri"> Voir versements</font></i></button>
                                            </a> </td>
                                            <td>
                                                <a href="/delete-mois/{{$m->id_mois}}" title="Supprimer">
                                                <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                                </a>
                                                
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>#</th>
                                       <th>Libellé mois</th>
                                       <th>Cotisations</th>
                                       <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="data-table-list">
                    <h4></b>NOUVEAU MOIS </b></h4>
                    
                        <!-- <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div> -->
                        <div class="">
                        <form method="get" action="/create-mensualite">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Libellé mois</label>
                                    <div class="nk-int-st">
                                    <select class="selectpicker form-control input-sm" data-live-search="true" name="libelleMois" required>
                                        <option>--- Sélectionnez ---</option>
                                        <option value="Janvier">Janvier</option>
                                        <option value="Février">Février</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                        <option value="Juilliet">Juilliet</option>
                                        <option value="Aout">Aout</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Décembre">Décembre</option>
                                        
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Année</label>
                                    <div class="nk-int-st">
                                    <select class="selectpicker form-control input-sm" data-live-search="true" name="annee" required>
                                        <option>--- Sélectionnez ---</option>
                                        <?php
                                        for($i=2019;$i<=2023;$i++){
                                            
                                            ?>
                                            <option value="{{$i}}">{{$i}}</option>
                                            <?php
                                       }

                                        ?>

                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="breadcomb-report">
                             <a href="new-secteur"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Enregistrer</button></a>
                            </div>
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
    <!-- jquery
		============================================ -->
    <script src="{{'js/vendor/jquery-1.12.4.min.js'}}"></script>
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
    <script src="js/tawk-chat.js"></script></font>
</body>

</html>
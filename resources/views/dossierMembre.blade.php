<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>htdkh | Dossier membre</title>
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
    <?php include "menu.php";?>
    
    <!-- Inbox area Start-->
    <div class="inbox-area">
    <form method="post" action="/edit-member" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
						<div class="compose-ml">
                            <a class="btn" href="#"><B>DOSSIER MEMBRE</B></a>
                        </div>
                        <div class="inbox-status">
                            <div class="" align="center">
                                <img src="{{url('/images/'.$member->photo)}}">
                            </div><br><br>
                            <div class="form-group">
                                <font size="2">
                                    <label>Matricule</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="matricule" value="DK0021" readonly="true">
                                        <input type="hidden" class="form-control" name="id" value="{{$member->id}}" readonly="true">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Prénom</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="prenom" value="{{$member->prenom}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Nom</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nom" value="{{$member->nom}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Date de naissance</label>
                                    <div class="nk-int-st">
                                       <input type="text" class="form-control" name="dateNaiss" data-mask="99/99/9999" placeholder="jj/mm/aaaa" value="{{$member->dateNaiss}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Lieu de naissance</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="lieuNaiss" value="{{$member->lieuNaiss}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Situation matrimoniale</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="situationMatri" value="{{$member->situationMatrimoniale}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Nombre d'épouses</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nbreEpouse" value="{{$member->nbreEpouse}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Changer de photo</label>
                                    <div class="nk-int-st">
                                        <input type="file" class="form-control" name="photo" value="tof">
                                        <input type="hidden" class="form-control" name="photo_old" value="{{$member->photo}}">
                                    </div>
                                </font>
                            </div>
                            <div class="form-group">
                                <font size="2">
                                    <label>Pièce d'identité</label>
                                    <div class="nk-int-st">
                                        <input type="file" class="form-control" name="piece_identite" value="piece">
                                        <input type="hidden" class="form-control" name="piece_old" value=""><br>
                                        <a href=""> <button class="btn btn-danger"><b><u>Voir pièce d'identité</u></b></button></a>
                                    
                                    </div>
                                </font>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="inbox-text-list sm-res-mg-t-30">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcomb-report">
                                    <a href="/liste-membre"><div class="btn"><i class="notika-icon notika-support"> <font face="calibri">Liste membres</font> </i></div></a>
                                </div>

                        </div>
                        <div class="inbox-btn-st-ls btn-toolbar">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                
                            </div>
                            
                        </div>
                        
                        <h5><b><font color="green">CONTACTS</font></b></h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Adresse de résidence</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="adresse" value="{{$member->adresse}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Tel. Portable</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="telephone" value="{{$member->telephone}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Adresse email</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="email" value="{{$member->email}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div><br><br>
                        <h5><b><font color="green">ETUDES & QUALIFICATION(S)</font></b></h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Etude</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="etude" value="{{$member->etude}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Spécialité</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="specialite" value="{{$member->specialite}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Niveau d'étude</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="niveau_etude" value="{{$member->niveau_etude}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Diplôme(s) obtenu(s)</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="diplome" value="{{$member->diplomes}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Autre(s) compétence(s)</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="autresCompetences" value="{{$member->autreCompetences}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>enseignement Coranique ?</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="enseignementCoran" value="{{$member->enseignementCoran}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Nombre hizibs</label>
                                        <div class="nk-int-st">
                                            <input type="number" class="form-control" name="nbreHizib" value="{{$member->nbreHizib}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Oeuvre(s) maîtrisée(s)</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="oeuvre_maitrise" value="{{$member->oeuvre_maitrise}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Oeuvre(s) en cours d'étude</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="oeuvre_en_cour" value="{{$member->oeuvre_en_cour}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h5><b><font color="green">STATUT PROFESSIONNEL</font></b></h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Statut</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="statutProfessionnel" value="{{$member->statutProfessionnel}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Lieu de travail</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="lieuTravail" value="{{$member->lieuTravail}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Contact lieu de travail</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="telLieuTravail" value="{{$member->telLieuTravail}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h5><b><font color="green">DOSSIER MEDICAL & URGENCE</font></b></h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Atteint d'une maladie ?</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="malade" value="{{$member->malade}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Nom maladie</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nom_maladie" value="{{$member->nom_maladie}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Malade depuis ?</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="malade_depuis" value="{{$member->malade_depuis}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Précaution(s)</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="precaution" value="{{$member->precaution}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Personne à contacter en cas d'urgence</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="personne_urgence" value="{{$member->personne_urgence}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Lien de parenté</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="lien_parente_pu" value="{{$member->lien_parente_pu}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <font size="2"><br>
                                        <label>Adresse et contact d'urgence</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="adresse_tel_pu" value="{{$member->adresse_tel_pu}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div><br><br>
                        <h5><b><font color="green">INFOS DIVERS</font></b></h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Membres autre dahira ou Daara</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="membre_autreDaara" value="{{$member->membre_autreDaara}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Si oui, lequel ?</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="autre_dahira" value="{{$member->autre_dahira}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Année d'adhèsion</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="annee_adhesion" value="{{$member->annee_adhesion}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <br><div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Nationalité</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="nationalité" value="{{$member->nationalité}}" min="0">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Adresse parent(s)</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="adresseParent" value="{{$member->adresseParent}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <font size="2">
                                        <label>Telephone tuteur</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="telTuteur" value="{{$member->telTuteur}}">
                                        </div>
                                    </font>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="right">
                                <br>
                                <hr>
                                <br>
                            <button class="btn btn-success"><i class="notika-icon notika-draft"></i><b> Enregistrer les modifications</b></button>
                        </div>
                        </div><br>


                    </div>

                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- Inbox area End-->
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
    </div></div>
    <!-- End Footer area-->
    <!-- jquery
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
    <script src="{{url('/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('/js/main.js')}}"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="{{url('/js/tawk-chat.js')}}"></script>
</body>

</html>
<!doctype html>
<html class="no-js" lang="">

<head>
       <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Components | Notika - Notika Admin Template</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Invoice Print Area Start -->
    <div class="invoice-print">
        <a href="#" class="btn" data-ma-action="print"><i class="notika-icon notika-print"></i></a>
    </div>
    <!-- Invoice Print Area End -->
    <!-- Start Header Top Area -->
    <?php include "header.php" ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start 
    
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
										<h2>Nouvelle inscription</h2>
                                        <p>Veuillez renseigner les informations du nouveau membre</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="liste-membre"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Liste membres</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Invoice area Start-->
    <div class="invoice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="invoice-wrap">
                        
                        
                    
                    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                 <div class="form-element-list mg-t-30">
                        
                        <div class="row">

                <form method="post" action="/newInscription" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <fieldset>
                        <h5 class="alert alert-default">ETAT CIVIL DU MEMBRE</h5>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Matricule</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="matricule" required="required" placeholder="Entrez le matricule du membre">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="prenom" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="nom" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Date de naissance</label>
                                    <div class="nk-int-st">
                                       <input type="text" class="form-control" name="dateNaiss" data-mask="99/99/9999" placeholder="jj/mm/aaaa" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Lieu de naissance</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="lieuNaiss" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Genre</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="checked" value="M" class="i-checks" name="sexe"> <i></i> M</label>
                                            <label><input type="radio" class="i-checks" value="F" name="sexe"> <i></i> F</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Situation matrimoniale</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="checked" value="Marié" class="i-checks" name="situation"> <i></i> Marié(e)</label>
                                            <label><input type="radio" class="i-checks" value="Célibataire" name="situation"> <i></i> Célibataire </label>
                                            <label><input type="radio" class="i-checks" value="Divorcé" name="situation"> <i></i> Divorcé(e) </label>
                                            <label><input type="radio" class="i-checks" value="Veuf(ve)" name="situation"> <i></i> Veuf(ve) </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Avez-vous des enfants ?</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="" value="Oui" class="i-checks" name="enfant"> <i></i> OUI</label>
                                            <label><input type="radio" class="i-checks" value="Non" checked="checked" name="enfant"> <i></i> NON </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Nombre d'épouses</label>
                                    <div class="nk-int-st">
                                            <input type="number" class="form-control input-sm" name="nbrEpouse" placeholder="à préciser si vous ètes marié" min="0" max="4" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="radio" checked="" class="i-checks" name="sexe"> <i></i> M</label>
                                    <label><input type="radio" checked="" class="i-checks" name="sexe"> <i></i> F</label>
                                </div>
                            </div> -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Nationalité</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="nationalite" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>N° Téléphone</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="tel" placeholder="Ex : 77 500 00 00" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="adresse" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="mail" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </fieldset>

                    <fieldset>
                        <legend><h5 class="alert alert-default">ETUDES ET QUALIFICATIONS</h5></legend>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                            <div class="form-example-int">
                            <div class="form-group">
                                <label>Etudes</label>
                                <div class="nk-int-st">
                                    <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="etudes" required="required">
                                            <option>- - - Sélectionnez - - -</option>
                                            <option value="Elève">Elève</option>
                                            <option value="Etudiant">Etudiant</option>
                                            <option value="Arabe">Arabe</option>
                                            <option value="Franco-arabe">Franco-Arabe</option>
                                            <option value="Formation-professionnelle">Formation professionnelle</option>
                                            <option value="Majalis">Sciences religieuses (Majalis)</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Spécialité ou Qualification</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="specialite" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Niveau d'étude en la matière</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="niveauEtude" placeholder="Ou année d'expériences" required="required">
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Diplôme(s)</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="diplome" placeholder="Ex : CAP - BT - BTS - DT - Licence - DUT" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                            <div class="form-example-int">
                            <div class="form-group">
                                <label>Statut professionnel</label>
                                <div class="nk-int-st">
                                    <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="situationPro" required="required">
                                            <option>- - - Sélectionnez - - -</option>
                                            <option value="Secteur-privé">Secteur privé</option>
                                            <option value="Secteur-Informel">Secteur Informel</option>
                                            <option value="Fonctionnaire">Fonctionnaire de l'Etat</option>
                                            <option value="Ménagère">Ménagère</option>
                                            <option value="Chomeur">Chômeur</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Lieu de Travail</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="lieuTravail" placeholder=" " required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Tel lieu de travail</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="telLieuTravail" placeholder="Ou année d'expériences" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Autres compétences</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="autresCompetences" placeholder="Si, mettre néant !" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>


                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Adresse du parent ou tuteur</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="adressTuteur" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Tel tuteur</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="telTuteur" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Enseignement Coranique</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="checked" value="oui" class="i-checks" name="enseignCoran"> <i></i> OUI</label>
                                            <label><input type="radio" class="i-checks" value="non" name="enseignCoran"> <i></i> NON</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Nombre hizib</label>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control input-sm" name="nbreHizib" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                               
                                <div class="form-group">
                                    <label> <font size="2">Sciences religieuses : Ouvrage(s) maîtrisé(s)</font></label>
                                    <div class="nk-int-st">

                                        <textarea class="form-control auto-size" rows="2" name="scienceReligieuse" placeholder="Ouvrage 1 - ouvrage 2 - etc..." required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                               
                                <div class="form-group">
                                    <label> <font size="2">Ouvrage(s) en cours d'étude</font></label>
                                    <div class="nk-int-st">

                                        <textarea class="form-control auto-size" rows="2" name="ouvrageEncour" placeholder="Ouvrage 1 - ouvrage 2 - etc... Ou néant, si non" required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                               
                                <div class="form-group">
                                    <label> <font size="2">Kassidas mémorisés</font></label>
                                    <div class="nk-int-st">

                                        <textarea class="form-control auto-size" rows="2" name="xassidaMemo" placeholder="xasida 1 - xassida 2 - etc... Ou néant si non" required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MEMBRE AUTRE DAARA-->
                         <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Membre autre Daara ou Dahira ?</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="checked" value="oui" class="i-checks" name="autreDaara"> <i></i> OUI</label>
                                            <label><input type="radio" class="i-checks" value="non" name="autreDaara"> <i></i> NON</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Si oui, précisez !</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="autreDahira" placeholder="Lequel si existe ? sinon néant" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Depuis quand ?</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="annee_adh_dahira" placeholder="Lequel ?" required="required">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <legend align="left"><h5>DOSSIER MEDICAL</h5></legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Etes vous atteint d'une maladie chronique ?</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="" value="oui" class="i-checks" name="maladie"> <i></i> OUI</label>
                                            <label><input type="radio" checked="checked"class="i-checks" value="non" name="maladie"> <i></i> NON</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Si oui, Laquelle ?</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="nomMaladie" placeholder="Lequel ? sinon néant" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Depuis quand ?</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="maladeDepuis" placeholder="Lequel ? sinon néant" required="required">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Précaution(s)</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="precaution" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>En cas d'urgence, qui contacter ?</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="personnetUrgence" placeholder="Personne à contacter" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Lien de parenté</label>
                                    <div class="nk-int-st">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="lienParent" placeholder="" required="required">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Adresse - Téléphone</label>
                                    <div class="nk-int-st">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="contactUrgence" placeholder="" required="required">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                               
                                <div class="form-group">
                                    <label> <font size="2">Motivation à vouloir être membre de la daara ?</font></label>
                                    <div class="nk-int-st">

                                        <textarea class="form-control auto-size" rows="4" name="motivation" placeholder="Exprimez vos raisons" required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                               
                                <div class="form-group">
                                    <label> <font size="2">Avis et Remarques</font></label>
                                    <div class="nk-int-st">

                                        <textarea class="form-control auto-size" rows="4" name="avis" placeholder="Exprimez-vous..." required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Voulez-vous être membre conservatoire ?</label>
                                    <div class="nk-int-st">
                                        <div class="fm-checkbox">
                                            <label><input type="radio" checked="checked" value="oui" class="i-checks" name="conservatoire"> <i></i> OUI</label>
                                            <label><input type="radio" class="i-checks" value="non" name="conservatoire"> <i></i> NON</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label> <font size="2">Photo d'identité</font></label>
                                        <input type="file" class="form-control input-sm" name="photo" placeholder="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                            <div class="form-example-int">
                            <div class="form-group">
                                <label>Affecter membre à un secteur</label>
                                <div class="nk-int-st">
                                    <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true" name="secteur">
                                            <option value="0">Pas encore</option>
                                            <?php
                                            foreach ($secteurs as $sect) {
                                               ?>
                                               <option value="{{$sect->id_secteur}}">{{$sect->libelle}}</option>
                                               <?php
                                            }

                                            ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        
                </div>

                    </fieldset>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               
                        <!-- <div class="form-example-int">
                            <div class="form-group">
                                <label>Responsable du secteur</label>
                                <div class="nk-int-st">
                                    <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true">
                                            <option>- - - Sélectionnez - - -</option>
                                            <option>Cariska</option>
                                            <option>Cheriska</option>
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
                                        </select>
                                </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-report">
                                    <a href="new-secteur"><button data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i> Valider l'inscription</button></a>
                                </div>
                            </div>
                         
                        
                        </div>
                        <div class="row">
                            
                            
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 
. Pôle Technique Hizbut Tarqiyyah Darou Khoudoss : Section Informatique</p>
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
    <!-- Input Mask JS
        ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MemberController extends Controller
{
    public function index(){

    }
    public function create(){
        $secteurs = DB::table('secteur')->get();
    	return view('newMember', compact('secteurs'));
    }
    public function liste(){
    	$members = DB::table('membre')->where('is_actif','=','1')->get(); 
    	return view('listeMembre', compact('members'));
    }
    public function addMember(Request $request){
        //  Upload member profi 
        $photoName = "admin.png";
        if(isset($request->photo)){
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $photoName);
        }
        
        // end upload
    DB::table('membre')->insert(
    array(	'prenom'             =>$request->prenom,
            'matricule'          =>$request->matricule,
            'nom'                =>$request->nom,
            'dateNaiss'          =>$request->dateNaiss,
            'lieuNaiss'          =>$request->lieuNaiss,
            'genre'              =>$request->sexe,
            'situationMatrimoniale'=>$request->situation,
            'enfant'             =>$request->enfant,
            'nationalité'        =>$request->nationalite,
            'nbreEpouse'         =>$request->nbrEpouse,
            'etude'              =>$request->etudes,
            'specialite'         =>$request->specialite,
            'niveau_etude'       =>$request->niveauEtude,
            'diplomes'           =>$request->diplome,
            'statutProfessionnel'=>$request->situationPro,
            'lieuTravail'        =>$request->lieuTravail,
            'telLieuTravail'     =>$request->telLieuTravail,
            'telephone'          =>$request->tel,
            'adresse'            =>$request->adresse,
            'email'              =>$request->mail,
            'autreCompetences'   =>$request->autresCompetences,
            'adresseParent'      =>$request->adressTuteur,
            'telTuteur'          =>$request->telTuteur,
            'enseignementCoran'  =>$request->enseignCoran,
            'nbreHizib'          =>$request->nbreHizib,
            'oeuvre_maitrise'    =>$request->scienceReligieuse,
            'oeuvre_en_cour'     =>$request->ouvrageEncour,
            'khassida_memorise'  =>$request->xassidaMemo,
            'membre_autreDaara'  =>$request->autreDaara,
            'autre_dahira'       =>$request->autreDahira,
            'annee_adhesion'     =>$request->annee_adh_dahira,
            'malade'             =>$request->maladie,
            'nom_maladie'        =>$request->nomMaladie,
            'malade_depuis'      =>$request->maladeDepuis,
            'precaution'         =>$request->precaution,
            'personne_urgence'   =>$request->personnetUrgence,
            'lien_parente_pu'    =>$request->lienParent,
            'adresse_tel_pu'     =>$request->contactUrgence,
            'motivation'         =>$request->motivation,
            'avis'               =>$request->avis,
            'photo'              =>$photoName,
            'conservatoire'      =>$request->conservatoire,
            'secteur'            =>$request->secteur,
            'kourel'             =>0,
            'is_actif'           =>1
             ));
            
    	$members = DB::table('membre')->where('is_actif','=','1')->get(); 
    	return view('listeMembre', compact('members'));
        
    }
    public function dossierMembre($id){
    $member = DB::table('membre')->where('id', $id)->first();
    return view('dossierMembre',compact('member'));
    }
    public function archiver($id){
        DB::table('membre')
            ->where('id', $id)->update(array('is_actif'=>0) );
        return redirect()->back();
    }
    public function show_archive(){
        $members = DB::table('membre')->where('is_actif','=','0')->get(); 
    	return view('archive', compact('members'));
    }
    public function restore_member($id){
        DB::table('membre')
            ->where('id', $id)->update(array('is_actif'=>1) );
        return redirect()->back();
    }
    public function edit_member(Request $request)
    {
         
        if(isset($request->photo)){
            $photoName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $photoName);
        }
        else $photoName = $request->photo_old;
        DB::table('membre')->where('id',$request->id)
        ->update(array(
            'prenom'             =>$request->prenom,
            'nom'                =>$request->nom,
            'dateNaiss'          =>$request->dateNaiss,
            'matricule'          =>$request->matricule,
            'lieuNaiss'          =>$request->lieuNaiss,
            // 'genre'              =>$request->sexe,
            'situationMatrimoniale'=>$request->situationMatri,
            // 'enfant'             =>$request->enfant,
            // 'nationalité'        =>$request->nationalite,
            'nbreEpouse'         =>$request->nbreEpouse,
            'etude'              =>$request->etude,
            'specialite'         =>$request->specialite,
            'niveau_etude'       =>$request->niveau_etude,
            'diplomes'           =>$request->diplome,
            'statutProfessionnel'=>$request->statutProfessionnel,
            'lieuTravail'        =>$request->lieuTravail,
            'telLieuTravail'     =>$request->telLieuTravail,
            'telephone'          =>$request->telephone,
            'adresse'            =>$request->adresse,
            'email'              =>$request->email,
            'autreCompetences'   =>$request->autresCompetences,
            'adresseParent'      =>$request->adresseParent,
            'telTuteur'          =>$request->telTuteur,
            'enseignementCoran'  =>$request->enseignementCoran,
            'nbreHizib'          =>$request->nbreHizib,
            'oeuvre_maitrise'    =>$request->oeuvre_maitrise,
            'oeuvre_en_cour'     =>$request->oeuvre_en_cour,
            // 'khassida_memorise'  =>$request->xassidaMemo,
            'membre_autreDaara'  =>$request->membre_autreDaara,
            'autre_dahira'       =>$request->autre_dahira,
            'annee_adhesion'     =>$request->annee_adhesion,
            'malade'             =>$request->malade,
            'nom_maladie'        =>$request->nom_maladie,
            'malade_depuis'      =>$request->malade_depuis,
            'precaution'         =>$request->precaution,
            'personne_urgence'   =>$request->personne_urgence,
            'lien_parente_pu'    =>$request->lien_parente_pu,
            'adresse_tel_pu'     =>$request->adresse_tel_pu,
            // 'motivation'         =>$request->motivation,
            // 'avis'               =>$request->avis,
            'photo'              =>$photoName,
            // 'conservatoire'      =>$request->conservatoire,
            'secteur'            =>$request->secteur,
            'kourel'             =>0
        ));
        return redirect()->back();
    }
}

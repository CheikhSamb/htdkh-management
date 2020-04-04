<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class SecteurController extends Controller
{
    public function index(){
    	$secteurs = DB::table('secteur')->get(); 
    	return view('secteur2', compact('secteurs'));
    }
    public function create(){
        $members = DB::table('membre')->get();
    	return view('newSecteur',compact('members'));
    }
    public function createSecteur(Request $request){
    	//return $request->input('libelleSecteur');

    DB::table('secteur')->insert(
    array('libelle' => $request->libelleSecteur, 'responsable' => $request->responsable));
    $secteurs = DB::table('secteur')->get(); 
    return view('secteur2', compact('secteurs'));

    }
    public function showSecteurMembers($id){
        $members = DB::table('membre')->where('secteur', $id)->get();
        $secteur = DB::table('secteur')->where('id_secteur',$id)->first(); 
        return view('membreSecteur',compact('members','secteur'));
    }
    public function addSecteurMembers($id){
        $members = DB::table('membre')->where('secteur','=','0')->get(); 
        $secteur = DB::table('secteur')->where('id_secteur',$id)->first();
        return view('addMemberSecteur', compact('members','secteur'));
    }
    public function addMembers(Request $request){
        $memb = $request->members;
        foreach ($memb as $m) {
        DB::table('membre')
        ->where('id', $m)
        ->update(array('secteur' => $request->secteur_id));
        }
        $secteurs = DB::table('secteur')->get(); 
        return view('secteur2', compact('secteurs'));
    }
    public function listeMensualite(){
        $mois = DB::table('mois')->get(); 
        return view('mensualite', compact('mois'));
    }
    public function createMensualite(Request $request){
        DB::table('mois')->insert(
            array('libelle_mois' => $request->libelleMois, 'annee' => $request->annee));
            $mois = DB::table('mois')->get(); 
            return redirect()->back();
    }
    public function showCotisation(){
        $members = DB::table('membre')->where('is_actif','=','1')->get(); 
    	return view('listeMensualite', compact('members'));
    }
}

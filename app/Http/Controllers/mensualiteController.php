

<?php

use Illuminate\Http\Request;
use DB;
class mensualiteController extends Controller
{
    public function index(){
        $mois = DB::table('mois')->get(); 
        return view('mensualite');
    }
    public function create(Request $request){
        DB::table('mois')->insert(
            array('liblibelle_mois' => $request->libelleMois, 'annee' => $request->annee));
            $mois = DB::table('mois')->get(); 
            return redirect()->back();
    }
}

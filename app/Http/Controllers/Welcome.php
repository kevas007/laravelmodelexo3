<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index()
    {
        //all members
        $allMembres = Membre::all();
        //les hommes
        // $hommes =Membre::all()->where('genre','=',  'Homme');
        $hommes = Membre::where('genre','=',  'Homme')->get();
        //les femmes
        $femmes = Membre::where('genre','=',  'Femme')->get();
        //les hommes entre 18 et 24 ans
        $hommes1824 = Membre::where('genre','=',  'Homme')->whereBetween('age', [18, 24])->get();
        //les femmes entre 18 et 24 ans
        $femmes1824 = Membre::where('genre','=',  'Femme')->whereBetween('age', [18, 24])->get();
        //les memebres exclus entre 18 et 24 ans
        $exclus1824 = Membre::whereNotBetween('age', [18, 24])->get();

        return view('welcome',compact('allMembres', 'hommes', 'femmes', 'hommes1824', 'femmes1824', 'exclus1824'));
    }
}

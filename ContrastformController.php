<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContrastformController extends Controller
{
    
    
     
    public function index(Request $request)
    {   
        $name = $request->input('name');
        $bun = $request->input('bun');
        $creatinine = $request->input('creatinine');
        $gfr = $request->input('gfr');
        $contrasttype = $request->input('contrasttype');
        $contrastamount = $request->input('contrastamount');
        $needlegauge = $request->input('needlegauge');
        $contrastreaction = $request->input('contrastreaction');
          
        return view('/contrastform' , compact('name','bun' ,'creatinine', 'gfr', 'contrasttype', 'needlegauge' ,'contrastamount', 'contrastreaction'));
 
        
    }
    

}
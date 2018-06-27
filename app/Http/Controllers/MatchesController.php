<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	$matches = Match::all();

    	return view('matches.index',compact('matches'));
    }

    public function show($id){

    	$match = Match::find($id);

    	return $match;

    	return view('matches.show', compact('match'));
    }

    public function create(){
    	return view('matches.create');
    }

    public function store(){
    	$match = new Match;

    	$this->validate(request(),[
    		'first' => 'required',
    		'second' => 'required'
    	]);

    	$match->first_team = request('first');
    	$match->second_team = request('second');
    	$match->first_result = 2 + 3;

    	$match->save();

    	return redirect('/matches');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\Match;
use Auth;


class ProposalsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
		return view('proposals.index');
	}

    public function create(){

    	$matches = Match::all();

    	return view('proposals.create', compact('matches'));
    }

    public function store(){

    	$proposal = new Proposal;
    	$match = new Match;
    	$user = Auth::User();
    	$this->validate(request(),[
    		'team_one' => 'required',
    		'team_two' => 'required'
    	]);

    	$proposal->team_one = request('team_one');
    	$proposal->team_two = request('team_two');
    	$proposal->user_id = $user->id;
    	$proposal->match_id = request('match');
    	$proposal->points = request('team_one') + request('team_two');

    	$proposal->save();

    	return redirect('/proposals/create');

    }
}

<?php

namespace App\Http\Controllers;

use DB;
use View;
use Session;
use Auth;
use App\Team;
use App\User;
use App\University;
use App\Competition;
use App\Participant;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function listTeam()
    {
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            $participants = new Participant();
            return View::make('listTeam')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('participants', $participants)
                        ->with('users', $users);
        
    }
}

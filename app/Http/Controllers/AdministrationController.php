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

class AdministrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }   
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 0)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            return View::make('administrations.index')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function registeredTeam()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 0)->whereNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.registered')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function verifiedTeam()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.verified')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }
    public function verifiedBusinesssPlan()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.verifiedBusiness')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }
    public function verifiedDesign()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.verifiedDesign')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }
    public function verifiedProgramming()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $participants = new Participant();
            $users = new User();
            return View::make('administrations.verifiedProgramming')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('participants', $participants)
                        ->with('users', $users);
        }
    }
    public function verifiedRobotic()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.verifiedRobotic')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }
    public function verifiedSecurity()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.verifiedSecurity')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }

    public function listParticipant($id)
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 1)->whereNotNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            $selected = isset($id)?$id:1;
            return View::make('administrations.listParticipant')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users)
                        ->with('selected', $selected);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function verification($id)
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payment = Payment::where('id_team',$id)->first();
            $payment->verify = 1;
            $payment->save();
            return Redirect::to('administrations');
        }
        
    }

    public function destroyTeam($id)
    {
        DB::beginTransaction();
        try
        {
            // delete team
            $team = Team::find($id);        

            //delete Universitas
            $university = University::find($team->id_university);
            $university->delete();

            $team->delete();

            // delete participant
             $participant = Participant::where('id_team', $id)->delete();

            //delete payment 
             $payment = Payment::where('id_team', $id)->delete();

             //delete user 
             $user = User::where('id_team', $id)->delete();

             DB::commit();
            // redirect
            Session::flash('message', 'Successfully deleted the team '.$team->name);
            return Redirect::to('trashTeam');
        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }
    }

    public function trashTeam()
    {
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            $payments = Payment::where('verify', 0)->whereNull('evidence')->get();
            $teams = new Team();
            $universities = new University();
            $competitions = new Competition();
            $users = new User();
            return View::make('administrations.trash')
                        ->with('payments', $payments)
                        ->with('teams', $teams)
                        ->with('universities', $universities)
                        ->with('competitions', $competitions)
                        ->with('users', $users);
        }
    }
    
}

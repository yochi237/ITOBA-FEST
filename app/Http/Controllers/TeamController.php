<?php

namespace App\Http\Controllers;
use View;
use Session;
use Auth;

use App\User;
use App\Team;
use App\FileUpload;
use App\University;
use App\Competition;
use App\Payment;
use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TeamController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::user()->verified==0){
            Session::flash('message', 'Aktivasi akun anda melalui email yang anda daftarkan !');
            Auth::logout();
            return Redirect::to('login');
        }
        if(Auth::user()->verified==1 && Auth::user()->email=="admin_itf@del.ac.id"){
            return Redirect::to('administrations');
        }   
         $teams = Team::find(Auth::user()->id_team);
         
         $universities = University::find($teams->id_university);
         $competitions = Competition::find($teams->id_competition); 
        // var_dump($competitions);
         $participants = Participant::where('id_team', $teams->id)->get();
         $payment = Payment::where('id_team', $teams->id)->first(); 
        return View::make('teams.index')->with('teams', $teams)
							        ->with('universities', $universities)
							        ->with('competitions', $competitions)
							        ->with('participants', $participants)
                                    ->with('payment', $payment);
    }
	
	public function createadm()
    {

        return User::create([
            'name' => 'perdana',
            'email' => "admin_itf@del.ac.id",
            'id_team'=>0,
            'password' => bcrypt("admin_itfdevi"),
            'email_token' => str_random(20),
        ]);
		die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/teams/create.blade.php)
        return View::make('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('teams/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $request->get('name');
            
            $team = new Team();
            $team->name       = $request->get('name');
            $team->id_university      = $request->get('id_university');
            $team->supervisor = $request->get('supervisor');

            $team->save();

            // redirect
            Session::flash('message', 'Successfully created team!');
            return Redirect::to('teams');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //$team = Team::find($id);

        // show the view and pass the team to it
        //return View::make('teams.show')->with('team', $team);
        return Redirect::to('teams');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the team
        if($id==Auth::user()->id_team){
            $team = Team::find($id);
            $comp = Competition::find($team->id_competition);

            // show the edit form and pass the team
            return View::make('teams.edit')->with('team', $team)->with('comp', $comp);
        }
        return Redirect::to('teams');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // validate
        if($id==Auth::user()->id_team){
            $rules = array(
                'name'       => 'required',
                
            );
            $validator = Validator::make($request->all(), $rules);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('teams/' . $id . '/edit')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                
                $team = Team::find($id);

                $team->name       = $request->get('name');
                $team->supervisor      = $request->get('supervisor');
                $team->save();             
                

                // redirect
                Session::flash('message', 'Berhasil mengubah informasi team !');
                return Redirect::to('teams');
            }
        }
        return Redirect::to('teams');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function pay()
    {
        return View::make('teams.pay');
    }
    /**
     * Update the specified resource in storage.
     *     
     * @return Response
     */
    public function paidreg(Request $request){        

       if($request->img_evidence){
            $file = $request->img_evidence; 
            $filename = $file->getClientOriginalName();
            $file->move(base_path('../').'/file/KTM/'.Auth::user()->id."/","trf_".$file->getClientOriginalName());

            $payment = Payment::where('id_team', Auth::user()->id_team)->first(); 

            $payment->id_team       = Auth::user()->id_team;
            $payment->evidence      = 'file/KTM/'.Auth::user()->id."/trf_".$filename;
            $payment->save();
            
            // redirect
            Session::flash('message', 'Pembayaran anda akan dikonfirmasi dalam 24 jam !');
            
        }
        return Redirect::to('teams');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        /*$team = Team::find($id);
        $team->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the team!');
        return Redirect::to('teams');
        */
    }
    public function rulesSubmission(){
        $team = Team::find(Auth::user()->id_team);
        if($team===null)
            return Redirect::to('teams');
        if($team->id_competition==1)
            return View::make('rulesBP');
        else if($team->id_competition==2)
            return View::make('rulesDes');
        else if($team->id_competition==3)
            return View::make('rulesProg');
        else if($team->id_competition==5)
            return View::make('rulesSec');
        else return Redirect::to('teams');

    }
    /*public function uploadFile(){
        $team = Team::find(Auth::user()->id_team);
        return View::make('teams.uploadFile')->with('team',$team);
    }
    public function storeFile(Request $request){
        $fileUpload = new FileUpload();
        $team = Team::find(Auth::user()->id_team);
      
        if($request->hasFile('proposal')){
                $file = $request->proposal; 
                $filename = $file->getClientOriginalName();
                $file->move(base_path("../").'/file/KTM/'.Auth::user()->id."/proposal_".$team->name."".$request->proposal->extension(),$file->getClientOriginalName());
            $fileUpload->pathFile     = 'file/KTM/'.Auth::user()->id."/proposal_".$team->name."".$request->proposal->extension(); 
            $fileUpload->team_id = $team->id;
            $fileUpload->save();
        }
        $participant->save();
                
        Session::flash('message', 'Berhasil mengubah informasi peserta !');
        return Redirect::to('teams');
    }*/

}

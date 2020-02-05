<?php

namespace App\Http\Controllers;

use View;
use Session;
use Auth;
use App\Team;
use App\University;
use App\Competition;
use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ParticipantController extends Controller
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
    public function show($id)
    {
        $participant = Participant::find($id);
        return View::make('participants.show')->with('participant', $participant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
        $participant = Participant::find($id);
        if(!empty($participant) && $participant->id_team==Auth::user()->id_team){
            return View::make('participants.edit')->with('participant', $participant);
        }
        return Redirect::to('teams');
    }
    public function create(){
        $row = Participant::where('id_team',Auth::user()->id_team)->count();
        $team = Team::find(Auth::user()->id_team);
        if($row<3 && ($team->id_competition==1 || $team->id_competition==4 || $team->id_competition==5))
            return View::make('participants.create');
        return Redirect::to('teams');
    }
    public function store(Request $request){
        $rules = array(
                'id_stu'       => 'required',
                'name'       => 'required',
                'major'       => 'required',
                'stump'       => 'required',
                );
        $messages = [
                'id_stu.required' => 'Nomor Induk Mahasiswa harus diisi',
                'name.required' => 'Nama Peserta Harus diisi',
                'major.required' => 'Program Studi harus diisi',
                'stump.required' => 'Tahun Masuk harus diiisi',                
            ];
            $validator = Validator::make($request->all(), $rules, $messages); 
            if ($validator->fails()) {
                return Redirect::to('participants/create')
                    ->withErrors($validator);
            } else {
                $participant = new Participant();
                $team = Team::find(Auth::user()->id_team);
                if($team->id_competition==1 || $team->id_competition==4 || $team->id_competition==5){
                    $participant->id_stu       = $request->get('id_stu');
                    $participant->name      = $request->get('name');
                    $participant->major      = $request->get('major');
                    $participant->stump     = $request->get('stump');
                    $participant->id_team = Auth::user()->id_team;
                    $participant->save();
                }
                return Redirect::to('teams');
            }       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
            $rules = array(
                'id_stu'       => 'required',
                'name'       => 'required',
                'major'       => 'required',
                'stump'       => 'required',
            );
            $messages = [
                'id_stu.required' => 'Nomor Induk Mahasiswa harus diisi',
                'name.required' => 'Nama Peserta Harus diisi',
                'major.required' => 'Program Studi harus diisi',
                'stump.required' => 'Tahun Masuk harus diiisi',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('participants/' . $id . '/edit')
                    ->withErrors($validator);
            } else {
            	$participant = Participant::find($id);
                if(!empty($participant) && $participant->id_team==Auth::user()->id_team){
                    $participant->id_stu       = $request->get('id_stu');
                    $participant->name      = $request->get('name');
                    $participant->major      = $request->get('major');
                    $participant->stump     = $request->get('stump');
                    if($request->hasFile('img_ktm')){
                        $file = $request->img_ktm; 
                        $filename = $file->getClientOriginalName();
                        $file->move(base_path("../").'/file/KTM/'.Auth::user()->id."/",$file->getClientOriginalName());
                        $participant->img_ktm     = 'file/KTM/'.Auth::user()->id."/".$filename; 
                    }
                }
                $participant->save();
                
                Session::flash('message', 'Berhasil mengubah informasi peserta !');
                return Redirect::to('teams');
            }
        
        return Redirect::to('teams');
    }
}

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
class UniversityController extends Controller
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
        $university = University::find($id);

        // show the view and pass the team to it
        return View::make('universities.show')->with('university', $university);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if($id==Auth::user()->id_team){
            $university = University::find($id);

            return View::make('universities.edit')->with('university', $university);
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
        if($id==Auth::user()->id_team){
            $rules = array(
                'name'       => 'required',
                'address'       => 'required',
            );
            $validator = Validator::make($request->all(), $rules);

            // process the login
            if ($validator->fails()) {
                return Redirect::to('universities/' . $id . '/edit')
                    ->withErrors($validator);
            } else {
               
                $university = University::find($id);

                $university->name       = $request->get('name');
                $university->address      = $request->get('address');
                $university->save();
                
                Session::flash('message', 'Berhasil mengubah informasi univertas / institusi !');
                return Redirect::to('teams');
            }
        }
        return Redirect::to('teams');

    }

    
    
}

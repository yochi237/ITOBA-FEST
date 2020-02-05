<?php

namespace App\Http\Controllers;
use View;
use App\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SeminarController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }  
    
    public function createSeminar(){
    	$seminars= new Seminar();
    	return View::make('seminars.createSeminar')->with('seminars',$seminars);
    }

    public function createWorkshop(){
    	$seminars= new Seminar();
    	return View::make('seminars.createWorkshop')->with('seminars',$seminars);
    }

    public function storeSeminar(Request $request){
    	$rules =  [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:seminars',
            'institution' => 'required|max:255',                       
        ];
        $messages = [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi dan unik',
                'intitution.required' => 'Institusi / Instansi / Sekolah harus diiisi',                
            ];
            $validator = Validator::make($request->all(), $rules, $messages); 
            if ($validator->fails()) {
                return Redirect::to('SeminarWorkshop/createSeminar')
                    ->withErrors($validator);
            } else {
            	$seminar = new Seminar();
	            $seminar->name       = $request->get('name');
	            $seminar->institution      = $request->get('institution');
	            $seminar->email = $request->get('email');
	            $seminar->category = 1;
	            $seminar->save();
            }
           return Redirect::to('/');
    }

    public function storeWorkshop(Request $request){
    	$rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:seminars',
            'institution' => 'required|max:255',            
        ];
        $messages = [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi dan unik',
                'intitution.required' => 'Institusi / Instansi / Sekolah harus diiisi',                                
            ];
            $validator = Validator::make($request->all(), $rules, $messages); 
            if ($validator->fails()) {
                return Redirect::to('SeminarWorkshop/createWorkshop')
                    ->withErrors($validator);
            } else {
            	$seminar = new Seminar();
	            $seminar->name       = $request->get('name');
	            $seminar->institution      = $request->get('institution');
	            $seminar->email = $request->get('email');
	            $seminar->category = 2;
	            $seminar->save();
            }
        return Redirect::to('/');
    }
    
}

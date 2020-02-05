<?php

namespace App\Http\Controllers;


use DB;
use Mail;
use Session;
use Auth;
use App\Team;
use App\User;
use App\University;
use App\Participant;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RegisterTeamController extends Controller
{
	protected function BPregister(){
		return view('/auth/BPregister');
	}
	protected function CPregister(){
		return view('/auth/CPregister');
	}
	protected function Essregister(){
		return view('/auth/Essregister');
	}
	protected function CTFregister(){
		return view('/auth/CTFregister');
	}
	protected function UIregister(){
		return view('/auth/UIregister');
	}
	protected function ROregister(){
		return view('/auth/ROregister');
	}
}
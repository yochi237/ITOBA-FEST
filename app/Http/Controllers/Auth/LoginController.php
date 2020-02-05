<?php

namespace App\Http\Controllers\Auth;
use Auth;
//use App\Http\Controllers\Auth\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $auth;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/teams';

    /**
     * Create a new controller instance.
     *
     * LoginController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->auth = $auth;
    }


    
    public function logout() {

        Auth::logout();
        return view('welcome');

    }
   /* 
    public function login(Request $request)
    {
        $username      = $request->get('username');
        $password   = $request->get('password');
        $remember   = $request->get('remember');
        if (Auth::attempt(['email' => $username, 'password' => md5(md5($password))])) {
            // The user is active, not suspended, and exists.
            return redirect('teams');
        }        
        else { 
            return redirect()->back()
                ->with('message','Incorrect username or password')
                ->with('status', 'danger')
                ->withInput();
        }
 
    }*/
    /*
    public function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'verified' => 1,
        ];
    }*/
}

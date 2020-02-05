<?php

namespace App\Http\Controllers\Auth;


use DB;
use Mail;
use Session;
use App\User;
use App\University;
use App\Team;
use App\Participant;
use App\Payment;
use Validator;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth\Request
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/teams';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_team' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function createadm()
    {
        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin_itf@del.ac.id";
        $user->id_team = 0;
        $user->password = bcrypt("admin_itfdevi");
        $user->email_token = str_random(20);
        $user->save();
		die();
    }
    protected function createUser(array $data, $id_team)
    {
        
        $user = new User();
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->id_team = $id_team;
        $user->password = bcrypt($data['password']);
        $user->email_token = str_random(20);
        $user->save();
        return $user;
    }
    
    protected function createTeam(array $data, $id_univ)
    {
        
        $team = new Team();
        $team->name = $data['name_team'];
        $team->id_competition = $data['lomba'];
        $team->id_university = $id_univ;
        $team->supervisor = $data['supervisor'];
        $team->save();
        return $team;
    }
    protected function createParticipant(array $data, $id_team)
    {

        $participant = new Participant();
        $participant->id_stu = $data['id_part1'];
        $participant->name = $data['name_part1'];
        $participant->id_team = $id_team;
        $participant->save();
        if(trim($data['id_part2'])!="" && trim($data['name_part2'])!=""){
            $participant = new Participant();
            $participant->id_stu = $data['id_part2'];
            $participant->name = $data['name_part2'];
            $participant->id_team = $id_team;
            $participant->save();
        }
        if(trim($data['id_part3'])!="" && trim($data['name_part3'])!=""){
            $participant = new Participant();
            $participant->id_stu = $data['id_part3'];
            $participant->name = $data['name_part3'];
            $participant->id_team = $id_team;
            $participant->save();
        }

    }
    protected function createUniversity(array $data)
    {
        $university = new University();
        $university->name = $data['name_univ'];
        $university->address = $data['addr_univ'];
        $university->save();
        return $university;
    }
     protected function createPayment($id_team)
    {
        $payment = new Payment();
        $payment->id_team = $id_team;
        $payment->save();
        return $payment;
    }
    public function register(Request $request)
    {
        
        // Laravel validation
        $validator = $this->validator($request->all());
        if ($validator->fails()) 
        {
            $this->throwValidationException($request, $validator);
        }

        // Using database transactions is useful here because stuff happening is actually a transaction
        // I don't know what I said in the last line! Weird!

        DB::beginTransaction();
        try
        {
            
            $university = $this->createUniversity($request->all());
            $team = $this->createTeam($request->all(),$university->id);
            $participant = $this->createParticipant($request->all(),$team->id);
            $payment = $this->createPayment($team->id);
            
            $user = $this->createUser($request->all(),$team->id);
            
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));
            Mail::to($user->email)->send($email);
            DB::commit();
            Session::flash('message', 'Kode aktivasi akun sudah dikirimkan ke email anda !');
            return redirect('login');
        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }
    }
    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        $user = User::where('email_token',$token)->first();
        if(!empty($user)){
            $user->verified();
            Session::flash('message', 'Akun anda berhasil diaktivasi !');
        }else{

            Session::flash('message', 'Akun anda sudah diaktivasi !');
            
        }
        
        return redirect('login');
    }
}
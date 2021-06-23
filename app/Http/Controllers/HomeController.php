<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

use App\jobseeker;
use App\diplome;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $listUsers, jobseeker $jobseeker, diplome $diplome)
    {
        $listUsers = $listUsers->all();
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        $etat = 'fermer';
        $id_user = '';
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'id_user'));
    }

    public function indexRecrutement(jobseeker $jobseeker)
    {
        $listjobseeker = $jobseeker->all();
        return view('recrutement',compact('listjobseeker'));
    }

    public function createUser(User $user, jobseeker $jobseeker, diplome $diplome)
    {
        $user->name = $_POST['name_user'];
        $user->email = $_POST['email_user'];
        $user->password = Hash::make($_POST['password_user']);
        $user->save();


        $listUsers= $user->all();
        $id_user = '';
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'id_user'));
    }

    
    public function formupdateUser(User $user, jobseeker $jobseeker, diplome $diplome){
        //change etat
        $id_user = $_POST['btn_update_iduser'];
        $user_update = User::find($id_user);
		$listUsers= $user->all();
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('formUpdateUser',compact('listUsers', 'listjobseeker', 'listdiplome','id_user'));

    }
	
	public function updateUser(User $user, jobseeker $jobseeker, diplome $diplome){
        //get info jobseeker
        $id_user = $_POST['btn_update_iduser'];
        $name_user = $_POST['name_user'];
        $email_user = $_POST['email_user'];
        $password_user = $_POST['password_user'];
		


        $user = User::find($id_user);
		//
        $user->name=$name_user;
		$user->email=$email_user;
        $user->password = Hash::make($password_user);
		$user->save();

		$listUsers= $user->all();
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'id_user'));


    }

    public function deleteUser(User $user, jobseeker $jobseeker, diplome $diplome){
        //get id contact 
        $id_user = $_POST['btn_delete_iduser'];

        //Find user get id
        $user = User::find($id_user);
        //Delete user by id
        $user->delete();

        $listUsers= $user->all();
        $etat = 'fermer';
        $listjobseeker = $jobseeker->all();
        $listdiplome = $diplome->all();
        return view('home',compact('listUsers', 'listjobseeker', 'listdiplome', 'id_user'));
    }



}

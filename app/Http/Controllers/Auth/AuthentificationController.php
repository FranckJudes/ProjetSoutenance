<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthentificationController extends Controller
{

    // return vu login
    public function login()
    {
         return view('FontEnd.login');
    }

    // Vue d'enregistrement
    public function register()
    {
        return view('FontEnd.register');
    
    }

    //Logout User
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('/');
    }
    
    //Enregistrer un nouveau etudiant

    public function validation_inscription()
    {
        
    }

    // Connexion d'un etudiant 
    public function validation_login(){
        
    }


    //Dashboard vers la page d'acceuil  
    public function dashboard(){
        
    }
}
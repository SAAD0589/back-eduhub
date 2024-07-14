<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request){
        return User::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'image'=>'https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'Adresse'=>$request->input('Adresse'),
            'NumTelephone'=>$request->input('NumTelephone'),
            'dateDeNaissance'=>$request->input('dateDeNaissance'),
            'niveauAcademique'=>$request->input('niveauAcademiqueom'),
            'filiereAcademique'=>$request->input('filiereAcademique'),
            'Genre'=>$request->input('Genre'),
        ]);
    }
    public function login(Request $request){

        if(!Auth::attempt($request->only('email','password'))){
         return response([
             'message'=>'Invalid credianls'
         ],Response::HTTP_UNAUTHORIZED);
        }
        $user=Auth::user();
        $token=$user->createToken('token')->plainTextToken;
        $cookie=cookie('jwt',$token,60*24); // 1 day
 
        return response([
             'message'=>$token,
        ])->withCookie($cookie);
     }
     public function user(){
        return Auth::user();
    }  
    public function logout(){
        $cookie=Cookie::forget('jwt');
        return response([
            'message'=>'Success'
        ])->withCookie($cookie);
    }
}
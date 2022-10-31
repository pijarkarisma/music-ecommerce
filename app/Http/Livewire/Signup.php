<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Fascades\Auth;
use App\Model\User;
use app\providers\RouteServiceProvider;

class Signup extends Component
{
    public $first_name,$last_name,$email,$phone,$password,$password_confirmation;
    public function render()
    {
        return view('livewire.signup')->extends('layouts.app');
    }

    public function rules(){
        return[
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email','unique:users'],
            'phone'=>['required'],
            'password'=>['required','confirmed'],
        ];
    }
 

    public function registerUser(){
        
        $this->validate();

        $user = User::create([
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'phone' => $this->phone,
        'password' => bcrypt($this->password)

        ]);
        Auth:login($user,true);
        return redirect()->to('/login');
    }
}

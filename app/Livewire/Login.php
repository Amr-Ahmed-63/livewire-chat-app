<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function submit()
    {
        if(Auth::attempt(["email"=>$this->email,"password"=>$this->password])){
            $id = User::where("email",$this->email)->get("id");
            session(['id' => $id]);
            return redirect("/index");
        }else{
            session()->flash("fail","E-mail or password is incorrect");
        };
    }

    public function render()
    {
        return view('livewire.login');
    }
}

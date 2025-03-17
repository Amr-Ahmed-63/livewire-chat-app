<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $image;

    public function submit()
    {

        $val = $this->validate([
            "name"=>"string|min:3|max:20",
            "email"=>"email|min:4",
            "password"=>"required|min:6",
        ]);

        User::create([
            "name"=>$val["name"],
            "email"=>$val["email"],
            "password"=>Hash::make($val["password"]),
        ]);

        $id = User::where("email",$this->email)->get("id");
        session(['id' => $id]);

        return redirect("/index");

    }

    public function render()
    {
        return view('livewire.register');
    }
}

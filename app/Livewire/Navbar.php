<?php

namespace App\Livewire;

use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class Navbar extends Component
{

    public function logout()
    {
        session()->forget("id");
        return redirect("/");
    }

    public function render()
    {
        $user_id = session("id")[0]->id;
        $requests = Request::where("reciever_id",$user_id)->get();
        $users = [];
        foreach($requests as $req){
            $user = User::where("id",$req->sender_id);
            array_push($users,$user);
        }
        return view('livewire.navbar',compact("requests"));
    }
}

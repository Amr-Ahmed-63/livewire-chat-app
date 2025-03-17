<?php

namespace App\Livewire;

use App\Models\friend;
use App\Models\LastChat;
use App\Models\User;
use Livewire\Component;

class Sidebar extends Component
{

    public function room($id)
    {
        $user_id = session("id")[0]->id;
        LastChat::create([
            "user_id"=>$user_id,
            "friend_id"=>$id
        ]);
        redirect("/room");
    }

    public function render()
    {
        $user_id = session("id")[0]->id;
        $friends_id = friend::where("user_id",$user_id)->get();
        $users = User::all();
        return view('livewire.sidebar',compact("friends_id","users"));
    }
}

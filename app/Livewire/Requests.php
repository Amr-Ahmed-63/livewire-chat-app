<?php

namespace App\Livewire;

use App\Models\friend;
use App\Models\User;
use App\Models\Request;
use App\Models\room;
use Livewire\Component;

class Requests extends Component
{

    public function delete($sender_id)
    {
        $user_id = session("id")[0]->id;
        Request::where("sender_id",$sender_id)->where("reciever_id",$user_id)->delete();
    }

    public function accept($sender_id)
    {
        $user_id = session("id")[0]->id;
        $room_1 = $sender_id."+".$user_id;
        $room_2 = $user_id."+".$sender_id;
        friend::create([
            "user_id"=>$sender_id,
            "friend_id"=>$user_id
        ]);
        friend::create([
            "user_id"=>$user_id,
            "friend_id"=>$sender_id
        ]);
        room::create([
            "room_id"=>$room_1
        ]);
        room::create([
            "room_id"=>$room_2
        ]);
        Request::where("sender_id",$sender_id)->where("reciever_id",$user_id)->delete();
    }

    public function render()
    {
        $user_id = session("id")[0]->id;
        $requests = Request::where("reciever_id",$user_id)->get();
        $users = User::all();
        return view('livewire.requests',compact("users","requests"));
    }
}

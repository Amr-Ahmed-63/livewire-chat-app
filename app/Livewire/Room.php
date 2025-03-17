<?php

namespace App\Livewire;

use App\Models\LastChat;
use App\Models\message;
use App\Models\User;
use Livewire\Component;

class Room extends Component
{

    public $room_id_1;
    public $room_id_2;
    public $message ;

    public function sendMessage()
    {
        $user_id = session("id")[0]->id;
        $get_friend = LastChat::where("user_id",$user_id)->orderByDesc("id")->get();
        $friend_id = $get_friend[0]->friend_id;
        $this->room_id_1 = $user_id."+".$friend_id;
        $this->room_id_2 = $friend_id."+".$user_id;

        message::create([
            "room_id"=>$this->room_id_1,
            "sender_id"=>$user_id,
            "message"=>$this->message
        ]);
        message::create([
            "room_id"=>$this->room_id_2,
            "sender_id"=>$user_id,
            "message"=>$this->message
        ]);
        $this->reset("message");

    }


    public function render()
    {

        $user_id = session("id")[0]->id;
        $get_friend = LastChat::where("user_id",$user_id)->orderByDesc("id")->get();
        $friend_id = $get_friend[0]->friend_id;
        $this->room_id_1 = $user_id."+".$friend_id;
        $this->room_id_2 = $friend_id."+".$user_id;
        $friend = User::where("id",$friend_id)->get();
        $user = User::where("id",$user_id)->get();
        $mes = message::where("room_id",$this->room_id_1)->get();
        return view('livewire.room',compact("mes","user_id","friend","user"));
    }
}

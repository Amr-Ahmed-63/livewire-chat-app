<?php

namespace App\Livewire;

use App\Models\friend;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function sendRequest($id)
    {
        $user_id = session()->get("id")[0]->id;
        $requests = Request::all();
        foreach($requests as $req){

        }
        Request::create([
            "sender_id"=>$user_id,
            "reciever_id"=>$id
        ]);
    }

    public function render()
    {
        $user_id = session()->get("id")[0]->id;
        $users = User::where("name","like","%$this->search%")->get();
        $friends = friend::where("user_id",$user_id)->get();
        $requests_sent = Request::where("sender_id",$user_id)->get();
        $requests_recieved = Request::Where("reciever_id",$user_id)->get();
        $search_result = [];
        $friends_arr = [];
        $req_sent_arr = [];
        $req_recieved_arr = [];
        foreach($friends as $friend){
            array_push($friends_arr,$friend->friend_id);
        }
        foreach($requests_sent as $req){
            array_push($req_sent_arr,$req->reciever_id);
        }
        foreach($requests_recieved as $req){
            array_push($req_recieved_arr,$req->sender_id);
        }
        foreach ($users as $user) {
            if(!in_array($user->id,$friends_arr) && !in_array($user->id,$req_sent_arr) && !in_array($user->id,$req_recieved_arr)){
                array_push($search_result,$user);
            }
        }



        return view('livewire.search',compact("search_result","user_id"));
    }
}

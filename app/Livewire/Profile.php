<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{

    use WithFileUploads;

    public $name ;
    public $email;
    public $image;


    public function update()
    {
        $user_id = session()->get("id")[0]->id;
        $val = $this->validate([
            "name"=>"string|min:3|max:20",
            "email"=>"email|min:4",
            "image.*"=>"image"
        ]);

        if(null != $this->image){
            $image_name = $this->image->getClientOriginalName();
            $ex = $this->image->getClientOriginalExtension();
            $img = md5(uniqid($image_name)).".".$ex;
            $this->image->storeAs("images",$img,"public");
            User::where("id",$user_id)->update([
                "name"=>$val["name"],
                "email"=>$val["email"],
                "image"=>$img
            ]);
        }else{
            User::where("id",$user_id)->update([
                "name"=>$val["name"],
                "email"=>$val["email"],
            ]);
        }

        // dd($img);

        session()->flash("update","Your profile has been updated");

    }

    public function render()
    {

        // dd($user);
        return view('livewire.profile');
    }
}

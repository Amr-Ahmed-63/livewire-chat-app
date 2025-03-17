<div class="main" wire:poll.keep-alive.2s>
    <ul class="mt-2">
        <li class="btn btn-dark"><a href="/index">Search For Friends</a></li>
        @if(0 != count($requests))
        <li class="btn btn-dark d-flex"><a href="/requests">Friend Requestes</a><div class="bg-danger b"><b>{{count($requests)}}</b></div></li>
        @else
        <li class="btn btn-dark"><a href="/requests">Friend Requestes</a></li>
        @endif
        <li class="btn btn-dark"><a href="/profile">Edit Profile</a></li>
        <li><button wire:click="logout" class="btn btn-danger">Logout</button></li>
    </ul>


    <style>
        .main{
            display: flex;
            align-items: center;
        }
        ul{
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }
        ul li{
            transition: 0.3s;
            cursor: pointer;
        }
        ul li a{
            text-decoration: none;
            color: white;
        }
        ul li:hover{
            color: rgb(149, 163, 178);
        }
        .b{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 20px !important;
            width: 20px !important;
            border-radius: 50%;
            margin-left: 30px !important;
        }
    </style>
</div>

<aside class="w-25" wire:poll.keep-alive.2s>
    <h2 class="mt-5 mb-5">Chat App</h2>

    {{-- @if(isset($friends))

    @endif --}}

    <ul class="w-100 unorder">
        @if(null != $friends_id && null != $users)
        @foreach ($users as $user)
        @foreach ($friends_id as $friend)

        @if($user->id == $friend->friend_id)

        <li class="w-100 d-flex">
            <form action="" class="form">
                <button wire:click.prevent="room({{$user->id}})" href="/room" class="btn btn-dark w-100 d-flex side-btn p-3">
                    <b>{{$user->name}}</b>
                </button>
            </form>
        </li>

        @endif
        @endforeach
        @endforeach
        @endif
    </ul class="w-100">

    <style>
        img{
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }
        .unorder{
            height: 80vh;
            list-style: none;
            display: flex;
            flex-direction: column;
            justify-content: left;
            overflow: scroll;
        }
        .side-btn{
            justify-content: left;
            align-items: center;
            gap: 10px
        }
        h2{
            margin-left: 130px !important;
        }
        .form{
            width: 100%;
        }

    </style>
</aside>

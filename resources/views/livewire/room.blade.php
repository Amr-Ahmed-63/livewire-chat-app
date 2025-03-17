<div wire:poll.keep-alive.2s>

    <div class="textbox mt-3">
        @if(null !=  $mes)
        @foreach ($mes as $mes)
        @if($mes->sender_id == $user_id)

        <div class="user_message d-flex mb-5">
            <div class="message-field d-flex">
                <b class="w-100 d-flex ">{{$user[0]->name}}</b>
                <p class="w-100 d-flex ">{{$mes->message}}</p>
            </div>
        </div>
        @else
        <div class="friend_message mb-5">
            <div class="message-field d-flex bg-dark">
                <b class="w-100 d-flex ">{{$friend[0]->name}}</b>
                <p class="w-100 d-flex ">{{$mes->message}}</p>
            </div>
        </div>

        @endif
        @endforeach
        @endif
    </div>
    <form action="" class="d-flex w-75 send-form">
        <input type="text" class="message p-2 bg-dark" placeholder="Enter your message" wire:model="message">
        <button wire:click.prevent="sendMessage" class="btn btn-dark send-message">Send</button>
    </form>
    <style>
        .textbox{
            height: 90vh;
            overflow: scroll;
        }
        .user_message{
            justify-content: end;
            position: sticky;
            right: 0;
            display: flex;
            gap: 20px;
        }
        .user_message .message-field{
            background-color: black;
            min-height: 50px;
            min-width: 200px;
            max-width: 700px;
            border-radius: 10px 0 10px 10px;
            flex-direction: column;
            overflow: scroll;
            justify-content: end;
        }
        .friend_message{
            /* justify-content: end; */
            position: sticky;
            right: 0;
            display: flex;
            gap: 20px;
        }
        .friend_message .message-field{
            min-height: 50px;
            min-width: 200px;
            max-width: 700px;
            border-radius: 0 10px 10px 10px;
            flex-direction: column;
            overflow: scroll;
            /* justify-content: end; */
        }
        .user_message .message-field b{
            justify-content: end;
            margin-left:-15px !important;
        }
        .user_message .message-field p{
            justify-content: end;
            margin-left:-15px !important;
        }
        .friend_message .message-field b{
            margin-left:15px !important;
        }
        .friend_message .message-field p{
            margin-left:15px !important;
        }
        .send-form{
            position: fixed;
            right: 0;
            bottom: 0;
        }
        input{
            width: 92%;
        }
        .send-message{
            width: 8%;
            border-radius: 0 !important;
        }
    </style>
</div>

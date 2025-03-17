<div class="searchForFriends d-flex">
    <input wire:model.live="search" type="text" placeholder="Enter your friend's name" class="mt-5 bg-dark p-3 w-50">



    <div class="result d-flex mt-5 w-100">
        @if (isset($search_result))
        @foreach ($search_result as $user)
        @if($user->id != $user_id)

        <div class="user d-flex w-50">
            <div class="details">
                <b>{{$user->name}}</b>
            </div>
            <div>
                <button class="btn btn-success sent" wire:click="sendRequest({{$user->id}})">Send friend request</button>
            </div>
        </div>

        @endif
        @endforeach
        @endif
    </div>

    <style>
    input{
        margin: auto !important;
        border-radius: 10px;
    }
    .result,
    .searchForFriends{
        flex-direction: column;
    }
    .result{
        margin: auto;
        gap: 20px;
    }
    .user{
        justify-content: space-between;
        margin: auto;
    }
    </style>
</div>

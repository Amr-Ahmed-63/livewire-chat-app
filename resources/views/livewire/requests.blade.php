<div class="d-flex req">
    <div class="result m-auto mt-5 d-flex w-100">

        @foreach ($users as $user)
        @foreach ($requests as $req)
        @if($user->id == $req->sender_id)

        <div class="user d-flex w-50">
            <div class="details">
                <b>{{$user->name}}</b>
            </div>
            <div>
                <button class="btn btn-success sent" wire:click="accept({{$user->id}})">Accept</button>
                <button class="btn btn-danger sent" wire:click="delete({{$user->id}})">Delete</button>
            </div>
        </div>

        @endif
        @endforeach
        @endforeach
    </div>
    <style>
        .result,
    .req{
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

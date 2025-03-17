<div>
    <fieldset class="mt-5">
        <legend class="mt-5">Login</legend>
        <form action="" wire:submit='submit' class="d-flex flex-column">
            @if(session("fail"))
            <div class="alert alert-danger">
                {{session("fail")}}
            </div>
            @endif

            <input wire:model="email" type="email" placeholder="email" class="bg-secondary border border-gray rounded w-75 p-2  mt-4">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <input wire:model="password" type="password" placeholder="password" class="bg-secondary border border-gray rounded w-75 p-2  mt-4">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <button class="btn btn-secondary w-25 p-2  mt-4">Submit</button>
            <span class="mt-4">Don't have an account? <a href="register" class="text-info" >Register</a></span>
        </form>
    </fieldset>
</div>



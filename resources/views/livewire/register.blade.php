<div>
    <fieldset class="mt-5">
        <legend class="mt-5">Register</legend>
        <form wire:submit='submit' class="d-flex flex-column" enctype="multipart/form-data">

            <input wire:model="name" type="text" placeholder="name" class="bg-secondary border border-gray rounded w-75 p-2  mt-4">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <input wire:model="email" type="email" placeholder="email" class="bg-secondary border border-gray rounded w-75 p-2  mt-4">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <input wire:model="password" type="password" placeholder="password" class="bg-secondary border border-gray rounded w-75 p-2  mt-4">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <button class="btn btn-secondary w-25 p-2 mt-4" >Submit</button>
        </form>
    </fieldset>
</div>

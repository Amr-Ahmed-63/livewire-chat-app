<div>
    <fieldset class="mt-5">
        <form wire:submit='update' class="d-flex flex-column m-auto w-50" enctype="multipart/form-data">

            <input wire:model="name" value="{{$name}}" type="text" placeholder="name" class="bg-dark border border-gray rounded w-75 p-2  mt-4">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <input wire:model="email" value="{{$email}}" type="email" placeholder="email" class="bg-dark border border-gray rounded w-75 p-2  mt-4">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="d-flex update">
                <button class="btn btn-dark w-25 p-2 mt-4" >Update</button>
                @if(null != session("update"))
                <span class="text-dark mt-4">{{session("update")}}</span>
                @endif
            </div>
        </form>
    </fieldset>
    <style>
        .update{
            /* justify-content: space-between; */
            align-items: center;
            gap: 100px;
        }
    </style>
</div>


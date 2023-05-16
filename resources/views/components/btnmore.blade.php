<div>					
    <div  style="display: flex;  align-items: left;">            
        <div class="text-left">
            <input wire:model='keyWord' type="text" class="form-control form-control-lg" name="search" id="search" placeholder="Search Keyworks">
        </div>
        <button  type="button" class="btn btn-icon shadow-sm m-2" data-bs-toggle="modal" data-bs-target="#createDataModal">
            ➕ <strong>New</strong>            
        </button>       
        @if (session()->has('message'))
        <div wire:poll.4s class="btn btn-sm btn-info" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
        @endif
        </div>
</div>
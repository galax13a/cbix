<div>					
    <div  style="display: flex;  align-items: left;">                    
        <div class="text-left">
            <input wire:model='keyWord' type="text" class="form-control form-control-lg w-full" name="search" id="search"
             placeholder="{{ __('messages.keyword-new') }}">
        </div>
        <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2" data-bs-toggle="modal" data-bs-target="#createDataModal">
            ➕ <strong> {{ __('messages.new') }}   </strong>     
                 
        </button>       
        @if (session()->has('message'))
        <div wire:poll.4s class="btn btn-sm btn-info" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
        @endif
        </div>
</div>
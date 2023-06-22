<div>
        @switch($status)
            @case('pending')
                <span class="badge text-black text-bold bg-warning text-uppercase shadow border-2">
                    {{ $status }}
                </span>
                @break
            @case('in_progress')
                <span class="badge text-black text-bold bg-info text-uppercase shadow border-2">
                    {{ $status }}
                </span>
                @break
            @case('resolved')
                <span class="badge text-blank text-bold bg-success text-uppercase shadow border-2">
                    {{ $status }}
                </span>
                @break
            @default
                <span class="badge text-black text-bold bg-secondary text-uppercase shadow border-2">
                    {{ $status }} 

                </span>
        @endswitch
    
    
</div>
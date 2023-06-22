<div>
    @switch($priority)
        @case('low')
            🟤
        @break

        @case('medium')
            🟡
        @break

        @case('hight')
            🟣
        @break

        @default
            🔴
    @endswitch


</div>

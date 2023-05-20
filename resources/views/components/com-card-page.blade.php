<div>   
    <div class="row">
       
            @foreach ($data as $item)
                <div class="col-sm-6 col-lg-4 m-4px-tb punter">
                    <div class="media rounded-4 p-2 my-2 box-shadow-only-hover hover-top border-all-1 border-color-gray p-6px">
                        <div class="icon-50 {{ $item['color'] }} white-color border-radius-50 d-inline-block">
                            <i class="number">{{ $item['icon'] }}</i>
                        </div>
                        <div class="p-20px-l media-body">
                            <span class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15">{{ $item['onlineModels'] }}</span>
                            <h5 class="m-5px-tb">{{ $item['siteName'] }}</h5>
                            <p class="m-0px font-small">
                                @foreach ($item['links'] as $link)
                                    <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
       
        
        </div>
      
</div>
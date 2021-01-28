@php
    $active = $builder->isActive($item);
    $depth = $item['depth'] ?? 0;
@endphp

@if($builder->visible($item))
    @if(empty($item['children']))
        <li class="nav-item" style="line-height: 30px;font-size:15px;padding:5px 10px;">
            <a @if(mb_strpos($item['uri'], '://') !== false) target="_blank" @endif href="{{ $builder->getUrl($item['uri']) }}"
               style="color:#000000"
               class="nav-link {!! $builder->isActive($item) ? 'active' : '' !!}">
                {!! str_repeat('&nbsp;', $depth) !!}<i class="fa {{ $item['icon'] ?: 'feather icon-circle' }}"></i>
                    {{ $builder->translate($item['title']) }}
            </a>
        </li>
    @else
        @php
            $active = $builder->isActive($item);
        @endphp

        <li class="nav-item dropdown" style="line-height: 30px;font-size:15px;padding:5px 10px;">
            <a href="#" class="nav-link dropdown-toggle  {!! $builder->isActive($item) ? 'active' : '' !!}"
               style="color:#000000"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {!! str_repeat('&nbsp;', $depth) !!}<i class="fa {{ $item['icon'] ?: 'feather icon-circle' }}"></i>
                {{ $builder->translate($item['title']) }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($item['children'] as $item)
                    @php
                        $item['depth'] = $depth + 1;
                    @endphp
		    @if($builder->visible($item))
                    	<a @if(mb_strpos($item['uri'], '://') !== false) target="_blank" @endif href="{{ $builder->getUrl($item['uri']) }}" class="nav-link {!! $builder->isActive($item) ? 'active' : '' !!}">
                    	    {!! str_repeat('&nbsp;', $depth) !!}<i class="fa {{ $item['icon'] ?: 'feather icon-circle' }}"></i>
                    	        {{ $builder->translate($item['title']) }}
                    	</a>
		    @endif
                @endforeach
            </div>
        </li>
    @endif
@endif

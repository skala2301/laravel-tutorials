@props(['type' => 'a', 'extraClass' => ''])


@if($type === 'a')
    @php
        $active = false;
        $href = $attributes->get('href');
        if(strlen($href) > 1 && $href[0] === '/') {
            $href = substr($href, 1);
        }
        $active = request()->is($href);

    @endphp
    <a {{$attributes}} class="{{$extraClass}} rounded-md px-3 py-2 text-sm font-medium {{$active ? 'text-white bg-gray-900':'text-gray-300 hover:bg-gray-700 hover:text-white'}}" 
        aria-current="page">
        {{$slot}}
    </a>
@elseif ($type === 'button')
    <button {{$attributes}} class="{{$extraClass}} rounded-md px-3 py-2 text-sm font-medium {{true ? 'text-white bg-gray-900':'text-gray-300 hover:bg-gray-700 hover:text-white'}}" 
        aria-current="page">
        {{$slot}}
    </button>
@endif


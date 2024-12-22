<x-layout>
    <x-slot name="header">
        Jobs List.
    </x-slot>
    <ul>
    @foreach ($jobs as $job)
        <li class='w-full rounded-md px-3 text-sm font-medium text-black hover:bg-gray-700 hover:text-white'>
            <a href='/job/{{$job['id']}}' class='py-2 block w-full h-full'>{{$job['title']}}</a>
        </li>
    @endforeach
    </ul>
</x-layout>
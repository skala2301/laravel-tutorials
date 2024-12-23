<x-layout>
    <x-slot name="header">
        Jobs List.
    </x-slot>
    <div class='space-y-3'>
    @foreach ($jobs as $job)
            <a href='/job/{{$job['id']}}' class='border-2 py-2 px-2 block w-full h-full rounded-md text-sm font-medium text-black hover:bg-gray-700 hover:text-white'>
                <div class='text-blue-500 text-lg'>
                    {{
                        //if you don't specify youll use employer
                        //this part will use lazy loading to get employer name for each job
                        //this will cause some performance issues
                        $job->employer->name
                    }}
                </div>
                <span><strong class="text-md">Job Posicion: </strong>{{$job['title']}}</span>
            </a>
    @endforeach
    </div>
</x-layout>
<x-layout>
    <x-slot name='header'>
        {{$job['title']}}
    </x-slot>
    <section>
        <div>
            This Job Salary Is {{$job['salary']}}
        </div>
    </section>
</x-layout>
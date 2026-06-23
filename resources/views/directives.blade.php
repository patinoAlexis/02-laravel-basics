{{--
There are a lot of different usefull directives on blade, think about it that something you used to do on php,
when working on html, the most possible scenario is that there would be a directive for that case. the @dump and @dd (dump and die)
are great examples. It's also similar to angular.

All directives start with @
--}}

<x-layout>
    @dump($tasks)
    @if(count($tasks))
        <p>Yes, we have some tasks. how many? {{count($tasks)}} tasks, in fact!</p>
    @endif

    @foreach($tasks as $t)
        <li>{{$t}}</li>

    @endforeach
</x-layout>

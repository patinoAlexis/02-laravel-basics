{{--
The data pass trough on the route, SHOULD ALWAYS be printed with double curly braces {{}}
this is because blade by default "cleans" the data in order to avoid problems of injection malicius code.

In order you TRUST the data being pass trough you can avoid the cleans with {!!  !!}, this will automatically,
do a "code" or a html tag depending the case.
--}}
<x-layout>
    <p>{{$greeting}}, {{$person}}!</p>
</x-layout>

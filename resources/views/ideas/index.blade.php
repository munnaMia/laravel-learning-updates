<x-layout>

    <div>
        <ul>
            @if ($idea->count())
                @foreach ($idea as $id)
                    <li>{{ $id->Description }}</li>
                @endforeach
            @else
                <p>NO IDEA <a href="/ideas/create">Create one</a></p>
            @endif

        </ul>
    </div>


</x-layout>

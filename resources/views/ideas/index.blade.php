<x-layout>

    <div>
        <ul>
            @if ($idea->count())
                @foreach ($idea as $id)
                    <x-idea-card href='/ideas/'.$idea->id>
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            @else
                <p>NO IDEA <a href="/ideas/create">Create one</a></p>
            @endif

        </ul>
    </div>


</x-layout>

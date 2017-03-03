@foreach($interns as $type => $people)
    @if($type == 'web_interns')
        <h1>Web Development Interns</h1>

        @foreach($people as $index => $person)
            <p><span>{{ $index + 1}}. </span>{{ $person }}</p>
        @endforeach

        <h1> Bsa Interns</h1>
        @foreach($people as $index => $person)
            <p><span>{{ $index }}. </span> {{$person}}</p>
            @endforeach
    @endif
@endforeach
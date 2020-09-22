<div>
    <h1>header component</h1>
    <h3> hello {{$name}}</h3>
    <h3>fruits are:</h3>
    <ul>
        @foreach ($fruit as $fruit1)
            <li>{{$fruit1}}</li>
        @endforeach
    </ul>
</div>
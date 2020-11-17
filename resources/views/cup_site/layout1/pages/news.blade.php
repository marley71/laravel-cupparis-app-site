@extends('cup_site.layouts.layout1')
@section('content')
    <!-- -->
    <section>
        <div class="container">
            @foreach($news as $item)
                <div>{{$item['titolo_it']}}</div>
                <a href="/{{$route_prefix}}/page/{{$item->id}}">dettaglio</a>
                <div>{{$item['descrizione_it']}}</div>
            @endforeach
        </div>
    </section>
@endsection

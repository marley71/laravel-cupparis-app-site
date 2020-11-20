@extends('cup_site.layouts.layout1')
@section('content')
    <!-- -->
    <section>
        <div class="container">
            <div>Inserire slider</div>
            <div>{{$news['titolo_it']}}</div>
{{--                <a href="/{{$route_prefix}}/page/{{$news['id']}}">dettaglio</a>--}}
            <div>{{$news['descrizione_it']}}</div>

        </div>
    </section>
@endsection

@extends('cup_site.layouts.layout1')


@section('content')
    <!-- -->
    <section>
        <div class="container">
            {{\App\Http\Controllers\CupSiteController::block()}}
        </div>
    </section>
@endsection

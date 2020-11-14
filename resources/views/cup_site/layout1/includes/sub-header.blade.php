<section class="bg-theme-color-light p-0">
    <div class="container py-5">

        <h1 class="h3">
            {{$page['titolo_it']}}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs--14">
                <li class="breadcrumb-item"><a href="#!">{{$page['menu_it']}}</a></li>
                @foreach($page['children'] as $children)
                    <li class="breadcrumb-item"><a href="#!">{{$children['menu_it']}}</a></li>
                @endforeach
            </ol>
        </nav>

    </div>
</section>

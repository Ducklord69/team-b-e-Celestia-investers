<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>


    <?php
    $size = count($manuals);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>
    <div class="container">
        <div class="row">
            @foreach ($manuals->chunk($chunk_size) as $chunk)
                <div class="col-md-4">
                    @foreach($chunk as $manual)
                        @if ($manual->locally_available)
                            <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
                            ({{$manual->filesize_human_readable}})
                        @else
                            <a href="{{ $manual->url }}" target="new" alt="{{ $manual->name }}" title="{{ $manual->name }}">{{ $manual->name }}</a>
                        @endif
                        <br/>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
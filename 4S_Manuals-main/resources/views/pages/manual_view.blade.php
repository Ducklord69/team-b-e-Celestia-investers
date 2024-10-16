<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li>
            <a href="/{{ $brand->id }}/{{ urlencode($brand->name) }}/" 
                alt="Manuals for '{{ $brand->name }}'" 
                title="Manuals for '{{ $brand->name }}'">
                {{ $brand->name }}
            </a>
        </li>
        <li>
            <a href="/{{ $brand->id }}/{{ urlencode($brand->name) }}/" 
                alt="Manuals for '{{ $brand->name }} {{ $manual->type }}'" 
                title="Manuals for '{{ $brand->name }} {{ $manual->type }}'">
                {{ $manual->type }}
            </a>
        </li>
        <li>
            <a href="/{{ $brand->id }}/{{ urlencode($brand->name) }}/{{ $manual->id }}/" 
                alt="View manual for '{{ $brand->name }}'" 
                title="View manual for '{{ $brand->name }} {{ $manual->type }}'">
                View
            </a>
        </li>
    </x-slot:breadcrumb>

    <h1>{{ $brand->name }} - {{ $manual->type }}</h1>

    <p>Views: {{ $manual->views }}</p> <!-- Display the views count -->

    @if ($manual->locally_available)
        <iframe src="{{ $manual->url }}" width="780" height="600" frameborder="0" marginheight="0" marginwidth="0">
            Iframes are not supported<br />
            <a href="{{ $manual->url }}" target="new" alt="Download your manual here" title="Download your manual here">
                Click here to download the manual
            </a>
        </iframe>
    @else
        <a href="{{ $manual->url }}" target="new" alt="Download your manual here" title="Download your manual here">
            Click here to download the manual
        </a>
    @endif

</x-layouts.app>

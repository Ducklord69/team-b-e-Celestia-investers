<x-layouts.app>

    @section('content')
    <h1>Merklijst</h1>

    <div class="alphabet-navigation">
        @foreach(range('A', 'Z') as $letter)
            <a href="{{ route('brands.index', ['letter' => $letter]) }}">{{ $letter }}</a>
        @endforeach
    </div>

    @if(isset($selectedLetter))
        <h2>Merken die beginnen met de letter "{{ $selectedLetter }}"</h2>
        <ul>
            @foreach($brands as $brand)
                @if(strtoupper(substr($brand->name, 0, 1)) === $selectedLetter)
                    <li>
                        <a href="{{ route('brand.show', [$brand->id, $brand->getNameUrlEncodedAttribute()]) }}">{{ $brand->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    @else
        <p>Kies een letter om de merken te bekijken.</p>
    @endif

<x-layouts.app>

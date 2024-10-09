<!-- resources/views/components/header.blade.php -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/manual" class="btn btn-download" title="{{ __('misc.download_manual_alt') }}">
            <h1 style="font-size: 2em; font-weight: 700;">{{ __('misc.homepage_title') }}</h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>
<div class="brand-selection">
    @foreach(range('A', 'Z') as $letter)
        <a href="#{{ $letter }}">{{ $letter }}</a>
    @endforeach
</div>


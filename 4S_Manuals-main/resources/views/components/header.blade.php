<!-- resources/views/components/header.blade.php -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1 style="font-size: 3em; font-weight: 700;">{{ __('misc.homepage_title') }}</h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>

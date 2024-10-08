<x-layouts.app>
    <x-slot:introduction_text>
        <p><img src="{{ asset('img/afbl_logo.png') }}" align="right" width="100" height="100">{{ __('messages.home_alt') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('messages.all_brands') }}
        </x-slot:title>
    </h1>

    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <div class="row">
            @foreach($brands->chunk($chunk_size) as $chunk)
                <div class="col-md-4">
                    <ul>
                        <?php
                        $header_first_letter = null;
                        foreach($chunk as $brand):
                            $current_first_letter = strtoupper(substr($brand->name, 0, 1));

                            if ($header_first_letter !== $current_first_letter) {
                                if ($header_first_letter !== null) {
                                    echo '</ul>'; 
                                }
                                echo '<h2 id="' . $current_first_letter . '">' . $current_first_letter . '</h2><ul>'; // Open new list
                                $header_first_letter = $current_first_letter; 
                            }
                        ?>
                            <li>
                                <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">
                                    {{ $brand->name }}
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($header_first_letter); // Clear header variable after each column ?>
            @endforeach
        </div>
    </div>
</x-layouts.app>

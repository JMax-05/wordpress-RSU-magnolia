<?php

function barranca_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'script', 'style', 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
}
add_action( 'after_setup_theme', 'barranca_theme_setup' );

// District registry — one entry per distrito microsite ported from data/<District>/
function barranca_districts() {
    return [
        'barranca' => [
            'name'        => 'Barranca',
            'description' => 'Descubre Barranca, capital de la provincia. Playas, malecon y la famosa cachanga.',
            'footer_desc' => 'Capital provincial costera. Gastronomia, playas y cultura de la Provincia de Barranca, Peru.',
            'template'    => 'template-barranca.php',
        ],
        'paramonga' => [
            'name'        => 'Paramonga',
            'description' => 'Descubre Paramonga, Peru. Fortaleza Chimu, tradicion y cultura milenaria.',
            'footer_desc' => 'Guardia milenaria del Pacifico. Cuna de la Fortaleza Chimu en la costa peruana.',
            'template'    => 'template-paramonga.php',
        ],
        'pativilca' => [
            'name'        => 'Pativilca',
            'description' => 'Descubre Pativilca, Peru. Historia bolivariana, rio y campiña verde.',
            'footer_desc' => 'Villa historica donde Simon Bolivar redacto su celebre carta en 1824, Peru.',
            'template'    => 'template-pativilca.php',
        ],
        'supe' => [
            'name'        => 'Supe',
            'description' => 'Descubre Supe, Peru. Valle de Caral, la civilizacion mas antigua de America.',
            'footer_desc' => 'Cuna de Caral, civilizacion mas antigua de America. Valle de Supe, Peru.',
            'template'    => 'template-supe.php',
        ],
        'supe-puerto' => [
            'name'        => 'Supe Puerto',
            'description' => 'Descubre Supe Puerto, Peru. Cultura, gastronomia, playas y tradicion.',
            'footer_desc' => 'Destino turistico cultural y marino del Peru.',
            'template'    => 'template-supe-puerto.php',
        ],
    ];
}

// Returns the district config for the currently displayed page, or null.
function barranca_current_district() {
    if ( is_front_page() ) {
        return null;
    }
    $template = get_page_template_slug();
    foreach ( barranca_districts() as $slug => $district ) {
        if ( $template === $district['template'] ) {
            $district['slug'] = $slug;
            return $district;
        }
    }
    return null;
}

function barranca_enqueue_assets() {
    // Google Fonts — used everywhere
    wp_enqueue_style(
        'barranca-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap',
        [],
        null
    );

    $district = barranca_current_district();

    if ( is_front_page() ) {
        // Province home page — lightweight, no district JS/CSS libs needed
        wp_enqueue_style( 'barranca-province', get_template_directory_uri() . '/css/province.css', [ 'barranca-fonts' ], '1.0.0' );
        wp_enqueue_script( 'barranca-province', get_template_directory_uri() . '/js/province.js', [], '1.0.0', true );
        return;
    }

    // Swiper
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.0.0' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.0.0', true );

    // Leaflet
    wp_enqueue_style( 'leaflet-css', 'https://unpkg.com/leaflet/dist/leaflet.css', [], '1.9.4' );
    wp_enqueue_script( 'leaflet-js', 'https://unpkg.com/leaflet/dist/leaflet.js', [], '1.9.4', true );

    // GSAP
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], '3.12.5', true );

    // Theme stylesheet (district sections + components, shared across all districts)
    wp_enqueue_style(
        'barranca-style',
        get_stylesheet_uri(),
        [ 'barranca-fonts', 'swiper-css', 'leaflet-css' ],
        '1.0.0'
    );

    if ( $district ) {
        // Main JS — one entry point per district, loaded in footer after external libs
        wp_enqueue_script(
            'barranca-main',
            get_template_directory_uri() . '/js/' . $district['slug'] . '/main.js',
            [ 'swiper-js', 'leaflet-js', 'gsap-js' ],
            '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'barranca_enqueue_assets' );

// Add type="module" to the main script tag
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
    if ( $handle === 'barranca-main' || $handle === 'barranca-province' ) {
        return str_replace( ' src=', ' type="module" src=', $tag );
    }
    return $tag;
}, 10, 2 );

// Register the district templates so they show up in the Page Attributes template dropdown
add_filter( 'theme_page_templates', function ( $templates ) {
    foreach ( barranca_districts() as $district ) {
        $templates[ $district['template'] ] = 'Distrito - ' . $district['name'];
    }
    return $templates;
} );

// Tag <body> with "district-{slug}" so a single district can override the shared --primary color
add_filter( 'body_class', function ( $classes ) {
    $district = barranca_current_district();
    if ( $district ) {
        $classes[] = 'district-' . $district['slug'];
    }
    return $classes;
} );

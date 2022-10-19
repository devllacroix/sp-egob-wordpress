<?php

function init_template(){

    add_theme_support('post-thumbnails');   //Agregar funcionalidades al tema
            //Imprimir title

}

//after_setup_theme, cuando alguien entra a nuestro sitio, wordpress eliga el tema y ejecute estas acciones.
//la funcion a ejecutar, la función screenshot se ejecuta aquí
add_action( 'after_setup_theme', 'init_template');

function assets(){
    //Bootstrap
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', '', '5.0.2', 'all');
    //Estilos
    wp_enqueue_style( 'estilos', get_stylesheet_uri(  ), array('bootstrap'), '1.0', 'all');
    //Popper | No inicializa dependencia
    wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', '', '2.9.2', 'all');
    //JQuery | Carga source y dependencias declaradas y wp_register_script
    wp_enqueue_script( 'bootstraps', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true);
    //CustomJS
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true );
}

//¿Dónde se carga? Cuando empiece a renderizar la página, nombre de la función:
add_action( 'wp_enqueue_scripts','assets');


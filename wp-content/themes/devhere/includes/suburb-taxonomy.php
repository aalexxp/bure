<?php
function create_sports_taxonomy() {
    register_taxonomy(
        'suburb',
        'properties',
        array(
            'label' => 'Suburbs',
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_sports_taxonomy' );
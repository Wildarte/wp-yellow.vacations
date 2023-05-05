<?php

function add_fields_cmb(){
    $cmb_post = new_cmb2_box([
        'id' => 'cmb_gallery',
        'title' => 'Galeria de imagens',
        'object_types' => 'post',
        'closed' => false
    ]);
    
    
    $cmb_post->add_field( array(
        'name' => 'Galeria',
        'desc' => '',
        'id'   => 'field_gallery',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Adicionar', // default: "Add or Upload Files"
            'remove_image_text' => 'Remover', // default: "Remove Image"
            'file_text' => 'Imagem', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ) );
}

add_action('cmb2_admin_init', 'add_fields_cmb');

?>
<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_2',
    'title' => 'Notícia',
    'fields' => array (
      array(
        'key' => 'title-banner',
        'label' => 'Titulo para o Banner',
        'name' => 'title-banner',
        'type' => 'text'
      ),
      array(
        'key' => 'text-banner',
        'label' => 'Texto para o Banner',
        'name' => 'text-banner',
        'type' => 'textarea',
        'maxlength' => 200
      ),
      array (
        'key' => 'background-banner',
        'label' => 'Fundo do banner',
        'name' => 'background-banner',
        'type' => 'image',
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array (
        'key' => 'icon-banner',
        'label' => 'Icone do banner',
        'name' => 'icon-banner',
        'type' => 'image',
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'news',
        ),
      ),
    ),
    'style' => 'seamless',
  ));
}
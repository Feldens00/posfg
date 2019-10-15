<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'Curso',
    'fields' => array (
      array (
        'key' => 'course-banner',
        'label' => 'Fundo do banner',
        'name' => 'course-banner',
        'type' => 'image',
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array (
        'key' => 'course-icon',
        'label' => 'Icone do banner',
        'name' => 'course-icon',
        'type' => 'image',
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'array', 
      ),
      array(
        'key' => 'course-description',
        'label' => 'Descrição do curso',
        'name' => 'course-description',
        'type' => 'text',
        'required' => 1
      ),
      array (
        'key' => 'course-class',
        'label' => 'Disciplinas',
        'name' => 'course-class',
        'type' => 'wysiwyg', // or textarea
        /* (string) Specify which tabs are available. Defaults to 'all'.
        Choices of 'all' (Visual & Text), 'visual' (Visual Only) or text (Text Only) */
        'tabs' => 'all',
        /* (string) Specify the editor's toolbar. Defaults to 'full'.
        Choices of 'full' (Full), 'basic' (Basic) or a custom toolbar (https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/) */
        'toolbar' => 'full',
        'media_upload' => 1,
        'instructions' => '',
        'required' => 1
      ),
      array (
        'key' => 'course-about',
        'label' => 'Saiba Mais',
        'name' => 'course-about',
        'type' => 'wysiwyg', // or textarea
        /* (string) Specify which tabs are available. Defaults to 'all'.
        Choices of 'all' (Visual & Text), 'visual' (Visual Only) or text (Text Only) */
        'tabs' => 'all',
        /* (string) Specify the editor's toolbar. Defaults to 'full'.
        Choices of 'full' (Full), 'basic' (Basic) or a custom toolbar (https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/) */
        'toolbar' => 'full',
        'media_upload' => 1,
        'instructions' => '',
        'required' => 1
      ),
      array (
        'key' => 'course-coordinator',
        'label' => 'Coordenador',
        'name' => 'course-coordinator',
        'type' => 'wysiwyg', // or textarea
        /* (string) Specify which tabs are available. Defaults to 'all'.
        Choices of 'all' (Visual & Text), 'visual' (Visual Only) or text (Text Only) */
        'tabs' => 'all',
        /* (string) Specify the editor's toolbar. Defaults to 'full'.
        Choices of 'full' (Full), 'basic' (Basic) or a custom toolbar (https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/) */
        'toolbar' => 'full',
        'media_upload' => 1,
        'instructions' => '',
        'required' => 1
      ),
      array (
        'key' => 'course-video',
        'label' => 'Video 1',
        'name' => 'course-video',
        'type' => 'url',
        'required' => 1
      ),
      array (
        'key' => 'course-video-2',
        'label' => 'Video 2',
        'name' => 'course-video-2',
        'type' => 'url',
        'required' => 0
      ),
      array (
        'key' => 'course-video-3',
        'label' => 'Video 3',
        'name' => 'course-video-3',
        'type' => 'url',
        'required' => 0
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'course',
        ),
      ),
    ),
    'style' => 'seamless',
  ));
}
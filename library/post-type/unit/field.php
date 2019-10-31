<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_3',
    'title' => 'Unidade',
    'fields' => array (
      array(
        'key' => 'unit-address',
        'label' => 'Endereço',
        'name' => 'unit-address',
        'type' => 'text',
        'required' => 1
      ),
      array(
        'key' => 'unit-cep',
        'label' => 'CEP',
        'name' => 'unit-cep',
        'type' => 'text',
        'required' => 1
      ),
      array(
        'key' => 'unit-city',
        'label' => 'Cidade',
        'name' => 'unit-city',
        'type' => 'text',
        'required' => 1
      ),
      array (
        'key' => 'unit-maps',
        'label' => 'Link do Google Maps',
        'name' => 'unit-maps',
        'type' => 'url',
        'required' => 1,
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'unit',
        ),
      ),
    ),
    'style' => 'seamless',
  ));
}
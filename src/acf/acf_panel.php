<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ed379b8bcea1',
        'title' => 'Menu Customiser',
        'fields' => array(
            array(
                'key' => 'field_5ed37c7f324c0',
                'label' => 'Additional',
                'name' => '',
                'type' => 'accordion',
                'instructions' => 'Icons, Images and Descriptions',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ed379ddff48f',
                'label' => 'Icon',
                'name' => 'mc_icon',
                'type' => 'text',
                'instructions' => '<a href="https://petershaggynoble.github.io/MDI-Sandbox/">Material Icon</a> name.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ed37a50ff491',
                'label' => 'Icon Class',
                'name' => 'mc_icon_class',
                'type' => 'text',
                'instructions' => 'Extra icon classes',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ed37a29ff490',
                'label' => 'Icon Colour',
                'name' => 'mc_icon_colour',
                'type' => 'color_picker',
                'instructions' => 'Hex code',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5ed38149c80fd',
                'label' => 'Icon Position',
                'name' => 'mc_icon_position',
                'type' => 'select',
                'instructions' => 'Before or after title',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'before' => 'before',
                    'after' => 'after',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5ed37e3ed679d',
                'label' => 'Image',
                'name' => 'mc_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5ed387113a044',
                'label' => 'Image Position',
                'name' => 'mc_image_position',
                'type' => 'select',
                'instructions' => 'Before or After the title',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'choices' => array(
                    'before' => 'before',
                    'after' => 'after',
                ),
                'default_value' => 'before',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5ed38f63e15aa',
                'label' => 'Description',
                'name' => 'mc_description',
                'type' => 'true_false',
                'instructions' => 'Add description below title.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'nav_menu_item',
                    'operator' => '==',
                    'value' => 'all',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;
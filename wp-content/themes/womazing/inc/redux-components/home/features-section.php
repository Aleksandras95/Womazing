<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Секция особенности', 'your-textdomain-here'),
        'desc' => 'Редактирование секции особенности',
        'id' => 'features-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'features-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id'           => 'features-image-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'features-image-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'features-image-third',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение 3', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'features-image-title-first',
                'type' => 'text',
                'title' => esc_html__('Заголовок 1', 'your-textdomain-here'),
                'desc' => esc_html__('Заполните информацией', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'features-image-title-second',
                'type' => 'text',
                'title' => esc_html__('Заголовок 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'features-image-title-third',
                'type' => 'text',
                'title' => esc_html__('Заголовок 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'features-image-description-first',
                'type' => 'textarea',
                'title' => esc_html__('Описание  1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'features-image-description-second',
                'type' => 'textarea',
                'title' => esc_html__('Описание  2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'features-image-description-third',
                'type' => 'textarea',
                'title' => esc_html__('Описание  3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
        ),
    )
);
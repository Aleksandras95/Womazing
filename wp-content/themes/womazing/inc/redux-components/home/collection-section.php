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
        'title' => esc_html__('Секция колекции', 'your-textdomain-here'),
        'desc' => 'Редактирование секции коллекции',
        'id' => 'collection-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'collection-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id'           => 'collection-image-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'collection-image-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'collection-image-third',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение 3', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'collection-image-description-first',
                'type' => 'text',
                'title' => esc_html__('Описание  1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'collection-image-description-second',
                'type' => 'text',
                'title' => esc_html__('Описание  2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'collection-image-description-third',
                'type' => 'text',
                'title' => esc_html__('Описание  3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'collection-section-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на кнопку', 'your-textdomain-here'),
                'default' => '#',
            ),
        ),
    )
);
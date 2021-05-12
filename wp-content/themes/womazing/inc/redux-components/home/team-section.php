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
        'title' => esc_html__('Секция команда', 'your-textdomain-here'),
        'desc' => 'Редактирование секции команда',
        'id' => 'team-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'team-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции', 'your-textdomain-here'),
                'desc' => esc_html__('Заполните информацией', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id'           => 'team-slider-image-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'team-slider-image-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение  2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'team-slider-image-third',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение 3', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'team-content-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'team-content-description-first',
                'type' => 'textarea',
                'title' => esc_html__('Описание 1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'team-content-description-second',
                'type' => 'textarea',
                'title' => esc_html__('Описание 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'team-section-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на кнопку', 'your-textdomain-here'),
                'default' => '#',
            ),
        ),
    )
);
<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 *
 */
defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Настройки страници о бренде', 'your-textdomain-here'),
        'desc' => 'Редактирование страницы о бренде',
        'id' => 'about-brand-page',
        'fields' => array(
            array(
                'id' => 'about-brand-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id'           => 'about-brand-image-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение 1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'about-brand-image-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение 2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'about-brand-title-1',
                'type' => 'text',
                'title' => esc_html__('Заголовок 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-title-2',
                'type' => 'text',
                'title' => esc_html__('Заголовок 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-section-desc-first',
                'type' => 'textarea',
                'title' => esc_html__('Описание', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-section-desc-second',
                'type' => 'textarea',
                'title' => esc_html__('Описание', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-section-desc-third',
                'type' => 'textarea',
                'title' => esc_html__('Описание', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-section-desc-fourth',
                'type' => 'textarea',
                'title' => esc_html__('Описание', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'about-brand-section-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на кнопку', 'your-textdomain-here'),
                'default' => '#',
            ),
        )   
    )
);
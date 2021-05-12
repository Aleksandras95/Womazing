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
        'title' => esc_html__('Верхняя секция', 'your-textdomain-here'),
        'desc' => 'Редактирование верхней секции главной страницы',
        'id' => 'home-top-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'slider-title-1',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайдера 1', 'your-textdomain-here'),
                'desc' => esc_html__('Заполните информацией', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'slider-title-2',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайдера 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'slider-title-3',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайдера 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'slider-description1',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайдера 1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'slider-description2',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайдера 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'slider-description3',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайдера 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'home-offer-section-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на кнопку', 'your-textdomain-here'),
                'default' => '#',
            ),
            array(
                'id'           => 'offer-image-slide-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение слайдера 1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'offer-image-slide-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение слайдера 2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'offer-image-slide-third',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение слайдера 3', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'offer-image-small-first',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение маленькое 1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'           => 'offer-image-small-second',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Изображение маленькое 2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
        ),
    )
);
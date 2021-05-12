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
        'title' => esc_html__('Настройки страници контакты', 'your-textdomain-here'),
        'desc' => 'Редактирование страницы контакты',
        'id' => 'contacts-page',
        'fields' => array(
            array(
                'id' => 'contacts-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-title-1',
                'type' => 'text',
                'title' => esc_html__('Заголовок 1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-title-2',
                'type' => 'text',
                'title' => esc_html__('Заголовок 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-title-3',
                'type' => 'text',
                'title' => esc_html__('Заголовок 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-desc-first',
                'type' => 'textarea',
                'title' => esc_html__('Описание 1', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-desc-second',
                'type' => 'textarea',
                'title' => esc_html__('Описание 2', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
            array(
                'id' => 'contacts-info-desc-third',
                'type' => 'textarea',
                'title' => esc_html__('Описание 3', 'your-textdomain-here'),
                'default' => 'Default Text',
            ),
        )   
    )
);
<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
->add_tab('Общие настройки', [
  Field::make('image', 'site_logo', 'Логотип'),
])

->add_tab('Контакты', [
  Field::make('text', 'site_phone', 'Телефон'),
  Field::make('text', 'site_phone_digits', 'Телефон только цифры'),
  Field::make('text', 'site_address', 'Адрес'),
  Field::make('text', 'site_twitter', 'Ссылка twitter'),
  Field::make('text', 'site_facebook', 'Ссылка facebook'),
  Field::make('text', 'site_youtube', 'Ссылка youtube'),
  Field::make('text', 'site_in', 'Ссылка in'),
]);
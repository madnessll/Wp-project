<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
->show_on_page(24)
->add_tab('Первый экран', [
  Field::make('textarea', 'main_title', 'Заголовок'),
  Field::make('text', 'main_subtitle', 'Подзаголовок'),
  Field::make('text', 'main_btn', 'Текст кнопки'),
  Field::make('image', 'main_bg', 'Задний фон'),
  Field::make('image', 'main_img', 'Изображение которое крутится'),
])
->add_tab('Второй экран', [
        Field::make('complex', 'sec2_cards', 'Карточки')
        ->add_fields('sec2_card', 'Карточка', [
            Field::make('text', 'sec2_card_title', 'Заголовок'),
            Field::make('textarea', 'sec2_card_text', 'Текст'),
        ]),
])
->add_tab('О нас', [
  Field::make('rich_text', 'about_descr', 'Описание'),
  Field::make('text', 'about_digit_left', 'Число слева'),
  Field::make('text', 'about_digit_right', 'Число справа'),
])
->add_tab('Популярное меню', [
        Field::make('complex', 'items', 'меню')
            ->add_fields([
                Field::make('text', 'items_title', 'Первое слово таба'),
                Field::make('text', 'items_subtitle', 'Второе слово таба'),
                Field::make('complex', 'items_menu_items', 'Одна позиция')
                    ->add_fields([
                        Field::make('text', 'item_title', 'Название'),
                        Field::make('text', 'item_price', 'Цена'),
                        Field::make('image', 'item_image', 'Картинка'),
                        Field::make('textarea', 'item_description', 'Описание'),
                    ]),
            ]),
    ])
->add_tab('Забронировать', [
  Field::make('image', 'book_img', 'Изображение под видео'),
])
->add_tab('Члены команды', [
        Field::make('complex', 'team', 'Команда')
        ->add_fields('person', 'Член команды', [
            Field::make('image', 'item_image', 'Картинка'),
            Field::make('text', 'person_name', 'Имя'),
            Field::make('text', 'person_position', 'Должность'),
            Field::make('text', 'person_facebook', 'facebook'),
            Field::make('text', 'person_twitter', 'twitter'),
            Field::make('text', 'person_instagram', 'instagram'),
        ]),
])
->add_tab('Отзывы', [
        Field::make('complex', 'reviews', 'Отзывы')
        ->add_fields('review', 'Отзыв', [
          Field::make('text', 'person_descr', 'Текст'),
          Field::make('text', 'person_name', 'Имя'),
          Field::make('text', 'person_profession', 'Профессия'),
          Field::make('image', 'person_image', 'Картинка'),
        ]),
]);

// //////////////////////////////////////////////////////////////////////////////////////////////////

Container::make('post_meta', 'Дополнительные поля')
->show_on_page(58)
->add_tab('Почты', [
  Field::make('text', 'contact-1', 'Booking почта'),
  Field::make('text', 'contact-2', 'General почта'),
  Field::make('text', 'contact-3', 'Technical почта'),
]);
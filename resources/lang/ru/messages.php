<?php

return [

    'inProgress' => 'Функционал еще не готов',
    'success' => '',
    'error' => 'Произошла ошибка.',
    'info' => '',
    'authError' => 'Вы должны войти в систему чтобы совершить это действие',
    'serverError' => 'Произошла ошибка сервера',
    'accountActivated' => 'Ваша учетная запись была подтверждена!',

    'requireStandart' => 'Требуется «Standart» аккаунт',
    'requirePro' => 'Требуется «Pro» аккаунт',

    'postUploaded' => 'Объявление добавлено успешно!',
    'postUploadedError' => 'При добавлении объявления произошла ошибка.',
    'postDeleted' => 'Объявление было удалено успешно!',
    'postDeleteError' => 'При удалении объявления произошла ошибка.',
    'postEdited' => 'Объявление было изменено успешно!',
    'postEditedError' => 'При изменении объявления произошла ошибка.',
    'postAddedFav' => 'Добавлено в избранное!',
    'postAddFavError' => 'Произошла ошибка.',
    'postAddFavPersonal' => 'Свое объявление нельзя добавить в избранное',
    'postRemovedFav' => 'Удалено из избранного!',
    'postRemoveFavError' => 'Произошла ошибка.',
    'postEditedErrorTooManyImages' => 'Слишком много изображений, максимум 5.',
    'postNewImgsDeleted' => 'Изображения были удалены',
    'postImgsDeleted' => 'Изображения были удалены',
    'postImgDeleted' => 'Изображение было удалено',
    'postInputErrors' => 'Некоторые поля заполнены неправильно.',
    'postActivated' => 'Объявление было опубликовано снова',
    'postDisactivated' => 'Объявление было скрыто от публики',
    'postOutdated' => 'Это объявление устарело, пожалуйста, обновите период жизни в настройках объявления',
    'tooManyPostsError' => 'Вы достигли максимального количества объявлений. (200 для Standart, 500 для Pro)',
    'allPostsDeleted' => 'Все объявления были удалены!',
    'tooManyUrgentPostsError' => 'Вы достигли максимального количества срочных объявлений. (100 для Standart, 300 для Pro)',
    
    'postTranslationEdited' => 'Перевод объявления был изменен успешно!',

    'mailerRequestAdded' => 'Запрос был успешно добавлен в Рассылку!',
    'mailersDeactivated' => 'Все Рассылки были успешно деактивирован!',
    'mailerActivated' => 'Рассылка была активирована успешно!',
    'mailerDeactivated' => 'Рассылка была деактивирована успешно!',
    'mailerTooManyMailers' => 'Слишком много Рассылок! (макс.10)',
    'mailerToManyTags' => 'Слишком много категорий',
    'mailerUploaded' => 'Рассылка настроена успешно!',
    'mailerUploadedError' => 'При настройке Рассылки произошла ошибка.',
    'mailerDeleted' => 'Рассылка была удалена успешно!',
    'mailersDeleted' => 'Все Рассылки были удалены успешно!',
    'mailerEditedError' => 'При изменении Рассылки произошла ошибка.',
    'mailerEdited' => 'Рассылка была изменена успешно!',
    'mailerAddedAuthor' => 'Автор был добавлен в Рассылку успешно!',
    'mailerTooManyAuthors' => 'Вы достигли максимума по количеству Авторов',
    'mailerRemovedAuthor' => 'Автор был удален из Рассылки успешно!',
    'mailerAuthorExists' => 'Автор уже находиться в Рассылке',
    'mailerTagExists' => 'Указанные категории уже указаны в вашей Рассылке',
    'mailerTagAdded' => 'Указанные категории успешно добавлены в вашу Рассылку!',
    'mailerTextAdded' => 'Указанный запрос успешно добавлен в вашу Рассылку!',
    'tagAlreadyChosen' => 'Вы не можете выбрать одну и ту же категорию дважды!',
    'mailerEmptyConditionsError' => 'Требуется хотя бы одно состояние!',
    'mailerEmptyTypesError' => 'Требуется хотя бы один тип!',
    'mailerEmptyRolesError' => 'Требуется хотя бы один сектор!',
    'mailerEmptyThreadsError' => 'Выберите оборудование или сервис',

    'profileEdited' => 'Профиль изменен успешно!',
    'profileImgDeleted' => 'Изображение профиля было успешно удалено!',
    'profileDeleted' => 'Профиль был успешно удален!',

    'signedIn' => 'Добро пожаловать!',
    'signedOut' => 'До свидания',

    'messageSent' => 'Сообщение отправлено!',
    
    'planUpdated' => 'Ваша подписка успешно изменена!',
    'planCanceled' => 'Ваша подписка была успешно отменена!',
    
    'postImportError' => 'Ошибка при анализе файла импорта',
    'postImportSuccess' => 'Объявления успешно опубликованы',

    'importExtError' => 'Разрешены только файлы xlsx.',
    'importStructureError' => 'Нарушена структура файла импорта.',
    'importEmptyError' => 'Загруженный файл пуст.',
    'importCompulsoryError' => 'Обязательные поля не заполненны. Обязательные поля: заголовок, описание, тип, сектор, состояние, категория, телефон или почта, срок действия',
    'importTypeError' => 'Поле "Тип" заполнено неправильно. Для ввода разрешены только определенные значения: "1" - Продажа оборудования; "2" - покупка оборудования; "3" - Аренда оборудования; "4" - Аренда оборудования',
    'importRoleError' => 'Поле "Сектор" заполнено неправильно. Для ввода разрешены только определенные значения: "1" - частное лицо; "2" - бизнес',
    'importConditionError' => 'Поле "Состояние" заполнено неправильно. Для ввода разрешены только определенные значения: "1" - не указано; "2" - Новый; "3" - Б/у; "4" - На запчасти',
    'importTagError' => 'Поле "Категория" заполнено неправильно. Категория должна быть одной из доступных кодов-категорий. См. Доступные коды-категорий на странице правил импорта',
    'importRegionError' => 'Поле "Область" заполнено неправильно. Область должа быть одним из кодов-областей. См. Доступные коды-областей на странице правил импорта',
    'importLifetimeError' => 'Поле "Длительность" заполнено неправильно. Для ввода разрешены только определенные значения: "1" - 1 месяц; "2" - 2 месяца; "3" - Без ограничений (доступно для аккаунтов Pro)',
    'importTitleError' => 'Поле "Заголовок" заполнено неправильно. Минимум 10 символов. Максимум 70 символов.',
    'importAmountError' => 'Поле "Количество" заполнено неправильно. Пример: "432 шт.". Максимум 15 символов.',
    'importDescriptionError' => 'Поле "Описание" заполнено неправильно. Минимум 10 символов. Максимум 9000 знаков.',
    'importCompanyError' => 'Поле "Компания" заполнено неправильно. Минимум 5 символов. Максимум 200 символов.',
    'importManufError' => 'Поле "Производитель" заполнено неправильно. Минимум 3 символа. Максимум 70 символов.',
    'importManufDateError' => 'Поле "Дата производства" заполнено неправильно. Минимум 3 символа. Максимум 70 символов.',
    'importPNError' => 'Поле "Серийный номер p/n" заполнено неправильно. Минимум 3 символа. Максимум 70 символов.',
    'importCostError' => 'Поле "Цена" заполнено неправильно. Введите стоимость в формате: [0000.00]. Максимум 20 цифр. После цены укажите валюту - «USD» или «UAH». Пример: "999.9USD"',
    'importEmailError' => 'Поле "Контакстаня почта" заполнено неправильно. Вы можете ввести любой адрес электронной почты. Макс длина: 254',
    'importPhoneError' => 'Поле "Контактный телефон" заполнено неправильно. Формат телефона: 0 (12) 345 67 89',
    'importTooManyPostsError' => 'Вы пытаетесь сделать импорт :amount объявлений, но у вас осталось :diff до максимума.',
    'importTooManyPremiums' => '',
    'importTooManyUrgents' => 'Много срочных объявлений. Ви имеете - :am. Максимум - :max.',
];

Тестове  завдання 

Дамп бази в знаходиться у корені проекту test_mvc.sql
Для розвертання проекту  НЕОБХІДНО :
  - скачати або клонувати репозиторій https://github.com/aleksvin8888/testMvc.git
  - встановити  додаткові пакети composer install
  - відредагувати конфіг  config/config_db.php

Задача:
1. Есть страница с формой "добавить нового сотрудника".
Поля для формы:
- email - уникальное значени
- имя пользователя
- адрес пользователя
- телефон
- комментарии
- отдел (выбор из другой сущности)
2. Есть страница отделы. Там список существующих отделов с возможностью добавить новый и удалить.
    Все очень просто. 1 поле "название". Название уникальное
3. Есть страница "все пользователи" со списком всех этих пользователей , и их отделами.
    по клику на выбранного переходим на страницу детального просмотра.
4. Нужно создать роуты, чтоб использовать адекватные ЧПУ.
Ссылки у всех этих страниц должны быть не index.php, user.php?id=1б а например app.loc/users , app.loc/add-user, app.loc/user/1
Условия выполнения:
- это должно быть MVC
- в отдельном файле должны быть настройки подключения к БД
- должны быть адекватные роуты с ЧПУ
- не использовать готовых ЦМС
- не использовать фреймворков
- всю историю реализации хотелось бы увидеть в гите (не один финальный коммит "код", а шаг за шагом)
- для фронтенда можете использовать bootstrap

 План  але не той  що курять ))))

            1. создати структуру проекта  +
            2. накинути базовий шаблон та стилі +
            3. створити базу даних та наповнити тестовими даними  +
                    table 1 - "departments"
                            id
                            title -> uniq

                    table 2 - "users"
                        id
                        department_id
                        email
                        first_name
                        address
                        phone
                        comment

            4. Підключитися до бази  та вивисти на сторінку Users  табличку з інфою +
            5. сторінка departments вивести інфу +
                зробити створеня
                зробити видалення
            6. форма створити нового user +
                    зробити створення user
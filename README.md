## Application
1. Если в админке вместо изображений ошибки - нужно зайти в файл env и указать корректный адрес:порт
2. Для работы с записями бд в панели администратора нужно добавить таблицы в bread
3. Требуется настройка добавляемых таблиц в voyager иначе будет падать на записях содержащих формат Date

## Link
- Адрес сайта:                http://localhost:8000/
- Панель администратора:      http://localhost:8000/admin
- Конфигуратор бд (adminer):   http://localhost:8081/ 

## PHP
 php artisan voyager:install --with-dummy    - установка дефолтных таблиц для voyager
 php artisan storage:link
 php artisan serve

## Cmd mysql 
mysql -V
mysql -u example -p

## Voyager
### Default user
 email: admin@admin.com
 password: password

## SQL
```sql
ALTER DATABASE goodnews charset=utf8;

CREATE TABLE goodnews.articles (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	create_date Date,
	article_title VARCHAR(150),
	article_text TEXT,
	links VARCHAR(255),
	images VARCHAR(255)
) CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE goodnews.journal (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	date_of_wirting Date,
	journal_title VARCHAR(255),
	journal_description TEXT,
	autors VARCHAR(255),
	links VARCHAR(255),
	images VARCHAR(255)
) CHARACTER SET=utf8 COLLATE=utf8_general_ci;

INSERT INTO goodnews.articles (create_date, article_title, article_text, links, images) 
VALUES ('2023-01-01', 'This is header', 'Article ... .', null, 'test_img1.png');

INSERT INTO goodnews.journal (date_of_wirting, journal_title, journal_description, autors, links, images) 
VALUES ('2023-01-01','This is header','Short description','Autor', null, 'test_img2.png');
```
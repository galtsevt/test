# Тествое задание на Laravel
Форма с тремя обязательными полями: имя, e-mail, телефон. Отправка данных средствами js на backend,
валидация, запись в базу данных, отправка уведомления администратору системы на e-mail. 

* Отправка письма администратору происходит через очереди, дабы уменьшить время ответа сервера.
* Для ввода номера телефона используется пакет [imaskjs](https://github.com/uNmAnNeR/imaskjs)
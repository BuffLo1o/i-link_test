Тестовое задание i-link

№2
Сделать систему CRUD для сущности posts
Поля:
● id(int)
● author_id(int),
● subject(string 100)
● content(string 300),
● date(формат Г-М),
● like(int 10, - количество лайков),
❖ По ссылке *url*/post/like/id
Количество лайков у поста(поле like) должно увеличиваться, лайкать можно бесконечное
количество раз.
❖ По ссылке *url*/post/popular
Должны выводится все посты в порядке(от самых популярных до самых непопулярных)
❖ По ссылке *url*/post/popular/5
Должны выводится 5 самых популярных постов
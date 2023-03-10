<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/article.css">
    <link rel="stylesheet" href="./css/fancybox.css">
    <title>article</title>
</head>
<body>
    <div class="page-one">
        <nav class="nav">
            <div class="nav__add"><a href="Main">Главная</a></div>
            <div class="nav__exit"><a href="Login">Выход</a></div>
        </nav>

        <div class="blog">
            <div class="blog__name" data-fancybox data-src="#hidden-content">Название статьи<a href="#" class="blog__edit">изменить</a></div>
            <div class="blog__description" data-fancybox data-src="#hidden-content">описание статьи описание статьи описание статьи<a href="#" class="blog__edit">изменить</a></div>
            <div class="blog__categories" data-fancybox data-src="#hidden-content">Все<a href="#" class="blog__edit">изменить</a></div>

            <div class="hidden-content" id="hidden-content">
                <form class="modal-content" action="#">
                    <input type="text" placeholder="Название">
                    <input type="text" placeholder="Текст">
                    <input type="text" list="list">
                    <datalist id="list">
                        <option value="Все">
                        <option value="Мода">
                        <option value="Не мода">
                    </datalist>
                    <input type="submit" value="Изменить">
                </form>
            </div>
        </div>

        <script src="./js/jquery-3.6.3.min.js"></script>
        <script src="./js/fancybox.umd.js"></script>
</body>
</html>

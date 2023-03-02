<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/fancybox.css">
    <title>main</title>
</head>

<body>
    <div class="page-one">
        <nav class="nav">
            <div class="nav__add"><a href="#" data-fancybox data-src="#hidden-content">Добавить</a></div>
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
                    <input type="submit" value="Добавить">
                </form>
            </div>
            <div class="nav__exit"><a href="Login">Выход</a></div>
        </nav>

        <div class="categories">
            <div class="categories__all"><a href="#">Все</a></div>
        </div>

    <div class="articles">
        <div class="articles__item">
            <div class="articles__item__name"><a href="#">Название статьи</a></div>
            <div class="articles__item__categories">Все</div>
            <div class="articles__item__data">24.01.2023</div>
            <div class="articles__item__description">описание статьи описание статьи описание статьи</div>
        </div>

        <div class="articles__item">
            <div class="articles__item__name"><a href="#">Название статьи</a></div>
            <div class="articles__item__categories">Все</div>
            <div class="articles__item__data">24.01.2023</div>
            <div class="articles__item__description">описание статьи описание статьи описание статьи</div>
        </div>

        <div class="articles__item">
            <div class="articles__item__name"><a href="#">Название статьи</a></div>
            <div class="articles__item__categories">Все</div>
            <div class="articles__item__data">24.01.2023</div>
            <div class="articles__item__description">описание статьи описание статьи описание статьи</div>
        </div>

        <div class="articles__item">
            <div class="articles__item__name"><a href="#">Название статьи</a></div>
            <div class="articles__item__categories">Все</div>
            <div class="articles__item__data">24.01.2023</div>
            <div class="articles__item__description">описание статьи описание статьи описание статьи</div>
        </div>

        <div class="articles__item">
            <div class="articles__item__name"><a href="#">Название статьи</a></div>
            <div class="articles__item__categories">Все</div>
            <div class="articles__item__data">24.01.2023</div>
            <div class="articles__item__description">описание статьи описание статьи описание статьи</div>
        </div>
    </div>
    </div>

    <script src="./js/jquery-3.6.3.min.js"></script>
    <script src="./js/fancybox.umd.js"></script>
</body>
</html>

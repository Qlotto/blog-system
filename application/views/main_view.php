<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/fancybox.css">
    <link rel="stylesheet" href="./css/comman.css">
    <title>main</title>
</head>
<body>
    <div class="page-one">
        <nav class="nav">
            <div class="nav__add"><a href="#" data-fancybox data-src="#hidden-content">Добавить</a></div>
            <div class="hidden-content" id="hidden-content">

                <form class="modal-content" action="/Main" method="POST">
                    <input type="text" name="title" placeholder="Название">
                    <textarea type="text" name="description" placeholder="Текст"></textarea>
                    <select id="list" name="category">
                        <?php
                            foreach($data['categories'] as $n){
                                ?>
                                <option value="<?php echo $n['id'] ?>"><?php echo $n['category_name'] ?></option>
                            <?php
                            }
                        ?>
                    </select>
                    <input type="submit" value="Добавить">
                </form>

            </div>
            <div class="nav__exit"><a href="Login">Выход</a></div>
        </nav>

        <div class="categories">
            <?php 
            foreach($data['categories'] as $n){
                ?>
                <div class="categories__item"><a href="/Main?category=<?php echo $n['id'] ?>"><?php echo $n['category_name'] ?></a></div>
                <?php
            }
            ?>
        </div>

        <div class="articles">
        
            <?php
            foreach($data['articles'] as $n){
                ?>
            <div class="articles__item">
                <div class="articles__item__name"><a href="/Article?id=<?php echo $n['id'] ?>"><?php echo $n['title'] ?></a></div>
                <div class="articles__item__categories"><?php echo 'Категория: ' . $n['category_name']?></div>
                <div class="articles__item__data"><?php echo 'Дата публикации: ' . $n['date'] ?></div>
                <div class="articles__item__description"><?php echo $n['description'] ?></div>
            </div>
                <?php
            }
            ?>
        </div>
    </div>

    <script src="./js/jquery-3.6.3.min.js"></script>
    <script src="./js/fancybox.umd.js"></script>
</body>
</html>

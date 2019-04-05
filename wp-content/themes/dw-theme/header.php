<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon super site</title>
    <style type="text/css">
        .archive {
            padding: 2em;
            width: 33%;
            box-sizing: border-box;
        }

        .nav__list {
            display: flex;
            list-style: none;
        }

        .nav__item {
            margin-left: 1em;
        }

        h2 {
            display: none;
        }

        body {
            max-width: 1100px;
            width: 80%;
            margin: auto;
            padding: 2em;
        }

        main {
            display: flex;
            flex-wrap: wrap;
        }

        figure {
            margin: 1em 0 0 0;
        }

        .post__noimg {
            width: 300px;
            height: 200px;
            background: lightgray;
        }

        .article__head {
            padding: 1em 2em;
            height: 5em;
            color: #fff;
            font-family: "Arial Black";
        }
    </style>
</head>
<body>
<header>
    <h1 class="logo__top">Test wp</h1>
    <nav class="nav">
        <ul class="nav__list">
            <h2 class="nav__link">Principal navigation</h2>
            <?php foreach (dw_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if (count($item->children)): ?>
                        <ul class="nav__sub">
                            <?php foreach ($item->children as $child): ?>
                                <li class="nav__item">
                                    <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<!--    --><?php //wp_nav_menu([
//        'theme_location' => 'main',
//    ]); ?>
    <!--  TODO: On a besoin de créer un tableau : href  -->
</header>
<main>
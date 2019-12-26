<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>


</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="menu">
            <ul>
                <li class="first active"><a href="/">Главная</a></li>
                <li><a href="/test">Тест</a></li>
                <li><a href="/test/test">Тест с доп. функцией</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="box">
            <?php

            include 'app/views/' . $contentFile;

            ?>

        </div>
        <br class="clearfix"/>
    </div>

    <br class="clearfix"/>
</div>
</body>
</html>
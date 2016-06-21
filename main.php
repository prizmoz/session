<html>
<head>
    <meta charset="UTF-8"/>
</head>
<style>
header .color {
    display: inline-block;
    width: 30px;
        height: 30px;
    }

    .color.red {
    background: red;
}

    .color.blue {
    background: blue;
}

    .color.green {
    background: green;
}

    .color.yellow {
    background: yellow;
}

    .content {
    color: <?= $_COOKIE['color'];?>
}
</style>
<body>
<header>
    <a href="/?color=red"><span class="color red"></span></a>
    <a href="/?color=blue"><span class="color blue"></span></a>
    <a href="/?color=green"><span class="color green"></span></a>
    <a href="/?color=yellow"><span class="color yellow"></span></a>
    <a href="/?page=history">History</a>
</header>
<?= $content;?>
</body>
</html>
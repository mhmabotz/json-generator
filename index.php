<?php
//request file json from file and input on variable
$data = file_get_contents('config.json');
//decode the json query
$content = json_decode($data, true);

//remove field from array
$field = $content["field"];

?>

<!docktype html>
<head>
    <!--REQUEST META DO NOT CHANGE ANYTHINGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="device=device-width, initial-scale=1">

    <!--CONFIG-->
    <title>Hello World!</title>
    <link rel="stylesheet" href="all-min.css">
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
    <!--HEADER-->
<header>
        <div class="logo"><h1>EXAMPLE</h1></div>
</header>
<br>
    <!--CONTENT PHP AND HTML-->
    <section class="content">
        <!--Generate all field on json file with smoothies-->
        <?php foreach($field as $row) : ?>
            <div class="card-head">
                <h3 class="title-name"><?= $row["name"]; ?></h3>
                <div class="card-content">
                    <div class="card-img">
                        <img class="img-buffer" href='<?= $row["img"]; ?>'>
                    </div>
                   <h3 class="title-desc"><?= $row["description"]; ?></h3><br>
                   <a href='<?= $row["href"]; ?>'><button class="btn">Hire me!</button></a>
                </div>
            </div><br>
        <?php endforeach; ?>
    </section>

    <!--FOOTER CONTENT-->
    <br>
    <div class="footer">
        <footer><small><p>Copyright 2021 &copy; Your company name</p></small></footer>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title><?=$document->title?></title>


    <style>
    body {
        font-family: 'Roboto', sans-serif;
        color: #444;
        text-align: justify;
        line-height: 1.5;
    }

    .title {
        font-family: sans-serif;
        font-size: 30px;
        color: #333;
        margin: 5px 0;

    }


    .logo {
        width: 200px;
        margin: 30px auto;
    }

    .date {
        margin: 5px 0;
    }
    </style>
</head>

<body>

    <div class="inner-box">

        <div class="logo">
            <img src="data:image/png;base64,<?=renderImage()?>" alt="">
        </div>

        <div class="content">
            <h3 class="title"><?=$document->title?></h3>
            <p class="date"><?=dateFormatter($document->created_at)?></p>
            <div class="desc"><?=$document->description?></div>

        </div>



    </div>


</body>

</html>
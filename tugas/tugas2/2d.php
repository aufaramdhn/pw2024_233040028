<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d | Pemrograman Web</title>
    <style>
        .flex {
            display: flex;
        }

        .box {
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
            border: 1px solid black;
            background-color: red;
        }

        .box1 {
            background-color: black;
        }

        .box2 {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="flex">
            <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if (($i + $j) % 2 == 0) { ?>
                    <div class="box box1"></div>
                <?php } else { ?>
                    <div class="box box2"></div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>
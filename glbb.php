<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 40px;
            border: 1px black;
            background-color: white;
            padding-bottom: 20px;
        }

        body {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT344ejYmSn8B4Vsn-tVLyTb2yCkfKGUgqJCg&usqp=CAU");
        }

        div {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    function glbb()
    {
        $g = $_POST["g"];
        $v =  $_POST["v"];
        $t =  $_POST["s"];
        $s =  $_POST["t"];

        $result1 = $g * $v * $t * $t;
        $result2 = $v * $t;
        $x = floatval($result1) + floatval($result2) + floatval($s);
        echo $x;
    }
    ?>

    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-xs-12 col-md-8">
                <h3>Hasil Akhir</h3>
                <br>
                <div class="row mt-3">
                    <label class="col-md-5">Gravitasi</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"><?php echo $_POST["g"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Kecepatan :</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"> <?php echo $_POST["v"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Waktu</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"> <?php echo $_POST["t"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Jarak</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"> <?php echo $_POST["s"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Hasil Gerak Lurus Berubah Beraturan</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"><?php glbb(); ?></div>
                </div>
            </div>
        </div>
</body>

</html>
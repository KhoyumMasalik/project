<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor K28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #ff7f00;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            color: #ff4500;
        }

        .btn-primary {
            background-color: #ff4500;
            border-color: #ff8c00;
        }

        .btn-primary:hover {
            background-color: #ff8c00;
            border-color: #ff4500;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="nama" class="form-label">Masukan nama :</label>
            <input type="text" name="member" id="nama" class="form-control" placeholder="Masukan nama" required>
        </div>
        <div class="form-group">
            <label for="jenis" class="form-label">Pilih Jenis Motor : </label>
            <select name="jenis" id="jenis" class="form-select" required>
                <option value="default" selected disabled>Pilih jenis Motor:</option>
                <option value="Scooter">Scooter</option>
                <option value="Sport">Sport</option>
                <option value="SportTouring">Sport Touring</option>
                <option value="Cross">Cross</option>
            </select>
        </div>
        <div class="form-group">
            <label for="waktu" class="form-label">Masukan waktu sewa : </label>
            <input type="number" name="waktu" id="waktu" class="form-control" min="1" placeholder="Minimal 1 hari" required>
        </div>
        <center>
            <button type="submit" name="submit" class="btn btn-primary">Sewa</button>
        </center>
    </form>

    <?php

    include 'logic.php';

    $logic = new Rental();
    $logic->setHarga(100000, 150000, 200000, 250000);

    if (isset($_POST['submit'])) {
        $logic->member = $_POST['member'];
        $logic->jenis = $_POST['jenis'];
        $logic->waktu = $_POST['waktu'];

        $logic->Pembayaran();
    }
    ?>
</body>

</html>
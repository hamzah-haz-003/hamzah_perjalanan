<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>perjalananku</title>
    </head>


    <body>
        <div class="container">
            <div class="card shadow mb-4">
                <br>
                <center>
                    <h2 class="text-center m-0 font-weight-bold ">
                        PEMERINTAH KABUPATEN JEMBER
                        <br>
                        DESA SIDOMEKAR KEC.SEMBORO
                    </h2>
                    <h4 class="text-center m-0 font-weight-bold "> jl. Pelita no 27 Sidomekar, Kode Pos 68157</h4>
                </center>
                <hr>

                <table border="2" cellspacing="0" cellpadding="10" style="width: 100%;">
                    <tr>

                        <th scope="col">NO</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">jam</th>
                        <th scope="col">lokasi</th>
                        <th scope="col">suhu</th>

                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($print as $cat) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?php echo $cat['tanggal']; ?> </td>
                                <td><?php echo $cat['jam']; ?></td>
                                <td><?php echo $cat['lokasi']; ?></td>
                                <td><?php echo $cat['suhu']; ?>° Celcius</td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>


                    <script>
                        window.print()
                    </script>

                    <div class="row mb-3">
                        <div class="col-sm-10">

                            <a href="tampil_catatan" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="bi bi-box-arrow-right"></i>
                                </span>
                                <span class="text">Kembali</span>
                            </a>
                        </div>


                    </div>
    </body>

    </html>
</body>

</html>
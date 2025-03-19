<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Halaman Kembali</title>
    <style>
        .btn-custom {
            background-color:rgb(25, 135, 84); /* Warna hijau */
            color: white;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            background-color:rgb(58, 255, 104); /* Warna hijau gelap saat hover */
            transform: scale(1.05); /* Efek zoom */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="text-left">
        <?php if (isset($_SESSION["akun-admin"])) { ?>
            <a class="btn btn-custom fw-bold" href="beranda1.php#menu">
                <i class="fas fa-arrow-left"></i> KEMBALI
            </a>
        <?php } else { ?>
            <p>Anda tidak memiliki akses ke halaman ini.</p>
        <?php } ?>
    </div>
</div>

</body>
</html>



<table class="table table-bordered table-hover" style="margin-top: 100px;">

    <tr class="text-bg-success">

        <th>No</th>

        <th>Kode Pesanan</th>

        <th>Nama Pelanggan</th>

        <th>Kode Menu</th>

        <th>Qty</th>

    </tr>

    <?php $i = 1; foreach ($menu as $m) { ?>

        <tr style="background-color: white;">

            <td><?= $i; ?></td>

            <td><?= $m["kode_pesanan"]; ?></td>

            <td><?= $m["nama_pelanggan"]; ?></td>

            <td><?= $m["kode_menu"]; ?></td>

            <td><?= $m["qty"]; ?></td>

        </tr>

    <?php $i++; } ?>

</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Duit by Weesia</title>
    <link rel="stylesheet" href="style.css?v7">
</head>
<body>
    <div class = "h1">
        <h1>Travel</h1>
    </div>
    <div class = "container">
        <table border = "2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>No Telpon</th>
                <th>Lokasi Awal</th>
            </tr>
            <tr>
                <td>
                    1.
                </td>
                
                <td>
                    <?php echo $_POST['nama'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['tanggal'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['tujuan'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['nohp'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['lokasi'] ?>
                </td>
                
            </tr>
        </table>
    </div>
</body>
</html>
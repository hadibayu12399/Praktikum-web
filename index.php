<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v5">
</head>
<body>
    <div class = "h1">
        <h1>Travel</h1>
    </div>
    <div class = "container">
        <form action="travel.php" method="post">
        <div class = "table">
            <table border = "2">
                <tr>
                    <th><label  for="">Nama      :</label></th>
                    <td> <input  type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th><label  for="">Tanggal      :</label></th>
                    <td> <input  type="date" name="tanggal" required></td>
                </tr>
                <tr>
                    <th><label  for="">Tujuan      :</label></th>
                    <td> <input  type="text" name="tujuan" required></td>
                </tr>
                <tr>
                    <th><label  for="">No Telpon      :</label></th>
                    <td> <input  type="text" name="nohp" required></td>
                </tr>
                <tr>
                    <th><label  for="">Lokasi Awal      :</label></th>
                    <td> <input  type="text" name="lokasi" required></td>
                </tr>
            </table>
            <br><br><br><button type="submit" name="submit"><b>Submit</b></button>
        </div>
        </form>
    </div>
</body>
</html>
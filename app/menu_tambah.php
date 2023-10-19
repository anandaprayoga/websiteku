<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RestoranKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #e74c3c;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #c0392b;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 10px;
        }

        section {
            padding: 20px;
        }

        .menu-item {
            background-color: #fff;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        footer {
            background-color: #e74c3c;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>RestoranKu</h1>
    </header>
    <nav>
        <a href="../index.html">Beranda</a>
        <a href="menu.php">Menu</a>
    </nav>
    <section>
        <div class="menu-item">
        <h3>Tambah Menu</h3>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Menu</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Menu</td>
                    <td>
                        <select name="jenis">
                            <option value="Minuman">Minuman</option>
                            <option value="Makanan">Makanan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga Menu</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" name="submit"></td>
                </tr>
            </table>
        </form>

        <?php

            include "koneksi.php";

            if (isset($_POST['submit'])) {
                mysqli_query($koneksi, "INSERT INTO menu SET
                nama = '$_POST[nama]',
                jenis = '$_POST[jenis]',
                harga = '$_POST[harga]'");

                echo "Data berhasil ditambahkan!";
            }

        ?>
        </div>
    </section>
    <footer>
        &copy; 2023 Restoranku
    </footer>
</body>
</html>
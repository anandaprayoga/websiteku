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
        <h3>Daftar Menu</h3>

            <table border="1" cellpadding="10px">
                <tr>
                    <th>No</th>
                    <th>Kode Menu</th>
                    <th>Nama Menu</th>
                    <th>Jenis Menu</th>
                    <th>Harga Menu</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <?php

                include "koneksi.php";
                $no = 1;
                $ambildata = mysqli_query($koneksi, "SELECT * FROM menu");

                while ($tampil = mysqli_fetch_array($ambildata)) {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[id]</td>
                        <td>$tampil[nama]</td>
                        <td>$tampil[jenis]</td>
                        <td>$tampil[harga]</td>
                        <td><a href='?id=$tampil[id]'>Hapus</a></td>
                        <td><a href='menu_edit.php?id=$tampil[id]'>Edit</a></td>
                    </tr>";

                    $no ++;
                }

                ?>
            </table>
        </div>
        <a href="menu_tambah.php"><button>Tambah Menu</button></a>

        <?php

        if (isset($_GET['id'])) {
            mysqli_query($koneksi, "DELETE FROM menu WHERE id='$_GET[id]'");

            echo "Data telah terhapus!";
            echo "<meta http-equiv=refresh content=2; URL='menu.php'>";
        }

        ?>
        
    </section>
    <footer>
        &copy; 2023 Restoranku
    </footer>
</body>
</html>
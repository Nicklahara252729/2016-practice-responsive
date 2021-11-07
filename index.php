<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Membuat Responsive</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
        <header></header>
            <div class="menu">
                <p>PASAR.COM</p>
                <ul>
                    
                    <li>MENU
                        <ul>
                            <a href="index.php?modul=beranda"><li>Beranda</li></a>
                    <a href="index.php?modul=produk"><li>Produk</li></a>
                    <a href="index.php?modul=kategori"><li>Kategori</li></a>
                    <a href="index.php?modul=carapesan"><li>Cara Pesan</li></a>
                    <a href="index.php?modul=pembayaran"><li>Pembayaran</li></a>
                    <a href="index.php?modul=tentangkami"><li>Tentang Kami</li></a>
                        </ul>
                    </li>
                    
                </ul>

            </div>
            <div class="menu-dua">
                <p>PASAR.COM</p>
                <ul>
                    <a href="index.php?modul=beranda"><li>Beranda</li></a>
                    <a href="index.php?modul=produk"><li>Produk</li></a>
                    <a href="index.php?modul=kategori"><li>Kategori</li></a>
                    <a href="index.php?modul=carapesan"><li>Cara Pesan</li></a>
                    <a href="index.php?modul=pembayaran"><li>Pembayaran</li></a>
                    <a href="index.php?modul=tentangkami"><li>Tentang Kami</li></a>
                </ul>
            </div>
            <div class="container">
                <div class="left-content">
                    <div class="isi">
                        <div class="isiatas"></div>
                    </div>
                    <div class="isi">
                        <div class="isiatas"></div>
                    </div>
                    <div class="isi">
                        <div class="isiatas"></div>
                    </div>
                </div>
                <div class="right-content">
                    <?php
                    if(isset($_GET['modul'])){
                        $modul=$_GET['modul'];
                        if($modul=='beranda'){
                            include"beranda.php";
                        }
                        else if($modul=='produk'){
                            include"produk.php";
                        }
                        else if($modul=='kategori'){
                            include"kategori.php";
                        }
                        else if($modul=='carapesan'){
                            include"carapesan.php";
                        }
                        else if($modul=='pembayaran'){
                            include"pembayaran";
                        }
                        else if($modul=='tentangkami'){
                            include"tentangkami.php";
                        }
                    }
                    ?>
                </div>
            </div>
        <footer>
            <div class="wrap-kol-footer">
            <div class="kolom-footer" id="kolsatu">
                <p>ini footer ini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footer </p>
            </div>
            <div class="kolom-footer" id="koldua">
             <p>ini footer ini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footer </p></div>
            <div class="kolom-footer" id="koltiga">
             <p>ini footer ini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footerini footer </p></div>
                </div>
            </footer>
        </div>
    </body>
</html>
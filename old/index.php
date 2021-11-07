<!DOCTYPE HTML>
<html>
    <head>
        <title>Latihan</title>
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/gaya.css" rel="stylesheet">
    </head>
    <body>
        <div class="bungkus">
            <header></header>
            <div class="menu">
                <div class="isimenu">
                    <ul>
                        <a href="index.php"><li>Beranda</li></a>
                        <a href="index.php?modul=produk"><li>Produk</li></a>
                        <a href="index.php?modul=kategori"><li>Kategori</li></a>
                        <a href="index.php?modul=Cara_Pesan"><li>Cara Pesan</li></a>
                        <a href="index.php?modul=Pembayaran"><li>Pembayaran</li></a>
                        <a href="index.php?modul=Tentang_Kami"><li>Tentang Kami</li></a>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="kiri">
                    <div class="isikiri">
                        <div class="judul"></div>
                    </div>
                    <div class="isikiri">
                        <div class="judul"></div>
                    </div>
                    <div class="isikiri">
                        <div class="judul"></div>
                    </div>
                </div>
                <div class="kanan">
                    <?php
if(isset($_GET['modul'])){
    $modul=$_GET['modul'];
    if($modul=='produk'){
    include"produk.php";
}
else if($modul=='kategori'){
    echo "halaman kategori";
}
else if($modul=='Cara_Pesan'){
    echo "halaman Cara Pesan";
}else if($modul=='Pembayaran'){
    echo "halaman pembayaran";
}else if($modul=='Tentang_Kami'){
    include"Tentang_Kami.php";
}

}

?>
                </div>
            </div>
            <footer>
                <div class="isifooter">
                    <div class="tigabagian"></div>
                    <div class="tigabagian"></div>
                    <div class="tigabagian"></div>
                </div>
            </footer>
        </div>
    </body>
</html>
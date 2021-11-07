<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Coba</title>
        <link href="css/baru.css" rel="stylesheet">
        <script>
            var i;
            i=1;
            function tampil(){
                if(i==1){
                    
                    document.getElementById('cari').style.visibility="visible";
                    i=2;
                }
                else{
                    document.getElementById('cari').style.visibility="hidden";
                    i=1;
                }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <div class="menu-tengah" id="menu1">
                    <ul>
                        <li>Beranda</li>
                        <li>Kategori</li>
                        <li>Galery</li>
                        <li>Grup</li>
                        <li>Pemberitahuan</li>
                        <li>Tentang Kami</li>
                    </ul>
                    <div class="go" onclick="tampil();"><p>GO</p></div>
                </div>
                <div class="menu-tengah-dua" id="menu2">
                    <ul>
                        <li>Menu
                            <div class="in-li-menu">
                            <ul>
                                <li>Beranda</li>
                                <li>Kategori</li>
                                <li>Galery</li>
                                <li>Grup</li>
                                <li>Pemberitahuan</li>
                                <li>Tentang Kami</li>
                            </ul>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-tengah">
                <div class="search" id="cari"></div>
            </div>
        </div>
    </body>
</html>
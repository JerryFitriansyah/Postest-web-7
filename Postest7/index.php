<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMBAKO MASJAYA</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/ikon.ico">
</head>
<body>
    <header class="head">
        <nav>
            <div class="header-logo img">
                <img src="image/logo-header.png" alt=""/>
            </div>
            <div class="header-nav">
                <ul>
                    <li> <a href="index.php"> Home </a></li>
                    <li> <a href="form.php"> Input Barang </a></li>
                    <li> <a href="hasilform.php"> Lihat Barang </a></li>
                    <li> <a href="AboutMe.php">About Me</a> </li>
                    <li> <a href="VisitMe.php">Visit Me?</a> </li>
                    <li> <a href="logout.php">Logout</a> </li>
                    <li> <label>
                        <input type="checkbox" class="checkbox" id="tombol">
                        <span class="check"></span>
                    </label></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="text-box" id="text">
        <h1> SEMBAKO? Cek disini!! </h1>
        <p> Disini anda dapat berbelanja untuk memenuhi kebutuhan rumah anda!<br/>Jika anda beli beras, minyak, telur, indomie, dll untuk pertama kali disini, anda akan mendapatkan diskon</p>
    </div>

    <main>
        <div class="produk-text">
            <h3>Berikut adalah produk yang saat ini kami miliki</h3>
            <div class="row">
                <div class="produk" id="gambar1">
                    <img src="image/minyak.jpg">
                </div>
                <div class="produk" id="gambar2">
                    <img src="image/beras.jpg">
                </div>
                <div class="produk" id="gambar3">
                    <img src="image/telur.jpg">
                </div>
                <div class="produk" id="gambar4">
                    <img src="image/indomie.jpg">
                </div>
            </div>
        </div>
    </main>

    <footer class="foot">
        <h4> About Me </h4>
        <p> Saya Jerry Fitriansyah seorang mahasiswa informatika angkatan 2021 yang bukan wibu,<br/>
            sedang belajar pemrograman web walau kebanyakan nonton tutorial</p>
        <div class="icon">
            <i class="fa fa-whatsapp"> 0858-8308-9058 </i>
            <i class="fa fa-instagram"> erry.fth </i>
            <i class="fa fa-envelope-o"> jryfitri@gmail.com </i>
        </div>
        <p> @Copyright 2022 - Jerry Fitriansyah - Made with HTML - CSS - Javascript </p>
    </footer>
    <script src="script.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("mode-gelap");
        }
    </script>
</body>
</html>
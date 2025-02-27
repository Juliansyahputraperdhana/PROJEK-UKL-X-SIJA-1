<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background: #e6e6e6;
    padding: 0;
    margin:0;
    
}

.container{
    width: 65%;
    height: auto;
    background: white;
    margin:auto;
    margin-top: 5px;
    padding-bottom: 5px;
}
.logo {
    font-size: xx-large;
    padding: 30px 0 30px 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000000;
    border: 1px solid gainsboro;
}

nav li {
    float: left;
}

nav li a{
    display: inline-block;
    color:#ffffff;
    text-align: center;
    padding: 14px 15px;
    text-decoration: none;
}

nav li a:hover {
    opacity:0.9;
    background-color: #000000;
}

article {
    width: 98.8%;
    height: auto;
    border-radius: 3px;
    margin: 5px 5px 5px 5px;
    border: 1px solid gainsboro;
    clear: both;
}

article p {
    padding: 5px 6px 5px 5px;
    line-height: 1.5;  
}
article .konten {
    width: 23.5%;
    height: auto;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border: 1px solid gainsboro;
    float: left;
}

article .isi {
    width: 98.5%;
    height: auto;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border: 1px solid gainsboro;
    float: left;
}
article .isi .judul {
    font-size: xx-large;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-top: 10px;
}
article .isi p {
    margin-top: 0;
}
article .isi img {
    float: left;
    margin: 5px 5px 5px 5px;
}

article .konten img {
    width: 95.8%;
    height: 150px;
    margin: 5px 5px 5px 5px;

}
article .konten:hover {
    opacity:0.9;

}
article .konten .judul a {
    margin-left: 5px;
    text-decoration: none;
    font-size:x-large;
    color:#020101;
}

article .konten a:hover {
    opacity:0.9;
}

footer {
    clear: both;
    width: 98.8%;
    height: auto;
    text-align: center;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border-bottom: 1px solid gainsboro;
    padding-top: 15px;
    padding-bottom: 15px;  
}
    </style>
</head>
<body>
    <div class="container">
       <header>
           <div class="logo">
               WEB TEKNOLOGI PANGAN
           </div>
       </header>
       <nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="kontak-saya.html">Kontak Saya</a></li>
                <li><a href="tentang-saya.html">Tentang Saya</a></li>
            </ul>
        </nav>
       <article>
           <div class="konten">
            <a href="Pengolahan-susu.html"><img src="https://th.bing.com/th/id/OIP.-fpMRTput88VO28etuDWxwHaEK?w=300&h=180&c=7&r=0&o=5&cb=10&dpr=1.3&pid=1.7" ></a>
            <div class="judul">
                <a href="Pengolahan-susu.html">Pengolahan Susu</a>
            </div>
           <p>Susu adalah cairan bergizi berwarna putih yang dihasilkan oleh kelenjar susu mamalia, salah satunya manusia. Susu adalah sumber gizi utama bagi bayi sebelum mereka dapat mencerna makanan padat.</p>
           </div>
           <div class="konten">
            <a href="Pengolahan-keju.html"><img src="https://img.okezone.com/content/2021/02/22/298/2366216/yuk-kenali-perbedaan-keju-alami-dan-olahan-bIk7uMD4EF.jpg" ></a>
            <div class="judul">
                <a href="Pengolahan-keju.html">Pengolahan Keju</a>
            </div>
        
           <p>Keju adalah sebuah makanan yang dihasilkan dengan memisahkan zat-zat padat dalam susu melalui proses pengentalan atau koagulasi.</p>
           </div>
           <div class="konten">
            <a href="Pengolahan-ikan-kaleng.html"><img src="https://th.bing.com/th/id/R.ef7e6de355b4fc220cd78230f91b1fa8?rik=K1xbc1M7Wo8Sgg&riu=http%3a%2f%2fstpbali.com%2fimages%2fblog%2f.tmb%2fthumb_2ce60-blog-2_adaptiveResize_1102_621.jpg&ehk=lPTf7fjWQpNVqPDbq0dWIevOO2FBr9pFuZ9tFinpdac%3d&risl=&pid=ImgRaw&r=0" ></a>
            <div class="judul">
                <a href="Pengolahan-ikan-kaleng.html">Pengolahan Ikan Kaleng</a>
            </div>
           <p>Ikan kaleng merupakan ikan dan produk ikan yang telah melalui pemrosesan, dikemas dalam kaleng kedap udara, dan diberikan panas untuk mematikan bakteri di dalamnya serta mematangkannya.</p>
           </div>
           <div class="konten">
            <a href="Pengolahan-tape-singkong.html"><img src="data:image/jpeg;base64,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" ></a>
            <div class="judul">
                <a href="Pengolahan-tape-singkong.html">Pengolahan Tape Singkong</a>
            </div>
           <p>Tapai singkong adalah tapai yang dibuat dari singkong yang difermentasi. Makanan tradisional ini populer di Jawa dan dikenal di seluruh tempat, mulai dari Jawa Barat hingga Jawa Timur.</p>
           </div>
      </article>
  
       <footer>
            Copyright 2024 WEB TEKNOLOGIN PANGAN
       </footer>
    </div>
</body>
</html>
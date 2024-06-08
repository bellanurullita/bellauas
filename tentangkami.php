<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Website</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  
  <body>
    <nav>
      <div class="">
        <img
          src="img/bel1.jpeg"
          onclick="alert('SENANG BELAJAR WEB YEAYYYY')"
          alt="bella"
        />
      </div>
      <ul>
      <li>
          <a href="index.php">HOME</a>
        </li>
        <li>
          <a href="listproduk.php">LIST PRODUK</a>
        </li>
        <li>
          <a href="tentangkami.php">TENTANG KAMI</a>
        </li>
        <li>
          <a href="contact.php">KONTAK</a>
        </li>
      </ul>
    </nav>

    <!-- about-->
    <div data-aos="zoom-in"data-aos-duration="2000">
    <section class="tentangkami>">
      <div class="container">
        <center>
          <img
            src="img/banners1.jpg"
            width="60%"
            justify-content="center"
            align-items="center"
            alt="bunga"
          />
        </center>
        <h3>TENTANG KAMI</h3>
        <p><h3>
        Seblak merupakan makanan khas dari bandung, dan sekarang telah menjadi salah satu makanan favorit yg banyak digemari oleh banyak orang terutama anak muda. Maka dari itu kami menyediakan kedai makanan dengan nama Seblak  Bunda Raziel. Seblak dengan berbagai macam varian toping dan level pedas untuk setiap porsinya. Seblak kami menggunakan bahan bahan pilihan dan cabai segar berkualitas.</h3>
        </p>
      </div>
    </section>
  </div>
    <footer>
      <div class="container">
        <small>BELLA NURULLITA</small>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

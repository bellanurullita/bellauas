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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
      .card {
        background: linear-gradient(#fff, #f3ff00);
        width: 330px;
        text-align: center;
        padding: 20px;
        border: solid 1px #ccc;
        border-radius: 10px;
      }
      .img_profile {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        cursor: pointer;
        transition: 0.2s;
        object-fit: cover;
      }
      .img_profile:hover {
        transform: scale(1.2);
      }
      .nama {
        font-size: 16px;
        margin: 10px 0;
        color: darkblue;
      }
      .kelas {
        color: gray;
        font-size: 14px;
      }
      .card-container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      @media (min-width: 960px) {
        .card-container {
          justify-content: space-around;
        }
      }
      .title {
        text-align: center;
        font-size: 24px;
        margin: 20px 0;
        color: darkblue;
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="">
        <img src="img/bel1.jpeg" alt="bella" />
      </div>
      <ul>
        <li>
          <a href="index.html">HOME</a>
        </li>
        <li>
          <a href="listproduk.php">LIST PRODUK</a>
        </li>
        <li>
          <a href="tentangkami.html">TENTANG KAMI</a>
        </li>
        <li>
          <a href="contact.html">KONTAK</a>
        </li>
      </ul>
    </nav>

    <h1 class="title">List Produk</h1>

    <?php
    $kawan['222303004'] = ['Seblak Suki + Sosis dilamo', 'Rp.15.000'];
    $kawan['222303028'] = ['Seblak Tulang + Mie + Kerupuk', 'Rp.10.000'];
    $kawan['222303011'] = ['Seblak Tulang + Kerupuk + Mie + baso', 'Rp.18.000'];
    $kawan['222505031'] = ['Seblak Ceker', '10.000'];
    $kawan['222505074'] = ['Seblak Tulang + Cilok + Kerupuk + Mie', 'Rp.15.000'];
    $kawan['222505073'] = ['Seblak Suki + Sosis dilamo + Enoki + Tahu + Bawang goreng', 'Rp.22.000'];
    $kawan['222505075'] = ['Seblak Ceker + Batagor + Mie + Baso ', 'Rp.18.000'];
    $kawan['222505076'] = ['Seblak Tulang + Tahu + Kerupuk ', 'Rp.11.000'];
    $kawan['222505077'] = ['Seblak Campur tanpa tulang', 'Rp.20.000'];
    $kawan['222505078'] = ['Seblak Suki + Sosis dilamo + Enoki', 'Rp.18.000'];
    $kawan['222505079'] = ['Seblak Tulang + Batagor + Telor', 'Rp.17.000'];
    $kawan['222505081'] = ['Seblak Tulang + Kerupuk + Telor + Sayur', 'Rp.20.000'];
    $kawan['222505082'] = ['Seblak Tulang + Kerupuk + Telor ceplok ', 'Rp.15.000'];
    $kawan['222505080'] = ['Seblak Suki + Basreng + Sosis dilamo', 'Rp.18.000'];
    $kawan['222505083'] = ['Seblak Mie + Baso + Ceker + Telor', 'Rp.20.000'];
    

    $cards = '';
    $i = 0;

    foreach ($kawan as $key => $sub_arr_kawan) {
        $i++;
        $cards .= "
          <div class='card'>
            <img src='img/$i.jpg' alt='foto' class='img_profile' onclick=\"alert('Halo! nama saya $sub_arr_kawan[0].')\"/>
            <div class='nama'>$sub_arr_kawan[0]</div>
            <div class='kelas'>$sub_arr_kawan[1]</div>
            <button onclick='goToPemesanan()' style='background-color: #ff2a00; color: white; border-radius: 5px;'>Pesan</button>
          </div>
        ";
    }

    echo "<div class='card-container'>$cards</div>";
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      function goToPemesanan() {
        window.location.href = 'formpemesanan.php';
      }
    </script>
  </body>
</html>

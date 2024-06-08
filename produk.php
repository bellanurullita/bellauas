<h1> Array Associative </h1>


<style>
    .card{
        /* background: red; */
        background: linear-gradient(#fff, #cfc);
        width: 150px;
        text-align:center;
        padding: 15px;
        border: solid 1px ##ccc;
        border-radius: 10px;
    }
    .img_profile{
        height: 100px;
        width : 100px;
        border-radius: 50%;
        cursor: pointer;
        transition: .2s:
        object-fit: cover;
    }
    .img_profile:hover{
        transform: scale(1.2)
    }
    .nama{
        font-size: 14px;
        margin: 10px 0;
        color: darkblue;
    }
    .kelas{
        color: gray;
        font-size: 12px;
    }
</style>

<!-- Desain Card -->
<!--div class=card>
    <img src="foto/1.jpg.jpg" alt="" class=img_profile onclick="alert('Halo! nama saya Bella Nurullita.')"/>
    <div class=nama>Bella Nurullita</div>
    <div class=kelas>KA-REG-SM4</div>
</div>-->


<?php

$kawan['222303004'] = ['Bella Nurullita', 'KA-REG-SM4'];
$kawan['222303028'] = ['Debi Yohana', 'KA-REG-SM4'];
$kawan['222303011'] = ['Maulidina', 'KA-REG-SM4'];
$kawan['222505031'] = ['Nadda Shidiqah', 'KA-REG-SM4'];
$kawan['222505074'] = ['Aldira Givari', 'SI-REG-SM4'];

// echo '<pre>';
// var_dump($kawan);
// echo '</pre>';

$card = "
<div class=card>
    <img src=\"foto/1.jpg.jpg\" alt=\"\" class=img_profile onclick=\"alert('Halo! nama saya Bella Nurullita.')\"/>
    <div class=nama>Bella Nurullita</div>
    <div class=kelas>KA-REG-SM4</div>
</div>
";

$i = 0;
$cards = '';
foreach ($kawan as $key => $sub_arr_kawan) {
    $i ++;
    // echo "<div>$i. $sub_arr_kawan[0] $sub_arr_kawan[1]</div>";

    $cards.="
      <div class=card>
        <img src=\"foto/$i.jpg.jpg\" alt=\"foto\" class=img_profile onclick=\"alert('Halo! nama saya $sub_arr_kawan[0].')\"/>
        <div class=nama>$sub_arr_kawan[0]</div>
        <div class=kelas>$sub_arr_kawan[1]</div>
      </div>
    ";

}

echo "<div style='display:flex; gap:10px; flew-wrap:wrap'>$cards</div>";
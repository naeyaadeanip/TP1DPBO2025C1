<?php

include "petshop.php";

//membuat objek
$list = [];
$list[0] = new petshop('1', 'Kucing', 'Hewan', '100000', 'cat.jpg');
$list[1] = new petshop('2', 'Anjing', 'Hewan', '200000', 'dog.jpg');
$list[2] = new petshop('3', 'golden retriever', 'Hewan', '30000', 'golden.jpg');

?>

<table border="1px" style="border-collapse: collapse; width: 50%; height: 280px; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga Produk</th>
        <th>Foto Produk</th>
    </tr>
    <?php
    //menampilkan data
        foreach ($list as $item){
    ?>
        <tr>
            <td><?= $item->getID() ?></td>
            <td><?= $item->getnamaproduk() ?></td>
            <td><?= $item->getkategoriproduk() ?></td>
            <td><?= $item->gethargaproduk() ?></td>
            <td><img width="50px" src="<?= $item->getfotoproduk() ?>" alt="foto" style="display: block; margin: auto;"></td>
        </tr>
    <?php
        }
    ?>
</table>

<br>

<?php
//menambahkan data
echo "Berhasil Menambahkan Data";
$list[3] = new petshop('4', 'hamster', 'Hewan', '50000', 'hamster.jpg');
?>

<br>
<br>

<table border="1px" style="border-collapse: collapse; width: 50%; height: 280px; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga Produk</th>
        <th>Foto Produk</th>
    </tr>
    <?php
        foreach ($list as $item){
    ?>
        <tr>
            <td><?= $item->getID() ?></td>
            <td><?= $item->getnamaproduk() ?></td>
            <td><?= $item->getkategoriproduk() ?></td>
            <td><?= $item->gethargaproduk() ?></td>
            <td><img width="50px" src="<?= $item->getfotoproduk() ?>" alt="foto" style="display: block; margin: auto;"></td>
        </tr>
    <?php
        }
    ?>
</table>

<br>

<?php
//mengubah data
$list[3]->setnamaproduk('kelinci');
echo $list[3]->getnamaproduk()." Berhasil Diubah";
?>

<br>
<br>

<table border="1px" style="border-collapse: collapse; width: 50%; height: 280px; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga Produk</th>
        <th>Foto Produk</th>
    </tr>
    <?php
        foreach ($list as $item){
    ?>
        <tr>
            <td><?= $item->getID() ?></td>
            <td><?= $item->getnamaproduk() ?></td>
            <td><?= $item->getkategoriproduk() ?></td>
            <td><?= $item->gethargaproduk() ?></td>
            <td><img width="50px" src="<?= $item->getfotoproduk() ?>" alt="foto" style="display: block; margin: auto;"></td>
        </tr>
    <?php
        }
    ?>
</table>

<br>

<?php
//menghapus data
echo $list[3]->getnamaproduk()." Berhasil Dihapus";
array_splice($list, 3, 1);
?>

<br>
<br>

<table border="1px" style="border-collapse: collapse; width: 50%; height: 280px; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga Produk</th>
        <th>Foto Produk</th>
    </tr>
    <?php
        foreach ($list as $item){
    ?>
        <tr>
            <td><?= $item->getID() ?></td>
            <td><?= $item->getnamaproduk() ?></td>
            <td><?= $item->getkategoriproduk() ?></td>
            <td><?= $item->gethargaproduk() ?></td>
            <td><img width="50px" src="<?= $item->getfotoproduk() ?>" alt="foto" style="display: block; margin: auto;"></td>
        </tr>
    <?php
        }
    ?>
</table>

<br>

<?php
//mencari data
$keyword = 'Kucing';
echo (strpos($item->getnamaproduk(), $keyword))." Berhasil Ditemukan";
$hasil = [];

foreach ($list as $item){
    if (strpos($item->getnamaproduk(), $keyword) !== false){
        $hasil[] = $item;
    }
}
?>

<br>
<br>

<table border="1px" style="border-collapse: collapse; width: 50%; height: 280px; text-align: center;">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori Produk</th>
        <th>Harga Produk</th>
        <th>Foto Produk</th>
    </tr>
    <?php
        foreach ($hasil as $item){
    ?>
        <tr>
            <td><?= $item->getID() ?></td>
            <td><?= $item->getnamaproduk() ?></td>
            <td><?= $item->getkategoriproduk() ?></td>
            <td><?= $item->gethargaproduk() ?></td>
            <td><img width="50px" src="<?= $item->getfotoproduk() ?>" alt="foto" style="display: block; margin: auto;"></td>
        </tr>
    <?php
        }
    ?>
</table>
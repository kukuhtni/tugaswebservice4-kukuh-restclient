<?php
include 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$data = $client->request('GET','http://pkl.notaxcloth.com/kukuh-restserver/api/mekanik',[]);
$result = json_decode($data->getBody()->getContents(),true);

?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<div class="w3-container">
<a href="tambah.php" class="w3-button w3-light-green">Tambah Data</a>
</div>
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>ID Mekanik</th>
        <th>Nama Mekanik </th>
        <th>Alamat</th>
        <th>No Telephone</th>
        <th>Status</th>
        <th>Action<th>
    </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($result['data'] as $data)
        {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['id_mekanik']; ?></td>
                <td><?= $data['nama_mekanik']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['telp']; ?></td>
                <td><?= $data['status']; ?></td>
                <td>
                <div class="w3-container">
                <a href="edit.php?id=<?= $data['id_mekanik']; ?>" class="w3-button w3-light-green">Edit</a>
                <a href="delete.php?id=<?= $data['id_mekanik']; ?>" class="w3-button w3-red">Delete</a>
                </div>
                </td>
            </tr>
                <?php

        } ?>

        </tbody>

</table>



        



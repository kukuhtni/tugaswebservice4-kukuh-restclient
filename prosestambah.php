<?php
 include 'vendor/autoload.php';
    
        $id_m = $_POST['idmekanik'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $status = $_POST['status'];
    
   
        use GuzzleHttp\Client;

            $client = new Client();
            $data = $client->POST('http://pkl.notaxcloth.com/kukuh-restserver/api/mekanik',[
            'form_params' =>[ 
            'id_m' => $id_m,
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'status' => $status
            ]
]);

     header('location: index.php');
     exit();



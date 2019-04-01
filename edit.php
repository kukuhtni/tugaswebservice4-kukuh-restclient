<?php
    include 'vendor/autoload.php';
    $id=$_GET['id'];
    use GuzzleHttp\Client;

$client = new Client();
$data = $client->request('GET','http://pkl.notaxcloth.com/kukuh-restserver/api/mekanik', [
    'query'=>['id'=>$id]
]);


$result = json_decode($data->getBody()->getContents(),true);

foreach ($result['data'] as $data)
        {
           
                
            $id_m = $data['id_mekanik']; 
            $nama = $data['nama_mekanik']; 
            $alamat = $data['alamat']; 
            $telp = $data['telp'];
            $status = $data['status']; 
        }
?>

<form action="prosesedit.php" method="POST">
ID Mekanik <input type="text" id="idmekanik" name="idmekanik" value="<?= $id_m; ?>"><br><br>
Nama Mekanik <input type="text" id="nama" name="nama" value="<?= $nama; ?>"><br><br>
Alamat <input type="text" id="alamat" name="alamat" value="<?= $alamat; ?>"><br><br>
Telephone <input type="text" id="telp" name="telp" value="<?= $telp; ?>"><br><br>
Status <input type="text" id="status" name="status" value="<?= $status; ?>"><br><br>
<input type="submit" name="input"><br>
</form>
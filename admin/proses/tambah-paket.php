<?php  
	// koneksi
	require_once("../../connection.php");

	// insert
	class inputPaketWisata{
	    function mulaiInput(){
	        $connection = new Connection();
	        $conn = $connection->getConnection();

	        // array json
	        $response = array();
	        $id_paketwisata = $_POST['id_paketwisata'];
	        $nama_paketwisata  = $_POST['nama_paketwisata'];
	        $alamat_wisata  = $_POST['alamat_wisata'];
	        $harga  = $_POST['harga'];
	        $deskripsi  = $_POST['deskripsi'];
	        try{
	            if(isset($nama_paketwisata) && isset($alamat_wisata) && isset($harga) && isset($deskripsi)){
	                $sqlInsert = "INSERT INTO tb_paketwisata (nama_paketwisata, alamat_wisata, harga, deskripsi) VALUES ('$nama_paketwisata', '$alamat_wisata', '$harga', '$deskripsi')";
	                $conn->exec($sqlInsert);
	            }
	        }catch (PDOException $e){
	            echo "Error while inserting ".$e->getMessage();
	        }

	        // cek baris telah terisi atau belum
	        if($sqlInsert){

	            // sukses
	            $response["success"] = 1;
	            $response["message"] = "Pesanan Anda telah terkirim!";
	            echo json_encode($response);
	        }else{

	            // gagal
	            $response["success"] = 0;
	            $response["message"] = "Gagal memesan tiket";
	            echo json_encode($response);
	        }
	    }
	}

	$insert = new inputPaketWisata();
	$insert->mulaiInput();
?>
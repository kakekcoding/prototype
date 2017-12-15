<?php  
	// koneksi
	require_once("../connection.php");

	// insert
	class InputReservasi{
	    function startInsertFood(){
	        $connection = new Connection();
	        $conn = $connection->getConnection();
	        //array for json response
	        $response = array();
	        $id = $_POST['id'];
	        $nama_pemesan  = $_POST['nama_pemesan'];
	        $jenis_paket  = $_POST['jenis_paket'];
	        $kelas  = $_POST['kelas'];
	        $jumlah_tiket  = $_POST['jumlah_tiket'];
	        $tanggal  = $_POST['tanggal'];
	        try{
	            if(isset($nama_pemesan) && isset($jenis_paket) && isset($kelas) && isset($jumlah_tiket) && isset($tanggal)){
	                $sqlInsert = "INSERT INTO tb_reservasi (nama_pemesan, jenis_paket, kelas, jumlah_tiket, tanggal) VALUES ('$nama_pemesan', '$jenis_paket', '$kelas', '$jumlah_tiket', '$tanggal')";
	                $conn->exec($sqlInsert);
	            }
	        }catch (PDOException $e){
	            echo "Error while inserting ".$e->getMessage();
	        }
	        //cek is the row was inserted or not
	        if($sqlInsert){
	            //success inserted
	            $response["success"] = 1;
	            $response["message"] = "Food successful inserted!";
	            echo json_encode($response);
	        }else{
	            //failed inserted
	            $response["success"] = 0;
	            $response["message"] = "Failed while insert data";
	            echo json_encode($response);
	        }
	    }
	}
	$insert = new InputReservasi();
	$insert->startInsertFood();
?>
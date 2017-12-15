<?php 
	$title = "Halaman Admin"; 

	// require_once "session.php";
	
	// require_once "class.user.php";
	// $auth_user = new USER();
	
	
	// $id_cs = $_SESSION['user_session'];
	
	// $stmt = $auth_user->runQuery("SELECT * FROM tb_cservice WHERE id_cs=:id_cs");
	// $stmt->execute(array(":id_cs"=>$id_cs));
	
	// $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- head -->
	<?php require_once '../layouts/partials/admin/head.php'; ?>
</head>
<body class="home">
	<!-- container -->
	<div class="container-fluid display-table">
		<!-- row -->
		<div class="row display-table-row">
			<!-- navside -->
			<?php require_once '../layouts/partials/admin/navbar.php'; ?>
			<!-- header -->
			<?php require_once '../layouts/partials/admin/header.php'; ?>
		</div>
			
	</div>
	<!-- modal -->
	<?php require_once '../layouts/partials/admin/modal.php'; ?>
	<!-- js -->
	<?php require_once '../layouts/partials/admin/js-init.html'; ?>
</body>
</html>
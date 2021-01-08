<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		include "header.php";
		?>

		<div class="container">
			<div class="row">
				<div class="col-sm-12" align="center">

					<img src="../img/TLOG.png" alt="" width="350" height="350">


				</div>

			</div>
			
		</div>
		<?php
		
		include "footer.php";

	} else {
		header("location:../index.php");
	}
?>
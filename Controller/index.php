<!DOCTYPE html>
<html>
	<head>
		<title>Hitung Kata</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./assets/bootstrap.css">
    </head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Hitung Kata</h2>
					<form action="index.php" method="post">
						<div class="form-group">
							<textarea name="kata" class="form-control" cols="30" rows="10"></textarea>
							
						</div>
						<button class="btn btn-block btn-outline-info" name="submit" type="submit">Submit</button>
					</form>
					<br>
				
				</div>
			</div>
		</div>
	</body>
	<script>
		var hasil =  document.getElementById('hasil');
		if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
			hasil.remove();
			
} else {
//   console.info( "This page is not reloaded");
}
	</script>
</html>

<?php 

		if(isset($_POST['submit']))
		{

			$kata = $_POST['kata'];
			if(!empty($_POST['kata'])) {
			echo "'<div id='hasil'>Jumlah Kalimat: ".strlen($kata)."<br>"."Kalimat: ".$kata."</div>";
			}
		}


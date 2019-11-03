<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="utf-8" />
    <title></title>
	<style>
	body {
		overflow-x: hidden;
	}
	p
	{
		font-family: "Britannic Bold";
		color: #141935;
		font-size: 26px;
		text-align: center;
	}
	h2 {
            font-family: 'britannica bold';
        }
	.center
	{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.header 
	{
		padding: 80px;
		text-align: center;
		background: #141935;
		color: white;
		font-size: 30px;
	}
	input[type='checkbox'] {
		-webkit-appearance:none;
		 width:20px;
		 height: 20px;
		 margin-right: 12px;
		 margin-bottom: 10px;
		 background:white;
		 border-radius:5px;
		 border:2px solid #555;
	}
	input[type='checkbox']:checked {
		background: #abd;
	}
	.confirm-btn {
		max-height: 50px;
		width: auto;
		display: block;
  margin: 16px auto;
	}
</style>
</head>
	<div class="header">
	<h2>Ingredient List</h2>
</div>
<body>

	<?php
		session_start();

		$ingredients = $_SESSION['ingredients'];

			foreach($ingredients as $value) {
				echo '<div class="row center">';
				echo "<input type='checkbox' checked>";
				$name = $value -> name;
				echo "<p>$name</p>";
				echo '</div>';
			}
		?>

		<a href="informationpage.html">
			<img class="confirm-btn" src="assets/Confirm.png">
		</a>

</body>

</html>
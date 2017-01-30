<?php
require_once 'settings.php';
require_once "Database.php";


	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="script.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<div>

	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Додати книгу</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Переглянути книги</a></li>
	</ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
	
	<form action="handler.php" class="form-inline" method="POST" >
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Назва книги">
		</div><br>
		<div class="form-group">
			<input type="text" class="form-control" name="author" placeholder="Автор">
		</div><br>
		<div class="form-group">
			<input type="text" class="form-control" name="year" placeholder="Рік видання">
		</div><br>
		<button type="submit" class="btn btn-default abra">Додати</button>
	</form>
	
	</div>
	<div role="tabpanel" class="tab-pane" id="profile">
	
		<?php
		$books = new Database($host, $uname, $password, $dbname);
		?>
	
	</div>

</div>
	
</body>
</html>
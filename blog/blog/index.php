<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<?php 
		$database = [
			['title' => 'статья 1',
			'short_text' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
			'long-text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'user' => 'user1',
			'name' => 'name1',
			'registration' => '08.09.2015',
			'image' =>'images/1.jpg'
		],
		[
			'title' => 'статья 2',
			'short_text' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
			'long-text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'user' => 'user2/',
			'name' => 'name2',
			'registration' => '08.09.2015',
			'image' =>'images/2.jpg'
		],
		[
			'title' => 'статья 3',
			'short_text' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
			'long-text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'user' => 'user3',
			'name' => 'name3',
			'registration' => '08.09.2015',
			'image' =>'images/3.jpg'
		],
		[
			'title' => 'статья 4',
			'short_text' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
			'long-text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
			'user' => 'user4',
			'name' => 'name4',
			'registration' => '08.09.2015',
			'image' =>'images/4.jpg'
		],
	];

	 ?>
	 <div class="container">
	 	<h1 class="center-align">Блог</h1>
	 	<?php for($i = 0; $i < count($database); $i++) { ?>
	 		<hr>
	 	<div class="col s12 m6 grey lighten-5">
	 		<h2 class="green">
	 			<?php echo $database[$i]['title'];?>

	 		</h2>
	 		<p> <?php echo $database[$i]['short_text']; ?></p>
	 		<div class="center-align">
	 			<?php echo '<img src="' . $database[$i]['images'] .'">'; ?>
	 		</div>
	 		<p><b>Автор: </b> <?php echo '<a href = "user.php?index=' . $i .'">' . $database['user'] . '</a>' ?></p>
	 		<?php echo '<a href = "user.php?index=' . $i .'" class ="waves-effect waves-light btn red accent-4">Далее</a>';  ?>
	 	</div>
	 		<?php }; ?>
	 </div>
</body>
</html>
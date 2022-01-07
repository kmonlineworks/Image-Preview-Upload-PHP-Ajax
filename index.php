<!DOCTYPE html>

<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title>Preview and Upload Image Using PHP and Ajax</title>
 		<!-- External Style Sheet -->
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<style type="text/css">
			body{
				background: url(img/background.jpg);
				background-size: cover;
			}
			.wrapper{
				position: absolute;
				top: 8%;
				left: 50%;
				transform: translate(-50%);
				text-align: center;
				background-color: #ecf0f1;
				padding: 30px 20px;
				border-radius: 10px;
				box-shadow: 0px 0px 10px #000;
			}
			h4{
				margin-bottom: 50px;	
			}
			input{
				width: 100%;
			}
			input[type="submit"]{
				background-color: #00B594;
				color: #fff;
				border: none;
				border-radius: 5px;
				padding: 5px 0;
			}
			input[type="submit"]:hover{
				background-color: #4A566E;
			}
			.images-display{
				display: flex;
				justify-content: space-around;
				padding: 10px;
				margin-bottom: 20px;
				border: 1px solid #9A9A9A;
				border-radius: 5px;
			}
			.name p{
				width: 100%;
				font-size: 18px;
			}
			.images-display img{
				width: 150px;
				height: auto;
				object-fit: cover;
			}
		</style>
 	</head>

<body>
	<section class="wrapper">
		
		<img src="img/PHPAJAX_LOGO.png" >
		<h5>Preview and Upload Image Using PHP and Ajax</h5>

		<div class="images-display">			
			<img src="img/photo.png" id="img-preview">					
		</div>
		
		<form id="upload-form" action="" method="POST" enctype="multipart/form-data">
			
			<input type="file" name="image" id="image">
			<br><br>
			<input type="submit" name="upload" value="Upload">

		</form>

		<div class="message"></div>

	</section> <!-- /End of wrapper section -->
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
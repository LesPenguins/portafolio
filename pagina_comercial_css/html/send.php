<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../img/book-logo-blue.png" type="image/x-icon">

    <title>Storytelling</title>
</head>
<body>
    <div id="container">
		<nav>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../index.html#about">About me</a></li>
				<li><a href="#">My social</a>
				<ul>
					<li><a href="https://twitter.com">Twitter</a></li>
					<li><a href="https://telegram.org">Telegram</a></li>
					<li><a href="https://linkedin.com">Likedin</a></li>
				</ul>        
				</li>
				<li><a href="#">My stories</a>
				<ul>
					<li><a href="#">Story 1</a>
						<ul>
							<li><a href="../html/S1C1.html">Chapter 1</a></li>
							<li><a href="../html/S1C2.html">Chapter 2</a></li>
							<li><a href="../html/S1C3.html">Chapter 3</a></li>
						</ul>
					</li>
					<li><a href="#">Story 2</a>
						<ul>
							<li><a href="../html/S2C1.html">Chapter 1</a></li>
							<li><a href="../html/S2C2.html">Chapter 2</a></li>
							<li><a href="../html/S2C3.html">Chapter 3</a></li>							
						</ul>
					</li>
					<li><a href="#">Story 3</a>
						<ul>
							<li><a href="../html/S3C1.html">Chapter 1</a></li>
							<li><a href="../html/S3C2.html">Chapter 2</a></li>
							<li><a href="../html/S3C3.html">Chapter 3</a></li>							
						</ul>
					</li>
					<li><a href="#">Micro Stories</a>
				</ul>
				</li>
				<li><a href="../index.html#inspiration">Inspiration</a></li>
                <li><a href="../html/commisions.html">Commisions</a></li>
			</ul>
		</nav>
	</div>
    <div class="container">
        <?php
                $nombre=$_POST["name"];
                $email=$_POST["email"];

                echo("Thanx for submitting your commision $nombre, I will get back to you as soon as possible via the email that you provided $email");	
            ?>
      </div> 
</body>
</html>
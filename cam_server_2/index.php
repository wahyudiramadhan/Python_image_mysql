<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Cam Server</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style>
		body {
			/* background-image: url(https://media.cntraveler.com/photos/53e2f09edddaa35c30f658e5/master/pass/yosemite-mountains.jpg); */
			background-repeat: no-repeat;
			background-size: 100%;
		}
	</style>
</head>

<body class="bg-secondary">


	<div class="container bg-light rounded shadow border position-absolute top-50 start-50 translate-middle p-5" style="width: 400px;">
		<h4 class="form-label text-secondary">LOGIN FORM</h4>
		<br>
		<form method="post" action="cek_login.php">
			<div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
							<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
						</svg></span>
				</div>
				<input type="text" class="form-control" name="username" placeholder="username">
			</div>
			<br>
			<div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
							<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
						</svg>
					</span>
				</div>
				<input type="password" class="form-control" name="password" placeholder="password">
			</div>

			<div class="form-group text-white  d-flex flex-row-reverse" style="padding-top: 1rem; margin-right:100px; ">
				<input type="submit" class=" btn btn-primary " value="Login" class="btn float-right login_btn">
			</div>
		</form>
	</div>
</body>

</html>
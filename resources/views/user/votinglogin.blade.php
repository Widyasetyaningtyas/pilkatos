<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>OSIS | SMK Wikrama 1 Jepara</title>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/csslanding.css">
	<link rel="stylesheet" href="css/app.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<!-- Nav -->
	<nav class="container">
		<h1>E-Voting</h1>
		<hr>
	</nav>
	<!-- End Nav -->
	<section class="intro">
		<div class="inner">
			<div class="content-vl">
				<div class="box">
					<div class="row">
						<div class="col">
							<h3 style="color:#566374; font-family: 'Raleway',sans-serif";>Silahkan Masukan <br> NISN & Tanggal Lahir <br> Untuk Memilih Kandidat</h3>
							<br>    
						</div>
					</div>
					@if($message = Session::get('Gagal'))
					<div class="row">
						<div class="col">
							<div class="alert alert-warning alert-dismissible fade show mx-auto" role="alert" style="width:90%;">
								<strong>Gagal!</strong> {{ $message }}.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
					@endif
					<div class="row">
						<div class="col">
							<form action="{{ route('cektoken') }}" method="post">
								{{ csrf_field() }}
								<input type="number" name="usertoken" class="form-control" style="width:90%;margin:0 auto;" autofocus placeholder="NISN">

								<input type="date" name="tanggal_lahir" class="form-control" style="width:90%;margin:0 auto;margin-top: 15px" placeholder="Tanggal Lahir">

								<button type="submit" class="btn btn-primary mt-2 mb-5" style="width:90%;">Masuk</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/app.js"></script>
</body>
</html>
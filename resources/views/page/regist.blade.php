<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8">
	  <title>{{ $title }}</title>

	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link rel="stylesheet" href="style.css">
	  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet"> 
	  
	</head>
	<body>
		<div class="container mt-5">
	@if(session()->has('login')) <!-- pesan dari logincontroller php line 53 -->
			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				{{ session('login') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
			</div>
		@endif
</div>
	  <form action="/regist" method="POST" enctype="multipart/form-data">
	  	{{ csrf_field() }}<!-- untuk mengenerate token agar user bisa masuk -->
	    <div class="header">
	      <h1 class="judul">Registration</h1>
	      <p align="center">Computer Base Test</p> <hr>
	    </div>

	    <div class="kotak">
	    	<div class="kotak-input">
	      	<label class="label">Name</label>
	        @error('name') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
	        <input class="input" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"required="" value="{{ old('name') }}" placeholder="Name">
	      </div>

	      <div class="kotak-input">
	      	<label class="label">NIP/NISN</label>
	        @error('NipNisn') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
	        <input class="input" type="text" name="NipNisn" class="form-control @error('NIP/NISN') is-invalid @enderror" id="NipNisn"required="" value="{{ old('NipNisn') }}" placeholder="NipNisn">
	      </div>

	      <div class="kotak-input">
	      	<label class="label">Password</label>
	        @error('password') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
	        <input class="input" type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
	      </div>

	      <button class="tombol" type="submit">Sign</button>
	    </div>
	  </form>

	</body>
</html>
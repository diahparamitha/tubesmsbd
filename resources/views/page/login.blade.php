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
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  {{ session('login')}}
					  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif

			@if(session()->has('regist')) <!-- pesan dari DashboardPostController php line 59 -->
		      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
		        {{ session('regist') }}
		        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
		      </div>
		    @endif	
		</div>



	  <form action="/" method="POST" enctype="multipart/form-data">
	  	{{ csrf_field() }}<!-- untuk mengenerate token agar user bisa masuk -->
	    <div class="header">
	      <h1 class="judul">Login</h1>
	      <p align="center">Computer Base Test</p> <hr>
	    </div>

	    <div class="kotak">
	      <div class="kotak-input">
	      	<label class="label">NIP/NISN</label>
	        @error('NipNisn') <!-- kalau user salah memasukkan data akan muncul pesan eror -->
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
	        <input class="input" type="text" name="NipNisn" class="form-control @error('NipNisn') is-invalid @enderror" id="NipNisn"required="" value="{{ old('NipNisn') }}" placeholder="NIP/NISN">
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

	      <button class="tombol" type="submit">Login</button>
	    </div>
	  </form>

	</body>
</html>
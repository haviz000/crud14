<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container mt-5">
	<form method="post" action="{{ route('create-barang') }}">
		{{ csrf_field() }}
		<div class="form-group mb-3">
  			<label class="label" for="name">Nama Barang</label>
  			<input type="text" input id="nama_barang" class="form-control form-control @error('nama_barang') is-invalid @enderror" placeholder="nama barang" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>
  										@error('nama_barang')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Kode Barang</label>
  			<input type="text" input id="kode_barang" class="form-control form-control @error('kode_barang') is-invalid @enderror" placeholder="kode barang" name="kode_barang" value="{{ old('kode_barang') }}" required autocomplete="kode_barang" autofocus>
  										@error('kode_barang')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Harga</label>
  			<input type="text" input id="harga" class="form-control form-control @error('harga') is-invalid @enderror" placeholder="harga" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>
  										@error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Tambah') }}</button>
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
	</form>
</div>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Tabel Data Barang</h2>
                </div>
            </div>
            <div class="sticky-top ">
                <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{ route('tambah-barang') }}" class="btn btn-success">Tambah Data <i class="fa fa-plus-square"></i></a>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                          <thead class="thead-primary">
                            <tr>
                              <th>#</th>
                              <th>Nama Barang</th>
                              <th>kode Barang</th>
                              <th>Harga</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($barang as $key=>$value)
                            <tr>
                              <th scope="row">{{ $key++ +1}}</th>
                              <td>{{ $value->nama_barang }}</td>
                              <td>{{ $value->kode_barang }}</td>
                              <td>{{ $value->harga }}</td>
                              <td> 
                                <a href ="{{ url('edit-barang',$value->id) }}"><i class="fa fa-edit"></i></a> | <a href ="{{ url('delete-barang',$value->id) }}"><i class="fa fa-trash" style="color: red;" aria-hidden="true"></i>
</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $barang->links() }}
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>
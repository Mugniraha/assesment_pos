<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{asset('js/tables.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <style>
            body{
                font-family: lato;
            background-color:#E9EBEC;
            }
        </style>
    </head>
    <body>
        <div class="container p-5">
            <a href="#" type="button" class="p-2 text-decoration-none fw-bolder rounded-top shadow " data-bs-toggle="modal" data-bs-target="#tambah" style="background-color:#546AAD;color:white"><i class="fa-solid fa-plus" style="color: #ffffff;"></i>    Tambah Menu</a>
            <div class="bg-white p-5 rounded shadow">
                <table id="example" class="table table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($crud as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->namaMenu}}</td>
                            <td>{{$row->hargaMenu}}</td>
                            <td>
                                <img src="{{asset('storage/img/' .$row->gambar)}}" width="50%" alt=""> <br>
                                <a href="#" type="button" class="mt-1 w-50 justify-content-center btn btn-sm btn-warning shadow" data-bs-toggle="modal" data-bs-target="#editGmbr{{$row->idMenu}}">Ubah Gambar</a>
                            </td>
                            <td>
                                <a href="#" type="button" class="btn btn-sm btn-warning btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#edit{{$row->idMenu}}"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a  href="#" type="button" class="mt-2 btn btn-sm btn-danger btn-primary w-100 shadow" data-bs-toggle="modal" data-bs-target="#hapus{{$row->idMenu}}"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                        <div class="modal fade modal-dialog-scrollable text-start" id="edit{{$row->idMenu}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Menu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('crud.update', $row->idMenu)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="menu" class="form-label">Menu</label>
                                                <input type="text" class="form-control" id="menu" name="namaMenu" placeholder="" value="{{$row->namaMenu}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input type="number" class="form-control" id="harga" name="hargaMenu" placeholder="" value="{{$row->hargaMenu}}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade modal-dialog-scrollable text-start" id="editGmbr{{$row->idMenu}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Gambar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('crud.updateGambar', $row->idMenu)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="{{$row->gambar}}">
                                                <input type="hidden" value="{{$row->idMenu}}">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade modal-dialog-scrollable" id="hapus{{$row->idMenu}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Menu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <form action="{{route('crud.destroy', $row->idMenu)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                <h3>YAKIN INGIN MENGHAPUS Menu?!</h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @if(session('success'))
                        <div class="alert alert-success mb-2 alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close text-end" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade modal-dialog-scrollable text-start" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('crud.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="formGroupExampleInput" name="gambar" placeholder="" value="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Menu</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="namaMenu" placeholder="" value=" ">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput3" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="formGroupExampleInput3" name="hargaMenu" placeholder="" value="">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

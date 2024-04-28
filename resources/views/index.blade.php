<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: lato;
            }
            body{

            background-color:#E9EBEC;
            }
            #card{
                height: 195px;
                max-width: 175px;
                min-height: 195px;
            }#img{
                min-height: 155px;
            }
            #card2{
                height: 195px;
                max-width: 175px;
                min-height: 195px;
            }
            .atas{
                min-width: 175px;
                min-height: 160px;
                background-color: #959595;
                border-radius: 5px 5px 0 0;
            }
        </style>
    </head>
    <body>
        <div class="container mt-3 p-3">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        @foreach ($crud as $row)
                        <div class="col-4">
                            <div class="card text-center mb-3" id="card">
                                <img src="{{ asset('storage/img/' .$row->gambar) }}" class="card-img-top" id="img" alt="" >
                                <div class="card-body p-1">
                                    <div class="text">{{$row->namaMenu}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-2">
                    <div class="col-11 mb-3">
                        <div class="card text-center " id="card2">
                            <div class="atas fs-1 align-self-center">
                                Ik
                            </div>
                            <div class="card-body p-1">
                                <div class="text">Ikan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 mb-3">
                        <div class="card text-center " id="card2">
                            <div class="atas fs-1 align-self-center">
                                Ay
                            </div>
                            <div class="card-body p-1">
                                <div class="text">Ayam</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 mb-3">
                        <div class="card text-center " id="card2">
                            <div class="atas fs-1 align-self-center">
                                Dg
                            </div>
                            <div class="card-body p-1">
                                <div class="text">Daging</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 mb-3">
                        <div class="card text-center " id="card2">
                            <div class="atas fs-1 align-self-center">
                                Ay
                            </div>
                            <div class="card-body p-1">
                                <div class="text">Ayam</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 mb-3">
                        <div class="card text-center " id="card2">
                            <div class="atas fs-1 align-self-center">
                                Mn
                            </div>
                            <div class="card-body p-1">
                                <div class="text">Minuman</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card border-0 rounded">
                        <div class="card-header text-center p-0 m-0 border-0" style="background-color:#E9EBEC ">
                            <div class="row p-0 m-0 border-0 ">
                                <div class="col-md-2 bg-primary-subtle" style="border-top-left-radius: 8px">
                                    <i class="bi bi-person-circle fs-2 " style="color: #546AAD"></i>
                                    <span class="d-block text-center" style="font-size: 9px; color: #546AAD">Customer</span>
                                </div>
                                <div class="col-md-8" style="background-color: #E3E6F3"><h2 class="text-center mt-2">New Customer</h2></div>
                                <div class="col-md-2 bg-primary-subtle" style="border-top-right-radius: 8px">
                                    <i class="bo bi-list-ul fs-2" style="color: #546AAD"></i>
                                    <span class="d-block" style="font-size: 9px; color: #546AAD">Billing List</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center dropdown-toggle p-2 border-bottom border-3">
                            Dine in
                        </div>
                        <div class="p-2 border-bottom border-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="w-75">
                                        1
                                    </td>
                                    <td></td>
                                    <td class="w-25">
                                        View Table
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ayam kangkung
                                    </td>
                                    <td>
                                        x5
                                    </td>
                                    <td>
                                        Rp25.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ayam kangkung
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Rp25.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ayam kangkung
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Rp25.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Es Teh Panas
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        Rp25.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sub-Total:
                                    </td>
                                    <td></td>
                                    <td>
                                        Rp1000000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Total:
                                    </td>
                                    <td></td>
                                    <td>
                                        Rp1000000
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="text-center p-2 fw-light border-bottom border-2">
                            Clear Sale
                        </div>
                        <div class="text-center d-flex justify-content-between mt-4">
                            <div class="p-2 w-50" style="background-color: #E3E6F3;">
                                <span type="button" onclick="sukses()" class="text-dark fw-medium fs-5">Save Bill</span>
                            </div>
                            <div class="vr" style="color: white"></div>
                            <div class="p-2 w-50" style="background-color: #E3E6F3">
                                <span type="submit" class="text-dark fw-medium fs-5">Print Bill</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between text-center text-white fs-4" type="button" data-bs-toggle="modal" data-bs-target="#charge" style="background-color: #495DA7">
                            <div class="w-25 text-center p-2">
                                <img src="{{asset('images/cash.png')}}" class="" alt="" width="40%">
                            </div>
                            <div class="vr fs-3" style="color: white;"></div>
                            <div class="w-75 p-2">
                                Charge Rp 104.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="charge" tabindex="-1" aria-labelledby="charge" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Total charge</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <table>
                                <tr>
                                    <td class="w-25">
                                        <span class="form-label">Total</span>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="w-75">
                                        <span>Rp.75000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">
                                        <label class="">Tunai</label>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="w-75">
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">
                                        <span class="form-label">Kembalian</span>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td class="w-75">
                                        <span>Rp.70000</span>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-100" style="background-color: #495DA7">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function sukses(){
                Swal.fire({
                title: "Saved",
                icon: "success"
                });
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

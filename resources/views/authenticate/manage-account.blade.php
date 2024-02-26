@extends('layouts.dashboard')

@push('css')
  @section('tittle')
  <title>COFFE SHOP | MANAGE ACCOUNT</title>
  @endsection
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Kaffe -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endpush

@section('content') <!-- Untuk memudahkan dalam membuat tampilan di dashboard -->

    <!-- Start Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Account Page</h1>
                    </div>
                    <!-- col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Oyyen Coffe</li>
                        </ol>
                    </div>
                    <!-- col -->
                    </div><!-- row -->
                </div><!-- container-fluid -->
                </div>
            <!-- End content-header -->

            <h3 class="mt-5 mb-3 text-center">Create Account</h3>
            <div class="container">

                <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                    <div class="card-body">
                    <form action="{{route('createaccount')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group mt-2">
                                <label>
                                Username <i class="fa-solid fa-signature"></i>
                                </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>
                                Email <i class="fa-solid fa-envelope"></i>
                                </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>
                                Password <i class="fa-solid fa-key"></i>
                                </label>
                                <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                                <div class="input-group-append">
                                    <button type="button" id="togglePassword" class="btn btn-outline-secondary">
                                      <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>                        
                            </div>
                            <div class="form-group mt-3">
                            <label for="role">Select a Role <i class="fa-solid fa-user"></i></label>
                            <select class="form-select" name="role" id="role">
                                <option value="owner">Owner</option>
                                <option value="admin">Admin</option>
                                <!-- Tambahkan opsi lain sesuai kebutuhan Anda -->
                            </select>
                            </div>
                        </div>
                            <div class="modal-footer">
                            <button type="submit" class="m-2 btn btn-primary">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan
                            </button>
                            </div>
                    </form>
                    </div>
                    </div>
                </div>
                </div>                
            </div>
        </div>
    <!-- End Content Wrapper -->

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');

        togglePasswordButton.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePasswordButton.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                togglePasswordButton.innerHTML = '<i class="fa-solid fa-eye"></i>';
            }
        });
    </script>
@endsection

@push('script')
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('templates/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('templates/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('templates/dist/js/adminlte.js') }}"></script>
    <!-- jQuery Mapael -->
    <script src="{{ asset('templates/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('templates/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('templates/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('templates/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('templates/plugins/chart.js/Chart.min.js') }}"></script>
@endpush
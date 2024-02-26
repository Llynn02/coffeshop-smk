@extends('layouts.dashboard')

@push('css')
  @section('tittle')
  <title>COFFE SHOP | CREATE PRODUCT</title>
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
                        <h1 class="m-0">Insert Product Page</h1>
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

            <h3 class="mt-5 mb-3 text-center">Create New Product</h3>
            <div class="container">

                <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                    <div class="card-body">
                        <form action="{{ route('createproduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label>
                                Product Name <i class="fa-solid fa-mug-hot"></i>
                                </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>
                                Image <i class="fa-solid fa-images"></i>
                                </label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label>
                                Category <i class="fa-solid fa-layer-group"></i>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                  <option selected>Choose Category</option>
                                  <option value="Coffe">Coffe</option>
                                  <option value="Hot Coffe">Hot Coffe</option>
                                  <option value="Cool Coffe">Cool Coffe</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label>
                                Price <i class="fa-solid fa-dollar-sign"></i>
                                </label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('product') }}" class="m-2 btn btn-secondary">
                                  <i class="fa-solid fa-rectangle-xmark"></i> Batal
                                </a>
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
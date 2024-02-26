@extends('layouts.dashboard')

@push('css')
  @section('tittle')
  <title>COFFE SHOP | PRODUCT</title>
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
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content') <!-- Untuk memudahkan dalam membuat tampilan di dashboard -->
    
    <!-- Start Content Wrapper -->
        <div class="content-wrapper">
        <!-- Content Header -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Page</h1>
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
        <!-- content-header -->

        <!-- Start Button Insert -->
            <a href="{{ route('insertproduct') }}" type="button" class="btn btn-success m-3 ">
                <i class="fa-regular fa-square-plus"></i> New Product
            </a>
        <!-- End Button Insert -->

        <!-- Search Data -->
            <div class="row g-3 align-items-center ml-3 mt-2 mb-2">
            <div class="col-auto">
                <label class="col-form-label">Search</label>
            </div>
            <div class="col-auto">
            <form action="{{ route('searchproduct') }}" method="GET"> <!-- form pencarian data dengan method get dari url -->
            <div class="form-group mt-3">
                <input type="text" name="query" class="form-control" aria-describedby="passwordHelpInline" placeholder="Search Product...">
            </div>
            </form>
            </div>
            </div>
        <!-- End Search Data -->
    
        <!-- Product Table -->
            <div class="wrapper">

                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>
                        <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                {{ $data->links() }} {{-- pagination --}}
                            </ul>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table"> <!-- Tabel read produk mengambil fungsi di ProductController -->
                        <thead>
                            <tr>
                            <th style="width: 10px">Id</th>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Date Created</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                        @foreach ($data as $index => $row) <!-- perulangan Array dimana variabel $data dari tabel produk didefinisikan dengan variabel $row -->
                            <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $index + $data->firstItem() }}</td>
                            <td>{{ $row->name }}</td>
                            <td>
                                <img src="{{asset('img/productimg/'.$row->image)}}" style="width: 50px;" alt="{{ $row->image }}">
                            </td>
                            <td>{{ $row->category }}</td>
                            <td>IDR.{{ $row->price }}</td>
                            <td>{{ $row->created_at->format('d M Y') }}</td>
                            <td>{{ $row->updated_at->format('d M Y') }}</td>
                            <td>
                                {{-- mengirimkan halaman ke page edit data --}}
                                <a href="{{ route('editproduct', $row->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i> | Edit
                                </a>
                                |
                                {{-- menghapus data berdasarkan Id --}}
                                <a href="{{ route('deleteproduct', $row->id) }}" class="btn btn-danger btn-sm btn-hps" onclick="return confirm('Are you sure?')">
                                    <i class="fa-solid fa-trash-can"></i> | Hapus
                                </a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        <!-- Product Table -->

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
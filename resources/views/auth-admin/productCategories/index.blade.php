@extends('layouts.dasar')

@section('content')
<!-- Top Bar End -->
<div class="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="float-right page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="/admin">
							Home</a>
						</li>
						<li class="breadcrumb-item active">Kategori Produk</li>
					</ol>
				</div>
				<h5 class="page-title">
				Kategori Produk</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Daftar Kategori Produk</h4>
						<br><div class="button-items">
							<a class="btn btn-success" href="/admin/product_categories/create" role="button">
							Tambah Data</a>
						</div><br>
						<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead>
								<tr>
									<th width="5%"><center>No</center></th>
									<th><center>Nama Kategori Produk</center></th>
									<th width="12%"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
								@php($no = 1)
								@foreach ($productCategories as $data) 						    
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->category_name}}</td>
									<td>
										<form action="{{ route('product_categories.destroy',$data->id) }}" method="POST">
											<a class="btn btn-primary" href="{{ route('product_categories.edit',$data->id) }}"><i class="ti-marker-alt"></i></a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
										</form>

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- container fluid -->
</div>
<!-- Page content Wrapper -->
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
@if (session('error'))
    swal("{{ session('error') }}");
@endif
</script>
@endsection
@endsection
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
							<a href="#">
							Drixo</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">
							Tables</a>
						</li>
						<li class="breadcrumb-item active">
						Datatable</li>
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
							<a class="btn btn-success" href="/admin/courier/create" role="button">
							Tambah Data</a>
						</div><br>
						<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead>
								<tr>
									<th width="5%"><center>No</center></th>
									<th><center>Nama Kurir</center></th>
									<th width="11%"><center>Aksi</center></th>
								</tr>
							</thead>
							<tbody>
								@php($no = 1)
								@foreach ($courier as $data) 						    
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->courier}}</td>
									<td>
										<form action="{{ route('courier.destroy',$data->id) }}" method="POST">
											<a class="btn btn-primary" href="{{ route('courier.edit',$data->id) }}"><i class="ti-marker-alt"></i></a>
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
@endsection
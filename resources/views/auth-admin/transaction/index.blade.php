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
				Datatable</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Default Datatable</h4>
						<p class="text-muted m-b-30 font-14">
							DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>
							$().DataTable();</code>
						.</p>
						<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							@php($no = 1)
							<thead>
								<tr>
									<th width="5%">No</th>
									<th>Nama Pembeli</th>
									<th>Sub Total</th>
									<th>Timeout</th>
									<th width="16%">Action</th>
								</tr>
							</thead>
							@foreach ($transaction as $data)
							<tbody>
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->user_id}}</td>
									<td>{{$data->sub_total}}</td>
									<td>{{$data->timeout}}</td>
									<td>
										<form action="{{ route('product.destroy',$data->id) }}" method="POST">
											<a class="btn btn-info" title="Detail" href="{{ route('product.show',$data->id) }}"><i class="ti-search"></i></a>
											<a class="btn btn-primary" title="Edit" href="{{ route('product.edit',$data->id) }}"><i class="ti-marker-alt"></i></a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger" title="Hapus"><i class="ti-trash"></i></button>
										</form>

									</td>
								</tr>
							</tbody>
							@endforeach
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
{{-- <div class="page-content-wrapper">
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
						Basic Tables</li>
					</ol>
				</div>
				<h5 class="page-title">
				Basic Tables</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Basic example</h4>
						<div class="table-responsive">
							<table class="table mb-0">
								<tbody>
									@php($no = 1)
									@foreach ($transaction as $data)
									<tr>
										<th scope="row" width="15%">
										Timeout</th>
										<td>{{$data->timeout}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Alamat</th>
										<td>{{$data->address}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Kabupaten</th>
										<td>{{$data->regency}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Provinsi</th>
										<td>{{$data->province}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Total</th>
										<td>{{$data->total}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Biaya Pengiriman</th>
										<td>{{$data->shipping_cost}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Sub Total</th>
										<td>{{$data->sub_total}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Nama User</th>
										<td>{{$data->user_id}}</td>
									</tr>
									<tr>
										<th scope="row" width="15%">
										Kurir</th>
										<td>{{$data->courier_id}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- container fluid -->
</div> --}}
@endsection
@extends('layouts.dasar')

@section('content')
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
							Elements</a>
						</li>
						<li class="breadcrumb-item active">
						Typography</li>
					</ol>
				</div>
				<h5 class="page-title">
				Typography</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h3 class="mt-0 header-title">
						Data Transaksi</h4>
						@php($no = 1)
						@foreach ($transaction as $data)
						<dl class="row mb-0">
							<dt class="col-sm-2">Timeout</dt>
							<dd class="col-sm-10">
								{{$data->timeout}}
							</dd>
						</dl>
						<dl class="row mb-0">
							<dt class="col-sm-2">Timeout</dt>
							<dd class="col-sm-10">
								{{$data->timeout}}
							</dd>
						</dl>
						<dl class="row mb-0">
							<dt class="col-sm-2">Timeout</dt>
							<dd class="col-sm-10">
								{{$data->timeout}}
							</dd>
						</dl>
						@endforeach
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
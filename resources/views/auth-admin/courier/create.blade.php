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
						<li class="breadcrumb-item active">Courier</li>
					</ol>
				</div>
				<h5 class="page-title">
				Courier</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Insert Courier</h4>
						<form action="{{ route('courier.store') }}" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Nama Kurir</label>
								<input type="text" class="form-control" required placeholder="Type something" name="courier" >
							</div>
							<div class="form-group">
								<div>
									<button type="submit" class="btn btn-primary waves-effect waves-light">
									Simpan</button>
									<button type="reset" class="btn btn-secondary waves-effect m-l-5">
									Cancel</button>
								</div>
							</div>
						</form>
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
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
							Forms</a>
						</li>
						<li class="breadcrumb-item active">
						Form Elements</li>
					</ol>
				</div>
				<h5 class="page-title">
				Form Elements</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Textual inputs</h4>
						<p class="text-muted m-b-30 font-14">
							Here are examples of <code class="highlighter-rouge">
							.form-control</code>
							applied to each textual HTML5 <code class="highlighter-rouge">
							&lt;input&gt;</code>
							<code class="highlighter-rouge">
							type</code>
						.</p>
						<form action="{{ route('courier.update', $courier->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="form-group">
								<label>Nama Kurir</label>
								<input type="text" class="form-control" value="{{$courier->courier}}" required placeholder="Type something" name="category_name" >
							</div>
							<div class="form-group">
								<div>
									<button type="submit" class="btn btn-success waves-effect waves-light">
									Simpan</button>
									<button type="reset" class="btn btn-warning waves-effect m-l-5">
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
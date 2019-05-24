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
						Update Kategori Produk</h4>
						<form action="{{ route('product_categories.update', $productCategories->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" class="form-control" value="{{$productCategories->category_name}}" required placeholder="Type something" name="category_name" >
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
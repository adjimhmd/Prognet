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
						<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Nama Produk</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="product_name" id="example-text-input" required="" placeholder="Type something">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Deskripsi Produk</label>
							<div class="col-sm-10">
								<textarea id="textarea" name="description" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Harga</label>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="price" id="example-text-input" data-parsley-type="number" required="" placeholder="Enter only numbers">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Kategori</label>
							<div class="col-sm-4">
								<select class="custom-select" name="id_category">
									<option selected="selected" disabled="">Open this select menu</option>
									@foreach($kategori as $data)
									<option value="{{$data->id}}">{{$data->category_name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Stok</label>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="0" name="stock" id="example-number-input">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Berat</label>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="0" name="weight" id="example-number-input">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Gambar</label>
							<div class="col-sm-10">
								<input type="file" name="gambar[]" class="form-control" multiple="multiple">
								{{-- <a class="btn btn-outline-info waves-effect waves-light btn-sm" href="/admin/gambar" role="button">Pilih File</a>	 --}}
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary waves-effect waves-light">
							Submit</button>
							<button type="reset" class="btn btn-secondary waves-effect m-l-5">
							Cancel</button>
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
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
						Description list alignment</h4>
						<dl class="row mb-0">
							<dt class="col-sm-3">Nama Produk</dt>
							<dd class="col-sm-9">{{$product->product_name}}</dd>
							<dt class="col-sm-3">Kategori Produk</dt>
							<dd class="col-sm-9">{{$product_category_details->category_name}}</dd>
							<dt class="col-sm-3">Deskripsi</dt>
							<dd class="col-sm-9">{{$product->description}}</dd>
							<dt class="col-sm-3">Harga</dt>
							<dd class="col-sm-9">{{$product->price}}</dd>
							<dt class="col-sm-3">Stok</dt>
							<dd class="col-sm-9">{{$product->stock}}</dd>
							<dt class="col-sm-3">Berat</dt>
							<dd class="col-sm-9">{{$product->weight}}</dd>
							<dt class="col-sm-3">Gambar Produk</dt>
						</dl>		
						@foreach($product_images as $gambar)
						<img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="{{asset($gambar->image_name)}}" data-holder-rendered="true">
						<input type="file" name="image" id="image" class="form-control" style="display:none">
						<br/>
	                    <a href="javascript:changeProfile();">Change</a> |
	                    <a style="color: red" href="javascript:removeImage()">Remove</a>
	                    <input type="hidden" style="display: none;" value="0" name="remove" id="remove"><br>
	                    @endforeach
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
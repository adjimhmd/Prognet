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
						<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Nama Produk</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="product_name" id="example-text-input" required="" placeholder="Type something" value="{{$product->product_name}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Deskripsi Produk</label>
							<div class="col-sm-10">
								<textarea id="textarea" name="description" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars.">{{$product->description}}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Harga</label>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="price" id="example-text-input" data-parsley-type="number" required="" placeholder="Enter only numbers" value="{{$product->price}}">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Kategori</label>
							<div class="col-sm-4">
								<select class="custom-select" name="id_category">
									<option selected="selected" disabled="">{{$product_category_details->category_name}}</option>
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
								<input class="form-control" type="number" placeholder="0" name="stock" id="example-number-input" value="{{$product->stock}}">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Berat</label>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="0" name="weight" id="example-number-input" value="{{$product->weight}}">
							</div>
						</div>
						
						@foreach($product_images as $gambar)
						<img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="{{asset($gambar->image_name)}}" data-holder-rendered="true">
						<input type="file" name="image" id="image" class="form-control" style="display:none">
						<br/>
	                    <a href="javascript:changeProfile();">Change</a> |
	                    <a style="color: red" href="javascript:removeImage()">Remove</a>
	                    <input type="hidden" style="display: none;" value="0" name="remove" id="remove"><br>
	                    @endforeach
	                    <br>
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
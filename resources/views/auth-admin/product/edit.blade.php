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
						<li class="breadcrumb-item active">Produk</li>
					</ol>
				</div>
				<h5 class="page-title">
				Product</h5>
			</div>
		</div>
		<!-- end row -->
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Edit Product</h4>
						<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						{{ method_field('PUT') }}
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Nama Produk</label><br>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="product_name" id="example-text-input" required="" placeholder="Type something" value="{{$product->product_name}}">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Harga</label>
							<div class="col-sm-4">
								<input class="form-control" type="text" name="price" id="example-text-input" data-parsley-type="number" required data-parsley-min="1" required="" placeholder="Enter only numbers" value="{{$product->price}}">
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
							Stok</label>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="0" name="stock" id="example-number-input" required data-parsley-min="0" value="{{$product->stock}}">
							</div>
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Berat</label>
							<div class="col-sm-4">
								<input class="form-control" type="number" placeholder="0" name="weight" id="example-number-input" required data-parsley-min="0" value="{{$product->weight}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">
							Kategori</label>
							<div class="col-sm-10">
								@foreach($kategori as $data)
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" name="category_id[]" class="custom-control-input" id="{{$data->id}}" value="{{$data->id}}">
									<label class="custom-control-label" for="{{$data->id}}">
									{{$data->category_name}}</label>
								</div>
								@endforeach
							</div>
						</div>
						<div class="form-group row">
							<label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">
							Gambar</label>
							<div class="col-sm-10">
								 <input type="file" class="form-control-file border" name="image_name[]" multiple=""> 
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
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title">
						Hapus Gambar</h4>
						<div class="table-responsive">
							<div class="form-group row">
							</div>
							<table class="table table-bordered mb-0">
								<tbody>
									<tr>
										<th width="70%"><center>Gambar</center></th>
										<th><center>Hapus</center></th>
									</tr>
									@foreach($product_images as $gambar)
									<tr>
										<td width="70%"><center>
											<img class="rounded mr-2" alt="50x50" style="width: 200px; margin: 5px;" src="{{asset($gambar->image_name)}}" data-holder-rendered="true">
										</center></td>
										<td><center>
											<form action="{{ route('gambar.destroy',$gambar->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger" title="Hapus"><i class="ti-trash"></i></button>
											</form>
										</center></td>
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
	</div>
	<!-- container fluid -->
</div>
<!-- Page content Wrapper -->

@endsection
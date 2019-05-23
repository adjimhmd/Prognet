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
						<h4 class="mt-0 header-title">Basic example</h4>
							<div class="table-responsive">
								<table class="table mb-0">
									<tbody>
										<tr>
											<td width="25%">Nama Produk</td>
											<td>{{$product->product_name}}</td>
										</tr>
										<tr>
											<td width="25%">Kategori Produk</td>
											<td>
												@foreach($product_category_details as $category)
												{{$category->category_name}},
												@endforeach
											</td>
										</tr>
										<tr>
											<td width="25%">Deskripsi</td>
											<td>{{$product->description}}</td>
										</tr>
										<tr>
											<td width="25%">Harga</td>
											<td>{{$product->price}}</td>
										</tr>
										<tr>
											<td width="25%">Stok</td>
											<td>{{$product->stock}}</td>
										</tr>
										<tr>
											<td width="25%">Berat</td>
											<td>{{$product->weight}}</td>
										</tr>
										<tr>
											<td width="25%">Gambar Produk</td>
											<td>
												<img class="rounded mr-2" alt="200x200" style="width: 200px; margin: 5px;" src="{{asset('assets/images/small/img-4.jpg')}}" data-holder-rendered="true">
											</td>
										</tr>
										<tr>
											<td width="25%">
												<div>
													<a class="btn btn-secondary waves-effect waves-light" href="/admin/product" role="button">Kembali</a>
													<a class="btn btn-primary" title="Edit" href="{{ route('product.edit',$product->id) }}">Edit</a>
												</div>
											</td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						{{-- @foreach($product_images as $gambar)
						<img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="{{asset($gambar->image_name)}}" data-holder-rendered="true">
						<input type="file" name="image" id="image" class="form-control" style="display:none">
						<br/>
	                    <a href="javascript:changeProfile();">Change</a> |
	                    <a style="color: red" href="javascript:removeImage()">Remove</a>
	                    <input type="hidden" style="display: none;" value="0" name="remove" id="remove"><br>
	                    @endforeach --}}
						
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
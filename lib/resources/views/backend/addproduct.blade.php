@extends('backend.master')
@section('title', 'Add Product')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Add Product</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Add Product</div>
				<div class="panel-body">
					{{-- @include('errors.note') --}}
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" class="form-control">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
				                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('img/iphone7-plus-black-select-2016.jpg')}}">
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required name="description"></textarea>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="#" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{ csrf_field() }}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop

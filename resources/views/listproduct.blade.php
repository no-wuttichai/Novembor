@extends('layout.header')
@section('title', 'ทานเดี่ยว - Novemnbor')
@section('content')

<div class="container mh-100 bg-white bg-shadow pb-md-5">
	<div class="row font-white">
		<div class="col-md-12 col-sm-12 col-12 pt-md-4 pt-3 pb-3 font-lg-26 font-sm-18 pb-md-4 font-dark" align="center">
			
			@if($products[0]->productTypeID == 1)
				ทานเดี่ยว
			@elseif($products[0]->productTypeID == 2)
				ทานคู่
			@elseif($products[0]->productTypeID == 3)
				ทานกลุ่ม
			@endif
		</div>
		@if(count($products) > 0)
			@foreach($products as $key => $product)
				@if($key%2 == 0)
					<div class="col-md-6 col-sm-6 col-6 pr-md-2 pr-1 pr-sm-1 pl-md-3 pl-2 mb-2 mb-md-3">
						<div class="col block-product pl-0 pr-0 pointer" data-toggle="modal" data-target="#modalProduct" onclick="clickImage('{{ $product->productID }}')">
							<div class="label-nameproduct w-100 font-lg-26 font-md-22 font-12 pt-md-2 pt-lg-2 pt-2 font-sm-16 pl-md-4 pl-2">
								{{ $product->name }}
							</div>
							<div class="label-priceproduct font-lg-22 font-md-18 font-sm-14 font-12 b-2 r-2">
								{{ $product->price }} 
								<div class="inline font-lg-18 font-md-14 font-sm-12 font-10">บาท.</div>
							</div>
							<!-- <img src="{{ URL('img/testFood.jpeg') }}" class="w-100 h-100 fit-cover"> -->
							<img src="{{ $product->image }}" class="w-100 h-100 fit-cover z-1">
						</div>
					</div>
				@else
					<div class="col-md-6 col-sm-6 col-6 pl-md-2 pl-1 pr-md-3 pr-2 mb-2 mb-md-3">
						<div class="col block-product pl-0 pr-0 pointer" data-toggle="modal" data-target="#modalProduct" onclick="clickImage('{{ $product->productID }}')">
							<div class="label-nameproduct w-100 font-lg-26 font-md-22 font-12 pt-md-2 pt-lg-2 pt-2 font-sm-16 pl-md-4 pl-2">
								{{ $product->name }}
							</div>
							<div class="label-priceproduct font-lg-22 font-md-18 font-sm-14 font-12 b-2 r-2">
								{{ $product->price }}  
								<div class="inline font-lg-18 font-md-14 font-sm-12 font-10">บาท.</div>
							</div>
							<!-- <img src="{{ URL('img/testFood.jpeg') }}" class="w-100 h-100 fit-cover"> -->
							<img src="{{ $product->image }}" class="w-100 h-100 fit-cover">
						</div>
					</div>
				@endif
			@endforeach
		@else

		<div class="col-md-12 col-sm-12 col-12 pt-md-4 pt-3 pb-3 font-lg-22 font-sm-18 pb-md-4" align="center">
			NO DATA.
		</div>
			
		@endif
	</div>
	<div class="row">
		<div class="col pt-md-5 mb-lg-5 mb-sm-5 mb-5 pt-3 pb-md-1 pb-4 pl-5 pr-5" align="center">
			<a class="btn btn-danger w-100" onclick="checkLocation()">จัดส่ง</a>
		</div>
	</div>
	@include('modalProduct')
</div>

<script src="{{ URL('js/novembor/addorder.js') }}"></script>

@endsection
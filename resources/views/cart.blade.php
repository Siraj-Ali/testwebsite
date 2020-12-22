@extends('layouts.app')

@section('content')
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                    @php $total = 0; @endphp
                     @if(session('cart'))
                    @foreach(session('cart') as $id => $product)
                        @php
                            $sub_total = $product['price'] * $product['quantity'];
                            $total += $sub_total;
                        @endphp
                        <tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="/img/product/{{$product['image']}}" alt="..." width="100" height="100" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin cart-title">{{(Lang::locale() == 'en') ? $product['name'] : $product['name_ar']}}</h4>
										<!-- <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p> -->
									</div>
								</div>
							</td>
							<td data-th="Price">{{(Lang::locale() == 'en') ? '$' : 'AED' }} {{$product['price']}}</td>
							<td>{{$product['quantity']}}</td>
							<td data-th="Subtotal" class="text-center">{{(Lang::locale() == 'en') ? '$' : 'AED' }} {{$sub_total}}</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<a href="{{route('remove', [$id])}}">
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
								</a>								
							</td>
						</tr>
                      @endforeach
                    @endif
					
					</tbody>
					<tfoot>
						<tr>
							<td><a href="{{url('/')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> {{__('message.Continue_Shopping')}}</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total {{(Lang::locale() == 'en') ? '$' : 'AED' }} {{$total}}</strong></td>
							<td><a href="#" class="btn btn-success btn-block">{{__('message.Checkout')}} <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
@endsection
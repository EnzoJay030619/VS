@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif  
<div class="container">

        @foreach($products as $product)  
        <div class="row pt-4 pt-3 pl-5 pr-5"style="center">     
        <div class="col-md-6"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="50%" class="img-fluid"> </div>
            <div class="col-md-6"  style="border: 1px solid #333">
                <form action="" method="post">
                           {{ csrf_field() }} 
                    <h5 class="card-title"><h6>descreption</h6>{{$product->description}}</h5>
                    <p></p>
                    <div style="height: 100px">Quantity<input type="number" name="quantity" id="qty" value="1" min="1" max="10"><br>  Available stock: {{$product->quantity}}
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$product->id}}">
                    <input type="hidden" id="name" name="name" value="{{$product->name}}">
                    <input type="hidden" id="amount" name="amount" value="">
                           
                    <div style="height: 100px"><h6>Price</h6>RM {{$product->price}} <button type="submit" style="float:right" class="btn btn-danger btn-xs">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
@endforeach 
	</div>
@endsection             
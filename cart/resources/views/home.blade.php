@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9  pt-5 ">
            <div class="card">
                <div class="card-header"><h1 href="">Home Page</h1></div>

             <div class="row pt-4 pt-3 pl-5 pr-5"style="center">
                <div class="col-4">
                <img src="{{asset('images/artix.jpg')}}" alt="" class="w-80">
                </div>
                <div class="col-4">
                <img src="{{asset('images/artix.jpg')}}" alt="" class="w-80">
                </div>
                <div class="col-4">
                <img src="{{asset('images/artix.jpg')}}" alt="" class="w-80">
                </div>
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

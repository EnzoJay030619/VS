@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
		            <th>Age</th>
		            <th>GPA</th>
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($myStudents as $myStudent)
		            <tr>
		                <td>{{$myStudent->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$myStudent->image}}" alt="" width="80"></td>
		                <td style="max-width:300px">
		                    <h6>{{$myStudent->name}}</h6>
		                    <em class="text-muted">	
                            {{$myStudent->department}}	                       
		                    </em>
		                </td>
                        <td>{{$myStudent->age}}</td>
                        <td>{{$myStudent->gpa}}</td>
		                <td>
		                    <a href="#" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                    <a href="{{ route('deleteStudent', ['id' => $myStudent->id]) }}"
 							 class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		
		<div class="text-center">
			
        </div>

	</div>
    </div>

@endsection
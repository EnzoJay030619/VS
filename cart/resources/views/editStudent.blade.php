@extends('layouts.app')
@section('content') 
            <div class="container" >
                <div class="row" style="text-align:right ">
                    
                    <form class="form-group"  method="post" action="{{route('updatestudent')}}" enctype="multipart/form-data">
                    @csrf 
                    <p>
                        <h3>Edit Student</h3>
                    </p>
                    @foreach($myStudents as $myStudent)

                    <p>
                        <label for="ID" class="label"> ID</label>
                        <input type="text" name="ID" id="ID" value="{{$myStudent->id}}" readonly>
                    </p>
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name" value="{{$myStudent->name}}">
                    </p>
                    <p>
                        <label for="studentid" class="label">Student ID</label>
                        <input type="text" name="studentid" id="studentid" value="{{$myStudent->studentid}}">
                    </p>
                    
                    <p>
                        <label for="email" class="label">Email</label>
                        <input type="text" name="email" id="email" value="{{$myStudent->email}}">
                    </p>
                    <p>
                        <label for="phonenumber" class="label">Phone Number</label>
                        <input type="number" name="phonenumber" id="phonenumber" value="{{$myStudent->phonenumber}}">
                    </p>

                    <p>
                        <label for="address" class="label">Address</label>
                        <input type="text" name="address" id="address" value="{{$myStudent->address}}">
                    </p>
                    <p>
                        <input type="file" class="form-control" name="student-image" value="">
                    </p>

                    @endforeach
                    <p>
                        <input type="submit" name="edit" value="edit">
                    </p>
                    </form>
                    
                </div>
            </div>
@endsection

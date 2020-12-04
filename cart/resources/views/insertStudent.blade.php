@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:center"> 
                    <form class="subform"  method="post" action="{{ route('addStudent') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="studentid" class="label">Student ID</label>
                        <input type="text" name="studentid" id="studentid">
                    </p>
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <label for="email" class="label">E-Mail</label>
                        <input type="text" name="email" id="email">
                    </p>
                    <p>
                        <label for="address" class="label">Address</label>
                        <input type="text" name="address" id="address">
                    </p>
                    <p>
                        <label for="phonenumber" class="label">Phone Number</label>
                        <input type="number" name="phonenumber" id="phonenumber">
                    </p>
                    <p>
                        <input type="file" class="form-control" name="student-image" value="">
                    </p>
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
@endsection
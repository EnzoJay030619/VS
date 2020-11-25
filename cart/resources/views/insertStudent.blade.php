@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:center"> 
                    <form class="subform"  method="post" action="{{ route('addStudent') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="id" class="label">Student ID</label>
                        <input type="text" name="id" id="id">
                    </p>
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <label for="department" class="label">Department</label>
                        <input type="text" name="department" id="department">
                    </p>
                    <p>
                        <label for="age" class="label">Age</label>
                        <input type="number" name="age" id="age">
                    </p>
                    <p>
                        <label for="gpa" class="label">GPA</label>
                        <input type="text" name="gpa" id="gpa">
                    </p>
                    <p>
                        <input type="file" class="form-control" name="product-image" value="">
                    </p>
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
@endsection
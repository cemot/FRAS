@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Student To Course
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Student To Course
            </div>
            <div class="panel-body">

                <!-- showing all courses -->
                <div class="form-group">
                    <label for="CourseName">CourseName</label>
                    <select name="course_id" class="form-control" id="CourseName">
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>

                  <!-- showing all students -->
                  <div class="form-group">
                    <label for="StudentName">StudentName</label>
                    <select name="student_id" class="form-control" id="StudentName">
                        @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="panel-footer">
                <input type="submit" value="Save It" class="btn btn-primary">
            </div>
        </div>
    </div>

</form>

@endsection

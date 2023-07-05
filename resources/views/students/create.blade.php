@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Registration</h2>
    </div>
    <div class="card-body">

        <form action="{{ route('student.store') }}" method="post">
            @csrf
            <label>First Name:</label><br>
            <input type="text" name="first_name" class="form-control"><br>
            <label>Last Name:</label><br>
            <input type="text" name="last_name" class="form-control"><br>
            <label>Mobile:</label><br>
            <input type="text" name="mobile" class="form-control"><br>
            <label>Email:</label><br>
            <input type="text" name="email" class="form-control"><br>
            <div class="input-container">
                <label for="branch">Branch:</label><br>
                <select name="branch" id="branch" class="form-control">
                    <option value="">Select branch you like</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Mechanical">Mechanical</option>
                </select>
            </div>

            <br>

            <div class="input-container">
                <label>Choose Additional Subjects: </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Cyber Security" />
                    Cyber Security
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Artificial Intelligence" />
                    Artificial Intelligence
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Blockchain" />
                    Blockchain
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="IoT" />
                    IoT
                </label>
                <label class="wrapper check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Robotics" />
                    Robotics
                </label>
            </div>

            <label>Address:</label><br>
            <input type="text" name="address" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>

    </div>
</div>

@stop
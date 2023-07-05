@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Edit Student</h2>
    </div>
    <div class="card-body">

        <form action="{{ url('student/' . $students->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $students->id }}" />

            <label>First Name:</label><br>
            <input type="text" name="first_name" value="{{ $students->first_name }}" class="form-control"><br>

            <label>Last Name:</label><br>
            <input type="text" name="last_name" value="{{ $students->last_name }}" class="form-control"><br>

            <label>Mobile:</label><br>
            <input type="text" name="mobile" value="{{ $students->mobile }}" class="form-control"><br>

            <label>Email:</label><br>
            <input type="text" name="email" value="{{ $students->email }}" class="form-control"><br>

            <div class="input-container">
                <label for="branch">Branch:</label><br>
                <select name="branch" id="branch" class="form-control">
                    <option value="">Select branch you like</option>
                    <option value="Computer Science" {{ $students->branch == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                    <option value="Electronics" {{ $students->branch == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="Mechanical" {{ $students->branch == 'Mechanical' ? 'selected' : '' }}>Mechanical</option>
                </select>
            </div>
            <br>

            <div class="input-container">
                <label>Additional Subjects:</label><br>
                <label class="check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Cyber Security" {{ in_array('Cyber Security', $students->additional_subjects) ? 'checked' : '' }}>
                    Cyber Security
                </label>
                <label class="check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Artificial Intelligence" {{ in_array('Artificial Intelligence', $students->additional_subjects) ? 'checked' : '' }}>
                    Artificial Intelligence
                </label>
                <label class="check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Blockchain" {{ in_array('Blockchain', $students->additional_subjects) ? 'checked' : '' }}>
                    Blockchain
                </label>
                <label class="check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="IoT" {{ in_array('IoT', $students->additional_subjects) ? 'checked' : '' }}>
                    IoT
                </label>
                <label class="check-wrapper">
                    <input type="checkbox" name="additional_subjects[]" value="Robotics" {{ in_array('Robotics', $students->additional_subjects) ? 'checked' : '' }}>
                    Robotics
                </label>
            </div>
            <br>

            <label>Address:</label><br>
            <input type="text" name="address" value="{{ $students->address }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success">
        </form>

    </div>
</div>

@endsection
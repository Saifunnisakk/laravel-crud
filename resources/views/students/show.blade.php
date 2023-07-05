@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student Details</h2>
    </div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name: {{ $students->first_name }} {{ $students->last_name }}</h5>
            <p class="card-text">Address: {{ $students->address }}</p>
            <p class="card-text">Mobile: {{ $students->mobile }}</p>
            <p class="card-text">Email: {{ $students->email }}</p>
            <p class="card-text">Branch: {{ $students->branch }}</p>
            <p class="card-text">Additional Subjects:</p>
            <ul>
                @foreach($students->additional_subjects as $subject)
                <li>{{ $subject }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

@endsection
@extends('layouts.public')

@section('content')
<div class="container mt-4">
      @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
            </ul>
      </div>
      @endif

      <form action="" method="POST">
            @csrf
            <div class="mb-3">
                  <label for="register_no" class="form-label">Register No</label>
                  <input type="text" name="register_no" id="register_no" class="form-control"
                        value="{{ $students->register_no }}">
            </div>

            <div class="mb-3">
                  <label for="name" class="form-label">Student Name</label>
                  <input type="text" name="name" id="name" class="form-control"
                        value="{{ $students->student_name }}">
            </div>

            <div class="mb-3">
                  <label for="grade_id" class="form-label">Grade</label>
                  <select name="grade_id" id="grade_id" class="form-select">
                        <option value="">-- Select Grade --</option>
                        @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}" @selected($students->grade_id == $grade->id)>
                              {{ $grade->grade }}
                        </option>
                        @endforeach
                  </select>
            </div>

            <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea name="address" id="address" class="form-control" rows="4">{{ $students->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('students.index') }}">Back</a>
      </form>
</div>
@endsection
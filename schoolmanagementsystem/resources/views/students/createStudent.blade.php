@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12"> <!-- Responsive width control -->
                <div class="card mt-4 p-4">
                    <h2 class="text-center mb-4">Create Student</h2>
                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label for="register_no" class="form-label">Register No</label></td>
                                    <td>
                                        <input type="text" name="register_no" id="register_no" class="form-control"
                                            value="{{ old('register_no') }}">
                                        @error('register_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="name" class="form-label">Student Name</label></td>
                                    <td>
                                        <input type="text" name="student_name" class="form-control"
                                            value="{{ old('student_name') }}">
                                        @error('student_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="grade_id" class="form-label">Grade</label></td>
                                    <td>
                                        <select name="grade_id" id="grade_id" class="form-select">
                                            <option value="">Select Grade</option>
                                            @foreach ($grades as $grade)
                                                <option value="{{ $grade->id }}"
                                                    {{ old('grade_id') == $grade->id ? 'selected' : '' }}>
                                                    {{ $grade->grade }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('grade_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="father_name" class="form-label">Father's Name</label></td>
                                    <td>
                                        <input type="text" name="father_name" class="form-control"
                                            value="{{ old('father_name') }}">
                                        @error('father_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="mother_name" class="form-label">Mother's Name</label></td>
                                    <td>
                                        <input type="text" name="mother_name" class="form-control"
                                            value="{{ old('mother_name') }}">
                                        @error('mother_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="address" class="form-label">Address</label></td>
                                    <td>
                                        <textarea name="address" class="form-control" rows="4">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="phone" class="form-label">Phone</label></td>
                                    <td>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="gender" class="form-label">Gender</label></td>
                                    <td>
                                        <select name="gender" id="gender" class="form-select">
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="image" class="form-label">Profile Image</label></td>
                                    <td>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-flex justify-content-start gap-2 mt-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

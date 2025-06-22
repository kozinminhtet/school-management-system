@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card mt-4 p-4">
                    <h2 class="text-center mb-4">Edit Student</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label for="register_no" class="form-label">Register No</label></td>
                                    <td>
                                        <input type="text" name="register_no" id="register_no" class="form-control"
                                            value="{{ old('register_no', $students->register_no) }}">
                                        @error('register_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="student_name" class="form-label">Student Name</label></td>
                                    <td>
                                        <input type="text" name="student_name" id="student_name" class="form-control"
                                            value="{{ old('student_name', $students->student_name) }}">
                                        @error('student_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="grade_id" class="form-label">Grade</label></td>
                                    <td>
                                        <select name="grade_id" id="grade_id" class="form-select">
                                            <option value="">-- Select Grade --</option>
                                            @foreach ($grades as $grade)
                                                <option value="{{ $grade->id }}"
                                                    {{ old('grade_id', $students->grade_id) == $grade->id ? 'selected' : '' }}>
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
                                        <input type="text" name="father_name" id="father_name" class="form-control"
                                            value="{{ old('father_name', $students->father_name) }}">
                                        @error('father_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="mother_name" class="form-label">Mother's Name</label></td>
                                    <td>
                                        <input type="text" name="mother_name" id="mother_name" class="form-control"
                                            value="{{ old('mother_name', $students->mother_name) }}">
                                        @error('mother_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="address" class="form-label">Address</label></td>
                                    <td>
                                        <textarea name="address" id="address" class="form-control" rows="4">{{ old('address', $students->address) }}</textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="phone" class="form-label">Phone</label></td>
                                    <td>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            value="{{ old('phone', $students->phone) }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="gender" class="form-label">Gender</label></td>
                                    <td>
                                        <select name="gender" id="gender" class="form-select">
                                            <option value="male"
                                                {{ old('gender', $students->gender) == 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female"
                                                {{ old('gender', $students->gender) == 'female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="other"
                                                {{ old('gender', $students->gender) == 'other' ? 'selected' : '' }}>Other
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
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        @if ($students->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('images/profile/' . $students->image) }}"
                                                    alt="Profile Image" width="100" class="img-thumbnail">
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-flex justify-content-start gap-2 mt-3">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

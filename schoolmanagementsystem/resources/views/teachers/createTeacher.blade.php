@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card mt-4 p-4">
                    <h2 class="text-center mb-4">Create Teacher</h2>

                    <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><label for="teacher_name" class="form-label">Teacher Name</label></td>
                                    <td>
                                        <input type="text" name="teacher_name" class="form-control"
                                            value="{{ old('teacher_name') }}">
                                        @error('teacher_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="position_id" class="form-label">Position</label></td>
                                    <td>
                                        <select name="position_id" id="position_id" class="form-select">
                                            <option value="">Select Position</option>
                                            @foreach ($positions as $position)
                                                <option value="{{ $position->id }}"
                                                    {{ old('position_id') == $position->id ? 'selected' : '' }}>
                                                    {{ $position->position_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('position_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="address" class="form-label">Address</label></td>
                                    <td>
                                        <textarea name="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="phone" class="form-label">Phone</label></td>
                                    <td>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="education" class="form-label">Education</label></td>
                                    <td>
                                        <input type="text" name="education" class="form-control"
                                            value="{{ old('education') }}">
                                        @error('education')
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

                                <tr>
                                    <td><label class="form-label">Grades</label></td>
                                    <td>
                                        @foreach ($grades as $grade)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="grade{{ $grade->id }}" name="grades[]"
                                                    value="{{ $grade->id }}"
                                                    {{ is_array(old('grades')) && in_array($grade->id, old('grades')) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="grade{{ $grade->id }}">{{ $grade->grade }}</label>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <td><label class="form-label">Subjects</label></td>
                                    <td>
                                        @foreach ($subjects as $subject)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="subject{{ $subject->id }}" name="subjects[]"
                                                    value="{{ $subject->id }}"
                                                    {{ is_array(old('subjects')) && in_array($subject->id, old('subjects')) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="subject{{ $subject->id }}">{{ $subject->subject }}</label>
                                            </div>
                                        @endforeach
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

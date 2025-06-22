@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card mt-4 p-4">
                    <h2 class="text-center mb-4">Edit Teacher</h2>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="table-responsive">
                            <table class="table">
                                <!-- Teacher Name -->
                                <tr>
                                    <td><label for="teacher_name" class="form-label">Teacher Name</label></td>
                                    <td>
                                        <input type="text" name="teacher_name" class="form-control"
                                            value="{{ old('teacher_name', $teacher->teacher_name) }}">
                                        @error('teacher_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Position -->
                                <tr>
                                    <td><label for="position_id" class="form-label">Position</label></td>
                                    <td>
                                        <select name="position_id" id="position_id" class="form-select">
                                            <option value="">-- Select Position --</option>
                                            @foreach ($positions as $position)
                                                <option value="{{ $position->id }}" @selected(old('position_id', $teacher->position_id) == $position->id)>
                                                    {{ $position->position_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('position_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Address -->
                                <tr>
                                    <td><label for="address" class="form-label">Address</label></td>
                                    <td>
                                        <textarea name="address" class="form-control" rows="3">{{ old('address', $teacher->address) }}</textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td><label for="phone" class="form-label">Phone</label></td>
                                    <td>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone', $teacher->phone) }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Education -->
                                <tr>
                                    <td><label for="education" class="form-label">Education</label></td>
                                    <td>
                                        <input type="text" name="education" class="form-control"
                                            value="{{ old('education', $teacher->education) }}">
                                        @error('education')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Image -->
                                <tr>
                                    <td><label for="image" class="form-label">Profile Image</label></td>
                                    <td>
                                        <input type="file" name="image" class="form-control">
                                        @if ($teacher->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $teacher->image) }}" alt="Profile Image"
                                                    class="img-thumbnail" style="max-width: 150px;">
                                            </div>
                                        @endif
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>

                                <!-- Grades -->
                                <tr>
                                    <td><label class="form-label">Grades</label></td>
                                    <td>
                                        @foreach ($grades as $grade)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="grade{{ $grade->id }}" name="grades[]"
                                                    value="{{ $grade->id }}" @checked(in_array($grade->id, old('grades', $teacher->grades->pluck('id')->toArray())))>
                                                <label class="form-check-label"
                                                    for="grade{{ $grade->id }}">{{ $grade->grade }}</label>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>

                                <!-- Subjects -->
                                <tr>
                                    <td><label class="form-label">Subjects</label></td>
                                    <td>
                                        @foreach ($subjects as $subject)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="subject{{ $subject->id }}" name="subjects[]"
                                                    value="{{ $subject->id }}" @checked(in_array($subject->id, old('subjects', $teacher->subjects->pluck('id')->toArray())))>
                                                <label class="form-check-label"
                                                    for="subject{{ $subject->id }}">{{ $subject->subject }}</label>
                                            </div>
                                        @endforeach
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

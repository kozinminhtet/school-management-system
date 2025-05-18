@extends('layouts.public')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-end">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
        </div>
        @foreach ($grades as $grade)
            <h5 class="mb-2">{{ $grade->grade }} - Student List</h5>

            @if ($grade->students->isNotEmpty())
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover mb-0">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Register No</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Contact/Address</th>
                                        <th>MRC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grade->students as $index => $student)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $student->register_no }}</td>
                                            <td>{{ $student->student_name }}</td>
                                            <td>{{ $student->father_name }}</td>
                                            <td>
                                                {{ $student->address }} /<br>
                                                {{ $student->phone }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('students.report', $student->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye me-1"></i> See MRC
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning mb-4">
                    <strong>{{ $grade->grade }}</strong> - No students found.
                </div>
            @endif
        @endforeach
    </div>
@endsection

@extends('layouts.public')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
            <h1 class="mb-2 mb-md-0">
                <i class="fas fa-list-alt text-primary me-2"></i> Student List
            </h1>
            <div class="d-flex gap-2">
                <a href="{{ route('students.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i> Create
                </a>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                    Back
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm table-student">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Register No</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Contact & Address</th>
                        <th>His Quality</th>
                        <th>Profile</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($students->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                <i class="fas fa-inbox fa-lg me-1"></i> No student records found.
                            </td>
                        </tr>
                    @else
                        @foreach ($students as $index => $student)
                            <tr>
                                <td class="text-center">{{ $students->firstItem() + $index }}</td>
                                <td>{{ $student->register_no }}</td>
                                <td>{{ $student->student_name }}</td>
                                <td class="text-center">{{ $student->grade->grade }}</td>
                                <td>{{ $student->father_name }}</td>
                                <td>{{ $student->mother_name }}</td>
                                <td>
                                    {{ $student->address }} /<br>
                                    {{ $student->phone }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('students.report', $student->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye me-1"></i> See MRC
                                    </a>
                                </td>
                                <td class="text-center">
                                    @if ($student->image)
                                        <img src="{{ asset('storage/' . $student->image) }}" alt="Student Photo"
                                            class="student-photo">
                                    @else
                                        <i class="fas fa-user-circle student-photo"></i>
                                    @endif
                                </td>


                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit me-1"></i> Edit
                                        </a>
                                        @if (auth()->user()->hasRole('admin'))
                                            <a href="{{ route('students.delete', $student->id) }}"
                                                class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash-alt me-1"></i> Del
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $students->links() }}
        </div>
    </div>
@endsection

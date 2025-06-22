@extends('layouts.public')

@section('content')
    <div class="container py-4">

        {{-- Flash Messages --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>{{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Header Section --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher List</h2>
            <div class="d-flex gap-2">
                @if (auth()->user()->hasRole('admin'))
                    <a href="{{ route('teachers.create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle me-1"></i> Create
                    </a>
                @endif

                <a href="{{ route('teachers.dashboard') }}" class="btn btn-outline-secondary">
                    Back
                </a>
            </div>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Education</th>
                        <th>Grades Taught</th>
                        <th>Subjects Taught</th>
                        <th>Contact/ Address</th>
                        <th>Profile</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($teachers->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                <i class="fas fa-inbox fa-lg me-1"></i> No teacher records found.
                            </td>
                        </tr>
                    @else
                        @foreach ($teachers as $index => $teacher)
                            <tr>
                                <td class="text-center">{{ $teachers->firstItem() + $index }}</td>
                                <td>{{ $teacher->teacher_name }}</td>
                                <td>{{ $teacher->position ? $teacher->position->position_name : '-' }}</td>
                                <td>{{ $teacher->education }}</td>
                                <td>
                                    @if ($teacher->grades->isEmpty())
                                        -
                                    @else
                                        @foreach ($teacher->grades as $grade)
                                            <span class="badge bg-primary">{{ $grade->grade }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if ($teacher->subjects->isEmpty())
                                        -
                                    @else
                                        @foreach ($teacher->subjects as $subject)
                                            <span class="badge bg-info text-dark">{{ $subject->subject }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    {{ $teacher->address }}/ <br>
                                    {{ $teacher->phone }}
                                </td>
                                <td class="text-center">
                                    @if ($teacher->image)
                                        <img src="{{ asset('storage/' . $teacher->image) }}" alt="Student Photo"
                                            class="student-photo">
                                    @else
                                        <i class="fas fa-user-circle student-photo"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if (auth()->user()->hasRole('admin'))
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{ route('teachers.edit', $teacher->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a>
                                            <a href="{{ route('teachers.delete', $teacher->id) }}"
                                                class="btn btn-sm btn-danger delete-btn">
                                                <i class="fas fa-trash-alt me-1"></i>Delete
                                            </a>
                                        </div>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $teachers->links() }}
        </div>

    </div>
@endsection

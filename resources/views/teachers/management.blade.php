@extends('layouts.public')

@section('content')
    <div class="container mt-2 mb-5">

        {{-- Flash Messages --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-trash me-2"></i>{{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Back Button --}}
        <div class="mb-2">
            <a href="{{ route('teachers.dashboard') }}" class="btn btn-outline-secondary">
                Back
            </a>
        </div>

        {{-- positions and grades --}}
        <div class="row">
            <div class="col-md-6">
                {{-- Grade List --}}
                <div class="card mb-5 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Grades</h5>
                        <a href="#" id="add-grade" class="btn btn-sm btn-primary open-modal" data-type="grade"
                            data-title="Add Grade" data-name="Grade Name">
                            <i class="fas fa-plus me-1"></i> Add
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Grade Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($grades->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">
                                                <i class="fas fa-inbox fa-lg me-1"></i> No grade records found.
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($grades as $grade)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $grade->grade }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success me-1 edit-btn"
                                                        data-title="Edit Grade" data-type="grade"
                                                        data-id="{{ $grade->id }}" data-name="{{ $grade->grade }}">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </a>
                                                    <a href="{{ route('teachers.deleteGrade', $grade->id) }}"
                                                        class="btn btn-sm btn-danger delete-btn">
                                                        <i class="fas fa-trash-alt me-1"></i> Del
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Positions --}}
                <div class="card mb-5 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Positions</h5>
                        <a href="#" class="btn btn-sm btn-primary open-modal" data-type="position"
                            data-title="Add Position" data-name="Level">
                            <i class="fas fa-plus me-1"></i> Add
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-bordered mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Position Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($positions->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            <i class="fas fa-inbox fa-lg me-1"></i> No position records found.
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($positions as $position)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $position->position_name }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success me-1 edit-btn"
                                                    data-title="Edit Position" data-type="position"
                                                    data-id="{{ $position->id }}"
                                                    data-name="{{ $position->position_name }}">
                                                    <i class="fas fa-edit me-1"></i> Edit
                                                </a>
                                                <a href="{{ route('teachers.deletePosition', $position->id) }}"
                                                    class="btn btn-sm btn-danger delete-btn">
                                                    <i class="fas fa-trash-alt me-1"></i> Del
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- Subject Lists --}}
        <div class="row g-4 mb-5">
            {{-- Major --}}
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Major Subjects</h5>
                        <a href="#" class="btn btn-sm btn-primary open-modal" data-type="subject-major"
                            data-title="Add Subject (for Major)" data-name="Subject Name">
                            <i class="fas fa-plus me-1"></i> Add
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-bordered mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Major Subject</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($subjects->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            <i class="fas fa-inbox fa-lg me-1"></i> No subject records found.
                                        </td>
                                    </tr>
                                @else
                                    @php $i = 1; @endphp
                                    @foreach ($subjects as $subject)
                                        @if ($subject->type === 'major')
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $subject->subject }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success me-1 edit-btn"
                                                        data-title="Edit Subject (for Major)" data-type="subject-major"
                                                        data-id="{{ $subject->id }}" data-name="{{ $subject->subject }}">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </a>
                                                    <a href="{{ route('teachers.deleteMajorSubject', $subject->id) }}"
                                                        class="btn btn-sm btn-danger delete-btn">
                                                        <i class="fas fa-trash-alt me-1"></i> Del
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Minor --}}
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Minor Subjects</h5>
                        <a href="#" class="btn btn-sm btn-primary open-modal" data-type="subject-minor"
                            data-title="Add Subject (for Minor)" data-name="Subject Name">
                            <i class="fas fa-plus me-1"></i> Add
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-bordered mb-0">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Minor Subject</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($subjects->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            <i class="fas fa-inbox fa-lg me-1"></i> No subject records found.
                                        </td>
                                    </tr>
                                @else
                                    @php $i = 1; @endphp
                                    @foreach ($subjects as $subject)
                                        @if ($subject->type === 'minor')
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $subject->subject }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success me-1 edit-btn"
                                                        data-title="Edit Subject (for Minor)" data-type="subject-minor"
                                                        data-id="{{ $subject->id }}"
                                                        data-name="{{ $subject->subject }}">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </a>
                                                    <a href="{{ route('teachers.deleteMinorSubject', $subject->id) }}"
                                                        class="btn btn-sm btn-danger delete-btn">
                                                        <i class="fas fa-trash-alt me-1"></i> Del
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Common Modal --}}
    <div class="modal fade" id="commonModal" tabindex="-1" aria-labelledby="commonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="commonModalLabel">Add Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="commonForm">
                        @csrf
                        <input type="hidden" name="id" id="item-id">
                        <input type="hidden" name="type" id="item-type">
                        <div class="mb-3">
                            <label for="item-name" class="form-label" id="commonInputLabel">Name</label>
                            <input type="text" class="form-control" id="item-name" name="name">
                            <div class="text-danger error mt-1"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="commonForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.public')

@section('content')
    <div class="container mt-3">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Admin Dashboard</h2>
            <p class="text-muted mb-0">Manage teachers, students, subjects, grades, and notifications</p>
        </div>

        <!-- Admin Quick Access Cards -->
        <div class="row g-3 mb-4">
            <!-- Teachers -->
            <div class="col-md-3">
                <div class="card teacher-card h-100 shadow-sm border-start border-primary border-3">
                    <div class="card-body teacher-card-body d-flex flex-column text-center py-3">
                        <i class="bi bi-person-badge teacher-icon fs-2 text-primary mb-2"></i>
                        <h5 class="card-title teacher-title mb-2">Teachers</h5>
                        <p class="text-muted small mb-3">Manage teacher details</p>
                        <a href="{{ route('teachers.index') }}" class="btn btn-sm btn-outline-primary mt-auto py-1">View
                            Teachers</a>
                    </div>
                </div>
            </div>

            <!-- Students -->
            <div class="col-md-3">
                <div class="card teacher-card h-100 shadow-sm border-start border-info border-3">
                    <div class="card-body teacher-card-body d-flex flex-column text-center py-3">
                        <i class="bi bi-people-fill teacher-icon fs-2 text-info mb-2"></i>
                        <h5 class="card-title teacher-title mb-2">Students</h5>
                        <p class="text-muted small mb-3">Manage student profiles</p>
                        <a href="{{ route('students.index') }}" class="btn btn-sm btn-outline-info mt-auto py-1">View
                            Students</a>
                    </div>
                </div>
            </div>

            <!-- Subjects -->
            <div class="col-md-3">
                <div class="card h-100 teacher-card shadow-sm border-start border-success border-3">
                    <div class="card-body teacher-card-body d-flex flex-column text-center py-3">
                        <i class="bi bi-journal-bookmark-fill teacher-icon fs-2 text-success mb-2"></i>
                        <h5 class="card-title teacher-title mb-2">Subjects</h5>
                        <p class="text-muted small mb-3">Manage subject assignments</p>
                        <a href="{{ route('teachers.grade') }}" class="btn btn-sm btn-outline-success mt-auto py-1">Manage
                            Subjects</a>
                    </div>
                </div>
            </div>

            <!-- Grades -->
            <div class="col-md-3">
                <div class="card h-100 teacher-card shadow-sm border-start border-warning border-3">
                    <div class="card-body teacher-card-body d-flex flex-column text-center py-3">
                        <i class="bi bi-bar-chart-line-fill teacher-icon fs-2 text-warning mb-2"></i>
                        <h5 class="card-title teacher-title mb-2">Grades</h5>
                        <p class="text-muted small mb-3">Monitor performance</p>
                        <a href="{{ route('grade') }}" class="btn btn-sm btn-outline-warning mt-auto py-1">Manage Grades</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notifications / Info Section -->
        <div class="card shadow-sm mb-4">
            <div class="teacher-card-header card-header bg-light py-2 px-3">
                <h5 class="mb-0"><i class="bi bi-info-circle me-2"></i>Admin Notifications</h5>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-2 px-3"><i class="bi bi-calendar-event me-2"></i>Staff meeting on
                        <strong>May 5</strong>
                    </li>
                    <li class="list-group-item py-2 px-3"><i class="bi bi-patch-check-fill me-2"></i>Grades due by
                        <strong>May 10</strong>
                    </li>
                    <li class="list-group-item py-2 px-3"><i class="bi bi-shield-check me-2"></i>Review performance reports
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

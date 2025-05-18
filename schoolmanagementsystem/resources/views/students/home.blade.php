@extends('layouts.public')
@section('content')
    <div class="hero-section text-center">
        <h2>Welcome to Our Educational Service Center</h2>
        <p class="text-muted">Here you can view your subjects, grades, profile, and more.</p>
    </div>

    <!-- Your dashboard cards here -->
    <!-- Cards Section -->
    <div class="row mt-4 g-4">
        <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm">
                <h5><i class="bi bi-calendar-event"></i>Grades</h5>
                <p class="text-muted">Our History</p>
                <a href="{{ route('grade') }}" class="btn btn-info btn-sm">View</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm">
                <h5><i class="bi bi-person-lines-fill"></i> Teachers</h5>
                <p class="text-muted">Teachers served in Our School</p>
                <a href="{{ route('teachers.index') }}" class="btn btn-primary btn-sm">View</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm">
                <h5><i class="bi bi-activity"></i> Activities</h5>
                <p class="text-muted">Activities For Our Students</p>
                <a href="#" class="btn btn-warning btn-sm">View</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm">
                <h5><i class="bi bi-bar-chart-line"></i>Students</h5>
                <p class="text-muted">Educational Task</p>
                <a href="{{ route('students.index') }}" class="btn btn-success btn-sm">View</a>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="mt-5">
        <h4><i class="bi bi-megaphone-fill"></i> Facilities</h4>
        <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-mortarboard-fill"></i> Final exams start May 15
                </div>
            </div>
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-flask"></i> Science fair on May 20
                </div>
            </div>
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-people-fill"></i> Parent meeting - May 25
                </div>
            </div>
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-people-fill"></i> Parent meeting - May 25
                </div>
            </div>
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-people-fill"></i> Parent meeting - May 25
                </div>
            </div>
            <div class="col">
                <div class="list-group-item border rounded p-3">
                    <i class="bi bi-people-fill"></i> Parent meeting - May 25
                </div>
            </div>
        </div>
    </div>
@endsection

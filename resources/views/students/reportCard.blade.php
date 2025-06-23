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


        <div class="card shadow-lg border-0">
            <div class="card-body">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
                    <div class="mb-3 mb-md-0">
                        <h4 class="mb-1">
                            <i class="fas fa-book-open me-1 text-primary"></i> Monthly Report Card
                        </h4>
                        <p class="mb-1">
                            <span class="text-muted">Register No:</span>
                            <span><strong>{{ $student->register_no }}</strong></span>
                        </p>
                        <p class="mb-0">
                            <span class="text-muted">Student Name:</span>
                            <span><strong>{{ $student->student_name }}</strong></span>
                        </p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        @if (auth()->user()->hasRole('teacher'))
                            <a href="#" data-type="mark" class="btn btn-primary open-modal">
                                <i class="fas fa-plus me-1"></i> Add Mark
                            </a>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                            Back
                        </a>
                    </div>
                </div>

                @php
                    $months = [
                        'January',
                        'Febuary',
                        'March',
                        'April',
                        'May',
                        'June',
                        'July',
                        'August',
                        'September',
                        'October',
                        'November',
                        'December',
                    ];
                    $subjects = ['Myanmar', 'English', 'Maths', 'Geology', 'History', 'Science'];
                @endphp

                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center align-middle">
                        <caption class="text-start text-muted small ps-2">
                            <span class="text-danger fw-semibold">Red = Fail mark</span> <br>
                            <span class="text-purple fw-semibold">Purple = Distinction mark</span>
                        </caption>
                        <thead class="table-secondary">
                            <tr>
                                <th>Month</th>
                                @foreach ($subjects as $subject)
                                    <th>{{ $subject }}</th>
                                @endforeach
                                <th>Total</th>
                                <th>Result</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($mrcs->isEmpty())
                                <tr>
                                    <td colspan="11" class="text-muted">
                                        <i class="fas fa-inbox me-1"></i> No marks available for this student.
                                    </td>
                                </tr>
                            @else
                                @foreach ($mrcs as $mrc)
                                    <tr>
                                        <td>{{ $mrc->month }}</td>
                                        <td class="{{ markColor($mrc->myan, 'myan') }}">{{ $mrc->myan }}</td>
                                        <td class="{{ markColor($mrc->eng, 'eng') }}">{{ $mrc->eng }}</td>
                                        <td class="{{ markColor($mrc->maths, 'maths') }}">{{ $mrc->maths }}</td>
                                        <td class="{{ markColor($mrc->geog, 'geog') }}">{{ $mrc->geog }}</td>
                                        <td class="{{ markColor($mrc->hist, 'hist') }}">{{ $mrc->hist }}</td>
                                        <td class="{{ markColor($mrc->science, 'science') }}">{{ $mrc->science }}</td>
                                        <td>{{ totalMark($mrc) }}</td>
                                        @php
                                            $status = getResultStatus($mrc);
                                        @endphp
                                        <td class="{{ $status['class'] }}">{{ $status['text'] }}</td>
                                        <td>
                                            @if (auth()->user()->hasRole('teacher'))
                                                <a href="#" data-type="mark"
                                                    class="btn edit-btn btn-success btn-sm open-modal"
                                                    data-id="{{ $mrc->id }}" data-myan="{{ $mrc->myan }}"
                                                    data-eng="{{ $mrc->eng }}" data-maths="{{ $mrc->maths }}"
                                                    data-geog="{{ $mrc->geog }}" data-hist="{{ $mrc->hist }}"
                                                    data-science="{{ $mrc->science }}" data-month="{{ $mrc->month }}">
                                                    <i class="fas fa-pen me-1"></i> Edit
                                                </a>
                                            @endif
                                            <a href="{{ route('students.markDelete', $mrc->id) }}"
                                                class="btn delete-btn btn-danger btn-sm">
                                                <i class="fas fa-trash me-1"></i> Del
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

    <!-- Modal -->
    <div class="modal fade" id="markModal" tabindex="-1" aria-labelledby="addMarkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="markLabel">
                        <i class="fas fa-plus me-1"></i> Add Marks
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="markForm">
                    @csrf
                    <input type="hidden" id="data-id" name="id">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="month" class="form-label fw-semibold">Month</label>
                                <select name="month" id="month" class="form-select">
                                    <option value="">Select Month</option>
                                    @foreach ($months as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                                <div id="error_month" class="text-danger error"></div>
                            </div>
                        </div>

                        @php
                            $subjectFields = [
                                'myan' => 'Myanmar',
                                'eng' => 'English',
                                'maths' => 'Maths',
                                'geog' => 'Geology',
                                'hist' => 'History',
                                'science' => 'Science',
                            ];
                        @endphp

                        <div class="row g-3">
                            @foreach ($subjectFields as $field => $label)
                                <div class="col-md-4">
                                    <label for="{{ $field }}"
                                        class="form-label fw-semibold">{{ $label }}</label>
                                    <input type="number" id="{{ $field }}" name="marks[{{ $field }}]"
                                        class="form-control" placeholder="Enter {{ $label }} mark">
                                    <div id="error_marks_{{ $field }}" class="text-danger error"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer d-flex flex-column flex-md-row gap-2">
                        <button type="submit" class="btn btn-success w-md-auto">
                            <i class="fas fa-save me-1"></i> Save Marks
                        </button>
                        <button type="button" class="btn btn-secondary w-md-auto" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

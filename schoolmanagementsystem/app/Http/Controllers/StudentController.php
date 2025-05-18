<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Grade;
use App\Models\MRC;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:teacher')->except('studentList', 'reportCard', 'createStudent', 'storeStudent', 'updateStudent', 'editStudent', 'deleteStudent', 'gradeList');
        $this->middleware('role:teacher,admin')->only('studentList', 'reportCard', 'createStudent', 'storeStudent', 'updateStudent', 'editStudent', 'deleteStudent', 'gradeList');
    }

    public function studentDashboard()
    {
        return view('students.home');
    }

    public function studentList()
    {
        $students = Student::all();
        return view('students.studentList', compact('students'));
    }

    public function createStudent()
    {
        $grades = Grade::all();
        return view('students.createStudent', compact('grades'));
    }

    public function storeStudent(StudentRequest $request)
    {
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
        }

        // Store the student using validated data
        Student::create([
            'register_no' => $request->register_no,
            'student_name' => $request->student_name, // Changed from $request->name
            'grade_id' => $request->grade_id,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'image' => $imagePath,
        ]);

        // Redirect with success message
        return redirect()->route('students.index')->with('success', __('messages.student.created'));
    }

    public function editStudent($id)
    {
        $grades = Grade::all();
        $students = Student::findOrFail($id);
        return view('students.editStudent', compact('students', 'grades'));
    }

    public function updateStudent(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);

        // Handle image upload if a new image is uploaded
        if ($request->hasFile('image')) {
            // Optional: delete the old image if needed
            if ($student->image && Storage::disk('public')->exists($student->image)) {
                Storage::disk('public')->delete($student->image);
            }

            $student->image = $request->file('image')->store('student_images', 'public');
        }

        // Update student with validated data
        $student->register_no = $request->register_no;
        $student->student_name = $request->student_name;
        $student->grade_id = $request->grade_id;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->gender = $request->gender;

        $student->save();

        return redirect()->route('students.index')->with('success', __('messages.student.updated'));
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('danger', __('messages.student.deleted'));
    }

    public function reportCard($id)
    {
        // Ensure student exists
        $student = Student::findOrFail($id);

        // Get that student's MRC records
        $mrcs = MRC::where('student_id', $id)->get();

        return view('students.reportCard', compact('student', 'mrcs'));
    }

    public function storeMark(MarkRequest $request)
    {
        $validated = $request->validated();

        $data = [
            'student_id' => $validated['student_id'],
            'month' => $validated['month'],
            'myan' => $validated['marks']['myan'],
            'eng' => $validated['marks']['eng'],
            'maths' => $validated['marks']['maths'],
            'geog' => $validated['marks']['geog'],
            'hist' => $validated['marks']['hist'],
            'science' => $validated['marks']['science'],
        ];

        MRC::create($data); // Eloquent create method

        return response()->json([
            'status' => 'success',
            session()->flash('success', __('messages.mark.created')),
        ]);
    }

    public function updateMark(MarkRequest $request, $id)
    {
        $validated = $request->validated();

        $data = [
            'student_id' => $validated['student_id'],
            'month' => $validated['month'],
            'myan' => $validated['marks']['myan'],
            'eng' => $validated['marks']['eng'],
            'maths' => $validated['marks']['maths'],
            'geog' => $validated['marks']['geog'],
            'hist' => $validated['marks']['hist'],
            'science' => $validated['marks']['science'],
        ];

        $mark = MRC::findOrFail($id); // throws 404 if not found
        $mark->update($data); // updates the record

        return response()->json([
            'status' => 'success',
            session()->flash('success', __('messages.mark.updated')),
        ]);
    }

    public function deleteMark($id)
    {
        $mark = MRC::findOrFail($id);
        $mark->delete();
        return redirect()->back()->with('delete', __('messages.mark.deleted'));
    }

    public function gradeList()
    {
        $grades = Grade::with('students')->get();
        return view('students.grade', compact('grades'));
    }
}

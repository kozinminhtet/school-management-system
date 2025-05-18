<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageRequest;
use App\Http\Requests\SubjectRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\Grade;
use App\Models\Position;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin')->except('teacherList');
        $this->middleware('role:admin,teacher')->only('teacherList');
    }

    public function dashboard()
    {
        return view('teachers.home');
    }

    public function teacherList()
    {
        $position = Position::all();
        $teachers = Teacher::all();
        return view('teachers.teacherList', compact('teachers', 'position'));
    }

    public function createTeacher()
    {
        $positions = Position::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('teachers.createTeacher', compact('grades', 'subjects', 'positions'));
    }

    public function storeTeacher(TeacherRequest $request)
    {
        // Handle image upload using Laravel's recommended way
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teacher_images', 'public');
        }

        // Store the teacher using validated data
        $teacher = Teacher::create([
            'position_id'   => $request->position_id,
            'teacher_name'  => $request->teacher_name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'education'     => $request->education,
            'image'         => $imagePath,
        ]);

        // Sync relationships if provided
        if ($request->filled('grades')) {
            $teacher->grades()->sync($request->grades);
        }

        if ($request->filled('subjects')) {
            $teacher->subjects()->sync($request->subjects);
        }

        // Redirect with success message
        return redirect()->route('teachers.index')->with('success', __('messages.teacher.created'));
    }

    public function editTeacher($id)
    {
        $teacher = Teacher::with(['grades', 'subjects'])->findOrFail($id);
        $grades = Grade::all();
        $subjects = Subject::all();
        $positions = Position::all();

        return view('teachers.editTeacher', compact('teacher', 'grades', 'subjects', 'positions'));
    }

    public function updateTeacher(TeacherRequest $request, $id)
    {
        // Find the teacher by ID
        $teacher = Teacher::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($teacher->image) {
                Storage::disk('public')->delete($teacher->image);
            }

            // Store the new image and get the path
            $imagePath = $request->file('image')->store('teacher_images', 'public');
            $teacher->image = $imagePath;
        }

        // Update the teacher's details
        $teacher->update([
            'position_id'   => $request->position_id,
            'teacher_name'  => $request->teacher_name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'education'     => $request->education,
            // If no new image, retain the previous one
            'image'         => $teacher->image ?? null,
        ]);

        // Sync relationships if grades or subjects are provided
        if ($request->filled('grades')) {
            $teacher->grades()->sync($request->grades);
        }

        if ($request->filled('subjects')) {
            $teacher->subjects()->sync($request->subjects);
        }

        // Redirect with a success message
        return redirect()->route('teachers.index')->with('success', __('messages.teacher.updated'));
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('delete', __('messages.teacher.deleted'));
    }

    public function gradeList()
    {
        $grades = Grade::all();
        $subjects = Subject::all();
        $positions = Position::all();
        return view('teachers.management', compact('grades', 'subjects', 'positions'));
    }

    public function storeGrade(ManageRequest $request)
    {
        // Save the grade
        $grade = new Grade();
        $grade->grade = $request->name;
        $grade->save();

        // Return JSON response
        return response()->json([
            session()->flash('success', __('messages.grade.created'))
        ], 200); // 200 = OK
    }

    public function updateGrade(ManageRequest $request, $id)
    {
        // Find the grade by ID
        $grade = Grade::find($id);

        // Check if the grade exists
        if (!$grade) {
            return response()->json([
                'success' => false,
                'notFound' => true,
                'message' => 'Grade not found.'
            ], 404);
        }

        // Update the grade
        $grade->grade = $request->name;
        $grade->save();

        return response()->json([
            'success' => true,
            session()->flash('success', __('messages.grade.updated')),
        ]);
    }

    public function deleteGrade($id)
    {
        $grade = Grade::findOrFail($id);
        if ($grade->students()->exists()) {
            return redirect()->route('teachers.grade')->with('delete', __('messages.notDelete'));
        }
        $grade->delete();
        return redirect()->route('teachers.grade')->with('delete', __('messages.grade.deleted'));
    }
    public function storeSubject(SubjectRequest $request)
    {
        $type = $request->input('type'); // 'subject-major' or 'subject-minor'

        $subject = new Subject();
        $subject->subject = $request->name;
        $subject->type = $type === 'subject-major' ? 'major' : 'minor';
        $subject->save();

        return response()->json([
            session()->flash('success', __('messages.subject.created'))
        ]);
    }
    public function updateSubject(SubjectRequest $request, $id)
    {
        $type = $request->input('type'); // 'subject-major' or 'subject-minor'

        $subject = Subject::findOrFail($id);
        $subject->subject = $request->name;
        $subject->type = $type === 'subject-major' ? 'major' : 'minor';
        $subject->save();

        return response()->json([
            session()->flash('success', __('messages.subject.updated'))
        ]);
    }

    public function deleteMajorSubject($id)
    {
        $majorSubject = Subject::findOrFail($id);
        if ($majorSubject->type === "major") {
            if ($majorSubject->teachers()->exists()) {
                return redirect()->route('teachers.grade')->with('delete', __('messages.notDelete'));
            }
            $majorSubject->delete();
            return redirect()->route('teachers.grade')->with('delete');
        } else {
            echo "It cannot be deleted";
        }
    }

    public function deleteMinorSubject($id)
    {
        $minorSubject = Subject::findOrFail($id);
        if ($minorSubject->type === "minor") {
            if ($minorSubject->teachers()->exists()) {
                return redirect()->route('teachers.grade')->with('delete', __('messages.notDelete'));
            }
            $minorSubject->delete();
            return redirect()->route('teachers.grade')->with('delete', __('messages.subject.deleted'));
        } else {
            echo "It cannot be deleted";
        }
    }

    public function storePosition(ManageRequest $request)
    {
        // Save the grade
        $position = new Position();
        $position->position_name = $request->name;
        $position->save();

        // Return JSON response
        return response()->json([
            session()->flash('success', __('messages.position.created'))
        ], 200); // 200 = OK
    }
    public function updatePosition(ManageRequest $request, $id)
    {
        // Save the grade
        $position = Position::findOrFail($id);
        $position->position_name = $request->name;
        $position->save();

        // Return JSON response
        return response()->json([
            session()->flash('success', __('messages.position.updated'))
        ], 200); // 200 = OK
    }

    public function deletePosition($id)
    {
        $position = Position::find($id);
        if ($position->teacher()->exists()) {
            return redirect()->route('teachers.grade')->with('delete', __('messages.notDelete'));
        }
        $position->delete();
        return redirect()->route('teachers.grade')->with('delete', __('messages.position.deleted'));
    }
}

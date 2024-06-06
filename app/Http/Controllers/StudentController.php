<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'whatsapp' => 'required',
            'formulir_pendaftaran' => 'required|file',
            'fotocopy_nisn' => 'required|file',
            'fotocopy_kk' => 'required|file',
            'fotocopy_akte_kelahiran' => 'required|file',
            'fotocopy_ktp_ortu' => 'required|file',
            'pas_foto' => 'required|file',
            'fotocopy_ijazah' => 'required|file',
        ]);

        $student = new Student($request->all());

        foreach ($request->allFiles() as $key => $file) {
            $path = $file->store('documents', 'public');
            $student->$key = $path;
        }

        $student->save();

        return redirect()->route('confirmation');
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'whatsapp' => 'required',
            'formulir_pendaftaran' => 'nullable|file',
            'fotocopy_nisn' => 'nullable|file',
            'fotocopy_kk' => 'nullable|file',
            'fotocopy_akte_kelahiran' => 'nullable|file',
            'fotocopy_ktp_ortu' => 'nullable|file',
            'pas_foto' => 'nullable|file',
            'fotocopy_ijazah' => 'nullable|file',
        ]);

        $data = $request->except('formulir_pendaftaran', 'fotocopy_nisn', 'fotocopy_kk', 'fotocopy_akte_kelahiran', 'fotocopy_ktp_ortu', 'pas_foto', 'fotocopy_ijazah');

        foreach ($request->allFiles() as $key => $file) {
            if ($file) {
                if ($student->$key) {
                    Storage::disk('public')->delete($student->$key);
                }
                $path = $file->store('documents', 'public');
                $data[$key] = $path;
            }
        }

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        foreach (['formulir_pendaftaran', 'fotocopy_nisn', 'fotocopy_kk', 'fotocopy_akte_kelahiran', 'fotocopy_ktp_ortu', 'pas_foto', 'fotocopy_ijazah'] as $file) {
            if ($student->$file) {
                Storage::disk('public')->delete($student->$file);
            }
        }

        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}

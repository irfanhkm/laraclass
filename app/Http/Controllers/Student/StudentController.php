<?php
namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentCreate;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $data = Student::all();
        return view('studentList', compact('data'));
    }

    public function create()
    {
        return view('studentCreate');
    }

    public function submit(StudentCreate $request)
    {
        Student::create($request->all());
        return redirect()->route('student.list');
    }

    public function detail(Request $request, $id)
    {
        $data = Student::query()->findOrFail($id);
        return view('studentDetail', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $data = Student::query()->findOrFail($id);
        return view('studentUpdate', compact('data'));
    }

    public function update(StudentCreate $request, $id)
    {
        Student::query()->where('id', $id)->update($request->except('_method', '_token'));
        return redirect()->route('student.detail', $id);
    }

    public function delete(Request $request, $id)
    {
        Student::where('id', $id)->delete();
        return redirect()->route('student.list');
    }

}

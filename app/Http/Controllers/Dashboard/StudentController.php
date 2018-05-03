<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Student\{CreateRequest, UpdateRequest};
use App\Entities\Student;
use App\Repositories\{StudentRepository, DepartmentRepository};
use App\Http\Controllers\Controller;

/**
 * Class StudentController.
 *
 * @package namespace App\Http\Controllers\Dashboard;
 */
class StudentController extends Controller
{
    /**
     * @var StudentRepository
     */
    protected $students;

    /**
     * StudentsController constructor.
     *
     * @param StudentRepository $students
     */
    public function __construct(StudentRepository $students, DepartmentRepository $departments)
    {
        $this->students = $students;
        $this->departments = $departments;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.students.index');
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->departments->all()->pluck('name', 'id');

        return view('dashboard.students.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StudentCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $student = $this->students->create($request->all());
        $student->saveAvatar($request->file('avatar'));

        return redirect()->route('dashboard.students.index')->withSuccess('Student Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $departments = $this->departments->all()->pluck('name', 'id');

        return view('dashboard.students.edit', compact('student', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StudentUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(UpdateRequest $request, Student $student)
    {
        $student->updateAvatar($request->file('avatar'));
        $student->update($request->all());

        return redirect()->route('dashboard.students.index')->withSuccess('Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->deleteAvatar();
        $student->delete():

        return redirect()->route('dashboard.students.index')->withError('Student Deleted Successfully');
    }

}

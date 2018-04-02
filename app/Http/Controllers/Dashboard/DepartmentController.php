<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Department\CreateRequest;
use App\Http\Requests\Dashboard\Department\UpdateRequest;
use App\Repositories\DepartmentRepository;
use App\Entities\Department;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentController.
 *
 * @package namespace App\Http\Controllers\Dashboard;
 */
class DepartmentController extends Controller
{
    /**
     * @var DepartmentRepository
     */
    protected $departments;

    /**
     * DepartmentsController constructor.
     *
     * @param DepartmentRepository $departments
     */
    public function __construct(DepartmentRepository $departments)
    {
        $this->departments = $departments;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.departments.index');
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
        return view('dashboard.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DepartmentCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $department = $this->departments->create($request->all());

        return redirect()->route('dashboard.departments.index')->withSuccess('Department Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DepartmentUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $this->departments->update($request->all(), $id);

        return redirect()->route('dashboard.departments.index')->withSuccess('Department Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->departments->delete($id);

        return redirect()->back()->withError('Department Deleted Successfully');
    }

}

<?php

namespace App\Http\Controllers\Dashboard\Ajax;

use App\Entities\Student;
use App\Http\Controllers\Controller;
use DataTables;

/**
 * Class StudentController.
 *
 * @package namespace App\Http\Controllers\Dashboard\Ajax;
 */
class StudentController extends Controller
{
    public function index()
    {
        return DataTables::of(Student::query()->with('department'))
            ->addColumn('actions', function($row){
                $editUrl = route('dashboard.students.edit', $row->id);
                $deleteUrl = route('dashboard.students.destroy', $row->id);

                return view('dashboard.layouts._formActions', compact('editUrl', 'deleteUrl'));
            })
            ->addColumn('department', function($row){
                return $row->department->name;
            })
            ->make(true);
    }
}

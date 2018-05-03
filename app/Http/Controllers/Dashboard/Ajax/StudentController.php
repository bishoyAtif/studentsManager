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
        return DataTables::of(Student::query())
            ->addColumn('actions', function($row){
                $editButton = view('dashboard.layouts._editButton', ['url' => route('dashboard.students.edit', $row->id)]);
                $deleteButton = view('dashboard.layouts._deleteButton', ['url' => route('dashboard.students.destroy', $row->id)]);
                return $editButton . $deleteButton;
            })
            ->make(true);
    }
}

<?php

namespace App\Http\Controllers\Dashboard\Ajax;

use App\Entities\Department;
use App\Http\Controllers\Controller;
use DataTables;

/**
 * Class DepartmentController.
 *
 * @package namespace App\Http\Controllers\Dashboard\Ajax;
 */
class DepartmentController extends Controller
{
    public function index()
    {
        return DataTables::of(Department::query())
            ->addColumn('actions', function($row){
                $editButton = view('dashboard.layouts._editButton', ['url' => route('dashboard.departments.edit', $row->id)]);
                $deleteButton = view('dashboard.layouts._deleteButton', ['url' => route('dashboard.departments.destroy', $row->id)]);
                return $editButton . $deleteButton;
            })
            ->make(true);
    }
}

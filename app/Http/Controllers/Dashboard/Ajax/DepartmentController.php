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
                $editUrl = route('dashboard.departments.edit', $row->id);
                $deleteUrl = route('dashboard.departments.destroy', $row->id);

                return view('dashboard.layouts._formActions', compact('editUrl', 'deleteUrl'));
            })
            ->make(true);
    }
}

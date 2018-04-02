<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests\DepartmentCreateRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use App\Repositories\DepartmentRepository;
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
}

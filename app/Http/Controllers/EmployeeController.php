<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index()
  {
    $employees = Employee::with('roles')->get();
    return view('welcome', compact('employees'));
  }

  public function create()
  {
    $roles = Role::all();
    return view('create_employee', compact('roles'));
  }

  public function store(Request $request)
  {
    $valid_data = $request->validate([
      'name' => 'required',
      'email' => 'required',
      'role' => 'required'
    ]);

    $employee = Employee::create([
      'name' => $request->name,
      'email' => $request->email
    ]);

    $employee->roles()->sync($request->role);

    return redirect()->route('employee');
  }
}
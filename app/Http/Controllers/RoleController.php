<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
  public function create()
  {
    $roles = Role::all();
    return view('create_role', compact('roles'));
  }

  public function store(Request $request)
  {
    // return $request->all();
    $valid_data = $request->validate([
      'role_name' => 'required|unique:roles,role_name',
    ]);
    $role = Role::create($valid_data);
    return back();
  }
}
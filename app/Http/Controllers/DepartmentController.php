<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; // Import the Department model

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
        {
            $departments = Department::all();
            return view('department.index', compact('department'));
        }
    
        public function create()
        {
            return view('department.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'nullable'
            ]);
    
            Department::create($request->all());
            return redirect()->route('department.index')
                             ->with('success', 'Department created successfully.');
        }
    
        public function show(Department $department)
        {
            return view('department.show', compact('department'));
        }
    
        public function edit(Department $department)
        {
            return view('department.edit', compact('department'));
        }
    
        public function update(Request $request, Department $department)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'nullable'
            ]);
    
            $department->update($request->all());
            return redirect()->route('department.index')
                             ->with('success', 'Department updated successfully.');
        }
    
        public function destroy(Department $department)
        {
            $department->delete();
            return redirect()->route('department.index')
                             ->with('success', 'Department deleted successfully.');
        }
    }
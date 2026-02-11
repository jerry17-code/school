<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return response()->json([
            'data' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|integer|unique:teachers,phone',
            'school_name' => 'required|string',
            'joining_date' => 'required|date',
            'subjects' => 'required|string',
            'salary' => 'required|numeric'
        ]);

        $teacher = Teacher::create($validate);

        return response()->json([
            'message' => 'Teacher created successfully',
            'data' => $teacher
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json([
                'message' => 'Teacher not found'
            ], 404);
        }

        return response()->json([
            'data' => $teacher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json([
                'message' => 'Teacher not found'
            ], 404);
        }

        $validate = $request->validate([
            'name' => 'required|required|string',
            'city' => 'required|required|string',
            'email' => 'required|required|email|unique:teachers,email,' . $id,
            'phone' => 'required|required|integer|unique:teachers,phone,' . $id,
            'school_name' => 'required|required|string',
            'joining_date' => 'required|required|date',
            'subjects' => 'required|required|string',
            'salary' => 'required|required|numeric'
        ]);

        $teacher->update($validate);

        return response()->json([
            'message' => 'Teacher updated successfully',
            'data' => $teacher
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return response()->json([
                'message' => 'Teacher not found'
            ], 404);
        }

        $teacher->delete();

        return response()->json([
            'message' => 'Teacher deleted successfully'
        ]);
    }
}

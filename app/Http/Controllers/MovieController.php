<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
    public function show(Movie $gender)
    {
        return $gender;
    }
    public function store(Request $request)
    {
        $gender = Movie::create($request->all());
        return response()->json($gender, 201);
    }
    public function update(Request $request, Movie $gender)
    {
        $gender->update($request->all());
        return response()->json($gender, 200);
    }
    public function delete(Movie $gender)
    {
        $gender->delete();
        return response()->json(null, 204);
    }
}


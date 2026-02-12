<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            [
                "id" => 99,
                "title" => "Test",
                "content" => "Post body"
            ]
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->only("title", "content");
        return response()->json([
            "id" => 99,
            "title" => $data["title"],
            "content" => $data["content"],
        ], 201);
        // ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "id" => $id,
            "title" => "Test",
            "content" => "Post body"
        ])
        // ->header("test1", "value1")
        // ->header("test2", "value2")
        // ->setStatusCode(404)
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "title" => "required|string|min:2",
            "content" => ["required", "string", "min:2"]
        ]);

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->noContent();
    }
}

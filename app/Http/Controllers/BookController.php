<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = \App\Models\Book::query()->orderBy('created_at', 'desc');
        $itemPerPage = $request->input('items', 5);
        $itemPerPage = $itemPerPage <= 5 ? $itemPerPage : 5;

        return $this->handleFormatResponse($request, $books, $itemPerPage, 'books.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $book = \App\Models\Book::where('id', $id);
        return $this->handleFormatResponse($request, $book, 1, 'books.show', $id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function handleFormatResponse(Request $request, $query, int $itemPerPage, string $viewName, $id = null)
    {
        switch ($request->input('format')) {
            case 'json':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                return response()->json($id ? new \App\Http\Resources\BookResource($data) : \App\Http\Resources\BookResource::collection($data));

            case 'html':
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'book' : 'books';
                return view($viewName, [$variableName => $data]);

            default:
                $data = $id ? $query->firstOrFail() : $query->paginate($itemPerPage);
                $variableName = $id ? 'book' : 'books';
                return view($viewName, [$variableName => $data]);
        }
    }
}

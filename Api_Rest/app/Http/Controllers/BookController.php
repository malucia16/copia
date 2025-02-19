<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books= Book::all();
        return response()->json($books);
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
        $book= new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->category = $request->category;
        $book->save();
        return response()->json($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book= Book::find($id);
        /*if ($detail== True){
            $book
        }else{
            $book
        }*/
        return response()->json($book);
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
        $book= Book::find($id);
        $book->name = $request->name;
        $book->description = $request->description;
        $book->category = $request->category;
        $book->save();
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book= Book::find($id);
        $book->delete();
        return response()->json(['message'=> 'Libro Eliminado']);
    }
}

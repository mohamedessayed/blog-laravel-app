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
        // return books table recordes from db
        $result = Book::all();

        return view('dashboard.book.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            "bookname"=>"required|string|unique:books,book_name|min:3",
            "price"=>"required|integer|min:1",
            "description"=>'nullable|string|min:20',
            "type"=>'required|in:story,pome,litrture'
        ]);

        try {
            //code...
            Book::create([
                "book_name"=>$request->bookname,
                "book_price"=>$request->price,
                "description"=>$request->description,
                "type"=>$request->type,
            ]);

            return redirect()->route('book.index')->with('message','Saved successfully!');
            
        } catch (\Throwable $th) {
            //throw $th;
            
            return back()->with('errorMassage',$th->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('dashboard.book.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('dashboard.book.edit');
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
}

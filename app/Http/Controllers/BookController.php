<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Services\StorageHandler;
use Carbon\Carbon;
use Nette\Utils\Random;
use PhpParser\Node\Stmt\TryCatch;

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
        // $authers = Auther::all(); //get all columns
        // $authers = Auther::select('auther_name','id')->get(); //get only 'auther_name','id'
        $authers = Auther::pluck('auther_name','id'); //get only 'auther_name','id'

        // dd($authers);

        return view('dashboard.book.create',compact('authers'));
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
            "type"=>'required|in:story,pome,litrture',
            'auther'=>'required|exists:authers,id',
            'image'=>'required|image|mimes:jpg,png,webp,gif,max:1024'
        ]);

        try {

            $filepath = StorageHandler::uploadFile($request->file('image'),'book');

            // dd($filepath);
            //code...
            $book = Book::create([
                "book_name"=>$request->bookname,
                "book_price"=>$request->price,
                "description"=>$request->description,
                "type"=>$request->type,
                "auther_id"=>$request->auther
            ]);

            $book->image()->create(['url'=>$filepath]);

            return redirect()->route('book.index')->with('message','Saved successfully!');
            
        } catch (\Throwable $th) {
            //throw $th;
            
            return back()->with('errorMassage',$th->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
        return view('dashboard.book.view',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        return view('dashboard.book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $request->validate([
            "bookname"=>"required|string|unique:books,book_name,$book->id|min:3",
            "price"=>"required|integer|min:1",
            "description"=>'nullable|string|min:20',
            "type"=>'required|in:story,pome,litrture',
            'image'=>'nullable|image|mimes:jpg,png,webp,gif,max:1024'

        ]);

        try {
            
            if ($request->hasFile('image')) {
                # code...
                $filepath = StorageHandler::uploadFile($request->file('image'),'book');
                $book->image()->update(['url'=>$filepath]);
            }

            //code...
            $book->update([
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
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //

        try {
            //code...
            $book->delete();
            return redirect()->route('book.index')->with('message','Deleted successfully!');
        
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('errorMassage',$th->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Models\ModelBook;
use App\Models\User;

class BookController extends Controller
{
   private $objUser;
   private $objBook;
   
   public function __construct(){
    $this->objUser = new User();
    $this->objBook = new ModelBook();
   }

    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $book = ModelBook::paginate(4);
        //$book = $this->objBook->all();
        return view('index',compact('book'));
        
        //dd($this->objUser->find(1)->relBooks);
        //dd($this->objBook->find(1)->relUsers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        //$users = $this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cad = $this->objBook->create([
        'title'=>$request->title,    
        'pages'=>$request->pages,
        'price'=>$request->price,
        'user_id'=>$request->user_id
        ]);
        if($cad){
        return redirect('books');  
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //echo($id);
        $book = ModelBook::find($id);
        //$book = $this->objBook->find($id);
        //echo ($book);
        return view('show',compact('book'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book= ModelBook::find($id);
        $users = User::all();
        return view('create',compact('book','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $this->objBook->where(['id'=> $id])->update([
            'title'=>$request->title,    
            'pages'=>$request->pages,
            'price'=>$request->price,
            'user_id'=>$request->user_id
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $del=$this->objBook->destroy($id);
    return($del)?"sim":"não";
}
}

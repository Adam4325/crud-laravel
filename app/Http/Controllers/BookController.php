<?php namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class BookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::all();
		return view('books.index',compact('books'));
		//echo "Index";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('books.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$book=Request::all();
	    Book::create($book);
	    return redirect('books');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$isbn = Request::input('isbn');
		$title = Request::input('title');
		$author = Request::input('author');
		$publisher = Request::input('publisher');
		$image = Request::input('image');
		
		$book = Book::find($id);
		return view('books.show')
		->with('book',$book);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$book = Book::find($id);
		//return view('books.edit',compact('books'));
		return view('books.edit')
		->with('book',$book);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bookUpdate = Request::all();
		$book=Book::find($id);
		$book->update($bookUpdate);
		return redirect('books');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Book::find($id)->delete();
		return redirect('books');
	}

}

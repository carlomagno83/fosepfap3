<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ataudtamano;
use Illuminate\Http\Request;

class AtaudtamanoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ataudtamanos = Ataudtamano::orderBy('id', 'desc')->paginate(10);

		return view('ataudtamanos.index', compact('ataudtamanos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ataudtamanos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ataudtamano = new Ataudtamano();

		$ataudtamano->att_nom = $request->input("att_nom");
        $ataudtamano->att_dim = $request->input("att_dim");

		$ataudtamano->save();

		return redirect()->route('ataudtamanos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ataudtamano = Ataudtamano::findOrFail($id);

		return view('ataudtamanos.show', compact('ataudtamano'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ataudtamano = Ataudtamano::findOrFail($id);

		return view('ataudtamanos.edit', compact('ataudtamano'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$ataudtamano = Ataudtamano::findOrFail($id);

		$ataudtamano->att_nom = $request->input("att_nom");
        $ataudtamano->att_dim = $request->input("att_dim");

		$ataudtamano->save();

		return redirect()->route('ataudtamanos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ataudtamano = Ataudtamano::findOrFail($id);
		$ataudtamano->delete();

		return redirect()->route('ataudtamanos.index')->with('message', 'Item deleted successfully.');
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ataudmodelo;
use Illuminate\Http\Request;

class AtaudmodeloController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ataudmodelos = Ataudmodelo::orderBy('id', 'desc')->paginate(10);

		return view('ataudmodelos.index', compact('ataudmodelos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ataudmodelos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ataudmodelo = new Ataudmodelo();

		$ataudmodelo->atm_nom = $request->input("atm_nom");

		$ataudmodelo->save();

		return redirect()->route('ataudmodelos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ataudmodelo = Ataudmodelo::findOrFail($id);

		return view('ataudmodelos.show', compact('ataudmodelo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ataudmodelo = Ataudmodelo::findOrFail($id);

		return view('ataudmodelos.edit', compact('ataudmodelo'));
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
		$ataudmodelo = Ataudmodelo::findOrFail($id);

		$ataudmodelo->atm_nom = $request->input("atm_nom");

		$ataudmodelo->save();

		return redirect()->route('ataudmodelos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ataudmodelo = Ataudmodelo::findOrFail($id);
		$ataudmodelo->delete();

		return redirect()->route('ataudmodelos.index')->with('message', 'Item deleted successfully.');
	}

}

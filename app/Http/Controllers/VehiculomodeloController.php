<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculomodelo;
use Illuminate\Http\Request;

class VehiculomodeloController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehiculomodelos = Vehiculomodelo::orderBy('id', 'desc')->paginate(10);

		return view('vehiculomodelos.index', compact('vehiculomodelos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vehiculomodelos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vehiculomodelo = new Vehiculomodelo();

		$vehiculomodelo->vmo_nom = $request->input("vmo_nom");
        $vehiculomodelo->vehiculomarca_id = $request->input("vehiculomarca_id");

		$vehiculomodelo->save();

		return redirect()->route('vehiculomodelos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vehiculomodelo = Vehiculomodelo::findOrFail($id);

		return view('vehiculomodelos.show', compact('vehiculomodelo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehiculomodelo = Vehiculomodelo::findOrFail($id);

		return view('vehiculomodelos.edit', compact('vehiculomodelo'));
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
		$vehiculomodelo = Vehiculomodelo::findOrFail($id);

		$vehiculomodelo->vmo_nom = $request->input("vmo_nom");
        $vehiculomodelo->vehiculomarca_id = $request->input("vehiculomarca_id");

		$vehiculomodelo->save();

		return redirect()->route('vehiculomodelos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vehiculomodelo = Vehiculomodelo::findOrFail($id);
		$vehiculomodelo->delete();

		return redirect()->route('vehiculomodelos.index')->with('message', 'Item deleted successfully.');
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculomarca;
use Illuminate\Http\Request;

class VehiculomarcaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehiculomarcas = Vehiculomarca::orderBy('id', 'desc')->paginate(10);

		return view('vehiculomarcas.index', compact('vehiculomarcas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vehiculomarcas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vehiculomarca = new Vehiculomarca();

		$vehiculomarca->vma_nom = $request->input("vma_nom");

		$vehiculomarca->save();

		return redirect()->route('vehiculomarcas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vehiculomarca = Vehiculomarca::findOrFail($id);

		return view('vehiculomarcas.show', compact('vehiculomarca'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehiculomarca = Vehiculomarca::findOrFail($id);

		return view('vehiculomarcas.edit', compact('vehiculomarca'));
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
		$vehiculomarca = Vehiculomarca::findOrFail($id);

		$vehiculomarca->vma_nom = $request->input("vma_nom");

		$vehiculomarca->save();

		return redirect()->route('vehiculomarcas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vehiculomarca = Vehiculomarca::findOrFail($id);
		$vehiculomarca->delete();

		return redirect()->route('vehiculomarcas.index')->with('message', 'Item deleted successfully.');
	}

}

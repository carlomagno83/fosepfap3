<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Candelabro;
use Illuminate\Http\Request;

class CandelabroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$candelabros = Candelabro::orderBy('id', 'desc')->paginate(10);

		return view('candelabros.index', compact('candelabros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('candelabros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$candelabro = new Candelabro();

		$candelabro->can_tipo = $request->input("can_tipo");
        $candelabro->color_id = $request->input("color_id");

		$candelabro->save();

		return redirect()->route('candelabros.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$candelabro = Candelabro::findOrFail($id);

		return view('candelabros.show', compact('candelabro'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$candelabro = Candelabro::findOrFail($id);

		return view('candelabros.edit', compact('candelabro'));
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
		$candelabro = Candelabro::findOrFail($id);

		$candelabro->can_tipo = $request->input("can_tipo");
        $candelabro->color_id = $request->input("color_id");

		$candelabro->save();

		return redirect()->route('candelabros.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$candelabro = Candelabro::findOrFail($id);
		$candelabro->delete();

		return redirect()->route('candelabros.index')->with('message', 'Item deleted successfully.');
	}

}

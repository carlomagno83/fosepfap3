<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tipocandelabro;
use Illuminate\Http\Request;

class TipocandelabroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipocandelabros = Tipocandelabro::orderBy('id', 'desc')->paginate(10);

		return view('tipocandelabros.index', compact('tipocandelabros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipocandelabros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tipocandelabro = new Tipocandelabro();

		$tipocandelabro->tca_nom = $request->input("tca_nom");
        $tipocandelabro->tca_tip = $request->input("tca_tip");
        $tipocandelabro->candelabro_id = $request->input("candelabro_id");

		$tipocandelabro->save();

		return redirect()->route('tipocandelabros.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tipocandelabro = Tipocandelabro::findOrFail($id);

		return view('tipocandelabros.show', compact('tipocandelabro'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipocandelabro = Tipocandelabro::findOrFail($id);

		return view('tipocandelabros.edit', compact('tipocandelabro'));
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
		$tipocandelabro = Tipocandelabro::findOrFail($id);

		$tipocandelabro->tca_nom = $request->input("tca_nom");
        $tipocandelabro->tca_tip = $request->input("tca_tip");
        $tipocandelabro->candelabro_id = $request->input("candelabro_id");

		$tipocandelabro->save();

		return redirect()->route('tipocandelabros.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tipocandelabro = Tipocandelabro::findOrFail($id);
		$tipocandelabro->delete();

		return redirect()->route('tipocandelabros.index')->with('message', 'Item deleted successfully.');
	}

}

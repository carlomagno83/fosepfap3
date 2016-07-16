<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Urna;
use Illuminate\Http\Request;

class UrnaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$urnas = Urna::orderBy('id', 'desc')->paginate(10);

		return view('urnas.index', compact('urnas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('urnas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$urna = new Urna();

		$urna->urn_id = $request->input("urn_id");
        $urna->urn_tip = $request->input("urn_tip");
        $urna->urn_mod = $request->input("urn_mod");
        $urna->urn_col = $request->input("urn_col");
        $urna->urn_pre = $request->input("urn_pre");
        $urna->servicio_id = $request->input("servicio_id");
        $urna->proveedor_id = $request->input("proveedor_id");

		$urna->save();

		return redirect()->route('urnas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$urna = Urna::findOrFail($id);

		return view('urnas.show', compact('urna'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$urna = Urna::findOrFail($id);

		return view('urnas.edit', compact('urna'));
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
		$urna = Urna::findOrFail($id);

		$urna->urn_id = $request->input("urn_id");
        $urna->urn_tip = $request->input("urn_tip");
        $urna->urn_mod = $request->input("urn_mod");
        $urna->urn_col = $request->input("urn_col");
        $urna->urn_pre = $request->input("urn_pre");
        $urna->servicio_id = $request->input("servicio_id");
        $urna->proveedor_id = $request->input("proveedor_id");

		$urna->save();

		return redirect()->route('urnas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$urna = Urna::findOrFail($id);
		$urna->delete();

		return redirect()->route('urnas.index')->with('message', 'Item deleted successfully.');
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ataud;
use Illuminate\Http\Request;

class AtaudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$atauds = Ataud::orderBy('id', 'desc')->paginate(10);

		return view('atauds.index', compact('atauds'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('atauds.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ataud = new Ataud();

		$ataud->ata_tma = $request->input("ata_tma");
        $ataud->ata_pre = $request->input("ata_pre");
        $ataud->ata_noc = $request->input("ata_noc");
        $ataud->ata_fec = $request->input("ata_fec");
        $ataud->proveedor_id = $request->input("proveedor_id");
        $ataud->color_id = $request->input("color_id");
        $ataud->ataudmodelo_id = $request->input("ataudmodelo_id");
        $ataud->ataudtamano_id = $request->input("ataudtamano_id");

		$ataud->save();

		return redirect()->route('atauds.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ataud = Ataud::findOrFail($id);

		return view('atauds.show', compact('ataud'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ataud = Ataud::findOrFail($id);

		return view('atauds.edit', compact('ataud'));
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
		$ataud = Ataud::findOrFail($id);

		$ataud->ata_tma = $request->input("ata_tma");
        $ataud->ata_pre = $request->input("ata_pre");
        $ataud->ata_noc = $request->input("ata_noc");
        $ataud->ata_fec = $request->input("ata_fec");
        $ataud->proveedor_id = $request->input("proveedor_id");
        $ataud->color_id = $request->input("color_id");
        $ataud->ataudmodelo_id = $request->input("ataudmodelo_id");
        $ataud->ataudtamano_id = $request->input("ataudtamano_id");

		$ataud->save();

		return redirect()->route('atauds.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ataud = Ataud::findOrFail($id);
		$ataud->delete();

		return redirect()->route('atauds.index')->with('message', 'Item deleted successfully.');
	}

}

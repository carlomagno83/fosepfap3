<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sepelio;
use Illuminate\Http\Request;

class SepelioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sepelios = Sepelio::orderBy('id', 'desc')->paginate(10);

		return view('sepelios.index', compact('sepelios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sepelios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$sepelio = new Sepelio();

		$sepelio->cem_fse = $request->input("cem_fse");
        $sepelio->cem_hsf = $request->input("cem_hsf");
        $sepelio->cem_hsv = $request->input("cem_hsv");
        $sepelio->cem_hic = $request->input("cem_hic");
        $sepelio->cem_tse = $request->input("cem_tse");
        $sepelio->cem_tip = $request->input("cem_tip");
        $sepelio->cem_sep = $request->input("cem_sep");
        $sepelio->cem_nco = $request->input("cem_nco");
        $sepelio->cem_oco = $request->input("cem_oco");
        $sepelio->cem_fec = $request->input("cem_fec");
        $sepelio->cem_pre = $request->input("cem_pre");
        $sepelio->distrito_id = $request->input("distrito_id");
        $sepelio->proveedor_id = $request->input("proveedor_id");

		$sepelio->save();

		return redirect()->route('sepelios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sepelio = Sepelio::findOrFail($id);

		return view('sepelios.show', compact('sepelio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sepelio = Sepelio::findOrFail($id);

		return view('sepelios.edit', compact('sepelio'));
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
		$sepelio = Sepelio::findOrFail($id);

		$sepelio->cem_fse = $request->input("cem_fse");
        $sepelio->cem_hsf = $request->input("cem_hsf");
        $sepelio->cem_hsv = $request->input("cem_hsv");
        $sepelio->cem_hic = $request->input("cem_hic");
        $sepelio->cem_tse = $request->input("cem_tse");
        $sepelio->cem_tip = $request->input("cem_tip");
        $sepelio->cem_sep = $request->input("cem_sep");
        $sepelio->cem_nco = $request->input("cem_nco");
        $sepelio->cem_oco = $request->input("cem_oco");
        $sepelio->cem_fec = $request->input("cem_fec");
        $sepelio->cem_pre = $request->input("cem_pre");
        $sepelio->distrito_id = $request->input("distrito_id");
        $sepelio->proveedor_id = $request->input("proveedor_id");

		$sepelio->save();

		return redirect()->route('sepelios.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sepelio = Sepelio::findOrFail($id);
		$sepelio->delete();

		return redirect()->route('sepelios.index')->with('message', 'Item deleted successfully.');
	}

}

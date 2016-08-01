<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Programacionsepelio;
use Illuminate\Http\Request;

class ProgramacionsepelioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$programacionsepelios = Programacionsepelio::orderBy('id', 'desc')->paginate(10);

		return view('programacionsepelios.index', compact('programacionsepelios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('programacionsepelios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$programacionsepelio = new Programacionsepelio();

		$programacionsepelio->prs_fec = $request->input("prs_fec");
        $programacionsepelio->prs_dni = $request->input("prs_dni");
        $programacionsepelio->prs_pat = $request->input("prs_pat");
        $programacionsepelio->prs_mat = $request->input("prs_mat");
        $programacionsepelio->prs_nom = $request->input("prs_nom");
        $programacionsepelio->prs_vel = $request->input("prs_vel");
        $programacionsepelio->prs_cem = $request->input("prs_cem");
        $programacionsepelio->prs_vca = $request->input("prs_vca");
        $programacionsepelio->prs_chc = $request->input("prs_chc");
        $programacionsepelio->prs_vfl = $request->input("prs_vfl");
        $programacionsepelio->prs_cfl = $request->input("prs_cfl");
        $programacionsepelio->prs_vac = $request->input("prs_vac");
        $programacionsepelio->prs_cac = $request->input("prs_cac");
        $programacionsepelio->prs_hsf = $request->input("prs_hsf");
        $programacionsepelio->prs_hsv = $request->input("prs_hsv");
        $programacionsepelio->prs_hic = $request->input("prs_hic");
        $programacionsepelio->prs_dfu = $request->input("prs_dfu");
        $programacionsepelio->id = $request->input("id");
        $programacionsepelio->cabeceracontrato_id = $request->input("cabeceracontrato_id");

		$programacionsepelio->save();

		return redirect()->route('programacionsepelios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$programacionsepelio = Programacionsepelio::findOrFail($id);

		return view('programacionsepelios.show', compact('programacionsepelio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$programacionsepelio = Programacionsepelio::findOrFail($id);

		return view('programacionsepelios.edit', compact('programacionsepelio'));
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
		$programacionsepelio = Programacionsepelio::findOrFail($id);

		$programacionsepelio->prs_fec = $request->input("prs_fec");
        $programacionsepelio->prs_dni = $request->input("prs_dni");
        $programacionsepelio->prs_pat = $request->input("prs_pat");
        $programacionsepelio->prs_mat = $request->input("prs_mat");
        $programacionsepelio->prs_nom = $request->input("prs_nom");
        $programacionsepelio->prs_vel = $request->input("prs_vel");
        $programacionsepelio->prs_cem = $request->input("prs_cem");
        $programacionsepelio->prs_vca = $request->input("prs_vca");
        $programacionsepelio->prs_chc = $request->input("prs_chc");
        $programacionsepelio->prs_vfl = $request->input("prs_vfl");
        $programacionsepelio->prs_cfl = $request->input("prs_cfl");
        $programacionsepelio->prs_vac = $request->input("prs_vac");
        $programacionsepelio->prs_cac = $request->input("prs_cac");
        $programacionsepelio->prs_hsf = $request->input("prs_hsf");
        $programacionsepelio->prs_hsv = $request->input("prs_hsv");
        $programacionsepelio->prs_hic = $request->input("prs_hic");
        $programacionsepelio->prs_dfu = $request->input("prs_dfu");
        $programacionsepelio->id = $request->input("id");
        $programacionsepelio->cabeceracontrato_id = $request->input("cabeceracontrato_id");

		$programacionsepelio->save();

		return redirect()->route('programacionsepelios.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$programacionsepelio = Programacionsepelio::findOrFail($id);
		$programacionsepelio->delete();

		return redirect()->route('programacionsepelios.index')->with('message', 'Item deleted successfully.');
	}

}

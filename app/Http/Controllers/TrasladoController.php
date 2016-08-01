<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Traslado;
use Illuminate\Http\Request;

class TrasladoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$traslados = Traslado::orderBy('id', 'desc')->paginate(10);

		return view('traslados.index', compact('traslados'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('traslados.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$traslado = new Traslado();

		$traslado->tra_fec = $request->input("tra_fec");
        $traslado->tra_est = $request->input("tra_est");
        $traslado->tra_ttr = $request->input("tra_ttr");
        $traslado->tra_cor = $request->input("tra_cor");
        $traslado->tra_cde = $request->input("tra_cde");
        $traslado->tra_klm = $request->input("tra_klm");
        $traslado->tra_fsa = $request->input("tra_fsa");
        $traslado->tra_hsa = $request->input("tra_hsa");
        $traslado->tra_fll = $request->input("tra_fll");
        $traslado->tra_hll = $request->input("tra_hll");
        $traslado->tra_pre = $request->input("tra_pre");
        $traslado->distrito_id = $request->input("distrito_id");
        $traslado->cabeceracontrato_id = $request->input("cabeceracontrato_id");
        $traslado->proveedor_id = $request->input("proveedor_id");

		$traslado->save();

		return redirect()->route('traslados.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$traslado = Traslado::findOrFail($id);

		return view('traslados.show', compact('traslado'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$traslado = Traslado::findOrFail($id);

		return view('traslados.edit', compact('traslado'));
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
		$traslado = Traslado::findOrFail($id);

		$traslado->tra_fec = $request->input("tra_fec");
        $traslado->tra_est = $request->input("tra_est");
        $traslado->tra_ttr = $request->input("tra_ttr");
        $traslado->tra_cor = $request->input("tra_cor");
        $traslado->tra_cde = $request->input("tra_cde");
        $traslado->tra_klm = $request->input("tra_klm");
        $traslado->tra_fsa = $request->input("tra_fsa");
        $traslado->tra_hsa = $request->input("tra_hsa");
        $traslado->tra_fll = $request->input("tra_fll");
        $traslado->tra_hll = $request->input("tra_hll");
        $traslado->tra_pre = $request->input("tra_pre");
        $traslado->distrito_id = $request->input("distrito_id");
        $traslado->cabeceracontrato_id = $request->input("cabeceracontrato_id");
        $traslado->proveedor_id = $request->input("proveedor_id");

		$traslado->save();

		return redirect()->route('traslados.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$traslado = Traslado::findOrFail($id);
		$traslado->delete();

		return redirect()->route('traslados.index')->with('message', 'Item deleted successfully.');
	}

}

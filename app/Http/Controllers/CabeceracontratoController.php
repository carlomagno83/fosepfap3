<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cabeceracontrato;
use Illuminate\Http\Request;

class CabeceracontratoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cabeceracontratos = Cabeceracontrato::orderBy('id', 'desc')->paginate(10);

		return view('cabeceracontratos.index', compact('cabeceracontratos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cabeceracontratos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cabeceracontrato = new Cabeceracontrato();

		$cabeceracontrato->con_fec = $request->input("con_fec");
        $cabeceracontrato->con_est = $request->input("con_est");
        $cabeceracontrato->con_tso = $request->input("con_tso");
        $cabeceracontrato->con_dni = $request->input("con_dni");
        $cabeceracontrato->con_tse = $request->input("con_tse");
        $cabeceracontrato->tiposolicitante_id = $request->input("tiposolicitante_id");
        $cabeceracontrato->medico_id = $request->input("medico_id");
        $cabeceracontrato->sepelio_id = $request->input("sepelio_id");
        $cabeceracontrato->empleado_id = $request->input("empleado_id");
        $cabeceracontrato->fallecido_id = $request->input("fallecido_id");
        $cabeceracontrato->servicio_id = $request->input("servicio_id");

		$cabeceracontrato->save();

		return redirect()->route('cabeceracontratos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cabeceracontrato = Cabeceracontrato::findOrFail($id);

		return view('cabeceracontratos.show', compact('cabeceracontrato'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cabeceracontrato = Cabeceracontrato::findOrFail($id);

		return view('cabeceracontratos.edit', compact('cabeceracontrato'));
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
		$cabeceracontrato = Cabeceracontrato::findOrFail($id);

		$cabeceracontrato->con_fec = $request->input("con_fec");
        $cabeceracontrato->con_est = $request->input("con_est");
        $cabeceracontrato->con_tso = $request->input("con_tso");
        $cabeceracontrato->con_dni = $request->input("con_dni");
        $cabeceracontrato->con_tse = $request->input("con_tse");
        $cabeceracontrato->tiposolicitante_id = $request->input("tiposolicitante_id");
        $cabeceracontrato->medico_id = $request->input("medico_id");
        $cabeceracontrato->sepelio_id = $request->input("sepelio_id");
        $cabeceracontrato->empleado_id = $request->input("empleado_id");
        $cabeceracontrato->fallecido_id = $request->input("fallecido_id");
        $cabeceracontrato->servicio_id = $request->input("servicio_id");

		$cabeceracontrato->save();

		return redirect()->route('cabeceracontratos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cabeceracontrato = Cabeceracontrato::findOrFail($id);
		$cabeceracontrato->delete();

		return redirect()->route('cabeceracontratos.index')->with('message', 'Item deleted successfully.');
	}

}

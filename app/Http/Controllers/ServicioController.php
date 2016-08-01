<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$servicios = Servicio::orderBy('id', 'desc')->paginate(10);

		return view('servicios.index', compact('servicios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('servicios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$servicio = new Servicio();

		$servicio->cas_pfa = $request->input("cas_pfa");
        $servicio->cas_pat = $request->input("cas_pat");
        $servicio->cas_pac = $request->input("cas_pac");
        $servicio->cas_pne = $request->input("cas_pne");
        $servicio->cas_pru = $request->input("cas_pru");
        $servicio->cas_psc = $request->input("cas_psc");
        $servicio->cas_pta = $request->input("cas_pta");
        $servicio->cas_pvt = $request->input("cas_pvt");
        $servicio->cas_pvc = $request->input("cas_pvc");
        $servicio->cas_pvf = $request->input("cas_pvf");
        $servicio->cas_pva = $request->input("cas_pva");
        $servicio->ataud_id = $request->input("ataud_id");
        $servicio->empleado_id = $request->input("empleado_id");
        $servicio->vehiculo_id = $request->input("vehiculo_id");
        $servicio->capilla_id = $request->input("capilla_id");
        $servicio->urna_id = $request->input("urna_id");

		$servicio->save();

		return redirect()->route('servicios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$servicio = Servicio::findOrFail($id);

		return view('servicios.show', compact('servicio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicio = Servicio::findOrFail($id);

		return view('servicios.edit', compact('servicio'));
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
		$servicio = Servicio::findOrFail($id);

		$servicio->cas_pfa = $request->input("cas_pfa");
        $servicio->cas_pat = $request->input("cas_pat");
        $servicio->cas_pac = $request->input("cas_pac");
        $servicio->cas_pne = $request->input("cas_pne");
        $servicio->cas_pru = $request->input("cas_pru");
        $servicio->cas_psc = $request->input("cas_psc");
        $servicio->cas_pta = $request->input("cas_pta");
        $servicio->cas_pvt = $request->input("cas_pvt");
        $servicio->cas_pvc = $request->input("cas_pvc");
        $servicio->cas_pvf = $request->input("cas_pvf");
        $servicio->cas_pva = $request->input("cas_pva");
        $servicio->ataud_id = $request->input("ataud_id");
        $servicio->empleado_id = $request->input("empleado_id");
        $servicio->vehiculo_id = $request->input("vehiculo_id");
        $servicio->capilla_id = $request->input("capilla_id");
        $servicio->urna_id = $request->input("urna_id");

		$servicio->save();

		return redirect()->route('servicios.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$servicio = Servicio::findOrFail($id);
		$servicio->delete();

		return redirect()->route('servicios.index')->with('message', 'Item deleted successfully.');
	}

}

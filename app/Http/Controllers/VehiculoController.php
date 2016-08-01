<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehiculos = Vehiculo::orderBy('id', 'desc')->paginate(10);

		return view('vehiculos.index', compact('vehiculos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vehiculos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vehiculo = new Vehiculo();

		$vehiculo->veh_pla = $request->input("veh_pla");
        $vehiculo->veh_cla = $request->input("veh_cla");
        $vehiculo->veh_ser = $request->input("veh_ser");
        $vehiculo->veh_mot = $request->input("veh_mot");
        $vehiculo->veh_asi = $request->input("veh_asi");
        $vehiculo->veh_pas = $request->input("veh_pas");
        $vehiculo->veh_fra = $request->input("veh_fra");
        $vehiculo->veh_fr = $request->input("veh_fr");
        $vehiculo->veh_eje = $request->input("veh_eje");
        $vehiculo->veh_rue = $request->input("veh_rue");
        $vehiculo->veh_com = $request->input("veh_com");
        $vehiculo->vehiculomodelo_id = $request->input("vehiculomodelo_id");

		$vehiculo->save();

		return redirect()->route('vehiculos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vehiculo = Vehiculo::findOrFail($id);

		return view('vehiculos.show', compact('vehiculo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehiculo = Vehiculo::findOrFail($id);

		return view('vehiculos.edit', compact('vehiculo'));
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
		$vehiculo = Vehiculo::findOrFail($id);

		$vehiculo->veh_pla = $request->input("veh_pla");
        $vehiculo->veh_cla = $request->input("veh_cla");
        $vehiculo->veh_ser = $request->input("veh_ser");
        $vehiculo->veh_mot = $request->input("veh_mot");
        $vehiculo->veh_asi = $request->input("veh_asi");
        $vehiculo->veh_pas = $request->input("veh_pas");
        $vehiculo->veh_fra = $request->input("veh_fra");
        $vehiculo->veh_fr = $request->input("veh_fr");
        $vehiculo->veh_eje = $request->input("veh_eje");
        $vehiculo->veh_rue = $request->input("veh_rue");
        $vehiculo->veh_com = $request->input("veh_com");
        $vehiculo->vehiculomodelo_id = $request->input("vehiculomodelo_id");

		$vehiculo->save();

		return redirect()->route('vehiculos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vehiculo = Vehiculo::findOrFail($id);
		$vehiculo->delete();

		return redirect()->route('vehiculos.index')->with('message', 'Item deleted successfully.');
	}

}

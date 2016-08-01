<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$medicos = Medico::orderBy('id', 'desc')->paginate(10);

		return view('medicos.index', compact('medicos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('medicos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$medico = new Medico();

		$medico->med_dni = $request->input("med_dni");
        $medico->med_pat = $request->input("med_pat");
        $medico->med_mat = $request->input("med_mat");
        $medico->med_nom = $request->input("med_nom");
        $medico->med_col = $request->input("med_col");
        $medico->med_dir = $request->input("med_dir");
        $medico->med_ubi = $request->input("med_ubi");
        $medico->distrito_id = $request->input("distrito_id");

		$medico->save();

		return redirect()->route('medicos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$medico = Medico::findOrFail($id);

		return view('medicos.show', compact('medico'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$medico = Medico::findOrFail($id);

		return view('medicos.edit', compact('medico'));
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
		$medico = Medico::findOrFail($id);

		$medico->med_dni = $request->input("med_dni");
        $medico->med_pat = $request->input("med_pat");
        $medico->med_mat = $request->input("med_mat");
        $medico->med_nom = $request->input("med_nom");
        $medico->med_col = $request->input("med_col");
        $medico->med_dir = $request->input("med_dir");
        $medico->med_ubi = $request->input("med_ubi");
        $medico->distrito_id = $request->input("distrito_id");

		$medico->save();

		return redirect()->route('medicos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$medico = Medico::findOrFail($id);
		$medico->delete();

		return redirect()->route('medicos.index')->with('message', 'Item deleted successfully.');
	}

}

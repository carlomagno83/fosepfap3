<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proveedors = Proveedor::orderBy('id', 'desc')->paginate(10);

		return view('proveedors.index', compact('proveedors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{//dd(\App\Categorium::pluck('cat_nom','id'));
		return view('proveedors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$proveedor = new Proveedor();

		$proveedor->pro_ruc = $request->input("pro_ruc");
        $proveedor->pro_rso = $request->input("pro_rso");
        $proveedor->pro_dir = $request->input("pro_dir");
        $proveedor->pro_fij = $request->input("pro_fij");
        $proveedor->pro_cel = $request->input("pro_cel");
        $proveedor->pro_mai = $request->input("pro_mai");
        $proveedor->pro_obs = $request->input("pro_obs");
        $proveedor->distrito_id = $request->input("distrito_id");
        $proveedor->categoria_id = $request->input("categoria_id");

		$proveedor->save();

		return redirect()->route('proveedors.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$proveedor = Proveedor::findOrFail($id);

		return view('proveedors.show', compact('proveedor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proveedor = Proveedor::findOrFail($id);

		return view('proveedors.edit', compact('proveedor'));
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
		$proveedor = Proveedor::findOrFail($id);

		$proveedor->pro_ruc = $request->input("pro_ruc");
        $proveedor->pro_rso = $request->input("pro_rso");
        $proveedor->pro_dir = $request->input("pro_dir");
        $proveedor->pro_fij = $request->input("pro_fij");
        $proveedor->pro_cel = $request->input("pro_cel");
        $proveedor->pro_mai = $request->input("pro_mai");
        $proveedor->pro_obs = $request->input("pro_obs");
        $proveedor->distrito_id = $request->input("distrito_id");
        $proveedor->categoria_id = $request->input("categoria_id");

		$proveedor->save();

		return redirect()->route('proveedors.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proveedor = Proveedor::findOrFail($id);
		$proveedor->delete();

		return redirect()->route('proveedors.index')->with('message', 'Item deleted successfully.');
	}

}

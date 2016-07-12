<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}
	
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
	{
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

		$proveedor->ruc = $request->input("ruc");
        $proveedor->nombre = $request->input("nombre");
        $proveedor->direccion = $request->input("direccion");
        $proveedor->iddistrito = $request->input("iddistrito");
        $proveedor->telefono_fijo = $request->input("telefono_fijo");
        $proveedor->telefono_celular = $request->input("telefono_celular");
        $proveedor->mail = $request->input("mail");
        $proveedor->costo = $request->input("costo");
        $proveedor->observacion = $request->input("observacion");
        $proveedor->user = $request->input("user");
        $proveedor->fecha = $request->input("fecha");
        $proveedor->id_categoria = $request->input("id_categoria");

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

		$proveedor->ruc = $request->input("ruc");
        $proveedor->nombre = $request->input("nombre");
        $proveedor->direccion = $request->input("direccion");
        $proveedor->iddistrito = $request->input("iddistrito");
        $proveedor->telefono_fijo = $request->input("telefono_fijo");
        $proveedor->telefono_celular = $request->input("telefono_celular");
        $proveedor->mail = $request->input("mail");
        $proveedor->costo = $request->input("costo");
        $proveedor->observacion = $request->input("observacion");
        $proveedor->user = $request->input("user");
        $proveedor->fecha = $request->input("fecha");
        $proveedor->id_categoria = $request->input("id_categoria");

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

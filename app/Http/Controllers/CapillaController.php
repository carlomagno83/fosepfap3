<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Capilla;
use Illuminate\Http\Request;

class CapillaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$capillas = Capilla::orderBy('id', 'desc')->paginate(10);

		return view('capillas.index', compact('capillas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('capillas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$capilla = new Capilla();

		$capilla->cap_tip = $request->input("cap_tip");
        $capilla->cap_mod = $request->input("cap_mod");
        $capilla->cap_txx = $request->input("cap_txx");
        $capilla->cap_ccf = $request->input("cap_ccf");
        $capilla->cap_fla = $request->input("cap_fla");
        $capilla->cap_man = $request->input("cap_man");
        $capilla->cap_alf = $request->input("cap_alf");
        $capilla->cap_cab = $request->input("cap_cab");
        $capilla->cap_cri = $request->input("cap_cri");
        $capilla->cap_tar = $request->input("cap_tar");
        $capilla->cap_rec = $request->input("cap_rec");
        $capilla->cap_plt = $request->input("cap_plt");
        $capilla->cap_mul = $request->input("cap_mul");
        $capilla->proveedor_id = $request->input("proveedor_id");
        $capilla->candelabro_id = $request->input("candelabro_id");

		$capilla->save();

		return redirect()->route('capillas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$capilla = Capilla::findOrFail($id);

		return view('capillas.show', compact('capilla'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$capilla = Capilla::findOrFail($id);

		return view('capillas.edit', compact('capilla'));
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
		$capilla = Capilla::findOrFail($id);

		$capilla->cap_tip = $request->input("cap_tip");
        $capilla->cap_mod = $request->input("cap_mod");
        $capilla->cap_txx = $request->input("cap_txx");
        $capilla->cap_ccf = $request->input("cap_ccf");
        $capilla->cap_fla = $request->input("cap_fla");
        $capilla->cap_man = $request->input("cap_man");
        $capilla->cap_alf = $request->input("cap_alf");
        $capilla->cap_cab = $request->input("cap_cab");
        $capilla->cap_cri = $request->input("cap_cri");
        $capilla->cap_tar = $request->input("cap_tar");
        $capilla->cap_rec = $request->input("cap_rec");
        $capilla->cap_plt = $request->input("cap_plt");
        $capilla->cap_mul = $request->input("cap_mul");
        $capilla->proveedor_id = $request->input("proveedor_id");
        $capilla->candelabro_id = $request->input("candelabro_id");

		$capilla->save();

		return redirect()->route('capillas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$capilla = Capilla::findOrFail($id);
		$capilla->delete();

		return redirect()->route('capillas.index')->with('message', 'Item deleted successfully.');
	}

}

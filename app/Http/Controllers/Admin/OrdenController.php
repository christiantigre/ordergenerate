<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Orden;
use App\Empresa;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $orden = Orden::where('fecha_orden', 'LIKE', "%$keyword%")
                ->orWhere('Empresa', 'LIKE', "%$keyword%")
                ->orWhere('cedula', 'LIKE', "%$keyword%")
                ->orWhere('ruc', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('cel_movi', 'LIKE', "%$keyword%")
                ->orWhere('cel_claro', 'LIKE', "%$keyword%")
                ->orWhere('wts', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('fecha_posisionamiento', 'LIKE', "%$keyword%")
                ->orWhere('activo', 'LIKE', "%$keyword%")
                ->orWhere('imagen', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orden = Orden::latest()->paginate($perPage);
        }


        

        return view('admin.orden.index', compact('orden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.orden.create');
    }

    public function formatoorden(){
        $orden = "";
        $empresa = Empresa::first()->get();
        $hoy = "";
        $empresa = "";
        $tot_abonos = "";
        $pre_final = "";
        $clausulas = "";

        $pdf     = \PDF::loadView('pdf.pdf', ['orden' => $orden, 'empresa' => $empresa, 'hoy' => $hoy]);
         $pdf     = \PDF::loadView('pdf.pdf', [
            'orden'      => $orden,
            'empresa'    => $empresa,
            'hoy'        => $hoy,
            'tot_abonos' => $tot_abonos,
            'pre_final'  => $pre_final,
            'clausulas'  => $clausulas]);

        //return $pdf->download('orden-#.pdf');
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'empresa' => 'nullable|max:75',
			'cedula' => 'nullable',
			'ruc' => 'nullable',
			'email' => 'nullable',
			'telefono' => 'nullable',
			'cel_movi' => 'nullable',
			'cel_claro' => 'nullable',
			'wts' => 'nullable',
			'direccion' => 'nullable|max:191'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('imagen')) {
            foreach($request['imagen'] as $file){
                $uploadPath = public_path('/uploads/imagen');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['imagen'] = $fileName;
            }
        }

        Orden::create($requestData);

        return redirect('admin/orden')->with('flash_message', 'Orden added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $orden = Orden::findOrFail($id);

        return view('admin.orden.show', compact('orden'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orden = Orden::findOrFail($id);

        return view('admin.orden.edit', compact('orden'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'empresa' => 'nullable|max:75',
			'cedula' => 'nullable',
			'ruc' => 'nullable',
			'email' => 'nullable',
			'telefono' => 'nullable',
			'cel_movi' => 'nullable',
			'cel_claro' => 'nullable',
			'wts' => 'nullable',
			'direccion' => 'nullable|max:191'
		]);
        $requestData = $request->all();
        

        if ($request->hasFile('imagen')) {
            foreach($request['imagen'] as $file){
                $uploadPath = public_path('/uploads/imagen');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['imagen'] = $fileName;
            }
        }

        $orden = Orden::findOrFail($id);
        $orden->update($requestData);

        return redirect('admin/orden')->with('flash_message', 'Orden updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Orden::destroy($id);

        return redirect('admin/orden')->with('flash_message', 'Orden deleted!');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}

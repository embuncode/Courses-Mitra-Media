<?php

namespace App\Http\Controllers;

use DB;
Use App\Models\Paket1;
use DataTables;
use Illuminate\Http\Request;

class Paket1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = Paket1::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.paket1', compact('pesans', 'pakets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['picture'] = null;

        if ($request->hasFile('picture')) {
            $input['picture'] = '/admin/image/paket/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/paket/'), $input['picture']);
        }

        Paket1::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket1 = Paket1::find($id);
        return $paket1;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $paket1 = Paket1::findOrFail($id);

        $input['picture'] = $paket1->picture;

        if ($request->hasFile('picture')) {
            if ($paket1->picture != NULL) {
                unlink(public_path($paket1->picture));
            }
            $input['picture'] = '/admin/image/paket1/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/paket1/'), $input['picture']);
        }

        $paket1->update($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket1 = Paket1::findOrFail($id); 

        if ($paket1->picture != NULL) {
            unlink(public_path($paket1->picture));
        }

        Paket1::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiPaket1() {
        $paket1 = Paket1::all();

        return DataTables::of($paket1)
            ->addColumn('show_picture', function($paket1) {
                if ($paket1->picture == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($paket1->picture).'">';
            })
            ->addColumn('action', function($paket1) {
                return '<a onclick="editForm('.$paket1->id.')"> <i class="glyphicon glyphicon-edit" style="color:blue"></i></a>
                        <a onclick="deleteData('.$paket1->id.')"> <i class="glyphicon glyphicon-trash" style="color:red"></i></a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
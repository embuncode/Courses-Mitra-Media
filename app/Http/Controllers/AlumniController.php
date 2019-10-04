<?php

namespace App\Http\Controllers;

Use App\Models\Alumni;
Use App\Models\Pesan;
Use DB;
use Illuminate\Http\Request;
use DataTables;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnis = Alumni::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.alumni', compact('alumnis', 'pesans'));
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
            $input['picture'] = '/admin/image/alumni/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/alumni/'), $input['picture']);
        }

        Alumni::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnis = Alumni::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();
        
        return view ('admin.show_alumni', compact('alumnis', 'pesans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return $alumni;
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
        $alumni = Alumni::findOrFail($id);

        $input['picture'] = $alumni->picture;

        if ($request->hasFile('picture')) {
            if ($alumni->picture != NULL) {
                unlink(public_path($alumni->picture));
            }
            $input['picture'] = '/admin/image/alumni/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/alumni/'), $input['picture']);
        }

        $alumni->update($input);

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
        // Alumni::destroy($id);

        $alumni = Alumni::findOrFail($id); 

        if ($alumni->picture != NULL) {
            unlink(public_path($alumni->picture));
        }

        Alumni::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiAlumni() {
        $alumni = Alumni::all();

        return DataTables::of($alumni)
            ->addColumn('show_picture', function($alumni) {
                if ($alumni->picture == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($alumni->picture).'">';
            })
            ->addColumn('action', function($alumni) {
                return '
                        <a href="/alumni/detail/'.$alumni->id.'" class="btn btn-info btn-xs"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>
                        <a onclick="editForm('.$alumni->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$alumni->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
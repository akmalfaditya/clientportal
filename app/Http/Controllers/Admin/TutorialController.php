<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Contracts\DataTable;
use App\Http\Requests\Admin\ClientRequest;
use App\Http\Requests\Admin\TutorialRequest;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        if (request()->ajax()) {
            $query = Tutorial::query();


            // $query = DB::table('clients')->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href=" ' . route('tutorial.edit', $item->id) . ' ">
                                    Edit
                                </a>
                                <form action=" ' . route('tutorial.destroy', $item->id) . ' " method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
                })
                ->rawColumns(['action'])
                ->make();
        }



        return view('pages.admin.tutorial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tutorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorialRequest $request)
    {
        $data = $request->all();

        Tutorial::create($data);

        return redirect()->route('tutorial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tutorial::findOrFail($id);


        return view('pages.admin.tutorial.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutorialRequest $request, $id)
    {
        $data = $request->all();

        $item = Tutorial::findOrFail($id);

        $item->update($data);

        return redirect()->route('tutorial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Tutorial::findOrFail($id);
        // $projectdelete = Project::where('clients_id', $id);
        // $project = Project::where('clients_id', $id)->get();
        // foreach ($project as $projects) {
        //     File::delete(public_path('storage/' . $projects->photo));
        // }

        $item->delete();
        // $projectdelete->delete();
        return redirect()->route('tutorial.index');
    }
}
<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallary;
use Illuminate\Support\Facades\Storage;
class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallary::all();

        return view('dashboard.gallaries.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = [];
            if ($request->has('images')) {
                $images = $request->file('images');
                foreach ($images as $key => $image) {
                    $image->store('uploads/gallaries/', 'public');
                    $input['avatar'] = $image->hashName();
                    Gallary::create($input);
                }
            }
            session()->flash('success', 'Data Added Successfully');
            return redirect()->route('dashboard.gallaries.create');
        } catch (\Throwable $th) {
            //throw $th;
            print_r($th->getMessage());
            print_r($th->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallary $gallary)
    {
        Storage::disk('public')->delete(
            'uploads/gallaries/' . $gallary->avatar
        );
        $gallary->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return redirect()->route('dashboard.gallaries.index');
    }
}
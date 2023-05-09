<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\WhatDo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class WhatDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advantages = WhatDo::WhenSearch(request()->search)->paginate();

        return view('dashboard.whatDo.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            $input = $request->except('avatar');
            if ($request->file('avatar')) {
                $avatar = $request->file('avatar');
                $request->avatar->store('uploads/advantages/', 'public');
                $input['avatar'] = $avatar->hashName();
            }
            WhatDo::create([
                'name' => [
                    'en' => $input['name_en'],
                    'ar' => $input['name'],
                ],
                'desc' => [
                    'en' => $input['desc_en'],
                    'ar' => $input['desc'],
                ],
                'avatar' => $input['avatar'],
            ]);
            session()->flash('success', 'Data Added Successfully');

            return redirect()->route('dashboard.advantages.index');
        } catch (\Throwable $th) {
            // print_r( $th->getMessage());
            // print_r( $th->getLine());
            DB::rollBack();
            throw $th;
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
        $advantage = WhatDo::where('id', $id)->first();
        return view('dashboard.whatDo.edit', compact('advantage'));
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
        try {
            $input = $request->except('avatar');
            $advantage = WhatDo::where('id', $id)->first();
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                Storage::disk('public')->delete(
                    'uploads/advantages/' . $advantage->avatar
                );
                $request->avatar->store('uploads/advantages/', 'public');
                $input['avatar'] = $avatar->hashName();
            } else {
                $input['avatar'] = null;
            }
            $advantage->update([
                'name' => [
                    'en' => $input['name_en'],
                    'ar' => $input['name'],
                ],
                'desc' => [
                    'en' => $input['desc_en'],
                    'ar' => $input['desc'],
                ],
                'avatar' => $input['avatar'],
            ]);
            session()->flash('success', 'Data Updated Successfully');
            return redirect()->route('dashboard.advantages.index');
        } catch (\Throwable $th) {
            // print_r( $th->getMessage());
            // print_r( $th->getLine());
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $advantage = WhatDo::where('id', $id)->first();
            Storage::disk('public')->delete(
                'uploads/advantages/' . $advantage->avatar
            );
            $advantage->delete();
            session()->flash('success', 'Data Deleted Successfully');
            return redirect()->route('dashboard.advantages.index');
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            print_r($th->getLine());
            //throw $th;
        }
    }
}

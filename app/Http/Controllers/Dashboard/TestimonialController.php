<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::WhenSearch(request()->search)->paginate();

        return view('dashboard.testimonials.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required',
            'desc_en' => 'required',
            // 'permissions'  => 'required|array|min:1',
        ]);

        $input = $request->except('img');
        if ($request->file('img')) {
            $img = $request->file('img');
            $request->img->store('uploads/testimonial/', 'public');
            $input['img'] = $img->hashName();
        }

        Testimonial::create([
            'name' => [
                'en' => $input['name_en'],
                'ar' => $input['name'],
            ],
            'job' => [
                'en' => $input['job_en'],
                'ar' => $input['job'],
            ],
            'desc' => [
                'en' => $input['desc_en'],
                'ar' => $input['desc'],
            ],
            'img' => $input['img'],
        ]);

        session()->flash('success', 'Data Added Successfully');

        return redirect()->route('dashboard.testimonials.index');
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'desc' => 'required',
            'desc_en' => 'required',
        ]);
        $input = $request->except('img');
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            Storage::disk('public')->delete(
                'uploads/testimonial/' . $testimonial->img
            );
            $img->store('uploads/testimonial/', 'public');
            $input['img'] = $img->hashName();
        } else {
            $input['img'] = null;
        }
        $testimonial->update([
            'name' => [
                'en' => $input['name_en'],
                'ar' => $input['name'],
            ],
            'job' => [
                'en' => $input['job_en'],
                'ar' => $input['job'],
            ],
            'desc' => [
                'en' => $input['desc_en'],
                'ar' => $input['desc'],
            ],
            'img' => $input['img'],
        ]);

        session()->flash('success', 'Data Updated Successfully');

        return redirect()->route('dashboard.testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('public')->delete(
            'uploads/testimonial/' . $testimonial->img
        );
        $testimonial->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return redirect()->route('dashboard.testimonials.index');
    }
}

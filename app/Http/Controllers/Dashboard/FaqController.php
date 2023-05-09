<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //

    public function index()
    {
        $faqs = Faq::WhenSearch(request()->search)->paginate();

        return view('dashboard.faqs.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            // 'permissions'  => 'required|array|min:1',
        ]);
        Faq::create([
            'question' => [
                'en' => $request->question_en,
                'ar' => $request->question,
            ],
            'answer' => [
                'en' => $request->answer_en,
                'ar' => $request->answer,
            ],
        ]);

        session()->flash('success', 'Data Added Successfully');

        return redirect()->route('dashboard.faqs.index');
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update([
            'question' => [
                'en' => $request->question_en,
                'ar' => $request->question,
            ],
            'answer' => [
                'en' => $request->answer_en,
                'ar' => $request->answer,
            ],
        ]);

        session()->flash('success', 'Data Updated Successfully');

        return redirect()->route('dashboard.faqs.index');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        session()->flash('success', 'Data Deleted Successfully');

        return redirect()->route('dashboard.faqs.index');
    }
}

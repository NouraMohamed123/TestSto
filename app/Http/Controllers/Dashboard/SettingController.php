<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //

    function index()
    {
        return Setting::select('key', 'value')
            ->pluck('value', 'key')
            ->toArray();
    }

    public function general_index()
    {
        return view('dashboard.settings.general')->with(
            'setting',
            $this->index()
        );
    }

    public function general_about()
    {
        return view('dashboard.settings.about_us')->with(
            'setting',
            $this->index()
        );
    }

    public function social_links()
    {
        return view('dashboard.settings.social_links')->with(
            'setting',
            $this->index()
        );
    }

    public function general_faqs()
    {
        return view('dashboard.settings.faqs')->with('setting', $this->index());
    }

    public function store(Request $request)
    {
        foreach ($this->validate_setting() as $key => $input) {
            if ($key == 'site_logo') {
                $i = $input->store('uploads/setting/', 'public');
                $input = $input->hashName();
            }
            if ($key == 'avatar') {
                $i = $input->store('uploads/abouts/', 'public');
                $input = $input->hashName();
            }
            Setting::updateOrCreate(
                [
                    'key' => $key,
                ],
                [
                    'value' => $input,
                ]
            );
        }

        session()->flash('success', 'تم تعديل البيانات بنجاح');
        return redirect()->back();
    }

    public function validate_setting()
    {
        return request()->validate([
            'site_name' => 'sometimes|min:2',
            'site_desc' => 'sometimes|min:2',
            'site_logo' => 'sometimes|nullable|image',
            'about_title_ar' => '',
            'about_title_en' => '',
            'about_content_ar' => '',
            'about_content_en' => '',
            'avatar' => '',

            'faq_title_page_ar' => '',
            'faq' => 'array',
            'faq.*.question_ar' => 'string',
            'faq.*.answer_ar' => 'string|max:255',

            'facebook_link' => 'sometimes|min:2',
            'google_link' => 'sometimes|min:2',
            'youtube_link' => 'sometimes|min:2',
            'twitter_link' => 'sometimes|min:2',
        ]);
    }
}

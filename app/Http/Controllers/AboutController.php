<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class aboutController extends Controller
{
    public function index()
    {
        $abouts = about::latest()->paginate(10);
        return view('admin.about.index')->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('post_logo');
        }

        About::create($data);

        return redirect()->route('about.index')->with('success', 'about created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show')->with('About', $about);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit')->with('about', $about);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::delete($about->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('logo')) {
            if ($about->logo) {
                Storage::delete($about->logo);
            }
            $data['logo'] = $request->file('logo')->store('post_logo');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'about updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::delete($about->image);
        }
        if ($about->logo) {
            Storage::delete($about->logo);
        }

        $about->delete();

        return redirect()->route('about.index')->with('success', 'about deleted successfully.');
    }
}

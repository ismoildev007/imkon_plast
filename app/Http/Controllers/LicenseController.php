<?php


namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licenses = License::latest()->paginate(10);
        return view('admin.license.index')->with('licenses', $licenses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.license.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:191',
            'title_ru' => 'required|string|max:191',
            'title_en' => 'required|string|max:191',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'nullable|file:pdf|max:5056',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('post_pdf');
        }

        License::create($data);

        return redirect()->route('license.index')->with('success', 'License created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(License $license)
    {
        return view('admin.license.show')->with('license', $license);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(License $license)
    {
        return view('admin.partner.edit')->with('license', $license);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, License $license)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:191',
            'title_ru' => 'required|string|max:191',
            'title_en' => 'required|string|max:191',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'nullable|file:pdf|max:5056',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($license->image) {
                Storage::delete($license->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('pdf')) {
            if ($license->pdf) {
                Storage::delete($license->pdf);
            }
            $data['pdf'] = $request->file('pdf')->store('post_pdf');
        }

        $license->update($data);

        return redirect()->route('license.index')->with('success', 'License updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(License $license)
    {
        if ($license->image) {
            Storage::delete($license->image);
        }
        if ($license->pdf) {
            Storage::delete($license->pdf);
        }

        $license->delete();

        return redirect()->route('license.index')->with('success', 'License deleted successfully.');
    }
}

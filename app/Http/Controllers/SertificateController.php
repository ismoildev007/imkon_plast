<?php

namespace App\Http\Controllers;

use App\Models\Sertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertificates = Sertificate::latest()->paginate(10);
        return view('admin.sertificate.index', compact('sertificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sertificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('post_logo');
        }
        Sertificate::create($data);

        return redirect()->route('sertificate.index')->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertificate $sertificate)
    {
        return view('sertificate.show', compact('sertificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertificate $sertificate)
    {
        return view('admin.sertificate.edit', compact('sertificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertificate $sertificate)
    {
        // Validate the request
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image1')) {
            if ($sertificate->image1) {
                Storage::delete($sertificate->image1);
            }
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            if ($sertificate->image2) {
                Storage::delete($sertificate->image2);
            }
            $data['image2'] = $request->file('image2')->store('post_photo');
        }

        // Update the database record with the new paths
        $sertificate->update($data);

        return redirect()->route('sertificate.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertificate $sertificate)
    {
        if ($sertificate->image1) {
            Storage::delete($sertificate->image1);
        }
        if ($sertificate->image2) {
            Storage::delete($sertificate->image2);
        }

        $sertificate->delete();

        return redirect()->back();
    }
}

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

        // Handle file upload
        if ($request->hasFile('image1') && $request->hasFile('image2')) {
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');

            // Generate unique file names
            $image1Name = time() . '_' . uniqid() . '.' . $image1->getClientOriginalExtension();
            $image2Name = time() . '_' . uniqid() . '.' . $image2->getClientOriginalExtension();

            // Save the files to the public directory
            $image1->move(public_path('images'), $image1Name);
            $image2->move(public_path('images'), $image2Name);

            // Save the paths to the database
            Sertificate::create([
                'image1' => 'images/' . $image1Name,
                'image2' => 'images/' . $image2Name,
            ]);

            return redirect()->route('sertificate.index');
        }
        return redirect()->route('sertificate.index');
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
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the existing sertificate record
        $sertificate = Sertificate::findOrFail($id);

        // Initialize variables to hold new image paths
        $image1Path = $sertificate->image1;
        $image2Path = $sertificate->image2;

        // Handle file upload for image1
        if ($request->hasFile('image1')) {
            // Delete the old image1 if it exists
            if (file_exists(public_path($sertificate->image1))) {
                unlink(public_path($sertificate->image1));
            }

            $image1 = $request->file('image1');
            $image1Name = time() . '_' . uniqid() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $image1Name);
            $image1Path = 'images/' . $image1Name;
        }

        // Handle file upload for image2
        if ($request->hasFile('image2')) {
            // Delete the old image2 if it exists
            if (file_exists(public_path($sertificate->image2))) {
                unlink(public_path($sertificate->image2));
            }

            $image2 = $request->file('image2');
            $image2Name = time() . '_' . uniqid() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $image2Name);
            $image2Path = 'images/' . $image2Name;
        }

        // Update the database record with the new paths
        $sertificate->update([
            'image1' => $image1Path,
            'image2' => $image2Path,
        ]);

        return redirect()->route('sertificate.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertificate $sertificate)
    {
        if ($sertificate->image1 && $sertificate->image2) {
            Storage::delete($sertificate->image1);
            Storage::delete($sertificate->image2);
        }
        return redirect()->back();
    }
}

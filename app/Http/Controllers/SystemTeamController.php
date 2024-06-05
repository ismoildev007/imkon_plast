<?php

namespace App\Http\Controllers;

use App\Models\SystemTeam;
use App\Models\SystemTeamDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SystemTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systemTeam = SystemTeam::latest()->paginate(10);
        return view('admin.systemTeam.index', compact('systemTeam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = SystemTeamDate::all();
        return view('admin.systemTeam.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'position_uz' => 'required|string',
            'position_ru' => 'required|string',
            'position_en' => 'required|string',
            'email' => 'required|string|max:255|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('post_photo');
        }

        $systemTeam = SystemTeam::create($validated);

        if ($request->filled('specifications')) {
            foreach ($request->input('specifications') as $specification) {
                if (isset($specification['dateDay']) && isset($specification['timeDay'])) {
                    SystemTeamDate::create([
                        'system_id' => $systemTeam->id,
                        'dateDay' => $specification['dateDay'],
                        'timeDay' => $specification['timeDay'],
                    ]);
                }
            }
        }

        return redirect()->route('system_team.index')->with('success', 'SystemTeam created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemTeam $systemTeam)
    {
        return view('admin.systemTeam.show', compact('systemTeam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemTeam $systemTeam)
    {
        return view('admin.systemTeam.edit', compact('systemTeam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SystemTeam $systemTeam)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'position_uz' => 'required|string',
            'position_ru' => 'required|string',
            'position_en' => 'required|string',
            'email' => 'required|string|max:255|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($systemTeam->image) {
                Storage::delete($systemTeam->image);
            }
            $validated['image'] = $request->file('image')->store('post_photo');
        }

        $systemTeam->update($validated);

        $systemTeam->systems()->delete();

        if ($request->filled('specifications')) {
            foreach ($request->input('specifications') as $specification) {
                if (isset($specification['dateDay']) && isset($specification['timeDay'])) {
                    SystemTeamDate::create([
                        'system_id' => $systemTeam->id,
                        'dateDay' => $specification['dateDay'],
                        'timeDay' => $specification['timeDay'],
                    ]);
                }
            }
        }

        return redirect()->route('system_team.index')->with('success', 'SystemTeam updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemTeam $systemTeam)
    {
        if ($systemTeam->image) {
            Storage::delete($systemTeam->image);
        }

        $systemTeam->delete();

        return redirect()->route('system_team.index')->with('success', 'SystemTeam deleted successfully.');
    }
}

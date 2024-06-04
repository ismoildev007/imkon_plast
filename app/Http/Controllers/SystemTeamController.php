<?php


namespace App\Http\Controllers;

use App\Models\SystemTeam;
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
        return view('admin.systemTeam.index')->with('systemTeam', $systemTeam);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.systemTeam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'position_uz' => 'required|string',
            'position_ru]' => 'required|string',
            'position_en' => 'required|string',
            'date' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        SystemTeam::create($data);

        return redirect()->route('system_team.index')->with('success', 'SystemTeam created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemTeam $systemTeam)
    {
        return view('admin.systemTeam.show')->with('systemTeam', $systemTeam);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemTeam $systemTeam)
    {
        return view('admin.systemTeam.edit')->with('systemTeam', $systemTeam);
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
            'date' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($systemTeam->image) {
                Storage::delete($systemTeam->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $systemTeam->update($data);

        return redirect()->route('systemTeam.index')->with('success', 'SystemTeam updated successfully.');
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

        return redirect()->route('systemTeam.index')->with('success', 'SystemTeam deleted successfully.');
    }
}

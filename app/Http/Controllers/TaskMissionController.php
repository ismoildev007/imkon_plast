<?php


namespace App\Http\Controllers;

use App\Models\TaskMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskMission = TaskMission::latest()->paginate(10);
        return view('admin.mission.index')->with('taskMission', $taskMission);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mission.create');
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
            'text_uz' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
            'business_plan_uz' => 'nullable|string',
            'business_plan_ru' => 'nullable|string',
            'business_plan_en' => 'nullable|string',
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

        TaskMission::create($data);

        return redirect()->route('mission.index')->with('success', 'TaskMission created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskMission $taskMission)
    {
        return view('admin.mission.show')->with('taskMission', $taskMission);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskMission $taskMission)
    {
        return view('admin.mission.edit')->with('taskMission', $taskMission);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskMission $taskMission)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'text_uz' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
            'business_plan_uz' => 'nullable|string',
            'business_plan_ru' => 'nullable|string',
            'business_plan_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'nullable|file:pdf|max:5056',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($taskMission->image) {
                Storage::delete($taskMission->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('pdf')) {
            if ($taskMission->pdf) {
                Storage::delete($taskMission->pdf);
            }
            $data['pdf'] = $request->file('pdf')->store('post_pdf');
        }

        $taskMission->update($data);

        return redirect()->route('mission.index')->with('success', 'TaskMission updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskMission $taskMission)
    {
        if ($taskMission->image) {
            Storage::delete($taskMission->image);
        }
        if ($taskMission->pdf) {
            Storage::delete($taskMission->pdf);
        }

        $taskMission->delete();

        return redirect()->route('mission.index')->with('success', 'TaskMission deleted successfully.');
    }
}

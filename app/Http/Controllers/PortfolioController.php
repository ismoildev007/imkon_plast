<?php


namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index')->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'kv_m' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        Portfolio::create($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'text_uz' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
            'kv_m' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::delete($portfolio->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->back();
    }
}

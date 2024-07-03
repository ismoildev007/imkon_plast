<?php


namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\PriceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = Price::latest()->paginate(10);
        return view('admin.price.index')->with('prices', $prices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PriceCategory::all();
        return view('admin.price.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'price_id' => 'required|exists:price_categories,id',
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'price' => 'nullable|string',
        ]);

        $data = $validated;

        Price::create($data);

        return redirect()->route('price.index')->with('success', 'Price created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        return view('admin.price.show')->with('price', $price);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        $categories = PriceCategory::all();
        return view('admin.price.edit', compact('categories'))->with('price', $price);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        $validated = $request->validate([
            'price_id' => 'required|exists:price_categories,id',
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'price' => 'nullable|string',
        ]);

        $data = $validated;

        $price->update($data);

        return redirect()->route('price.index')->with('success', 'Price updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {

        $price->delete();

        return redirect()->back();
    }
}

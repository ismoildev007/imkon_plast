<?php


namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postCategories = PostCategory::all();
        return view('admin.post.create')->with('postCategories', $postCategories);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
//        dd($request);
        $validated = $request->validate([
            'post_category_id' => 'required|exists:post_categories,id', // jadval nomi to'g'ri kiritildi
            'title_uz' => 'required|string|max:191',
            'title_ru' => 'required|string|max:191',
            'title_en' => 'required|string|max:191',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//        dd($validated);

        // Valide qilingan ma'lumotlarni olib chiqdik
        $data = $validated;

        // Tasdiqlangan ma'lumotlarni tekshirish uchun

        // Faylni yuklash
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        // Postni yaratish
        Post::create($data);

        // Redirect qilish va muvaffaqiyat xabari
        return redirect()->route('post.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post_category = PostCategory::all();
        return view('admin.post.show', compact('post_category'))->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $postCategories = PostCategory::all(); // Need to pass categories to the view
        return view('admin.post.edit', compact('post', 'postCategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'post_category_id' => 'required|exists:post_categories,id',
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $post->update($data);

        return redirect()->route('post.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post deleted successfully.');
    }
}

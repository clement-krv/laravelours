<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->paginate(20);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image',
        ]);

        $article = Article::create($data);

        if ($request->hasFile('image')) {
            $article->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::with('category')->findOrFail($id);

        return view('articles.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::findOrFail($id);
        $categories = Category::all();

        return view('articles.edit', compact('articles', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image',
        ]);
    
        $article = Article::findOrFail($id);
        $article->update($data);
    
        if ($request->hasFile('image')) {
            $article->clearMediaCollection('image');
            $article->addMediaFromRequest('image')->toMediaCollection('image');
        }
    
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::destroy($id);

        return redirect()->route('articles.index');
    }
}

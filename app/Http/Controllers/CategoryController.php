<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Search for categories
        if (request()->filled('search')) {
            $search = request('search');
            $categories = $this->search($search);
        } else {
            $categories = Category::with(['products'])
                ->withCount('products')
                ->latest()
                ->paginate();
        }
        // return $categories;
        return view('dashboard.pages.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // Validated data
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        $category = Category::create($data);
        info('category created successfully:', [$category]);
        // return $category;
        $message = "category added successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $category->load(['products']);
        // return $category;
        return view('dashboard.pages.categories.show', [
            'brand' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // Validated data
        $data = $request->validated();

        // check if slug exists and add random number
        while (Category::where('slug', $data['slug'])->where('id', '!=', $category->id)->exists()) {
            $data['slug'] = $data['slug'] . '-' . rand(1000, 9999);
        }

        // update the category slug
        if ($request->filled('name')) {
            $data['slug'] = Str::slug($data['name']);
        }

        $category->update($data);
        info('Category updated successfully:', [$category]);
        // return $category;

        $message = "category updated successfully!";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $message = "category deleted successfully";
        return redirect()->back()->with('success', $message);
    }

    /**
     * Search for categories
     */
    private function search(string  $search)
    {
        $categories = Category::where('name', 'LIKE', '%' . $search . '%')
            ->withCount(['products'])
            ->latest()
            ->paginate();

        return $categories;
    }
}

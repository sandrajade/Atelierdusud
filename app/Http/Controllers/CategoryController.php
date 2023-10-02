<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)

    {
        $category = new Category;
        $category->name = $request->name;

        if($request->status == 'on') {

            $category->status = 1;
        }
        $category->save();

        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {

    }
public function edit(Category $category)
{
    return view ('category.edit', compact('category'));
}

public function update (Request $request, Category $category)
{
    $category->name = $request->name;
    if ($request->status == 'on') {
        $category->status = 1;
    }else {
        $category->status = 0;
    }

    $category->update();

    return redirect()->route('category.index');

}

public function destroy(Category $category)
{
    $category->delete();

    return redirect()->route('category.index');
}

}

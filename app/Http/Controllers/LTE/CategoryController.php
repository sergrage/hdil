<?php

namespace App\Http\Controllers\LTE;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('can:manage-adverts-categories');
    // }


    public function index()
    {
        $categories = Category::defaultOrder()->withDepth()->get();
        $catCount = [count($categories)];
        return view('admin.categories.index', compact('categories', 'catCount')); 
    }

    public function create()
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.categories.create', compact('parents'));
    }

    public function store(CreateRequest $request)
    {
        $category = Category::create([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.categories.show', $category);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();
        return view('admin.categories.edit', compact('category', 'parents'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.categories.show', $category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }

// -------------------------------------------------------------- //
    // Методы взяты из NodeTrait из модели Category
// -------------------------------------------------------------- //

    public function first(Category $category)
    {
        // siblings - дети одних родителей
        if ($first = $category->siblings()->defaultOrder()->first()) {
            $category->insertBeforeNode($first);
        }

        return redirect()->route('admin.categories.index');
    }

    public function up(Category $category)
    {
        $category->up();

        return redirect()->route('admin.categories.index');
    }

    public function down(Category $category)
    {
        $category->down();

        return redirect()->route('admin.categories.index');
    }

    public function last(Category $category)
    {
        if ($last = $category->siblings()->defaultOrder('desc')->first()) {
            $category->insertAfterNode($last);
        }

        return redirect()->route('admin.categories.index');
    }

// -------------------------------------------------------------- //

}

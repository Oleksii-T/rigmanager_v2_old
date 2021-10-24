<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class CategoryController extends Controller
{
    public function index()
    {
        if (!request()->ajax()) {
            return view('admin.categories.index');
		}

        $categories = Category::query();
		
		return $this->makeDataTable($categories);
    }

    private function makeDataTable($categories)
    {
        if (request()->parent) {
            $categories->where('category_id', request()->parent);
        }
        switch (request()->children) {
            case 1:
                $categories->whereHas('children');
                break;
            case 2:
                $categories->doesntHave('children');
                break;
            default:
                break;
        }
        if (request()->thread) {
            $categories->where('thread', request()->thread);
        }
        if (request()->masterCategories) {
            $categories->whereNull('category_id');
        }

		return Datatables::of($categories)
            ->addColumn('name', function($category){
                return $category->getFieldTranslation('name', 'en');
            })
            ->addColumn('children', function($category){
                $count = $category->children()->count();
                if ($count) {
                    return '<a href='.route('admin.categories.index', ['category'=>$category->id]).'>'.$count.'</a>';
                }
                return null;
            })
            ->addColumn('parent', function($category){
                $parent = $category->parent;
                if (!$parent) {
                    return null;
                }
                $parentLink = '<a href='.route('admin.categories.edit', $parent).'>'.$parent->getFieldTranslation('name', 'en').'</a>';
                $parentParent = $parent->parent;
                if (!$parentParent) {
                    return $parentLink;
                }
                $parentParentLink = '<a href='.route('admin.categories.edit', $parentParent).'>'.$parentParent->getFieldTranslation('name', 'en').'</a>';
                return $parentParentLink . ' > ' . $parentLink;
            })
            ->addColumn('action', function($category){
                return view('admin.categories.components.actions-list', compact('category'))->render();
            })
            ->rawColumns(['children', 'parent', 'action'])
            ->make();
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('categories')->putFile('', new File($request->file('image')));
        }
        $category = Category::create($data);
        $category->saveTranslations($request->only(Category::$translatable));

        return redirect()->route('admin.categories.index')->with('success', 'Category was successfully created');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        
        if ($category->image && ($request->image_deleted || $request->hasFile('image'))) {
            Storage::disk('categories')->delete($category->image);
            $data['image'] = null;
        }
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('categories')->putFile('', new File($request->file('image')));
        }

        $category->update($data);
        $category->saveTranslations($request->only(Category::$translatable));
        
        return redirect()->route('admin.categories.index')->with('success', 'Category was successfully updated');
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::disk('categories')->delete($category->image);
        }
        $category->delete();        

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully'
        ]);
    }
}

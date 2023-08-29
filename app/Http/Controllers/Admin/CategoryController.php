<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with(['section', 'parentcategory'])->get()->toArray();
        // dd($categories);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    // Add Category function



    public function store(Request $request){

         #Handle File Upload
         if($request->hasfile('banner_img'))
            {
                $name = rand(111,99999). '.' . $request->banner_img->getClientOriginalExtension();
                $path = public_path() .'/storage/category';
                $request->banner_img->move($path, $name);
                $banner_img = $name;
            }else{
            $banner_img = null;
            }
        $cat = new Category();
        $cat->category_name = $request->category_name;
        $cat->section_id = $request->section_id;
        $cat->parent_id = $request->parent_id;
        $cat->cat_banner = $banner_img;
        $cat->description = $request->description;
        $cat->category_discount = $request->category_discount;
        $cat->url = $request->url;
        $cat->meta_title = $request->meta_title;
        $cat->meta_description = $request->meta_description;
        $cat->meta_keywords = $request->meta_keywords;
        $cat->status = 1;
        $cat->save();
        return redirect()->back()->with('success','Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function updateCategoryStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Category::where('id', $data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return back()->with('success','Section deleted successfully');
    }
}

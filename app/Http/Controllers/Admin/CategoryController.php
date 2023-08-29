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

    public function store(Request $request)
    {
        $category = new Category();
        if($request->hasFile('category_image'))
        {
            $image_tmp = $request->file('category_image');
            $extension = $image_tmp->getClientOriginalExtension();
            $imageName = rand(111,99999).'.'.$extension;
            $imagePath = 'storage/images/category'.$imageName;
            Image::make($image_tmp)->save($imagePath);
            $category->category_image = $imageName;

        }

            $category->category_name = $request->category_name;
            $category->description = $request->description;
            $category->parent_id = $request->parent_id;
            $category->section_id = $request->section_id;
            $category->category_discount = $request->category_discount;
            $category->url = $request->url;
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
            $category->category_image = $imageName;
            $category->status = 1;
            $category->save();





            return redirect()->back()->with('success','Category added successfully');

            // if($request->hasFile('category_image')){
            //     $image_tmp = $request->file('category_image');
            //     if($image_tmp->isValid()){
            //         // Get Image Extension
            //          $extension = $image_tmp->getClientOriginalExtension();
            //         // Generate New Image Name
            //          $imageName = rand(111,99999).'.'.$extension;
            //          $imagePath = 'storage/images/category'.$imageName;
            //         // Upload Image
            //          Image::make($image_tmp)->save($imagePath);
            //     }
            // }

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

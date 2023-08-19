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
    // public function storeEditCategory(Request $request, $id=null)
    // {
    //     if($id=""){
    //         // Add category functionality
    //         $title = "Add Category";
    //         $category = New Category;
    //         // $message('success','Category added successfully');
    //     }else{
    //         $title = "Edit Category";
    //         $category = Category::find($id);
    //         // $message('success','Category added successfully');
    //     }

    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         // dd($request->all());

    //         if($request->hasFile('category_image')){
    //             $image_tmp = $request->file('category_image');
    //             if($image_tmp->isValid()){
    //                 // Get Image Extension
    //                 $extension = $image_tmp->getClientOriginalExtension();
    //                 // Generate New Image Name
    //                 $imageName = rand(111,99999).'.'.$extension;
    //                 $imagePath = 'storage/images/category'.$imageName;
    //                 // Upload Image
    //                 Image::make($image_tmp)->save($imagePath);
    //             }
    //         }
    //         $category = new Category;
    //         $category->parent_id = $data['parent_id'];
    //         $category->section_id = $data['section_id'];
    //         $category->category_name = $data['category_name'];
    //         $category->description = $data['description'];
    //         $category->category_discount = $data['category_discount'];
    //         $category->category_image = '';
    //         $category->url = $data['url'];
    //         $category->meta_title = $data['meta_title'];
    //         $category->meta_description = $data['meta_description'];
    //         $category->meta_keywords = $data['meta_keywords'];
    //         $category->status = 1;
    //         $category->save();


    //         return redirect()->back()->with('success');
    //     }

    //     return view('admin.category.create', compact('category', 'title'));
    // }
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $category = $request->all();

            if($request->hasFile('category_image')){
                $image_tmp = $request->file('category_image');
                if($image_tmp->isValid()){
                    // Get Image Extension
                     $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                     $imageName = rand(111,99999).'.'.$extension;
                     $imagePath = 'storage/images/category'.$imageName;
                    // Upload Image
                     Image::make($image_tmp)->save($imagePath);
                }
            }
            $category = new Category;
            $category->category_name = $request->category_name;
            $category->description = $request->description;
            $category->parent_id = $request->parent_id;
            $category->section_id = $request->section_id;
            $category->category_discount = $request->category_discount;
            $category->url = $request->url;
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
            $category->category_image = $request->category_image;
            $category->status = 1;
            $category->save();


            return redirect()->back()->with('success','Category added successfully');
        }
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

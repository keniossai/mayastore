public function storeEditCategory(Request $request, $id=null)
    {
        if($id==""){
            // Add category functionality
            $title = "Add Category";
            $category = New Category;
            // $message('success','Category added successfully');
        }else{
            $title = "Edit Category";
            $category = Category::find($id);
            // $message('success','Category added successfully');
        }

        if($request->isMethod('post')){
            $data = $request->all();
            // dd($request->all());

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
                    $category->category_image = $imageName;
                }
            }else{
                $category->category_image = "";
            }
            $category = new Category;
            $category->parent_id = $data['parent_id'];
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->description = $data['description'];
            $category->category_discount = $data['category_discount'];
            $category->category_image = $data['category_image'];
            $category->url = $data['url'];
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = 1;
            $category->save();


            return redirect()->back()->with('success',);
        }

        return view('admin.category.create', compact('category', 'title'));
    }


    public function store(Request $request)
    {
        $category = new Category();
        // dd($request->all());
        if($request->hasFile('category_image'))
        {
            $image_tmp = $request->file('category_image');
            $extension = $image_tmp->getClientOriginalExtension();
            $imageName = rand(111,99999).'.'.$extension;
            $image_tmp->move('storage/images/category'.$imageName);
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
            $category->category_image = '';
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

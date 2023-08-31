<select value="" name="parent_id" class="form-control" id="parent_id">
    <option @if(isset($category['parent_id']) && $category['parent_id']==0) selected="" @endif>Main Category</option>
    @if (!empty($getCategories))
        @foreach ($getCategories as $parentcategory)
            <option value="{{ $category['id'] }}" @if(isset($category['parent_id']) && $category['parent_id']==$parentcategory['id']) selected="" @endif>{{ $parentcategory['category_name'] }}</option>
            @if (!empty($parentcategory['subcategories']))
                @foreach ($parentcategory['subcategories'] as $subcategory)
                    <option value="{{ $subcategory['id'] }}" @if(isset($subcategory['parent_id']) && $subcategory['parent_id']==$subcategory['id']) selected="" @endif>&nbsp;&raquo;&nbsp;{{ $subcategory['category_name'] }}</option>
                @endforeach
            @endif
        @endforeach
    @endif
</select>

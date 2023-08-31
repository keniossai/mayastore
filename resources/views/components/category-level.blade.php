<select value="" name="parent_id" class="form-control" id="parent_id">
    <option value="0" >Main Category</option>
    @if (!empty($getCategories))
        @foreach ($getCategories as $category)
            <option value="{{ $category['id'] }}" >{{ $category['category_name'] }}</option>
        @endforeach
    @endif
</select>
{{-- @if (!empty($category['subcategories']))
    @foreach ($category['subcategories'] as $subcategory)
        <option value="{{ $subcategory['id'] }}" @if(isset($category['parent_id']) && $category['parent_id']==$subcategory['id']) selected="" @endif>{{ $subcategory['category_name'] }}</option>
    @endforeach
@endif --}}
{{-- @if(isset($category['parent_id']) && $category['parent_id']==$category['id']) selected="" @endif --}}

{{-- @if(isset($category['parent_id']) && $category['parent_id']==0) selected="" @endif --}}

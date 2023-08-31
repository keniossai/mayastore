<select value="" name="parent_id" class="form-control" id="parent_id">
    <option value="0" >Main Category</option>
    @if (!empty($getCategories))
        @foreach ($getCategories as $category)
            <option value="{{ $category['id'] }}" >{{ $category['category_name'] }}</option>
        @endforeach
    @endif
</select>

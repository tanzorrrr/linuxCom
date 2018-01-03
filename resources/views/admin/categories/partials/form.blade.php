<label for="">Status</label>
<select class="form-control" name="published" id="">
    @if(isset($category->id))
    <option value="0" @if($category->published == 0) selected="" @endif>No published</option>
    <option value="1"@if($category->published == 1) selected="" @endif>Published</option>
    @else
    <option value="0">No published</option>
    <option value="1">Published</option>
        @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Categories title" value="{{$category->title or ""}}" required>

<label for="">slug</label>
<input type="text" class="form-control" name="slug" placeholder="automatic grnerate" value="{{$category->slug or  ""}}" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="parent_id" id="">
    <option value="0">Vithout paren category</option>
     @include('admin.categories.partials.categories',['categories'=>$categories])
</select>
<hr>
<input type="submit" class="btn btn-primary" value="Save">

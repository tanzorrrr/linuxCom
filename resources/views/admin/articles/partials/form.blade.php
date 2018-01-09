<label for="">Status</label>
<select class="form-control" name="published" id="">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>No published</option>
        <option value="1"@if($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">No published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Categories title" value="{{$article->title or ""}}" required>
<label for="">Photo</label>
<input type="file">
<label for="">slug(unic value)</label>
<input type="text" class="form-control" name="slug" placeholder="automatic grnerate" value="{{$article->slug or  ""}}" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">Vithout paren category</option>
    @include('admin.articles.partials.categories',['categories'=>$categories])
</select>
<label for=""Short Description></label>
<textarea class="form-control" name="description_short" id="description_short" cols="30" rows="10">
    {{$article->description_short or ""}}
</textarea>

<label for="" Description></label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">
    {{$article->description or ""}}
</textarea>
<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="meta title" value="{{$article->meta_title or ""}}">
<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="meta description" value="{{$article->meta_description or ""}}">
<label for="">Key words</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="keyword throe coma" value="{{$article->meta_keyword or  ""}}" >
<hr>
<input type="submit" class="btn btn-primary" value="Save">

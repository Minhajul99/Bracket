@extends('backend.mastertemplate.template')

@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Edit Suncategory</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
  </div>

</div><!-- br-pagetitle -->

<div class="br-pagebody">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-base p-3 bd-0 overflow-hidden">
        <form action="{{Route('subcategory.update',$subcat->id)}} " method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subcategory">Sub Category</label>
                    <select class="form-control" name="catId" id="catId">
                        @foreach ($cat as $cats )
                        <option value="{{$cats->id}}" @if ($cats->id==$subcat->catId) selected @endif>
                             {{$cats->name}}</option>
                        @endforeach

                    </select>
                    <span class="text-danger">
                        @error('catId')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="subCatName">Sub Category Name</label>
                    <input type="text" placeholder="Enter Sub Category Name" class="form-control"
                        name="subCatName" id="subCatName" value="{{ $subcat->subCatName}}">
                    <span class="text-danger">
                        @error('subCatName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" placeholder="Enter Sub Category Description" class="form-control" rows="4" name="des"
                        id="des">{{ $subcat->des}}</textarea>
                    <span class="text-danger">
                        @error('des')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="col-md-6">
                <img height="80" src="{{asset('backend/subcategoryimages/'.$subcat->image)}}" alt="">
                <div class="form-group">
                    <label for="image">Sub Category Image</label>
                    <input type="file" placeholder="Upload Image" class="form-control" name="image"
                        id="image">
                        <span class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="">-----Select Status-----</option>
                        <option value="1" @if ($subcat->status==1) selected

                            @endif>Active</option>
                        <option value="2"@if ($subcat->status==2) selected

                            @endif>Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="form-control btn btn-info">Update Sub Category</button>
                </div>
            </div>
        </div>
        </form>


      </div><!-- card -->
    </div> <!-- col-12 -->
  </div><!-- row -->
</div><!-- br-pagebody -->
@endsection

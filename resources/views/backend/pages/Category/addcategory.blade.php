@extends('backend.mastertemplate.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Add Category</h4>
            <p class="mg-b-0">Add Category from here</p>
        </div>

    </div><!-- br-pagetitle -->

    <!-- Add Category  -->
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-base p-3 bd-0 overflow-hidden">
                    <form action="{{ Route('catstore') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" placeholder="Enter Product name" class="name form-control"
                                        name="name" value="">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" placeholder="Enter Product Description" class="des form-control" rows="4" name="des"></textarea>
                                    <span class="text-danger desError">
                                        @error('des')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="des">tag</label>
                                    <input type="text" placeholder="Enter Tag name" class=" tag form-control" name="tag"
                                        value="">
                                    <span class="text-danger tagError">
                                        @error('tag')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class=" status form-control" name="status" id="status">
                                        <option value="">-----Select Status-----</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <button class="form-control btn btn-info">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div> <!-- col-12 -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
@endsection

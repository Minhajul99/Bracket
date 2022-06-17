@extends('backend.mastertemplate.template')

@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Category Management</h4>
    <p class="mg-b-0">Manage your Category here</p>
  </div>

</div><!-- br-pagetitle -->

<!-- Add Category Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" placeholder="Enter Product name" class="name form-control" name="name" value="">
           <span class="text-danger nameError"></span>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" placeholder="Enter Product Description" class="des form-control" rows="4" name="des" ></textarea>
          <span class="text-danger desError"></span>
        </div>

        <div class="form-group">
          <label for="des">tag</label>
          <input type="text" placeholder="Enter Tag name" class=" tag form-control" name="tag" value="">
          <span class="text-danger tagError"></span>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select class=" status form-control" name="status">
            <option value="">-----Select Status-----</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="addCategory btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal For Category Edit -->
<!-- Category Update Modal -->
<div class="modal fade" id="catEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="updateMsg"></div>
      <div class="modal-body">
        <input type="text" class="form-control" name="name" id="categoryId">
      <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" placeholder="Enter Product name" class="form-control" name="name" id="name" value="">
           <span class="text-danger nameError"></span>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" placeholder="Enter Product Description" class="form-control" rows="4" name="des" id="des"></textarea>
          <span class="text-danger desError"></span>
        </div>

        <div class="form-group">
          <label for="des">tag</label>
          <input type="text" placeholder="Enter Tag name" class="form-control" name="tag" id="tag" value="">
          <span class="text-danger tagError"></span>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" name="status" id="status">
            <option value="" id="stsVal">-----Select Status-----</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="updateCategory btn btn-primary" id="updateCategory">Update</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal For Category Edit -->
<!-- Category Delete Modal -->
<div class="modal fade" id="catDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="delMsg"></div>
      <div class="modal-body">
        <h4>Are you sure you want to delete this Catagory?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="delCategory btn btn-danger" id="delCategory">Delete</button>
      </div>
    </div>
  </div>
</div>









<div class="br-pagebody">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-base p-3 overflow-hidden">
        <div class="row d-flex justify-content-between px-3">
          <div>
            <h2 class="text-primary">All Category</h2>
          </div>
          <div>
            <button class="btn btn-sm btn-info p-2" data-toggle="modal" data-target="#addCategory">
                <i class="fa fa-plus"></i> Add Category
            </button>
            {{-- Using AddCategory Blade Page --}}
            {{-- <a href="{{route('catcreate')}}" class="btn btn-sm btn-info p-2" >Add Category</a> --}}
        </div>
        </div>
        <div class="msg"></div>
        <table class="table">
          <thead>
            <tr>
              <th> #Sl </th>
              <th> Category Name </th>
              <th> Description </th>
              <th> Tags </th>
              <th> Status </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody class="tbody">


            <!-- <tr>
              <td>1</td>
              <td>Man</td>
              <td>T-Shirt</td>
              <td>Man</td>
              <td>1</td>
              <td>
                <span class="badge badge-info">Active</span>
                <span class="badge badge-danger">Inactive</span>
              </td>

              <td>
                <a href="" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i></a>
                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target=" "> <i class="fa fa-trash"></i></button>
              </td>
            </tr> -->
            <!-- Modal For Delete -->
            <!-- Modal -->

            <!-- Modal For Delete end-->

          </tbody>
        </table>

      </div><!-- card -->
    </div> <!-- col-12 -->
  </div><!-- row -->
</div><!-- br-pagebody -->
@endsection

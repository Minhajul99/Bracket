@extends('backend.mastertemplate.template')

@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Dashboard</h4>
    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
  </div>

</div><!-- br-pagetitle -->

<div class="br-pagebody">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-base p-3 bd-0 overflow-hidden">
        <form action="{{Route('update',$product->id)}} " method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="pname">Product Name</label>
                <input type="text" placeholder="Enter Product name" class="form-control" name="pname" id="pname" value="{{$product->name}}">

              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" placeholder="Enter Product Description" class="form-control" rows="4" name="description" id="pro_description">{{ $product->description}}</textarea>
                <span class="text-danger">
                  @error ('description')
                    {{$message}}
                  @enderror
                </span>
              </div>


              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="category" id="category">
                  <option value="">-----Select Category-----</option>
                  <option value="man" @if ($product->category =='man') selected @endif > Man</option>
                  <option value="woman" @if ($product->category =='woman') selected @endif > Woman</option>
                  <option value="children" @if ($product->category =='children') selected @endif > Children</option>
                </select>
              </div>

              <div class="form-group">
                <label for="size">Size</label>
                <select class="form-control" name="size" id="size">
                  <option value="">-----Select Size-----</option>
                  <option value="L" @if ($product->size =='L') selected @endif>L</option>
                  <option value="M" @if ($product->size =='M') selected @endif>M</option>
                  <option value="SM" @if ($product->size =='SM') selected @endif>SM</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="costprice">Cost Price</label>
                <input type="text" placeholder="Enter Product costprice" class="form-control" name="costprice" id="costprice" value="{{$product->costprice}}">
              </div>

              <div class="form-group">
                <label for="sellprice">Sell Price</label>
                <input type="text" placeholder="Enter Product Sellprice" class="form-control" name="sellprice" id="sellprice" value="{{$product->sellprice}}">
              </div>

              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" placeholder="Enter Product Quantity" class="form-control" name="quantity" id="quantity"  value="{{$product->quantity}}">
              </div>




              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                  <option value="">-----Select Status-----</option>
                  <option value="1" @if ($product->status ==1)selected @endif>Active</option>
                  <option value="2" @if ($product->status ==2)selected @endif>Inactive</option>
                </select>
              </div>

              <div class="form-group">
                <button class="form-control btn btn-info">Update Product</button>
              </div>
            </div>
          </div>
        </form>


      </div><!-- card -->
    </div> <!-- col-12 -->
  </div><!-- row -->
</div><!-- br-pagebody -->
@endsection

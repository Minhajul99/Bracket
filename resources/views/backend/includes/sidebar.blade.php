  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href=""><span>[</span>Minhajul <i>Abedin</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">

        <li class="br-menu-item">
          <a href="{{Route('dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->

        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Admin</label>

        {{-- Product Part --}}

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Products</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('manage')}}" class="sub-link">Manage Products</a></li>
            <li class="sub-item"><a href="{{Route('create')}}" class="sub-link">Add Product</a></li>
          </ul>
        </li>
        {{-- Categories Part --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('catmanage')}}" class="sub-link">Manage Category</a></li>
            {{-- <li class="sub-item"><a href="{{Route('catcreate')}}" class="sub-link">Add Category</a></li> --}}
            <li class="sub-item"><a href="{{Route('catmanage')}}" class="sub-link">Add Category</a></li>
          </ul>
        </li>

        {{-- Sub Categories Part --}}
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Sub Category</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{Route('subcategory.manage')}}" class="sub-link">Manage Sub Category</a></li>
                <li class="sub-item"><a a href="{{Route('subcategory.create')}}" class="sub-link">Add Sub Category</a></li>
            </ul>
          </li>

          {{-- Sub Items Part --}}
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Items</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{Route('items.manage')}}" class="sub-link">Manage Item</a></li>
              <li class="sub-item"><a href="{{Route('items.create')}}" class="sub-link">Add Item</a></li>
            </ul>
          </li>
      </ul><!-- br-sideleft-menu -->





      <br>
    </div><!-- br-sideleft -->

    <!-- ########## END: LEFT PANEL ########## -->

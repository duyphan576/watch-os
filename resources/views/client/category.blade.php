<x-client.main.main>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Ladies</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Strap type</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column category-menu">
                  <li>
                    <a href="{{ url('/category') }}"
                      class="nav-link {{ Route::current()->parameter('strapID') == null ? 'active' : '' }}">All</a>
                  </li>
                  @foreach ($straps as $strapFilter)
                  <li>
                    <a href="{{ url('/category/' . $strapFilter->StrapID) }}"
                      class="nav-link {{ $strapFilter->StrapID == Route::current()->parameter('strapID') ? 'active' : '' }}">{{
                      $strapFilter->StrapName }} <span class="badge badge-secondary">{{
                        $strapFilter->products()->count() }}</span></a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i
                      class="fa fa-times-circle"></i> Clear</a></h3>
              </div>
              <div class="card-body">
                <form action="#" method="GET">
                  @if (Request::input('search'))
                  <input type="text" name="search" value="{{ Request::input('search') }}" hidden>
                  @endif
                  <div class="form-group">
                    @foreach ($brands as $brand)
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="brand[]" value="{{ $brand->BrandID }}" {{ Request::get('brand') &&
                          in_array($brand->BrandID, Request::get('brand')) ? 'checked' : '' }}> {{ $brand->BrandName }}
                      </label>
                    </div>
                    @endforeach
                  </div>
                  <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            <!-- *** MENUS AND FILTERS END ***-->
          </div>
          <div class="col-lg-9">
            <div class="box info-bar">
              <div class="row">
                <div class="col-md-12 col-lg-4 products-showing">Showing <strong>{{$products->count()}}</strong> of
                  <strong>{{$products->total()}}</strong>
                  products
                </div>
              </div>
            </div>
            <div class="row products">
              @foreach ($products as $product)
              <x-client.category.item>
                <x-slot:id>{{ $product->ProductID }}</x-slot:id>
                <x-slot:image>{{ asset('assets/image/product/' . $product->Image) }}</x-slot:image>
                <x-slot:name>{{ $product->ProductName }}</x-slot:name>
                <x-slot:price>{!! number_format($product->Price, 0, '', '.') . ' &#8363' !!}</x-slot:price>
              </x-client.category.item>
              @endforeach
            </div>
            <div class="pages">
              {{ $products->links('components/client/category/pagination') }}
            </div>
          </div>
          <!-- /.col-lg-9-->
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>
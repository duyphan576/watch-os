<x-client.main.main>
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Checkout - Address</li>
              </ol>
            </nav>
          </div>
          <div id="checkout" class="col-lg-9">
            <div class="box">
              <form method="POST" action="">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <h1>Checkout - Address</h1>
                <div class="nav flex-column flex-md-row nav-pills text-center">
                  <a href="checkout1" class="nav-link flex-sm-fill text-sm-center active">
                    <i class="fa fa-map-marker"> </i>Address
                  </a>
                  <a href="#" class="nav-link flex-sm-fill text-sm-center disabled">
                    <i class="fa fa-truck"> </i>Delivery Method
                  </a>
                  <a href="#" class="nav-link flex-sm-fill text-sm-center disabled">
                    <i class="fa fa-money"> </i>Payment Method
                  </a>
                  <a href="#" class="nav-link flex-sm-fill text-sm-center disabled">
                    <i class="fa fa-eye"> </i>Order Review
                  </a>
                </div>
                <div class="content py-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Fullname</label>
                        <input id="firstname" name="fullname" type="text" class="form-control"
                          value="{{ $user->Fullname }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" class="form-control"
                          value="{{ $user->Address }}">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" name="phone" type="tel" class="form-control" value="{{ $user->Phone }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                </div>
                <div class="box-footer d-flex justify-content-between"><a href="basket"
                    class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                  <button type="submit" class="btn btn-primary">Continue to Delivery Method<i
                      class="fa fa-chevron-right"></i></button>
                </div>
              </form>
            </div>
            <!-- /.box-->
          </div>
          <!-- /.col-lg-9-->
          <div class="col-lg-3">
            <div id="order-summary" class="card">
              <div class="card-header">
                <h3 class="mt-4 mb-4">Order summary</h3>
              </div>
              <div class="card-body">
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.
                </p>
                @include('components.client.cart.bill')
              </div>
            </div>
          </div>
          <!-- /.col-lg-3-->
        </div>
      </div>
    </div>
  </div>
</x-client.main.main>
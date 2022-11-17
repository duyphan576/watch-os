<x-admin.main.main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Product</h3>
                    <a href="{{ url('admin/product/add') }}"><button type="button"
                            class="btn btn-success">Add</button></a>
                </div>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Strap</th>
                            <th scope="col">Price</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php($counter = 1)
                        @foreach ($products as $product)
                        <x-admin.product.product-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$product->ProductName}}</x-slot:name>
                            <x-slot:brand>{{$product->brand->BrandName}}</x-slot:brand>
                            <x-slot:strap>{{$product->strap->StrapName}}</x-slot:strap>
                            <x-slot:price>{{$product->Price}}</x-slot:price>
                            <x-slot:id>{{$product->ProductID}}</x-slot:id>
                        </x-admin.product.product-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete this item ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form method="POST" action="{{ route('deleteProduct') }}">
                            @csrf
                            <input type="text" id="idToDel" name="productID" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:script>
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>
    </x-slot:script>
</x-admin.main.main>
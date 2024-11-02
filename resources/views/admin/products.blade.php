@extends('admin.layout.app')
@section('products')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title2">Products Data</h5>
                <a href="/add-product" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="bi bi-plus"></i> Add Product
                </a>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 10%;">Name</th>
                        <th style="width: 10%;">Color</th>
                        <th style="width: 10%;">Material</th>
                        <th style="width: 30%;">Description</th>
                        <th style="width: 12%;">Size Chart</th>
                        <th style="width: 13%;">Image</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bedroom Linen</td>
                        <td>Red, White, Black</td>
                        <td>Linen</td>
                        <td class="scrollable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            temporincididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                        <td>200x300cm</td>
                        <td><img src="assets/img/logo360.png" alt="" class="responsive-img"></td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="productColor" class="form-label">Color</label>
                            <input type="text" class="form-control" id="productColor" name="product_color" required>
                        </div>
                        <div class="mb-3">
                            <label for="productMaterial" class="form-label">Material</label>
                            <input type="text" class="form-control" id="productMaterial" name="product_material"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="productDescription" name="product_description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productSize" class="form-label">Size Chart</label>
                            <input type="text" class="form-control" id="productSize" name="product_size_chart" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="productImage" name="product_image" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

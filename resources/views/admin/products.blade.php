@extends('admin.layout.app')
@section('products')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title2">Products Data</h5>
                <a href="{{ route('products.create') }}" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#addProductModal">
                    <i class="bi bi-plus"></i> Add Product
                </a>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 6%;">No</th>
                        <th style="width: 13%;">Name</th>
                        <th style="width: 12%;">Category</th>
                        <th style="width: 10%;">Color</th>
                        <th style="width: 11%;">Material</th>
                        <th style="width: 27%;">Description</th>
                        <th style="width: 10%;">Size Chart</th>
                        <th style="width: 10%;">Image</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category->category_name }}</td>
                            <td>{{ $product->product_color }}</td>
                            <td>{{ $product->product_material }}</td>
                            <td class="scrollable">{{ $product->product_description }}</td>
                            <td>{{ $product->product_size_chart }}</td>
                            <td>
                                @if ($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image"
                                        class="responsive-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-warning mb-2"
                                    data-product="{{ json_encode($product) }}">Edit</a>
                                <button type="button" class="btn btn-danger"
                                    onclick="confirmDeleteProduct({{ $product->id }})">Delete</button>

                                <form id="delete-form-{{ $product->id }}"
                                    action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="productCategory" class="form-label">Category</label>
                            <select class="form-select" id="productCategory" name="product_category_id" required>
                                <option value="" disabled selected>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
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

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editProductForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editProductId" name="product_id">

                        <div class="mb-3">
                            <label for="editProductCategory" class="form-label">Category</label>
                            <select class="form-select" id="editProductCategory" name="product_category_id" required>
                                <option value="" disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editProductName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="editProductName" name="product_name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductColor" class="form-label">Color</label>
                            <input type="text" class="form-control" id="editProductColor" name="product_color"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductMaterial" class="form-label">Material</label>
                            <input type="text" class="form-control" id="editProductMaterial" name="product_material"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editProductDescription" name="product_description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editProductSize" class="form-label">Size Chart</label>
                            <input type="text" class="form-control" id="editProductSize" name="product_size_chart"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="editProductImage" name="product_image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editProductModal = new bootstrap.Modal(document.getElementById('editProductModal'));

            document.querySelectorAll('.btn-warning').forEach(button => {
                button.addEventListener('click', function() {
                    const product = JSON.parse(this.getAttribute('data-product'));

                    // Set form action dynamically
                    document.getElementById('editProductForm').action = `/products/${product.id}`;

                    // Populate form fields
                    document.getElementById('editProductId').value = product.id;
                    document.getElementById('editProductCategory').value = product
                        .product_category_id;
                    document.getElementById('editProductName').value = product.product_name;
                    document.getElementById('editProductColor').value = product.product_color;
                    document.getElementById('editProductMaterial').value = product.product_material;
                    document.getElementById('editProductDescription').value = product
                        .product_description;
                    document.getElementById('editProductSize').value = product.product_size_chart;

                    // Show the modal
                    editProductModal.show();
                });
            });
        });
    </script>
    <script>
        function confirmDeleteProduct(productId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete this product? This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${productId}`).submit();
                }
            });
        }
    </script>
@endsection

@extends('admin.layout.app')
@section('categories')
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
                <h5 class="card-title2">Categories Data</h5>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="bi bi-plus"></i> Add category
                </button>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 7%">No.</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 48%;">Description</th>
                        <th style="width: 15%;">Image</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <!-- Menggunakan $index untuk nomor -->
                        <tr>
                            <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor -->
                            <td>{{ $category->category_name }}</td>
                            <td class="scrollable">{{ $category->category_description }}</td>
                            <td>
                                @if ($category->category_image)
                                    <img src="{{ asset('storage/' . $category->category_image) }}" alt="Category Image"
                                        class="responsive-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCategoryModal"
                                    data-category-id="{{ $category->id }}"
                                    data-category-name="{{ $category->category_name }}"
                                    data-category-description="{{ $category->category_description }}"
                                    data-category-image="{{ $category->category_image }}">Edit</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="confirmDelete({{ $category->id }}, {{ $category->products->count() }})">Delete</button>

                                <form id="delete-form-{{ $category->id }}"
                                    action="{{ route('categories.destroy', $category->id) }}" method="POST"
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

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="category_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="categoryDescription" name="category_description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoryImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="categoryImage" name="category_image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" id="editCategoryForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editCategoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="editCategoryName" name="category_name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editCategoryDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editCategoryDescription" name="category_description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editCategoryImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="editCategoryImage" name="category_image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script to populate modal with data -->
    <script>
        const editCategoryModal = document.getElementById('editCategoryModal');
        editCategoryModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-category-id');
            const name = button.getAttribute('data-category-name');
            const description = button.getAttribute('data-category-description');
            const image = button.getAttribute('data-category-image');

            const form = document.getElementById('editCategoryForm');
            form.action = `/categories/${id}`;
            document.getElementById('editCategoryName').value = name;
            document.getElementById('editCategoryDescription').value = description;
        });
    </script>
    <script>
        function confirmDelete(categoryId, productCount) {
            if (productCount > 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Cannot Delete',
                    text: 'This category has related products and cannot be deleted.',
                    confirmButtonText: 'OK'
                });
            } else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${categoryId}`).submit();
                    }
                });
            }
        }
    </script>
@endsection

@extends('admin.layout.app')
@section('testimonials')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title2">Testimonials</h5>
                <a href="/add-category" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
                    <i class="bi bi-plus"></i> Add Testimonial
                </a>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 20%;">Logo</th>
                        <th style="width: 50%;">Review</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Surya</td>
                        <td><img src="assets/img/logo360.png" alt="" class="responsive-img"></td>
                        <td class="scrollable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            temporincididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
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

    <!-- Add Testimonial Modal -->
    <div class="modal fade" id="addTestimonialModal" tabindex="-1" aria-labelledby="addTestimonialModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTestimonialModalLabel">Add Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="testimonialName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="testimonialName" name="customer_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="testimonialLogo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="testimonialLogo" name="customer_logo">
                        </div>
                        <div class="mb-3">
                            <label for="testimonialReview" class="form-label">Review</label>
                            <textarea class="form-control" id="testimonialReview" name="customer_review" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

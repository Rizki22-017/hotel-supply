@extends('admin.layout.app')
@section('testimonials')
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
                <h5 class="card-title2">Testimonials</h5>
                <a href="/add-category" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
                    <i class="bi bi-plus"></i> Add Testimonial
                </a>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 7%;">No</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 20%;">Logo</th>
                        <th style="width: 43%;">Review</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $index => $testimoni)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $testimoni->customer_name }}</td>
                            <td>
                                @if ($testimoni->customer_logo)
                                    <img src="{{ asset('storage/' . $testimoni->customer_logo) }}" alt="Customer Image"
                                        class="responsive-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td class="scrollable"> {{ $testimoni->customer_review }}</td>
                            <td>
                                <button class="btn btn-warning" onclick="editTestimonial({{ $testimoni }})"
                                    data-bs-toggle="modal" data-bs-target="#editTestimonialModal">Edit</button>
                                <form action="{{ route('testimonials.destroy', $testimoni->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

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

    <!-- Edit Testimonial Modal -->
    <div class="modal fade" id="editTestimonialModal" tabindex="-1" aria-labelledby="editTestimonialModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editTestimonialForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editTestimonialModalLabel">Edit Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editTestimonialName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editTestimonialName" name="customer_name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editTestimonialLogo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="editTestimonialLogo" name="customer_logo">
                        </div>
                        <div class="mb-3">
                            <label for="editTestimonialReview" class="form-label">Review</label>
                            <textarea class="form-control" id="editTestimonialReview" name="customer_review" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editTestimonial(testimonial) {
            // Set form action dynamically
            document.getElementById('editTestimonialForm').action = '/testimonials/' + testimonial.id;

            // Set form values
            document.getElementById('editTestimonialName').value = testimonial.customer_name;
            document.getElementById('editTestimonialReview').value = testimonial.customer_review;

            // Check if logo exists
            if (testimonial.customer_logo) {
                document.getElementById('editTestimonialLogo').required = false;
            }
        }
    </script>
@endsection

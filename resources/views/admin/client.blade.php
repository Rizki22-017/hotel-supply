@extends('admin.layout.app')

@section('client')
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
                <h5 class="card-title2">Client's Logo</h5>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClientModal">
                    <i class="bi bi-plus"></i> Add client's logo
                </button>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th style="width: 7%">No.</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 15%;">Logo</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $index => $client)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $client->name }}</td>
                            <td>
                                @if ($client->logo)
                                    <img src="{{ asset('storage/' . $client->logo) }}" alt="Client's Logo"
                                        class="responsive-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick="confirmDelete({{ $client->id }})">Delete</button>

                                <form id="delete-form-{{ $client->id }}"
                                    action="{{ route('clients.destroy', $client->id) }}" method="POST"
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

    <!-- Add Client Modal -->
    <div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addClientModalLabel">Add Client's Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="clientName" class="form-label">Client's Name</label>
                            <input type="text" class="form-control" id="clientName" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Client</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script to confirm delete -->
    <script>
        function confirmDelete(clientId) {
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
                    document.getElementById(`delete-form-${clientId}`).submit();
                }
            });
        }
    </script>
@endsection

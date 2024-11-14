@extends('admin.layout.app')
@section('about')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: `
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                `,
                showConfirmButton: true
            });
        </script>
    @endif


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title2">About Company</h5>
                <div class="d-flex">
                    <a href="{{ route('abouts.create') }}" class="btn btn-primary me-2">
                        <i class="bi bi-plus"></i> Add About
                    </a>
                    <a href="{{ route('abouts.edit') }}" class="btn btn-warning me-2">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('abouts.destroy') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this item?');" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>

            @foreach ($abouts as $about)
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Highlight
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            aria-expanded="true">
                            <div class="accordion-body">
                                {{ $about->highlight }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Description
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                                {{ $about->about_desc }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Core Value
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <ul>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Left</p>
                                            @foreach (json_decode($about->about_poin1) ?? [] as $point1)
                                                <li>{{ $point1 }}</li>
                                            @endforeach


                                        </div>
                                        <div class="col-6">
                                            <p>Right</p>
                                            @foreach (json_decode($about->about_poin2) ?? [] as $point2)
                                                <li>{{ $point2 }}</li>
                                            @endforeach

                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                CEO's Photo
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4">
                            <div class="accordion-body">
                                {{-- {{$about->leader_pict}} --}}
                                @if ($about->leader_pict)
                                    <img src="{{ asset('storage/' . $about->leader_pict) }}" alt="Product Image"
                                        class="responsive-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                CEO's Name
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5">
                            <div class="accordion-body">
                                {{ $about->leader_name }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Telp (office)
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6">
                            <div class="accordion-body">
                                {{ $about->phone }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                History
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7">
                            <div class="accordion-body">
                                {{ $about->history }}
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Special Offers
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8">
                            <div class="accordion-body">
                                <ul>
                                    @foreach (json_decode($about->brand) as $brand)
                                        <li>{{ $brand }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Vission
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9">
                            <div class="accordion-body">
                                {{ $about->vision }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Mission
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10">
                            <div class="accordion-body">
                                @foreach (json_decode($about->mission) as $mission)
                                    <li>{{ $mission }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Address
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11">
                            <div class="accordion-body">
                                {{ $about->address }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                WhatsApp Number (Sumatera)
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12">
                            <div class="accordion-body">
                                {{ $about->wa_sumatera }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                WhatsApp Number (Jawa & Bali)
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13">
                            <div class="accordion-body">
                                {{ $about->wa_jawa }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Email
                            </button>
                        </h2>
                        <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14">
                            <div class="accordion-body">
                                {{ $about->email }}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="accordion-item">
                        <h2 class="accordion-header" id="heading15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Operational Hours
                            </button>
                        </h2>
                        <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15">
                            <div class="accordion-body">
                                {{ $about->operational }}
                            </div>
                        </div>
                    </div> --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading16">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Link Twitter
                            </button>
                        </h2>
                        <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16">
                            <div class="accordion-body">
                                {{ $about->twitter }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Link Facebook
                            </button>
                        </h2>
                        <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17">
                            <div class="accordion-body">
                                {{ $about->facebook }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading18">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Link Instagram
                            </button>
                        </h2>
                        <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18">
                            <div class="accordion-body">
                                {{ $about->instagram }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading19">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Link Linkedin
                            </button>
                        </h2>
                        <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19">
                            <div class="accordion-body">
                                {{ $about->linkedin }}
                            </div>
                        </div>
                    </div>
                </div><!-- End Default Accordion Example -->
            @endforeach
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
@endsection

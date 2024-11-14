@extends('admin.layout.app')
@section('about')

    <div class="card container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>OPS!!</strong> Terdapat masalah dalam input kamu! <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row container py-5 px-3">
                <div class="mb-3">
                    <label for="highlight" class="form-label">Highlight</label>
                    <input class="form-control" type="text" name="highlight"
                        placeholder="Enter your company highlight here" aria-label="default input example" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="about_desc" class="col-sm-6 col-form-label">Description</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="about_desc" placeholder="Enter your company description here"
                            required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label class="col-sm-2 col-form-label">Core Value</label>
                    <div class="row">
                        <div class="col-6" id="about-points-container">
                            @for ($i = 0; $i < 3; $i++)
                                <input type="text" class="form-control mb-2" name="about_poin1[]" for="about_poin1">
                            @endfor
                        </div>
                        <div class="col-6" id="about-points-container">
                            @for ($i = 0; $i < 3; $i++)
                                <input type="text" class="form-control mb-2" name="about_poin2[]" for="about_poin1">
                            @endfor
                        </div>
                    </div>
                    {{-- <small class="form-text text-muted">Wajib Isi 6 Point</small> --}}
                </div>

                <div class="col-12 mb-3">
                    <label for="leader_pict" class="col-sm-2 col-form-label">CEO's Photo</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="leader_pict">
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="leader_name" class="col-sm-2 col-form-label">CEO's Name</label>
                    <div class="col-12">
                        <input class="form-control" name="leader_name" placeholder="Enter your company's CEO name here"
                            required></input>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Office Phone Number</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="phone"
                            placeholder="Enter your company's phone number here" required>
                    </div>
                </div>

                {{-- <div class="col-12 mb-3">
                    <label for="history" class="col-sm-2 col-form-label">History</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="history" required></textarea>
                    </div>
                </div> --}}

                {{-- <div class="col-12 mb-3">
                    <label for="brand" class="col-sm-2 col-form-label">Special Offers</label>
                    <div class="col-12" id="offers-container">
                        @for ($i = 0; $i < 6; $i++)
                            <input type="text" class="form-control mb-2" name="brand[]" required>
                        @endfor
                    </div>
                    <small class="form-text text-muted">Total 6 input untuk Special Offers.</small>
                </div> --}}

                <div class="col-12 mb-3">
                    <label for="vision" class="col-sm-2 col-form-label">Vision</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="vision" placeholder="Enter your company's vision here"
                            required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="mission" class="col-sm-2 col-form-label">Mission</label>
                    <div class="col-12">
                        @for ($i = 0; $i < 5; $i++)
                            <input type="text" class="form-control mb-2" name="mission[]">
                        @endfor
                    </div>
                    {{-- <small class="form-text text-muted">Wajib Isi Semua</small> --}}
                </div>

                <div class="col-12 mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="address" placeholder="Enter your company's address here"
                            required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="wa_sumatera" class="col-sm-6 col-form-label">Sumatra WhatsApp Number</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="wa_sumatera"
                            placeholder="Enter your company's WhatsApp number here" required pattern="^\+?[0-9]{10,15}$">
                        <small class="form-text text-muted">Ex: +6281234567890</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="wa_jawa" class="col-sm-6 col-form-label">Jawa & Bali WhatsApp Numbers</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="wa_jawa"
                            placeholder="Enter your company's WhatsApp number here" required pattern="^\+?[0-9]{10,15}$">
                        <small class="form-text text-muted">Ex: +6281234567890</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-12">
                        <input type="email" class="form-control" name="email"
                            placeholder="Enter your company email here" required>
                        <small class="form-text text-muted">Ex: example@gmail.com</small>
                    </div>
                </div>

                {{-- <div class="col-12 mb-3">
                    <label for="operational" class="col-sm-2 col-form-label">Operational Hours</label>
                    <div class="col-12">
                        <input type="text" class="form-control" name="operational"
                            placeholder="Ex: 08:00 - 17:00" required>
                        <small class="form-text text-muted">Format: Hari, Jam buka - tutup</small>
                    </div>
                </div> --}}

                <div class="col-12 mb-3">
                    <label for="twitter" class="col-sm-2 col-form-label">Link Twitter</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="twitter"
                            placeholder="Enter your company's twitter URL here" required>
                        <small class="form-text text-muted">Ex: https://www.twitter.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="facebook" class="col-sm-2 col-form-label">Link Facebook</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="facebook"
                            placeholder="Enter your company's facebook URL here" required>
                        <small class="form-text text-muted">Ex: https://www.facebook.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="instagram" class="col-sm-2 col-form-label">Link Instagram</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="instagram"
                            placeholder="Enter your company's instagram URL here" required>
                        <small class="form-text text-muted">Ex: https://www.instagram.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="linkedin" class="col-sm-2 col-form-label">Link Linkedin</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="linkedin"
                            placeholder="Enter your company's linkedin URL here" required>
                        <small class="form-text text-muted">Ex: https://www.linkedin.com/username</small>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-primary" type="submit">Submit Data</button>
                </div>
            </div>
        </form>
    </div>

@endsection

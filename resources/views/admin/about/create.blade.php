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
                    <input class="form-control" type="text" name="highlight" placeholder="Be Creative Be Innovative" aria-label="default input example">
                </div>
                <div class="col-12 mb-3">
                    <label for="about_desc" class="col-sm-6 col-form-label">About Description</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="about_desc" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="about_poin" class="col-sm-2 col-form-label">About Points</label>
                    <div class="col-12">

                        <input type="text" class="form-control mb-2" name="about_poin[]" value="{{ $point ?? '' }}" required>


                        <small class="form-text text-muted">Add or remove points as needed.</small>
                    </div>
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
                        <textarea class="form-control" style="height: 100px" name="leader_name" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Nomor Telepon Kantor</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="phone" placeholder="Masukkan nomor telepon" required>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="history" class="col-sm-2 col-form-label">History</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="history" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="brand" class="col-sm-2 col-form-label">Special Offers</label>
                    <div class="col-12">

                            <input type="text" class="form-control mb-2" name="brand[]" value="{{ $offer ?? '' }}" required>



                        <small class="form-text text-muted">Add or remove offers as needed.</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="vision" class="col-sm-2 col-form-label">Vision</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="vision" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="mission" class="col-sm-2 col-form-label">Mission</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="mission" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="address" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="wa_sumatera" class="col-sm-6 col-form-label">Nomor WhatsApp Sumatera</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="wa_sumatera" placeholder="Masukkan nomor WhatsApp" required pattern="^\+?[0-9]{10,15}$">
                        <small class="form-text text-muted">Contoh: +6281234567890</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="wa_jawa" class="col-sm-6 col-form-label">Nomor WhatsApp Jawa & Bali</label>
                    <div class="col-12">
                        <input type="tel" class="form-control" name="wa_jawa"  placeholder="Masukkan nomor WhatsApp" required pattern="^\+?[0-9]{10,15}$">
                        <small class="form-text text-muted">Contoh: +6281234567890</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-12">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
                        <small class="form-text text-muted">Contoh: example@gmail.com</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="operational" class="col-sm-2 col-form-label">Operational Hours</label>
                    <div class="col-12">
                        <input type="text" class="form-control" name="operational" placeholder="Contoh: 08:00 - 17:00" required>
                        <small class="form-text text-muted">Format: Hari, Jam buka - tutup</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="twitter" class="col-sm-2 col-form-label">Link Twitter</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="twitter" placeholder="Masukkan URL media sosial" required>
                        <small class="form-text text-muted">Contoh: https://www.twitter.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="facebook" class="col-sm-2 col-form-label">Link Facebook</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="facebook" placeholder="Masukkan URL media sosial" required>
                        <small class="form-text text-muted">Contoh: https://www.facebook.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="instagram" class="col-sm-2 col-form-label">Link Instagram</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="instagram" placeholder="Masukkan URL media sosial" required>
                        <small class="form-text text-muted">Contoh: https://www.instagram.com/username</small>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="linkedin" class="col-sm-2 col-form-label">Link Linkedin</label>
                    <div class="col-12">
                        <input type="url" class="form-control" name="linkedin" placeholder="Masukkan URL media sosial" required>
                        <small class="form-text text-muted">Contoh: https://www.linkedin.com/username</small>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-primary" type="submit">Submit Data</button>
                </div>
            </div>
        </form>
    </div>

@endsection
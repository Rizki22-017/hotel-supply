@extends('admin.layout.app')
@section('about')

    <div class="container">
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

        <form action="{{ route('abouts.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12 mb-3">
                <label for="highlight" class="col-sm-2 col-form-label">Highlight</label>
                <div class="col-12">
                    <textarea class="form-control" style="height: 100px" name="highlight" required>{{ old('highlight', $about->highlight) }}</textarea>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="about_desc" class="col-sm-6 col-form-label">About Description</label>
                <div class="col-12">
                    <textarea class="form-control" style="height: 100px" name="about_desc" required>{{ old('about_desc', $about->about_desc) }}</textarea>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label class="col-sm-2 col-form-label">Core Value</label>
                <div class="row">
                    <div class="col-6" for="about_poin1">
                        @for ($i = 0; $i < 3; $i++)
                            <input type="text" class="form-control mb-2" name="about_poin1[]"
                                value="{{ old('about_poin1.' . $i, json_decode($about->about_poin1)[$i] ?? '') }}">
                        @endfor
                    </div>
                    <div class="col-6" for="about_poin2">
                        @for ($i = 0; $i < 3; $i++)
                            <input type="text" class="form-control mb-2" name="about_poin2[]"
                                value="{{ old('about_poin2.' . $i, json_decode($about->about_poin2)[$i] ?? '') }}">
                        @endfor
                    </div>
                </div>
            </div>


            <div class="col-12 mb-3">
                <label for="leader_pict" class="col-sm-2 col-form-label">CEO's Photo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="leader_pict">
                    <small class="form-text text-muted">Current photo: <img src="{{ asset($about->leader_pict) }}"
                            alt="Product Image" class="responsive-img">
                    </small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="leader_name" class="col-sm-2 col-form-label">CEO's Name</label>
                <div class="col-12">
                    <textarea class="form-control" style="height: 100px" name="leader_name" required>{{ old('leader_name', $about->leader_name) }}</textarea>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Office Phone Number</label>
                <div class="col-12">
                    <input type="tel" class="form-control" name="phone" value="{{ old('phone', $about->phone) }}"
                        placeholder="Edit your office phone number">
                </div>
            </div>

            {{-- <div class="col-12 mb-3">
        <label for="history" class="col-sm-2 col-form-label">History</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="history" required>{{ old('history', $about->history) }}</textarea>
        </div>
    </div> --}}

            {{-- <div class="col-12 mb-3">
        <label for="brand" class="col-sm-2 col-form-label">Special Offers</label>
        <div class="col-12">
            @for ($i = 0; $i < 3; $i++)
                <input type="text" class="form-control mb-2" name="brand[]" value="{{ old('brand.' . $i,json_decode($about->brand)[$i] ?? '') }}" required>
            @endfor

        </div>
    </div> --}}


            <div class="col-12 mb-3">
                <label for="vision" class="col-sm-2 col-form-label">Vision</label>
                <div class="col-12">
                    <textarea class="form-control" style="height: 100px" name="vision" required>{{ old('vision', $about->vision) }}</textarea>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="mission" class="col-sm-2 col-form-label">Mission</label>
                <div class="col-12">
                    @for ($i = 0; $i < 5; $i++)
                        <input type="text" class="form-control mb-2" name="mission[]"
                            value="{{ old('mission.' . $i, json_decode($about->mission)[$i] ?? '') }}">
                    @endfor
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-12">
                    <textarea class="form-control" style="height: 100px" name="address" required>{{ old('address', $about->address) }}</textarea>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="wa_sumatera" class="col-sm-2 col-form-label">Sumatra WhatsApp Number</label>
                <div class="col-12">
                    <input type="tel" class="form-control" name="wa_sumatera"
                        value="{{ old('wa_sumatera', $about->wa_sumatera) }}" placeholder="Masukkan nomor WhatsApp"
                        required pattern="^\+?[0-9]{10,15}$">
                    <small class="form-text text-muted">Ex: +6281234567890</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="wa_jawa" class="col-sm-2 col-form-label">Jawa & Bali WhatsApp Numbers</label>
                <div class="col-12">
                    <input type="tel" class="form-control" name="wa_jawa"
                        value="{{ old('wa_jawa', $about->wa_jawa) }}" placeholder="Masukkan nomor WhatsApp" required
                        pattern="^\+?[0-9]{10,15}$">
                    <small class="form-text text-muted">Ex: +6281234567890</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-12">
                    <input type="email" class="form-control" name="email" value="{{ old('email', $about->email) }}"
                        placeholder="Masukkan email" required>
                    <small class="form-text text-muted">Ex: example@gmail.com</small>
                </div>
            </div>

            {{-- <div class="col-12 mb-3">
        <label for="operational" class="col-sm-2 col-form-label">Operational Hours</label>
        <div class="col-12">
            <input type="text" class="form-control" name="operational" value="{{ old('operational', $about->operational) }}" placeholder="Contoh: 08:00 - 17:00" required>
            <small class="form-text text-muted">Format: Hari, Jam buka - tutup</small>
        </div>
    </div> --}}

            <div class="col-12 mb-3">
                <label for="twitter" class="col-sm-2 col-form-label">Link Twitter</label>
                <div class="col-12">
                    <input type="url" class="form-control" name="twitter"
                        value="{{ old('twitter', $about->twitter) }}" placeholder="Insert URL Twitter" required>
                    <small class="form-text text-muted">Contoh: https://www.twitter.com/username</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="facebook" class="col-sm-2 col-form-label">Link Facebook</label>
                <div class="col-12">
                    <input type="url" class="form-control" name="facebook"
                        value="{{ old('facebook', $about->facebook) }}" placeholder="Insert URL Facebook" required>
                    <small class="form-text text-muted">Contoh: https://www.facebook.com/username</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="instagram" class="col-sm-2 col-form-label">Link Instagram</label>
                <div class="col-12">
                    <input type="url" class="form-control" name="instagram"
                        value="{{ old('instagram', $about->instagram) }}" placeholder="Insert URL Instagram"
                        required>
                    <small class="form-text text-muted">Contoh: https://www.instagram.com/username</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="linkedin" class="col-sm-2 col-form-label">Link Linkedin</label>
                <div class="col-12">
                    <input type="url" class="form-control" name="linkedin"
                        value="{{ old('linkedin', $about->linkedin) }}" placeholder="Insert URL Linkedin" required>
                    <small class="form-text text-muted">Contoh: https://www.linkedin.com/username</small>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="shopee" class="col-sm-12 col-form-label">Link Shopee <small>(Can be empty if it does not exists)</small></label>
                <div class="col-12">
                    <input type="url" class="form-control" name="shopee"
                        value="{{ old('shopee', $about->shopee) }}" placeholder="Insert URL Shopee">
                    <small class="form-text text-muted">Contoh: https://www.shopee.com/username</small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>




@endsection

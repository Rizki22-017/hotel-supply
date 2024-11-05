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

<form action="{{route('abouts.update')}}" method="POST" enctype="multipart/form-data">
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
        <label for="about_poin" class="col-sm-2 col-form-label">About Points</label>
        <div class="col-12">
            @for ($i = 0; $i < 6; $i++)
                <input type="text" class="form-control mb-2" name="about_poin[]" value="{{ old('about_poin.' . $i, $about->about_points[$i] ?? '') }}" required>
            @endfor
            <small class="form-text text-muted">Add or remove points as needed.</small>
        </div>
    </div>


    <div class="col-12 mb-3">
        <label for="leader_pict" class="col-sm-2 col-form-label">CEO's Photo</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile" name="leader_pict">
            <small class="form-text text-muted">Current photo: <img src="{{ asset($about->leader_pict) }}" alt="CEO's Photo" style="max-width: 100px;"></small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="leader_name" class="col-sm-2 col-form-label">CEO's Name</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="leader_name" required>{{ old('leader_name', $about->leader_name) }}</textarea>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="phone" class="col-sm-2 col-form-label">Nomor Telepon Kantor</label>
        <div class="col-12">
            <input type="tel" class="form-control" name="phone" value="{{ old('phone', $about->phone) }}" placeholder="Masukkan nomor telepon" required>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="history" class="col-sm-2 col-form-label">History</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="history" required>{{ old('history', $about->history) }}</textarea>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="brand" class="col-sm-2 col-form-label">Special Offers</label>
        <div class="col-12">
            @for ($i = 0; $i < 6; $i++)
                <input type="text" class="form-control mb-2" name="brand[]" value="{{ old('brand.' . $i, $about->special_offers[$i] ?? '') }}" required>
            @endfor
            <small class="form-text text-muted">Add or remove offers as needed.</small>
        </div>
    </div>


    <div class="col-12 mb-3">
        <label for="vision" class="col-sm-2 col-form-label">Vision</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="vision" required>{{ old('vision', $about->vision) }}</textarea>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="mission" class="col-sm-2 col-form-label">Mission</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="mission" required>{{ old('mission', $about->mission) }}</textarea>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-12">
            <textarea class="form-control" style="height: 100px" name="address" required>{{ old('address', $about->address) }}</textarea>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="wa_sumatera" class="col-sm-2 col-form-label">Nomor WhatsApp Sumatera</label>
        <div class="col-12">
            <input type="tel" class="form-control" name="wa_sumatera" value="{{ old('wa_sumatera', $about->wa_sumatera) }}" placeholder="Masukkan nomor WhatsApp" required pattern="^\+?[0-9]{10,15}$">
            <small class="form-text text-muted">Contoh: +6281234567890</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="wa_jawa" class="col-sm-2 col-form-label">Nomor WhatsApp Jawa & Bali</label>
        <div class="col-12">
            <input type="tel" class="form-control" name="wa_jawa" value="{{ old('wa_jawa', $about->wa_jawa) }}" placeholder="Masukkan nomor WhatsApp" required pattern="^\+?[0-9]{10,15}$">
            <small class="form-text text-muted">Contoh: +6281234567890</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-12">
            <input type="email" class="form-control" name="email" value="{{ old('email', $about->email) }}" placeholder="Masukkan email" required>
            <small class="form-text text-muted">Contoh: example@gmail.com</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="operational" class="col-sm-2 col-form-label">Operational Hours</label>
        <div class="col-12">
            <input type="text" class="form-control" name="operational" value="{{ old('operational', $about->operational) }}" placeholder="Contoh: 08:00 - 17:00" required>
            <small class="form-text text-muted">Format: Hari, Jam buka - tutup</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="twitter" class="col-sm-2 col-form-label">Link Twitter</label>
        <div class="col-12">
            <input type="url" class="form-control" name="twitter" value="{{ old('twitter', $about->twitter) }}" placeholder="Masukkan URL media sosial" required>
            <small class="form-text text-muted">Contoh: https://www.twitter.com/username</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="facebook" class="col-sm-2 col-form-label">Link Facebook</label>
        <div class="col-12">
            <input type="url" class="form-control" name="facebook" value="{{ old('facebook', $about->facebook) }}" placeholder="Masukkan URL media sosial" required>
            <small class="form-text text-muted">Contoh: https://www.facebook.com/username</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="instagram" class="col-sm-2 col-form-label">Link Instagram</label>
        <div class="col-12">
            <input type="url" class="form-control" name="instagram" value="{{ old('instagram', $about->instagram) }}" placeholder="Masukkan URL media sosial" required>
            <small class="form-text text-muted">Contoh: https://www.instagram.com/username</small>
        </div>
    </div>

    <div class="col-12 mb-3">
        <label for="linkedin" class="col-sm-2 col-form-label">Link Linkedin</label>
        <div class="col-12">
            <input type="url" class="form-control" name="linkedin" value="{{ old('linkedin', $about->linkedin) }}" placeholder="Masukkan URL media sosial" required>
            <small class="form-text text-muted">Contoh: https://www.linkedin.com/username</small>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>




@endsection

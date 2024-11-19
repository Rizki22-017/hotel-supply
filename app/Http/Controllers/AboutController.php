<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function home()
    {
        $abouts = About::all();
        return view('content.homepage', compact('abouts'));
    }

    public function create()
    {
        if (About::exists()) {
            return redirect()->back()->withErrors(['error' => 'Hanya boleh ada satu data About. Silahkan pilih edit']);
        }
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        // Batasi hanya ada satu data About
        if (About::exists()) {
            return redirect()->back()->withErrors(['error' => 'Hanya boleh ada satu data About, silahkan pilih edit']);
        }

        // Validasi input
        $request->validate([
            'highlight' => 'required|string',
            'about_desc' => 'required|string',
            'about_poin1' => 'required|array',
            'about_poin2' => 'required|array',
            'leader_pict' => 'image|nullable',
            'leader_name' => 'required|string',
            'phone' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required|array',
            'address' => 'required|string',
            'wa_sumatera' => 'required|string',
            'wa_jawa' => 'required|string',
            'email' => 'required|email',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        // Upload gambar leader jika ada
        // $leader_img_path = $request->file('leader_pict') ? $request->file('leader_pict')->store('abouts', 'public') : null;
        $leader_img_path = null;

        if ($request->hasFile('leader_pict')) {
            // Tentukan lokasi penyimpanan
            $destinationPath = public_path('images/abouts');

            // Buat nama file yang unik
            $fileName = time() . '_' . $request->file('leader_pict')->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $request->file('leader_pict')->move($destinationPath, $fileName);

            // Simpan path relatif untuk keperluan database
            $leader_img_path = 'images/abouts/' . $fileName;
        }

        // dd($request->all());
        // Buat data About baru dengan konversi JSON untuk array fields
        About::create([
            'highlight' => $request->highlight,
            'about_desc' => $request->about_desc,
            'about_poin1' => json_encode($request->about_poin1 ?? []), // Konversi ke JSON dan beri nilai default jika null
            'about_poin2' => json_encode($request->about_poin2 ?? []), // Konversi ke JSON dan beri nilai default jika null
            'leader_pict' => $leader_img_path,
            'leader_name' => $request->leader_name,
            'phone' => $request->phone,
            'vision' => $request->vision,
            'mission' => json_encode($request->mission ?? []), // Konversi ke JSON dan beri nilai default jika null
            'address' => $request->address,
            'wa_sumatera' => $request->wa_sumatera,
            'wa_jawa' => $request->wa_jawa,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil disimpan.');
    }


    public function edit()
    {
        // $about = About::firstOrFail();
        // return view('admin.about.edit', compact('about'));
        $about = About::first();

        if (!$about) {
            return redirect()->route('abouts.create')->withErrors(['error' => 'Data About belum ada, silakan buat terlebih dahulu.']);
        }

        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        // Ambil data About pertama
        $about = About::first();

        // Jika data tidak ada, berikan pesan error
        if (!$about) {
            return redirect()->back()->withErrors(['error' => 'Data About tidak ditemukan.']);
        }

        // Validasi input
        $request->validate([
            'highlight' => 'required|string',
            'about_desc' => 'required|string',
            'about_poin1' => 'required|array',
            'about_poin2' => 'required|array',
            'leader_pict' => 'image|nullable',
            'leader_name' => 'required|string',
            'phone' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required|array',
            'address' => 'required|string',
            'wa_sumatera' => 'required|string',
            'wa_jawa' => 'required|string',
            'email' => 'required|email',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        // Proses gambar baru jika ada
        $leader_img_path = $about->leader_pict; // Path default adalah path lama

        if ($request->hasFile('leader_pict')) {
            // Hapus file lama jika ada
            if ($about->leader_pict && file_exists(public_path($about->leader_pict))) {
                unlink(public_path($about->leader_pict));
            }

            // Tentukan lokasi penyimpanan
            $destinationPath = public_path('images/abouts');

            // Buat nama file yang unik
            $fileName = time() . '_' . $request->file('leader_pict')->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $request->file('leader_pict')->move($destinationPath, $fileName);

            // Simpan path relatif untuk keperluan database
            $leader_img_path = 'images/abouts/' . $fileName;
        }

        // Update data About
        $about->update([
            'highlight' => $request->highlight,
            'about_desc' => $request->about_desc,
            'about_poin1' => json_encode($request->about_poin1 ?? []), // Konversi ke JSON dan beri nilai default jika null
            'about_poin2' => json_encode($request->about_poin2 ?? []), // Konversi ke JSON dan beri nilai default jika null
            'leader_pict' => $leader_img_path,
            'leader_name' => $request->leader_name,
            'phone' => $request->phone,
            'vision' => $request->vision,
            'mission' => json_encode($request->mission ?? []), // Konversi ke JSON dan beri nilai default jika null
            'address' => $request->address,
            'wa_sumatera' => $request->wa_sumatera,
            'wa_jawa' => $request->wa_jawa,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil diperbarui.');
    }


    public function destroy()
    {
        // Ambil data About pertama atau tampilkan 404 jika tidak ditemukan
        $about = About::firstOrFail();

        // Hapus gambar pemimpin jika ada
        if ($about->leader_pict) {
            $imagePath = public_path($about->leader_pict);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus record About dari database
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil dihapus.');
    }
}

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
        $leader_img_path = $request->file('leader_pict') ? $request->file('leader_pict')->store('abouts', 'public') : null;
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
        $about = About::firstOrFail();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'highlight' => 'required|string',
            'about_desc' => 'required|string',
            'about_poin1' => 'required|array',
            'about_poin2' => 'required|array',
            'leader_pict' => 'image|nullable',
            'leader_name' => 'required|string',
            'phone' => 'required|string',
            // 'history' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required|array',
            // 'brand' => 'required|array',
            'address' => 'required|string',
            'wa_sumatera' => 'required|string',
            'wa_jawa' => 'required|string',
            'email' => 'required|email',
            // 'operational' => 'required|string',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        $about = About::first();

        // Update data About
        $about->highlight = $request->highlight;
        $about->about_desc = $request->about_desc;
        $about->about_poin1 = json_encode($request->about_poin1);
        $about->about_poin2 = json_encode($request->about_poin2);
        $about->leader_name = $request->leader_name;
        $about->phone = $request->phone;
        $about->vision = $request->vision;
        $about->mission = json_encode($request->mission);
        $about->address = $request->address;
        $about->wa_sumatera = $request->wa_sumatera;
        $about->wa_jawa = $request->wa_jawa;
        $about->email = $request->email;
        $about->twitter = $request->twitter;
        $about->facebook = $request->facebook;
        $about->instagram = $request->instagram;
        $about->linkedin = $request->linkedin;

        if ($request->hasFile('leader_pict')) {
            if ($about->leader_pict) {
                Storage::delete($about->leader_pict);
            }
            $leader_img_path = $request->file('leader_pict')->store('abouts', 'public');
        } else {
            $leader_img_path = $about->leader_pict;
        }

        $about->save();

        // $about->update([
        //     'highlight' => $request->highlight,
        //     'about_desc' => $request->about_desc,
        //     'about_poin1' => json_encode($request->about_poin1),
        //     'about_poin2' => json_encode($request->about_poin2),
        //     'leader_pict' => $leader_img_path,
        //     'leader_name' => $request->leader_name,
        //     'phone' => $request->phone,
        //     // 'history' => $request->history,
        //     'vision' => $request->vision,
        //     'mission' => json_encode($request->mission),
        //     // 'brand' => json_encode($request->brand),
        //     'address' => $request->address,
        //     'wa_sumatera' => $request->wa_sumatera,
        //     'wa_jawa' => $request->wa_jawa,
        //     'email' => $request->email,
        //     // 'operational' => $request->operational,
        //     'twitter' => $request->twitter,
        //     'facebook' => $request->facebook,
        //     'instagram' => $request->instagram,
        //     'linkedin' => $request->linkedin,
        // ]);

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil diperbarui.');
    }

    public function destroy()
    {
        $about = About::firstOrFail(); // Mengambil record About pertama

        // Hapus gambar pemimpin jika ada
        if ($about->leader_pict) {
            Storage::delete($about->leader_pict);
        }

        // Hapus record About
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil dihapus.');
    }
}

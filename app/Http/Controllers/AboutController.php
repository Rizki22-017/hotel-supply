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

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'highlight' => 'required|string',
            'about_desc' => 'required|string',
            'about_poin' => 'required',
            'leader_pict' => 'image|nullable',
            'leader_name' => 'required|string',
            'phone' => 'required|string',
            'history' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required',
            'brand' => 'required',
            'address' => 'required|string',
            'wa_sumatera' => 'required|string',
            'wa_jawa' => 'required|string',
            'email' => 'required|email',
            'operational' => 'required|string',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        $leader_img_path = $request->file('leader_pict') ? $request->file('leader_pict')->store('leader_images') : null;

        About::create([
            'highlight' => $request->highlight,
            'about_desc' => $request->about_desc,
            'about_poin' => json_encode($request->about_poin),
            'leader_pict' => $leader_img_path,
            'leader_name' => $request->leader_name,
            'phone' => $request->phone,
            'history' => $request->history,
            'vision' => $request->vision,
            'mission' => json_encode($request->mission),
            'brand' => json_encode($request->brand),
            'address' => $request->address,
            'wa_sumatera' => $request->wa_sumatera,
            'wa_jawa' => $request->wa_jawa,
            'email' => $request->email,
            'operational' => $request->operational,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil disimpan.');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'highlight' => 'required|string',
            'about_desc' => 'required|string',
            'about_poin' => 'required',
            'leader_pict' => 'image|nullable',
            'leader_name' => 'required|string',
            'phone' => 'required|string',
            'history' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required',
            'brand' => 'required',
            'address' => 'required|string',
            'wa_sumatera' => 'required|string',
            'wa_jawa' => 'required|string',
            'email' => 'required|email',
            'operational' => 'required|string',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        $about = About::findOrFail($id);

        if ($request->file('leader_pict')) {
            if ($about->leader_pict) {
                Storage::delete($about->leader_pict);
            }
            $leader_img_path = $request->file('leader_pict')->store('leader_images');
        } else {
            $leader_img_path = $about->leader_pict;
        }

        $about->update([
            'highlight' => $request->highlight,
            'about_desc' => $request->about_desc,
            'about_poin' => json_encode($request->about_poin),
            'leader_pict' => $leader_img_path,
            'leader_name' => $request->leader_name,
            'phone' => $request->phone,
            'history' => $request->history,
            'vision' => $request->vision,
            'mission' => json_encode($request->mission),
            'brand' => json_encode($request->brand),
            'address' => $request->address,
            'wa_sumatera' => $request->wa_sumatera,
            'wa_jawa' => $request->wa_jawa,
            'email' => $request->email,
            'operational' => $request->operational,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil diperbarui.');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\areaStatus;

Route::get('/', function () {
    // Tidak perlu baca json disini juga
    return redirect()->route('beranda');
});

Route::get('/beranda', function () {
    return view('index');
})->name('beranda');

Route::get('/hal2', function () {
    return view('hal2');
})->name('hal2');

// --- AREA MONITORING ROUTES ---
// Cukup return view saja. Data diambil oleh JS di browser.

Route::get('/area-a', function () {
    return view('area-a');
})->name('area-a');

Route::get('/area-b', function () {
    return view('area-b');
})->name('area-b');

Route::get('/area-c', function () {
    return view('area-c');
})->name('area-c');

Route::get('/area-monitoring', function () {
    return view('area-monitoring');
})->name('area-monitoring');

// Route lain biarkan saja jika hanya halaman statis
Route::get('/hint', function () { return view('hint'); });
Route::get('/rapi', function () { return view('rapi'); })->name('rapi');
Route::get('/jd1', function () { return view('jd1'); })->name('jd1');

/// OLD CODE
// Route::get('/', function () {
//     $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     // dd($data);
//     return redirect()->route('beranda');
// });

// Route::get('/beranda', function () {
//     return view('index');
// })->name('beranda');

// Route::get('/hal2', function () {
//     return view('hal2');
// })->name('hal2');

// Route::get('/area-a', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_A'];
//     // dd($data);
//     return view('area-a',compact('data'));
// })->name('area-a');

// Route::get('/area-b', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_B'];
//     // dd($data);
//     return view('area-b',compact('data'));
// })->name('area-b');

// Route::get('/area-c', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_C'];
//     // dd($data);
//     return view('area-c',compact('data'));
// })->name('area-c');

// Route::get('/area-monitoring', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_C'];
//     // dd($data);
//     return view('area-monitoring');
// })->name('area-monitoring');
// Route::get('/hint', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_C'];
//     // dd($data);
//     return view('hint');
// })->name('area-monitoring');


// Route::get('/rapi', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_C'];
//     // dd($data);
//     return view('rapi');
// })->name('rapi');


// Route::get('/jd1', function () {
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
//     // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_C'];
//     // dd($data);
//     return view('jd1');
// })->name('jd1');

// Route::get('/status/{areaName}', areaStatus::class)->name('api.parking.status');


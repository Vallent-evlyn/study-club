<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Product;
use App\http\Controllers\StudentController;

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// Route::get('/tampilan', function () {
//     return view('tampilan');
// });

// Route::get('/tampilan/{nilai}-{nilai2}', function ($nilai, $nilai2) {
//     return view('tampilan', [
//         'nilai_1' => $nilai,
//         'nilai_2' => $nilai2
//     ]);
// });

// Route::get('/latihan/{nama}/{asal_daerah}/{prodi}/{angkatan}', function ($nama, $asal_daerah, $prodi, $angkatan) {
//     return view('latihan', [
//         'nama' => $nama,
//         'asal_daerah' => $asal_daerah,
//         'prodi' => $prodi,
//         'angkatan' => $angkatan
//     ]);
// });


// ///

// Route::get('/dashboard', function () {
//     return view('latihan2.dashboard');
// })->name('dashboard');

// Route::get('/daftar', function () {
//     return view('latihan2.daftar');
// })->name('daftar');


// //ujian
// Route::get('/my/home', function () {
//     return view('ujian.home');
// })->name('my.home');

// Route::get('/my/nama', function () {
//     return view('ujian.nama');
// })->name('nama');

// Route::get('/my/asal_daerah', function () {
//     return view('ujian.asal_daerah');
// })->name('asal_daerah');

// Route::get('/my/prodi', function () {
//     return view('ujian.prodi');
// })->name('prodi');

// Route::get('/my/angkatan', function () {
//     return view('ujian.angkatan');
// })->name('angkatan');

// Route::get("/students", function () {
//     $students = Student::all();
//     return view("ujian.student", ["students" => $students]);
// });

// Route::get("/students/create", function () {
//     Student::create([
//         "nim" => "123",
//         "name" => "vallent evelyne yap",
//         "prodi" => "IF",
//         "angkatan" => 2024,
//         "alamat" => "jambi",
//     ]);
// });

// Route::get("/students/update/{id}", function ($id) {
//     Student::find($id)->update([
//         "nim" => "123 update",
//         "name" => "vallent evelyne yap update",
//         "prodi" => "IF update",
//         "angkatan" => 2024,
//         "alamat" => "jambi update",
//     ]);
//     echo "Data dengan id $id berhasil diupdate";
// });

// Route::get("/students/delete/{id}", function ($id) {
//     Student::find($id)->delete();
//     echo "Data dengan id $id berhasil dihapus";
// });

// Route::get("/product/create", function () {
//     Product::create([
//         "code" => "1",
//         "name" => "vallent evelyne yap",
//         "description" => "Sabun",
//         "qty" => 1,
//         "price" => "2000",
//     ]);
// });

// Route::get("/product", function () {
//     $product = Product::all();
//     return view("ujian.product", ["product" => $product]);
// });

Route::get('/', function () {
    return view('welcome');
});


Route::resource("/student", StudentController::class);
// Route::resource("/student/{id}/edit", StudentController::class, "update");

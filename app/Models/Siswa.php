<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // jika nama table create_siswas_table = tidak perlu menambahkan perintah dibawah.
    protected $table = 'siswa'; //pengenal tabel dari database


    // tambahkan column yang terdapat di tabel.
    // protected $fillable = [
    //     'nama', 'nis', 'nisn', 'alamat', 'gender'
    // ];

    // atau bisa menambahkan perintah dibawah untuk mempersingkat : 
    protected $guarded;


}

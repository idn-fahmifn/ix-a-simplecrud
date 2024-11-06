<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;


    protected $table = 'tamu';
    

    // mengenalkan semua column yang terdapat pada tabel tamu.
    protected $guarded;




}

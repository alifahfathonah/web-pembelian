<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Barang extends Model
{
    protected $guarded = [];
    public function pembelian()
    {
       return $this->hasMany('\App\Pembelian','barang_id');
    }
 
}

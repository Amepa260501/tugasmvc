<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AnggotaModel extends Model
{
public function Readbarang()
 {
 $barang=DB::table('barang')->get();
 return $barang;
}
}
?>

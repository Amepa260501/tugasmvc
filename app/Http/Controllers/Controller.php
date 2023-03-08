<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\AnggotaModel;
class Controller extends BaseController
{
 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function readbarang()
 {
 $xx=new AnggotaModel();
$barang=$xx->Readbarang();
return view('databarang',['barang'=>$barang]);
 } 
}
?>
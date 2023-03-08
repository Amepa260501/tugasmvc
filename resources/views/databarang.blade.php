<!DOCTYPE html>
<html lang="en">
<head>
  <title>TUGASMVC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<style type="text/css">
.pagination li{
 float:left;
 list-style-type:none;
margin:5px;
}
</style>
<div class="container">
<br>
<table id="myTableisi" class="table table-bordered data-table" >
    <thead >
<th>kode</th>
<th>nama</th>
<th>satuan</th>
<th>harga</th>
</thead>
<tbody>
@foreach($barang as $row)
<tr>
<td>{{$row->kodebrg}}</td>
<td>{{$row->namabrg}}</td>
<td>{{$row->satuan}}</td>
<td>{{$row->harga}}</td>
</tr>
@endforeach
</table>
<br>
<script>
</script>
</div>
</body>
</html>
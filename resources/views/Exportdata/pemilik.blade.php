<img src="logos.png" alt="logo" width="200px" height="60px" style="margin-top: 7px; margin-left: 35px;" > 
<div class="" style="float: right; margin-right: 15px; margin-bottom: 20px;">
    <h4 style="margin-right: 95px; margin-top: 2px; margin-bottom: 1px;  font-size: 25px;">Arcade Inc.</h4>
    <h4 style="margin-right: 55px; margin-top: 1px; margin-bottom: 1px; font-size: 15px;">Jalan Hayam Wuruk No 46, Panjer, Kec. Denpasar Timur</h4>    
    <h4 style="margin-top: 1px; margin-bottom:20px;  font-size: 12px;">Website : arcade.com | Telp : 081237727797 | Email : info@arcade.com</h4>
</div>

<hr>
<center>
    <h2 style="margin-bottom: 30px;">Laporan Data Pemilik Ruangan</h2>
</center>

<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
</style>

<table cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pemilik as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->phone}}</td>
                <td>{{$p->address}}</td>
                <td>{{$p->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
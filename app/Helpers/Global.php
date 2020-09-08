<?php
    use App\Ruangan;
    use App\User;
    use App\Pemilik;
    use App\Transaksi;

    function totalRuangan()
    {
        return Ruangan::count();
    }

    function totalUser()
    {
        return User::count();
    }

    function totalPemilik()
    {
        return Pemilik::count();
    }

    function totalTransaksi()
    {
        return Transaksi::count();
    }

     function getTrans()
    {
        $data_trans = \App\Transaksi::all();
        return $data_trans;
    }
?>
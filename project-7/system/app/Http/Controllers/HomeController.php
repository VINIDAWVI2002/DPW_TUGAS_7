<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showberanda(){
        return view('admin.section.beranda');
    }

    function showproduk(){
        return view('admin.section.produk');
    }

    function showkategori(){
        return view('admin.section.kategori');
    }

    function showpromo(){
        return view('admin.section.promo');
    }
     
    function showpelanggan(){
        return view('admin.section.pelanggan');
    }

    function showsupplier(){
        return view('admin.section.supplier');
    }

    function test($produk, $hargaMin = 0, $hargaMax = 0){
        if($produk == 'payung'){
            echo "Tampilkan Produk Payung";
        }elseif($produk =='sepeda'){
            echo "Produk Sepeda";
        }
        echo "<br>"; 
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }
    }
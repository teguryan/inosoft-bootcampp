<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index()
    {
        // echo "halaman index";

        // $name = 'Ryan';
        // return view('index', ['nama' => $name]);

        // $name = 'Ryan';
        // $data['nama'] = $name;
        // return view('index',$data);

        $nameDepan = "Teguh";
        $nameBelakang = "Ryan";
        $data = [
            'nama_depan' => $nameDepan,
            'nama_belakang' => $nameBelakang
        ];
        return view('index',$data);
    }

    function index2()
    {
        $itemName = "Sepatu";
        $itemPrice = "100.000";
        $data = [
            'nama_item' => $itemName,
            'harga_item' => $itemPrice
        ];
        return view('index2',$data);
    }

    function item($itemName)
    {
        // echo $itemName;
        $data = [
            'nama_item' => $itemName,
        ];
        return view('item',$data);

    }

    function itemForm()
    {
        return view('itemForm');
    }

    function itemPost(Request $request){
        // print_r($request->all()); die();
        $data = [
            'nama_item' => $request->nama_item,
            'harga_item' => $request->harga_item,
        ];
        return view('itemPost',$data);

    }
}

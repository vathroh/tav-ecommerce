<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Models\Gambar;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function getData()
    {
        // $dataMobil = DB::table('car_details')->get();

        // $dataMobil = Detail::all();

        $data = DB::table('car_details')
            ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
            ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
            ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
            ->join('car_kategoris', 'car_details.car_kategori_id', '=', 'car_kategoris.id')
            ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe', 'car_kategoris.nama_kategori as kategori')
            // ->where('car_details.status_mobil', '=', 1)
            ->where('car_details.is_active', '=', 1)
            ->orderBy('car_details.created_at', 'desc')
            ->get();

        return response()->json($data);
        
    }

    public function getDataKM()
    {
        // $dataMobil = DB::table('car_details')->get();

        // $dataMobil = Detail::all();

        $data = DB::table('car_details')
            ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
            ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
            ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
            ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe')
            // ->where('car_details.status_mobil', '=', 1)
            ->where('car_details.is_active', '=', 1)
            ->orderBy('car_details.odometer', 'asc')
            ->get();

        return response()->json($data);
    }

    public function show($id)
    {   
        $data = DB::table('car_details')
                ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
                ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
                ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
                ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe')
                ->where('car_details.id', $id)
                ->get();
        
        // $image = DB::table('image_cars')
        //         ->join('car_details', 'image_cars.car_detail_id', '=', 'car_details.id')
        //         ->select('image_cars.image as gambar')
        //         ->where('image_cars.car_detail_id', $id)
        //         ->get();

            return response()->json($data);
    }

    public function cariMobil(Request $request)
    {   
        

        // $data = DB::table('car_details')
        //         ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
        //         ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
        //         ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
        //         ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe')
        //         ->where('car_details.*', $request->cari)
        //         ->get();

        // return response()->json($data);
        dd($request->cari);
    }

    public function getDataSertif()
    {
        // $dataMobil = DB::table('car_details')->get();

        // $dataMobil = Detail::all();

        $data = DB::table('car_details')
            ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
            ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
            ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
            ->join('car_kategoris', 'car_details.car_kategori_id', '=', 'car_kategoris.id')
            ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe', 'car_kategoris.nama_kategori as kategori')
            ->where('car_details.status_mobil', '=', 1)
            ->where('car_details.is_active', '=', 1)
            ->get();

        return response()->json($data);
    }

    public function getDataMurah()
    {
        // $dataMobil = DB::table('car_details')->get();

        // $dataMobil = Detail::all();

        $data = DB::table('car_details')
            ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
            ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
            ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
            ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe')
            ->where('car_details.status_mobil', '=', 1)
            ->where('car_details.is_active', '=', 1)
            ->orderBy('car_details.harga_kredit', 'asc')
            ->get();

        return response()->json($data);
    }

    public function getDataBrand()
    {
        $data = DB::table('car_brands')->get();
        return response()->json($data);
    }

    public function getMerk($id)
    {
        $data = DB::table('car_details')
                ->join('car_brands', 'car_details.car_brand_id', '=', 'car_brands.id')
                ->join('car_merks', 'car_details.car_merk_id', '=', 'car_merks.id')
                ->join('car_types', 'car_details.car_type_id', '=', 'car_types.id')
                ->select('car_details.*', 'car_brands.name as brands', 'car_merks.name as merks', 'car_types.name as tipe')
                ->where('car_details.car_brand_id', $id)
                ->get();

        return response()->json($data);
    }

    public function getDataModel()
    {
        $data = DB::table('car_kategoris')->get();
        return response()->json($data);
    }
    

    
}

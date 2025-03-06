<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //coba akses model UserModel
        $user = UserModel::where('level_id', 2)->count();

        return view('user', ['data' => $user]);
    }
}

    //Modifikasi 1
        // /*$data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); //tambahkan data ke tabel m_user*/

        // //tambahkan data user dengan Eloquent Model 
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user

    //Modifikasi 2
        //     $data = [
        //         'level_id' => 2, 
        //         'username' => 'manager_tiga',
        //         'nama' => 'Manager 3',
        //         'password' => Hash::make('12345')
        //    ];
        //    UserModel::create($data);

        //     //coba akses model UserModel
        //     $user = UserModel::all(); //ambil semua data dari tabel m_user
        //     return view('user', ['data' => $user]);

    //Modikasi 3 (coba akses model UserModel)
        // $user = UserModel::find(1); //ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

    //Modifikasi 4
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

    //Modifikasi 5
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

    //Modifikasi 6
        // $user = UserModel::findOr(1, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);
    
    //Modifikasi 7
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

    //Modifikasi 8
        // $user = UserModel::findOrFail(1);
        //     return view('user', ['data' => $user]);

    //Modifikasi 9
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);
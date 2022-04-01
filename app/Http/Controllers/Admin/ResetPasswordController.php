<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;

class ResetPasswordController extends Controller
{
    public function resetpsd(Request $request, $id)
    {
        $data = UserDetail::find($id);
        try {
            User::where('id',$data->id_users)->update([
                'password' =>bcrypt('12345678')
            ]);
            return redirect()->back()->with('success', 'Password Berhasil Direset');

        } catch (\Throwable $th) {
            return $th;
        }
    }
}

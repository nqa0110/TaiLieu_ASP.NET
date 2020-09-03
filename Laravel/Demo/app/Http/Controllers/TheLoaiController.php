<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TheLoai;

class TheLoaiController extends Controller
{

    public function getDanhSach()
    {
        // lấy tất cả ds thể loại trong Model
        $theloai = TheLoai::all();
        return view('admin.theloai.danhsach', ['theloai' => $theloai]);
    }
    public function getThem()
    {
        return view('admin.theloai.them');
    }
    //nhận dữ liệu về & lưu => DB
    public function postThem(Request $request)
    {
        //check điều kiện (k cho truyền rỗng)
        $this->validate($request,
            [
                //các lỗi
                'Ten' => 'required|min:3|max:100'
            ],
            [
                //thông báo
                'Ten.required' => 'Bạn chưa nhập tên thể loại',
                'Ten.min' => 'Tên thể loại phải từ 3 ký tự trở lên ',
                'Ten.max' => 'Tên thể loại không được quá 100 ký tự',
            ]);
        //sau khi bắt lỗi thì cần lưu Ten => Model(TheLoai)
        $theloai = new TheLoai;
        $theloai->Ten = $request->Ten;
        //xử dụng thư viện tự code ở app/function
        $theloai->TenKhongDau = changeTitle($request->Ten);
        //echo changeTitle($request->Ten);
        $theloai->save();

        return redirect('admin/theloai/them')->with('thongbao','Thêm thành công');
    }
    public function getSua()
    {
        return view('admin.theloai.sua');
    }
}

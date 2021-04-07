<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function add()
  {
    return view('admin.profile.create');
  }
    //↑プロフィールを入力する画面を表示
  public function create()
  {
    return redirect('admin/profile/create');
  }
    //↑DBに保存して、再度入力する画面に戻る
  public function edit()
  {
    return view('admin.profile.edit');
  }
    //↑プロフィールを編集する画面を表示
  public function update()
  {
    return redirect('admin/profile/edit');
  }   
    //↑DBに保存して、再度編集する画面に戻る
}

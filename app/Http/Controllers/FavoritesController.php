<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りに追加するアクション。
     * 
     * @param $id その投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザが、idの投稿をお気に入りに追加する。
        \Auth::user()->favorite($id);
        //　前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * お気に入りを解除するアクション。
     * 
     * @param $id その投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //認証済みユーザがidの投稿のお気に入りを外す。
        \Auth::user()->unfavorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
}

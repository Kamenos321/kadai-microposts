<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をfavoriteするアクション。
     */
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }

    /**
     * 投稿をunfavoriteするアクション。
     */
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
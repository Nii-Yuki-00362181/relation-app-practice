<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //一覧表示（タグ絞り込み機能・コメント数取得・Eager Loading含む）
    public function index(Request $request)
    {
        $query = Post::With('tags')->withCount('comments');

        //タグによる絞り込み（URLに ?tag=xxx がある場合）
        if ($request->has('tag')) {
            $tagName = $request->tag;
            $query->whereHas('tags', function ($q) use ($tagName) {
                $q->where('name', $tagName);
            });
        }

        $posts = $query->latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    //詳細表示（コメント一覧とタグのEager Loading)
    public function show($id)
    {
        $post = Post::with(['comments', 'tags'])->findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
}

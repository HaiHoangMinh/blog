<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Hiển thị danh sách
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::paginate(10); // Hiển thị theo trang
        return view('articles.list', ['articles'=> $articles]);
    }

    /**
     * Show the form for creating a new resource.
     * Tạo form bài viết để tạo
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tạo ra bài viết
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * Lưu xuống csdl
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( StoreArticleRequest $request)
    {
        // lưu bài viết 
        $articles = new Article;
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->save();
        echo "Đăng bài thành công!!";
    }

    /**
     * Display the specified resource.
     * Xem giá trị
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * form update
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * update csdl
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * delete 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
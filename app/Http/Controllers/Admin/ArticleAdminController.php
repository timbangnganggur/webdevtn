<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;

class ArticleAdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.artikel.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
                                    'title' => ['required'],
                                    'header' => ['required'],
                                    'body' => ['required'],
                                    'footer' => ['required'],
                                    'tag' => ['required'],
                                    'writer' => ['required'],
                    ]);

        if($validator->fails()){
            return back()->with('error', 'Ada Beberapa form yang terlewat');
        }

        $title = $request->title;
        $header = $request->header;
        $body = $request->body;
        $footer = $request->footer;
        $tag = $request->tag;
        $writer = $request->writer;

        $article_new = new Article;
        $article_new->title = $title;
        $article_new->header = $header;
        $article_new->body = $body;
        $article_new->footer = $footer;
        $article_new->tag = $tag;
        $article_new->writer = $writer;
        $article_new->save();
        return redirect('admin/artikel/create')->with('success', 'Artikel berhasil terbuat');;
    }

    public function destroy(Request $request, $id)
    {
        $article_selected = Article::find($id);
        $article_selected->delete();
        return redirect('admin/artikel')->with('success', 'Artikel berhasil terhapus');
    }
}

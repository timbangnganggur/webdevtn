<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;
use Illuminate\Support\Facades\Auth;

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
                                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    
        if($validator->fails()){
            return back()->with('error', 'Ada Beberapa form yang terlewat');
        }

        $title = $request->title;
        $header = $request->header;
        $body = $request->body;
        $footer = $request->footer;
        $tag = $request->tag;
        $slug = $this->slugify($title);

        $article_selected = Article::where('slug', $slug)->first();
        if($article_selected){
            return back()->with('error', 'Sudah ada artikel dengan slug yang sama');
            die();
        }

        $imageName = time().'.'.$request->image->extension();                
        $request->image->move(public_path('images/artikel'), $imageName);
        
        $user = Auth::guard('admin')->user();

        $article_new = new Article;
        $article_new->title = $title;
        $article_new->header = $header;
        $article_new->body = $body;
        $article_new->footer = $footer;
        $article_new->tag = $tag;
        $article_new->slug = $slug;
        $article_new->writer = $user->name;
        $article_new->image_url = $imageName;
        $article_new->save();
        return redirect('admin/artikel')->with('success', 'Artikel berhasil terbuat');;
    }

    public function destroy(Request $request, $id)
    {
        $article_selected = Article::find($id);
        $article_selected->delete();
        return redirect('admin/artikel')->with('success', 'Artikel berhasil terhapus');
    }

    private function slugify ($string) {
        $string = utf8_encode($string);
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);   
        $string = preg_replace('/[^a-z0-9- ]/i', '', $string);
        $string = str_replace(' ', '-', $string);
        $string = trim($string, '-');
        $string = strtolower($string);
    
        if (empty($string)) {
            return 'n-a';
        }
    
        return $string;
    }
}

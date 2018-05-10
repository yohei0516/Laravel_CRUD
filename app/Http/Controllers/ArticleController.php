<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Articleモデルをuseする
use App\Article;


class ArticleController extends Controller
{
    public function index() {
    	// articlesテーブルからデータを抽出する
    	$articles = Article::all();
    	// ビューを表示する。この時、変数$articlesをビューに渡す
    	return view('article.index', ['articles' => $articles]);
    }
}

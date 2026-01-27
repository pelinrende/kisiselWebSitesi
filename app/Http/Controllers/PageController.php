<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function WebAnaSayfa()
    {
        return view('welcome');
    }

    public function Hakkimda()
    {
        return view('front.content.front.hakkimda');
    }

    public function Iletisim()
    {
        return view('front.content.front.iletisim');
    }

    public function Projeler()
    {
        return view('front.content.front.projeler');
    }

     public function Makaleler()
    {
        $articles = Article::where('status', 1)
            ->latest()
            ->get();

        return view('front.articles.index', compact('articles'));
    }
    public function ArticleShow($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('front.articles.show', compact('article'));
    }

public function thedelay()
    {
        $article = Article::where('slug', 'thedelay')->firstOrFail();
        return view('front.articles.show', compact('article'));
    }

    public function error()
    {
        $article = Article::where('slug', 'error')->firstOrFail();
        return view('front.articles.show', compact('article'));
    }
    public function letsthink()
    {
        $article = Article::where('slug', 'lets-think')->firstOrFail();
        return view('front.articles.show', compact('article'));
    }

    public function aı()
    {
        $article = Article::where('slug', 'aı')->firstOrFail();
        return view('front.articles.show', compact('article'));
    }


    public function SafeDrive()
    {
        return view('front.content.front.safedrive');
    }

    public function Makaleler2()
    {
        return view('front.content.front.makaleler2');
    }
    public function Dashboard()
{
    $messageCount = \App\Models\Message::count();
    $articleCount = \App\Models\Article::count();
    $totalHit = \App\Models\Article::sum('hit') ?? 0;
    $categories = \App\Models\Category::withCount('articles')->get();
    $catLabels = $categories->pluck('name');
    $catCounts = $categories->pluck('articles_count');
    $visitorLabels = [];
    $visitorData = [];
    for ($i = 6; $i >= 0; $i--) {
        $date = now()->subDays($i);
        $visitorLabels[] = $date->format('D');
        $visitorData[] = \App\Models\Article::whereDate('updated_at', $date)->sum('hit') ?? 0;
    }

    $categories = \App\Models\Category::withCount('articles')->get();
    $catLabels = $categories->pluck('name');
    $catCounts = $categories->pluck('articles_count');

    $latestArticles = \App\Models\Article::latest()->take(5)->get();

    return view('dashboard', compact(
        'messageCount', 'articleCount', 'totalHit',
        'latestArticles', 'visitorLabels', 'visitorData',
        'catLabels', 'catCounts'
    ));
}

    public function MessagePage() {
    return view('front.content.front.message');
}


    public function SendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ]);

        return back()->with('success', 'Mesajın bana ulaştı, en kısa sürede döneceğim!');
    }
   public function ShowMessages() {
    $messages = \App\Models\Message::orderBy('created_at', 'desc')->get();
    return view('back.content.front.message', compact('messages'));
}

public function ReplyMessage(Request $request, $id) {
    $message = \App\Models\Message::findOrFail($id);

    \Illuminate\Support\Facades\Mail::raw($request->reply_content, function ($mail) use ($message) {
        $mail->to($message->email)->subject('Pelin Blog - Cevap');
    });

    return back()->with('success', 'Cevap mail olarak gönderildi!');
}

public function IndexArticle()
    {
        $articles = Article::with('category')->get();
        return view('back.articles.index', compact('articles'));
    }


public function CreateArticle()
    {
        $categories = Category::all();


        if (view()->exists('back.articles.create')) {
            return view('back.articles.create', compact('categories'));
        }

        return "Hata: resources/views/back/articles/create.blade.php dosyasını bulamıyorum!";
    }

public function StoreArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
            'image' => null
        ]);

        return redirect()->route('makale.index')->with('success', 'Harika! Makalen başarıyla yayınlandı. ✨');
    }
    public function EditArticle($id)
{

    $article = \App\Models\Article::find($id);

    if (!$article) {
        return "Hata: Düzenlemek istediğin makale veritabanında bulunamadı!";
    }


    $categories = \App\Models\Category::all();


    return view('panel.articles.edit', compact('article', 'categories'));
}
public function UpdateArticle(Request $request, $id)
{
    $article = Article::findOrFail($id);
    $data = $request->all();
    $data['slug'] = Str::slug($request->title);

    if (!$request->hasFile('image')) {
        $data['image'] = $article->image;
    } else {

    }

    $article->update($data);
    return redirect()->route('makale.index')->with('success', 'Güncellendi!');
}
public function ShowArticleById($id)
{
    $article = Article::findOrFail($id);
    $article->increment('hit');
    return view('front.articles.show', compact('article'));
}
}


<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laratrust, DataTables, Lang;
use App\Models\Master\Article;

class ArticleController extends Controller
{
    public function index()
    {
        if (!Laratrust::isAbleTo('view-article')) return abort(404);

        return view('master.article.index');
    }

    public function data()
    {
        if (!Laratrust::isAbleTo('view-article')) return abort(404);

        $articles = Article::select('id', 'title', 'content');

        return DataTables::of($articles)
            ->addColumn('action', function($article) {
                $edit = '<a href="' . route('master.article.edit', $article->id) . '" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-tooltip" title="' . Lang::get('Edit') . '"><i class="la la-edit"></i></a>';
                $delete = '<a href="#" data-href="' . route('master.article.destroy', $article->id) . '" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-tooltip" title="' . Lang::get('Delete') . '" data-toggle="modal" data-target="#modal-delete" data-key="' . $article->title . '"><i class="la la-trash"></i></a>';

                return (Laratrust::isAbleTo('update-article') ? $edit : '') . (Laratrust::isAbleTo('delete-article') ? $delete : '');
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        if (!Laratrust::isAbleTo('create-article')) return abort(404);

        return view('master.article.create');
    }

    public function store(Request $request)
    {
        if (!Laratrust::isAbleTo('create-article')) return abort(404);

        $this->validate($request, [
            'judul' => ['required', 'string', 'max:255'],
            'konten' => ['required', 'string', 'max:255'],
        ]);

        $article = new Article;
        $article->title = $request->judul;
        $article->content = $request->konten;
        $article->save();

        $message = Lang::get('Article') . ' \'' . $article->title . '\' ' . Lang::get('successfully created.');
        return redirect()->route('master.article.index')->with('status', $message);
    }

    public function edit($id)
    {
        if (!Laratrust::isAbleTo('update-article')) return abort(404);

        $article = Article::select('id', 'title', 'content')->findOrFail($id);

        return view('master.article.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        if (!Laratrust::isAbleTo('update-article')) return abort(404);

        $article = Article::findOrFail($id);

        $this->validate($request, [
            'judul' => ['required', 'string', 'max:255'],
            'konten' => ['required', 'string', 'max:20000'],
        ]);

        $article->title = $request->judul;
        $article->content = $request->konten;
        $article->save();

        $message = Lang::get('Article') . ' \'' . $article->title . '\' ' . Lang::get('successfully updated.');
        return redirect()->route('master.article.index')->with('status', $message);
    }

    public function destroy($id)
    {
        if (!Laratrust::isAbleTo('delete-article')) return abort(404);

        $article = Article::findOrFail($id);
        $title = $article->title;
        $article->delete();

        $message = Lang::get('Article') . ' \'' . $title . '\' ' . Lang::get('successfully deleted.');
        return redirect()->route('master.article.index')->with('status', $message);
    }
}

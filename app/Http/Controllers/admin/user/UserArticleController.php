<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\EditArticleRequest;
use App\Http\Requests\admin\StoreArticleRequest;
use App\Models\admin\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $articles = Article::where('user_id', Auth::id())->latest()->get();

        return view('eendenportaal.user.articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('eendenportaal.user.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request): RedirectResponse
    {
        $article = Article::make($request->validated());

        $article->user_id = Auth::id();

        $article->updated_by = Auth::id();

        $article->status = 1;

        $article->save();

        return redirect()->route('eendenportaal.articles.user.index')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article): View
    {
        return view('eendenportaal.user.articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article): View
    {
        return view('eendenportaal.user.articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditArticleRequest $request, Article $article): RedirectResponse
    {
        $article->update($request->validated());

        return redirect()->route('eendenportaal.articles.user.index')->with('status', 'edit_success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function denied(): View
    {
        $articles = Article::where('status', '=', 2)->where('user_id', Auth::id())->latest()->get();

        return view('eendenportaal.user.articles.denied', ['articles' => $articles]);
    }
}

<?php

namespace App\Http\Controllers\admin\management;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\EditArticleRequest;
use App\Http\Requests\admin\StoreArticleRequest;
use App\Models\admin\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $articles = Article::latest()->get();

        return view('admin.management.articles.index',
            ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.user.articles.create');
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

        return redirect()->route('admin.articles.index')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return View
     */
    public function show(Article $article): View
    {
        return view('admin.management.articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article): View
    {
        return view('admin.articles.edit', ['article' => $article]);
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

        return redirect()->route('admin.articles.index')->with('status', 'edit_success');
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

    public function overview(): View
    {
        $articles = Article::where('status', '=', 1)->get();

        return view('admin.management.articles.overview', ['articles' => $articles]);
    }
}

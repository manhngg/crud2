<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $request->validate([
            'commenter'=>'required',
            'body'=>'required'
        ]);
        // $article = Article::find($id);
        // $comment = $article->comments new Comment([
        //     'commenter' => $request->get('commenter'),
        //     'body'=> $request->get('body'),
        //     'article_id'=> $id
        // ]);
        $comment = new Comment([
            'commenter' => $request->get('commenter'),
            'body'=> $request->get('body'),
            'article_id'=> $id
        ]);
        $comment->save();
        return redirect()->back();
        // return redirect()->route('articles_path,$article->id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // @article = Article.find(params[:article_id])
        // @comment = @article.comments.find(params[:id])
        // @comment.destroy
        // redirect_to article_path(@article)
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back();
        // return redirect()->route('articles_path');
    }
}
#php artisan make:controller CommentController --resource --model=Comment

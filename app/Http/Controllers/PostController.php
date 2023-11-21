<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{

    public function index()
    {

        $post = Post::all();

        return view('posts.index', ['post' => $post]);
    }
    public function show($slug)
    {

        $post = Post::where('slug', $slug)->first();

        return view('posts.show', ['post' => $post]);
    }

    public function showPostsByUser($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            abort(404, 'User not found');
        }
        $posts = Post::where('user_id', $userId)->get();

        return view('posts.posts_by_user', ['user' => $user, 'posts' => $posts]);
    }

    public function showPostsByDate($date)
    {
        $formattedDate = Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');

        $posts = Post::whereDate('created_at', $formattedDate)->get();

        return view('posts.post_by_date', ['date' => $date, 'posts' => $posts]);
    }

    public function showPostsByCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) {
            abort(404, 'Category not found');
        }

        $posts = Post::where('category_id', $categoryId)->get();

        return view('posts.posts_by_category', ['category' => $category, 'posts' => $posts]);
    }

}

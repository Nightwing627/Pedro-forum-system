<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Forum;
use App\Models\Discussion;
use App\Models\User;


class FrontendController extends Controller
{
    public function index()
    {
        $user = new User;
        $users_online = $user->allOnline();
        $forumsCount = count(Forum::all());
        $topicsCount = count(Discussion::all());
        $totalMembers = count(User::all());
        $newest = User::latest()->first();
        $totalCategories = count(Category::all());
        $categories = Category::latest()->get();
        return view('welcome', \compact('categories', 'forumsCount', 'topicsCount', 'newest', 'totalMembers', 'totalCategories', 'users_online'));
    }

    public function categoryOverview($id)
    {
        $user = new User;
        $users_online = $user->allOnline();
        $forumsCount = count(Forum::all());
        $topicsCount = count(Discussion::all());
        $totalMembers = count(User::all());
        $newest = User::latest()->first();
        $totalCategories = count(Category::all());
        $category = Category::find($id);

        return view('client.category-overview', \compact('category'));
    }

    public function forumOverview($id)
    {
        $forum = Forum::find($id);
        return view('client.forum-overview', \compact('forum'));
    }

    public function getTopics(Request $req, $id) {
        $recordsTotal = Discussion::where('forum_id', $id)->where('is_deleted', 0)->count();
        
        return view();
    }
}

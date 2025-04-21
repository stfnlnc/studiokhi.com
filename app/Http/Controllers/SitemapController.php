<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Work;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $staticPages = [
            '',
            'services/branding-et-direction-artistique',
            'services/webdesign-et-design-digital',
            'services/sites-sur-mesure',
            'realisations',
            'articles',
            'faq',
            'studio',
            'contact'
        ];
        $posts = Post::all();
        $works = Work::all();
        return response()->view('sitemap.index', ['staticPages' => $staticPages, 'posts' => $posts, 'works' => $works])->header('Content-Type', 'text/xml');
    }
}

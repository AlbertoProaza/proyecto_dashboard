<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Estadísticas básicas
        $stats = [
            'total_users' => $user->can('view_users') ? User::count() : null,
            'total_posts' => Post::count(),
            'my_posts' => $user->posts()->count(),
        ];

        return Inertia::render('Dashboard', [
            'stats' => $stats,
            'user' => $user,
        ]);
    }
}

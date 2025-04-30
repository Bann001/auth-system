<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_users' => User::count(),
            'total_products' => Product::count(),
            'total_categories' => Category::count(),
            'latest_users' => User::latest()->take(5)->get(),
            'latest_products' => Product::with('category')->latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
} 
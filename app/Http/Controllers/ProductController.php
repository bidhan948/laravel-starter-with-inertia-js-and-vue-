<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Product', [
            'products' => post::query()
                ->when(request('search'), function ($q, $search) {
                    $q->where('post', 'like', "%{$search}%");
                })
                ->when(request('orderBy'), function ($q, $orderBy) {
                    $q->orderBy($orderBy, 'desc');
                })
                ->paginate(25)
                ->withQueryString(),
            'filters' => $request->only('search','orderBy')
        ]);
    }
}

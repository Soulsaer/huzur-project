<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chieldcategory;

class CategoryController extends Controller
{
    
    public function getChildCategory(Request $request)
    {
        $categoryId = $request->get('q');

        return Chieldcategory::where('parent_category', $categoryId)->get(['id', \DB::raw('name as text')]);
    }

}

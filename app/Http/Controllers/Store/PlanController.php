<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanCategory;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        $categories = PlanCategory::enabled()->get();
        if ($categories->isEmpty()) {
            return view('store.plans', [
                'categories' => [],
                'plans' => [],
                'activeCategory' => null,
            ]);
        }

        $selectedCategory = $request->query("category");
        $category =
            $categories->firstWhere("id", $selectedCategory) ??
            $categories->first();

        $plans = $category->plans()->enabled()->get();

        return view('store.plans', [
            'categories' => $categories,
            'plans' => $plans,
            'activeCategory' => $category,
        ]);
    }

    public function show(Request $request, int $id)
    {
        $plan = Plan::enabled()
            ->with('category')
            ->findOrFail($id);

        return view('store.plan', [
            'plan' => $plan,
        ]);
    }
}

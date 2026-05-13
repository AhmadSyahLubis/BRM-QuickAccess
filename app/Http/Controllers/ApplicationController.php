<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function dashboard()
    {
        $brmCount = Application::where('type', 'brm')->count();
        $aiCount = Application::where('type', 'ai_tools')->count();
        // Since AI Tools are featured, use random ones for shortcuts or just AI tools
        $shortcuts = Application::where('type', 'ai_tools')->take(4)->get();
        
        return view('dashboard', compact('brmCount', 'aiCount', 'shortcuts'));
    }

    public function brmAccess(Request $request)
    {
        $query = Application::where('type', 'brm');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $applications = $query->orderBy('name')->get();
        $categories = Application::where('type', 'brm')
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->get();

        return view('brm-access', compact('applications', 'categories'));
    }

    public function aiTools(Request $request)
    {
        $query = Application::where('type', 'ai_tools');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        $applications = $query->orderBy('name')->get();
        return view('ai-tools', compact('applications'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Step;
use App\Models\Option;
use App\Services\CompatibilityService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function start($productCode)
    {
        $product = Product::where('code', $productCode)->firstOrFail();
        session(['product_id' => $product->id, 'config' => []]);
        
        $firstStep = $product->steps()->orderBy('step_number')->first();
        return redirect()->route('config.step', [$productCode, $firstStep->step_key]);
    }

    public function step($productCode, $stepKey)
    {
        $product = Product::where('code', $productCode)->firstOrFail();
        $step = $product->steps()->where('step_key', $stepKey)->with('options')->firstOrFail();
        $config = session('config', []);
        
        $compatService = new CompatibilityService();
        $blocked = $compatService->getBlockedOptions($stepKey, $config);
        
        $allSteps = $product->steps()->orderBy('step_number')->get();
        $currentIndex = $allSteps->search(fn($s) => $s->id === $step->id);
        
        $prevStep = $currentIndex > 0 ? $allSteps[$currentIndex - 1] : null;
        $nextStep = $currentIndex < $allSteps->count() - 1 ? $allSteps[$currentIndex + 1] : null;
        
        $selectedOption = $config[$stepKey] ?? null;
        
        return view('config.step', compact('product', 'step', 'config', 'blocked', 'prevStep', 'nextStep', 'selectedOption'));
    }

    public function select(Request $request)
    {
        $config = session('config', []);
        $config[$request->step_key] = $request->option_code;
        session(['config' => $config]);
        
        return response()->json(['success' => true]);
    }

    public function summary()
    {
        $config = session('config', []);
        $productId = session('product_id');
        $product = Product::findOrFail($productId);
        
        $selected = [];
        foreach ($config as $stepKey => $optionCode) {
            $option = Option::whereHas('step', function($q) use ($stepKey, $productId) {
                $q->where('step_key', $stepKey)->where('product_id', $productId);
            })
            ->where('option_code', $optionCode)
            ->with(['step', 'inspections'])
            ->first();
            
            if ($option) {
                $selected[] = $option;
            }
        }
        
        return view('config.summary', compact('product', 'selected', 'config'));
    }
}
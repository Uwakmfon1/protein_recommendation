<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;
use App\Services\GeminiService;
use Illuminate\Support\Facades\Validator;


class ProteinRecommendController extends Controller
{
    public function __construct(public GeminiService $gemini){ }

    public function proteinRecommend(Request $request)
    {
        $validator = $request->validate([
            'age' => 'required|integer|min:1|max:120',
            'gender' => 'required|in:male,female,other',
            'goal' => 'required|string',
        ]);
        return $this->queryAi($validator['age'],$validator['gender'],$validator['goal']);
    }


    private function queryAi($age, $gender, $goal)
    {
        $prompt = "Suggest a protein-rich diet plan for a $age-year-old $gender whose goal is to $goal.";
        $recommendation = $this->gemini->generateRecommendation($prompt);
        return view('dashboard', compact($recommendation));
    }
}

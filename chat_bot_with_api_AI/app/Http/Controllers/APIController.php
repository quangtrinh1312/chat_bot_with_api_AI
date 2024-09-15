<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Http;
class APIController extends Controller
{
    public function getSubcategories($question)
    {
        $apiKey = env('API_KEY');

        // Set up the API URL with the API key
        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=$apiKey";

        // Prepare the request payload
        $payload = [
            "contents" => [
                [
                    "role" => "user",
                    "parts" => [
                        [
                            "text" => $question
                        ]
                    ]
                ]
            ]
        ];

        // Make the HTTP POST request
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url, $payload);

        // Check if the request was successful
        if ($response->successful()) {
            // Get the response body as JSON
            $data = $response->json();

            // Return the data (or handle it as you wish)
            return response()->json($data);
        }

        // Handle errors
        return response()->json(['error' => 'Failed to fetch subcategories'], 500);
    }
}

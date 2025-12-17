<?php
// CRITICAL: Headers First
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

// Ignore Favicon
if (str_contains($_SERVER['REQUEST_URI'], 'favicon.ico')) {
    exit;
}

// Handle Preflight OPTIONS
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

// --- Environment Detection ---
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method === 'POST') {
    // Read input to simulate processing
    $input = json_decode(file_get_contents('php://input'), true);
    
    // Always return Mock Response for the Public Demo
    $mockResult = [
        "provider" => "mock",
        "seo_score" => 85,
        "strengths" => [
            "Excellent keyword density",
            "Clear heading structure",
            "Strong use of active voice"
        ],
        "weaknesses" => [
            "Meta description is missing",
            "Sentences are slightly too long"
        ],
        "keywords" => [
            "primary" => ["digital marketing", "seo 2025"],
            "long_tail" => ["ai content strategy", "future of seo"]
        ],
        "meta" => [
            "title" => "The Future of SEO: AI & Digital Marketing Strategies in 2025",
            "description" => "Discover how AI is transforming digital marketing. Learn key SEO strategies for 2025 including content automation and semantic search."
        ],
        "suggestions" => "This is a DEMO version. Buy the full script to unlock OpenAI & Gemini integrations."
    ];

    echo json_encode($mockResult, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

// Default GET response
echo json_encode(["status" => "demo_ready", "message" => "Public Mock Mode Active"]);
exit;
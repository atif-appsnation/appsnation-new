<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class ScraperController extends Controller
{
    //
    public function scrapeTestimonials()
    {
        $url = "https://www.trustpilot.com/review/appsnation.co";
        $headers = [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
        ];

        // Fetch the page content
        $response = Http::withHeaders($headers)->get($url);

        if ($response->status() === 200) {
            $html = $response->body();

            // Parse the HTML using Symfony's Crawler
            $crawler = new Crawler($html);

            // Locate the testimonial section
            $testimonialSection = $crawler->filter('.styles_reviewsContainer__3_GQw .styles_cardWrapper__LcCPA');

            $testimonials = $testimonialSection->each(function (Crawler $node) {
                try {
                    $name = $node->filter('.typography_heading-xxs__QKBS8')->text();
                    $title = $node->filter('.styles_reviewContent__0Q2Tg h2')->text();
                    $comments = $node->filter('.typography_body-l__KUYFJ')->text();

                    return [
                        'title' => trim($title),
                        'name' => trim($name),
                        'comments' => trim($comments)
                    ];
                } catch (\Exception $e) {
                    // Skip any testimonials that cannot be parsed
                    return null;
                }
            });

            // Filter out null values
            $testimonials = array_filter($testimonials);

            return response()->json($testimonials);
        } else {
            return response()->json(['error' => 'Failed to fetch the page.'], $response->status());
        }
    }
}

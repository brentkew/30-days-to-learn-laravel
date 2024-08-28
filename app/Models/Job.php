<?php

namespace App\Models;


class Job {
    public static function all() {
        return [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "salary" => "$120,000 - $140,000",
                "location" => "New York, NY",
                "experience" => "3+ years",
                "company" => "TechCorp",
                "type" => "Full-time",
                "datePosted" => "2024-08-01"
            ],
            [
                "id" => 2,
                "title" => "Data Analyst",
                "salary" => "$80,000 - $100,000",
                "location" => "San Francisco, CA",
                "experience" => "2+ years",
                "company" => "DataSolutions",
                "type" => "Full-time",
                "datePosted" => "2024-08-05"
            ],
            [
                "id" => 3,
                "title" => "Project Manager",
                "salary" => "$90,000 - $110,000",
                "location" => "Remote",
                "experience" => "5+ years",
                "company" => "Innovate Inc.",
                "type" => "Full-time",
                "datePosted" => "2024-08-10"
            ],
            [
                "id" => 4,
                "title" => "UI/UX Designer",
                "salary" => "$70,000 - $85,000",
                "location" => "Los Angeles, CA",
                "experience" => "3+ years",
                "company" => "CreativeWorks",
                "type" => "Part-time",
                "datePosted" => "2024-08-12"
            ],
            [
                "id" => 5,
                "title" => "Marketing Specialist",
                "salary" => "$60,000 - $75,000",
                "location" => "Chicago, IL",
                "experience" => "2+ years",
                "company" => "MarketGenius",
                "type" => "Full-time",
                "datePosted" => "2024-08-15"
            ],
            [
                "id" => 6,
                "title" => "DevOps Engineer",
                "salary" => "$115,000 - $135,000",
                "location" => "Austin, TX",
                "experience" => "4+ years",
                "company" => "CloudNet",
                "type" => "Full-time",
                "datePosted" => "2024-08-20"
            ],
            [
                "id" => 7,
                "title" => "Product Manager",
                "salary" => "$130,000 - $150,000",
                "location" => "Seattle, WA",
                "experience" => "5+ years",
                "company" => "ProductHub",
                "type" => "Full-time",
                "datePosted" => "2024-08-22"
            ],
            [
                "id" => 8,
                "title" => "Backend Developer",
                "salary" => "$100,000 - $120,000",
                "location" => "Boston, MA",
                "experience" => "3+ years",
                "company" => "WebWorks",
                "type" => "Full-time",
                "datePosted" => "2024-08-25"
            ],
            [
                "id" => 9,
                "title" => "QA Engineer",
                "salary" => "$85,000 - $95,000",
                "location" => "Denver, CO",
                "experience" => "3+ years",
                "company" => "QualityAssure",
                "type" => "Full-time",
                "datePosted" => "2024-08-28"
            ],
            [
                "id" => 10,
                "title" => "System Administrator",
                "salary" => "$90,000 - $110,000",
                "location" => "Phoenix, AZ",
                "experience" => "4+ years",
                "company" => "NetSecure",
                "type" => "Full-time",
                "datePosted" => "2024-08-30"
            ]
        ];
    }

    public static function find(int $id) {
        $filteredJobs = array_filter(static::all(), function ($job) use($id) {
            return $job['id'] === $id;
        });
        $job = array_shift($filteredJobs);
        return $job;
    }
}
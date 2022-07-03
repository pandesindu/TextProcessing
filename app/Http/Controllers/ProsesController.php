<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Sastrawi\Stemmer\StemmerFactory;

class ProsesController extends Controller
{
    private function tokenization($path)
    {
        $text = Storage::get($path);
        $lowStr = strtolower($text);
        $stringClean = preg_replace('/[^a-z0-9]+/i', ' ', $lowStr);
        $token = explode(' ', $stringClean);
        return $token;
    }

    private function stemming($path)
    {
        $text = Storage::get($path);
        $lowStr = strtolower($text);
        $stringClean = preg_replace('/[^a-z0-9]+/i', ' ', $lowStr);
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
        $stemmed   = $stemmer->stem($stringClean);
        $token = explode(' ', $stemmed);
        return $token;
    }

    private function removeStopword($words)
    {
        $stopword = Storage::get('public/stopwords-id.txt');
        $stopword = explode("\n", $stopword);
        $filtered = array_diff($words, $stopword);
        return $filtered;

    }

    public function index()
    {
        $stemmed1 = $this->stemming('public/uploads/file1.txt');
        $stemmed2 = $this->stemming('public/uploads/file2.txt');

        $token1 = $this->tokenization('public/uploads/file1.txt');
        $token2 = $this->tokenization('public/uploads/file2.txt');

        $filtered1 = $this->removeStopword($token1);
        $filtered2 = $this->removeStopword($token2);


        // stemming filtered words using sastrawi 
        // $stemmer = new \Sastrawi\Stemmer\StemmerFactory();
        // $stemmer = $stemmer->createStemmer();
        // $stemmed = array();
        // foreach ($filtered as $word) {
        //     $stemmed[] = $stemmer->stem($word);
        // }

        // dd($stemmed);
        // term frequency
        $termList  = array_unique(array_merge($filtered1, $filtered2));

        $termFreq1 = array_count_values($filtered1);
        $termFreq2 = array_count_values($filtered2);
        
        $termFreq= array();
        foreach ($termList as $term) {
            $a = (array_key_exists($term, $termFreq1)) ? $termFreq1[$term] : 0;
            $b = (array_key_exists($term, $termFreq2)) ? $termFreq2[$term] : 0;
            $termFreq[ $term] = [$a, $b];
        }
        dd($termFreq);
        // dd($termFreq1["thompson"]);
        
        //inverse document frequency
        // $idf = array();
        // foreach ($termFreq as $term => $freq) {
        //     $idf[$term] = abs(log(1 / $freq));
        // }
    }
}

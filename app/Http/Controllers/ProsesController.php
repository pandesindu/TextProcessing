<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Sastrawi\Stemmer\StemmerFactory;

class ProsesController extends Controller
{
    public function index()
    {
        // reading text file 
        $text = Storage::get('public/file.txt');
        // dd($text);
        // stemming filtered words using sastrawi
        
        $lowStr = strtolower($text);
        $stringClean = preg_replace('/[^a-z0-9]+/i', ' ', $lowStr);
        // text tokenization
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
   
        $stemmed   = $stemmer->stem($stringClean);
        $token = explode(' ', $stemmed);
        // dd($token);

        // filtering using stopword and remove stopword
        $stopword = Storage::get('public/stopwords-id.txt');
        $stopword = explode("\n", $stopword);
        $filtered = array_diff($token, $stopword);
        dd($filtered);


        // stemming filtered words using sastrawi 
        $stemmer = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer = $stemmer->createStemmer();
        $stemmed = array();
        foreach ($filtered as $word) {
            $stemmed[] = $stemmer->stem($word);
        }

        dd($stemmed);
        // term frequency
        $termFreq = array_count_values($stemmed);
        // dd($termFreq);

        //inverse document frequency
        $idf = array();
        foreach ($termFreq as $term => $freq) {
            $idf[$term] = abs(log(1 / $freq));
        }
    }
}

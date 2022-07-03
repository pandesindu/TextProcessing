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
        
        // filtering using stopword
        $stopword = Storage::get('public/stopwords-id.txt');
        $stopword = explode("\n", $stopword);

        $filtered = array_diff($token, $stopword);
        dd($filtered);

        // counting frequency
        $count = array_count_values($filtered);
        // dd($count);
        
        

        
        // dd($stemmed."\n");



        // weighting using TF-IDF
        $tf = array();
        $idf = array();
        $tfidf = array();
        $total = count($filtered);
        foreach ($filtered as $key => $value) {
            $tf[$key] = $count[$value] / $total;
            $idf[$value] = log($total / $count[$value]);
            $tfidf[$key] = $tf[$key] * $idf[$value];
        }
        dd($tfidf);

    }
}

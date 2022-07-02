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
        $lowStr = strtolower($text);
        $stringClean = preg_replace('/[^a-z0-9]+/i', ' ', $lowStr);
        // text tokenization
        $token = explode(' ', $stringClean);
        // dd($token);

        // filtering using stopword
        $stopword = Storage::get('public/stopwords-id.txt');
        $stopword = explode("\n", $stopword);

        $filtered = array_diff($token, $stopword);
        // dd($filtered);

        // counting frequency
        $count = array_count_values($filtered);
        // dd($count);

        // stemming filtered words using sastrawi
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
        $stemmed = array_map(function ($item) use ($stemmer) {
            return $stemmer->stem($item);
        }, $filtered);
        dd($stemmed);










        // //weighting using TF-IDF
        // $tf = array();
        // $idf = array();
        // $tfidf = array();
        // $total = count($filtered);
        // foreach ($stemmed as $key => $value) {
        //     $tf[$key] = $count[$value] / $total;
        //     $idf[$value] = log($total / $count[$value]);
        //     $tfidf[$key] = $tf[$key] * $idf[$value];
        // }
        // dd($tfidf);

    }
}

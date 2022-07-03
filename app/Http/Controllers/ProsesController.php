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

    private function cos_sim($tfidf)
    {
        $sum = 0;
        $doc1 = 0;
        $doc2 = 0;
        foreach ($tfidf as  $key=>$value){
            $sum += $value[0] * $value[1];
            $doc1 += $value[0] ^ 2;
            $doc2 += $value[1] ^ 2;
        }
        // dd($tfidf, $sum, $doc1, $doc2);

        $den = sqrt($doc1) * sqrt($doc2);

        return $sum / $den;
    }

    public function index()
    {
        $stemmed1 = $this->stemming('public/uploads/file1.txt');
        $stemmed2 = $this->stemming('public/uploads/file2.txt');

        $token1 = $this->tokenization('public/uploads/file1.txt');
        $token2 = $this->tokenization('public/uploads/file2.txt');

        $filtered1 = $this->removeStopword($stemmed2);
        $filtered2 = $this->removeStopword($stemmed1);


        $termList  = array_unique(array_merge($filtered1, $filtered2));

        $termFreq1 = array_count_values($filtered1);
        $termFreq2 = array_count_values($filtered2);
        
        $termFreq= array();
        foreach ($termList as $term) 
        {
            $a = (array_key_exists($term, $termFreq1)) ? $termFreq1[$term] : 0;
            $b = (array_key_exists($term, $termFreq2)) ? $termFreq2[$term] : 0;
            $termFreq[ $term] = [$a, $b];
        }
        
        $tf =array();
        $idf = array();
        $tfidf = array();

        foreach($termFreq as  $key=>$value)
        {
            $a = ($value[0]) ? 1 + log10($value[0]) : 0;
            $b = ($value[1]) ? 1 + log10($value[1]) : 0;
            $tf[$key] =  [$a, $b];
            
            $doc = 0;
            if($value[0]){
                $doc++;
            }
            if($value[1]){
                $doc++;
            }
            
            $idf[$key] = log10(2/$doc);
            $tfidf[$key] = [$tf[$key][0] * $idf[$key], $tf[$key][1] * $idf[$key]] ;


        }
        dd($idf);

        $cosSim = $this->cos_sim($tfidf);
        // dd($cosSim);


    }
}

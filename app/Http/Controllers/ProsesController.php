<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Node\Block\Document;
use Sastrawi\Stemmer\StemmerFactory;

class ProsesController extends Controller
{
    private function tokenization($path)
    {
        $text = Storage::get($path);
        $lowStr = strtolower($text);
        //remove space and special character
        $stringClean = preg_replace('/[^a-z0-9]+/i', " ", $lowStr);
        $token = explode(" ", $stringClean);
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
        $stopword = Storage::get('public/stopwords/stopwords-id.txt');
        $stopword = explode("\n", $stopword);
        $documentFilter = array_diff($words, $stopword);
        return $documentFilter;
    }

    private function stemPerWord($words)
    {
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
        
        $stemmed = [];
        foreach ($words as $word) {
            $stemmed[] = $stemmer->stem($word);
        }

        return $stemmed;
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

    private function  euclidDistance($tf)
    {
        $sum = 0;
        foreach($tf as  $key=>$value)
        {
            $sum += ($value[0] - $value[1])^2;
        }
        return sqrt($sum);
    }

    private function cosinSimilarity($termFreq){

        $sum = 0;
        $doc1 = 0;
        $doc2 = 0;
        foreach ($termFreq as  $key=>$value){
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
    // tokenizing 
        $document1Tokenize = $this->tokenization('public/uploads/file1.txt');
        $document2Tokenize = $this->tokenization('public/uploads/file2.txt');
        
        // remove stopword
        $document1Filter = $this->removeStopword($document1Tokenize);
        $document2Filter = $this->removeStopword($document2Tokenize);
        // dd($document1Filter, $document2Filter);
        
        //stem per word
        $document1Stem = $this->stemPerWord($document1Filter);
        $document2Stem = $this->stemPerWord($document2Filter);
        

        $termList  = array_unique(array_merge($document1Stem, $document2Stem));
        $termFreq1 = array_count_values($document1Stem);
        $termFreq2 = array_count_values($document2Stem);
        // dd($termFreq1, $termFreq2);


        $termFreq= array();
        foreach ($termList as $term) 
        {
            $a = (array_key_exists($term, $termFreq1)) ? $termFreq1[$term] : 0;
            $b = (array_key_exists($term, $termFreq2)) ? $termFreq2[$term] : 0;
            $termFreq[ $term] = [$a, $b];
        }
        // dd($termFreq);
        
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

        
        $cosineSimilarity = $this->cosinSimilarity($termFreq);
        $euDist = $this->euclidDistance($tf);
       
        return view('FormInput.showData', compact('termList', 'tf', 'tfidf', 'idf', 'document1Tokenize', 'document2Tokenize', 'document1Stem', 'document2Stem', 'cosineSimilarity', 'euDist', 'document1Filter', 'document2Filter'));
    }

}

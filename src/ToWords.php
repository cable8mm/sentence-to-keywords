<?php

declare(strict_types=1);

namespace Cable8mm\SentenceToWords;

class ToWords
{
    private const THRESHOLD = 1;

    private string $fetchUrl = 'https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=0&ie=utf8&query={ENCODED_KEYWORD}';

    private string $html;

    private string $replaceStrings;

    private string $matchCount;

    private array $result = [];

    public function __construct(string $sentence)
    {
        $encodedSentence = urlencode($sentence);

        $realUrl = str_replace('{ENCODED_KEYWORD}', $encodedSentence, $this->fetchUrl);

        $this->html = file_get_contents($realUrl);

        $this->rank();
    }

    private function rank()
    {
        $matches = [];

        preg_match_all('/<mark>([^<]+)<\/mark>/', $this->html, $matches);
        $countMatches = array_count_values($matches[1]);
        arsort($countMatches);

        $google_replace_string = '';
        $google_match_count = '';
        foreach ($countMatches as $k => $countMatch) {
            if (preg_match('/^[0-9\.]+$/', $k) || $countMatch < self::THRESHOLD) {
                continue;
            }
            $this->result[] = $k;
            $google_replace_string .= $k.'||';
            $google_match_count .= $countMatch.'||';
        }

        $this->replaceStrings = preg_replace('/\|\|$/', '', $google_replace_string);
        $this->matchCount = preg_replace('/\|\|$/', '', $google_match_count);
    }

    public function toArray()
    {
        return $this->result;
    }
}

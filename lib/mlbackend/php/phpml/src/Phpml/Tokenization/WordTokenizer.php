<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.


declare(strict_types=1);

namespace Phpml\Tokenization;

class WordTokenizer implements Tokenizer
{
    public function tokenize(string $text): array
    {
        $tokens = [];
        preg_match_all('/\w\w+/u', $text, $tokens);

        return $tokens[0];
    }
}

<?php

if ( !function_exists('partition') ) {
    function partition( $collection, $p ) {
        $listlen = $collection->count();
        $partlen = floor( $listlen / $p );
        $partrem = $listlen % $p;
        $partition = array();
        $mark = 0;
        for ($px = 0; $px < $p; $px++) {
            $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
            $partition[$px] = $collection->slice($mark, $incr);
            $mark += $incr;
        }
        return collect($partition);
    }
}

// get threads of posts
if ( !function_exists('thread') )  {
    function threads($key=null) {
        $threads = [
            '1' => 'Equipment',
            '2' => 'Service',
            '3' => 'Tenders'
        ];
        if ($key) {
            return $threads[$key]??null;
        }
        return $threads;
    }
}
// convert string in "UK" or "RU" to transiterated version of "EN"
if ( !function_exists('transliteration') )  {
    function transliteration($str, $check=[]) {
        $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'і' => 'i',   'є' => 'ye',   'ї' => 'yi'
        );
        $t = mb_strtolower($str); // transform to lower case
        $t = strtr($t, $converter); // convert to transliteration
        $t = str_replace(' ', '-', $t); //change all spaces to hyphens
        $t = preg_replace('~[^a-z0-9-]+~ui', '', $t); //remova all special chars
        $t = preg_replace('/-+/', '-', $t); // remove all double hyphens
        $t = trim($t, "-"); //remove hyphens from end and begining
        $t = mb_substr($t, 0, 40); // cut to 40 length
        $t = trim($t, "-"); //remove hyphens from end and begining
        // generage random sufix to prevent same urls
        if (in_array($t, $check)) {
            while(true) {
                $rand = mb_strtolower(Str::random(3));
                if (!in_array($t.'-'.$rand, $check)) {
                    $t = $t.'-'.$rand;
                    break;
                }
            }
        }
        return $t;
    }
}

//format number to cost
if ( !function_exists('formatNumberToCost') ) {
    function formatNumberToCost($number, $currency) {
        $c = $currency=="UAH" ? '₴' : '$' ;
        if(!$number) {
            return $c . '0.00';
        }
        $cost = strval($number);
        $coins = strstr($cost, '.');
        if (!$coins) {
            $cost = $cost.".00";
        }
        else if (strlen($coins) != 3 ) {
            $cost = $cost."0";
        }
        $step = 1;
        $commaIndexes = array();
        for ($i=strlen($cost)-4; $i > 0 ; $i--) {
            if ($step == 3) {
                $commaIndexes[] = $i;
                $step = 1;
            } else {
                $step++;
            }
        }
        foreach ($commaIndexes as $commaIndex) {
            $cost = substr_replace($cost, ',', $commaIndex, 0);
        }
        return substr_replace($cost, $c, 0, 0);
    }
}

//format url to locales url
if ( !function_exists('hreflang_url') ) {
    function hreflang_url($slug, $loc) {
        $cloc = App::getLocale();
        if ($cloc == $loc) {
            return $slug;
        }
        $base = route('home');
        $slug = str_replace($base, "", $slug);
        $loc = $loc=='uk' ? '' : '/'.$loc;
        if ($cloc != 'uk') {
            $slug = substr($slug, 3);// remove locale of Url
        }
        $slug = $base . $loc . $slug;
        return $slug;
    }
}
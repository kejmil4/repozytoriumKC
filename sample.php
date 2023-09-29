<?php //otwarciePHP

    //typ boolean
    $b1 = true;
    $b2 = false;

    //typ integer
    $i1 = 2137; //decimal
    $i2 = 0x45; //heximal - 0x przedrostek
    $i3 = 0420; //octal - 0 przedrostek
    $i4 = 0b1000101; //binary; 0b - przedrostek

    //typ float
    $f1 = 69.420;

    //typ string
    $s1 = 'Sample 1';
    $s2 = "Sample 2 $i1"; //obiektowo {zmienna}

    //heredoc
    $s3 = <<<LABEL
        iaafkjljkalnnjk
        ofalkm;afmlk;a
        nja;flafl
LABEL;

    //nowdoc
    $s4 = <<<'NOW'
        ;kakl;akmfl;
        m klfaklfalf
        klmaffafaaaaa
NOW;

echo "abfjkalflkanjlka";

echo "<br />";

echo $s1;

    // typy tablicowe => indeksowanie od 0 do n
    $arr = ['afafaf', 12345, 3.41245];

    // tablica asocjacyjna
    $asoc = [
        'k1' => 87462,
        'q2' => 'uhaflhljkf',
        5 => 4.564

    ];

    //tablica tablic
    $arrofArr = [
        ['12', 21445, 4.3214],
        ['adfa', 'gagfa']
    ];

    //typ obietkowy 
    $o1 = new stdClass();
    $o1->attr = 515819513; //-> odwołuje do obietkow lub metod

    //funckje
    function f1() {
        echo "Hello world!";

    }

    f1(); //wywołanie

    function f2(): void { //typy zwrotne w funkcjach
        echo "Hello world!";
    }

    f2();

    function f3($a1, $a2) {
        echo $a1 + $a2; 

    }

    function f4(int $a1, int $a2): void
    {
        echo $a1 = $a2;
    }

    f4(10, 20);


    function f5(string $a): string
    {
        return $a . ' by f5()';
    }
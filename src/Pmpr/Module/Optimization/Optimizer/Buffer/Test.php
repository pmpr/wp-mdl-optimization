<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637389418f87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\x69" => 1, "\x73\x73\154" => 0, "\x77\160\137\x34\60\64" => 1, "\163\145\x61\162\143\150" => 1, "\x6d\x6f\x62\151\x6c\x65" => 1, "\x69\163\x5f\150\164\x6d\154" => 1, "\161\x75\x65\x72\171\x5f\x73\164\x72\x69\156\147" => 1, "\x64\157\156\157\x74\x63\141\143\x68\x65\160\141\147\145" => 1, "\162\145\x6a\145\x63\164\x65\x64\137\143\x6f\157\x6b\151\145" => 1, "\x6d\141\x6e\144\x61\164\157\162\171\137\x63\157\157\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\145\163\x74\x73"])) { goto kwsqgqmwyyeykgum; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\x73\x74\x73"]); kwsqgqmwyyeykgum: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\153\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto emauuoieewwoeyqq; } $ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\x73"] = $_COOKIE; emauuoieewwoeyqq: if (!(!isset($ywmkwiwkosakssii["\160\157\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto koukiyqaccegmquc; } $ywmkwiwkosakssii["\x70\157\x73\164"] = $_POST; koukiyqaccegmquc: if (!(!isset($ywmkwiwkosakssii["\x67\145\x74"]) && !empty($_GET) && is_array($_GET))) { goto ekakkiuuquqkccse; } $ywmkwiwkosakssii["\147\x65\x74"] = $_GET; ekakkiuuquqkccse: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\x70\x6f\163\x74"]) ? $ywmkwiwkosakssii["\160\x6f\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\157\x6b\151\x65\163"]) && is_array($ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"]) ? $ywmkwiwkosakssii["\143\x6f\157\153\x69\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto oqwwacmigasucsoc; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\x5f\143\165\163\x74\x6f\x6d\151\172\145" => '']); oqwwacmigasucsoc: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto egkeqqgakieyimuq; } $this->yauwooaeicgosquo("\122\x6f\x62\x6f\164\163\56\164\170\x74\x20\x6f\x72\40\56\x68\x74\141\x63\x63\145\163\163\x20\x66\x69\154\x65\x20\151\x73\40\145\x78\x63\x6c\x75\x64\x65\x64\56"); return false; egkeqqgakieyimuq: if (!$this->gymgcceeqssmesiu()) { goto cakuguiciaiaeukg; } $this->yauwooaeicgosquo("\120\x48\120\x2c\40\130\x4d\114\x2c\x20\x6f\162\x20\x58\123\x4c\x20\x66\x69\154\145\40\x69\x73\x20\145\170\143\x6c\165\144\145\x64\x2e"); return false; cakuguiciaiaeukg: if (!$this->goecwaaykqoaaagg()) { goto wswikooyuaaouqgk; } $this->yauwooaeicgosquo("\101\x64\x6d\x69\x6e\40\x6f\x72\40\101\x4a\101\130\40\125\x52\114\x20\x69\x73\x20\x65\170\143\x6c\x75\144\x65\144\56"); return false; wswikooyuaaouqgk: if (!$this->sgsscqasgeyeicoe()) { goto awwaiioyywmokwsm; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\x20\157\162\x20\101\112\101\130\40\125\122\x4c\40\151\163\40\x65\x78\143\154\165\144\145\x64\56"); return false; awwaiioyywmokwsm: if ($this->gooeyogikcusgwuu()) { goto ckwmkquuyyugigom; } $this->yauwooaeicgosquo("\122\145\x71\x75\x65\163\164\x20\x6d\145\164\150\157\x64\40\151\163\40\x6e\x6f\x74\40\141\154\154\157\x77\x65\144\56\40\x50\141\x67\145\40\143\x61\x6e\x6e\x6f\x74\x20\x62\145\x20\143\x61\x63\x68\145\x64\56", ["\x72\x65\161\165\145\x73\164\x5f\x6d\145\164\150\x6f\144" => $this->ciyocmkwssocskiy()]); return false; ckwmkquuyyugigom: if ($this->cskwmweqysskwckg()) { goto cumeycwmuuqawwyu; } $this->lastError = []; return true; cumeycwmuuqawwyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\x75\143\143\145\163\163"]) { goto uaicwcqwauosmsqm; } $this->yauwooaeicgosquo("\116\x6f\x20\x63\x6f\156\146\151\x67\40\146\x69\154\145\x20\x66\x6f\165\156\x64", ["\x63\157\x6e\x66\x69\147\x5f\x70\x61\164\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]); return false; uaicwcqwauosmsqm: if (!($this->cskwmweqysskwckg("\161\x75\145\x72\171\137\163\x74\x72\x69\x6e\147") && !$this->koguieumooaesyww())) { goto gsqcoqqsioiyoykq; } $this->yauwooaeicgosquo("\x51\x75\145\162\171\40\x73\x74\x72\151\156\147\x20\x55\122\114\40\x69\x73\x20\x65\170\x63\x6c\165\x64\x65\144\56", $_GET); return false; gsqcoqqsioiyoykq: if (!($this->cskwmweqysskwckg("\163\x73\x6c") & !$this->eqwgocqwoyyykwke())) { goto goaowamiyyamueiw; } $this->yauwooaeicgosquo("\x53\x53\114\x20\143\x61\x63\x68\x65\x20\156\x6f\x74\40\141\x70\x70\x6c\x69\145\144\x20\164\x6f\40\160\141\x67\145\x2e"); return false; goaowamiyyamueiw: if (!($this->cskwmweqysskwckg("\x75\x72\151") && !$this->qweiomkkuikwugks())) { goto iaomqomgiwiegoca; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\151\x73\40\145\170\143\x6c\165\x64\145\144\56"); return false; iaomqomgiwiegoca: if (!($this->cskwmweqysskwckg("\x72\145\x6a\145\x63\x74\x65\144\x5f\x63\157\157\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto ysweqawmawicakeo; } $this->yauwooaeicgosquo("\x45\x78\x63\154\165\144\x65\144\40\x63\x6f\157\x6b\151\145\x20\x66\157\165\156\144\x2e", ["\x65\x78\143\154\x75\x64\145\144\x5f\x63\x6f\157\153\x69\145\x73" => $this->cokqaygwwygweuyk()]); return false; ysweqawmawicakeo: if (!($this->cskwmweqysskwckg("\155\141\x6e\144\x61\164\157\162\x79\137\x63\x6f\x6f\x6b\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto owisckseoogsugqq; } $this->yauwooaeicgosquo("\x4d\x69\163\x73\151\x6e\147\40\155\141\x6e\144\x61\x74\157\162\x79\40\x63\x6f\157\153\x69\145\72\40\160\141\147\145\x20\156\x6f\164\40\x70\x72\x6f\x63\x65\163\163\145\144\56", ["\155\151\163\163\151\x6e\147\x5f\143\x6f\157\153\151\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; owisckseoogsugqq: if (!($this->cskwmweqysskwckg("\165\x73\145\x72\x5f\141\x67\x65\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto ookcgumoacskyymy; } $this->yauwooaeicgosquo("\125\x73\x65\x72\40\x41\x67\x65\156\164\40\x69\x73\40\x65\x78\x63\x6c\x75\144\145\144\56", ["\x75\163\145\x72\137\x61\147\145\156\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\125\123\105\122\137\x41\x47\105\116\x54")]); return false; ookcgumoacskyymy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuseccewekgcgkyg; } $this->yauwooaeicgosquo("\102\165\146\146\145\162\40\143\157\156\164\x65\156\164\40\165\x6e\144\145\x72\40\x32\65\65\40\143\150\141\162\x61\x63\x74\x65\162\x73\x2e"); return false; cuseccewekgcgkyg: if (!(http_response_code() !== 200)) { goto kgysyqkoqgwmoscq; } $this->yauwooaeicgosquo("\120\x61\147\x65\x20\x69\163\40\156\x6f\x74\40\141\40\x32\60\60\40\x48\x54\124\120\40\162\145\163\x70\157\x6e\x73\145\40\x61\156\144\x20\143\141\156\x6e\x6f\x74\40\142\145\40\143\x61\x63\150\x65\x64\56"); return false; kgysyqkoqgwmoscq: if (!($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\x74\157\x70\164\151\155\151\172\145\160\x61\x67\x65") && $this->cowcgqokiosgaqic())) { goto makomwwyomweyamm; } $this->yauwooaeicgosquo("\104\117\x4e\124\117\x50\124\111\x4d\111\132\x45\x44\x50\101\x47\x45\40\151\163\x20\x64\145\146\151\x6e\x65\x64\56\40\120\141\x67\x65\x20\x63\x61\x6e\156\x6f\164\40\142\145\40\143\141\x63\x68\x65\144\x2e"); return false; makomwwyomweyamm: if (!($this->cskwmweqysskwckg("\x77\x70\137\64\60\64") && $this->kmmyuiwaogukwqqi())) { goto oqwcmgwimeisusoe; } $this->yauwooaeicgosquo("\127\120\40\x34\x30\x34\40\x70\141\147\145\x20\x69\163\x20\145\x78\x63\154\165\144\x65\144\x2e"); return false; oqwcmgwimeisusoe: if (!($this->cskwmweqysskwckg("\163\145\x61\x72\x63\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto acesyuieuuqwgkwm; } $this->yauwooaeicgosquo("\x53\145\x61\162\x63\x68\40\160\x61\147\x65\40\x69\x73\x20\x65\170\143\154\x75\x64\x65\144\56"); return false; acesyuieuuqwgkwm: if (!$this->cskwmweqysskwckg("\x69\163\137\x68\x74\155\x6c")) { goto qiaaqkymeuuueoqk; } if (!($this->cmaecekuqkwmemms("\x52\x45\123\x54\x5f\122\105\121\125\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto asaowisseacciyia; } unset($this->tests["\151\x73\x5f\150\164\155\x6c"]); asaowisseacciyia: qiaaqkymeuuueoqk: if (!($this->cskwmweqysskwckg("\x69\x73\x5f\150\x74\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ugswokwmkumcmigc; } $this->yauwooaeicgosquo("\x4e\157\x20\143\154\x6f\x73\x69\156\147\40\74\x2f\150\164\155\x6c\x3e\x20\167\141\163\40\x66\x6f\x75\x6e\144\56"); return false; ugswokwmkumcmigc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\157\160\164\151\155\151\x7a\141\x74\151\157\156\137\141\x6c\x6c\157\x77\137\x74\157\137\163\x74\x61\162\x74\137\x62\x75\x66\146\x65\x72\137\160\162\157\x63\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gwiaimosqoiquwkc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); owgakkqgckqcegoi: return apply_filters("\x70\x72\137\157\160\164\151\x6d\151\x7a\x61\164\x69\157\x6e\137\150\x61\163\x5f{$ymqmyyeuycgmigyo}\x5f\164\x65\x73\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\x5c\x73\x2a\134\57\134\x73\52\150\x74\155\x6c\x5c\163\52\x3e\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\x28\x3f\72\x2e\x2b\x2f\51\77" . $wp_rewrite->feed_base . "\x28\77\x3a\x2f\50\77\x3a\x2e\x2b\x2f\77\51\77\x29\x3f\44"; return (bool) preg_match("\43\136\50{$uckmmkmoeikwsiqg}\x29\x24\x23\151", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cigesysuauaiccms; } return $this->eecucukcqkqysiau(__FUNCTION__); cigesysuauaiccms: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qumkwsqqocooyuoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qumkwsqqocooyuoq: $ucasskoyoewwmmii = ["\x72\157\x62\x6f\x74\x73\56\x74\170\x74", "\56\x68\164\x61\143\143\x65\163\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wwswmaewcaisauei; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wwswmaewcaisauei: kkewoqqowugagwoy: } gcskyqewysqaceeg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsemeeocquawyauo; } return $this->eecucukcqkqysiau(__FUNCTION__); wsemeeocquawyauo: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto wmaeicoyyciuaiuy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto ocgkwqqmgasuoies; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ocgkwqqmgasuoies: wmaeicoyyciuaiuy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ooysmgyeqoiesgqm; } return $this->eecucukcqkqysiau(__FUNCTION__); ooysmgyeqoiesgqm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kwoyiysciqumswcy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwoyiysciqumswcy: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\x64\x65\x78\x2e\x70\x68\x70")) { goto aaogeemgkogagkai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aaogeemgkogagkai: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\x70" => 1, "\170\155\154" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\x4e\107\137\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x53")), ["\157\156", "\x31"]) || "\x34\64\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\122\x5f\x50\x4f\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\143\x75\x73\x74\x6f\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\105\101\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qqmmycmsoqegcqqw; } return $this->eecucukcqkqysiau(__FUNCTION__); qqmmycmsoqegcqqw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto isqwwmikecauwyuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); isqwwmikecauwyuc: $yccgiaiouekkouay = ["\163" => 1, "\154\x61\156\147" => 1, "\x70\x65\x72\x6d\141\x6c\151\156\x6b\137\156\x61\155\x65" => 1, "\154\x70\55\x76\x61\x72\151\x61\164\x69\x6f\156\55\151\144" => 1, "\x58\104\105\x42\125\x47\137\123\x45\123\123\111\x4f\116\x5f\x53\x54\101\122\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto oiiqqgyqmggyiums; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oiiqqgyqmggyiums: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\x5f\x71\x75\x65\x72\x79\x5f\x73\x74\162\x69\156\147\x73"); if ($yccgiaiouekkouay) { goto magymcqykamwqigw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); magymcqykamwqigw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ukogwqiuuuakkawy; } return $this->eecucukcqkqysiau(__FUNCTION__); ukogwqiuuuakkawy: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto gicmaqmuscawegie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gicmaqmuscawegie: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oymyqcoekqyuiguq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oymyqcoekqyuiguq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ucksaiwquekagyqe; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ucksaiwquekagyqe: gygqgauaceiuawkq: } ayamomygygmgwgkg: if (empty($eiocugauqgouiuyi)) { goto iyeswoaqkaeggiiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iyeswoaqkaeggiiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto asqqqqakiagymemk; } return $this->eecucukcqkqysiau(__FUNCTION__); asqqqqakiagymemk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto jkgouewqysmscmqs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jkgouewqysmscmqs: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\x6d\141\x6e\144\141\164\x6f\162\x79\x5f\x63\x6f\157\153\151\145\x73"))); if ($this->wemyikwikgwqwuoc()) { goto sgiuwkisugmewmcs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); sgiuwkisugmewmcs: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto eacysqsegwcqawsa; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); eacysqsegwcqawsa: iquecygaakmiomeg: } kceeuicccqscwgsu: if (!empty($yiycakoikkyuokgk)) { goto yimeskeioamqmuwg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yimeskeioamqmuwg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\x6f\x70\164\x69\x6d\x69\x7a\x61\x74\151\x6f\x6e\x5f\157\166\x65\162\162\x69\144\145\137\x64\x6f\156\164\x5f\x6f\160\164\x69\x6d\151\x7a\x65", $this->cmaecekuqkwmemms("\120\x52\137\117\x50\x54\111\x4d\x49\132\101\x54\x49\117\x4e\137\104\x4f\116\124\137\117\120\x54\x49\x4d\111\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\x34\60\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\137\x73\x65\x61\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\x6f\160\x74\151\155\x69\x7a\x61\x74\x69\157\x6e\x5f\157\160\x74\151\155\x69\x7a\145\x5f\x73\x65\x61\162\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\137\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yeemsgmumygmumqw; } return $this->eecucukcqkqysiau(__FUNCTION__); yeemsgmumygmumqw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto wkaoyycsoeoyqcae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkaoyycsoeoyqcae: if (!$this->aceaeommyuooiqge()->get("\x6d\157\142\x69\154\x65\x5f\143\141\143\150\x65")) { goto cwugokqsmiomgmqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cwugokqsmiomgmqg: $wayquiskgeuoqamk = "\62\x2e\60\x5c\40\115\x4d\x50\x7c\62\64\60\x78\x33\x32\60\174\64\60\60\x58\x32\x34\x30\174\x41\166\141\156\x74\x47\x6f\174\x42\x6c\x61\x63\x6b\102\x65\162\162\171\174\x42\x6c\x61\172\145\x72\x7c\103\x65\x6c\154\160\150\157\x6e\x65\174\x44\x61\x6e\x67\145\162\174\x44\157\103\157\x4d\157\x7c\105\154\x61\151\156\x65\57\63\56\60\x7c\x45\x75\144\x6f\x72\x61\127\x65\x62\174\x47\157\157\x67\154\145\142\157\164\x2d\115\x6f\x62\151\154\145\174\x68\x69\160\164\x6f\160\x7c\x49\x45\115\x6f\142\x69\154\x65\174\x4b\x59\117\103\x45\x52\101\x2f\127\130\63\x31\60\x4b\174\114\x47\x2f\x55\x39\x39\x30\x7c\115\111\x44\x50\55\x32\x2e\x7c\x4d\x4d\105\106\62\x30\x7c\x4d\117\124\x2d\x56\174\116\x65\164\x46\x72\157\156\164\x7c\116\x65\167\x74\x7c\116\x69\156\x74\x65\x6e\144\x6f\x5c\x20\x57\151\x69\174\x4e\x69\164\162\157\x7c\116\157\x6b\151\x61\174\117\x70\145\x72\141\134\x20\x4d\151\156\x69\x7c\120\x61\x6c\155\x7c\x50\154\141\171\x53\164\x61\x74\151\157\x6e\x5c\40\x50\157\x72\x74\141\x62\154\x65\x7c\x70\x6f\x72\164\141\154\x6d\x6d\x6d\x7c\120\162\x6f\x78\151\156\145\x74\x7c\x50\x72\x6f\170\x69\x4e\x65\164\174\x53\x48\101\x52\120\x2d\x54\121\55\107\x58\61\x30\174\123\x48\107\x2d\x69\71\60\60\174\x53\155\141\154\x6c\x7c\123\157\156\171\105\162\x69\x63\x73\163\157\156\x7c\123\x79\155\142\151\141\156\134\x20\x4f\123\x7c\x53\171\155\142\x69\x61\156\117\x53\x7c\124\123\x32\61\x69\x2d\61\60\x7c\125\x50\x2e\102\x72\x6f\167\x73\x65\x72\x7c\125\x50\56\114\151\x6e\x6b\174\167\x65\x62\x4f\x53\174\127\151\156\x64\157\x77\x73\x5c\40\x43\x45\x7c\x57\x69\x6e\127\101\120\x7c\131\x61\x68\157\157\x53\x65\x65\x6b\x65\x72\57\x4d\61\101\x31\x2d\122\62\104\62\174\x69\x50\x68\x6f\156\x65\x7c\151\120\x6f\x64\174\101\x6e\144\162\x6f\151\144\174\102\154\x61\x63\x6b\102\x65\162\162\x79\x39\65\x33\60\x7c\114\x47\x2d\x54\x55\x39\x31\65\134\40\117\142\151\x67\x6f\174\x4c\x47\105\134\40\x56\130\x7c\167\145\x62\x4f\123\174\116\157\153\151\x61\x35\70\x30\60"; if (!preg_match("\x23\x5e\x2e\52\50{$wayquiskgeuoqamk}\x29\56\x2a\43\x69", $uowwycywwssskuys)) { goto uuuceqkseqkqawko; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uuuceqkseqkqawko: $wayquiskgeuoqamk = "\167\x33\143\x5c\40\174\167\63\143\55\174\141\143\163\x2d\x7c\141\x6c\x61\166\x7c\x61\154\x63\x61\x7c\141\155\x6f\x69\x7c\x61\x75\x64\x69\174\141\166\141\156\174\x62\145\x6e\x71\174\142\x69\x72\144\174\142\154\141\143\x7c\142\x6c\x61\172\x7c\142\x72\145\x77\x7c\143\145\x6c\154\174\x63\154\x64\x63\174\x63\x6d\x64\x2d\x7c\144\x61\156\147\x7c\x64\157\143\157\x7c\x65\x72\x69\x63\x7c\150\x69\x70\x74\174\150\x74\x63\x5f\x7c\151\156\x6e\157\174\151\x70\141\161\174\x69\x70\x6f\x64\174\152\x69\147\163\174\x6b\144\144\151\x7c\153\145\152\151\174\x6c\145\x6e\157\174\x6c\147\55\x63\174\154\147\55\144\174\x6c\x67\55\147\x7c\x6c\147\x65\x2d\174\x6c\x67\57\x75\x7c\155\x61\165\151\x7c\155\x61\x78\x6f\174\155\151\144\160\174\x6d\x69\x74\x73\174\155\155\x65\x66\174\x6d\x6f\x62\151\174\155\157\164\55\x7c\x6d\157\164\x6f\174\x6d\x77\142\160\x7c\156\x65\143\x2d\174\x6e\x65\x77\164\x7c\156\x6f\153\x69\x7c\x70\141\154\155\x7c\160\x61\156\141\x7c\160\141\x6e\x74\x7c\160\150\x69\154\x7c\x70\x6c\141\x79\x7c\x70\157\x72\164\x7c\x70\x72\157\x78\174\x71\x77\x61\x70\174\x73\x61\x67\145\174\163\x61\x6d\x73\x7c\163\x61\156\x79\174\163\143\x68\x2d\x7c\x73\145\x63\x2d\174\x73\x65\x6e\x64\x7c\x73\x65\x72\x69\174\163\147\150\x2d\x7c\163\150\x61\x72\174\x73\x69\145\x2d\x7c\163\151\x65\x6d\x7c\x73\155\141\x6c\x7c\x73\155\141\162\174\163\x6f\156\171\174\x73\160\x68\55\174\163\171\x6d\x62\174\164\x2d\x6d\x6f\174\x74\145\x6c\x69\174\x74\x69\155\x2d\x7c\164\x6f\x73\x68\x7c\164\163\155\x2d\174\x75\x70\x67\61\x7c\165\160\x73\151\174\x76\153\55\166\174\166\x6f\x64\141\174\167\x61\160\x2d\174\167\x61\x70\141\x7c\x77\x61\x70\x69\174\x77\141\160\x70\x7c\167\x61\160\162\174\167\145\x62\143\174\167\x69\x6e\x77\174\167\x69\156\x77\174\x78\144\x61\134\40\x7c\170\144\x61\x2d"; if (!preg_match("\x23\136\x28{$wayquiskgeuoqamk}\x29\x2e\x2a\x23\x69", $uowwycywwssskuys)) { goto ekoegocuqoycoeyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ekoegocuqoycoeyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yksamaucqkqsawkk; } return $this->eecucukcqkqysiau(__FUNCTION__); yksamaucqkqsawkk: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto akeoaicoieaiekcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); akeoaicoieaiekcw: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\x72\145\152\x65\143\x74\x5f\165\141"); if ($mqsuiayuwmwqaqwm) { goto kskqquqsegiiogek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kskqquqsegiiogek: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mocaoayiouggauiy; } return $this->eecucukcqkqysiau(__FUNCTION__); mocaoayiouggauiy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\143\150\x65\x5f\x72\145\x6a\145\x63\x74\x5f\x75\162\151"); if ($escsaeeosigewsme) { goto ygskksomysgaokek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ygskksomysgaokek: $yciaosuiyeieceug = !preg_match("\43\x5e\50{$escsaeeosigewsme}\x29\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\125\x53\x45\122\x5f\x41\107\105\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwcwmkowgooocaem; } return $this->eecucukcqkqysiau(__FUNCTION__); wwcwmkowgooocaem: $yygmoeguaqyumuui = [ "\110\x54\124\x50\x5f\103\106\x5f\103\x4f\116\x4e\105\x43\124\x49\116\x47\137\111\120", "\110\124\x54\x50\x5f\x43\114\111\x45\116\124\x5f\111\120", "\110\124\124\x50\137\130\x5f\106\117\122\x57\x41\122\x44\105\x44\x5f\x46\117\x52", "\x48\x54\x54\120\137\130\x5f\106\117\122\x57\x41\x52\104\105\x44", "\110\124\x54\120\137\x58\137\x43\114\x55\123\x54\105\x52\137\103\x4c\111\105\116\x54\x5f\111\x50", "\110\124\124\120\137\x58\137\x52\x45\x41\x4c\137\111\120", "\x48\x54\124\120\x5f\x46\117\x52\x57\101\x52\104\x45\x44\x5f\x46\x4f\x52", "\110\x54\x54\120\x5f\106\117\x52\127\101\122\104\105\x44", "\x52\105\x4d\x4f\124\x45\x5f\101\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto aeaciamekuqyieys; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wyugqoowakyicyic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wyugqoowakyicyic: aeaciamekuqyieys: becceuuwokgoaewy: } qgkiguggkyiycwow: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\x30\56\x30\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugiqiewymimqecsu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugiqiewymimqecsu: $yywgiquyoymymqwk = [ "\62\60\70\56\x37\x30\56\62\x34\67\56\x31\x35\x37" => '', "\61\67\62\x2e\x32\x35\65\56\x34\x38\x2e\61\63\60" => '', "\x31\67\x32\x2e\x32\65\x35\56\64\70\56\x31\x33\x31" => '', "\61\x37\x32\56\62\65\65\56\x34\70\x2e\x31\x33\62" => '', "\x31\x37\62\56\x32\65\x35\56\64\70\56\61\x33\x33" => '', "\61\x37\62\56\x32\x35\65\x2e\x34\x38\x2e\61\63\x34" => '', "\x31\x37\x32\x2e\x32\65\x35\x2e\x34\70\56\x31\x33\65" => '', "\x31\67\62\x2e\x32\65\x35\56\x34\x38\x2e\x31\63\66" => '', "\x31\67\62\56\62\65\x35\56\64\70\x2e\61\63\x37" => '', "\x31\x37\62\56\62\x35\65\56\64\70\56\61\x33\x38" => '', "\61\x37\62\56\62\x35\x35\x2e\x34\x38\56\x31\63\x39" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\x34\x38\x2e\x31\64\x30" => '', "\61\x37\x32\56\x32\x35\65\x2e\x34\70\56\61\x34\x31" => '', "\61\67\x32\56\x32\65\65\x2e\64\70\56\x31\64\62" => '', "\61\x37\x32\x2e\x32\x35\x35\x2e\64\70\x2e\61\x34\63" => '', "\61\x37\62\56\x32\x35\65\x2e\64\70\56\61\x34\64" => '', "\61\67\x32\56\x32\x35\x35\x2e\x34\70\56\61\64\x35" => '', "\61\x37\x32\56\62\x35\x35\x2e\64\x38\56\x31\x34\66" => '', "\61\67\62\56\62\65\x35\56\64\70\56\x31\x34\67" => '', "\65\62\56\62\62\71\56\61\62\x32\x2e\62\x34\x30" => '', "\61\60\x34\56\x32\61\64\x2e\67\62\56\61\x30\61" => '', "\x31\x33\x2e\x36\66\x2e\x37\x2e\61\x31" => '', "\x31\x33\56\x38\x35\56\x32\64\x2e\x38\x33" => '', "\x31\x33\x2e\70\65\56\62\64\56\71\x30" => '', "\x31\63\x2e\x38\65\56\70\x32\56\x32\x36" => '', "\x34\x30\x2e\x37\64\56\62\64\62\x2e\x32\65\63" => '', "\64\60\x2e\67\64\56\x32\64\63\56\x31\x33" => '', "\x34\60\x2e\x37\x34\x2e\x32\64\63\56\x31\67\x36" => '', "\61\60\x34\x2e\62\x31\64\56\x34\x38\56\x32\x34\x37" => '', "\61\65\67\56\65\65\x2e\x31\70\71\56\61\x38\x39" => '', "\61\60\64\x2e\x32\x31\x34\56\61\61\60\x2e\x31\63\x35" => '', "\67\60\56\x33\x37\56\x38\x33\56\62\x34\x30" => '', "\x36\x35\56\65\62\56\x33\66\56\62\x35\60" => '', "\x31\63\x2e\x37\70\56\62\x31\66\x2e\65\66" => '', "\65\62\x2e\61\66\x32\x2e\x32\61\62\x2e\61\x36\x33" => '', "\62\63\56\x39\x36\56\63\x34\56\x31\60\x35" => '', "\x36\x35\x2e\x35\62\x2e\61\x31\x33\56\62\63\66" => '', "\x31\67\x32\56\x32\x35\65\x2e\66\61\x2e\x33\x34" => '', "\x31\x37\x32\56\62\65\x35\x2e\x36\61\x2e\x33\65" => '', "\61\67\62\x2e\62\65\x35\56\66\x31\x2e\63\66" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\66\61\56\x33\67" => '', "\61\x37\x32\56\x32\65\65\x2e\x36\61\x2e\x33\70" => '', "\61\67\x32\x2e\x32\65\65\56\66\61\x2e\63\x39" => '', "\61\67\62\56\62\x35\65\x2e\66\61\x2e\64\60" => '', "\x35\62\56\x32\x33\67\x2e\x32\x33\65\x2e\61\70\x35" => '', "\x35\62\x2e\x32\63\67\x2e\x32\65\x30\56\x37\x33" => '', "\x35\62\x2e\x32\63\x37\x2e\62\63\x36\56\x31\64\65" => '', "\x31\x30\64\x2e\64\61\x2e\62\x2e\x31\71" => '', "\61\x39\61\x2e\62\63\x35\x2e\71\70\x2e\61\66\x34" => '', "\61\x39\61\x2e\x32\x33\x35\56\71\71\x2e\62\62\61" => '', "\61\71\x31\x2e\x32\63\62\x2e\x31\71\x34\x2e\65\x31" => '', "\61\60\64\x2e\62\x31\x31\56\61\x34\x33\x2e\x38" => '', "\61\x30\x34\x2e\x32\61\x31\x2e\x31\x36\65\56\65\63" => '', "\65\62\56\x31\67\x32\x2e\61\64\56\x38\x37" => '', "\64\x30\x2e\x38\x33\x2e\70\71\x2e\62\x31\x34" => '', "\65\x32\x2e\61\x37\65\x2e\x35\67\56\x38\61" => '', "\x32\60\x2e\x31\x38\x38\56\x36\63\56\x31\65\61" => '', "\x32\60\56\x35\62\56\63\66\56\64\x39" => '', "\x35\62\x2e\x32\x34\x36\x2e\61\x36\x35\56\x31\65\x33" => '', "\x35\x31\x2e\x31\x34\64\x2e\x31\60\62\56\x32\x33\63" => '', "\61\x33\x2e\x37\x36\56\71\67\x2e\x32\62\64" => '', "\61\x30\62\x2e\x31\x33\63\x2e\61\66\x39\56\66\x36" => '', "\65\x32\x2e\x32\x33\61\56\61\x39\x39\56\x31\67\60" => '', "\x31\x33\56\65\63\56\61\x36\62\x2e\67" => '', "\x34\60\56\61\62\x33\56\62\x31\x38\x2e\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto iuysqgmmgqiywssm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iuysqgmmgqiywssm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\x55\x53\105\122\x5f\x41\107\x45\x4e\124"); if ($uowwycywwssskuys) { goto weouocwmwicayyiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); weouocwmwicayyiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\151\156\x67\x64\157\x6d\x50\141\147\145\123\160\x65\145\x64\x7c\x44\141\162\x65\x42\157\x6f\163\x74\174\107\157\157\147\x6c\x65\174\120\x54\123\124\x7c\x43\150\162\157\x6d\x65\55\114\x69\147\x68\x74\150\x6f\165\163\145\174\x57\x50\x20\122\157\x63\x6b\145\164\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\x45\x53\124\x5f\x55\x52\x49", ''); if (!$iyiwooigkweeewey) { goto ggyoywwggggekycs; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\x2f"); ggyoywwggggekycs: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gkkwmqoacciwomqs; } return ''; gkkwmqoacciwomqs: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto kucqcgeesiccuuia; } return $magawcseesgowoeo; kucqcgeesiccuuia: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto oycuaqewsskgkqci; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); oycuaqewsskgkqci: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\x53\124\x5f\115\105\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto amqgiisymksuuuss; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\150\145\x5f\151\147\x6e\x6f\x72\145\144\137\160\x61\x72\141\155\x65\x74\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ocmagamuyawyiyka; } ksort($eyagkkkqkwcuygso); ocmagamuyawyiyka: amqgiisymksuuuss: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; syoeqaqkseguwmgy: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto iwgmywqocewwgoeo; } if (strpos($euueacigmgoqkimu, "\56\56\x2f") === 0) { goto geasgywiogoeamek; } if (strpos($euueacigmgoqkimu, "\x2e\57") === 0) { goto umemmgiwimkymaya; } if (strpos($euueacigmgoqkimu, "\x2f\56\57") === 0) { goto woqkgwmkmqsuceuy; } if ("\x2f\56" === $euueacigmgoqkimu) { goto gsiaskgsukseumig; } if (strpos($euueacigmgoqkimu, "\57\x2e\56\57") === 0) { goto iquugwoswgkoiieg; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto wowmysuygugawmmu; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto ucasigqmoiwaimkk; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto sgiouaqukyycswqm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto gwkawguwsamuomuo; sgiouaqukyycswqm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); gwkawguwsamuomuo: goto uugwmywmaqomeksa; ucasigqmoiwaimkk: $euueacigmgoqkimu = ''; uugwmywmaqomeksa: goto mmmqqoemusicwgqg; wowmysuygugawmmu: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); mmmqqoemusicwgqg: goto xogaycsaesgqeqig; iquugwoswgkoiieg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); xogaycsaesgqeqig: goto syiyemqigyugagks; gsiaskgsukseumig: $euueacigmgoqkimu = "\57"; syiyemqigyugagks: goto imwiyqcekcykscui; woqkgwmkmqsuceuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); imwiyqcekcykscui: goto omsmaougqkqigogw; umemmgiwimkymaya: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); omsmaougqkqigogw: goto qweyymyuuqwcmkqg; geasgywiogoeamek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); qweyymyuuqwcmkqg: goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto guqmgiqaaowaauyo; } $icwicymcioeyeyek["\x70\x65\162\x6d\x61\154\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); guqmgiqaaowaauyo: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto mccimkgwkkamsime; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); mccimkgwkkamsime: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto ucaoyoamaycsiacq; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); ucaoyoamaycsiacq: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\x73\163\141\147\x65" => $uamcoiueqaamsqma, "\143\x6f\156\x74\x65\x78\x74" => $icwicymcioeyeyek]; } }

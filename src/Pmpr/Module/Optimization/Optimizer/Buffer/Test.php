<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637dda1d1856             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\163\163\154" => 0, "\x77\160\137\x34\x30\x34" => 1, "\163\x65\141\162\143\x68" => 1, "\x6d\157\x62\151\154\x65" => 1, "\x69\x73\137\150\x74\155\154" => 1, "\x71\x75\145\x72\171\137\x73\x74\x72\151\x6e\147" => 1, "\144\157\156\157\x74\x63\141\x63\150\x65\160\141\x67\145" => 1, "\162\x65\x6a\145\x63\164\x65\144\137\x63\x6f\x6f\x6b\151\x65" => 1, "\155\141\x6e\144\x61\164\157\x72\171\x5f\x63\157\x6f\153\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\163\x74\x73"])) { goto kwsqgqmwyyeykgum; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\163\164\x73"]); kwsqgqmwyyeykgum: if (!(!isset($ywmkwiwkosakssii["\143\157\157\153\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto emauuoieewwoeyqq; } $ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\145\163"] = $_COOKIE; emauuoieewwoeyqq: if (!(!isset($ywmkwiwkosakssii["\160\157\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto koukiyqaccegmquc; } $ywmkwiwkosakssii["\x70\157\x73\x74"] = $_POST; koukiyqaccegmquc: if (!(!isset($ywmkwiwkosakssii["\x67\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto ekakkiuuquqkccse; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; ekakkiuuquqkccse: $this->get = !empty($ywmkwiwkosakssii["\147\x65\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\164"]) ? $ywmkwiwkosakssii["\x67\x65\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\157\163\164"]) && is_array($ywmkwiwkosakssii["\x70\x6f\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\163\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\x6f\x6f\x6b\151\x65\163"]) ? $ywmkwiwkosakssii["\x63\157\x6f\153\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto oqwwacmigasucsoc; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\x63\165\163\164\157\155\x69\x7a\145" => '']); oqwwacmigasucsoc: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto egkeqqgakieyimuq; } $this->yauwooaeicgosquo("\x52\157\x62\157\164\x73\x2e\x74\170\x74\x20\157\162\x20\x2e\150\x74\141\143\143\x65\x73\x73\40\x66\151\x6c\x65\40\151\163\40\x65\170\x63\x6c\x75\x64\145\x64\56"); return false; egkeqqgakieyimuq: if (!$this->gymgcceeqssmesiu()) { goto cakuguiciaiaeukg; } $this->yauwooaeicgosquo("\120\x48\x50\x2c\x20\130\115\x4c\54\40\157\x72\40\x58\x53\114\x20\x66\151\x6c\x65\40\x69\163\x20\145\x78\143\154\x75\x64\x65\144\56"); return false; cakuguiciaiaeukg: if (!$this->goecwaaykqoaaagg()) { goto wswikooyuaaouqgk; } $this->yauwooaeicgosquo("\x41\144\x6d\151\x6e\x20\157\162\x20\101\112\x41\x58\x20\125\122\114\x20\x69\163\40\x65\x78\143\154\x75\144\145\x64\x2e"); return false; wswikooyuaaouqgk: if (!$this->sgsscqasgeyeicoe()) { goto awwaiioyywmokwsm; } $this->yauwooaeicgosquo("\x41\x64\155\x69\156\40\157\x72\x20\101\x4a\x41\x58\40\x55\x52\114\40\x69\163\40\x65\x78\x63\154\x75\x64\x65\144\56"); return false; awwaiioyywmokwsm: if ($this->gooeyogikcusgwuu()) { goto ckwmkquuyyugigom; } $this->yauwooaeicgosquo("\122\x65\x71\x75\145\x73\x74\x20\155\145\x74\150\157\144\x20\151\163\x20\156\x6f\x74\x20\141\x6c\x6c\157\167\145\x64\56\x20\120\141\147\145\40\x63\141\x6e\x6e\x6f\x74\40\x62\x65\40\x63\x61\143\x68\x65\x64\x2e", ["\162\x65\x71\165\145\x73\164\137\155\145\164\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; ckwmkquuyyugigom: if ($this->cskwmweqysskwckg()) { goto cumeycwmuuqawwyu; } $this->lastError = []; return true; cumeycwmuuqawwyu: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\x63\145\x73\x73"]) { goto uaicwcqwauosmsqm; } $this->yauwooaeicgosquo("\116\x6f\40\x63\x6f\156\146\151\147\x20\x66\151\154\145\x20\146\x6f\165\x6e\x64", ["\143\157\x6e\x66\x69\x67\x5f\160\x61\164\150" => $uiewakwqscemywuo["\160\141\x74\150"]]); return false; uaicwcqwauosmsqm: if (!($this->cskwmweqysskwckg("\161\x75\x65\x72\x79\x5f\163\x74\162\151\x6e\147") && !$this->koguieumooaesyww())) { goto gsqcoqqsioiyoykq; } $this->yauwooaeicgosquo("\121\x75\145\x72\x79\x20\x73\x74\x72\x69\x6e\147\x20\x55\x52\x4c\40\x69\x73\x20\x65\x78\143\x6c\165\144\x65\x64\56", $_GET); return false; gsqcoqqsioiyoykq: if (!($this->cskwmweqysskwckg("\163\163\154") & !$this->eqwgocqwoyyykwke())) { goto goaowamiyyamueiw; } $this->yauwooaeicgosquo("\123\123\114\40\143\141\x63\x68\145\x20\156\x6f\x74\40\x61\160\160\154\151\x65\144\40\164\157\x20\x70\x61\x67\x65\56"); return false; goaowamiyyamueiw: if (!($this->cskwmweqysskwckg("\x75\x72\151") && !$this->qweiomkkuikwugks())) { goto iaomqomgiwiegoca; } $this->yauwooaeicgosquo("\x50\x61\147\x65\x20\x69\x73\x20\145\170\x63\x6c\165\144\145\144\x2e"); return false; iaomqomgiwiegoca: if (!($this->cskwmweqysskwckg("\x72\145\152\145\143\x74\145\x64\137\x63\x6f\x6f\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto ysweqawmawicakeo; } $this->yauwooaeicgosquo("\x45\x78\143\x6c\165\144\145\x64\x20\x63\157\157\x6b\151\x65\40\x66\157\165\156\144\56", ["\145\x78\x63\154\165\x64\145\x64\x5f\143\x6f\x6f\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; ysweqawmawicakeo: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\141\164\157\162\171\x5f\x63\x6f\x6f\153\x69\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto owisckseoogsugqq; } $this->yauwooaeicgosquo("\115\x69\163\x73\x69\x6e\147\40\x6d\x61\x6e\x64\141\164\x6f\162\x79\x20\143\157\x6f\x6b\x69\x65\x3a\40\x70\141\x67\145\40\156\x6f\164\40\160\162\x6f\143\145\x73\x73\x65\x64\x2e", ["\x6d\151\163\163\151\156\147\x5f\x63\157\x6f\153\151\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; owisckseoogsugqq: if (!($this->cskwmweqysskwckg("\x75\x73\x65\162\137\141\147\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto ookcgumoacskyymy; } $this->yauwooaeicgosquo("\125\163\145\162\x20\x41\147\x65\156\x74\x20\x69\163\x20\x65\x78\x63\x6c\165\144\145\144\56", ["\165\x73\145\162\x5f\x61\147\x65\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\x55\x53\x45\x52\137\101\x47\x45\116\124")]); return false; ookcgumoacskyymy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuseccewekgcgkyg; } $this->yauwooaeicgosquo("\102\165\146\x66\145\162\x20\143\x6f\x6e\164\145\x6e\x74\x20\x75\156\144\x65\x72\x20\62\x35\65\x20\x63\150\141\162\141\143\x74\x65\162\x73\56"); return false; cuseccewekgcgkyg: if (!(http_response_code() !== 200)) { goto kgysyqkoqgwmoscq; } $this->yauwooaeicgosquo("\120\x61\x67\x65\40\151\x73\40\x6e\157\164\x20\141\40\62\x30\60\x20\110\124\124\x50\x20\162\145\x73\x70\x6f\156\x73\x65\x20\x61\156\144\x20\143\141\x6e\x6e\157\x74\40\142\145\x20\143\x61\143\150\x65\144\56"); return false; kgysyqkoqgwmoscq: if (!($this->cskwmweqysskwckg("\x64\157\x6e\x6f\164\x6f\160\x74\x69\155\x69\x7a\145\x70\141\x67\145") && $this->cowcgqokiosgaqic())) { goto makomwwyomweyamm; } $this->yauwooaeicgosquo("\104\x4f\x4e\x54\x4f\120\x54\x49\115\x49\x5a\105\104\120\x41\107\105\x20\151\163\x20\x64\x65\146\151\x6e\145\x64\56\x20\120\141\x67\145\x20\143\x61\x6e\x6e\x6f\164\x20\142\x65\40\143\x61\x63\x68\x65\x64\x2e"); return false; makomwwyomweyamm: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto oqwcmgwimeisusoe; } $this->yauwooaeicgosquo("\127\x50\40\x34\60\64\x20\x70\141\147\145\x20\x69\163\40\x65\170\143\154\x75\x64\145\144\x2e"); return false; oqwcmgwimeisusoe: if (!($this->cskwmweqysskwckg("\163\145\x61\162\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto acesyuieuuqwgkwm; } $this->yauwooaeicgosquo("\x53\x65\141\162\x63\150\x20\x70\x61\x67\145\x20\x69\163\40\x65\170\x63\154\165\144\x65\144\56"); return false; acesyuieuuqwgkwm: if (!$this->cskwmweqysskwckg("\151\x73\x5f\150\x74\x6d\x6c")) { goto qiaaqkymeuuueoqk; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\x54\137\x52\x45\121\125\x45\x53\x54") || $this->gaiygescoqgyusaa())) { goto asaowisseacciyia; } unset($this->tests["\151\x73\x5f\150\164\x6d\x6c"]); asaowisseacciyia: qiaaqkymeuuueoqk: if (!($this->cskwmweqysskwckg("\x69\163\137\x68\x74\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ugswokwmkumcmigc; } $this->yauwooaeicgosquo("\x4e\x6f\40\143\154\x6f\x73\151\x6e\147\x20\x3c\x2f\x68\164\155\x6c\x3e\40\167\141\x73\x20\146\x6f\165\156\144\56"); return false; ugswokwmkumcmigc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\157\160\164\x69\x6d\151\x7a\141\164\151\x6f\156\137\x61\x6c\154\x6f\x77\137\x74\157\137\163\164\x61\162\164\137\142\165\146\x66\145\x72\x5f\160\x72\157\143\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gwiaimosqoiquwkc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); owgakkqgckqcegoi: return apply_filters("\160\x72\137\157\x70\x74\151\155\x69\172\x61\164\x69\157\156\137\150\x61\163\137{$ymqmyyeuycgmigyo}\x5f\x74\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\134\x73\52\x5c\x2f\x5c\x73\x2a\x68\x74\x6d\154\x5c\x73\52\x3e\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\x3a\x2e\x2b\57\51\77" . $wp_rewrite->feed_base . "\x28\77\72\x2f\x28\x3f\x3a\x2e\53\57\x3f\51\77\51\77\44"; return (bool) preg_match("\x23\136\50{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cigesysuauaiccms; } return $this->eecucukcqkqysiau(__FUNCTION__); cigesysuauaiccms: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto qumkwsqqocooyuoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qumkwsqqocooyuoq: $ucasskoyoewwmmii = ["\x72\x6f\x62\x6f\x74\x73\56\164\x78\x74", "\56\x68\x74\x61\x63\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wwswmaewcaisauei; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wwswmaewcaisauei: kkewoqqowugagwoy: } gcskyqewysqaceeg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wsemeeocquawyauo; } return $this->eecucukcqkqysiau(__FUNCTION__); wsemeeocquawyauo: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto wmaeicoyyciuaiuy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto ocgkwqqmgasuoies; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ocgkwqqmgasuoies: wmaeicoyyciuaiuy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ooysmgyeqoiesgqm; } return $this->eecucukcqkqysiau(__FUNCTION__); ooysmgyeqoiesgqm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kwoyiysciqumswcy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwoyiysciqumswcy: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\x64\x65\x78\56\x70\x68\x70")) { goto aaogeemgkogagkai; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aaogeemgkogagkai: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\170\x6d\x6c" => 1, "\x78\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\x4e\107\x5f\x41\112\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\123")), ["\x6f\156", "\x31"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\x56\105\122\137\x50\117\x52\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\x63\165\x73\x74\157\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\x54" => 1, "\x48\x45\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qqmmycmsoqegcqqw; } return $this->eecucukcqkqysiau(__FUNCTION__); qqmmycmsoqegcqqw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto isqwwmikecauwyuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); isqwwmikecauwyuc: $yccgiaiouekkouay = ["\x73" => 1, "\x6c\141\156\x67" => 1, "\160\145\x72\x6d\141\154\151\156\153\137\x6e\x61\x6d\145" => 1, "\x6c\x70\x2d\166\141\x72\x69\x61\164\151\157\156\x2d\151\144" => 1, "\130\x44\x45\102\125\x47\x5f\123\105\x53\123\111\x4f\116\x5f\123\124\101\122\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto oiiqqgyqmggyiums; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oiiqqgyqmggyiums: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\137\x71\x75\145\162\x79\137\163\x74\162\151\156\147\163"); if ($yccgiaiouekkouay) { goto magymcqykamwqigw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); magymcqykamwqigw: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ukogwqiuuuakkawy; } return $this->eecucukcqkqysiau(__FUNCTION__); ukogwqiuuuakkawy: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto gicmaqmuscawegie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gicmaqmuscawegie: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto oymyqcoekqyuiguq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oymyqcoekqyuiguq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ucksaiwquekagyqe; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ucksaiwquekagyqe: gygqgauaceiuawkq: } ayamomygygmgwgkg: if (empty($eiocugauqgouiuyi)) { goto iyeswoaqkaeggiiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); iyeswoaqkaeggiiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto asqqqqakiagymemk; } return $this->eecucukcqkqysiau(__FUNCTION__); asqqqqakiagymemk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto jkgouewqysmscmqs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jkgouewqysmscmqs: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\143\150\x65\137\155\x61\156\x64\x61\164\x6f\x72\x79\137\143\x6f\157\x6b\151\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto sgiuwkisugmewmcs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); sgiuwkisugmewmcs: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto eacysqsegwcqawsa; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); eacysqsegwcqawsa: iquecygaakmiomeg: } kceeuicccqscwgsu: if (!empty($yiycakoikkyuokgk)) { goto yimeskeioamqmuwg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yimeskeioamqmuwg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\137\x6f\160\x74\151\x6d\x69\x7a\141\x74\x69\157\x6e\x5f\x6f\x76\145\162\x72\x69\144\x65\x5f\x64\157\x6e\164\x5f\x6f\160\x74\151\155\x69\172\145", $this->cmaecekuqkwmemms("\120\x52\x5f\117\x50\124\x49\x4d\x49\x5a\x41\124\111\117\x4e\137\104\117\x4e\x54\x5f\x4f\x50\124\111\x4d\111\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\x5f\x34\60\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\137\163\x65\141\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\x5f\157\160\164\151\155\x69\x7a\x61\164\151\x6f\156\x5f\x6f\x70\x74\x69\x6d\151\172\145\137\x73\145\141\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\137\163\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yeemsgmumygmumqw; } return $this->eecucukcqkqysiau(__FUNCTION__); yeemsgmumygmumqw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto wkaoyycsoeoyqcae; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkaoyycsoeoyqcae: if (!$this->aceaeommyuooiqge()->get("\155\x6f\x62\x69\x6c\145\x5f\x63\141\143\150\145")) { goto cwugokqsmiomgmqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cwugokqsmiomgmqg: $wayquiskgeuoqamk = "\62\x2e\60\134\x20\115\x4d\120\x7c\x32\x34\x30\170\x33\62\x30\x7c\64\60\60\x58\62\x34\x30\x7c\x41\166\141\156\164\x47\x6f\x7c\x42\x6c\141\x63\153\102\x65\x72\x72\171\174\x42\154\x61\x7a\x65\162\x7c\x43\145\154\154\160\x68\157\x6e\x65\174\104\x61\156\x67\x65\162\174\104\157\103\157\x4d\x6f\x7c\x45\x6c\x61\x69\x6e\x65\x2f\63\x2e\x30\x7c\x45\165\144\157\162\x61\127\145\142\174\x47\157\x6f\147\154\x65\x62\x6f\164\x2d\x4d\x6f\x62\x69\x6c\145\x7c\x68\151\160\164\x6f\160\174\111\105\115\157\x62\x69\x6c\145\x7c\x4b\x59\117\x43\105\122\101\57\127\130\x33\x31\60\x4b\174\114\107\x2f\125\x39\71\x30\x7c\x4d\x49\104\x50\55\x32\x2e\174\115\x4d\105\106\x32\x30\x7c\x4d\117\124\x2d\x56\x7c\116\145\x74\x46\x72\157\156\164\174\x4e\145\x77\164\x7c\x4e\151\156\x74\x65\156\x64\x6f\134\40\x57\151\x69\x7c\x4e\x69\x74\162\157\x7c\116\157\153\151\x61\x7c\117\160\145\x72\x61\134\40\x4d\151\156\x69\174\x50\x61\x6c\155\174\x50\154\141\x79\123\164\141\x74\x69\157\156\134\x20\x50\x6f\162\164\141\x62\x6c\145\x7c\160\157\162\x74\x61\x6c\x6d\155\155\174\120\162\157\x78\151\156\x65\164\x7c\120\162\x6f\170\151\x4e\145\164\174\123\110\101\x52\x50\55\x54\x51\x2d\107\x58\61\60\x7c\123\110\107\x2d\x69\x39\60\60\174\123\155\141\154\154\x7c\123\157\156\171\x45\x72\x69\143\163\x73\157\156\x7c\123\171\x6d\142\x69\x61\x6e\x5c\x20\117\x53\174\123\x79\x6d\x62\x69\141\156\117\x53\x7c\x54\x53\x32\x31\151\55\x31\x30\174\x55\120\56\x42\162\x6f\167\x73\x65\162\174\x55\120\x2e\114\x69\156\x6b\x7c\167\145\142\x4f\x53\x7c\127\151\x6e\144\x6f\167\x73\x5c\40\103\105\174\x57\151\x6e\127\x41\120\174\131\x61\150\157\x6f\x53\145\x65\153\145\x72\57\x4d\61\x41\61\55\x52\62\x44\62\174\151\120\x68\157\156\x65\174\x69\120\x6f\144\174\x41\x6e\x64\162\x6f\151\144\174\x42\x6c\141\x63\x6b\x42\145\x72\x72\x79\x39\x35\63\60\174\x4c\x47\55\x54\x55\71\61\65\x5c\40\117\142\151\x67\157\174\114\x47\x45\134\x20\x56\x58\174\x77\x65\142\x4f\x53\174\116\157\153\151\141\65\70\x30\x30"; if (!preg_match("\43\136\x2e\x2a\x28{$wayquiskgeuoqamk}\51\56\x2a\x23\x69", $uowwycywwssskuys)) { goto uuuceqkseqkqawko; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uuuceqkseqkqawko: $wayquiskgeuoqamk = "\x77\x33\x63\134\x20\x7c\x77\x33\x63\55\x7c\x61\x63\x73\x2d\174\x61\154\141\x76\x7c\x61\x6c\143\141\174\141\x6d\x6f\x69\x7c\141\165\x64\151\174\141\x76\x61\156\174\x62\x65\x6e\161\x7c\x62\x69\162\x64\174\x62\x6c\141\143\174\x62\x6c\x61\x7a\x7c\x62\162\x65\167\174\143\145\154\154\x7c\143\154\144\143\174\143\x6d\144\x2d\174\144\x61\x6e\147\174\x64\157\x63\x6f\174\x65\x72\x69\143\174\x68\151\160\x74\174\150\x74\x63\137\x7c\x69\156\156\x6f\174\151\160\x61\x71\174\x69\x70\157\144\x7c\x6a\x69\x67\x73\174\x6b\144\144\x69\174\153\145\x6a\x69\x7c\x6c\x65\156\157\x7c\x6c\x67\55\x63\174\154\x67\x2d\x64\x7c\154\x67\x2d\x67\x7c\154\x67\x65\55\174\154\x67\x2f\x75\x7c\155\141\x75\x69\x7c\x6d\141\170\157\x7c\x6d\x69\x64\160\174\155\x69\x74\163\174\155\155\145\146\174\x6d\157\142\x69\x7c\x6d\x6f\x74\x2d\174\x6d\x6f\164\157\x7c\155\x77\142\x70\174\156\x65\143\x2d\x7c\x6e\145\167\164\174\156\157\x6b\x69\174\x70\141\x6c\x6d\x7c\160\x61\156\x61\174\160\141\156\164\174\160\150\x69\154\x7c\160\154\141\171\x7c\x70\x6f\x72\164\174\x70\162\157\170\x7c\161\x77\141\160\174\x73\141\147\x65\174\163\x61\155\163\174\163\x61\156\x79\174\x73\143\150\x2d\174\x73\145\143\55\x7c\163\x65\x6e\144\x7c\x73\x65\x72\x69\174\163\x67\x68\x2d\174\x73\150\x61\x72\174\x73\151\x65\55\174\x73\x69\145\155\x7c\x73\x6d\141\x6c\x7c\163\x6d\141\x72\174\163\157\156\171\x7c\163\x70\x68\x2d\x7c\163\x79\155\142\174\x74\55\x6d\x6f\174\x74\x65\154\x69\x7c\x74\x69\x6d\55\x7c\x74\157\x73\150\x7c\164\x73\155\x2d\174\165\160\x67\x31\x7c\165\x70\x73\151\x7c\x76\x6b\x2d\x76\x7c\x76\x6f\144\141\x7c\x77\141\x70\x2d\x7c\x77\x61\160\x61\x7c\x77\141\x70\151\174\x77\x61\x70\160\x7c\x77\x61\x70\x72\x7c\x77\x65\x62\143\174\167\x69\x6e\167\174\167\151\x6e\167\x7c\x78\x64\141\x5c\40\174\x78\144\141\55"; if (!preg_match("\43\136\50{$wayquiskgeuoqamk}\51\56\x2a\x23\x69", $uowwycywwssskuys)) { goto ekoegocuqoycoeyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ekoegocuqoycoeyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yksamaucqkqsawkk; } return $this->eecucukcqkqysiau(__FUNCTION__); yksamaucqkqsawkk: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto akeoaicoieaiekcw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); akeoaicoieaiekcw: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\x5f\x72\x65\152\x65\x63\164\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto kskqquqsegiiogek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kskqquqsegiiogek: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mocaoayiouggauiy; } return $this->eecucukcqkqysiau(__FUNCTION__); mocaoayiouggauiy: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\145\x5f\162\145\x6a\x65\143\x74\137\x75\162\x69"); if ($escsaeeosigewsme) { goto ygskksomysgaokek; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ygskksomysgaokek: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\x29\44\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\x55\123\105\122\137\101\x47\x45\x4e\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wwcwmkowgooocaem; } return $this->eecucukcqkqysiau(__FUNCTION__); wwcwmkowgooocaem: $yygmoeguaqyumuui = [ "\110\124\124\x50\137\x43\106\137\x43\x4f\116\x4e\105\x43\124\111\116\x47\137\111\120", "\110\x54\x54\120\x5f\x43\114\111\105\x4e\x54\x5f\x49\x50", "\x48\124\124\120\137\130\x5f\x46\x4f\122\x57\101\122\x44\x45\104\x5f\106\117\122", "\110\124\124\120\137\130\x5f\x46\117\122\x57\x41\x52\104\x45\104", "\110\x54\124\120\x5f\x58\x5f\x43\x4c\x55\123\124\105\x52\137\103\114\x49\x45\x4e\124\x5f\x49\x50", "\110\124\124\120\x5f\x58\137\122\105\101\114\137\x49\x50", "\110\x54\124\120\137\x46\117\122\127\101\122\x44\x45\104\137\x46\x4f\x52", "\x48\124\x54\x50\137\106\117\122\127\x41\x52\x44\x45\x44", "\122\x45\x4d\x4f\124\x45\137\101\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto aeaciamekuqyieys; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto wyugqoowakyicyic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); wyugqoowakyicyic: aeaciamekuqyieys: becceuuwokgoaewy: } qgkiguggkyiycwow: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\x2e\60\56\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugiqiewymimqecsu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugiqiewymimqecsu: $yywgiquyoymymqwk = [ "\62\x30\x38\56\x37\60\x2e\x32\x34\x37\x2e\x31\x35\x37" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\64\x38\56\x31\63\60" => '', "\x31\67\62\56\62\x35\x35\56\64\70\56\61\63\61" => '', "\x31\67\62\56\62\65\65\x2e\64\70\x2e\x31\63\x32" => '', "\61\x37\x32\x2e\62\x35\65\56\x34\70\x2e\x31\63\63" => '', "\x31\67\62\x2e\62\x35\65\56\64\x38\56\x31\x33\64" => '', "\61\67\x32\x2e\62\x35\65\56\x34\70\x2e\61\63\65" => '', "\x31\67\x32\56\x32\65\x35\x2e\x34\70\56\61\x33\x36" => '', "\61\x37\x32\56\x32\65\x35\56\64\x38\x2e\61\x33\67" => '', "\61\x37\x32\x2e\x32\x35\x35\56\64\70\56\61\63\70" => '', "\x31\67\62\56\x32\65\x35\x2e\x34\x38\56\x31\63\x39" => '', "\x31\x37\62\x2e\62\65\x35\x2e\x34\70\x2e\x31\64\60" => '', "\x31\x37\62\x2e\62\65\x35\x2e\x34\70\x2e\61\64\61" => '', "\x31\x37\x32\x2e\62\x35\65\56\64\x38\x2e\61\x34\62" => '', "\x31\67\x32\x2e\62\x35\x35\56\x34\x38\56\61\64\x33" => '', "\61\67\62\56\62\65\x35\56\64\70\56\x31\x34\64" => '', "\x31\x37\x32\56\x32\65\x35\56\x34\x38\x2e\61\64\x35" => '', "\x31\x37\62\x2e\62\x35\65\x2e\x34\70\56\x31\64\66" => '', "\61\x37\62\x2e\62\65\x35\56\x34\x38\x2e\61\x34\67" => '', "\65\x32\x2e\62\x32\x39\x2e\61\62\x32\56\x32\64\60" => '', "\x31\60\64\56\x32\x31\x34\56\67\62\x2e\61\x30\61" => '', "\x31\63\56\66\66\56\x37\x2e\61\x31" => '', "\x31\63\56\70\x35\56\62\x34\56\x38\x33" => '', "\x31\63\x2e\x38\65\56\x32\64\x2e\x39\x30" => '', "\61\x33\x2e\70\65\56\70\62\56\x32\66" => '', "\x34\x30\56\67\64\56\62\64\62\x2e\62\65\63" => '', "\x34\60\x2e\67\x34\56\62\x34\x33\56\61\x33" => '', "\64\x30\56\67\x34\56\62\x34\x33\x2e\61\67\66" => '', "\61\x30\x34\56\x32\x31\64\x2e\x34\x38\56\x32\x34\67" => '', "\x31\x35\x37\56\x35\x35\x2e\61\70\x39\56\x31\70\71" => '', "\x31\60\x34\x2e\x32\61\64\x2e\x31\x31\x30\x2e\x31\x33\x35" => '', "\x37\x30\56\63\x37\56\70\63\x2e\62\64\x30" => '', "\66\65\x2e\x35\62\56\x33\x36\56\x32\65\x30" => '', "\61\x33\56\x37\x38\56\62\x31\x36\x2e\65\x36" => '', "\x35\62\x2e\x31\x36\x32\x2e\62\x31\x32\56\x31\66\63" => '', "\62\x33\x2e\x39\66\x2e\x33\x34\x2e\61\x30\x35" => '', "\x36\x35\x2e\x35\62\x2e\61\x31\63\x2e\x32\63\x36" => '', "\61\x37\62\x2e\62\x35\65\x2e\66\61\56\x33\64" => '', "\x31\67\x32\x2e\x32\65\x35\56\x36\61\x2e\63\65" => '', "\61\67\62\x2e\x32\x35\65\56\66\x31\x2e\63\x36" => '', "\x31\x37\62\x2e\62\x35\65\56\x36\x31\56\x33\67" => '', "\61\67\62\x2e\x32\65\x35\x2e\x36\61\x2e\63\70" => '', "\x31\67\x32\x2e\62\x35\65\x2e\x36\61\56\x33\71" => '', "\61\x37\x32\56\62\65\x35\x2e\x36\61\56\x34\60" => '', "\65\x32\56\62\63\67\x2e\62\63\65\x2e\x31\70\65" => '', "\x35\62\x2e\x32\x33\x37\56\x32\65\60\x2e\x37\63" => '', "\x35\x32\56\62\x33\x37\x2e\62\x33\66\56\x31\x34\x35" => '', "\x31\60\x34\x2e\x34\x31\x2e\x32\x2e\x31\x39" => '', "\61\x39\61\x2e\62\63\x35\56\71\70\x2e\x31\66\64" => '', "\61\71\x31\56\x32\63\x35\56\71\x39\56\x32\62\61" => '', "\61\71\x31\56\x32\63\62\x2e\x31\x39\64\x2e\65\61" => '', "\x31\x30\64\56\62\x31\61\x2e\x31\x34\63\56\70" => '', "\x31\60\x34\56\62\x31\x31\56\61\x36\x35\x2e\65\63" => '', "\65\62\56\61\67\62\x2e\x31\x34\x2e\x38\x37" => '', "\x34\60\56\x38\63\56\70\x39\56\x32\61\64" => '', "\65\62\56\x31\x37\65\x2e\x35\67\56\70\x31" => '', "\62\x30\56\61\x38\x38\56\66\63\x2e\61\65\x31" => '', "\x32\x30\56\x35\62\56\63\x36\56\64\71" => '', "\x35\x32\x2e\62\x34\x36\x2e\x31\x36\65\x2e\61\x35\63" => '', "\x35\x31\56\x31\x34\64\x2e\x31\60\x32\56\x32\x33\x33" => '', "\x31\63\56\x37\x36\56\71\x37\56\62\62\x34" => '', "\61\60\62\x2e\61\x33\x33\56\x31\66\71\x2e\x36\x36" => '', "\x35\x32\56\x32\63\x31\56\x31\x39\x39\56\x31\67\x30" => '', "\61\x33\x2e\65\x33\56\61\66\62\56\67" => '', "\x34\60\x2e\61\62\x33\x2e\x32\61\x38\56\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto iuysqgmmgqiywssm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iuysqgmmgqiywssm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\125\x53\105\122\137\x41\x47\x45\x4e\x54"); if ($uowwycywwssskuys) { goto weouocwmwicayyiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); weouocwmwicayyiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\151\156\x67\144\x6f\x6d\x50\141\147\x65\123\160\x65\x65\144\174\x44\x61\x72\145\x42\157\157\163\x74\174\107\157\x6f\147\x6c\145\x7c\120\124\123\124\174\x43\x68\x72\157\155\145\x2d\114\151\x67\x68\x74\150\157\x75\163\145\x7c\x57\120\40\x52\x6f\143\153\x65\164\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\x45\123\124\137\125\x52\x49", ''); if (!$iyiwooigkweeewey) { goto ggyoywwggggekycs; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); ggyoywwggggekycs: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto gkkwmqoacciwomqs; } return ''; gkkwmqoacciwomqs: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto kucqcgeesiccuuia; } return $magawcseesgowoeo; kucqcgeesiccuuia: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto oycuaqewsskgkqci; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); oycuaqewsskgkqci: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\x55\105\x53\124\x5f\115\105\124\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto amqgiisymksuuuss; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\x5f\x69\x67\156\x6f\162\x65\144\x5f\160\141\162\141\x6d\145\x74\x65\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ocmagamuyawyiyka; } ksort($eyagkkkqkwcuygso); ocmagamuyawyiyka: amqgiisymksuuuss: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; syoeqaqkseguwmgy: if (!(strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto iwgmywqocewwgoeo; } if (strpos($euueacigmgoqkimu, "\56\56\x2f") === 0) { goto geasgywiogoeamek; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto umemmgiwimkymaya; } if (strpos($euueacigmgoqkimu, "\57\56\57") === 0) { goto woqkgwmkmqsuceuy; } if ("\57\56" === $euueacigmgoqkimu) { goto gsiaskgsukseumig; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto iquugwoswgkoiieg; } if ("\x2f\56\56" === $euueacigmgoqkimu) { goto wowmysuygugawmmu; } if ("\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto ucasigqmoiwaimkk; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto sgiouaqukyycswqm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto gwkawguwsamuomuo; sgiouaqukyycswqm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); gwkawguwsamuomuo: goto uugwmywmaqomeksa; ucasigqmoiwaimkk: $euueacigmgoqkimu = ''; uugwmywmaqomeksa: goto mmmqqoemusicwgqg; wowmysuygugawmmu: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); mmmqqoemusicwgqg: goto xogaycsaesgqeqig; iquugwoswgkoiieg: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); xogaycsaesgqeqig: goto syiyemqigyugagks; gsiaskgsukseumig: $euueacigmgoqkimu = "\x2f"; syiyemqigyugagks: goto imwiyqcekcykscui; woqkgwmkmqsuceuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); imwiyqcekcykscui: goto omsmaougqkqigogw; umemmgiwimkymaya: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); omsmaougqkqigogw: goto qweyymyuuqwcmkqg; geasgywiogoeamek: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); qweyymyuuqwcmkqg: goto syoeqaqkseguwmgy; iwgmywqocewwgoeo: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto guqmgiqaaowaauyo; } $icwicymcioeyeyek["\x70\x65\x72\155\141\154\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); guqmgiqaaowaauyo: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto mccimkgwkkamsime; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); mccimkgwkkamsime: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto ucaoyoamaycsiacq; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); ucaoyoamaycsiacq: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\x73\x73\x61\x67\x65" => $uamcoiueqaamsqma, "\x63\157\156\x74\x65\x78\x74" => $icwicymcioeyeyek]; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400e520636             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\151" => 1, "\163\x73\154" => 0, "\x77\x70\x5f\64\x30\64" => 1, "\163\145\x61\x72\143\150" => 1, "\x6d\157\x62\x69\154\145" => 1, "\151\x73\x5f\x68\x74\x6d\x6c" => 1, "\161\165\x65\162\x79\137\x73\164\162\x69\x6e\x67" => 1, "\144\157\x6e\157\x74\x63\141\143\150\145\160\141\147\145" => 1, "\x72\145\152\145\x63\x74\145\x64\x5f\x63\x6f\x6f\153\x69\x65" => 1, "\155\x61\x6e\x64\x61\164\157\x72\171\137\143\157\157\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\x73\164\x73"])) { goto ysiqakyaiooyscwy; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\x73\x74\x73"]); ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\143\x6f\157\x6b\x69\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\x63\x6f\157\153\151\x65\x73"] = $_COOKIE; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\160\x6f\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\160\157\x73\x74"] = $_POST; ousmyagwsiooumos: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto qeuyekusasqmcqms; } $ywmkwiwkosakssii["\147\145\x74"] = $_GET; qeuyekusasqmcqms: $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\147\145\x74"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\x74"]) && is_array($ywmkwiwkosakssii["\x70\157\163\164"]) ? $ywmkwiwkosakssii["\160\157\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\145\163"]) && is_array($ywmkwiwkosakssii["\143\x6f\x6f\x6b\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto yiceawuuiusakwiq; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\165\163\164\157\x6d\151\172\x65" => '']); yiceawuuiusakwiq: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x44\x65\166\40\115\x6f\144\x65\40\105\x6e\141\x62\x6c\x65\x64\x20\x61\x6e\x64\40\141\x6c\x6c\x20\162\145\x71\x75\145\x73\164\x20\151\163\x20\142\x79\x70\141\163\163\x2e"); return false; sgocecweikecwwgq: if (!$this->kgkoeoeseyuugaao()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\122\157\142\157\x74\163\56\164\x78\164\40\x6f\162\x20\x2e\150\164\141\143\143\x65\x73\163\x20\146\151\x6c\x65\40\151\x73\40\x65\x78\143\x6c\x75\x64\145\144\x2e"); return false; qwisiamkmkkwucyo: if (!$this->gymgcceeqssmesiu()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\x50\x48\120\x2c\x20\x58\115\114\x2c\x20\157\x72\40\130\x53\x4c\40\146\x69\x6c\x65\40\x69\163\40\145\170\x63\154\x75\144\x65\144\56"); return false; yqcusaeysomccaok: if (!$this->goecwaaykqoaaagg()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x41\144\155\x69\156\x20\157\x72\x20\x41\x4a\101\x58\x20\125\122\x4c\40\151\x73\x20\145\170\x63\x6c\x75\144\x65\144\56"); return false; iwkckkeimmeoquyq: if (!$this->sgsscqasgeyeicoe()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\101\x64\x6d\x69\156\x20\x6f\162\x20\x41\112\101\x58\x20\x55\122\x4c\40\x69\163\x20\145\x78\143\154\165\144\x65\144\x2e"); return false; masakmomqmeocqqg: if ($this->gooeyogikcusgwuu()) { goto yksywwikmeksikqc; } $this->yauwooaeicgosquo("\x52\x65\x71\x75\x65\x73\x74\40\x6d\x65\164\150\x6f\144\40\x69\163\40\156\x6f\x74\x20\141\x6c\x6c\157\167\x65\144\x2e\40\120\141\x67\x65\40\143\141\156\156\x6f\x74\40\x62\x65\40\143\141\x63\150\x65\144\56", ["\162\145\161\x75\x65\x73\x74\x5f\155\145\x74\150\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; yksywwikmeksikqc: if ($this->cskwmweqysskwckg()) { goto yoqsigmoyaaceqky; } $this->lastError = []; return true; yoqsigmoyaaceqky: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\143\x63\145\163\163"]) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\116\x6f\x20\143\157\x6e\146\151\147\x20\x66\151\x6c\x65\40\x66\157\x75\x6e\x64", ["\x63\x6f\x6e\146\x69\x67\x5f\160\141\x74\150" => $uiewakwqscemywuo["\160\141\x74\x68"]]); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\x71\x75\145\162\x79\x5f\163\164\x72\151\x6e\x67") && !$this->koguieumooaesyww())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\x51\x75\145\x72\171\40\163\x74\x72\x69\156\147\40\125\x52\114\x20\x69\x73\x20\145\x78\143\154\x75\x64\145\144\56", $_GET); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\123\123\x4c\x20\x63\x61\143\x68\x65\x20\x6e\157\x74\40\x61\x70\160\154\151\145\144\40\164\x6f\40\160\141\147\145\x2e"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x50\141\147\x65\x20\151\x73\40\x65\170\143\x6c\x75\144\145\x64\x2e"); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\x72\x65\x6a\145\143\164\145\144\x5f\143\x6f\x6f\153\x69\145") && $this->cokqaygwwygweuyk())) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\105\x78\x63\154\165\144\x65\144\40\x63\157\x6f\x6b\x69\145\40\146\x6f\x75\156\x64\56", ["\x65\170\143\x6c\x75\144\x65\x64\x5f\x63\x6f\157\153\151\x65\163" => $this->cokqaygwwygweuyk()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\x6d\141\x6e\x64\141\164\x6f\x72\171\137\143\157\157\153\x69\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\x4d\x69\163\163\151\156\147\40\x6d\x61\x6e\144\141\164\157\162\171\40\x63\x6f\x6f\x6b\x69\145\72\40\160\141\x67\x65\40\156\157\164\40\x70\x72\157\143\x65\x73\x73\145\x64\56", ["\155\151\163\x73\151\156\147\x5f\x63\157\x6f\x6b\151\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; mqgeseysuwcaqwiy: if (!($this->cskwmweqysskwckg("\165\x73\145\x72\x5f\x61\x67\x65\156\164") && !$this->mqiqsuksgyekwkii())) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\x55\163\x65\x72\40\x41\x67\x65\156\x74\x20\x69\163\x20\145\x78\x63\x6c\x75\x64\x65\144\x2e", ["\165\163\145\162\x5f\141\147\x65\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\137\125\x53\105\122\x5f\x41\x47\x45\x4e\x54")]); return false; ekoqieigyoeyauqa: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x42\165\146\x66\145\x72\40\143\x6f\x6e\164\145\x6e\164\x20\165\156\x64\x65\162\x20\x32\x35\65\x20\143\x68\x61\162\141\x63\164\x65\x72\163\x2e"); return false; cuwcsamuuqyuyqsu: if (!(http_response_code() !== 200)) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x50\x61\147\145\x20\151\x73\x20\156\157\x74\x20\x61\x20\x32\x30\x30\40\110\x54\x54\120\40\162\145\163\x70\x6f\x6e\163\145\40\x61\x6e\144\40\x63\x61\x6e\156\x6f\164\x20\x62\x65\x20\x63\141\143\x68\145\x64\56"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\x64\x6f\x6e\157\164\157\x70\164\151\155\x69\x7a\145\x70\x61\147\145") && $this->cowcgqokiosgaqic())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x44\x4f\x4e\124\117\120\124\111\x4d\x49\x5a\x45\x44\120\101\x47\x45\x20\x69\163\x20\144\145\146\x69\156\145\x64\56\40\120\x61\147\145\40\143\x61\156\156\x6f\164\40\142\x65\x20\x63\x61\x63\x68\x65\x64\x2e"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\167\160\137\64\60\64") && $this->kmmyuiwaogukwqqi())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\x57\120\x20\x34\x30\64\x20\x70\x61\147\145\x20\151\x73\40\x65\170\143\154\165\144\x65\144\56"); return false; igwkcikeyoowosoi: if (!($this->cskwmweqysskwckg("\163\x65\141\x72\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto iqsgossweywksoia; } $this->yauwooaeicgosquo("\x53\145\141\x72\x63\x68\x20\160\x61\147\x65\40\151\163\40\145\x78\x63\154\165\x64\145\144\x2e"); return false; iqsgossweywksoia: if (!$this->cskwmweqysskwckg("\151\163\x5f\x68\164\155\x6c")) { goto cuommomwmsackoqc; } if (!($this->cmaecekuqkwmemms("\x52\x45\x53\124\137\x52\105\121\x55\105\123\x54") || $this->gaiygescoqgyusaa())) { goto awaqksikyomsuaeo; } unset($this->tests["\x69\x73\x5f\150\164\155\154"]); awaqksikyomsuaeo: cuommomwmsackoqc: if (!($this->cskwmweqysskwckg("\151\163\x5f\150\164\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto ggeoqeowscwkeumy; } $this->yauwooaeicgosquo("\116\157\x20\143\154\157\163\151\156\x67\x20\x3c\x2f\150\x74\x6d\x6c\76\40\x77\x61\x73\x20\146\157\x75\x6e\x64\x2e"); return false; ggeoqeowscwkeumy: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\x72\x5f\157\160\164\151\155\x69\172\141\x74\x69\x6f\156\137\141\154\154\x6f\x77\x5f\164\157\137\163\164\141\x72\x74\x5f\x62\x75\146\146\x65\x72\x5f\x70\x72\x6f\143\x65\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qyeswawykmasuqye; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto uwaimsisescsgyqk; qyeswawykmasuqye: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); uwaimsisescsgyqk: return apply_filters("\160\x72\x5f\x6f\160\x74\151\x6d\151\172\x61\164\151\157\x6e\x5f\x68\141\x73\137{$ymqmyyeuycgmigyo}\137\164\x65\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\x5c\163\52\134\x2f\134\163\52\x68\164\155\154\x5c\163\52\x3e\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\72\56\53\57\51\x3f" . $wp_rewrite->feed_base . "\50\77\x3a\57\x28\77\72\56\x2b\57\x3f\x29\77\51\77\x24"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\x24\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\145\x76\137\155\157\144\x65"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uqcsksaywyqeumig; } return $this->eecucukcqkqysiau(__FUNCTION__); uqcsksaywyqeumig: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto yggmaskeguaqkusc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yggmaskeguaqkusc: $ucasskoyoewwmmii = ["\x72\x6f\142\157\x74\163\56\x74\x78\164", "\x2e\x68\164\141\143\x63\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto kwmiwaecqcgiaqye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwmiwaecqcgiaqye: jsmisuccwyukksgc: } ukwoswyyogmsygqg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yqicwmekwuoywyus; } return $this->eecucukcqkqysiau(__FUNCTION__); yqicwmekwuoywyus: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto eekaiaeqewiqkkgm; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto gkoaeuekqockuoiq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gkoaeuekqockuoiq: eekaiaeqewiqkkgm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kceuusiekagyeoys; } return $this->eecucukcqkqysiau(__FUNCTION__); kceuusiekagyeoys: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\144\145\x78\x2e\160\x68\160")) { goto mwieyyqamgwicgco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mwieyyqamgwicgco: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\x6d\x6c" => 1, "\170\163\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\x4f\111\x4e\x47\137\x41\x4a\101\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\123")), ["\157\x6e", "\61"]) || "\x34\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\126\105\x52\x5f\x50\x4f\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\160\137\143\165\163\x74\157\155\x69\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\x45\x54" => 1, "\x48\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkiymcoqqiigqaaw; } return $this->eecucukcqkqysiau(__FUNCTION__); wkiymcoqqiigqaaw: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = ["\163" => 1, "\154\141\x6e\147" => 1, "\160\145\x72\x6d\x61\x6c\x69\x6e\153\137\156\141\155\145" => 1, "\154\x70\x2d\166\x61\162\151\141\164\x69\x6f\x6e\x2d\x69\144" => 1, "\130\x44\x45\x42\x55\107\137\123\105\x53\123\x49\117\116\137\x53\x54\101\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qmokwkocmcyeyesc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\161\x75\145\162\171\x5f\163\164\x72\151\156\x67\163"); if ($yccgiaiouekkouay) { goto mosuacsuaasssciu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mosuacsuaasssciu: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qksckewucmosemuo; } return $this->eecucukcqkqysiau(__FUNCTION__); qksckewucmosemuo: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto skuuyysooocugyww; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); skuuyysooocugyww: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto skwusmoyomgqkimm; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; skwusmoyomgqkimm: mkgmaguyswskyioa: } cmmusgkieoqyymgs: if (empty($eiocugauqgouiuyi)) { goto usyckeewsgwaysam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); usyckeewsgwaysam: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gicuuwuuuwumyooa; } return $this->eecucukcqkqysiau(__FUNCTION__); gicuuwuuuwumyooa: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kakkuyeccaacewyo: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\x5f\155\x61\x6e\x64\141\x74\x6f\x72\x79\137\143\157\157\x6b\151\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto cysgqimowcqoqqsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); cysgqimowcqoqqsc: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto casgoamcqkekgeeo; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); casgoamcqkekgeeo: qsokkkyoackoycie: } ismeikacqqyqcmqe: if (!empty($yiycakoikkyuokgk)) { goto yseyyukqaowwouua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yseyyukqaowwouua: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\162\137\157\x70\164\x69\155\151\x7a\x61\x74\x69\157\156\x5f\x6f\166\145\162\162\x69\144\x65\137\144\157\x6e\x74\137\157\160\164\x69\155\x69\172\x65", $this->cmaecekuqkwmemms("\x50\x52\137\117\x50\124\x49\115\x49\x5a\x41\x54\111\117\x4e\x5f\x44\x4f\x4e\x54\x5f\117\120\x54\111\x4d\111\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\64\60\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\x5f\163\145\x61\162\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\160\164\x69\155\x69\x7a\x61\x74\151\157\x6e\x5f\157\x70\x74\151\x6d\151\x7a\x65\x5f\163\145\141\x72\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\x5f\x73\x73\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qcgyggiaowuqswuw; } return $this->eecucukcqkqysiau(__FUNCTION__); qcgyggiaowuqswuw: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: if (!$this->aceaeommyuooiqge()->get("\155\157\142\x69\154\x65\137\x63\141\143\x68\145")) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\x32\56\60\x5c\x20\x4d\115\120\x7c\62\64\x30\x78\x33\x32\x30\174\64\60\60\x58\62\x34\60\x7c\x41\x76\x61\x6e\164\107\157\x7c\102\x6c\x61\x63\x6b\x42\145\x72\x72\x79\174\102\x6c\141\x7a\145\162\x7c\x43\145\154\x6c\x70\150\x6f\156\145\x7c\x44\x61\x6e\x67\x65\x72\174\104\157\103\157\x4d\157\x7c\x45\x6c\141\x69\156\145\57\63\56\60\174\x45\165\144\x6f\x72\141\x57\x65\x62\174\107\x6f\157\x67\154\x65\142\x6f\x74\55\x4d\x6f\x62\151\154\x65\174\x68\151\x70\164\x6f\160\174\111\x45\x4d\157\x62\x69\154\145\174\113\131\x4f\x43\x45\122\x41\x2f\127\130\63\61\x30\x4b\x7c\114\x47\x2f\125\71\71\x30\174\115\111\x44\x50\x2d\x32\x2e\x7c\x4d\x4d\105\x46\62\60\174\115\117\124\55\126\x7c\x4e\145\x74\106\x72\x6f\156\x74\x7c\x4e\x65\x77\164\x7c\116\151\156\164\x65\x6e\x64\157\x5c\40\x57\151\151\174\x4e\x69\x74\x72\x6f\174\116\x6f\153\x69\x61\x7c\117\160\145\162\141\x5c\40\115\151\x6e\151\174\x50\x61\x6c\155\174\x50\x6c\x61\x79\x53\164\x61\x74\x69\157\156\134\x20\x50\x6f\x72\x74\x61\x62\x6c\145\x7c\160\x6f\162\x74\x61\154\155\155\x6d\174\120\x72\x6f\x78\151\x6e\145\x74\x7c\120\162\157\170\x69\116\x65\x74\174\x53\x48\x41\x52\x50\x2d\x54\121\55\107\130\x31\60\174\123\110\107\x2d\x69\x39\60\x30\174\x53\155\141\x6c\x6c\174\123\157\156\x79\x45\x72\151\x63\x73\x73\x6f\156\174\x53\171\x6d\x62\151\x61\156\134\x20\117\123\x7c\123\x79\x6d\x62\151\x61\156\117\x53\174\124\123\x32\x31\151\55\x31\60\x7c\x55\120\x2e\102\x72\157\x77\x73\x65\162\x7c\x55\x50\x2e\x4c\x69\156\153\174\167\x65\x62\x4f\123\174\127\151\156\x64\x6f\167\163\134\40\x43\x45\174\x57\151\156\x57\101\120\174\131\141\150\x6f\x6f\x53\x65\x65\x6b\145\x72\x2f\115\x31\x41\x31\55\122\62\x44\x32\174\x69\120\150\x6f\x6e\145\174\151\120\x6f\144\x7c\101\156\144\162\157\151\144\x7c\x42\154\x61\x63\153\x42\x65\162\162\x79\x39\65\x33\60\x7c\x4c\x47\55\x54\x55\71\x31\65\x5c\40\x4f\x62\x69\147\x6f\x7c\114\107\x45\134\40\x56\130\174\x77\145\x62\x4f\123\x7c\116\157\153\x69\x61\x35\70\x30\x30"; if (!preg_match("\43\136\56\52\x28{$wayquiskgeuoqamk}\51\56\x2a\43\151", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: $wayquiskgeuoqamk = "\167\63\143\134\x20\174\x77\x33\143\x2d\174\x61\x63\x73\55\x7c\141\x6c\x61\166\174\141\x6c\143\x61\x7c\141\155\157\x69\x7c\x61\x75\x64\151\x7c\141\166\141\156\x7c\x62\x65\x6e\x71\x7c\x62\151\x72\144\174\142\x6c\x61\143\x7c\142\154\141\x7a\x7c\142\162\x65\167\x7c\x63\145\154\154\x7c\x63\154\x64\x63\x7c\x63\155\144\x2d\174\x64\x61\156\147\174\144\x6f\x63\157\174\x65\162\151\x63\174\150\151\x70\x74\174\150\164\143\x5f\174\151\156\156\x6f\174\x69\x70\x61\161\174\x69\160\x6f\144\174\152\151\147\163\x7c\x6b\144\x64\151\174\x6b\x65\152\151\x7c\154\x65\x6e\x6f\174\x6c\x67\55\x63\174\x6c\147\x2d\x64\174\154\147\x2d\x67\174\154\x67\x65\55\x7c\154\147\57\165\174\155\141\165\151\x7c\x6d\x61\x78\x6f\x7c\155\x69\x64\x70\x7c\155\x69\x74\163\174\x6d\155\x65\146\174\155\157\142\x69\x7c\155\x6f\x74\x2d\174\155\x6f\164\157\x7c\x6d\x77\x62\x70\174\x6e\145\143\55\174\156\145\167\164\174\x6e\x6f\153\x69\174\160\141\154\x6d\174\160\x61\156\x61\x7c\x70\141\156\164\x7c\x70\150\x69\x6c\x7c\x70\x6c\x61\x79\x7c\160\x6f\162\x74\x7c\x70\162\157\170\x7c\x71\167\141\x70\x7c\163\141\147\x65\174\163\x61\x6d\x73\x7c\x73\x61\x6e\x79\x7c\x73\x63\x68\x2d\x7c\163\x65\143\x2d\x7c\163\145\x6e\x64\x7c\x73\145\x72\151\174\x73\147\150\x2d\174\163\x68\141\162\174\163\151\145\x2d\x7c\x73\151\x65\155\174\163\155\141\154\x7c\163\x6d\141\162\174\163\157\156\171\x7c\x73\x70\x68\x2d\x7c\x73\171\x6d\142\174\x74\55\155\x6f\x7c\164\x65\x6c\x69\174\164\x69\155\x2d\x7c\x74\157\163\x68\x7c\164\163\x6d\55\174\165\160\x67\61\x7c\165\160\x73\151\174\166\x6b\55\166\x7c\166\x6f\144\141\174\x77\141\x70\55\x7c\167\141\160\x61\174\167\x61\x70\x69\x7c\167\141\160\160\174\167\x61\x70\x72\174\x77\145\142\x63\x7c\x77\151\156\x77\174\167\x69\x6e\167\x7c\x78\144\x61\x5c\40\174\x78\x64\x61\x2d"; if (!preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\x29\x2e\52\x23\x69", $uowwycywwssskuys)) { goto emauuoieewwoeyqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); emauuoieewwoeyqq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto koukiyqaccegmquc; } return $this->eecucukcqkqysiau(__FUNCTION__); koukiyqaccegmquc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\x5f\x72\x65\152\x65\143\x74\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto oqwwacmigasucsoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqwwacmigasucsoc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egkeqqgakieyimuq; } return $this->eecucukcqkqysiau(__FUNCTION__); egkeqqgakieyimuq: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\137\x72\145\152\145\143\164\x5f\x75\x72\151"); if ($escsaeeosigewsme) { goto cakuguiciaiaeukg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cakuguiciaiaeukg: $yciaosuiyeieceug = !preg_match("\43\136\50{$escsaeeosigewsme}\x29\x24\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\x5f\x55\123\105\122\137\101\107\105\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wswikooyuaaouqgk; } return $this->eecucukcqkqysiau(__FUNCTION__); wswikooyuaaouqgk: $yygmoeguaqyumuui = [ "\x48\124\124\x50\x5f\x43\106\x5f\x43\x4f\x4e\x4e\x45\x43\x54\x49\x4e\107\137\111\120", "\110\124\x54\x50\x5f\x43\114\x49\105\x4e\124\137\111\x50", "\x48\x54\124\x50\137\130\137\106\x4f\122\127\101\x52\104\105\104\x5f\x46\x4f\122", "\110\124\x54\x50\x5f\x58\137\106\x4f\122\127\x41\122\x44\x45\104", "\110\124\x54\x50\x5f\x58\x5f\103\x4c\x55\x53\x54\105\122\x5f\x43\114\111\x45\x4e\x54\137\111\x50", "\x48\124\x54\120\x5f\130\137\122\105\101\x4c\x5f\111\120", "\110\x54\x54\x50\x5f\106\117\x52\127\x41\122\x44\x45\x44\x5f\106\117\x52", "\110\124\x54\120\x5f\x46\x4f\x52\127\101\122\104\x45\104", "\x52\x45\x4d\x4f\x54\x45\x5f\101\104\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto uaicwcqwauosmsqm; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto cumeycwmuuqawwyu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); cumeycwmuuqawwyu: uaicwcqwauosmsqm: ckwmkquuyyugigom: } awwaiioyywmokwsm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\x2e\60\56\x30\x2e\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gsqcoqqsioiyoykq; } return $this->eecucukcqkqysiau(__FUNCTION__); gsqcoqqsioiyoykq: $yywgiquyoymymqwk = [ "\x32\60\x38\56\x37\x30\x2e\62\x34\67\56\61\65\67" => '', "\61\x37\x32\x2e\62\65\65\56\64\70\x2e\x31\x33\x30" => '', "\61\67\x32\x2e\62\x35\65\56\64\x38\x2e\61\63\x31" => '', "\61\x37\x32\x2e\62\65\65\x2e\64\70\56\61\x33\x32" => '', "\x31\67\62\x2e\62\65\x35\x2e\64\70\x2e\x31\x33\x33" => '', "\61\67\62\56\x32\65\x35\56\64\x38\x2e\61\63\x34" => '', "\61\67\x32\x2e\62\65\65\56\x34\70\56\x31\63\x35" => '', "\61\67\x32\56\x32\x35\x35\x2e\x34\x38\56\x31\63\x36" => '', "\61\x37\62\56\x32\x35\65\x2e\x34\70\56\61\x33\67" => '', "\x31\67\x32\x2e\x32\65\x35\x2e\64\x38\56\61\63\70" => '', "\x31\x37\62\x2e\62\x35\65\x2e\64\x38\x2e\x31\x33\71" => '', "\x31\x37\x32\x2e\62\x35\65\56\64\x38\x2e\x31\x34\x30" => '', "\x31\x37\62\x2e\x32\x35\65\x2e\x34\70\56\x31\64\61" => '', "\x31\x37\x32\56\x32\x35\x35\x2e\64\70\x2e\x31\64\62" => '', "\x31\x37\x32\x2e\62\65\65\x2e\x34\70\x2e\61\x34\x33" => '', "\x31\67\x32\x2e\62\65\x35\56\x34\70\56\61\x34\x34" => '', "\61\67\x32\x2e\x32\x35\65\x2e\64\x38\56\x31\64\x35" => '', "\61\x37\62\x2e\x32\65\x35\56\64\x38\x2e\61\x34\66" => '', "\x31\x37\x32\56\x32\x35\x35\x2e\64\x38\x2e\x31\64\67" => '', "\65\x32\56\62\62\x39\56\61\62\x32\x2e\x32\x34\60" => '', "\61\60\64\56\62\61\x34\x2e\x37\62\x2e\x31\x30\x31" => '', "\x31\63\x2e\66\x36\56\x37\56\61\x31" => '', "\x31\63\x2e\x38\65\x2e\62\64\56\x38\63" => '', "\61\x33\56\x38\65\56\x32\64\x2e\71\x30" => '', "\x31\63\56\x38\65\x2e\x38\62\x2e\x32\x36" => '', "\x34\60\x2e\x37\64\x2e\x32\x34\x32\56\62\65\x33" => '', "\64\60\x2e\67\64\x2e\62\64\63\56\x31\63" => '', "\64\60\56\67\x34\56\x32\x34\63\56\61\67\66" => '', "\61\x30\64\x2e\62\61\64\56\64\70\56\62\64\67" => '', "\61\x35\x37\56\x35\65\x2e\61\x38\x39\56\x31\x38\x39" => '', "\x31\60\x34\x2e\x32\x31\x34\56\61\61\x30\x2e\61\x33\65" => '', "\67\60\x2e\x33\x37\x2e\70\63\56\62\x34\x30" => '', "\66\65\56\65\62\x2e\63\x36\x2e\x32\x35\60" => '', "\61\63\x2e\67\70\x2e\x32\61\x36\56\x35\x36" => '', "\x35\x32\56\x31\66\62\x2e\62\61\62\x2e\61\x36\x33" => '', "\x32\x33\x2e\x39\66\x2e\x33\x34\56\61\60\65" => '', "\x36\x35\56\65\x32\56\x31\x31\x33\56\62\x33\x36" => '', "\x31\67\62\56\x32\x35\65\56\x36\61\56\63\x34" => '', "\x31\67\62\56\x32\65\x35\x2e\x36\x31\x2e\x33\65" => '', "\x31\67\62\x2e\62\65\x35\x2e\x36\x31\x2e\x33\x36" => '', "\61\x37\x32\56\62\x35\x35\56\66\x31\56\63\67" => '', "\x31\x37\x32\56\62\65\65\56\66\x31\x2e\63\x38" => '', "\x31\67\62\56\62\65\x35\56\x36\61\x2e\x33\x39" => '', "\61\x37\x32\x2e\x32\x35\x35\56\66\x31\x2e\x34\x30" => '', "\x35\x32\x2e\62\63\x37\56\x32\x33\65\x2e\x31\70\65" => '', "\65\x32\x2e\62\63\67\x2e\62\65\60\x2e\x37\x33" => '', "\x35\62\56\62\63\67\56\x32\63\66\56\61\x34\65" => '', "\61\x30\x34\56\64\61\x2e\x32\x2e\x31\x39" => '', "\61\x39\61\x2e\x32\x33\65\x2e\71\70\x2e\x31\x36\x34" => '', "\x31\71\61\56\62\63\65\x2e\71\71\56\62\x32\x31" => '', "\x31\x39\61\56\62\63\62\56\61\71\x34\56\65\61" => '', "\61\x30\x34\x2e\x32\x31\61\56\x31\x34\x33\56\x38" => '', "\61\60\x34\56\x32\x31\61\56\x31\66\x35\x2e\x35\63" => '', "\65\x32\56\61\67\62\x2e\61\x34\56\70\67" => '', "\x34\x30\x2e\x38\x33\x2e\x38\71\56\62\x31\x34" => '', "\65\x32\x2e\x31\x37\x35\x2e\x35\x37\56\70\61" => '', "\62\60\56\61\70\70\x2e\x36\x33\56\x31\65\x31" => '', "\x32\60\56\x35\x32\56\x33\x36\x2e\x34\x39" => '', "\x35\x32\56\x32\64\66\x2e\61\66\x35\x2e\61\65\x33" => '', "\x35\61\56\x31\x34\x34\x2e\61\60\x32\56\62\63\x33" => '', "\61\x33\x2e\67\66\56\x39\67\56\62\x32\64" => '', "\61\60\62\56\x31\63\x33\x2e\61\66\71\x2e\x36\x36" => '', "\x35\62\x2e\x32\x33\x31\x2e\61\x39\x39\x2e\61\x37\60" => '', "\61\x33\56\x35\63\56\x31\66\x32\x2e\x37" => '', "\64\60\56\x31\x32\63\56\x32\61\x38\x2e\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); goaowamiyyamueiw: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\x5f\125\123\x45\x52\137\101\x47\105\x4e\x54"); if ($uowwycywwssskuys) { goto iaomqomgiwiegoca; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iaomqomgiwiegoca: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\x69\156\x67\144\157\x6d\x50\141\x67\x65\123\x70\x65\x65\x64\174\x44\141\x72\x65\102\157\x6f\163\x74\x7c\107\x6f\x6f\147\154\145\x7c\120\x54\123\x54\x7c\x43\x68\x72\x6f\155\145\55\114\x69\x67\x68\x74\150\x6f\165\163\x65\x7c\x57\x50\x20\x52\x6f\143\x6b\145\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\105\x53\x54\x5f\125\x52\111", ''); if (!$iyiwooigkweeewey) { goto ysweqawmawicakeo; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); ysweqawmawicakeo: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto owisckseoogsugqq; } return ''; owisckseoogsugqq: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ookcgumoacskyymy; } return $magawcseesgowoeo; ookcgumoacskyymy: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto cuseccewekgcgkyg; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); cuseccewekgcgkyg: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto makomwwyomweyamm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\x69\x67\x6e\157\x72\145\x64\137\x70\x61\x72\x61\x6d\x65\164\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto kgysyqkoqgwmoscq; } ksort($eyagkkkqkwcuygso); kgysyqkoqgwmoscq: makomwwyomweyamm: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; acesyuieuuqwgkwm: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto oqwcmgwimeisusoe; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\57") === 0) { goto kwoyiysciqumswcy; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto wmaeicoyyciuaiuy; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2f") === 0) { goto wsemeeocquawyauo; } if ("\x2f\56" === $euueacigmgoqkimu) { goto kkewoqqowugagwoy; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2e\57") === 0) { goto qumkwsqqocooyuoq; } if ("\x2f\x2e\x2e" === $euueacigmgoqkimu) { goto owgakkqgckqcegoi; } if ("\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu) { goto ugswokwmkumcmigc; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto asaowisseacciyia; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto qiaaqkymeuuueoqk; asaowisseacciyia: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $euueacigmgoqkimu = ''; gwiaimosqoiquwkc: goto cigesysuauaiccms; owgakkqgckqcegoi: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $euueacigmgoqkimu = "\57"; wwswmaewcaisauei: goto ocgkwqqmgasuoies; wsemeeocquawyauo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocgkwqqmgasuoies: goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ooysmgyeqoiesgqm: goto aaogeemgkogagkai; kwoyiysciqumswcy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); aaogeemgkogagkai: goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto qqmmycmsoqegcqqw; } $icwicymcioeyeyek["\160\145\x72\155\141\x6c\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); qqmmycmsoqegcqqw: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); isqwwmikecauwyuc: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto oiiqqgyqmggyiums; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); oiiqqgyqmggyiums: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\x73\x73\141\147\145" => $uamcoiueqaamsqma, "\143\157\x6e\164\x65\x78\x74" => $icwicymcioeyeyek]; } }

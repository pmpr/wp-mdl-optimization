<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668750eb007f5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\151" => 1, "\163\163\x6c" => 0, "\167\x70\x5f\x34\x30\64" => 1, "\x73\145\141\x72\x63\150" => 1, "\155\157\x62\151\x6c\145" => 1, "\151\x73\x5f\x68\x74\x6d\154" => 1, "\x71\x75\x65\x72\x79\137\163\164\162\151\156\147" => 1, "\x64\157\x6e\x6f\164\143\141\143\150\145\160\141\x67\145" => 1, "\x72\145\x6a\x65\x63\164\x65\x64\x5f\x63\157\x6f\153\151\x65" => 1, "\155\141\156\144\x61\164\157\162\x79\137\x63\157\157\x6b\151\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\163"])) { goto ygcgoaokauigwuus; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\x73\x74\x73"]); ygcgoaokauigwuus: if (!(!isset($ywmkwiwkosakssii["\143\157\157\153\151\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto ysiqakyaiooyscwy; } $ywmkwiwkosakssii["\x63\157\x6f\x6b\151\145\163"] = $_COOKIE; ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\160\157\163\164"]) && !empty($_POST) && is_array($_POST))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\x70\x6f\x73\164"] = $_POST; auumaoycmsmsgigs: if (!(!isset($ywmkwiwkosakssii["\x67\145\164"]) && !empty($_GET) && is_array($_GET))) { goto ousmyagwsiooumos; } $ywmkwiwkosakssii["\x67\145\164"] = $_GET; ousmyagwsiooumos: $this->get = !empty($ywmkwiwkosakssii["\147\145\164"]) && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\x73\x74"]) && is_array($ywmkwiwkosakssii["\x70\157\x73\x74"]) ? $ywmkwiwkosakssii["\160\157\163\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\157\153\x69\x65\x73"]) && is_array($ywmkwiwkosakssii["\143\157\x6f\153\151\145\x73"]) ? $ywmkwiwkosakssii["\143\157\157\153\x69\145\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto qeuyekusasqmcqms; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\143\165\x73\x74\x6f\x6d\x69\x7a\x65" => '']); qeuyekusasqmcqms: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto yiceawuuiusakwiq; } $this->yauwooaeicgosquo("\104\x65\166\x20\x4d\157\144\145\x20\105\156\x61\x62\154\x65\144\40\x61\156\144\40\141\x6c\154\x20\162\145\161\x75\145\163\x74\x20\151\x73\40\142\x79\x70\141\x73\163\56"); return false; yiceawuuiusakwiq: if (!$this->kgkoeoeseyuugaao()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x52\x6f\x62\157\164\163\x2e\164\x78\x74\x20\x6f\162\x20\x2e\x68\x74\141\x63\x63\x65\163\x73\x20\x66\x69\x6c\145\x20\151\x73\40\145\170\143\x6c\165\x64\145\144\56"); return false; sgocecweikecwwgq: if (!$this->gymgcceeqssmesiu()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x50\x48\x50\x2c\40\x58\x4d\114\x2c\40\157\x72\40\x58\123\114\x20\146\x69\x6c\145\40\151\x73\40\x65\x78\143\154\x75\144\x65\144\x2e"); return false; qwisiamkmkkwucyo: if (!$this->goecwaaykqoaaagg()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\101\x64\155\151\156\40\x6f\x72\40\101\x4a\101\x58\x20\125\x52\114\40\x69\x73\x20\x65\170\x63\x6c\x75\144\x65\x64\56"); return false; yqcusaeysomccaok: if (!$this->sgsscqasgeyeicoe()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x41\x64\155\151\156\x20\x6f\x72\x20\x41\x4a\101\130\40\125\122\114\40\x69\x73\x20\x65\170\143\x6c\165\x64\x65\144\56"); return false; iwkckkeimmeoquyq: if ($this->gooeyogikcusgwuu()) { goto masakmomqmeocqqg; } $this->yauwooaeicgosquo("\122\145\x71\165\145\x73\164\40\155\145\164\150\157\x64\x20\x69\163\x20\156\x6f\x74\x20\x61\154\154\x6f\x77\145\x64\x2e\40\x50\141\x67\x65\40\143\141\x6e\156\x6f\x74\x20\x62\x65\x20\143\141\143\x68\x65\x64\56", ["\162\x65\161\165\145\163\164\x5f\x6d\145\x74\x68\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; masakmomqmeocqqg: if ($this->cskwmweqysskwckg()) { goto yksywwikmeksikqc; } $this->lastError = []; return true; yksywwikmeksikqc: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\143\143\145\x73\163"]) { goto yoqsigmoyaaceqky; } $this->yauwooaeicgosquo("\x4e\x6f\40\143\x6f\156\146\151\x67\40\146\151\154\145\40\x66\157\165\156\x64", ["\143\157\x6e\146\x69\147\x5f\160\141\164\150" => $uiewakwqscemywuo["\160\x61\164\x68"]]); return false; yoqsigmoyaaceqky: if (!($this->cskwmweqysskwckg("\161\x75\145\x72\x79\x5f\163\164\162\151\x6e\x67") && !$this->koguieumooaesyww())) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x51\165\145\x72\x79\x20\x73\x74\x72\151\156\147\x20\x55\122\114\40\151\163\40\145\170\x63\x6c\165\144\145\144\56", $_GET); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\x53\x53\x4c\40\x63\x61\143\x68\x65\40\156\x6f\164\40\x61\x70\160\154\x69\145\x64\40\x74\157\x20\x70\x61\x67\145\56"); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\165\162\151") && !$this->qweiomkkuikwugks())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\x50\x61\x67\145\x20\151\163\x20\x65\x78\143\x6c\165\x64\145\144\x2e"); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\x72\145\152\145\143\x74\x65\144\137\143\157\x6f\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\x45\170\x63\154\x75\144\145\144\40\x63\157\x6f\x6b\151\x65\40\146\x6f\x75\156\144\56", ["\x65\170\143\154\x75\x64\x65\x64\137\143\157\x6f\x6b\151\145\163" => $this->cokqaygwwygweuyk()]); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\155\141\x6e\144\x61\x74\x6f\x72\x79\137\143\x6f\157\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\x4d\151\163\163\x69\x6e\x67\x20\155\141\x6e\144\141\x74\157\162\171\40\x63\x6f\157\153\x69\x65\72\x20\x70\x61\147\145\x20\156\x6f\x74\x20\160\x72\157\x63\x65\x73\163\x65\x64\56", ["\x6d\x69\x73\163\x69\156\147\x5f\x63\157\157\153\x69\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; ssagcgqaucssyego: if (!($this->cskwmweqysskwckg("\165\163\145\162\137\x61\147\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\x55\x73\x65\x72\40\x41\x67\145\156\x74\40\151\x73\40\145\170\143\x6c\x75\144\x65\x64\x2e", ["\165\163\145\162\137\141\x67\x65\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\120\x5f\125\123\105\122\137\101\x47\x45\x4e\124")]); return false; mqgeseysuwcaqwiy: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\102\x75\x66\146\x65\162\x20\x63\157\x6e\x74\x65\156\164\40\x75\x6e\144\x65\162\x20\62\x35\65\x20\x63\x68\141\x72\141\x63\164\145\162\163\x2e"); return false; ekoqieigyoeyauqa: if (!(http_response_code() !== 200)) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x50\141\x67\145\x20\x69\163\x20\x6e\x6f\164\40\x61\40\x32\60\60\x20\110\124\x54\x50\40\162\145\x73\160\x6f\156\163\145\x20\141\156\x64\x20\x63\x61\156\x6e\157\164\x20\x62\145\x20\x63\x61\x63\150\x65\x64\56"); return false; cuwcsamuuqyuyqsu: if (!($this->cskwmweqysskwckg("\x64\x6f\156\157\164\x6f\160\164\x69\155\151\172\x65\160\141\x67\145") && $this->cowcgqokiosgaqic())) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\x44\117\x4e\124\117\x50\x54\111\115\x49\x5a\x45\x44\120\x41\x47\x45\40\151\163\40\144\x65\x66\x69\156\145\144\56\x20\x50\x61\147\x65\40\x63\141\x6e\x6e\157\164\x20\x62\145\40\143\x61\143\x68\145\x64\56"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\167\160\x5f\x34\x30\x34") && $this->kmmyuiwaogukwqqi())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x57\x50\40\x34\x30\64\40\160\x61\147\145\x20\151\x73\x20\145\x78\x63\154\165\144\x65\x64\56"); return false; ksckqkmwiqggykke: if (!($this->cskwmweqysskwckg("\x73\x65\x61\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto igwkcikeyoowosoi; } $this->yauwooaeicgosquo("\123\145\x61\x72\x63\x68\x20\x70\141\x67\145\40\x69\163\40\x65\170\x63\154\165\x64\145\x64\x2e"); return false; igwkcikeyoowosoi: if (!$this->cskwmweqysskwckg("\151\x73\x5f\x68\164\155\154")) { goto awaqksikyomsuaeo; } if (!($this->cmaecekuqkwmemms("\x52\x45\x53\124\x5f\x52\x45\121\x55\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto iqsgossweywksoia; } unset($this->tests["\151\x73\137\x68\x74\155\154"]); iqsgossweywksoia: awaqksikyomsuaeo: if (!($this->cskwmweqysskwckg("\151\163\137\x68\164\x6d\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto cuommomwmsackoqc; } $this->yauwooaeicgosquo("\x4e\157\40\x63\154\157\163\x69\156\x67\x20\74\x2f\150\x74\x6d\x6c\x3e\40\x77\141\x73\x20\x66\x6f\165\156\x64\56"); return false; cuommomwmsackoqc: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\x6f\x70\164\x69\x6d\151\x7a\x61\164\151\157\x6e\x5f\x61\x6c\x6c\157\x77\137\164\157\137\163\164\141\162\164\x5f\142\165\146\146\145\162\137\x70\x72\157\x63\145\163\163", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ggeoqeowscwkeumy; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto qyeswawykmasuqye; ggeoqeowscwkeumy: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); qyeswawykmasuqye: return apply_filters("\160\162\x5f\157\160\x74\151\x6d\x69\x7a\x61\x74\151\157\156\137\x68\141\x73\137{$ymqmyyeuycgmigyo}\x5f\x74\145\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\134\163\52\x5c\57\x5c\x73\x2a\x68\x74\155\154\134\163\52\x3e\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\x3f\x3a\x2e\53\x2f\x29\x3f" . $wp_rewrite->feed_base . "\50\x3f\x3a\x2f\x28\77\72\x2e\x2b\57\x3f\51\x3f\x29\77\44"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\51\44\43\151", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\x64\145\166\x5f\x6d\x6f\144\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uwaimsisescsgyqk; } return $this->eecucukcqkqysiau(__FUNCTION__); uwaimsisescsgyqk: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uqcsksaywyqeumig; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uqcsksaywyqeumig: $ucasskoyoewwmmii = ["\x72\x6f\x62\157\164\163\x2e\x74\x78\164", "\x2e\150\164\141\x63\x63\145\x73\163"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto jsmisuccwyukksgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); jsmisuccwyukksgc: ukwoswyyogmsygqg: } yggmaskeguaqkusc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwmiwaecqcgiaqye; } return $this->eecucukcqkqysiau(__FUNCTION__); kwmiwaecqcgiaqye: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto gkoaeuekqockuoiq; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto yqicwmekwuoywyus; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yqicwmekwuoywyus: gkoaeuekqockuoiq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eekaiaeqewiqkkgm; } return $this->eecucukcqkqysiau(__FUNCTION__); eekaiaeqewiqkkgm: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto kceuusiekagyeoys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kceuusiekagyeoys: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\144\145\x78\x2e\160\x68\160")) { goto uyeyscsaigimsqwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uyeyscsaigimsqwq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\170\x6d\x6c" => 1, "\x78\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\116\x47\137\101\x4a\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\123")), ["\157\x6e", "\x31"]) || "\64\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\122\x56\105\122\137\x50\x4f\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\137\143\165\163\x74\157\155\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\107\105\x54" => 1, "\x48\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mwieyyqamgwicgco; } return $this->eecucukcqkqysiau(__FUNCTION__); mwieyyqamgwicgco: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto wkiymcoqqiigqaaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkiymcoqqiigqaaw: $yccgiaiouekkouay = ["\x73" => 1, "\154\x61\x6e\147" => 1, "\x70\x65\162\155\x61\154\x69\156\x6b\137\156\141\155\145" => 1, "\154\x70\x2d\166\141\162\151\141\164\151\x6f\x6e\55\151\x64" => 1, "\x58\x44\105\102\125\x47\x5f\123\x45\x53\x53\x49\x4f\116\x5f\123\x54\x41\x52\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); esqwswmoegiqcckg: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\161\x75\x65\x72\x79\137\163\x74\162\x69\156\147\163"); if ($yccgiaiouekkouay) { goto qmokwkocmcyeyesc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qmokwkocmcyeyesc: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mosuacsuaasssciu; } return $this->eecucukcqkqysiau(__FUNCTION__); mosuacsuaasssciu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto qksckewucmosemuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qksckewucmosemuo: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto kmooekeyemqgucci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kmooekeyemqgucci: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto mkgmaguyswskyioa; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; mkgmaguyswskyioa: cmmusgkieoqyymgs: } skuuyysooocugyww: if (empty($eiocugauqgouiuyi)) { goto skwusmoyomgqkimm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); skwusmoyomgqkimm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto usyckeewsgwaysam; } return $this->eecucukcqkqysiau(__FUNCTION__); usyckeewsgwaysam: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gicuuwuuuwumyooa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gicuuwuuuwumyooa: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\137\x6d\141\x6e\144\141\164\157\162\171\x5f\143\x6f\157\x6b\x69\145\163"))); if ($this->wemyikwikgwqwuoc()) { goto kakkuyeccaacewyo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); kakkuyeccaacewyo: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto qsokkkyoackoycie; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); qsokkkyoackoycie: ismeikacqqyqcmqe: } cysgqimowcqoqqsc: if (!empty($yiycakoikkyuokgk)) { goto casgoamcqkekgeeo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); casgoamcqkekgeeo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\x5f\x6f\160\164\x69\155\x69\x7a\x61\164\151\x6f\156\137\x6f\166\145\x72\x72\x69\x64\x65\x5f\x64\157\x6e\x74\x5f\157\x70\164\x69\x6d\x69\x7a\145", $this->cmaecekuqkwmemms("\x50\x52\137\x4f\x50\x54\x49\115\111\132\x41\x54\111\x4f\x4e\x5f\x44\x4f\116\x54\137\x4f\x50\x54\x49\x4d\x49\x5a\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\64\x30\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\163\x65\141\x72\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\x5f\157\x70\164\x69\x6d\151\172\141\x74\x69\157\156\x5f\x6f\x70\x74\x69\x6d\151\x7a\145\137\x73\x65\x61\162\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\x5f\x73\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yseyyukqaowwouua; } return $this->eecucukcqkqysiau(__FUNCTION__); yseyyukqaowwouua: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto qcgyggiaowuqswuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcgyggiaowuqswuw: if (!$this->aceaeommyuooiqge()->get("\155\x6f\x62\151\154\145\x5f\x63\141\143\x68\145")) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sooecucuakgkuyis: $wayquiskgeuoqamk = "\62\x2e\60\x5c\40\x4d\115\x50\x7c\x32\x34\60\x78\x33\62\60\x7c\64\60\x30\130\62\64\x30\x7c\x41\166\x61\156\x74\x47\x6f\174\x42\x6c\141\143\x6b\x42\145\x72\162\171\174\102\154\x61\172\x65\162\174\x43\x65\154\154\160\x68\x6f\156\x65\x7c\104\141\x6e\147\145\x72\x7c\104\157\x43\157\115\157\x7c\105\x6c\x61\151\156\145\57\63\56\60\174\105\x75\x64\x6f\x72\x61\x57\145\142\174\107\x6f\x6f\x67\154\x65\x62\x6f\164\55\115\x6f\x62\x69\154\x65\x7c\x68\151\160\x74\x6f\160\x7c\111\x45\115\x6f\x62\151\154\x65\174\113\131\x4f\103\x45\x52\x41\x2f\x57\x58\63\x31\x30\113\x7c\x4c\107\57\x55\x39\71\60\174\x4d\x49\104\x50\55\62\56\x7c\115\x4d\x45\106\x32\x30\174\115\x4f\124\55\126\174\116\x65\x74\106\x72\x6f\156\x74\x7c\x4e\145\x77\x74\174\x4e\x69\156\x74\145\156\x64\x6f\134\x20\x57\x69\151\x7c\116\x69\x74\x72\x6f\174\x4e\x6f\x6b\151\x61\x7c\117\160\x65\162\141\x5c\x20\x4d\151\156\151\174\120\x61\154\x6d\174\120\x6c\141\x79\x53\164\141\x74\x69\157\x6e\x5c\40\x50\x6f\x72\x74\x61\x62\154\x65\x7c\x70\x6f\162\x74\x61\x6c\155\155\x6d\174\x50\x72\x6f\x78\x69\x6e\145\164\174\120\x72\x6f\x78\151\x4e\145\x74\174\123\x48\101\122\x50\55\x54\x51\55\107\x58\x31\x30\x7c\x53\x48\107\55\x69\x39\60\60\x7c\123\155\141\x6c\154\174\123\x6f\x6e\x79\x45\x72\x69\x63\163\163\x6f\x6e\174\x53\171\x6d\142\x69\141\156\134\x20\x4f\x53\x7c\x53\x79\x6d\x62\x69\141\x6e\x4f\123\174\124\x53\62\x31\x69\55\61\60\x7c\x55\120\56\x42\x72\x6f\167\163\x65\162\x7c\125\120\56\x4c\x69\x6e\x6b\x7c\167\x65\142\117\x53\x7c\127\x69\x6e\144\157\x77\163\x5c\x20\103\105\x7c\127\151\x6e\x57\101\120\x7c\x59\141\150\x6f\x6f\x53\x65\145\153\145\162\x2f\x4d\61\101\61\55\122\62\x44\x32\x7c\151\120\x68\157\156\145\x7c\x69\120\157\144\x7c\101\x6e\144\x72\x6f\151\144\x7c\x42\x6c\x61\143\x6b\x42\x65\162\162\171\71\65\63\60\x7c\x4c\x47\55\124\125\71\x31\x35\x5c\x20\x4f\x62\151\147\157\174\114\x47\105\x5c\40\126\130\174\167\145\x62\x4f\x53\x7c\x4e\157\x6b\151\141\65\70\x30\60"; if (!preg_match("\x23\136\x2e\x2a\x28{$wayquiskgeuoqamk}\51\56\x2a\43\x69", $uowwycywwssskuys)) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ywqakqkmmcoceqka: $wayquiskgeuoqamk = "\x77\63\143\134\40\174\167\x33\x63\x2d\x7c\141\143\x73\x2d\174\141\x6c\x61\x76\x7c\x61\x6c\x63\141\174\x61\155\x6f\151\x7c\x61\165\x64\x69\x7c\141\x76\141\x6e\x7c\142\x65\156\161\174\x62\x69\162\144\x7c\x62\154\141\x63\174\142\154\141\x7a\174\142\x72\145\167\x7c\x63\145\154\154\174\x63\x6c\144\x63\x7c\x63\155\x64\x2d\x7c\144\x61\156\x67\174\x64\157\x63\x6f\x7c\145\162\151\143\x7c\150\151\160\x74\x7c\150\164\x63\137\174\x69\156\156\x6f\x7c\x69\160\x61\x71\174\x69\x70\157\x64\174\x6a\x69\x67\163\x7c\153\144\144\x69\174\x6b\x65\x6a\x69\174\154\x65\156\x6f\x7c\x6c\147\55\x63\174\x6c\x67\55\x64\x7c\154\147\55\x67\174\154\147\145\55\174\x6c\147\x2f\x75\x7c\x6d\141\x75\151\x7c\x6d\141\170\x6f\x7c\155\151\144\x70\x7c\x6d\x69\x74\163\x7c\x6d\x6d\x65\x66\x7c\155\157\x62\x69\174\x6d\157\x74\x2d\174\155\157\x74\x6f\x7c\155\167\x62\160\x7c\156\x65\x63\55\x7c\156\145\167\164\174\156\x6f\153\x69\174\x70\141\x6c\x6d\x7c\x70\141\156\x61\x7c\160\x61\x6e\x74\x7c\x70\150\x69\154\174\160\154\141\171\x7c\x70\157\162\x74\174\x70\x72\x6f\170\174\x71\x77\141\x70\x7c\x73\x61\147\145\174\x73\x61\x6d\163\x7c\163\x61\x6e\x79\174\163\143\150\x2d\174\x73\x65\143\x2d\x7c\x73\x65\x6e\x64\174\x73\145\x72\x69\x7c\163\x67\150\x2d\174\x73\150\x61\162\174\x73\x69\145\x2d\x7c\163\x69\x65\155\x7c\163\x6d\141\x6c\174\163\x6d\x61\x72\x7c\x73\x6f\156\x79\x7c\163\x70\150\x2d\174\163\171\155\142\x7c\x74\55\155\157\174\x74\x65\154\x69\174\164\x69\155\55\x7c\x74\x6f\x73\150\x7c\x74\x73\155\55\174\x75\160\x67\61\x7c\165\x70\163\151\x7c\166\153\55\166\174\x76\157\x64\141\x7c\x77\x61\x70\55\174\x77\x61\160\141\174\167\141\x70\151\174\167\141\160\160\x7c\167\x61\160\162\174\x77\x65\142\143\174\x77\151\156\x77\x7c\167\151\156\167\174\x78\x64\x61\x5c\x20\x7c\x78\x64\141\x2d"; if (!preg_match("\43\136\50{$wayquiskgeuoqamk}\51\x2e\52\43\x69", $uowwycywwssskuys)) { goto kwsqgqmwyyeykgum; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwsqgqmwyyeykgum: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto emauuoieewwoeyqq; } return $this->eecucukcqkqysiau(__FUNCTION__); emauuoieewwoeyqq: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto koukiyqaccegmquc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); koukiyqaccegmquc: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\x72\x65\x6a\145\x63\x74\137\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto ekakkiuuquqkccse; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ekakkiuuquqkccse: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqwwacmigasucsoc; } return $this->eecucukcqkqysiau(__FUNCTION__); oqwwacmigasucsoc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\137\x72\145\x6a\145\143\164\x5f\165\162\151"); if ($escsaeeosigewsme) { goto egkeqqgakieyimuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); egkeqqgakieyimuq: $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\51\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\x5f\x55\123\x45\x52\137\x41\x47\x45\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cakuguiciaiaeukg; } return $this->eecucukcqkqysiau(__FUNCTION__); cakuguiciaiaeukg: $yygmoeguaqyumuui = [ "\110\x54\124\x50\x5f\103\x46\137\103\x4f\116\x4e\x45\x43\x54\x49\116\107\x5f\x49\x50", "\110\124\124\120\x5f\103\x4c\111\x45\x4e\124\137\x49\120", "\x48\x54\124\120\x5f\x58\x5f\x46\117\122\x57\101\x52\x44\x45\x44\x5f\106\117\122", "\x48\124\x54\x50\x5f\x58\x5f\x46\x4f\122\x57\101\x52\104\x45\104", "\110\124\124\x50\137\130\x5f\x43\x4c\x55\x53\124\105\x52\137\103\x4c\x49\105\x4e\124\137\x49\120", "\x48\x54\124\x50\x5f\130\x5f\x52\105\x41\114\137\111\x50", "\x48\x54\124\120\x5f\x46\x4f\x52\x57\101\x52\104\x45\x44\137\106\117\x52", "\x48\124\x54\x50\x5f\x46\x4f\x52\127\x41\122\104\105\104", "\x52\x45\115\117\124\105\x5f\x41\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto cumeycwmuuqawwyu; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto ckwmkquuyyugigom; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); ckwmkquuyyugigom: cumeycwmuuqawwyu: awwaiioyywmokwsm: } wswikooyuaaouqgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\x30\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uaicwcqwauosmsqm; } return $this->eecucukcqkqysiau(__FUNCTION__); uaicwcqwauosmsqm: $yywgiquyoymymqwk = [ "\x32\x30\70\x2e\67\60\56\62\x34\x37\56\61\65\x37" => '', "\61\x37\62\x2e\62\65\x35\56\x34\70\56\61\63\60" => '', "\61\67\x32\x2e\62\x35\x35\56\x34\70\56\x31\63\x31" => '', "\x31\x37\62\56\x32\x35\x35\x2e\64\x38\x2e\x31\63\x32" => '', "\x31\67\62\56\62\x35\x35\56\64\x38\56\x31\63\63" => '', "\61\67\62\56\62\x35\65\56\64\70\56\61\63\x34" => '', "\61\x37\62\x2e\62\65\x35\x2e\64\70\56\61\x33\x35" => '', "\61\x37\x32\x2e\x32\65\65\x2e\x34\x38\56\x31\63\x36" => '', "\61\x37\62\56\62\x35\65\x2e\x34\70\56\61\x33\x37" => '', "\61\67\x32\56\62\x35\65\x2e\x34\x38\56\61\63\70" => '', "\x31\67\x32\x2e\x32\x35\x35\56\64\x38\x2e\61\x33\x39" => '', "\61\x37\x32\x2e\x32\x35\x35\x2e\x34\x38\x2e\x31\64\x30" => '', "\x31\x37\62\56\62\x35\x35\x2e\x34\70\x2e\61\x34\x31" => '', "\x31\67\62\x2e\62\65\65\x2e\64\x38\x2e\x31\64\62" => '', "\61\x37\x32\56\62\x35\65\x2e\64\x38\56\x31\64\63" => '', "\x31\x37\x32\x2e\x32\65\65\56\64\70\56\x31\64\64" => '', "\x31\67\x32\56\x32\x35\x35\x2e\64\70\56\61\x34\65" => '', "\x31\x37\x32\x2e\62\x35\x35\x2e\64\x38\56\61\x34\x36" => '', "\x31\67\x32\56\x32\x35\65\x2e\64\70\x2e\x31\64\67" => '', "\x35\62\x2e\62\62\x39\x2e\61\x32\x32\56\62\64\60" => '', "\x31\x30\x34\x2e\x32\61\x34\x2e\x37\62\56\61\60\x31" => '', "\x31\63\x2e\x36\x36\x2e\x37\56\61\x31" => '', "\x31\63\x2e\x38\65\x2e\62\64\56\70\63" => '', "\x31\x33\x2e\70\x35\x2e\62\64\56\71\60" => '', "\x31\63\x2e\x38\x35\x2e\x38\62\56\x32\66" => '', "\x34\60\56\x37\x34\56\x32\x34\x32\56\62\x35\63" => '', "\x34\60\x2e\67\x34\56\x32\x34\63\x2e\x31\63" => '', "\64\x30\x2e\x37\x34\x2e\x32\64\x33\56\61\x37\66" => '', "\61\x30\64\x2e\62\61\x34\56\64\x38\56\x32\x34\67" => '', "\x31\x35\67\56\65\65\x2e\61\70\x39\56\61\x38\x39" => '', "\x31\x30\64\x2e\x32\61\x34\x2e\61\61\x30\56\61\x33\65" => '', "\x37\60\56\63\x37\56\70\x33\x2e\x32\64\60" => '', "\66\65\56\65\62\x2e\x33\66\56\x32\x35\60" => '', "\x31\63\56\67\x38\56\x32\x31\66\56\65\66" => '', "\x35\x32\x2e\x31\x36\x32\56\x32\61\x32\x2e\61\66\63" => '', "\62\63\56\71\x36\56\x33\x34\56\61\60\65" => '', "\66\65\56\x35\x32\56\x31\61\x33\56\62\x33\66" => '', "\x31\x37\62\56\x32\x35\x35\x2e\66\61\56\x33\64" => '', "\x31\67\x32\56\x32\x35\x35\56\x36\x31\56\x33\65" => '', "\x31\x37\x32\56\62\x35\65\x2e\x36\x31\x2e\x33\x36" => '', "\61\67\62\x2e\x32\65\65\x2e\x36\x31\56\x33\x37" => '', "\61\67\x32\56\x32\65\65\56\66\x31\56\63\70" => '', "\x31\67\62\56\62\65\65\56\x36\61\x2e\x33\71" => '', "\61\67\62\56\x32\65\x35\x2e\66\x31\x2e\64\60" => '', "\x35\x32\x2e\x32\63\x37\x2e\x32\63\x35\x2e\61\x38\x35" => '', "\x35\x32\56\62\63\x37\56\62\65\x30\x2e\67\x33" => '', "\65\62\56\62\x33\x37\56\62\63\x36\x2e\x31\64\x35" => '', "\x31\x30\64\56\64\x31\56\62\x2e\61\71" => '', "\x31\71\x31\56\62\x33\x35\x2e\71\x38\x2e\x31\66\64" => '', "\x31\71\x31\56\62\63\65\56\71\x39\56\x32\62\61" => '', "\61\x39\x31\56\x32\63\x32\56\61\71\x34\56\x35\61" => '', "\x31\x30\64\x2e\x32\x31\x31\56\x31\x34\x33\x2e\x38" => '', "\x31\60\64\56\62\x31\x31\56\61\x36\65\56\x35\x33" => '', "\65\62\56\x31\67\x32\56\61\x34\x2e\x38\x37" => '', "\x34\x30\x2e\x38\x33\x2e\70\71\56\x32\61\64" => '', "\x35\x32\x2e\61\67\65\56\65\x37\56\70\61" => '', "\x32\60\x2e\x31\x38\x38\56\66\63\56\61\x35\x31" => '', "\x32\x30\x2e\65\x32\x2e\x33\x36\56\x34\x39" => '', "\65\x32\56\62\64\x36\x2e\x31\x36\65\56\x31\x35\63" => '', "\65\x31\x2e\61\64\64\x2e\61\x30\x32\x2e\x32\x33\63" => '', "\x31\63\56\x37\x36\56\71\67\56\x32\x32\x34" => '', "\x31\x30\x32\x2e\x31\x33\x33\x2e\x31\66\x39\x2e\66\x36" => '', "\65\62\x2e\62\x33\61\56\61\x39\71\x2e\x31\67\x30" => '', "\61\63\56\65\x33\56\61\66\62\x2e\x37" => '', "\x34\60\x2e\x31\62\x33\x2e\62\61\x38\x2e\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto gsqcoqqsioiyoykq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsqcoqqsioiyoykq: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\x55\123\105\x52\x5f\101\x47\105\116\124"); if ($uowwycywwssskuys) { goto goaowamiyyamueiw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); goaowamiyyamueiw: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\156\147\x64\157\155\x50\x61\147\x65\123\160\x65\145\144\x7c\x44\x61\x72\145\102\157\157\x73\164\x7c\x47\x6f\x6f\x67\154\x65\174\x50\124\123\x54\x7c\103\x68\x72\x6f\x6d\145\55\x4c\x69\147\x68\x74\x68\x6f\165\x73\x65\x7c\x57\120\40\x52\157\143\x6b\x65\164\x23\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\x55\x45\x53\124\137\x55\x52\111", ''); if (!$iyiwooigkweeewey) { goto iaomqomgiwiegoca; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); iaomqomgiwiegoca: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ysweqawmawicakeo; } return ''; ysweqawmawicakeo: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto owisckseoogsugqq; } return $magawcseesgowoeo; owisckseoogsugqq: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto ookcgumoacskyymy; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); ookcgumoacskyymy: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\x45\123\x54\137\115\x45\x54\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto kgysyqkoqgwmoscq; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\x5f\151\147\156\157\162\145\x64\137\x70\x61\x72\141\155\x65\x74\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto cuseccewekgcgkyg; } ksort($eyagkkkqkwcuygso); cuseccewekgcgkyg: kgysyqkoqgwmoscq: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; oqwcmgwimeisusoe: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto makomwwyomweyamm; } if (strpos($euueacigmgoqkimu, "\56\56\57") === 0) { goto ooysmgyeqoiesgqm; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto ocgkwqqmgasuoies; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\57") === 0) { goto wwswmaewcaisauei; } if ("\57\x2e" === $euueacigmgoqkimu) { goto gcskyqewysqaceeg; } if (strpos($euueacigmgoqkimu, "\57\56\x2e\57") === 0) { goto cigesysuauaiccms; } if ("\57\x2e\x2e" === $euueacigmgoqkimu) { goto gwiaimosqoiquwkc; } if ("\56" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto qiaaqkymeuuueoqk; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto acesyuieuuqwgkwm; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto asaowisseacciyia; acesyuieuuqwgkwm: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); asaowisseacciyia: goto ugswokwmkumcmigc; qiaaqkymeuuueoqk: $euueacigmgoqkimu = ''; ugswokwmkumcmigc: goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); owgakkqgckqcegoi: goto qumkwsqqocooyuoq; cigesysuauaiccms: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qumkwsqqocooyuoq: goto kkewoqqowugagwoy; gcskyqewysqaceeg: $euueacigmgoqkimu = "\x2f"; kkewoqqowugagwoy: goto wsemeeocquawyauo; wwswmaewcaisauei: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wsemeeocquawyauo: goto wmaeicoyyciuaiuy; ocgkwqqmgasuoies: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wmaeicoyyciuaiuy: goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); kwoyiysciqumswcy: goto oqwcmgwimeisusoe; makomwwyomweyamm: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto aaogeemgkogagkai; } $icwicymcioeyeyek["\x70\145\162\155\x61\x6c\x69\x6e\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); aaogeemgkogagkai: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto qqmmycmsoqegcqqw; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); qqmmycmsoqegcqqw: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto isqwwmikecauwyuc; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); isqwwmikecauwyuc: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\x72\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\x65\163\x73\141\x67\145" => $uamcoiueqaamsqma, "\x63\x6f\x6e\x74\x65\170\x74" => $icwicymcioeyeyek]; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668708194f632             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\162\x69" => 1, "\163\163\154" => 0, "\167\160\x5f\x34\60\x34" => 1, "\x73\x65\x61\162\x63\x68" => 1, "\155\157\142\x69\x6c\x65" => 1, "\151\x73\137\x68\x74\155\x6c" => 1, "\161\x75\145\x72\171\137\x73\164\162\x69\156\x67" => 1, "\144\x6f\156\157\x74\x63\x61\143\150\145\160\x61\147\x65" => 1, "\x72\145\152\145\143\x74\145\144\x5f\143\157\x6f\153\151\x65" => 1, "\x6d\141\156\x64\x61\x74\157\162\x79\x5f\x63\157\157\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\164\163"])) { goto ssywsaaqqaucesau; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\145\x73\164\163"]); ssywsaaqqaucesau: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\157\153\151\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto ygcgoaokauigwuus; } $ywmkwiwkosakssii["\143\x6f\x6f\153\x69\145\163"] = $_COOKIE; ygcgoaokauigwuus: if (!(!isset($ywmkwiwkosakssii["\x70\157\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto ysiqakyaiooyscwy; } $ywmkwiwkosakssii["\160\x6f\163\x74"] = $_POST; ysiqakyaiooyscwy: if (!(!isset($ywmkwiwkosakssii["\147\x65\164"]) && !empty($_GET) && is_array($_GET))) { goto auumaoycmsmsgigs; } $ywmkwiwkosakssii["\147\x65\164"] = $_GET; auumaoycmsmsgigs: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\x67\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\164"]) && is_array($ywmkwiwkosakssii["\x70\157\163\x74"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\x6f\x6b\151\x65\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\x6b\151\145\163"]) ? $ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto ousmyagwsiooumos; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\137\143\x75\163\164\x6f\x6d\151\x7a\145" => '']); ousmyagwsiooumos: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->aiukiaokcgsiomew()) { goto qeuyekusasqmcqms; } $this->yauwooaeicgosquo("\x44\145\x76\40\x4d\x6f\x64\x65\x20\105\156\141\x62\154\x65\144\40\x61\x6e\144\40\141\x6c\154\x20\x72\145\x71\x75\145\x73\164\40\151\x73\x20\142\x79\160\141\163\x73\56"); return false; qeuyekusasqmcqms: if (!$this->kgkoeoeseyuugaao()) { goto yiceawuuiusakwiq; } $this->yauwooaeicgosquo("\122\157\142\x6f\x74\x73\56\x74\x78\x74\x20\157\162\40\x2e\x68\164\x61\143\x63\145\163\x73\x20\x66\151\x6c\145\x20\x69\x73\x20\145\x78\x63\x6c\165\x64\145\x64\x2e"); return false; yiceawuuiusakwiq: if (!$this->gymgcceeqssmesiu()) { goto sgocecweikecwwgq; } $this->yauwooaeicgosquo("\x50\110\120\54\x20\130\x4d\x4c\54\40\157\162\40\x58\123\114\x20\x66\151\x6c\x65\x20\x69\163\x20\145\170\x63\154\x75\144\145\x64\56"); return false; sgocecweikecwwgq: if (!$this->goecwaaykqoaaagg()) { goto qwisiamkmkkwucyo; } $this->yauwooaeicgosquo("\x41\x64\155\x69\x6e\x20\157\162\40\101\112\x41\x58\40\x55\x52\x4c\40\x69\x73\x20\145\170\x63\x6c\x75\x64\x65\x64\56"); return false; qwisiamkmkkwucyo: if (!$this->sgsscqasgeyeicoe()) { goto yqcusaeysomccaok; } $this->yauwooaeicgosquo("\x41\x64\155\151\x6e\40\x6f\162\40\101\x4a\101\x58\40\x55\122\114\40\151\163\40\145\170\x63\154\165\x64\x65\x64\x2e"); return false; yqcusaeysomccaok: if ($this->gooeyogikcusgwuu()) { goto iwkckkeimmeoquyq; } $this->yauwooaeicgosquo("\x52\145\x71\165\145\163\x74\x20\x6d\145\x74\x68\x6f\144\40\151\163\40\x6e\x6f\164\x20\x61\154\x6c\x6f\x77\x65\x64\56\40\120\x61\147\x65\40\143\x61\x6e\x6e\x6f\164\40\x62\145\40\x63\141\143\150\145\x64\56", ["\x72\145\161\x75\x65\x73\164\137\x6d\145\x74\150\157\144" => $this->ciyocmkwssocskiy()]); return false; iwkckkeimmeoquyq: if ($this->cskwmweqysskwckg()) { goto masakmomqmeocqqg; } $this->lastError = []; return true; masakmomqmeocqqg: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\x63\x63\145\163\163"]) { goto yksywwikmeksikqc; } $this->yauwooaeicgosquo("\x4e\x6f\40\x63\x6f\156\x66\x69\147\x20\146\151\x6c\x65\x20\146\157\165\156\x64", ["\143\157\x6e\x66\x69\147\x5f\160\141\164\150" => $uiewakwqscemywuo["\x70\141\x74\150"]]); return false; yksywwikmeksikqc: if (!($this->cskwmweqysskwckg("\161\x75\x65\x72\171\137\x73\164\162\151\x6e\147") && !$this->koguieumooaesyww())) { goto yoqsigmoyaaceqky; } $this->yauwooaeicgosquo("\121\165\145\162\x79\40\163\164\162\x69\156\147\x20\125\x52\x4c\x20\x69\x73\x20\145\x78\143\154\x75\144\145\144\x2e", $_GET); return false; yoqsigmoyaaceqky: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto suqckoccuyeeymww; } $this->yauwooaeicgosquo("\x53\123\x4c\40\x63\141\x63\x68\145\40\x6e\x6f\164\40\x61\x70\160\x6c\151\x65\144\40\x74\157\40\x70\141\147\145\56"); return false; suqckoccuyeeymww: if (!($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks())) { goto giugwaeuwaomossq; } $this->yauwooaeicgosquo("\120\x61\147\145\40\x69\163\40\x65\x78\143\154\x75\144\145\x64\x2e"); return false; giugwaeuwaomossq: if (!($this->cskwmweqysskwckg("\162\145\152\145\x63\164\145\144\x5f\x63\157\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto acgqaeakoyasgkku; } $this->yauwooaeicgosquo("\105\x78\143\154\x75\144\145\144\40\x63\157\x6f\153\x69\145\x20\146\x6f\165\156\x64\x2e", ["\x65\170\x63\x6c\165\144\145\x64\137\x63\x6f\157\153\x69\x65\x73" => $this->cokqaygwwygweuyk()]); return false; acgqaeakoyasgkku: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\141\164\157\x72\171\x5f\x63\x6f\157\153\x69\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto sycougcyeqmeiagk; } $this->yauwooaeicgosquo("\115\x69\x73\x73\x69\x6e\147\40\155\x61\156\144\141\164\x6f\x72\171\40\143\157\157\153\x69\145\x3a\40\x70\x61\147\145\40\x6e\x6f\x74\x20\x70\x72\157\x63\145\x73\163\145\x64\x2e", ["\155\151\x73\163\x69\x6e\147\x5f\143\157\157\x6b\x69\145\163" => $this->qgymyeqwqaiwmmea()]); return false; sycougcyeqmeiagk: if (!($this->cskwmweqysskwckg("\165\x73\x65\x72\x5f\141\147\x65\156\x74") && !$this->mqiqsuksgyekwkii())) { goto ssagcgqaucssyego; } $this->yauwooaeicgosquo("\x55\x73\145\162\40\101\147\145\156\x74\x20\151\163\x20\145\170\143\x6c\165\x64\145\144\56", ["\165\163\145\162\137\141\x67\145\x6e\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\x5f\125\123\x45\x52\137\x41\x47\x45\116\124")]); return false; ssagcgqaucssyego: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto mqgeseysuwcaqwiy; } $this->yauwooaeicgosquo("\x42\165\x66\x66\145\162\x20\143\157\x6e\164\x65\156\164\40\x75\156\x64\x65\162\40\62\x35\x35\x20\143\x68\x61\x72\x61\x63\x74\145\162\x73\56"); return false; mqgeseysuwcaqwiy: if (!(http_response_code() !== 200)) { goto ekoqieigyoeyauqa; } $this->yauwooaeicgosquo("\x50\141\147\145\40\151\x73\40\156\x6f\164\40\141\40\62\60\60\40\x48\x54\124\120\40\x72\x65\x73\160\x6f\x6e\163\145\40\x61\156\144\40\x63\141\156\156\x6f\x74\x20\142\145\x20\x63\141\x63\x68\145\144\56"); return false; ekoqieigyoeyauqa: if (!($this->cskwmweqysskwckg("\x64\157\x6e\157\x74\157\x70\164\x69\x6d\x69\x7a\x65\160\x61\x67\x65") && $this->cowcgqokiosgaqic())) { goto cuwcsamuuqyuyqsu; } $this->yauwooaeicgosquo("\x44\117\116\x54\117\120\x54\111\115\111\132\x45\x44\x50\x41\107\x45\40\x69\163\40\144\145\146\x69\156\x65\x64\x2e\40\120\x61\x67\145\40\x63\x61\156\156\x6f\164\40\x62\x65\x20\x63\141\x63\x68\145\144\x2e"); return false; cuwcsamuuqyuyqsu: if (!($this->cskwmweqysskwckg("\167\x70\137\64\x30\64") && $this->kmmyuiwaogukwqqi())) { goto mimacwyuueomgwwy; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\64\x20\160\x61\x67\145\x20\x69\163\40\x65\170\143\154\x75\144\x65\x64\56"); return false; mimacwyuueomgwwy: if (!($this->cskwmweqysskwckg("\163\145\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto ksckqkmwiqggykke; } $this->yauwooaeicgosquo("\x53\145\141\162\x63\x68\40\x70\141\147\x65\x20\151\163\40\145\x78\x63\154\x75\x64\145\x64\56"); return false; ksckqkmwiqggykke: if (!$this->cskwmweqysskwckg("\x69\x73\x5f\150\164\x6d\x6c")) { goto iqsgossweywksoia; } if (!($this->cmaecekuqkwmemms("\x52\105\x53\124\x5f\x52\105\x51\125\x45\123\x54") || $this->gaiygescoqgyusaa())) { goto igwkcikeyoowosoi; } unset($this->tests["\x69\x73\x5f\x68\x74\x6d\154"]); igwkcikeyoowosoi: iqsgossweywksoia: if (!($this->cskwmweqysskwckg("\x69\x73\137\x68\164\155\x6c") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto awaqksikyomsuaeo; } $this->yauwooaeicgosquo("\x4e\157\x20\143\x6c\157\x73\151\x6e\x67\x20\x3c\57\x68\164\x6d\154\76\x20\167\141\163\x20\x66\x6f\x75\x6e\x64\x2e"); return false; awaqksikyomsuaeo: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\x5f\x6f\x70\164\151\155\x69\x7a\141\164\x69\157\x6e\x5f\141\x6c\154\x6f\167\137\x74\157\x5f\x73\164\x61\162\x74\x5f\142\x75\146\146\145\162\137\x70\x72\x6f\x63\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto cuommomwmsackoqc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto ggeoqeowscwkeumy; cuommomwmsackoqc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); ggeoqeowscwkeumy: return apply_filters("\x70\162\x5f\x6f\x70\164\x69\x6d\151\x7a\x61\164\151\x6f\156\137\x68\x61\x73\x5f{$ymqmyyeuycgmigyo}\x5f\x74\145\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\x73\x2a\134\x2f\134\163\x2a\150\164\155\154\x5c\163\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\72\x2e\x2b\x2f\51\77" . $wp_rewrite->feed_base . "\x28\77\72\x2f\x28\77\x3a\56\53\x2f\x3f\x29\x3f\x29\77\x24"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\51\x24\x23\x69", $this->gygiweeesqqckgme()); } public function aiukiaokcgsiomew() { return $this->aceaeommyuooiqge()->get("\144\x65\166\x5f\155\157\x64\145"); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qyeswawykmasuqye; } return $this->eecucukcqkqysiau(__FUNCTION__); qyeswawykmasuqye: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto uwaimsisescsgyqk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); uwaimsisescsgyqk: $ucasskoyoewwmmii = ["\x72\x6f\142\157\164\163\56\x74\x78\164", "\56\150\x74\x61\x63\x63\x65\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto ukwoswyyogmsygqg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ukwoswyyogmsygqg: yggmaskeguaqkusc: } uqcsksaywyqeumig: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto jsmisuccwyukksgc; } return $this->eecucukcqkqysiau(__FUNCTION__); jsmisuccwyukksgc: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto yqicwmekwuoywyus; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto kwmiwaecqcgiaqye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwmiwaecqcgiaqye: yqicwmekwuoywyus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gkoaeuekqockuoiq; } return $this->eecucukcqkqysiau(__FUNCTION__); gkoaeuekqockuoiq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto eekaiaeqewiqkkgm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eekaiaeqewiqkkgm: if (!(strtolower($iyiwooigkweeewey) === "\57\151\x6e\144\145\170\x2e\160\150\x70")) { goto kceuusiekagyeoys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kceuusiekagyeoys: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\x78\155\x6c" => 1, "\x78\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\x4e\x47\x5f\101\x4a\x41\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\123")), ["\x6f\156", "\x31"]) || "\64\x34\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\105\122\137\120\117\122\x54"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\x5f\143\x75\163\x74\157\x6d\x69\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\110\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uyeyscsaigimsqwq; } return $this->eecucukcqkqysiau(__FUNCTION__); uyeyscsaigimsqwq: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto mwieyyqamgwicgco; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mwieyyqamgwicgco: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\x6e\147" => 1, "\x70\x65\x72\155\x61\x6c\151\156\x6b\x5f\156\141\x6d\x65" => 1, "\154\160\55\166\x61\x72\151\141\164\x69\x6f\156\55\x69\144" => 1, "\x58\x44\x45\x42\x55\x47\x5f\x53\105\x53\123\x49\x4f\x4e\x5f\x53\124\x41\x52\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto wkiymcoqqiigqaaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wkiymcoqqiigqaaw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\137\x71\165\145\162\171\137\163\x74\x72\x69\x6e\147\163"); if ($yccgiaiouekkouay) { goto esqwswmoegiqcckg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); esqwswmoegiqcckg: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qmokwkocmcyeyesc; } return $this->eecucukcqkqysiau(__FUNCTION__); qmokwkocmcyeyesc: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto mosuacsuaasssciu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mosuacsuaasssciu: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto qksckewucmosemuo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qksckewucmosemuo: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto cmmusgkieoqyymgs; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; cmmusgkieoqyymgs: skuuyysooocugyww: } kmooekeyemqgucci: if (empty($eiocugauqgouiuyi)) { goto mkgmaguyswskyioa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); mkgmaguyswskyioa: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto skwusmoyomgqkimm; } return $this->eecucukcqkqysiau(__FUNCTION__); skwusmoyomgqkimm: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto usyckeewsgwaysam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); usyckeewsgwaysam: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\155\x61\156\144\x61\164\x6f\x72\171\x5f\x63\x6f\157\x6b\x69\145\x73"))); if ($this->wemyikwikgwqwuoc()) { goto gicuuwuuuwumyooa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); gicuuwuuuwumyooa: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto ismeikacqqyqcmqe; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); ismeikacqqyqcmqe: cysgqimowcqoqqsc: } kakkuyeccaacewyo: if (!empty($yiycakoikkyuokgk)) { goto qsokkkyoackoycie; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qsokkkyoackoycie: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\x5f\157\x70\164\x69\155\151\172\x61\164\x69\x6f\156\137\157\x76\x65\162\x72\151\x64\145\x5f\x64\157\156\164\x5f\x6f\160\164\x69\x6d\151\x7a\145", $this->cmaecekuqkwmemms("\x50\122\137\117\120\x54\x49\x4d\x49\x5a\101\x54\x49\x4f\x4e\137\x44\117\x4e\x54\137\x4f\x50\124\111\115\x49\132\x45", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\x73\x5f\x34\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\163\137\163\145\141\x72\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\160\x74\151\x6d\x69\172\x61\x74\x69\x6f\156\x5f\157\x70\164\151\155\151\172\145\137\163\145\141\x72\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\143\150\145\137\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto casgoamcqkekgeeo; } return $this->eecucukcqkqysiau(__FUNCTION__); casgoamcqkekgeeo: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yseyyukqaowwouua; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yseyyukqaowwouua: if (!$this->aceaeommyuooiqge()->get("\155\x6f\142\151\x6c\145\x5f\x63\x61\x63\x68\145")) { goto qcgyggiaowuqswuw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcgyggiaowuqswuw: $wayquiskgeuoqamk = "\x32\x2e\60\134\x20\115\115\120\x7c\x32\64\60\170\63\62\60\x7c\64\60\60\x58\x32\x34\60\174\x41\x76\x61\156\x74\x47\157\x7c\102\154\141\x63\153\x42\145\162\162\x79\174\102\154\x61\172\x65\162\174\103\145\154\x6c\x70\150\157\156\x65\x7c\104\141\156\x67\x65\x72\174\x44\157\x43\x6f\115\157\174\105\154\141\x69\156\x65\57\x33\56\60\x7c\105\165\x64\x6f\162\141\x57\x65\142\174\107\157\157\147\x6c\x65\x62\157\164\55\x4d\x6f\142\x69\x6c\145\174\150\151\x70\x74\157\160\x7c\111\105\x4d\x6f\142\x69\x6c\x65\x7c\x4b\131\117\x43\105\x52\x41\57\x57\x58\x33\61\x30\x4b\x7c\x4c\107\x2f\125\71\71\60\174\115\x49\x44\x50\x2d\62\56\x7c\x4d\x4d\105\106\62\60\174\x4d\x4f\124\55\x56\174\116\145\164\x46\x72\157\x6e\164\174\x4e\145\x77\164\x7c\x4e\x69\x6e\164\145\156\x64\x6f\134\x20\x57\151\x69\174\116\151\x74\162\157\174\116\x6f\x6b\151\x61\174\117\x70\145\162\141\x5c\40\x4d\151\156\x69\x7c\x50\x61\x6c\155\174\120\154\141\171\x53\164\141\x74\x69\x6f\x6e\x5c\40\x50\157\162\164\141\142\154\145\174\x70\x6f\x72\x74\x61\154\x6d\x6d\x6d\174\x50\162\157\x78\151\x6e\145\164\174\x50\162\157\x78\151\x4e\145\164\174\x53\110\x41\x52\x50\x2d\124\121\55\x47\130\x31\x30\x7c\123\110\x47\x2d\151\x39\60\60\174\123\155\x61\x6c\x6c\x7c\123\x6f\x6e\x79\x45\x72\x69\143\x73\163\x6f\156\174\123\x79\155\142\151\x61\156\x5c\40\117\x53\x7c\123\171\155\142\151\x61\x6e\117\123\x7c\x54\123\x32\61\151\55\x31\60\174\x55\x50\x2e\x42\x72\x6f\167\x73\x65\162\x7c\125\x50\x2e\x4c\151\156\153\174\x77\145\142\x4f\x53\174\127\x69\156\144\x6f\x77\x73\134\x20\x43\105\x7c\x57\151\156\x57\101\120\x7c\131\x61\x68\x6f\x6f\x53\x65\x65\x6b\x65\162\57\x4d\61\101\x31\x2d\x52\62\x44\x32\174\151\x50\150\157\x6e\145\x7c\x69\x50\x6f\144\174\101\156\144\x72\x6f\x69\x64\174\102\154\141\x63\153\x42\145\162\162\171\71\65\63\60\x7c\x4c\x47\x2d\124\x55\x39\x31\x35\x5c\x20\117\x62\x69\147\x6f\x7c\114\107\x45\134\x20\126\130\174\x77\x65\142\117\123\174\x4e\157\x6b\x69\x61\x35\x38\60\60"; if (!preg_match("\43\136\x2e\52\50{$wayquiskgeuoqamk}\51\x2e\52\43\x69", $uowwycywwssskuys)) { goto sooecucuakgkuyis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sooecucuakgkuyis: $wayquiskgeuoqamk = "\167\63\x63\134\40\x7c\x77\x33\x63\x2d\174\x61\143\x73\55\174\141\x6c\x61\166\174\141\x6c\143\141\174\x61\x6d\x6f\x69\174\141\x75\144\151\x7c\x61\x76\141\x6e\x7c\x62\x65\156\x71\174\142\x69\162\144\174\x62\x6c\x61\143\174\x62\154\x61\172\x7c\142\162\145\167\x7c\x63\145\x6c\154\174\143\x6c\x64\x63\174\x63\155\x64\55\174\144\x61\x6e\x67\x7c\144\157\x63\x6f\x7c\145\x72\151\143\174\x68\x69\160\164\174\x68\x74\143\137\174\151\x6e\156\157\x7c\151\160\x61\161\x7c\x69\160\157\x64\174\x6a\151\x67\163\174\153\144\x64\151\x7c\153\145\152\151\x7c\154\145\x6e\157\174\154\147\x2d\143\174\154\x67\55\144\x7c\x6c\147\55\x67\174\x6c\x67\x65\x2d\x7c\154\x67\57\x75\x7c\x6d\x61\165\x69\x7c\155\141\x78\x6f\x7c\x6d\151\x64\160\x7c\x6d\151\x74\163\x7c\155\x6d\x65\146\x7c\x6d\157\x62\x69\174\x6d\x6f\x74\55\x7c\x6d\x6f\x74\x6f\x7c\155\x77\142\160\174\156\x65\x63\x2d\174\156\x65\x77\x74\x7c\156\157\x6b\151\174\x70\x61\154\x6d\174\160\141\x6e\x61\x7c\x70\141\156\x74\x7c\x70\x68\151\x6c\174\x70\x6c\x61\171\x7c\160\x6f\162\x74\174\160\162\x6f\170\x7c\x71\167\141\160\174\x73\x61\147\145\174\163\x61\x6d\x73\174\x73\x61\x6e\171\174\x73\x63\x68\55\174\163\x65\143\x2d\x7c\163\145\x6e\x64\x7c\163\145\x72\x69\x7c\163\147\150\x2d\174\x73\150\x61\x72\x7c\x73\151\145\55\x7c\x73\151\145\155\174\x73\155\141\154\174\x73\x6d\x61\x72\174\163\157\156\171\174\x73\x70\150\x2d\x7c\x73\x79\x6d\142\x7c\164\x2d\x6d\157\174\164\x65\x6c\151\x7c\164\x69\155\x2d\x7c\164\x6f\x73\x68\x7c\164\163\155\x2d\x7c\165\160\147\x31\174\x75\x70\x73\151\x7c\166\x6b\x2d\x76\x7c\166\x6f\x64\141\x7c\167\141\160\55\174\167\x61\160\x61\174\x77\141\x70\x69\174\x77\141\160\x70\174\167\x61\x70\162\x7c\x77\145\142\x63\174\167\x69\x6e\167\x7c\167\151\x6e\167\174\x78\144\141\134\40\174\x78\x64\141\55"; if (!preg_match("\43\136\x28{$wayquiskgeuoqamk}\x29\56\x2a\43\x69", $uowwycywwssskuys)) { goto ywqakqkmmcoceqka; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ywqakqkmmcoceqka: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwsqgqmwyyeykgum; } return $this->eecucukcqkqysiau(__FUNCTION__); kwsqgqmwyyeykgum: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto emauuoieewwoeyqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); emauuoieewwoeyqq: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\x5f\x72\145\x6a\x65\143\x74\137\x75\141"); if ($mqsuiayuwmwqaqwm) { goto koukiyqaccegmquc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); koukiyqaccegmquc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ekakkiuuquqkccse; } return $this->eecucukcqkqysiau(__FUNCTION__); ekakkiuuquqkccse: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\162\145\x6a\x65\143\164\137\165\162\x69"); if ($escsaeeosigewsme) { goto oqwwacmigasucsoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oqwwacmigasucsoc: $yciaosuiyeieceug = !preg_match("\x23\136\x28{$escsaeeosigewsme}\x29\x24\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\x55\123\x45\x52\137\101\107\x45\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egkeqqgakieyimuq; } return $this->eecucukcqkqysiau(__FUNCTION__); egkeqqgakieyimuq: $yygmoeguaqyumuui = [ "\110\124\x54\x50\137\x43\x46\137\103\117\116\116\x45\x43\124\111\116\x47\137\111\120", "\x48\x54\124\120\x5f\103\x4c\x49\105\116\124\x5f\111\x50", "\x48\x54\x54\120\x5f\x58\137\x46\117\122\x57\x41\x52\104\x45\x44\137\x46\x4f\122", "\110\x54\x54\120\x5f\130\137\106\x4f\122\x57\x41\x52\104\x45\x44", "\x48\x54\124\x50\137\x58\137\x43\114\125\123\124\105\122\x5f\103\114\111\x45\x4e\124\x5f\x49\x50", "\110\x54\x54\x50\137\130\x5f\122\105\x41\114\137\x49\x50", "\x48\x54\x54\120\x5f\106\x4f\x52\127\101\122\x44\105\104\137\x46\117\122", "\x48\124\x54\x50\137\x46\117\122\x57\x41\x52\104\105\104", "\122\105\x4d\x4f\x54\x45\137\101\104\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto ckwmkquuyyugigom; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto awwaiioyywmokwsm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); awwaiioyywmokwsm: ckwmkquuyyugigom: wswikooyuaaouqgk: } cakuguiciaiaeukg: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto cumeycwmuuqawwyu; } return $this->eecucukcqkqysiau(__FUNCTION__); cumeycwmuuqawwyu: $yywgiquyoymymqwk = [ "\62\60\x38\56\x37\60\x2e\62\x34\67\56\x31\x35\x37" => '', "\61\x37\x32\56\x32\65\x35\x2e\64\x38\56\x31\x33\60" => '', "\61\x37\62\x2e\x32\x35\x35\56\64\x38\56\61\63\61" => '', "\x31\x37\62\x2e\62\65\65\56\x34\70\x2e\x31\x33\x32" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\63\x33" => '', "\61\67\x32\56\62\65\x35\56\64\70\x2e\x31\x33\64" => '', "\x31\67\62\56\62\x35\65\56\x34\70\56\x31\x33\65" => '', "\x31\x37\62\x2e\x32\x35\x35\56\64\70\56\x31\63\66" => '', "\x31\x37\x32\x2e\x32\65\x35\56\x34\70\56\x31\x33\x37" => '', "\61\x37\x32\56\62\x35\65\x2e\64\70\56\x31\x33\70" => '', "\x31\x37\62\x2e\62\x35\65\x2e\x34\70\x2e\61\63\x39" => '', "\x31\67\62\56\62\65\65\56\64\x38\x2e\x31\x34\x30" => '', "\x31\67\x32\56\x32\65\65\x2e\64\70\x2e\x31\x34\x31" => '', "\x31\67\x32\x2e\x32\65\x35\56\64\70\56\x31\x34\62" => '', "\x31\67\62\x2e\62\x35\x35\x2e\x34\70\x2e\61\64\x33" => '', "\61\67\62\56\62\65\x35\56\x34\70\56\x31\x34\x34" => '', "\61\67\62\56\62\x35\x35\x2e\64\70\x2e\x31\64\x35" => '', "\61\x37\x32\56\62\x35\x35\x2e\x34\x38\56\61\64\x36" => '', "\x31\x37\62\56\x32\65\x35\x2e\64\70\x2e\61\x34\67" => '', "\x35\x32\x2e\x32\62\x39\x2e\x31\x32\62\x2e\x32\64\60" => '', "\x31\x30\x34\x2e\62\61\x34\x2e\67\x32\x2e\x31\60\x31" => '', "\61\63\x2e\x36\66\x2e\x37\x2e\x31\61" => '', "\61\x33\56\70\x35\56\x32\x34\56\70\x33" => '', "\x31\x33\x2e\x38\65\56\x32\x34\56\71\x30" => '', "\61\x33\56\x38\x35\56\70\62\x2e\62\x36" => '', "\64\x30\x2e\67\x34\x2e\62\x34\x32\56\62\65\x33" => '', "\64\x30\x2e\x37\x34\56\62\64\x33\56\61\x33" => '', "\x34\60\x2e\x37\x34\x2e\x32\64\63\x2e\x31\67\x36" => '', "\x31\x30\64\56\62\61\64\x2e\64\x38\x2e\x32\64\x37" => '', "\x31\65\x37\x2e\x35\65\56\x31\70\71\56\x31\x38\71" => '', "\x31\x30\x34\56\x32\61\64\x2e\61\61\x30\56\x31\x33\x35" => '', "\67\60\56\x33\67\56\x38\63\56\x32\64\60" => '', "\66\65\x2e\x35\x32\x2e\x33\66\x2e\62\65\x30" => '', "\x31\63\56\67\70\x2e\x32\61\x36\x2e\65\x36" => '', "\x35\62\56\61\66\x32\x2e\x32\x31\62\x2e\x31\x36\x33" => '', "\62\63\x2e\71\x36\56\x33\x34\x2e\x31\60\x35" => '', "\x36\65\56\65\x32\x2e\x31\61\63\x2e\x32\63\x36" => '', "\x31\x37\62\x2e\62\x35\65\56\66\61\x2e\63\64" => '', "\x31\67\62\56\62\65\x35\56\66\61\x2e\x33\65" => '', "\61\67\62\56\x32\65\x35\x2e\66\x31\56\63\66" => '', "\x31\67\x32\56\x32\65\x35\x2e\66\61\x2e\x33\x37" => '', "\61\67\x32\56\x32\65\x35\56\x36\61\x2e\63\x38" => '', "\61\67\x32\x2e\x32\65\x35\56\x36\x31\x2e\x33\71" => '', "\x31\x37\62\x2e\62\x35\x35\56\66\x31\56\64\x30" => '', "\x35\x32\x2e\62\x33\x37\56\62\x33\x35\x2e\x31\x38\65" => '', "\x35\62\x2e\x32\63\x37\x2e\x32\x35\60\x2e\x37\x33" => '', "\x35\x32\56\x32\x33\x37\x2e\62\63\x36\56\x31\64\x35" => '', "\61\x30\64\56\x34\x31\x2e\x32\56\61\x39" => '', "\x31\x39\x31\56\62\63\65\56\x39\70\x2e\x31\x36\64" => '', "\61\x39\61\x2e\x32\x33\65\56\71\x39\56\62\62\61" => '', "\61\71\x31\x2e\x32\x33\62\x2e\61\x39\x34\56\x35\x31" => '', "\x31\x30\64\56\62\x31\x31\x2e\61\x34\63\56\x38" => '', "\x31\60\x34\56\62\x31\61\x2e\x31\x36\65\56\x35\x33" => '', "\x35\62\x2e\61\67\62\x2e\x31\64\56\70\67" => '', "\x34\x30\56\x38\x33\56\x38\x39\56\x32\x31\64" => '', "\65\62\x2e\61\x37\x35\x2e\65\67\x2e\70\x31" => '', "\x32\x30\x2e\x31\70\x38\56\66\63\56\61\65\61" => '', "\x32\60\x2e\x35\62\56\63\x36\x2e\x34\x39" => '', "\65\62\x2e\62\x34\x36\x2e\x31\x36\x35\56\x31\65\63" => '', "\65\61\56\x31\x34\x34\56\x31\60\x32\x2e\x32\63\x33" => '', "\61\x33\x2e\x37\66\x2e\71\x37\56\62\62\64" => '', "\61\60\62\56\61\63\x33\x2e\x31\66\x39\56\66\x36" => '', "\65\x32\x2e\62\63\x31\56\61\x39\71\56\x31\x37\x30" => '', "\61\x33\56\65\63\x2e\x31\x36\x32\x2e\67" => '', "\64\60\x2e\61\x32\x33\x2e\x32\x31\x38\56\x39\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto uaicwcqwauosmsqm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uaicwcqwauosmsqm: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\137\125\123\x45\122\x5f\x41\x47\105\x4e\124"); if ($uowwycywwssskuys) { goto gsqcoqqsioiyoykq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gsqcoqqsioiyoykq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\151\x6e\x67\144\157\x6d\x50\141\147\x65\123\160\x65\145\x64\174\104\141\162\x65\102\x6f\x6f\x73\164\174\107\157\x6f\x67\154\145\174\x50\124\x53\x54\174\103\150\162\x6f\x6d\x65\55\x4c\151\147\150\164\x68\157\165\x73\x65\x7c\127\x50\x20\122\x6f\143\x6b\145\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\x51\125\x45\x53\124\137\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto goaowamiyyamueiw; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); goaowamiyyamueiw: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto iaomqomgiwiegoca; } return ''; iaomqomgiwiegoca: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ysweqawmawicakeo; } return $magawcseesgowoeo; ysweqawmawicakeo: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto owisckseoogsugqq; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); owisckseoogsugqq: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\105\x53\124\x5f\115\x45\x54\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto cuseccewekgcgkyg; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\143\150\145\137\x69\147\x6e\157\162\145\x64\137\160\x61\x72\x61\155\145\164\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ookcgumoacskyymy; } ksort($eyagkkkqkwcuygso); ookcgumoacskyymy: cuseccewekgcgkyg: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; makomwwyomweyamm: if (!(strpos($euueacigmgoqkimu, "\56\57") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\56" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto kgysyqkoqgwmoscq; } if (strpos($euueacigmgoqkimu, "\56\56\57") === 0) { goto wmaeicoyyciuaiuy; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto wsemeeocquawyauo; } if (strpos($euueacigmgoqkimu, "\57\x2e\57") === 0) { goto kkewoqqowugagwoy; } if ("\57\x2e" === $euueacigmgoqkimu) { goto qumkwsqqocooyuoq; } if (strpos($euueacigmgoqkimu, "\x2f\56\x2e\57") === 0) { goto owgakkqgckqcegoi; } if ("\x2f\x2e\56" === $euueacigmgoqkimu) { goto ugswokwmkumcmigc; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto asaowisseacciyia; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto oqwcmgwimeisusoe; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto acesyuieuuqwgkwm; oqwcmgwimeisusoe: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); acesyuieuuqwgkwm: goto qiaaqkymeuuueoqk; asaowisseacciyia: $euueacigmgoqkimu = ''; qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); gwiaimosqoiquwkc: goto cigesysuauaiccms; owgakkqgckqcegoi: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); cigesysuauaiccms: goto gcskyqewysqaceeg; qumkwsqqocooyuoq: $euueacigmgoqkimu = "\57"; gcskyqewysqaceeg: goto wwswmaewcaisauei; kkewoqqowugagwoy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); wwswmaewcaisauei: goto ocgkwqqmgasuoies; wsemeeocquawyauo: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); ocgkwqqmgasuoies: goto ooysmgyeqoiesgqm; wmaeicoyyciuaiuy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); ooysmgyeqoiesgqm: goto makomwwyomweyamm; kgysyqkoqgwmoscq: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto kwoyiysciqumswcy; } $icwicymcioeyeyek["\x70\145\x72\x6d\141\x6c\x69\x6e\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); kwoyiysciqumswcy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto aaogeemgkogagkai; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); aaogeemgkogagkai: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto qqmmycmsoqegcqqw; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); qqmmycmsoqegcqqw: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\163\x73\141\x67\145" => $uamcoiueqaamsqma, "\143\x6f\156\x74\x65\170\x74" => $icwicymcioeyeyek]; } }

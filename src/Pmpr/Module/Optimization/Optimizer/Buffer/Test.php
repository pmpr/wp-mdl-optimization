<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6658781c3e0dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\151" => 1, "\x73\163\x6c" => 0, "\167\x70\137\64\60\64" => 1, "\x73\145\x61\x72\x63\150" => 1, "\155\x6f\x62\x69\x6c\x65" => 1, "\151\163\x5f\x68\x74\x6d\154" => 1, "\x71\x75\145\162\171\137\163\x74\x72\x69\x6e\x67" => 1, "\144\x6f\156\157\x74\x63\141\143\x68\145\x70\x61\147\x65" => 1, "\x72\145\152\145\143\x74\145\144\x5f\143\157\157\153\x69\x65" => 1, "\x6d\141\x6e\144\x61\x74\x6f\162\171\137\143\157\157\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\163\x74\x73"])) { goto kqyoakickmseyyeq; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\164\x65\x73\164\163"]); kqyoakickmseyyeq: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\153\151\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto micceocwuwkyusic; } $ywmkwiwkosakssii["\x63\x6f\157\x6b\x69\x65\163"] = $_COOKIE; micceocwuwkyusic: if (!(!isset($ywmkwiwkosakssii["\160\157\x73\x74"]) && !empty($_POST) && is_array($_POST))) { goto iwueukqcywkiyqge; } $ywmkwiwkosakssii["\x70\157\163\x74"] = $_POST; iwueukqcywkiyqge: if (!(!isset($ywmkwiwkosakssii["\147\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto ykwasaaoeeiuomim; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; ykwasaaoeeiuomim: $this->get = !empty($ywmkwiwkosakssii["\147\x65\164"]) && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\x67\x65\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\x70\x6f\163\x74"]) && is_array($ywmkwiwkosakssii["\x70\x6f\163\164"]) ? $ywmkwiwkosakssii["\160\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\x63\157\157\x6b\151\x65\163"]) && is_array($ywmkwiwkosakssii["\x63\157\x6f\153\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\157\x6f\x6b\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto acggikioyeueeowg; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\x70\x5f\143\x75\x73\x74\157\x6d\151\x7a\145" => '']); acggikioyeueeowg: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto cwikoaeqmmoimmso; } $this->yauwooaeicgosquo("\x52\157\x62\x6f\x74\163\56\164\x78\x74\x20\x6f\162\40\56\x68\164\141\x63\x63\145\x73\163\40\146\151\x6c\x65\40\x69\163\40\x65\x78\x63\x6c\165\144\x65\x64\56"); return false; cwikoaeqmmoimmso: if (!$this->gymgcceeqssmesiu()) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\120\x48\x50\x2c\40\x58\x4d\x4c\x2c\40\x6f\162\40\x58\x53\114\x20\x66\151\154\145\40\x69\163\40\x65\x78\x63\x6c\x75\144\x65\x64\56"); return false; egaymskkosukqeao: if (!$this->goecwaaykqoaaagg()) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\x41\x64\155\151\156\40\x6f\162\40\101\x4a\x41\x58\40\125\122\114\40\151\163\40\x65\x78\x63\154\x75\x64\x65\144\x2e"); return false; kaiesowkgwogqseg: if (!$this->sgsscqasgeyeicoe()) { goto kicwiowcogmauwiy; } $this->yauwooaeicgosquo("\101\144\x6d\x69\x6e\40\x6f\162\40\101\x4a\101\x58\40\x55\x52\114\40\151\163\40\145\170\x63\x6c\165\144\145\x64\56"); return false; kicwiowcogmauwiy: if ($this->gooeyogikcusgwuu()) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\122\145\161\x75\x65\x73\x74\x20\155\x65\x74\150\157\144\x20\x69\x73\x20\156\157\x74\x20\x61\x6c\154\x6f\x77\145\x64\x2e\x20\x50\x61\x67\145\x20\x63\x61\x6e\x6e\x6f\x74\40\142\145\x20\143\141\143\x68\x65\x64\56", ["\162\145\161\165\145\x73\164\137\x6d\145\x74\x68\157\x64" => $this->ciyocmkwssocskiy()]); return false; cwswueuqoamqasya: if ($this->cskwmweqysskwckg()) { goto kgmeiwiakwicgkkk; } $this->lastError = []; return true; kgmeiwiakwicgkkk: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\143\145\163\163"]) { goto suuskagowwgsouqw; } $this->yauwooaeicgosquo("\116\x6f\40\x63\157\156\x66\151\x67\40\x66\x69\154\145\40\146\157\165\x6e\x64", ["\x63\157\x6e\146\151\x67\x5f\x70\x61\x74\x68" => $uiewakwqscemywuo["\160\x61\164\150"]]); return false; suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\161\x75\x65\x72\171\137\x73\x74\x72\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\121\165\145\162\x79\40\163\x74\162\x69\x6e\147\x20\x55\x52\114\40\x69\x73\x20\145\170\143\154\x75\x64\x65\x64\56", $_GET); return false; omykokikgocoikec: if (!($this->cskwmweqysskwckg("\163\x73\154") & !$this->eqwgocqwoyyykwke())) { goto csieaismmmocyacu; } $this->yauwooaeicgosquo("\123\123\x4c\40\x63\x61\143\x68\145\40\156\157\x74\x20\141\160\160\154\151\145\x64\x20\164\157\40\x70\141\147\145\x2e"); return false; csieaismmmocyacu: if (!($this->cskwmweqysskwckg("\x75\162\x69") && !$this->qweiomkkuikwugks())) { goto aquqkiggamaoegoo; } $this->yauwooaeicgosquo("\120\x61\147\x65\40\151\163\x20\x65\170\143\x6c\165\x64\145\144\x2e"); return false; aquqkiggamaoegoo: if (!($this->cskwmweqysskwckg("\162\145\x6a\x65\143\164\x65\x64\137\x63\157\157\153\x69\x65") && $this->cokqaygwwygweuyk())) { goto mykiyqcqiegkiqys; } $this->yauwooaeicgosquo("\x45\170\143\154\165\144\x65\x64\40\x63\x6f\x6f\153\151\x65\x20\146\x6f\x75\x6e\x64\56", ["\x65\x78\143\154\x75\144\145\144\137\143\x6f\x6f\x6b\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; mykiyqcqiegkiqys: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\x61\164\x6f\162\171\137\143\x6f\x6f\153\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto agemwookwseyycqo; } $this->yauwooaeicgosquo("\115\151\x73\x73\x69\x6e\147\x20\155\x61\156\x64\141\x74\157\x72\x79\x20\x63\x6f\x6f\153\x69\145\72\x20\x70\x61\x67\x65\40\x6e\157\164\x20\160\162\x6f\x63\145\163\163\145\x64\x2e", ["\x6d\x69\x73\163\x69\156\x67\x5f\143\157\x6f\153\151\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; agemwookwseyycqo: if (!($this->cskwmweqysskwckg("\x75\x73\x65\162\x5f\x61\x67\145\156\164") && !$this->mqiqsuksgyekwkii())) { goto cquecqekuucwoumw; } $this->yauwooaeicgosquo("\125\x73\145\162\x20\x41\147\x65\x6e\164\x20\151\x73\x20\x65\x78\143\154\165\x64\x65\x64\56", ["\165\163\x65\x72\137\141\147\145\156\x74" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\x5f\125\x53\x45\122\137\101\107\x45\x4e\x54")]); return false; cquecqekuucwoumw: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto koiscokkkaimiecq; } $this->yauwooaeicgosquo("\102\165\x66\146\x65\x72\40\x63\157\x6e\x74\145\156\x74\x20\165\x6e\144\145\162\x20\62\65\65\x20\143\x68\141\x72\141\x63\x74\145\x72\x73\56"); return false; koiscokkkaimiecq: if (!(http_response_code() !== 200)) { goto owuuuiekkaeoeacq; } $this->yauwooaeicgosquo("\x50\x61\147\145\x20\x69\x73\x20\156\157\164\x20\141\40\x32\60\60\40\x48\124\x54\x50\40\162\145\x73\x70\x6f\x6e\x73\x65\40\141\x6e\144\40\143\x61\156\x6e\x6f\164\x20\142\x65\40\x63\141\x63\150\x65\x64\56"); return false; owuuuiekkaeoeacq: if (!($this->cskwmweqysskwckg("\x64\157\x6e\x6f\164\157\x70\164\151\155\151\172\x65\160\x61\147\x65") && $this->cowcgqokiosgaqic())) { goto saauykgakaeiyoua; } $this->yauwooaeicgosquo("\104\x4f\x4e\x54\x4f\x50\x54\x49\115\x49\x5a\x45\104\x50\101\x47\105\x20\151\x73\x20\144\x65\146\x69\x6e\145\144\56\40\120\141\147\145\x20\143\x61\156\x6e\x6f\x74\40\142\145\40\143\141\143\x68\x65\144\x2e"); return false; saauykgakaeiyoua: if (!($this->cskwmweqysskwckg("\167\160\137\64\x30\64") && $this->kmmyuiwaogukwqqi())) { goto qwemkcoaseywkuuc; } $this->yauwooaeicgosquo("\x57\120\40\x34\60\x34\x20\x70\141\147\145\x20\151\163\40\x65\170\143\x6c\165\x64\145\x64\x2e"); return false; qwemkcoaseywkuuc: if (!($this->cskwmweqysskwckg("\x73\145\x61\162\143\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto mqimkwickkgqqeoi; } $this->yauwooaeicgosquo("\x53\145\x61\162\x63\150\40\x70\141\x67\x65\40\x69\163\40\x65\x78\x63\154\165\144\x65\144\x2e"); return false; mqimkwickkgqqeoi: if (!$this->cskwmweqysskwckg("\151\x73\137\x68\x74\x6d\154")) { goto gkqiqaqecmoogmaa; } if (!($this->cmaecekuqkwmemms("\122\x45\x53\124\137\x52\x45\x51\125\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto kwyimqumkuuyaiku; } unset($this->tests["\x69\x73\137\x68\164\155\x6c"]); kwyimqumkuuyaiku: gkqiqaqecmoogmaa: if (!($this->cskwmweqysskwckg("\x69\x73\137\150\x74\x6d\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto mceucsaeouuwyumm; } $this->yauwooaeicgosquo("\116\157\x20\143\154\157\x73\x69\156\x67\x20\74\x2f\x68\164\x6d\154\76\x20\167\141\163\x20\146\x6f\x75\x6e\144\56"); return false; mceucsaeouuwyumm: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\160\162\137\157\160\164\151\155\x69\172\x61\x74\151\157\x6e\137\x61\154\154\157\x77\137\x74\x6f\137\163\164\141\162\164\x5f\x62\165\x66\x66\145\162\137\x70\162\157\143\145\x73\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ceiuqsiqgiuiekem; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto gsymkkskwsgggoic; ceiuqsiqgiuiekem: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); gsymkkskwsgggoic: return apply_filters("\160\x72\137\157\160\x74\x69\155\151\x7a\x61\x74\151\x6f\x6e\x5f\150\141\163\137{$ymqmyyeuycgmigyo}\137\164\x65\163\x74", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\57\74\134\163\x2a\134\x2f\134\163\52\x68\x74\155\x6c\134\163\52\x3e\x2f\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\50\77\x3a\x2e\53\x2f\x29\x3f" . $wp_rewrite->feed_base . "\x28\77\72\x2f\50\77\x3a\56\53\57\x3f\51\x3f\x29\77\x24"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\x29\x24\43\151", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugykmcouiwiscoqu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugykmcouiwiscoqu: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto isewysikysqewkis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); isewysikysqewkis: $ucasskoyoewwmmii = ["\x72\x6f\142\157\x74\163\x2e\x74\170\164", "\56\x68\x74\141\x63\143\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eouwacqiommmeaqc: igmmqwyawcuuckkq: } wiwoiyoakywqyaiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sqwuqegeiisoiiuq; } return $this->eecucukcqkqysiau(__FUNCTION__); sqwuqegeiisoiiuq: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto ykqsuiyyosyeyscc; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto uscokkmquayiukag; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); uscokkmquayiukag: ykqsuiyyosyeyscc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugogoekeckgcmuaw; } return $this->eecucukcqkqysiau(__FUNCTION__); ugogoekeckgcmuaw: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto egesuwkqkmaigaoe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egesuwkqkmaigaoe: if (!(strtolower($iyiwooigkweeewey) === "\x2f\151\x6e\144\145\x78\56\x70\150\160")) { goto syusgosewwkoagoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); syusgosewwkoagoq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\160" => 1, "\170\x6d\154" => 1, "\170\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\111\x4e\x47\x5f\x41\112\101\x58"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\x53")), ["\x6f\x6e", "\61"]) || "\64\x34\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\126\x45\x52\137\x50\117\x52\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\137\x63\x75\163\164\x6f\155\x69\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\x45\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mcqucouuiuoagqwc; } return $this->eecucukcqkqysiau(__FUNCTION__); mcqucouuiuoagqwc: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto eweaaismksecwagy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eweaaismksecwagy: $yccgiaiouekkouay = ["\163" => 1, "\154\141\156\147" => 1, "\x70\x65\x72\x6d\141\x6c\x69\156\x6b\137\156\141\155\x65" => 1, "\154\x70\x2d\166\x61\x72\151\x61\x74\151\x6f\156\x2d\151\144" => 1, "\x58\104\x45\x42\125\x47\137\x53\x45\x53\x53\111\117\116\137\x53\124\101\x52\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto icumkkykaoqycqqu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); icumkkykaoqycqqu: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\x5f\x71\x75\x65\162\171\137\x73\164\162\x69\156\147\163"); if ($yccgiaiouekkouay) { goto oeamoqweiueaueay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeamoqweiueaueay: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto owgsameoayaogsma; } return $this->eecucukcqkqysiau(__FUNCTION__); owgsameoayaogsma: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto kyiwsiakwgiwouyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kyiwsiakwgiwouyi: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto awgmegueeqeyqamu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); awgmegueeqeyqamu: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto esagiiawomyacuiw; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; esagiiawomyacuiw: aoaqwygkaagiuuws: } gqimwsyemoewagcy: if (empty($eiocugauqgouiuyi)) { goto maaisuqwkymeguys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); maaisuqwkymeguys: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qkyciyiwkmgkmquk; } return $this->eecucukcqkqysiau(__FUNCTION__); qkyciyiwkmgkmquk: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto sksgcusuyqcwqswe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sksgcusuyqcwqswe: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\150\145\137\155\x61\156\x64\141\x74\x6f\x72\171\x5f\x63\x6f\157\x6b\x69\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto ayceeyuocgowqwsa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); ayceeyuocgowqwsa: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto aeiemwacaiygemmg; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); aeiemwacaiygemmg: yggseoaommssscwo: } iuwkiyimqmgguose: if (!empty($yiycakoikkyuokgk)) { goto yyqygaokeccgugos; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yyqygaokeccgugos: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\x5f\x6f\160\x74\x69\x6d\x69\x7a\x61\164\151\x6f\x6e\137\x6f\x76\x65\x72\x72\x69\x64\145\137\x64\x6f\x6e\164\137\x6f\x70\x74\x69\x6d\x69\x7a\x65", $this->cmaecekuqkwmemms("\x50\x52\137\117\120\x54\x49\115\x49\132\x41\124\x49\x4f\x4e\x5f\x44\x4f\116\x54\x5f\x4f\x50\124\111\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\x5f\64\60\64") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\x65\141\162\143\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\162\137\x6f\x70\x74\151\155\x69\x7a\141\164\x69\157\x6e\x5f\x6f\x70\164\x69\155\151\x7a\x65\x5f\163\145\141\162\x63\x68", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\143\x68\x65\137\163\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oeusomaaeekakake; } return $this->eecucukcqkqysiau(__FUNCTION__); oeusomaaeekakake: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto kwuckkyqaygwgcuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwuckkyqaygwgcuy: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\154\145\137\143\141\x63\150\145")) { goto giuccakymqymawgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); giuccakymqymawgk: $wayquiskgeuoqamk = "\x32\x2e\60\134\x20\115\115\x50\x7c\62\x34\60\x78\63\62\x30\x7c\64\60\x30\130\62\x34\x30\174\x41\x76\141\156\x74\107\157\174\x42\x6c\141\x63\x6b\102\145\x72\x72\x79\x7c\102\154\141\172\x65\x72\x7c\103\x65\x6c\x6c\160\150\x6f\156\x65\174\104\141\x6e\x67\x65\x72\174\x44\x6f\x43\x6f\115\157\x7c\x45\x6c\x61\x69\156\x65\57\63\56\60\174\x45\x75\x64\x6f\162\141\x57\145\x62\174\107\x6f\x6f\147\154\x65\x62\157\x74\55\115\157\142\151\154\x65\174\x68\151\160\164\157\160\174\x49\105\115\157\142\x69\154\x65\x7c\113\x59\117\x43\105\x52\x41\x2f\x57\x58\x33\x31\x30\x4b\x7c\114\x47\57\125\x39\71\x30\174\115\111\x44\120\x2d\x32\56\174\115\x4d\105\x46\62\x30\174\115\117\x54\55\126\174\x4e\x65\164\x46\162\x6f\x6e\164\174\116\145\x77\164\174\116\151\x6e\164\145\156\x64\x6f\134\40\127\x69\151\x7c\116\x69\164\162\157\174\x4e\x6f\x6b\151\x61\x7c\117\160\x65\162\x61\x5c\40\x4d\x69\x6e\151\x7c\120\141\154\155\174\x50\154\141\x79\x53\x74\141\x74\151\x6f\x6e\134\x20\120\157\162\164\x61\142\154\145\174\x70\x6f\162\164\x61\154\155\x6d\155\x7c\120\x72\x6f\x78\151\156\145\x74\174\x50\162\x6f\x78\151\x4e\145\x74\x7c\x53\110\x41\x52\120\x2d\x54\121\x2d\107\130\61\60\174\123\110\x47\x2d\x69\71\60\60\x7c\123\x6d\x61\x6c\154\174\x53\x6f\x6e\171\x45\x72\x69\x63\x73\x73\157\x6e\174\x53\171\x6d\x62\x69\141\156\x5c\x20\117\x53\x7c\123\171\x6d\x62\151\141\x6e\117\123\x7c\x54\x53\62\x31\151\55\x31\x30\x7c\125\120\56\x42\x72\157\167\163\x65\162\x7c\125\x50\x2e\x4c\x69\x6e\153\174\167\x65\142\x4f\123\x7c\127\x69\x6e\x64\x6f\x77\163\x5c\x20\x43\x45\174\x57\151\x6e\127\101\120\x7c\131\141\x68\157\157\x53\x65\x65\153\x65\x72\57\115\61\101\61\x2d\122\62\x44\x32\x7c\x69\x50\x68\157\x6e\145\174\151\x50\157\x64\174\101\156\144\162\157\151\144\x7c\x42\154\x61\143\x6b\102\x65\162\x72\171\71\65\x33\60\x7c\114\x47\55\x54\125\x39\61\x35\x5c\x20\117\142\151\x67\x6f\x7c\114\x47\105\134\x20\x56\130\174\x77\145\142\x4f\123\174\116\157\x6b\x69\x61\65\x38\60\60"; if (!preg_match("\x23\x5e\56\x2a\x28{$wayquiskgeuoqamk}\51\x2e\x2a\43\151", $uowwycywwssskuys)) { goto sicgyiyiocyygkoc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sicgyiyiocyygkoc: $wayquiskgeuoqamk = "\167\63\x63\x5c\x20\174\x77\63\143\x2d\174\141\143\x73\x2d\x7c\141\154\x61\166\x7c\141\x6c\143\x61\x7c\141\155\x6f\x69\174\x61\x75\x64\x69\x7c\x61\x76\141\x6e\174\142\145\156\x71\174\x62\151\162\x64\174\142\154\x61\x63\174\x62\x6c\141\x7a\174\x62\162\145\x77\174\x63\145\154\x6c\174\143\x6c\x64\x63\174\x63\155\x64\x2d\x7c\x64\x61\156\x67\x7c\x64\157\143\157\174\x65\x72\x69\143\174\x68\151\160\x74\174\150\x74\x63\x5f\x7c\x69\156\x6e\157\x7c\151\160\x61\x71\174\x69\x70\157\x64\174\x6a\x69\147\163\174\153\144\144\151\x7c\x6b\x65\152\151\x7c\154\x65\156\157\x7c\154\147\x2d\x63\174\x6c\147\x2d\144\x7c\x6c\x67\x2d\147\174\154\x67\x65\55\x7c\x6c\x67\57\x75\174\x6d\x61\x75\x69\x7c\155\141\x78\157\174\x6d\151\144\x70\174\155\151\x74\x73\x7c\155\155\x65\x66\x7c\x6d\157\142\x69\174\155\157\x74\x2d\174\x6d\x6f\164\x6f\x7c\x6d\x77\142\x70\x7c\156\145\143\x2d\x7c\x6e\x65\x77\164\174\156\x6f\153\151\174\x70\141\154\155\x7c\x70\141\156\141\x7c\x70\141\x6e\164\174\x70\150\x69\x6c\x7c\x70\x6c\x61\x79\174\160\157\x72\164\174\x70\162\x6f\170\x7c\x71\x77\x61\160\174\163\141\x67\x65\174\163\141\x6d\x73\174\163\141\x6e\171\174\x73\x63\x68\x2d\x7c\x73\145\143\55\174\163\x65\156\x64\174\163\x65\162\151\174\x73\x67\150\x2d\174\163\x68\x61\x72\174\163\151\x65\x2d\174\163\151\x65\155\x7c\163\155\141\x6c\174\x73\155\x61\162\174\163\x6f\x6e\x79\x7c\x73\160\x68\x2d\174\163\171\155\x62\x7c\x74\55\x6d\157\174\x74\145\x6c\151\x7c\x74\151\155\55\x7c\164\x6f\163\150\174\164\163\x6d\x2d\x7c\x75\x70\x67\61\x7c\165\x70\x73\x69\174\x76\x6b\x2d\166\x7c\x76\x6f\x64\x61\x7c\167\x61\160\55\x7c\x77\141\160\141\x7c\x77\x61\x70\x69\x7c\x77\141\160\160\x7c\x77\141\160\162\174\167\145\142\143\x7c\167\151\156\167\174\167\151\156\x77\x7c\170\x64\141\134\40\174\170\x64\141\x2d"; if (!preg_match("\43\x5e\50{$wayquiskgeuoqamk}\x29\56\x2a\43\x69", $uowwycywwssskuys)) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cyosacayacumuaks: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikcwmsgocyuqiumc; } return $this->eecucukcqkqysiau(__FUNCTION__); ikcwmsgocyuqiumc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto eqiiaokcgakicaye; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eqiiaokcgakicaye: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\x5f\x72\145\152\145\x63\164\x5f\x75\141"); if ($mqsuiayuwmwqaqwm) { goto gcucsowqoeiwmyyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gcucsowqoeiwmyyq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kyiuewcikkqagwwg; } return $this->eecucukcqkqysiau(__FUNCTION__); kyiuewcikkqagwwg: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\145\137\162\145\152\x65\x63\x74\137\165\x72\151"); if ($escsaeeosigewsme) { goto aumowowgewgqmwci; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aumowowgewgqmwci: $yciaosuiyeieceug = !preg_match("\x23\136\50{$escsaeeosigewsme}\x29\44\x23\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\x54\x50\137\x55\123\x45\x52\x5f\101\x47\105\x4e\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oasggeyceiyieuuo; } return $this->eecucukcqkqysiau(__FUNCTION__); oasggeyceiyieuuo: $yygmoeguaqyumuui = [ "\110\x54\124\x50\x5f\x43\106\137\103\117\116\116\105\x43\x54\x49\116\107\x5f\111\120", "\110\x54\x54\120\137\x43\x4c\x49\105\x4e\x54\x5f\111\120", "\x48\124\x54\x50\x5f\130\137\x46\x4f\x52\x57\101\122\104\x45\104\137\106\x4f\122", "\x48\124\x54\x50\137\130\137\x46\117\122\127\101\122\104\x45\104", "\x48\124\124\x50\x5f\x58\137\x43\114\x55\x53\x54\x45\x52\137\x43\114\x49\105\x4e\124\137\x49\120", "\x48\x54\x54\x50\137\x58\x5f\122\x45\x41\x4c\137\x49\x50", "\x48\124\124\120\137\x46\x4f\122\x57\101\122\104\x45\x44\x5f\x46\x4f\x52", "\110\x54\x54\x50\137\106\117\x52\127\x41\122\x44\105\x44", "\x52\105\x4d\x4f\x54\x45\x5f\x41\104\x44\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto qcssigmcayuyweiy; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto quamuugoocyyceec; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); quamuugoocyyceec: qcssigmcayuyweiy: wwcqoeuwskquakwy: } omuauimgkygcecsc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\x30\x2e\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iymaiwqimisgacmk; } return $this->eecucukcqkqysiau(__FUNCTION__); iymaiwqimisgacmk: $yywgiquyoymymqwk = [ "\62\60\70\56\67\60\56\x32\x34\x37\x2e\x31\x35\x37" => '', "\61\x37\x32\56\x32\65\x35\56\x34\70\x2e\61\63\60" => '', "\61\x37\x32\x2e\62\x35\x35\56\x34\x38\x2e\x31\x33\61" => '', "\x31\x37\62\x2e\x32\x35\x35\x2e\64\x38\x2e\x31\x33\x32" => '', "\61\x37\x32\56\62\65\x35\56\64\70\x2e\x31\x33\63" => '', "\61\67\x32\x2e\62\65\65\56\x34\70\x2e\x31\x33\x34" => '', "\x31\x37\62\56\62\65\x35\56\x34\70\x2e\x31\x33\65" => '', "\61\67\62\x2e\62\65\65\x2e\x34\x38\x2e\61\63\66" => '', "\61\x37\62\56\x32\65\65\x2e\x34\70\56\x31\x33\67" => '', "\x31\67\x32\56\x32\65\x35\x2e\64\x38\56\61\63\x38" => '', "\x31\x37\62\x2e\62\65\65\x2e\64\70\56\61\63\71" => '', "\x31\x37\x32\56\x32\65\65\56\64\70\x2e\x31\64\x30" => '', "\x31\x37\62\x2e\x32\65\65\x2e\x34\70\56\61\64\61" => '', "\x31\x37\x32\56\62\65\65\x2e\64\x38\x2e\61\x34\62" => '', "\x31\67\62\56\62\x35\x35\56\x34\x38\x2e\61\64\63" => '', "\61\67\x32\x2e\62\x35\x35\56\64\x38\56\x31\x34\64" => '', "\x31\x37\x32\56\62\x35\65\x2e\64\70\56\x31\64\x35" => '', "\61\x37\62\x2e\62\65\x35\56\x34\x38\x2e\x31\64\x36" => '', "\61\67\x32\56\x32\65\65\56\64\x38\x2e\x31\64\67" => '', "\65\62\56\x32\62\x39\56\61\x32\x32\x2e\x32\x34\x30" => '', "\x31\60\64\56\62\x31\64\x2e\67\x32\x2e\61\x30\61" => '', "\x31\x33\56\66\x36\56\67\x2e\x31\x31" => '', "\x31\63\56\x38\65\56\x32\64\56\x38\x33" => '', "\61\63\x2e\70\65\x2e\x32\64\56\71\60" => '', "\x31\x33\x2e\x38\x35\56\x38\62\x2e\x32\66" => '', "\64\60\x2e\67\x34\56\x32\x34\x32\56\x32\x35\63" => '', "\x34\60\x2e\x37\64\x2e\x32\64\x33\56\61\63" => '', "\64\x30\x2e\x37\x34\56\62\64\63\x2e\61\67\x36" => '', "\61\x30\x34\x2e\62\61\64\56\64\70\56\62\64\67" => '', "\x31\65\x37\x2e\65\x35\56\x31\x38\71\x2e\61\x38\x39" => '', "\x31\60\x34\x2e\62\61\x34\56\61\61\x30\56\61\63\x35" => '', "\67\60\x2e\63\x37\56\70\x33\56\62\64\60" => '', "\66\x35\56\x35\62\56\x33\66\x2e\62\x35\x30" => '', "\61\63\x2e\x37\x38\x2e\62\61\x36\x2e\x35\66" => '', "\65\62\56\x31\66\x32\x2e\x32\x31\62\x2e\61\x36\63" => '', "\x32\63\56\x39\66\x2e\63\64\x2e\x31\60\x35" => '', "\x36\x35\x2e\65\62\56\x31\x31\x33\x2e\x32\x33\x36" => '', "\61\67\62\x2e\x32\65\x35\x2e\66\61\56\63\x34" => '', "\61\x37\x32\56\62\x35\65\56\x36\61\x2e\x33\x35" => '', "\61\67\62\x2e\x32\x35\65\x2e\x36\61\x2e\x33\x36" => '', "\61\x37\x32\x2e\62\65\x35\56\x36\x31\56\63\x37" => '', "\x31\67\x32\56\x32\x35\65\56\x36\61\x2e\63\x38" => '', "\x31\67\62\56\x32\65\65\x2e\66\x31\56\x33\x39" => '', "\x31\67\62\56\x32\65\x35\56\66\x31\56\64\x30" => '', "\x35\62\x2e\x32\63\x37\x2e\x32\x33\x35\56\61\70\x35" => '', "\65\62\x2e\x32\x33\x37\56\x32\65\x30\56\67\63" => '', "\65\x32\x2e\x32\63\67\x2e\x32\x33\x36\x2e\x31\x34\x35" => '', "\61\x30\64\x2e\64\x31\x2e\x32\x2e\61\71" => '', "\x31\71\61\x2e\x32\x33\x35\x2e\x39\70\x2e\61\66\64" => '', "\61\71\x31\56\62\63\x35\56\71\71\56\x32\62\61" => '', "\x31\x39\61\56\x32\x33\x32\x2e\x31\71\x34\x2e\x35\61" => '', "\x31\x30\x34\x2e\62\x31\x31\x2e\x31\64\63\x2e\70" => '', "\61\x30\64\56\62\x31\61\56\61\x36\x35\56\65\x33" => '', "\65\62\x2e\61\67\62\56\x31\x34\x2e\x38\67" => '', "\x34\x30\x2e\x38\x33\56\70\x39\56\62\61\x34" => '', "\65\x32\56\x31\x37\65\56\65\67\56\70\x31" => '', "\62\x30\x2e\61\70\x38\x2e\66\63\x2e\61\65\61" => '', "\x32\x30\x2e\x35\62\x2e\63\x36\56\64\71" => '', "\65\x32\56\62\64\66\x2e\x31\x36\x35\56\x31\65\63" => '', "\65\x31\56\61\64\x34\x2e\x31\60\x32\x2e\x32\x33\x33" => '', "\61\63\x2e\67\66\56\x39\x37\56\x32\x32\64" => '', "\61\x30\x32\x2e\61\63\x33\x2e\x31\66\x39\x2e\x36\x36" => '', "\65\x32\x2e\62\63\x31\56\x31\71\71\x2e\61\x37\x30" => '', "\x31\63\x2e\65\63\x2e\x31\x36\62\56\x37" => '', "\x34\60\56\61\62\63\x2e\x32\x31\70\x2e\x39\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto mugscgugcogcasue; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mugscgugcogcasue: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\125\123\x45\122\x5f\x41\107\x45\116\124"); if ($uowwycywwssskuys) { goto qyyyycwaookqaoke; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qyyyycwaookqaoke: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\120\x69\x6e\x67\x64\x6f\x6d\120\141\147\x65\123\x70\145\145\x64\174\104\141\162\145\102\157\x6f\x73\164\x7c\x47\x6f\157\x67\x6c\145\174\120\x54\123\124\174\103\x68\x72\x6f\x6d\145\x2d\114\x69\x67\150\x74\x68\157\165\163\x65\174\127\x50\40\122\157\143\x6b\145\164\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\123\x54\x5f\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto ssywsaaqqaucesau; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); ssywsaaqqaucesau: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto ygcgoaokauigwuus; } return ''; ygcgoaokauigwuus: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ysiqakyaiooyscwy; } return $magawcseesgowoeo; ysiqakyaiooyscwy: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto auumaoycmsmsgigs; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); auumaoycmsmsgigs: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\x51\125\105\x53\124\137\115\105\x54\x48\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto qeuyekusasqmcqms; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\151\x67\156\157\x72\x65\144\x5f\160\x61\x72\x61\155\145\164\145\162\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ousmyagwsiooumos; } ksort($eyagkkkqkwcuygso); ousmyagwsiooumos: qeuyekusasqmcqms: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; sgocecweikecwwgq: if (!(strpos($euueacigmgoqkimu, "\x2e\57") !== false || strpos($euueacigmgoqkimu, "\x2f\x2e") !== false || "\56" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto yiceawuuiusakwiq; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\x2f") === 0) { goto mimacwyuueomgwwy; } if (strpos($euueacigmgoqkimu, "\56\x2f") === 0) { goto ekoqieigyoeyauqa; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2f") === 0) { goto ssagcgqaucssyego; } if ("\57\x2e" === $euueacigmgoqkimu) { goto acgqaeakoyasgkku; } if (strpos($euueacigmgoqkimu, "\57\56\56\x2f") === 0) { goto suqckoccuyeeymww; } if ("\57\56\x2e" === $euueacigmgoqkimu) { goto yksywwikmeksikqc; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto iwkckkeimmeoquyq; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto qwisiamkmkkwucyo; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto yqcusaeysomccaok; qwisiamkmkkwucyo: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); yqcusaeysomccaok: goto masakmomqmeocqqg; iwkckkeimmeoquyq: $euueacigmgoqkimu = ''; masakmomqmeocqqg: goto yoqsigmoyaaceqky; yksywwikmeksikqc: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); giugwaeuwaomossq: goto sycougcyeqmeiagk; acgqaeakoyasgkku: $euueacigmgoqkimu = "\x2f"; sycougcyeqmeiagk: goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); cuwcsamuuqyuyqsu: goto ksckqkmwiqggykke; mimacwyuueomgwwy: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); ksckqkmwiqggykke: goto sgocecweikecwwgq; yiceawuuiusakwiq: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto igwkcikeyoowosoi; } $icwicymcioeyeyek["\160\145\162\x6d\x61\154\151\156\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); igwkcikeyoowosoi: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto iqsgossweywksoia; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); iqsgossweywksoia: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto awaqksikyomsuaeo; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); awaqksikyomsuaeo: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\x75\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\x73\x73\x61\x67\x65" => $uamcoiueqaamsqma, "\x63\x6f\156\164\x65\170\x74" => $icwicymcioeyeyek]; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665adb172afec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\162\x69" => 1, "\x73\163\x6c" => 0, "\x77\x70\137\64\60\64" => 1, "\x73\x65\x61\x72\143\150" => 1, "\155\x6f\142\x69\x6c\145" => 1, "\x69\x73\x5f\150\164\155\x6c" => 1, "\161\x75\x65\x72\x79\137\x73\x74\x72\151\156\147" => 1, "\144\157\x6e\x6f\x74\x63\141\143\150\145\160\141\x67\145" => 1, "\162\x65\152\x65\x63\164\145\x64\137\143\157\x6f\x6b\151\x65" => 1, "\155\141\x6e\144\x61\x74\x6f\162\x79\137\143\x6f\x6f\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\x65\x73\x74\x73"])) { goto iauwuugggmegwisk; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\163\164\163"]); iauwuugggmegwisk: if (!(!isset($ywmkwiwkosakssii["\x63\157\157\x6b\x69\145\x73"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto aukucaieceiwesmm; } $ywmkwiwkosakssii["\143\157\x6f\x6b\151\x65\x73"] = $_COOKIE; aukucaieceiwesmm: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto kqyoakickmseyyeq; } $ywmkwiwkosakssii["\x70\157\x73\164"] = $_POST; kqyoakickmseyyeq: if (!(!isset($ywmkwiwkosakssii["\147\145\x74"]) && !empty($_GET) && is_array($_GET))) { goto micceocwuwkyusic; } $ywmkwiwkosakssii["\147\x65\164"] = $_GET; micceocwuwkyusic: $this->get = !empty($ywmkwiwkosakssii["\x67\145\x74"]) && is_array($ywmkwiwkosakssii["\147\x65\x74"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\x73\164"]) && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\157\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\157\153\x69\x65\163"]) && is_array($ywmkwiwkosakssii["\143\157\x6f\153\151\145\x73"]) ? $ywmkwiwkosakssii["\143\157\157\x6b\x69\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto iwueukqcywkiyqge; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\143\165\163\x74\x6f\155\x69\172\145" => '']); iwueukqcywkiyqge: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto ykwasaaoeeiuomim; } $this->yauwooaeicgosquo("\x52\x6f\x62\x6f\x74\x73\56\164\x78\164\40\157\162\40\56\x68\164\141\143\143\145\x73\x73\x20\x66\151\154\x65\x20\x69\x73\x20\x65\x78\x63\154\x75\x64\145\144\x2e"); return false; ykwasaaoeeiuomim: if (!$this->gymgcceeqssmesiu()) { goto acggikioyeueeowg; } $this->yauwooaeicgosquo("\x50\110\x50\x2c\40\x58\x4d\x4c\x2c\x20\157\162\x20\x58\x53\114\x20\x66\x69\154\x65\40\x69\163\40\x65\x78\143\x6c\x75\144\x65\x64\56"); return false; acggikioyeueeowg: if (!$this->goecwaaykqoaaagg()) { goto cwikoaeqmmoimmso; } $this->yauwooaeicgosquo("\101\x64\x6d\151\x6e\40\x6f\x72\x20\x41\112\101\x58\x20\x55\x52\x4c\40\151\x73\40\145\x78\x63\154\165\x64\145\144\56"); return false; cwikoaeqmmoimmso: if (!$this->sgsscqasgeyeicoe()) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\101\144\155\151\x6e\x20\157\162\40\101\x4a\x41\130\x20\125\x52\114\x20\151\163\x20\145\x78\143\x6c\x75\144\145\x64\x2e"); return false; egaymskkosukqeao: if ($this->gooeyogikcusgwuu()) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\x52\145\x71\165\x65\163\164\40\x6d\x65\x74\150\x6f\x64\x20\151\163\40\156\x6f\x74\x20\141\154\x6c\x6f\x77\145\144\56\40\x50\141\x67\145\x20\x63\141\156\156\x6f\x74\x20\142\x65\40\x63\141\x63\150\145\144\x2e", ["\x72\x65\x71\165\x65\x73\x74\137\x6d\x65\x74\x68\x6f\x64" => $this->ciyocmkwssocskiy()]); return false; kaiesowkgwogqseg: if ($this->cskwmweqysskwckg()) { goto kicwiowcogmauwiy; } $this->lastError = []; return true; kicwiowcogmauwiy: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\x73\165\x63\143\x65\163\x73"]) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\x4e\157\40\143\x6f\x6e\x66\151\147\40\146\151\x6c\145\x20\x66\157\x75\x6e\144", ["\143\x6f\x6e\x66\151\x67\137\x70\x61\164\150" => $uiewakwqscemywuo["\160\141\x74\150"]]); return false; cwswueuqoamqasya: if (!($this->cskwmweqysskwckg("\x71\165\x65\162\x79\137\163\164\162\x69\x6e\x67") && !$this->koguieumooaesyww())) { goto kgmeiwiakwicgkkk; } $this->yauwooaeicgosquo("\121\x75\x65\162\x79\x20\x73\x74\x72\151\x6e\147\40\125\x52\x4c\x20\x69\163\40\x65\170\x63\x6c\x75\144\x65\x64\56", $_GET); return false; kgmeiwiakwicgkkk: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto suuskagowwgsouqw; } $this->yauwooaeicgosquo("\x53\x53\114\x20\x63\x61\x63\x68\145\x20\156\157\164\x20\141\x70\160\154\151\x65\x64\40\164\x6f\x20\160\x61\147\x65\56"); return false; suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\165\x72\x69") && !$this->qweiomkkuikwugks())) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\x50\x61\x67\x65\40\151\163\40\x65\x78\143\x6c\165\144\145\144\56"); return false; omykokikgocoikec: if (!($this->cskwmweqysskwckg("\162\x65\152\145\143\x74\145\144\137\x63\x6f\x6f\153\151\x65") && $this->cokqaygwwygweuyk())) { goto csieaismmmocyacu; } $this->yauwooaeicgosquo("\105\x78\143\154\165\x64\145\144\40\x63\157\x6f\x6b\151\145\x20\x66\x6f\x75\156\144\56", ["\145\170\x63\x6c\165\x64\x65\x64\137\143\x6f\157\153\x69\x65\x73" => $this->cokqaygwwygweuyk()]); return false; csieaismmmocyacu: if (!($this->cskwmweqysskwckg("\155\x61\x6e\144\141\x74\x6f\x72\x79\137\x63\157\x6f\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto aquqkiggamaoegoo; } $this->yauwooaeicgosquo("\115\x69\163\163\x69\156\x67\x20\155\141\x6e\144\x61\x74\x6f\162\171\40\x63\x6f\157\153\x69\145\x3a\40\x70\141\147\145\40\156\157\164\x20\160\162\x6f\x63\145\x73\163\145\144\x2e", ["\x6d\x69\163\x73\151\x6e\x67\x5f\x63\x6f\x6f\153\151\145\x73" => $this->qgymyeqwqaiwmmea()]); return false; aquqkiggamaoegoo: if (!($this->cskwmweqysskwckg("\165\163\x65\162\x5f\141\147\145\x6e\164") && !$this->mqiqsuksgyekwkii())) { goto mykiyqcqiegkiqys; } $this->yauwooaeicgosquo("\x55\163\x65\162\40\x41\x67\x65\x6e\x74\x20\x69\163\40\x65\170\143\154\165\x64\145\144\x2e", ["\x75\x73\x65\162\x5f\141\147\x65\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\137\x55\x53\105\122\x5f\x41\x47\105\116\x54")]); return false; mykiyqcqiegkiqys: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto agemwookwseyycqo; } $this->yauwooaeicgosquo("\102\x75\146\x66\145\162\40\143\x6f\156\164\145\x6e\x74\40\x75\x6e\x64\x65\x72\40\62\65\x35\40\143\150\x61\x72\141\143\164\x65\x72\163\56"); return false; agemwookwseyycqo: if (!(http_response_code() !== 200)) { goto cquecqekuucwoumw; } $this->yauwooaeicgosquo("\120\x61\x67\x65\x20\151\x73\40\x6e\x6f\164\x20\x61\x20\x32\60\x30\x20\110\124\124\120\40\162\x65\163\160\x6f\156\163\x65\40\x61\156\x64\40\143\x61\156\156\x6f\164\40\142\x65\40\x63\141\x63\x68\145\x64\x2e"); return false; cquecqekuucwoumw: if (!($this->cskwmweqysskwckg("\x64\x6f\x6e\x6f\164\157\160\x74\x69\155\x69\172\x65\x70\x61\x67\x65") && $this->cowcgqokiosgaqic())) { goto koiscokkkaimiecq; } $this->yauwooaeicgosquo("\104\117\x4e\124\117\120\x54\111\x4d\x49\132\x45\x44\120\x41\107\x45\x20\151\x73\x20\x64\x65\146\151\x6e\145\144\56\40\x50\x61\147\145\40\x63\x61\156\x6e\x6f\164\40\x62\145\x20\x63\x61\143\150\145\x64\x2e"); return false; koiscokkkaimiecq: if (!($this->cskwmweqysskwckg("\x77\160\137\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto owuuuiekkaeoeacq; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\64\40\x70\141\x67\x65\x20\x69\163\40\145\x78\x63\x6c\165\x64\145\144\56"); return false; owuuuiekkaeoeacq: if (!($this->cskwmweqysskwckg("\163\x65\x61\x72\143\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto saauykgakaeiyoua; } $this->yauwooaeicgosquo("\123\x65\141\162\143\x68\x20\x70\x61\147\x65\40\151\x73\40\145\x78\x63\154\165\x64\145\144\x2e"); return false; saauykgakaeiyoua: if (!$this->cskwmweqysskwckg("\151\x73\x5f\150\x74\155\154")) { goto mqimkwickkgqqeoi; } if (!($this->cmaecekuqkwmemms("\x52\105\x53\x54\137\x52\105\x51\125\105\123\124") || $this->gaiygescoqgyusaa())) { goto qwemkcoaseywkuuc; } unset($this->tests["\151\x73\x5f\150\x74\x6d\x6c"]); qwemkcoaseywkuuc: mqimkwickkgqqeoi: if (!($this->cskwmweqysskwckg("\x69\x73\137\150\x74\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto kwyimqumkuuyaiku; } $this->yauwooaeicgosquo("\116\157\40\x63\x6c\157\163\x69\x6e\x67\x20\x3c\57\150\x74\155\154\76\40\167\141\x73\40\146\157\165\x6e\x64\x2e"); return false; kwyimqumkuuyaiku: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\x5f\157\x70\164\x69\155\x69\x7a\141\x74\x69\x6f\x6e\137\x61\x6c\154\157\167\x5f\x74\157\137\163\164\x61\162\164\137\142\x75\146\x66\145\162\x5f\x70\162\157\x63\145\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gkqiqaqecmoogmaa; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto mceucsaeouuwyumm; gkqiqaqecmoogmaa: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); mceucsaeouuwyumm: return apply_filters("\160\162\x5f\157\x70\164\x69\155\x69\172\x61\x74\151\157\x6e\x5f\x68\141\163\x5f{$ymqmyyeuycgmigyo}\137\x74\x65\x73\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\163\52\x5c\x2f\134\x73\x2a\x68\164\155\154\x5c\163\52\76\57\x69", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\72\56\53\57\51\x3f" . $wp_rewrite->feed_base . "\50\77\x3a\x2f\x28\77\x3a\x2e\x2b\57\77\51\x3f\51\x3f\44"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\51\x24\x23\151", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ceiuqsiqgiuiekem; } return $this->eecucukcqkqysiau(__FUNCTION__); ceiuqsiqgiuiekem: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gsymkkskwsgggoic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gsymkkskwsgggoic: $ucasskoyoewwmmii = ["\x72\157\142\157\164\x73\56\x74\x78\164", "\56\150\x74\x61\x63\x63\145\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto wiwoiyoakywqyaiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wiwoiyoakywqyaiy: isewysikysqewkis: } ugykmcouiwiscoqu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto igmmqwyawcuuckkq; } return $this->eecucukcqkqysiau(__FUNCTION__); igmmqwyawcuuckkq: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto sqwuqegeiisoiiuq; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eouwacqiommmeaqc: sqwuqegeiisoiiuq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uscokkmquayiukag; } return $this->eecucukcqkqysiau(__FUNCTION__); uscokkmquayiukag: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ykqsuiyyosyeyscc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykqsuiyyosyeyscc: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\x6e\x64\145\x78\x2e\x70\x68\160")) { goto ugogoekeckgcmuaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ugogoekeckgcmuaw: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\170\155\x6c" => 1, "\170\x73\x6c" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\104\117\111\116\x47\137\101\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\123")), ["\x6f\x6e", "\61"]) || "\x34\x34\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\122\126\x45\x52\x5f\x50\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\137\x63\x75\x73\x74\157\x6d\151\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\x45\124" => 1, "\110\105\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egesuwkqkmaigaoe; } return $this->eecucukcqkqysiau(__FUNCTION__); egesuwkqkmaigaoe: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto syusgosewwkoagoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syusgosewwkoagoq: $yccgiaiouekkouay = ["\x73" => 1, "\154\x61\x6e\x67" => 1, "\160\145\x72\155\x61\x6c\151\156\x6b\137\x6e\141\x6d\145" => 1, "\x6c\160\55\166\x61\162\x69\141\164\x69\157\x6e\55\151\x64" => 1, "\x58\x44\x45\102\125\107\x5f\123\105\x53\123\111\x4f\116\x5f\x53\124\x41\122\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto mcqucouuiuoagqwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mcqucouuiuoagqwc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\145\x5f\161\165\145\162\171\x5f\163\x74\x72\x69\x6e\x67\163"); if ($yccgiaiouekkouay) { goto eweaaismksecwagy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eweaaismksecwagy: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto icumkkykaoqycqqu; } return $this->eecucukcqkqysiau(__FUNCTION__); icumkkykaoqycqqu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto oeamoqweiueaueay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeamoqweiueaueay: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto owgsameoayaogsma; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); owgsameoayaogsma: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto gqimwsyemoewagcy; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; gqimwsyemoewagcy: awgmegueeqeyqamu: } kyiwsiakwgiwouyi: if (empty($eiocugauqgouiuyi)) { goto aoaqwygkaagiuuws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); aoaqwygkaagiuuws: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto esagiiawomyacuiw; } return $this->eecucukcqkqysiau(__FUNCTION__); esagiiawomyacuiw: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto maaisuqwkymeguys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); maaisuqwkymeguys: $yiycakoikkyuokgk = array_flip(explode("\x7c", $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\x5f\155\141\156\x64\141\164\x6f\x72\x79\137\143\157\x6f\153\151\x65\x73"))); if ($this->wemyikwikgwqwuoc()) { goto qkyciyiwkmgkmquk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); qkyciyiwkmgkmquk: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto iuwkiyimqmgguose; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); iuwkiyimqmgguose: ayceeyuocgowqwsa: } sksgcusuyqcwqswe: if (!empty($yiycakoikkyuokgk)) { goto yggseoaommssscwo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yggseoaommssscwo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\x5f\x6f\160\x74\x69\x6d\151\172\x61\x74\x69\x6f\x6e\x5f\x6f\x76\x65\x72\162\151\144\145\x5f\144\157\156\164\137\x6f\160\164\151\155\x69\172\x65", $this->cmaecekuqkwmemms("\x50\122\x5f\117\x50\x54\x49\x4d\x49\x5a\x41\124\x49\x4f\x4e\137\104\117\x4e\124\137\x4f\120\x54\x49\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\163\137\x34\x30\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\x69\x73\x5f\163\x65\141\x72\x63\x68") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\x72\x5f\x6f\160\x74\x69\155\151\172\141\x74\151\x6f\156\x5f\x6f\x70\164\151\155\x69\x7a\145\137\163\145\141\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\x5f\x73\163\154"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aeiemwacaiygemmg; } return $this->eecucukcqkqysiau(__FUNCTION__); aeiemwacaiygemmg: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yyqygaokeccgugos; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yyqygaokeccgugos: if (!$this->aceaeommyuooiqge()->get("\x6d\x6f\142\151\154\145\137\x63\141\x63\x68\x65")) { goto oeusomaaeekakake; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oeusomaaeekakake: $wayquiskgeuoqamk = "\62\x2e\x30\x5c\x20\x4d\x4d\120\174\62\64\x30\x78\x33\x32\60\174\64\60\60\x58\62\64\60\x7c\x41\x76\x61\156\164\107\157\x7c\102\x6c\x61\x63\x6b\102\x65\162\x72\x79\174\x42\x6c\x61\172\x65\162\174\103\145\x6c\154\x70\150\x6f\x6e\145\x7c\x44\141\x6e\x67\145\x72\x7c\x44\157\103\157\x4d\157\174\105\154\141\151\x6e\145\57\x33\56\60\x7c\105\165\144\x6f\x72\x61\127\x65\x62\174\x47\157\157\147\154\145\x62\x6f\164\55\115\157\x62\151\x6c\x65\x7c\x68\x69\160\164\x6f\160\x7c\111\105\x4d\157\x62\151\154\x65\x7c\x4b\x59\x4f\103\x45\x52\101\57\x57\x58\x33\x31\60\113\x7c\114\x47\57\125\x39\71\60\174\115\x49\x44\x50\55\62\56\x7c\x4d\x4d\105\106\x32\60\x7c\115\117\124\x2d\126\x7c\116\145\164\x46\162\x6f\156\164\x7c\116\x65\167\164\x7c\116\x69\156\164\145\156\x64\x6f\x5c\x20\127\151\x69\x7c\x4e\x69\x74\x72\x6f\174\x4e\157\153\x69\x61\174\x4f\x70\145\x72\141\x5c\x20\x4d\151\156\151\x7c\x50\141\x6c\x6d\174\x50\x6c\141\x79\123\164\x61\x74\x69\157\x6e\x5c\x20\x50\157\162\164\141\x62\154\x65\x7c\160\x6f\162\x74\141\x6c\x6d\x6d\x6d\x7c\x50\162\157\170\151\156\145\164\174\120\162\x6f\170\x69\x4e\x65\164\174\123\110\101\122\120\55\124\x51\55\107\130\x31\x30\174\x53\x48\x47\55\151\71\x30\x30\174\123\x6d\141\x6c\154\x7c\123\157\x6e\171\105\162\151\x63\x73\x73\x6f\156\x7c\x53\171\155\x62\151\141\x6e\x5c\x20\x4f\123\x7c\x53\171\x6d\x62\151\x61\x6e\117\123\174\124\123\x32\x31\x69\x2d\x31\x30\174\x55\120\56\x42\162\x6f\167\x73\x65\162\x7c\x55\x50\x2e\x4c\x69\156\x6b\x7c\167\145\x62\x4f\123\x7c\x57\151\156\x64\157\x77\163\x5c\x20\x43\x45\x7c\127\x69\x6e\127\101\120\174\x59\141\150\157\x6f\x53\145\145\153\145\x72\x2f\115\61\101\x31\x2d\x52\x32\x44\62\174\x69\x50\150\x6f\156\x65\174\151\x50\157\144\174\x41\x6e\144\x72\x6f\151\x64\174\102\154\141\143\x6b\x42\145\162\162\171\x39\x35\x33\x30\x7c\114\x47\x2d\x54\125\x39\x31\65\134\x20\117\142\151\147\157\174\x4c\x47\105\x5c\40\126\130\174\167\x65\x62\117\123\x7c\116\157\x6b\151\141\65\70\x30\60"; if (!preg_match("\43\136\56\52\x28{$wayquiskgeuoqamk}\x29\x2e\52\x23\x69", $uowwycywwssskuys)) { goto kwuckkyqaygwgcuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwuckkyqaygwgcuy: $wayquiskgeuoqamk = "\x77\63\x63\134\x20\x7c\x77\x33\x63\55\174\x61\x63\x73\x2d\174\x61\x6c\141\x76\174\x61\x6c\143\141\174\x61\x6d\157\x69\x7c\141\165\144\x69\174\x61\166\141\156\x7c\x62\x65\156\x71\x7c\142\151\x72\144\x7c\x62\x6c\x61\143\x7c\142\x6c\141\x7a\174\x62\x72\145\x77\x7c\x63\145\154\x6c\174\143\x6c\144\143\x7c\143\x6d\x64\55\174\144\141\x6e\x67\x7c\x64\157\143\x6f\x7c\145\162\x69\143\x7c\150\x69\x70\164\174\150\x74\143\137\174\x69\156\156\157\174\151\x70\141\x71\174\x69\160\x6f\x64\174\152\x69\147\163\174\153\144\144\151\x7c\x6b\x65\x6a\151\174\x6c\x65\x6e\157\x7c\154\147\55\x63\174\154\x67\55\144\x7c\x6c\147\55\147\x7c\154\x67\x65\x2d\174\154\x67\x2f\165\x7c\x6d\141\x75\151\x7c\x6d\141\170\x6f\x7c\155\151\144\x70\174\155\x69\x74\x73\x7c\155\x6d\x65\x66\174\x6d\x6f\x62\151\174\155\x6f\164\x2d\174\x6d\x6f\x74\157\174\x6d\167\x62\160\x7c\x6e\145\x63\x2d\174\x6e\145\167\x74\x7c\156\x6f\x6b\151\x7c\160\x61\154\155\174\x70\x61\156\x61\174\160\x61\x6e\164\174\160\x68\x69\x6c\x7c\x70\154\141\171\174\x70\157\x72\164\174\160\x72\x6f\170\x7c\x71\167\x61\160\x7c\163\141\147\145\174\x73\141\x6d\163\174\163\x61\x6e\171\174\163\143\x68\x2d\x7c\x73\x65\143\x2d\174\x73\x65\x6e\x64\174\163\145\x72\x69\174\163\x67\150\55\174\x73\x68\141\162\x7c\163\151\145\55\x7c\163\151\x65\x6d\174\x73\x6d\141\154\174\x73\155\x61\162\x7c\x73\157\x6e\171\x7c\x73\x70\150\x2d\174\163\x79\155\x62\174\164\55\155\x6f\x7c\164\x65\x6c\x69\174\164\x69\155\x2d\x7c\164\157\163\150\174\164\163\x6d\55\174\x75\160\147\61\174\165\160\163\151\x7c\x76\x6b\55\166\174\x76\x6f\144\141\x7c\167\x61\x70\55\x7c\167\141\160\141\x7c\x77\141\160\x69\174\x77\141\x70\160\174\167\x61\160\x72\x7c\x77\145\142\x63\x7c\167\x69\156\x77\174\x77\x69\156\x77\x7c\170\x64\x61\x5c\40\174\x78\144\x61\x2d"; if (!preg_match("\x23\136\50{$wayquiskgeuoqamk}\51\x2e\x2a\x23\x69", $uowwycywwssskuys)) { goto giuccakymqymawgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); giuccakymqymawgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sicgyiyiocyygkoc; } return $this->eecucukcqkqysiau(__FUNCTION__); sicgyiyiocyygkoc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cyosacayacumuaks: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\137\162\145\152\x65\143\x74\137\165\x61"); if ($mqsuiayuwmwqaqwm) { goto ikcwmsgocyuqiumc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ikcwmsgocyuqiumc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\43{$mqsuiayuwmwqaqwm}\x23", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eqiiaokcgakicaye; } return $this->eecucukcqkqysiau(__FUNCTION__); eqiiaokcgakicaye: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\x5f\162\145\152\145\143\164\137\165\162\151"); if ($escsaeeosigewsme) { goto gcucsowqoeiwmyyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gcucsowqoeiwmyyq: $yciaosuiyeieceug = !preg_match("\43\x5e\x28{$escsaeeosigewsme}\51\44\43\x69", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\137\x55\123\105\x52\x5f\x41\107\105\116\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kyiuewcikkqagwwg; } return $this->eecucukcqkqysiau(__FUNCTION__); kyiuewcikkqagwwg: $yygmoeguaqyumuui = [ "\x48\124\124\x50\137\x43\x46\x5f\103\117\x4e\116\x45\x43\x54\111\116\x47\137\111\120", "\x48\124\124\120\137\103\114\111\105\x4e\124\x5f\111\x50", "\x48\124\124\120\137\x58\x5f\106\117\122\127\101\x52\x44\105\104\x5f\106\117\x52", "\x48\x54\x54\x50\x5f\130\137\106\x4f\x52\127\x41\x52\x44\x45\104", "\110\124\x54\x50\137\130\x5f\103\x4c\x55\123\124\x45\x52\x5f\x43\114\x49\105\116\124\x5f\x49\x50", "\110\x54\124\120\137\x58\137\x52\x45\x41\114\137\x49\120", "\110\x54\x54\120\137\x46\117\x52\127\x41\x52\104\x45\x44\x5f\106\x4f\x52", "\x48\124\x54\120\x5f\106\117\122\x57\101\122\104\x45\x44", "\122\105\115\117\124\105\137\x41\104\104\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto wwcqoeuwskquakwy; } $kucumcusyyckayas = explode("\54", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto omuauimgkygcecsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); omuauimgkygcecsc: wwcqoeuwskquakwy: oasggeyceiyieuuo: } aumowowgewgqmwci: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\60\56\x30\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto quamuugoocyyceec; } return $this->eecucukcqkqysiau(__FUNCTION__); quamuugoocyyceec: $yywgiquyoymymqwk = [ "\x32\x30\x38\56\67\60\56\62\64\67\x2e\61\65\x37" => '', "\61\67\x32\56\x32\x35\65\x2e\64\70\56\61\x33\x30" => '', "\61\x37\62\56\x32\65\x35\x2e\x34\x38\x2e\x31\x33\61" => '', "\61\x37\62\x2e\62\65\65\56\x34\x38\x2e\61\63\62" => '', "\61\67\x32\x2e\62\65\x35\56\64\x38\x2e\61\x33\x33" => '', "\x31\67\62\x2e\62\65\x35\x2e\64\70\x2e\61\63\64" => '', "\61\x37\x32\56\x32\x35\65\x2e\64\70\x2e\61\63\x35" => '', "\61\x37\62\56\62\x35\x35\x2e\64\70\56\61\x33\66" => '', "\x31\67\x32\56\x32\65\x35\x2e\x34\x38\x2e\61\x33\x37" => '', "\61\67\x32\56\x32\x35\x35\56\64\70\x2e\x31\x33\70" => '', "\61\67\62\56\x32\x35\x35\x2e\x34\70\56\61\x33\x39" => '', "\x31\67\62\56\x32\x35\x35\56\64\x38\56\x31\64\x30" => '', "\x31\x37\x32\56\x32\x35\x35\56\64\x38\56\x31\x34\61" => '', "\61\x37\x32\56\x32\x35\x35\x2e\x34\x38\56\x31\x34\62" => '', "\61\x37\x32\56\62\x35\65\x2e\64\x38\56\61\x34\63" => '', "\x31\x37\x32\56\x32\65\x35\x2e\x34\70\x2e\x31\x34\64" => '', "\x31\x37\62\56\x32\65\x35\56\64\70\56\61\64\x35" => '', "\x31\67\62\x2e\62\x35\x35\x2e\64\70\x2e\61\x34\x36" => '', "\61\x37\62\56\62\65\65\56\64\x38\x2e\61\64\x37" => '', "\65\62\x2e\62\x32\71\x2e\x31\x32\62\56\x32\64\x30" => '', "\x31\x30\x34\x2e\62\61\64\56\67\62\56\x31\60\x31" => '', "\x31\63\x2e\66\x36\56\x37\x2e\61\x31" => '', "\x31\63\x2e\x38\65\x2e\x32\64\x2e\x38\63" => '', "\61\63\x2e\x38\65\56\62\64\x2e\71\60" => '', "\x31\63\x2e\x38\x35\56\x38\62\56\62\66" => '', "\x34\60\x2e\67\64\56\x32\x34\x32\56\62\x35\x33" => '', "\64\x30\56\67\x34\x2e\x32\64\63\x2e\x31\x33" => '', "\64\60\x2e\x37\x34\x2e\62\64\x33\x2e\x31\67\66" => '', "\61\60\64\x2e\x32\61\64\56\64\x38\x2e\x32\64\x37" => '', "\x31\x35\x37\x2e\65\65\x2e\x31\x38\71\x2e\x31\x38\x39" => '', "\x31\60\x34\x2e\x32\x31\x34\x2e\61\61\x30\56\61\x33\x35" => '', "\x37\x30\x2e\x33\x37\56\70\63\x2e\62\x34\x30" => '', "\x36\x35\56\65\62\x2e\x33\66\x2e\x32\65\60" => '', "\x31\x33\56\x37\70\56\62\x31\66\56\65\x36" => '', "\65\x32\x2e\61\x36\62\x2e\x32\x31\x32\x2e\61\x36\x33" => '', "\62\63\x2e\x39\x36\x2e\x33\x34\x2e\x31\60\x35" => '', "\x36\x35\56\65\62\56\61\61\63\x2e\x32\63\x36" => '', "\61\x37\x32\x2e\62\x35\65\x2e\66\61\56\63\x34" => '', "\61\67\62\56\62\x35\x35\56\66\61\56\63\65" => '', "\x31\x37\x32\56\62\65\x35\x2e\x36\61\x2e\63\66" => '', "\x31\67\x32\56\62\65\65\x2e\x36\61\x2e\63\x37" => '', "\61\67\62\56\x32\x35\65\56\66\x31\x2e\63\x38" => '', "\x31\x37\x32\x2e\x32\x35\x35\x2e\x36\61\x2e\63\71" => '', "\x31\x37\x32\56\62\x35\x35\x2e\66\x31\x2e\64\60" => '', "\65\62\x2e\x32\63\67\x2e\x32\x33\65\x2e\61\70\65" => '', "\x35\x32\x2e\62\63\67\56\62\x35\x30\56\x37\x33" => '', "\65\62\56\x32\x33\67\56\62\63\66\56\61\64\x35" => '', "\x31\x30\64\x2e\x34\61\x2e\62\56\x31\x39" => '', "\61\x39\x31\x2e\62\x33\x35\x2e\x39\x38\56\61\66\x34" => '', "\61\x39\x31\56\62\63\65\x2e\x39\x39\56\x32\x32\x31" => '', "\x31\x39\61\56\x32\63\x32\x2e\61\71\64\x2e\65\x31" => '', "\61\x30\64\x2e\x32\x31\x31\x2e\x31\64\63\x2e\x38" => '', "\61\x30\64\56\62\x31\x31\x2e\x31\66\x35\x2e\x35\x33" => '', "\x35\x32\56\x31\67\62\56\61\x34\x2e\70\x37" => '', "\x34\x30\x2e\70\63\56\70\x39\x2e\x32\61\x34" => '', "\x35\x32\56\x31\x37\65\56\x35\67\x2e\x38\61" => '', "\62\60\x2e\x31\x38\x38\56\x36\x33\56\61\65\61" => '', "\62\60\x2e\x35\x32\56\63\66\x2e\x34\71" => '', "\x35\x32\x2e\x32\64\66\x2e\x31\66\65\x2e\61\x35\x33" => '', "\65\61\x2e\61\x34\x34\x2e\x31\x30\x32\56\62\63\63" => '', "\x31\x33\x2e\67\x36\56\71\67\56\62\62\x34" => '', "\61\60\x32\x2e\x31\x33\63\56\61\66\71\x2e\x36\x36" => '', "\x35\62\56\x32\63\61\56\61\71\71\56\x31\x37\x30" => '', "\61\63\x2e\x35\63\56\x31\x36\x32\56\x37" => '', "\x34\60\x2e\61\62\x33\56\62\61\70\x2e\71\x34" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto qcssigmcayuyweiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcssigmcayuyweiy: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\x5f\x55\123\x45\122\x5f\101\x47\x45\116\124"); if ($uowwycywwssskuys) { goto iymaiwqimisgacmk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iymaiwqimisgacmk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\120\x69\x6e\x67\x64\x6f\x6d\120\141\x67\145\x53\160\145\145\x64\174\104\x61\x72\145\102\157\157\163\x74\174\107\x6f\157\147\154\x65\174\x50\x54\123\124\174\103\x68\x72\157\x6d\x65\55\114\x69\147\150\x74\x68\157\165\x73\x65\x7c\127\120\40\122\157\x63\153\x65\164\x23\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\125\105\x53\x54\x5f\x55\122\x49", ''); if (!$iyiwooigkweeewey) { goto mugscgugcogcasue; } $iyiwooigkweeewey = "\57" . ltrim($iyiwooigkweeewey, "\57"); mugscgugcogcasue: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto qyyyycwaookqaoke; } return ''; qyyyycwaookqaoke: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ssywsaaqqaucesau; } return $magawcseesgowoeo; ssywsaaqqaucesau: return "{$magawcseesgowoeo}\77{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto ygcgoaokauigwuus; } $magawcseesgowoeo = explode("\77", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); ygcgoaokauigwuus: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\x45\x53\124\x5f\115\105\x54\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto auumaoycmsmsgigs; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\x68\145\137\151\x67\156\x6f\162\145\144\x5f\160\x61\x72\x61\155\x65\164\x65\x72\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ysiqakyaiooyscwy; } ksort($eyagkkkqkwcuygso); ysiqakyaiooyscwy: auumaoycmsmsgigs: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; qeuyekusasqmcqms: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\56") !== false || "\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu)) { goto ousmyagwsiooumos; } if (strpos($euueacigmgoqkimu, "\x2e\x2e\57") === 0) { goto ekoqieigyoeyauqa; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto ssagcgqaucssyego; } if (strpos($euueacigmgoqkimu, "\57\x2e\57") === 0) { goto acgqaeakoyasgkku; } if ("\x2f\x2e" === $euueacigmgoqkimu) { goto suqckoccuyeeymww; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto yksywwikmeksikqc; } if ("\x2f\x2e\56" === $euueacigmgoqkimu) { goto iwkckkeimmeoquyq; } if ("\x2e" === $euueacigmgoqkimu || "\56\x2e" === $euueacigmgoqkimu) { goto qwisiamkmkkwucyo; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto yiceawuuiusakwiq; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto sgocecweikecwwgq; yiceawuuiusakwiq: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); sgocecweikecwwgq: goto yqcusaeysomccaok; qwisiamkmkkwucyo: $euueacigmgoqkimu = ''; yqcusaeysomccaok: goto masakmomqmeocqqg; iwkckkeimmeoquyq: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); masakmomqmeocqqg: goto yoqsigmoyaaceqky; yksywwikmeksikqc: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $euueacigmgoqkimu = "\57"; giugwaeuwaomossq: goto sycougcyeqmeiagk; acgqaeakoyasgkku: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); sycougcyeqmeiagk: goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); cuwcsamuuqyuyqsu: goto qeuyekusasqmcqms; ousmyagwsiooumos: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto mimacwyuueomgwwy; } $icwicymcioeyeyek["\160\x65\x72\x6d\x61\x6c\x69\x6e\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); mimacwyuueomgwwy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ksckqkmwiqggykke; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ksckqkmwiqggykke: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto igwkcikeyoowosoi; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); igwkcikeyoowosoi: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\x65\163\163\x61\x67\145" => $uamcoiueqaamsqma, "\143\157\x6e\x74\x65\x78\x74" => $icwicymcioeyeyek]; } }

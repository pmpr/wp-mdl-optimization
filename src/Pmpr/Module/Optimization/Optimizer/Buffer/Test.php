<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ada53dffd1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\x73\163\x6c" => 0, "\x77\x70\x5f\64\x30\x34" => 1, "\163\x65\141\162\143\x68" => 1, "\155\157\142\x69\x6c\145" => 1, "\x69\163\x5f\150\x74\155\154" => 1, "\161\x75\x65\x72\x79\137\163\164\162\x69\156\147" => 1, "\144\157\156\157\164\143\x61\x63\150\145\x70\x61\x67\145" => 1, "\162\x65\152\145\143\164\145\x64\x5f\x63\157\x6f\153\x69\x65" => 1, "\155\x61\156\x64\141\x74\x6f\x72\171\x5f\x63\x6f\x6f\x6b\151\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\164\145\x73\x74\163"])) { goto iauwuugggmegwisk; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\145\163\x74\163"]); iauwuugggmegwisk: if (!(!isset($ywmkwiwkosakssii["\143\x6f\157\x6b\151\x65\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto aukucaieceiwesmm; } $ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\x65\x73"] = $_COOKIE; aukucaieceiwesmm: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\163\x74"]) && !empty($_POST) && is_array($_POST))) { goto kqyoakickmseyyeq; } $ywmkwiwkosakssii["\x70\x6f\163\164"] = $_POST; kqyoakickmseyyeq: if (!(!isset($ywmkwiwkosakssii["\x67\x65\x74"]) && !empty($_GET) && is_array($_GET))) { goto micceocwuwkyusic; } $ywmkwiwkosakssii["\147\145\164"] = $_GET; micceocwuwkyusic: $this->get = !empty($ywmkwiwkosakssii["\x67\145\164"]) && is_array($ywmkwiwkosakssii["\x67\x65\164"]) ? $ywmkwiwkosakssii["\x67\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\157\163\x74"]) && is_array($ywmkwiwkosakssii["\x70\x6f\x73\x74"]) ? $ywmkwiwkosakssii["\160\x6f\x73\164"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\x6f\157\153\151\145\x73"]) && is_array($ywmkwiwkosakssii["\x63\x6f\x6f\153\151\145\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto iwueukqcywkiyqge; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\x77\160\137\x63\x75\x73\164\157\155\151\x7a\145" => '']); iwueukqcywkiyqge: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto ykwasaaoeeiuomim; } $this->yauwooaeicgosquo("\122\157\x62\157\x74\163\56\x74\x78\164\40\157\x72\x20\x2e\150\x74\x61\x63\x63\145\x73\x73\40\x66\x69\154\x65\40\x69\163\x20\145\170\143\154\165\144\145\144\x2e"); return false; ykwasaaoeeiuomim: if (!$this->gymgcceeqssmesiu()) { goto acggikioyeueeowg; } $this->yauwooaeicgosquo("\x50\110\x50\54\x20\130\x4d\x4c\54\x20\157\162\40\130\123\x4c\40\x66\151\154\145\40\151\x73\x20\145\170\143\x6c\x75\x64\145\x64\x2e"); return false; acggikioyeueeowg: if (!$this->goecwaaykqoaaagg()) { goto cwikoaeqmmoimmso; } $this->yauwooaeicgosquo("\x41\144\155\151\156\x20\157\162\40\x41\x4a\x41\x58\40\125\x52\114\x20\x69\163\x20\145\170\x63\154\165\x64\145\144\56"); return false; cwikoaeqmmoimmso: if (!$this->sgsscqasgeyeicoe()) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\101\x64\155\x69\x6e\40\157\x72\40\x41\112\x41\x58\40\x55\x52\x4c\40\x69\x73\40\145\170\143\x6c\165\144\145\x64\x2e"); return false; egaymskkosukqeao: if ($this->gooeyogikcusgwuu()) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\x52\145\x71\x75\x65\x73\164\x20\155\x65\x74\x68\x6f\144\40\x69\x73\40\156\x6f\x74\40\x61\154\154\157\167\x65\144\56\40\x50\141\147\145\40\x63\x61\x6e\156\157\164\40\142\x65\x20\x63\x61\143\x68\x65\x64\56", ["\x72\145\x71\165\x65\163\x74\x5f\x6d\x65\164\150\157\144" => $this->ciyocmkwssocskiy()]); return false; kaiesowkgwogqseg: if ($this->cskwmweqysskwckg()) { goto kicwiowcogmauwiy; } $this->lastError = []; return true; kicwiowcogmauwiy: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\x75\x63\x63\145\163\163"]) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\116\x6f\40\143\157\x6e\146\x69\147\x20\x66\x69\x6c\x65\40\x66\157\x75\x6e\x64", ["\x63\157\x6e\146\x69\x67\137\160\141\x74\150" => $uiewakwqscemywuo["\x70\x61\164\150"]]); return false; cwswueuqoamqasya: if (!($this->cskwmweqysskwckg("\161\x75\x65\162\x79\x5f\x73\164\162\151\x6e\147") && !$this->koguieumooaesyww())) { goto kgmeiwiakwicgkkk; } $this->yauwooaeicgosquo("\121\x75\x65\x72\x79\x20\163\164\x72\151\156\x67\x20\x55\x52\x4c\x20\151\x73\x20\145\x78\x63\x6c\165\144\x65\144\x2e", $_GET); return false; kgmeiwiakwicgkkk: if (!($this->cskwmweqysskwckg("\x73\163\x6c") & !$this->eqwgocqwoyyykwke())) { goto suuskagowwgsouqw; } $this->yauwooaeicgosquo("\123\123\x4c\40\x63\x61\x63\150\145\x20\156\157\x74\40\141\160\x70\154\151\x65\x64\x20\164\157\40\160\141\x67\145\x2e"); return false; suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\165\x72\151") && !$this->qweiomkkuikwugks())) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\x50\141\x67\x65\x20\151\163\x20\145\170\143\x6c\165\x64\145\144\56"); return false; omykokikgocoikec: if (!($this->cskwmweqysskwckg("\162\145\152\x65\143\x74\145\144\137\x63\x6f\x6f\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto csieaismmmocyacu; } $this->yauwooaeicgosquo("\105\x78\x63\154\x75\144\x65\144\40\143\157\157\153\x69\x65\40\x66\x6f\165\x6e\x64\56", ["\x65\x78\143\x6c\x75\x64\145\x64\x5f\143\157\157\153\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; csieaismmmocyacu: if (!($this->cskwmweqysskwckg("\155\141\156\144\141\x74\157\x72\x79\137\143\x6f\x6f\x6b\151\145") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto aquqkiggamaoegoo; } $this->yauwooaeicgosquo("\x4d\x69\163\163\x69\156\x67\x20\155\141\156\144\x61\x74\157\x72\171\40\143\x6f\157\153\x69\x65\72\x20\160\141\147\x65\x20\x6e\x6f\164\x20\x70\162\157\143\145\x73\163\145\x64\56", ["\155\x69\x73\163\151\156\x67\137\143\157\157\x6b\151\x65\163" => $this->qgymyeqwqaiwmmea()]); return false; aquqkiggamaoegoo: if (!($this->cskwmweqysskwckg("\165\x73\x65\162\137\x61\x67\145\x6e\x74") && !$this->mqiqsuksgyekwkii())) { goto mykiyqcqiegkiqys; } $this->yauwooaeicgosquo("\125\x73\x65\x72\40\x41\147\145\156\x74\x20\x69\163\40\145\170\143\x6c\x75\144\145\x64\56", ["\165\x73\145\x72\137\x61\147\x65\x6e\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\125\123\x45\x52\137\101\x47\x45\116\124")]); return false; mykiyqcqiegkiqys: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto agemwookwseyycqo; } $this->yauwooaeicgosquo("\102\165\x66\146\145\x72\x20\143\x6f\156\x74\145\156\x74\40\x75\156\x64\145\162\x20\x32\x35\65\40\x63\x68\141\162\x61\143\164\145\x72\163\x2e"); return false; agemwookwseyycqo: if (!(http_response_code() !== 200)) { goto cquecqekuucwoumw; } $this->yauwooaeicgosquo("\x50\141\x67\145\40\151\x73\x20\x6e\157\164\40\x61\40\62\x30\x30\40\110\124\x54\120\x20\162\145\x73\160\157\156\163\145\40\x61\x6e\144\40\x63\x61\x6e\156\157\164\40\x62\145\40\143\141\143\150\145\144\56"); return false; cquecqekuucwoumw: if (!($this->cskwmweqysskwckg("\x64\157\x6e\x6f\x74\x6f\160\x74\151\x6d\151\172\145\x70\141\147\x65") && $this->cowcgqokiosgaqic())) { goto koiscokkkaimiecq; } $this->yauwooaeicgosquo("\104\117\116\x54\x4f\x50\x54\111\x4d\111\132\x45\104\x50\101\107\105\x20\151\163\40\144\x65\146\x69\156\145\144\x2e\40\120\x61\x67\145\x20\143\x61\x6e\x6e\x6f\x74\x20\x62\x65\x20\x63\141\x63\150\x65\x64\x2e"); return false; koiscokkkaimiecq: if (!($this->cskwmweqysskwckg("\x77\x70\x5f\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto owuuuiekkaeoeacq; } $this->yauwooaeicgosquo("\127\120\x20\64\x30\x34\40\160\x61\x67\145\x20\151\x73\40\x65\x78\x63\154\x75\x64\x65\x64\56"); return false; owuuuiekkaeoeacq: if (!($this->cskwmweqysskwckg("\x73\145\141\x72\x63\150") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto saauykgakaeiyoua; } $this->yauwooaeicgosquo("\123\145\x61\x72\143\150\x20\x70\141\x67\145\x20\151\x73\x20\145\170\143\x6c\165\x64\145\x64\x2e"); return false; saauykgakaeiyoua: if (!$this->cskwmweqysskwckg("\151\163\x5f\x68\164\x6d\x6c")) { goto mqimkwickkgqqeoi; } if (!($this->cmaecekuqkwmemms("\122\105\123\x54\x5f\x52\x45\x51\125\105\123\124") || $this->gaiygescoqgyusaa())) { goto qwemkcoaseywkuuc; } unset($this->tests["\151\163\137\150\x74\155\x6c"]); qwemkcoaseywkuuc: mqimkwickkgqqeoi: if (!($this->cskwmweqysskwckg("\151\163\137\150\x74\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto kwyimqumkuuyaiku; } $this->yauwooaeicgosquo("\x4e\x6f\40\143\154\157\x73\x69\156\x67\40\74\57\x68\164\155\154\76\x20\x77\141\163\x20\146\157\165\156\144\x2e"); return false; kwyimqumkuuyaiku: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\x72\x5f\x6f\x70\164\x69\x6d\151\172\141\x74\x69\157\x6e\137\141\154\x6c\x6f\x77\x5f\x74\157\x5f\163\x74\x61\x72\164\x5f\x62\165\x66\x66\145\x72\137\160\162\157\x63\145\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto gkqiqaqecmoogmaa; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto mceucsaeouuwyumm; gkqiqaqecmoogmaa: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); mceucsaeouuwyumm: return apply_filters("\160\x72\137\x6f\x70\164\x69\155\151\x7a\141\164\151\157\x6e\137\x68\x61\x73\137{$ymqmyyeuycgmigyo}\137\164\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\x3c\134\x73\52\x5c\57\134\x73\52\x68\164\x6d\154\x5c\x73\52\76\x2f\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\x2f\x28\77\x3a\56\53\57\51\x3f" . $wp_rewrite->feed_base . "\x28\77\x3a\x2f\50\x3f\x3a\56\x2b\x2f\x3f\51\x3f\51\77\44"; return (bool) preg_match("\43\x5e\x28{$uckmmkmoeikwsiqg}\x29\44\43\x69", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ceiuqsiqgiuiekem; } return $this->eecucukcqkqysiau(__FUNCTION__); ceiuqsiqgiuiekem: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gsymkkskwsgggoic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gsymkkskwsgggoic: $ucasskoyoewwmmii = ["\162\157\x62\x6f\x74\x73\56\x74\170\x74", "\x2e\x68\x74\x61\x63\143\145\163\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto wiwoiyoakywqyaiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); wiwoiyoakywqyaiy: isewysikysqewkis: } ugykmcouiwiscoqu: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto igmmqwyawcuuckkq; } return $this->eecucukcqkqysiau(__FUNCTION__); igmmqwyawcuuckkq: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto sqwuqegeiisoiiuq; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); eouwacqiommmeaqc: sqwuqegeiisoiiuq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uscokkmquayiukag; } return $this->eecucukcqkqysiau(__FUNCTION__); uscokkmquayiukag: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto ykqsuiyyosyeyscc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ykqsuiyyosyeyscc: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\156\x64\145\170\56\160\x68\x70")) { goto ugogoekeckgcmuaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ugogoekeckgcmuaw: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\150\x70" => 1, "\x78\155\154" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\117\x49\116\x47\x5f\x41\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\123")), ["\x6f\156", "\61"]) || "\64\x34\x33" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\x52\137\x50\117\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\137\x63\165\163\164\x6f\155\x69\172\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\124" => 1, "\x48\105\x41\104" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto egesuwkqkmaigaoe; } return $this->eecucukcqkqysiau(__FUNCTION__); egesuwkqkmaigaoe: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto syusgosewwkoagoq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); syusgosewwkoagoq: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\x6e\147" => 1, "\160\145\x72\155\141\154\x69\x6e\153\x5f\x6e\141\x6d\145" => 1, "\154\160\x2d\166\141\x72\x69\x61\164\151\157\x6e\55\x69\x64" => 1, "\x58\104\x45\102\x55\107\137\123\x45\123\123\x49\117\x4e\137\x53\124\x41\x52\x54" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto mcqucouuiuoagqwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); mcqucouuiuoagqwc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\x5f\161\x75\x65\x72\171\x5f\x73\164\x72\151\x6e\x67\x73"); if ($yccgiaiouekkouay) { goto eweaaismksecwagy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eweaaismksecwagy: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto icumkkykaoqycqqu; } return $this->eecucukcqkqysiau(__FUNCTION__); icumkkykaoqycqqu: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto oeamoqweiueaueay; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oeamoqweiueaueay: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto owgsameoayaogsma; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); owgsameoayaogsma: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto gqimwsyemoewagcy; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; gqimwsyemoewagcy: awgmegueeqeyqamu: } kyiwsiakwgiwouyi: if (empty($eiocugauqgouiuyi)) { goto aoaqwygkaagiuuws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); aoaqwygkaagiuuws: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto esagiiawomyacuiw; } return $this->eecucukcqkqysiau(__FUNCTION__); esagiiawomyacuiw: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto maaisuqwkymeguys; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); maaisuqwkymeguys: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\143\x61\x63\150\145\x5f\155\141\x6e\144\141\x74\x6f\x72\x79\137\x63\157\157\x6b\151\145\x73"))); if ($this->wemyikwikgwqwuoc()) { goto qkyciyiwkmgkmquk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); qkyciyiwkmgkmquk: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto iuwkiyimqmgguose; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); iuwkiyimqmgguose: ayceeyuocgowqwsa: } sksgcusuyqcwqswe: if (!empty($yiycakoikkyuokgk)) { goto yggseoaommssscwo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yggseoaommssscwo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\160\x72\x5f\157\x70\164\x69\x6d\x69\x7a\x61\164\151\157\156\137\157\x76\145\162\162\151\x64\145\x5f\144\x6f\156\x74\x5f\157\160\164\x69\x6d\x69\x7a\145", $this->cmaecekuqkwmemms("\120\122\x5f\x4f\x50\x54\111\115\x49\x5a\x41\124\x49\x4f\x4e\x5f\104\117\x4e\124\137\117\x50\x54\111\x4d\x49\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\x69\x73\137\64\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\163\145\x61\162\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\160\x72\x5f\157\160\164\x69\155\151\172\141\x74\x69\157\156\137\157\x70\x74\x69\x6d\151\x7a\x65\137\x73\145\141\x72\143\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\x65\x5f\163\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aeiemwacaiygemmg; } return $this->eecucukcqkqysiau(__FUNCTION__); aeiemwacaiygemmg: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto yyqygaokeccgugos; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yyqygaokeccgugos: if (!$this->aceaeommyuooiqge()->get("\155\157\x62\x69\154\x65\137\x63\x61\143\150\x65")) { goto oeusomaaeekakake; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oeusomaaeekakake: $wayquiskgeuoqamk = "\x32\56\x30\x5c\x20\x4d\115\120\174\x32\64\60\170\63\62\x30\x7c\64\60\60\x58\62\x34\x30\x7c\x41\x76\141\x6e\164\x47\x6f\x7c\102\154\x61\x63\x6b\102\145\x72\x72\171\174\x42\154\141\x7a\x65\x72\x7c\x43\145\154\x6c\160\x68\x6f\156\145\x7c\104\141\x6e\147\x65\162\174\104\x6f\x43\157\x4d\157\x7c\105\x6c\141\151\x6e\x65\x2f\x33\56\60\174\105\x75\x64\x6f\x72\141\127\x65\142\174\x47\x6f\x6f\x67\x6c\145\x62\157\x74\55\x4d\x6f\142\151\x6c\x65\x7c\x68\151\x70\164\x6f\x70\x7c\x49\105\115\x6f\x62\x69\154\x65\x7c\x4b\x59\117\x43\x45\122\x41\57\x57\x58\63\x31\60\x4b\x7c\114\107\57\125\x39\x39\60\x7c\115\111\104\x50\x2d\x32\56\174\x4d\x4d\x45\x46\62\60\174\x4d\x4f\x54\55\x56\x7c\116\x65\164\106\x72\157\x6e\x74\x7c\x4e\x65\x77\164\174\x4e\x69\156\164\145\156\x64\x6f\134\x20\127\x69\151\174\x4e\x69\x74\162\157\174\116\x6f\153\x69\x61\174\117\x70\145\162\x61\134\x20\115\x69\156\151\x7c\x50\x61\154\155\x7c\x50\x6c\x61\x79\x53\164\141\x74\151\x6f\x6e\134\x20\x50\x6f\162\164\141\x62\x6c\145\174\x70\157\x72\x74\x61\x6c\x6d\x6d\155\174\x50\x72\x6f\x78\151\156\145\x74\174\x50\162\x6f\x78\x69\x4e\x65\x74\174\123\110\x41\x52\120\x2d\x54\x51\x2d\x47\x58\61\60\174\x53\110\x47\55\151\71\60\60\x7c\x53\155\141\154\154\174\x53\157\156\171\x45\162\x69\143\163\x73\x6f\156\174\x53\x79\155\x62\x69\x61\x6e\134\x20\117\123\x7c\123\x79\155\x62\x69\141\156\117\123\174\x54\x53\62\61\x69\55\x31\x30\174\125\x50\x2e\102\x72\x6f\x77\x73\145\162\174\x55\x50\x2e\114\x69\156\153\174\167\145\142\x4f\x53\174\x57\x69\156\x64\x6f\167\x73\134\40\x43\x45\174\127\151\156\127\x41\120\174\131\141\x68\x6f\x6f\x53\145\x65\x6b\145\x72\x2f\115\x31\x41\x31\x2d\x52\62\x44\x32\174\x69\120\150\157\x6e\145\x7c\151\120\x6f\144\174\101\x6e\x64\162\157\151\144\174\x42\154\141\143\x6b\102\x65\162\x72\x79\71\65\x33\60\174\x4c\107\x2d\124\x55\71\61\65\134\40\x4f\142\x69\x67\157\x7c\x4c\107\x45\134\40\x56\x58\x7c\167\145\x62\117\x53\x7c\116\157\x6b\x69\x61\x35\70\x30\x30"; if (!preg_match("\x23\136\x2e\52\x28{$wayquiskgeuoqamk}\x29\56\52\x23\151", $uowwycywwssskuys)) { goto kwuckkyqaygwgcuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); kwuckkyqaygwgcuy: $wayquiskgeuoqamk = "\x77\x33\x63\x5c\x20\x7c\x77\63\143\x2d\x7c\141\143\163\x2d\174\141\x6c\x61\166\x7c\x61\154\x63\141\x7c\x61\x6d\x6f\x69\x7c\x61\x75\x64\151\174\x61\x76\x61\x6e\x7c\142\145\x6e\161\174\142\x69\x72\x64\x7c\x62\154\141\x63\174\x62\154\141\172\x7c\x62\162\145\167\174\x63\145\154\154\x7c\143\154\x64\143\x7c\143\x6d\x64\x2d\174\x64\141\x6e\x67\x7c\x64\x6f\x63\157\x7c\145\162\151\x63\x7c\150\151\160\x74\x7c\x68\164\143\x5f\174\x69\156\156\x6f\x7c\151\x70\141\x71\174\x69\x70\x6f\x64\174\152\x69\147\x73\174\153\144\x64\151\174\x6b\145\152\151\174\154\x65\x6e\157\x7c\154\x67\55\143\x7c\x6c\x67\55\144\x7c\154\147\x2d\x67\x7c\154\x67\145\x2d\174\154\147\57\x75\174\x6d\x61\x75\x69\174\x6d\141\x78\x6f\x7c\155\x69\144\160\174\155\x69\x74\x73\x7c\155\x6d\145\x66\174\155\157\x62\x69\x7c\155\x6f\164\x2d\174\x6d\157\164\157\174\x6d\167\x62\x70\174\156\145\143\55\174\156\x65\x77\x74\174\x6e\157\x6b\151\x7c\160\x61\154\x6d\174\160\x61\156\x61\x7c\x70\141\x6e\x74\x7c\x70\x68\x69\154\x7c\x70\x6c\x61\x79\x7c\x70\157\162\164\x7c\x70\162\x6f\x78\174\x71\167\x61\x70\x7c\163\141\147\145\174\x73\x61\155\x73\174\163\x61\x6e\171\174\163\x63\x68\x2d\x7c\x73\x65\x63\55\x7c\163\x65\156\144\174\163\145\x72\x69\174\163\147\x68\x2d\174\163\x68\x61\162\x7c\163\151\145\x2d\174\x73\151\145\x6d\x7c\163\155\141\154\174\x73\155\141\x72\174\163\x6f\x6e\x79\174\x73\x70\x68\55\x7c\x73\x79\155\x62\x7c\x74\55\155\x6f\174\164\x65\154\x69\x7c\x74\151\155\55\x7c\164\157\163\x68\174\164\163\x6d\55\x7c\x75\160\147\61\174\x75\x70\163\151\174\166\153\x2d\166\x7c\166\x6f\144\141\174\x77\141\160\x2d\174\167\x61\x70\x61\x7c\167\141\160\151\x7c\167\x61\x70\x70\x7c\167\141\x70\162\174\167\x65\x62\x63\174\167\151\156\167\x7c\x77\151\156\x77\x7c\170\144\141\134\40\174\x78\x64\x61\55"; if (!preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\51\x2e\52\x23\x69", $uowwycywwssskuys)) { goto giuccakymqymawgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); giuccakymqymawgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sicgyiyiocyygkoc; } return $this->eecucukcqkqysiau(__FUNCTION__); sicgyiyiocyygkoc: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cyosacayacumuaks: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\x63\x61\143\x68\x65\137\162\x65\152\145\143\164\x5f\x75\x61"); if ($mqsuiayuwmwqaqwm) { goto ikcwmsgocyuqiumc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ikcwmsgocyuqiumc: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eqiiaokcgakicaye; } return $this->eecucukcqkqysiau(__FUNCTION__); eqiiaokcgakicaye: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\x63\141\143\x68\145\137\162\x65\152\x65\143\x74\x5f\165\162\151"); if ($escsaeeosigewsme) { goto gcucsowqoeiwmyyq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gcucsowqoeiwmyyq: $yciaosuiyeieceug = !preg_match("\x23\x5e\50{$escsaeeosigewsme}\51\x24\43\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\x50\137\125\123\105\122\137\x41\107\x45\116\124"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kyiuewcikkqagwwg; } return $this->eecucukcqkqysiau(__FUNCTION__); kyiuewcikkqagwwg: $yygmoeguaqyumuui = [ "\110\x54\124\120\137\x43\106\x5f\x43\117\x4e\x4e\105\x43\124\111\116\x47\137\111\x50", "\110\x54\x54\120\137\x43\x4c\x49\x45\x4e\x54\x5f\111\120", "\110\124\x54\x50\137\130\x5f\x46\117\122\x57\x41\x52\x44\105\104\137\106\x4f\x52", "\110\124\124\x50\x5f\x58\x5f\106\x4f\x52\127\x41\x52\104\105\x44", "\110\x54\124\x50\137\130\x5f\x43\114\125\x53\x54\x45\122\137\x43\x4c\x49\x45\x4e\x54\137\111\120", "\110\x54\124\120\x5f\130\137\122\x45\101\114\x5f\x49\x50", "\x48\124\x54\120\x5f\106\x4f\122\x57\101\122\104\x45\104\x5f\x46\x4f\122", "\110\x54\124\x50\x5f\x46\117\x52\x57\x41\x52\104\105\x44", "\122\x45\115\117\124\x45\x5f\x41\x44\x44\x52", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto wwcqoeuwskquakwy; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto omuauimgkygcecsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); omuauimgkygcecsc: wwcqoeuwskquakwy: oasggeyceiyieuuo: } aumowowgewgqmwci: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\x30\56\x30\56\60\56\60"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto quamuugoocyyceec; } return $this->eecucukcqkqysiau(__FUNCTION__); quamuugoocyyceec: $yywgiquyoymymqwk = [ "\62\60\x38\x2e\x37\60\56\x32\64\67\56\61\x35\x37" => '', "\x31\67\x32\56\62\65\65\x2e\64\x38\56\61\x33\60" => '', "\x31\x37\x32\x2e\62\65\x35\x2e\64\70\56\x31\63\x31" => '', "\61\67\x32\x2e\62\x35\65\56\64\70\x2e\x31\63\62" => '', "\x31\67\x32\56\62\65\65\56\x34\70\56\x31\63\x33" => '', "\x31\67\62\x2e\x32\65\65\56\x34\x38\x2e\x31\x33\x34" => '', "\x31\x37\62\56\62\65\x35\x2e\x34\70\56\x31\63\65" => '', "\61\67\x32\56\62\65\65\x2e\x34\x38\x2e\x31\x33\66" => '', "\x31\67\62\x2e\x32\65\x35\x2e\x34\x38\56\61\x33\x37" => '', "\x31\67\62\x2e\62\x35\x35\56\64\x38\x2e\61\x33\x38" => '', "\x31\67\x32\56\62\x35\x35\x2e\x34\x38\56\x31\63\x39" => '', "\x31\x37\62\56\x32\65\65\x2e\64\x38\x2e\61\x34\x30" => '', "\61\x37\62\x2e\62\65\65\x2e\64\x38\56\x31\64\x31" => '', "\61\x37\x32\56\x32\65\65\x2e\x34\70\x2e\x31\64\62" => '', "\61\67\62\x2e\62\x35\x35\x2e\x34\70\x2e\x31\64\63" => '', "\61\67\62\56\62\65\65\x2e\x34\70\56\x31\64\x34" => '', "\x31\x37\62\56\x32\65\x35\56\x34\70\x2e\61\x34\x35" => '', "\61\x37\62\x2e\x32\x35\x35\56\64\70\x2e\61\64\66" => '', "\61\x37\62\x2e\x32\65\x35\56\64\70\56\61\x34\67" => '', "\x35\x32\x2e\x32\62\71\x2e\61\x32\62\56\x32\64\x30" => '', "\61\x30\64\x2e\x32\61\x34\56\67\62\x2e\61\60\61" => '', "\x31\63\x2e\x36\x36\56\67\x2e\61\61" => '', "\61\x33\56\x38\x35\x2e\x32\x34\56\70\x33" => '', "\x31\x33\56\70\x35\56\62\x34\x2e\71\x30" => '', "\x31\x33\x2e\x38\x35\x2e\x38\62\56\x32\66" => '', "\x34\60\56\x37\x34\56\x32\64\62\56\62\65\63" => '', "\64\x30\56\67\64\56\x32\64\63\56\x31\x33" => '', "\64\x30\x2e\x37\64\56\62\x34\63\x2e\61\x37\x36" => '', "\x31\60\x34\56\62\61\x34\x2e\x34\x38\56\x32\64\x37" => '', "\61\65\x37\x2e\x35\65\x2e\x31\x38\71\x2e\61\70\x39" => '', "\61\x30\64\x2e\62\x31\x34\56\61\61\x30\x2e\x31\63\65" => '', "\67\60\56\x33\67\x2e\x38\x33\56\62\x34\x30" => '', "\x36\65\x2e\65\62\x2e\x33\x36\56\x32\x35\60" => '', "\x31\63\56\67\x38\56\62\61\66\56\65\x36" => '', "\x35\62\56\61\66\62\x2e\x32\x31\x32\x2e\61\x36\x33" => '', "\x32\63\56\71\66\x2e\x33\64\56\61\x30\65" => '', "\66\65\56\65\62\56\61\61\63\x2e\x32\63\66" => '', "\x31\x37\62\x2e\x32\x35\x35\x2e\66\x31\56\x33\64" => '', "\x31\x37\62\x2e\x32\65\x35\56\x36\61\56\x33\65" => '', "\61\67\x32\56\x32\65\65\56\x36\x31\56\x33\x36" => '', "\x31\x37\x32\56\x32\65\65\x2e\66\61\x2e\63\67" => '', "\x31\x37\62\x2e\62\x35\x35\56\66\61\x2e\63\x38" => '', "\x31\67\62\x2e\x32\x35\x35\56\x36\x31\56\x33\x39" => '', "\x31\x37\x32\x2e\62\x35\x35\x2e\x36\61\x2e\x34\x30" => '', "\65\62\56\x32\x33\67\56\62\63\65\x2e\61\70\65" => '', "\x35\x32\x2e\62\63\67\56\x32\x35\60\56\x37\x33" => '', "\x35\x32\56\x32\x33\x37\x2e\x32\63\x36\56\x31\64\x35" => '', "\x31\x30\x34\x2e\64\61\x2e\x32\56\61\x39" => '', "\61\x39\61\56\62\63\x35\x2e\71\x38\56\x31\x36\64" => '', "\61\71\61\56\x32\63\x35\56\x39\x39\56\62\62\61" => '', "\x31\x39\x31\56\x32\63\62\x2e\x31\x39\x34\56\x35\x31" => '', "\x31\60\64\x2e\62\61\x31\x2e\x31\x34\63\56\x38" => '', "\61\60\64\x2e\x32\x31\x31\x2e\x31\66\65\x2e\x35\x33" => '', "\65\x32\56\x31\x37\x32\56\x31\64\56\x38\67" => '', "\64\60\x2e\70\63\56\70\71\x2e\62\61\x34" => '', "\65\x32\56\61\67\x35\56\65\x37\x2e\x38\61" => '', "\62\60\56\61\x38\x38\x2e\66\63\x2e\x31\65\61" => '', "\x32\x30\x2e\65\x32\56\x33\x36\x2e\x34\71" => '', "\x35\x32\x2e\62\64\x36\x2e\x31\x36\65\x2e\61\x35\x33" => '', "\x35\61\x2e\61\64\64\x2e\61\x30\62\x2e\x32\x33\x33" => '', "\61\x33\56\67\66\56\71\x37\56\x32\62\64" => '', "\61\60\x32\x2e\61\x33\63\56\61\x36\71\56\x36\66" => '', "\x35\62\56\x32\63\61\x2e\x31\71\71\56\61\x37\60" => '', "\61\x33\x2e\65\x33\56\x31\66\x32\56\x37" => '', "\x34\60\56\x31\x32\63\56\x32\x31\x38\56\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto qcssigmcayuyweiy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qcssigmcayuyweiy: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\125\123\105\122\137\101\x47\x45\116\x54"); if ($uowwycywwssskuys) { goto iymaiwqimisgacmk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iymaiwqimisgacmk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\43\x50\x69\x6e\147\x64\157\155\120\141\147\x65\123\x70\x65\145\x64\174\104\141\162\x65\x42\x6f\x6f\x73\164\174\107\157\x6f\147\x6c\145\x7c\x50\x54\123\x54\x7c\103\150\162\157\155\145\55\114\x69\147\x68\x74\x68\157\x75\163\x65\174\127\120\x20\122\x6f\143\153\145\164\43\x69", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\x55\x45\x53\x54\137\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto mugscgugcogcasue; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); mugscgugcogcasue: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto qyyyycwaookqaoke; } return ''; qyyyycwaookqaoke: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto ssywsaaqqaucesau; } return $magawcseesgowoeo; ssywsaaqqaucesau: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto ygcgoaokauigwuus; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); ygcgoaokauigwuus: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\x51\125\105\x53\x54\x5f\115\105\x54\x48\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto auumaoycmsmsgigs; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\150\x65\137\151\147\156\x6f\162\145\x64\137\x70\x61\162\x61\155\x65\x74\145\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ysiqakyaiooyscwy; } ksort($eyagkkkqkwcuygso); ysiqakyaiooyscwy: auumaoycmsmsgigs: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; qeuyekusasqmcqms: if (!(strpos($euueacigmgoqkimu, "\x2e\x2f") !== false || strpos($euueacigmgoqkimu, "\x2f\56") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu)) { goto ousmyagwsiooumos; } if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { goto ekoqieigyoeyauqa; } if (strpos($euueacigmgoqkimu, "\x2e\x2f") === 0) { goto ssagcgqaucssyego; } if (strpos($euueacigmgoqkimu, "\57\56\57") === 0) { goto acgqaeakoyasgkku; } if ("\57\x2e" === $euueacigmgoqkimu) { goto suqckoccuyeeymww; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\56\x2f") === 0) { goto yksywwikmeksikqc; } if ("\57\56\56" === $euueacigmgoqkimu) { goto iwkckkeimmeoquyq; } if ("\x2e" === $euueacigmgoqkimu || "\56\56" === $euueacigmgoqkimu) { goto qwisiamkmkkwucyo; } if (strpos($euueacigmgoqkimu, "\57", 1) !== false) { goto yiceawuuiusakwiq; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto sgocecweikecwwgq; yiceawuuiusakwiq: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\x2f", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); sgocecweikecwwgq: goto yqcusaeysomccaok; qwisiamkmkkwucyo: $euueacigmgoqkimu = ''; yqcusaeysomccaok: goto masakmomqmeocqqg; iwkckkeimmeoquyq: $euueacigmgoqkimu = "\x2f"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); masakmomqmeocqqg: goto yoqsigmoyaaceqky; yksywwikmeksikqc: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); yoqsigmoyaaceqky: goto giugwaeuwaomossq; suqckoccuyeeymww: $euueacigmgoqkimu = "\x2f"; giugwaeuwaomossq: goto sycougcyeqmeiagk; acgqaeakoyasgkku: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); sycougcyeqmeiagk: goto mqgeseysuwcaqwiy; ssagcgqaucssyego: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); mqgeseysuwcaqwiy: goto cuwcsamuuqyuyqsu; ekoqieigyoeyauqa: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); cuwcsamuuqyuyqsu: goto qeuyekusasqmcqms; ousmyagwsiooumos: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto mimacwyuueomgwwy; } $icwicymcioeyeyek["\160\x65\x72\155\x61\154\x69\x6e\153"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); mimacwyuueomgwwy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ksckqkmwiqggykke; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ksckqkmwiqggykke: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto igwkcikeyoowosoi; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); igwkcikeyoowosoi: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\162\154"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\x6d\145\x73\x73\141\x67\145" => $uamcoiueqaamsqma, "\143\157\x6e\164\145\170\164" => $icwicymcioeyeyek]; } }

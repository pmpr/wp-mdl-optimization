<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e2db183c14             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\x73\x73\154" => 0, "\167\160\x5f\x34\60\x34" => 1, "\x73\x65\x61\x72\x63\x68" => 1, "\x6d\x6f\x62\151\154\145" => 1, "\151\163\137\x68\164\x6d\x6c" => 1, "\x71\x75\x65\x72\x79\x5f\x73\x74\162\x69\x6e\147" => 1, "\144\x6f\x6e\x6f\x74\143\x61\x63\x68\145\160\141\x67\145" => 1, "\162\x65\x6a\x65\143\x74\x65\x64\137\x63\x6f\157\153\x69\145" => 1, "\155\x61\x6e\144\141\x74\x6f\162\x79\137\143\x6f\157\x6b\x69\x65" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; if (empty($ywmkwiwkosakssii["\x74\x65\x73\164\163"])) { goto ooqksueucyagyuoe; } $this->eqoemwqyimasccye((array) $ywmkwiwkosakssii["\x74\x65\x73\164\x73"]); ooqksueucyagyuoe: if (!(!isset($ywmkwiwkosakssii["\x63\x6f\x6f\153\x69\145\163"]) && !empty($_COOKIE) && is_array($_COOKIE))) { goto osmmoyqkqoucsgow; } $ywmkwiwkosakssii["\x63\157\157\153\151\145\163"] = $_COOKIE; osmmoyqkqoucsgow: if (!(!isset($ywmkwiwkosakssii["\x70\x6f\x73\164"]) && !empty($_POST) && is_array($_POST))) { goto wgiygcmqaokywuqa; } $ywmkwiwkosakssii["\x70\157\163\164"] = $_POST; wgiygcmqaokywuqa: if (!(!isset($ywmkwiwkosakssii["\x67\145\x74"]) && !empty($_GET) && is_array($_GET))) { goto iauwuugggmegwisk; } $ywmkwiwkosakssii["\x67\145\x74"] = $_GET; iauwuugggmegwisk: $this->get = !empty($ywmkwiwkosakssii["\x67\x65\164"]) && is_array($ywmkwiwkosakssii["\x67\145\164"]) ? $ywmkwiwkosakssii["\147\145\164"] : []; $this->post = !empty($ywmkwiwkosakssii["\160\x6f\163\164"]) && is_array($ywmkwiwkosakssii["\160\157\163\164"]) ? $ywmkwiwkosakssii["\x70\x6f\x73\x74"] : []; $this->cookies = !empty($ywmkwiwkosakssii["\143\157\x6f\x6b\151\145\x73"]) && is_array($ywmkwiwkosakssii["\x63\157\x6f\x6b\151\145\163"]) ? $ywmkwiwkosakssii["\x63\157\157\153\151\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto aukucaieceiwesmm; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\x5f\x63\165\163\164\157\x6d\x69\172\145" => '']); aukucaieceiwesmm: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { if (!$this->kgkoeoeseyuugaao()) { goto kqyoakickmseyyeq; } $this->yauwooaeicgosquo("\122\x6f\142\x6f\x74\x73\56\x74\x78\164\x20\x6f\162\x20\56\150\164\x61\143\143\145\163\x73\40\146\151\x6c\x65\x20\x69\x73\40\x65\x78\x63\154\165\144\x65\144\x2e"); return false; kqyoakickmseyyeq: if (!$this->gymgcceeqssmesiu()) { goto micceocwuwkyusic; } $this->yauwooaeicgosquo("\120\110\120\x2c\x20\130\115\x4c\54\40\x6f\x72\40\130\123\x4c\x20\x66\151\154\145\x20\151\x73\x20\x65\x78\x63\154\165\144\x65\144\x2e"); return false; micceocwuwkyusic: if (!$this->goecwaaykqoaaagg()) { goto iwueukqcywkiyqge; } $this->yauwooaeicgosquo("\x41\x64\x6d\x69\x6e\40\157\162\x20\x41\x4a\101\130\40\125\122\114\x20\151\163\x20\x65\x78\x63\154\x75\144\x65\144\x2e"); return false; iwueukqcywkiyqge: if (!$this->sgsscqasgeyeicoe()) { goto ykwasaaoeeiuomim; } $this->yauwooaeicgosquo("\x41\144\x6d\x69\156\x20\157\162\x20\x41\112\x41\x58\x20\125\122\x4c\40\151\163\40\145\170\x63\x6c\x75\x64\145\x64\x2e"); return false; ykwasaaoeeiuomim: if ($this->gooeyogikcusgwuu()) { goto acggikioyeueeowg; } $this->yauwooaeicgosquo("\x52\145\x71\x75\145\x73\x74\x20\x6d\145\x74\x68\157\144\x20\x69\163\40\x6e\x6f\x74\x20\141\x6c\154\157\167\145\144\56\x20\120\141\147\x65\x20\143\x61\x6e\156\157\164\40\142\x65\40\x63\141\x63\150\x65\144\x2e", ["\162\145\161\x75\145\x73\x74\x5f\x6d\x65\164\x68\x6f\144" => $this->ciyocmkwssocskiy()]); return false; acggikioyeueeowg: if ($this->cskwmweqysskwckg()) { goto cwikoaeqmmoimmso; } $this->lastError = []; return true; cwikoaeqmmoimmso: $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if ($uiewakwqscemywuo["\163\165\x63\143\x65\x73\163"]) { goto egaymskkosukqeao; } $this->yauwooaeicgosquo("\116\157\x20\143\x6f\156\146\151\147\40\x66\151\154\x65\40\x66\157\x75\156\144", ["\x63\157\156\x66\x69\147\x5f\160\x61\164\150" => $uiewakwqscemywuo["\x70\x61\164\x68"]]); return false; egaymskkosukqeao: if (!($this->cskwmweqysskwckg("\x71\165\145\x72\171\137\163\164\162\151\x6e\x67") && !$this->koguieumooaesyww())) { goto kaiesowkgwogqseg; } $this->yauwooaeicgosquo("\x51\165\x65\162\x79\x20\x73\164\162\151\x6e\147\40\x55\x52\x4c\40\151\163\x20\x65\170\x63\x6c\x75\x64\145\144\56", $_GET); return false; kaiesowkgwogqseg: if (!($this->cskwmweqysskwckg("\x73\163\154") & !$this->eqwgocqwoyyykwke())) { goto kicwiowcogmauwiy; } $this->yauwooaeicgosquo("\123\123\114\40\x63\x61\x63\150\x65\40\x6e\157\164\x20\x61\x70\x70\x6c\151\x65\x64\x20\x74\157\x20\160\141\147\x65\x2e"); return false; kicwiowcogmauwiy: if (!($this->cskwmweqysskwckg("\x75\162\151") && !$this->qweiomkkuikwugks())) { goto cwswueuqoamqasya; } $this->yauwooaeicgosquo("\120\141\147\x65\40\x69\x73\x20\x65\x78\x63\154\165\x64\145\x64\56"); return false; cwswueuqoamqasya: if (!($this->cskwmweqysskwckg("\x72\145\x6a\145\143\x74\x65\x64\x5f\143\x6f\x6f\x6b\151\145") && $this->cokqaygwwygweuyk())) { goto kgmeiwiakwicgkkk; } $this->yauwooaeicgosquo("\x45\170\x63\154\x75\x64\145\x64\x20\143\157\x6f\153\151\145\40\x66\157\x75\x6e\144\x2e", ["\x65\x78\143\x6c\165\144\145\144\x5f\143\157\157\153\151\x65\x73" => $this->cokqaygwwygweuyk()]); return false; kgmeiwiakwicgkkk: if (!($this->cskwmweqysskwckg("\155\x61\156\x64\x61\164\x6f\162\171\x5f\143\157\157\153\151\x65") && !$this->ucigsowcwassokog() && is_array($this->qgymyeqwqaiwmmea()))) { goto suuskagowwgsouqw; } $this->yauwooaeicgosquo("\115\x69\163\163\151\156\147\x20\x6d\141\156\x64\141\164\157\162\171\40\143\157\157\153\151\145\72\x20\160\141\x67\145\40\156\x6f\164\x20\x70\162\x6f\143\145\163\x73\145\144\56", ["\155\x69\x73\163\x69\156\x67\137\x63\x6f\157\x6b\x69\x65\x73" => $this->qgymyeqwqaiwmmea()]); return false; suuskagowwgsouqw: if (!($this->cskwmweqysskwckg("\x75\163\145\162\x5f\x61\147\145\156\164") && !$this->mqiqsuksgyekwkii())) { goto omykokikgocoikec; } $this->yauwooaeicgosquo("\125\x73\145\162\40\101\147\x65\x6e\164\x20\x69\x73\x20\145\x78\x63\154\x75\x64\145\144\x2e", ["\x75\163\x65\162\137\x61\x67\x65\156\164" => $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\x55\123\x45\122\137\x41\107\105\116\x54")]); return false; omykokikgocoikec: $this->lastError = []; return true; } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { if (!(strlen($moooemyaqewumiay) <= 255)) { goto csieaismmmocyacu; } $this->yauwooaeicgosquo("\x42\x75\x66\146\x65\162\40\143\157\156\x74\x65\x6e\164\40\165\x6e\144\145\162\x20\62\x35\x35\x20\x63\x68\141\x72\x61\143\164\x65\x72\x73\x2e"); return false; csieaismmmocyacu: if (!(http_response_code() !== 200)) { goto aquqkiggamaoegoo; } $this->yauwooaeicgosquo("\120\141\x67\x65\40\x69\x73\40\x6e\157\164\40\141\x20\62\60\60\40\x48\x54\124\x50\x20\162\x65\163\x70\157\156\163\145\40\141\x6e\x64\40\143\141\x6e\x6e\x6f\x74\x20\142\145\40\143\141\x63\x68\145\144\x2e"); return false; aquqkiggamaoegoo: if (!($this->cskwmweqysskwckg("\x64\157\x6e\157\164\x6f\160\164\x69\155\x69\172\145\160\141\147\145") && $this->cowcgqokiosgaqic())) { goto mykiyqcqiegkiqys; } $this->yauwooaeicgosquo("\104\x4f\116\124\117\120\x54\111\x4d\111\132\105\104\120\x41\x47\x45\x20\x69\x73\40\144\x65\146\151\156\145\x64\56\40\120\141\x67\x65\x20\143\141\156\156\157\x74\40\x62\x65\40\143\141\143\150\x65\144\56"); return false; mykiyqcqiegkiqys: if (!($this->cskwmweqysskwckg("\x77\x70\137\x34\x30\64") && $this->kmmyuiwaogukwqqi())) { goto agemwookwseyycqo; } $this->yauwooaeicgosquo("\127\x50\40\x34\60\64\x20\160\141\x67\145\40\151\x73\x20\x65\x78\x63\x6c\x75\x64\145\144\56"); return false; agemwookwseyycqo: if (!($this->cskwmweqysskwckg("\x73\145\x61\162\x63\x68") && $this->gouusicsisumuiei() && !$this->smgkuqwqwmcsaauk())) { goto cquecqekuucwoumw; } $this->yauwooaeicgosquo("\x53\x65\141\x72\x63\150\40\x70\x61\147\145\x20\x69\163\40\x65\170\x63\154\x75\144\145\144\x2e"); return false; cquecqekuucwoumw: if (!$this->cskwmweqysskwckg("\x69\x73\x5f\x68\x74\x6d\x6c")) { goto owuuuiekkaeoeacq; } if (!($this->cmaecekuqkwmemms("\122\105\x53\x54\137\x52\x45\x51\x55\105\x53\x54") || $this->gaiygescoqgyusaa())) { goto koiscokkkaimiecq; } unset($this->tests["\151\x73\137\x68\x74\x6d\x6c"]); koiscokkkaimiecq: owuuuiekkaeoeacq: if (!($this->cskwmweqysskwckg("\151\163\137\150\164\155\154") && !$this->qmyusgwkaqieouwi($moooemyaqewumiay))) { goto saauykgakaeiyoua; } $this->yauwooaeicgosquo("\x4e\157\x20\143\154\x6f\163\x69\x6e\x67\40\x3c\57\150\164\155\154\x3e\40\167\x61\163\x20\146\157\165\156\x64\56"); return false; saauykgakaeiyoua: $this->lastError = []; return true; } public function iekaosoqsgqsysoo() : bool { return (bool) apply_filters("\x70\162\137\x6f\160\164\151\155\151\x7a\x61\164\151\157\x6e\x5f\141\154\x6c\x6f\x77\137\164\x6f\137\163\164\x61\x72\164\x5f\x62\x75\x66\146\145\x72\137\160\162\x6f\x63\x65\163\x73", false); } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg(string $ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto qwemkcoaseywkuuc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]) && $ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]; goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); mqimkwickkgqqeoi: return apply_filters("\160\162\137\x6f\160\164\151\x6d\151\172\141\164\151\x6f\x6e\137\150\141\x73\x5f{$ymqmyyeuycgmigyo}\x5f\164\145\163\164", $umuecysoywoumgwo); } public function eqoemwqyimasccye(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function qmyusgwkaqieouwi(string $moooemyaqewumiay) : bool { return (bool) preg_match("\x2f\74\x5c\163\52\134\x2f\x5c\x73\x2a\x68\164\x6d\x6c\134\163\52\76\57\151", $moooemyaqewumiay); } public function gaiygescoqgyusaa() : bool { global $wp_rewrite; $uckmmkmoeikwsiqg = "\57\50\77\72\56\x2b\x2f\x29\77" . $wp_rewrite->feed_base . "\50\77\x3a\57\x28\77\72\x2e\x2b\57\x3f\51\x3f\51\77\44"; return (bool) preg_match("\x23\x5e\50{$uckmmkmoeikwsiqg}\x29\x24\x23\151", $this->gygiweeesqqckgme()); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kwyimqumkuuyaiku; } return $this->eecucukcqkqysiau(__FUNCTION__); kwyimqumkuuyaiku: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto gkqiqaqecmoogmaa; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); gkqiqaqecmoogmaa: $ucasskoyoewwmmii = ["\x72\x6f\142\157\x74\163\x2e\164\170\x74", "\56\x68\164\141\143\x63\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto gsymkkskwsgggoic; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gsymkkskwsgggoic: ceiuqsiqgiuiekem: } mceucsaeouuwyumm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ugykmcouiwiscoqu; } return $this->eecucukcqkqysiau(__FUNCTION__); ugykmcouiwiscoqu: $magawcseesgowoeo = $this->aakgigyaookyiaqk(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($magawcseesgowoeo && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $magawcseesgowoeo, $meyiiwcswqmuggyg))) { goto wiwoiyoakywqyaiy; } if (!($meyiiwcswqmuggyg[0] === $magawcseesgowoeo)) { goto isewysikysqewkis; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); isewysikysqewkis: wiwoiyoakywqyaiy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto igmmqwyawcuuckkq; } return $this->eecucukcqkqysiau(__FUNCTION__); igmmqwyawcuuckkq: $iyiwooigkweeewey = $this->cesqesaeyaoysqaa(); if ($iyiwooigkweeewey) { goto eouwacqiommmeaqc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eouwacqiommmeaqc: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\144\145\x78\56\x70\x68\160")) { goto sqwuqegeiisoiiuq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); sqwuqegeiisoiiuq: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\x70\x68\160" => 1, "\x78\x6d\x6c" => 1, "\x78\163\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || $this->cmaecekuqkwmemms("\x44\x4f\x49\116\107\x5f\101\x4a\x41\130"); } public function wymyeyweagqomiim() : bool { return in_array(strtolower((string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\x50\123")), ["\x6f\156", "\x31"]) || "\x34\64\63" === (string) $this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\105\x52\x56\x45\x52\137\x50\x4f\122\124"); } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\160\x5f\143\x75\163\164\x6f\x6d\151\172\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\x48\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto uscokkmquayiukag; } return $this->eecucukcqkqysiau(__FUNCTION__); uscokkmquayiukag: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto ykqsuiyyosyeyscc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ykqsuiyyosyeyscc: $yccgiaiouekkouay = ["\163" => 1, "\x6c\x61\x6e\147" => 1, "\x70\x65\162\155\141\154\151\156\153\137\156\x61\x6d\145" => 1, "\x6c\160\55\x76\141\162\x69\x61\x74\x69\157\156\55\x69\x64" => 1, "\x58\x44\x45\x42\x55\x47\x5f\123\105\x53\x53\x49\x4f\x4e\137\x53\x54\x41\122\124" => 1]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto ugogoekeckgcmuaw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); ugogoekeckgcmuaw: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\x5f\161\165\x65\x72\x79\x5f\x73\x74\x72\x69\x6e\147\x73"); if ($yccgiaiouekkouay) { goto egesuwkqkmaigaoe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egesuwkqkmaigaoe: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto syusgosewwkoagoq; } return $this->eecucukcqkqysiau(__FUNCTION__); syusgosewwkoagoq: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto mcqucouuiuoagqwc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); mcqucouuiuoagqwc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto eweaaismksecwagy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eweaaismksecwagy: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto owgsameoayaogsma; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; owgsameoayaogsma: oeamoqweiueaueay: } icumkkykaoqycqqu: if (empty($eiocugauqgouiuyi)) { goto kyiwsiakwgiwouyi; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); kyiwsiakwgiwouyi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function qgymyeqwqaiwmmea() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto awgmegueeqeyqamu; } return $this->eecucukcqkqysiau(__FUNCTION__); awgmegueeqeyqamu: $aaswuawqmusoucsw = $this->aceaeommyuooiqge()->mqoiyygukoqkmwie(); if ($aaswuawqmusoucsw) { goto gqimwsyemoewagcy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); gqimwsyemoewagcy: $yiycakoikkyuokgk = array_flip(explode("\174", $this->aceaeommyuooiqge()->get("\x63\141\x63\x68\x65\137\x6d\x61\x6e\x64\x61\164\x6f\162\171\x5f\143\157\157\x6b\151\x65\163"))); if ($this->wemyikwikgwqwuoc()) { goto aoaqwygkaagiuuws; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yiycakoikkyuokgk); aoaqwygkaagiuuws: foreach (array_keys($this->wemyikwikgwqwuoc()) as $askcwwaauwqisyeq) { if (!preg_match($aaswuawqmusoucsw, $askcwwaauwqisyeq)) { goto qkyciyiwkmgkmquk; } unset($yiycakoikkyuokgk[$askcwwaauwqisyeq]); qkyciyiwkmgkmquk: maaisuqwkymeguys: } esagiiawomyacuiw: if (!empty($yiycakoikkyuokgk)) { goto sksgcusuyqcwqswe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); sksgcusuyqcwqswe: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], array_flip($yiycakoikkyuokgk)); } public function cowcgqokiosgaqic() : bool { return !apply_filters("\x70\162\137\157\160\164\151\x6d\151\172\x61\164\151\157\x6e\137\157\x76\x65\162\x72\x69\x64\x65\137\144\157\x6e\x74\137\157\160\164\x69\155\151\172\145", $this->cmaecekuqkwmemms("\120\122\137\x4f\x50\124\111\115\x49\132\101\124\111\117\116\x5f\104\x4f\x4e\x54\x5f\x4f\x50\x54\x49\x4d\111\132\105", false)); } public function kmmyuiwaogukwqqi() : bool { return function_exists("\151\163\137\x34\60\x34") || is_404(); } public function gouusicsisumuiei() : bool { return function_exists("\151\x73\137\x73\x65\x61\x72\x63\150") && is_search(); } public function smgkuqwqwmcsaauk() : bool { return !apply_filters("\x70\162\137\157\160\164\151\155\x69\172\141\x74\x69\157\x6e\x5f\157\x70\x74\x69\155\x69\172\145\137\x73\145\x61\x72\x63\150", false); } public function eqwgocqwoyyykwke() : bool { return !$this->wymyeyweagqomiim() || $this->aceaeommyuooiqge()->get("\143\x61\143\150\145\x5f\x73\163\x6c"); } public function yaswyamuyysomccg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ayceeyuocgowqwsa; } return $this->eecucukcqkqysiau(__FUNCTION__); ayceeyuocgowqwsa: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto iuwkiyimqmgguose; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); iuwkiyimqmgguose: if (!$this->aceaeommyuooiqge()->get("\x6d\157\142\151\154\145\x5f\x63\141\143\150\x65")) { goto yggseoaommssscwo; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); yggseoaommssscwo: $wayquiskgeuoqamk = "\62\56\60\134\x20\x4d\x4d\x50\174\x32\x34\x30\x78\63\62\x30\174\64\x30\x30\130\62\64\x30\x7c\101\166\141\156\x74\107\x6f\x7c\x42\154\141\x63\153\102\x65\162\x72\171\x7c\102\x6c\141\172\x65\162\174\x43\x65\x6c\x6c\160\x68\157\x6e\145\x7c\x44\141\156\x67\x65\162\x7c\x44\157\x43\157\115\x6f\174\105\154\x61\x69\x6e\145\57\63\56\x30\174\x45\165\x64\157\162\141\127\145\x62\x7c\107\x6f\x6f\x67\154\145\x62\x6f\164\55\115\157\142\151\154\x65\174\x68\151\x70\164\x6f\x70\x7c\111\x45\115\x6f\x62\x69\x6c\x65\174\113\131\x4f\x43\x45\122\x41\57\127\130\63\x31\x30\x4b\174\114\x47\57\x55\x39\71\x30\174\115\x49\104\120\x2d\x32\x2e\174\115\115\x45\x46\62\x30\174\115\x4f\x54\55\126\x7c\x4e\x65\164\x46\162\x6f\156\164\x7c\x4e\x65\x77\x74\174\x4e\151\x6e\164\145\156\x64\157\x5c\x20\x57\151\x69\x7c\116\151\164\162\157\174\x4e\x6f\153\151\x61\174\x4f\x70\x65\x72\141\134\x20\115\151\x6e\151\174\x50\x61\x6c\x6d\x7c\120\154\141\171\123\164\141\x74\x69\157\156\x5c\40\120\157\162\x74\141\142\154\x65\174\x70\157\x72\x74\141\154\x6d\x6d\155\x7c\x50\162\x6f\170\x69\156\145\x74\x7c\120\x72\157\x78\151\x4e\145\164\174\123\x48\101\x52\x50\x2d\124\121\55\107\130\61\60\x7c\x53\x48\107\x2d\x69\x39\60\60\x7c\x53\155\x61\x6c\154\174\123\x6f\156\171\x45\x72\151\143\x73\x73\157\156\x7c\123\171\155\x62\151\141\x6e\134\40\117\123\174\123\x79\155\142\x69\x61\x6e\117\x53\174\124\123\62\61\x69\55\61\x30\x7c\125\x50\x2e\x42\x72\157\167\163\x65\x72\x7c\x55\120\x2e\114\151\x6e\153\174\x77\x65\142\117\123\174\127\151\x6e\144\157\x77\163\x5c\x20\103\105\x7c\x57\x69\x6e\x57\x41\120\174\x59\141\x68\157\x6f\123\145\145\153\145\162\57\115\x31\x41\61\55\x52\62\104\x32\x7c\x69\x50\150\157\156\145\x7c\x69\x50\x6f\x64\x7c\101\x6e\144\162\x6f\x69\x64\x7c\102\154\x61\143\153\x42\145\162\162\171\71\x35\x33\60\x7c\114\107\x2d\124\x55\x39\x31\65\x5c\40\x4f\x62\151\x67\x6f\174\114\107\x45\x5c\x20\x56\130\174\167\145\x62\x4f\x53\174\116\x6f\x6b\151\x61\65\x38\x30\60"; if (!preg_match("\43\x5e\x2e\x2a\50{$wayquiskgeuoqamk}\x29\56\x2a\x23\151", $uowwycywwssskuys)) { goto aeiemwacaiygemmg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); aeiemwacaiygemmg: $wayquiskgeuoqamk = "\x77\63\x63\x5c\40\174\x77\x33\x63\x2d\x7c\x61\143\163\x2d\x7c\141\154\141\x76\174\141\x6c\x63\141\x7c\141\155\x6f\151\174\x61\x75\144\151\174\141\166\141\x6e\174\x62\145\156\161\174\x62\x69\162\144\174\142\x6c\x61\143\174\x62\x6c\x61\172\x7c\x62\x72\145\x77\174\143\145\x6c\154\174\143\x6c\144\x63\174\143\155\144\55\x7c\144\x61\156\147\174\144\157\x63\157\174\x65\x72\x69\143\174\x68\x69\160\x74\174\150\164\x63\137\174\151\156\x6e\x6f\174\x69\x70\x61\x71\174\151\x70\x6f\x64\x7c\x6a\151\x67\163\x7c\153\x64\144\151\x7c\x6b\x65\x6a\x69\174\154\145\156\157\174\154\x67\x2d\143\x7c\154\x67\55\144\x7c\154\x67\x2d\147\174\154\147\145\55\174\154\147\x2f\x75\x7c\x6d\x61\165\151\174\155\141\170\157\174\x6d\x69\x64\160\174\155\151\x74\x73\174\x6d\x6d\x65\146\x7c\155\157\x62\x69\174\x6d\x6f\x74\x2d\174\155\x6f\164\157\174\x6d\x77\142\160\x7c\x6e\145\x63\x2d\x7c\x6e\145\x77\164\x7c\x6e\157\x6b\x69\174\160\141\x6c\x6d\x7c\x70\141\156\141\174\x70\x61\x6e\164\x7c\x70\x68\151\x6c\x7c\x70\x6c\x61\171\x7c\x70\157\x72\164\174\x70\162\x6f\x78\174\161\167\141\x70\174\x73\141\x67\145\174\163\141\x6d\x73\x7c\x73\141\156\x79\x7c\x73\143\x68\x2d\x7c\x73\145\143\x2d\x7c\x73\x65\156\144\174\163\x65\x72\151\174\x73\x67\x68\x2d\x7c\x73\150\141\x72\x7c\x73\151\x65\x2d\x7c\163\151\145\x6d\x7c\163\x6d\x61\x6c\x7c\163\155\141\162\x7c\x73\x6f\156\171\174\x73\x70\x68\x2d\174\163\x79\x6d\x62\x7c\x74\x2d\x6d\157\x7c\164\145\154\151\174\164\x69\x6d\55\x7c\x74\x6f\x73\150\x7c\x74\x73\155\x2d\174\x75\x70\147\x31\x7c\165\x70\163\151\174\166\153\55\166\174\x76\157\x64\141\174\167\x61\160\55\174\167\141\160\141\x7c\167\141\160\151\x7c\x77\x61\160\160\x7c\x77\141\x70\x72\174\167\145\142\143\x7c\x77\x69\156\x77\x7c\167\151\156\x77\174\x78\x64\141\134\x20\x7c\170\144\x61\x2d"; if (!preg_match("\43\x5e\x28{$wayquiskgeuoqamk}\51\56\x2a\x23\151", $uowwycywwssskuys)) { goto yyqygaokeccgugos; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yyqygaokeccgugos: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); } public function mqiqsuksgyekwkii() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oeusomaaeekakake; } return $this->eecucukcqkqysiau(__FUNCTION__); oeusomaaeekakake: $uowwycywwssskuys = $this->ckaoiscoyuuosace(); if ($uowwycywwssskuys) { goto kwuckkyqaygwgcuy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kwuckkyqaygwgcuy: $mqsuiayuwmwqaqwm = $this->aceaeommyuooiqge()->get("\143\141\x63\x68\x65\137\162\x65\x6a\145\143\164\137\165\141"); if ($mqsuiayuwmwqaqwm) { goto giuccakymqymawgk; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); giuccakymqymawgk: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], !preg_match("\x23{$mqsuiayuwmwqaqwm}\43", $uowwycywwssskuys)); } public function qweiomkkuikwugks() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sicgyiyiocyygkoc; } return $this->eecucukcqkqysiau(__FUNCTION__); sicgyiyiocyygkoc: $escsaeeosigewsme = $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\145\x5f\x72\145\x6a\x65\x63\x74\x5f\x75\162\x69"); if ($escsaeeosigewsme) { goto cyosacayacumuaks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); cyosacayacumuaks: $yciaosuiyeieceug = !preg_match("\x23\x5e\x28{$escsaeeosigewsme}\x29\44\x23\151", $this->cesqesaeyaoysqaa()); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function ckaoiscoyuuosace() { return $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\x55\x53\x45\122\137\101\107\105\x4e\x54"); } public function mmscegoieayuaguo() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto ikcwmsgocyuqiumc; } return $this->eecucukcqkqysiau(__FUNCTION__); ikcwmsgocyuqiumc: $yygmoeguaqyumuui = [ "\x48\124\124\120\x5f\103\106\137\x43\117\116\116\x45\x43\x54\x49\116\x47\137\111\x50", "\110\x54\124\120\x5f\x43\x4c\111\x45\116\124\137\x49\120", "\110\x54\124\120\x5f\x58\x5f\106\x4f\122\127\x41\x52\104\x45\104\x5f\x46\117\122", "\x48\x54\124\120\x5f\130\x5f\106\x4f\x52\127\101\x52\x44\x45\x44", "\x48\124\124\120\x5f\x58\x5f\x43\x4c\125\123\124\105\x52\x5f\x43\x4c\111\105\116\124\x5f\x49\120", "\x48\x54\124\x50\x5f\x58\137\x52\105\x41\x4c\137\111\120", "\110\124\x54\x50\137\106\x4f\122\127\x41\122\x44\105\104\x5f\106\117\122", "\x48\124\x54\x50\x5f\106\117\x52\127\101\x52\104\x45\x44", "\x52\105\115\117\x54\x45\x5f\101\104\104\122", ]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($kucumcusyyckayas = $this->aceaeommyuooiqge()->iuocyymeygwuweag($uusmaiomayssaecw))) { goto aumowowgewgqmwci; } $kucumcusyyckayas = explode("\x2c", $kucumcusyyckayas); $kucumcusyyckayas = end($kucumcusyyckayas); if (!(false !== filter_var($kucumcusyyckayas, FILTER_VALIDATE_IP))) { goto kyiuewcikkqagwwg; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $kucumcusyyckayas); kyiuewcikkqagwwg: aumowowgewgqmwci: gcucsowqoeiwmyyq: } eqiiaokcgakicaye: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], "\60\56\60\56\60\x2e\x30"); } public function ucigsowcwassokog() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oasggeyceiyieuuo; } return $this->eecucukcqkqysiau(__FUNCTION__); oasggeyceiyieuuo: $yywgiquyoymymqwk = [ "\62\x30\x38\x2e\x37\60\56\x32\64\67\56\61\x35\67" => '', "\x31\x37\x32\x2e\62\65\x35\x2e\64\x38\56\x31\x33\60" => '', "\x31\x37\62\x2e\62\x35\x35\56\64\x38\56\x31\x33\61" => '', "\x31\x37\62\56\x32\x35\65\56\64\x38\56\x31\63\x32" => '', "\61\67\62\x2e\62\65\x35\56\64\70\x2e\61\x33\x33" => '', "\61\67\62\56\x32\65\65\56\x34\x38\56\61\x33\x34" => '', "\61\x37\x32\x2e\62\65\65\x2e\64\70\x2e\61\63\x35" => '', "\x31\67\62\x2e\62\65\x35\x2e\64\x38\56\61\63\x36" => '', "\61\67\x32\x2e\62\65\65\x2e\64\x38\56\61\x33\67" => '', "\x31\x37\x32\x2e\62\65\x35\x2e\64\x38\x2e\x31\x33\70" => '', "\61\67\x32\56\62\65\65\x2e\x34\x38\56\61\x33\x39" => '', "\61\x37\x32\x2e\x32\65\65\x2e\64\70\x2e\x31\64\x30" => '', "\x31\x37\x32\x2e\62\65\65\x2e\64\70\56\61\64\x31" => '', "\61\x37\62\x2e\62\65\x35\56\x34\x38\x2e\x31\x34\x32" => '', "\61\67\x32\56\62\65\x35\x2e\x34\70\x2e\61\x34\x33" => '', "\61\x37\62\x2e\62\x35\x35\x2e\64\x38\x2e\61\x34\x34" => '', "\x31\67\x32\56\62\65\x35\x2e\x34\x38\x2e\x31\x34\x35" => '', "\x31\x37\x32\56\x32\65\x35\56\64\x38\x2e\61\x34\x36" => '', "\61\x37\x32\x2e\62\x35\x35\x2e\x34\70\56\61\64\67" => '', "\65\x32\x2e\62\x32\71\x2e\61\62\62\56\x32\x34\60" => '', "\61\x30\64\x2e\x32\61\64\x2e\67\x32\x2e\61\60\61" => '', "\x31\63\x2e\x36\66\x2e\67\x2e\61\x31" => '', "\61\x33\56\x38\65\x2e\x32\64\x2e\x38\63" => '', "\61\63\x2e\70\65\56\x32\x34\56\x39\60" => '', "\x31\x33\56\70\65\x2e\x38\x32\56\x32\66" => '', "\x34\60\x2e\x37\64\x2e\62\x34\x32\x2e\62\x35\63" => '', "\64\x30\x2e\67\x34\56\62\x34\x33\x2e\x31\x33" => '', "\64\60\56\x37\64\x2e\62\x34\x33\x2e\61\x37\x36" => '', "\61\60\x34\x2e\x32\61\x34\56\64\x38\56\x32\64\x37" => '', "\61\65\x37\56\65\65\x2e\61\70\71\56\x31\70\x39" => '', "\61\x30\x34\x2e\62\61\x34\56\x31\61\60\56\61\x33\65" => '', "\67\60\56\x33\x37\x2e\70\63\x2e\62\x34\x30" => '', "\66\x35\x2e\65\x32\x2e\x33\x36\56\62\x35\60" => '', "\61\x33\56\x37\70\x2e\62\61\x36\56\65\x36" => '', "\65\x32\56\61\66\x32\x2e\x32\61\x32\56\61\66\63" => '', "\62\63\x2e\71\x36\x2e\63\x34\56\x31\x30\x35" => '', "\x36\65\x2e\65\62\x2e\61\61\x33\x2e\62\63\x36" => '', "\x31\67\62\56\62\65\x35\56\66\x31\56\x33\x34" => '', "\61\x37\x32\x2e\x32\65\x35\x2e\66\x31\x2e\x33\x35" => '', "\61\67\x32\56\62\65\x35\56\x36\x31\56\x33\x36" => '', "\x31\67\x32\56\x32\65\x35\56\x36\61\x2e\63\67" => '', "\61\x37\62\x2e\x32\65\65\56\x36\61\56\63\70" => '', "\61\x37\62\x2e\x32\x35\x35\x2e\x36\61\x2e\x33\71" => '', "\61\67\62\56\x32\x35\x35\56\66\61\x2e\64\60" => '', "\x35\62\x2e\x32\63\67\x2e\x32\x33\65\56\61\70\65" => '', "\65\x32\56\62\63\67\x2e\62\65\x30\56\x37\63" => '', "\x35\x32\56\x32\63\67\x2e\x32\63\66\56\x31\64\65" => '', "\61\x30\x34\56\64\x31\x2e\62\x2e\x31\x39" => '', "\61\x39\x31\56\62\63\x35\x2e\x39\x38\56\x31\66\64" => '', "\61\x39\x31\56\x32\x33\65\x2e\71\71\56\62\62\61" => '', "\x31\71\61\56\x32\x33\62\x2e\x31\71\x34\x2e\x35\x31" => '', "\x31\60\x34\x2e\x32\x31\61\56\x31\x34\x33\56\70" => '', "\61\60\64\x2e\x32\x31\61\x2e\x31\66\x35\56\x35\63" => '', "\x35\62\56\61\67\x32\56\x31\x34\56\x38\67" => '', "\x34\x30\56\x38\63\x2e\x38\71\x2e\62\x31\x34" => '', "\x35\x32\x2e\61\x37\x35\x2e\65\x37\56\70\61" => '', "\62\x30\x2e\x31\70\x38\56\x36\x33\56\x31\x35\61" => '', "\x32\x30\x2e\65\62\x2e\x33\66\x2e\x34\x39" => '', "\x35\x32\56\62\64\66\x2e\61\x36\x35\x2e\x31\x35\63" => '', "\x35\x31\56\61\64\x34\x2e\x31\60\62\56\62\x33\63" => '', "\61\x33\x2e\67\x36\x2e\x39\x37\56\x32\62\64" => '', "\61\x30\62\x2e\61\63\63\x2e\61\66\x39\56\x36\x36" => '', "\65\x32\x2e\x32\x33\61\56\61\x39\71\x2e\61\67\x30" => '', "\61\63\56\x35\63\56\x31\66\x32\56\67" => '', "\x34\60\56\x31\62\x33\x2e\62\61\70\x2e\71\64" => '', ]; if (!isset($yywgiquyoymymqwk[$this->mmscegoieayuaguo()])) { goto omuauimgkygcecsc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); omuauimgkygcecsc: $uowwycywwssskuys = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\125\x53\x45\122\137\101\x47\x45\x4e\x54"); if ($uowwycywwssskuys) { goto wwcqoeuwskquakwy; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); wwcqoeuwskquakwy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], (bool) preg_match("\x23\x50\x69\156\x67\x64\x6f\x6d\x50\x61\147\145\x53\160\145\x65\144\174\104\x61\162\x65\102\x6f\x6f\x73\x74\x7c\x47\157\x6f\147\x6c\145\x7c\120\x54\123\x54\x7c\103\x68\162\157\155\145\55\114\151\x67\150\x74\150\x6f\165\163\x65\x7c\x57\120\x20\x52\157\143\153\x65\164\43\151", $uowwycywwssskuys)); } public function aakgigyaookyiaqk() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\105\121\125\105\x53\x54\137\x55\x52\x49", ''); if (!$iyiwooigkweeewey) { goto quamuugoocyyceec; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); quamuugoocyyceec: return $iyiwooigkweeewey; } public function gygiweeesqqckgme() : string { $magawcseesgowoeo = $this->cesqesaeyaoysqaa(); $magawcseesgowoeo = $this->sqmacmcaaqkqsoqq($magawcseesgowoeo); if ($magawcseesgowoeo) { goto qcssigmcayuyweiy; } return ''; qcssigmcayuyweiy: $agoaugssmsiumiym = $this->meucmyuaiwgqiqia(); if ($agoaugssmsiumiym) { goto iymaiwqimisgacmk; } return $magawcseesgowoeo; iymaiwqimisgacmk: return "{$magawcseesgowoeo}\x3f{$agoaugssmsiumiym}"; } public function cesqesaeyaoysqaa() : string { if (!($magawcseesgowoeo = $this->aakgigyaookyiaqk())) { goto mugscgugcogcasue; } $magawcseesgowoeo = explode("\x3f", $magawcseesgowoeo); $magawcseesgowoeo = reset($magawcseesgowoeo); mugscgugcogcasue: return $magawcseesgowoeo; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\x51\x55\x45\123\124\137\115\x45\124\110\117\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ssywsaaqqaucesau; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\x61\x63\x68\x65\x5f\x69\147\156\157\x72\x65\144\x5f\160\x61\162\141\x6d\145\x74\x65\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto qyyyycwaookqaoke; } ksort($eyagkkkqkwcuygso); qyyyycwaookqaoke: ssywsaaqqaucesau: return $eyagkkkqkwcuygso; } private function sqmacmcaaqkqsoqq(string $euueacigmgoqkimu) { $aqykuigiuwmmcieu = ''; ysiqakyaiooyscwy: if (!(strpos($euueacigmgoqkimu, "\56\x2f") !== false || strpos($euueacigmgoqkimu, "\57\x2e") !== false || "\x2e" === $euueacigmgoqkimu || "\x2e\x2e" === $euueacigmgoqkimu)) { goto ygcgoaokauigwuus; } if (strpos($euueacigmgoqkimu, "\56\x2e\x2f") === 0) { goto sycougcyeqmeiagk; } if (strpos($euueacigmgoqkimu, "\56\57") === 0) { goto giugwaeuwaomossq; } if (strpos($euueacigmgoqkimu, "\57\x2e\x2f") === 0) { goto yoqsigmoyaaceqky; } if ("\57\x2e" === $euueacigmgoqkimu) { goto masakmomqmeocqqg; } if (strpos($euueacigmgoqkimu, "\x2f\x2e\x2e\57") === 0) { goto yqcusaeysomccaok; } if ("\57\56\56" === $euueacigmgoqkimu) { goto sgocecweikecwwgq; } if ("\x2e" === $euueacigmgoqkimu || "\x2e\56" === $euueacigmgoqkimu) { goto qeuyekusasqmcqms; } if (strpos($euueacigmgoqkimu, "\x2f", 1) !== false) { goto auumaoycmsmsgigs; } $aqykuigiuwmmcieu .= $euueacigmgoqkimu; $euueacigmgoqkimu = ''; goto ousmyagwsiooumos; auumaoycmsmsgigs: $yuyowiyumyysomoy = strpos($euueacigmgoqkimu, "\57", 1); $aqykuigiuwmmcieu .= substr($euueacigmgoqkimu, 0, $yuyowiyumyysomoy); $euueacigmgoqkimu = substr_replace($euueacigmgoqkimu, '', 0, $yuyowiyumyysomoy); ousmyagwsiooumos: goto yiceawuuiusakwiq; qeuyekusasqmcqms: $euueacigmgoqkimu = ''; yiceawuuiusakwiq: goto qwisiamkmkkwucyo; sgocecweikecwwgq: $euueacigmgoqkimu = "\57"; $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\57")); qwisiamkmkkwucyo: goto iwkckkeimmeoquyq; yqcusaeysomccaok: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); $aqykuigiuwmmcieu = substr_replace($aqykuigiuwmmcieu, '', strrpos($aqykuigiuwmmcieu, "\x2f")); iwkckkeimmeoquyq: goto yksywwikmeksikqc; masakmomqmeocqqg: $euueacigmgoqkimu = "\x2f"; yksywwikmeksikqc: goto suqckoccuyeeymww; yoqsigmoyaaceqky: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); suqckoccuyeeymww: goto acgqaeakoyasgkku; giugwaeuwaomossq: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 2); acgqaeakoyasgkku: goto ssagcgqaucssyego; sycougcyeqmeiagk: $euueacigmgoqkimu = substr($euueacigmgoqkimu, 3); ssagcgqaucssyego: goto ysiqakyaiooyscwy; ygcgoaokauigwuus: return $aqykuigiuwmmcieu . $euueacigmgoqkimu; } public function meucmyuaiwgqiqia() : string { return http_build_query($this->sgqsyoyomwumyoky()); } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto mqgeseysuwcaqwiy; } $icwicymcioeyeyek["\160\x65\162\x6d\141\154\151\156\x6b"] = $this->aakgigyaookyiaqk(); $this->oaumimwssciwumys($uamcoiueqaamsqma, $icwicymcioeyeyek); mqgeseysuwcaqwiy: } public function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie) { if (@defined($ymqmyyeuycgmigyo)) { goto ekoqieigyoeyauqa; } @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); ekoqieigyoeyauqa: } public function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!@defined($ymqmyyeuycgmigyo)) { goto cuwcsamuuqyuyqsu; } $ksaameoqigiaoigg = constant($ymqmyyeuycgmigyo); cuwcsamuuqyuyqsu: return $ksaameoqigiaoigg; } public function wkcsqoiqoeuccaqy() : array { return $this->lastError; } public function yauwooaeicgosquo(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { $icwicymcioeyeyek["\165\x72\x6c"] = $this->aakgigyaookyiaqk(); $this->lastError = ["\155\145\163\x73\141\x67\145" => $uamcoiueqaamsqma, "\143\157\156\x74\x65\x78\164" => $icwicymcioeyeyek]; } }

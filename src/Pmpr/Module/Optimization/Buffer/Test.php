<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\165\x72\x69" => 1, "\141\152\141\x78" => 1, "\143\x72\x6f\156" => 1, "\162\145\x73\164" => 1, "\x77\x70\137\64\x30\64" => 1, "\x73\x65\x61\162\143\150" => 1, "\x71\x75\x65\x72\171\137\163\x74\162\x69\x6e\x67" => 1, "\x69\x67\156\x6f\162\145\x64\x5f\165\162\154\x73" => 1, "\x64\157\156\x6f\x74\x63\x61\143\x68\x65\x70\x61\147\145" => 1, "\162\x65\152\145\x63\164\145\144\x5f\x63\157\157\x6b\x69\145" => 1, "\155\x61\x6e\144\x61\x74\x6f\162\x79\x5f\143\157\157\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\163\x74" => is_array($_POST) && $_POST ? $_POST : [], "\164\145\x73\164" => [], "\143\x6f\157\153\x69\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\164\x65\x73\164"]) { goto qgyaeoqgekocwkmw; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\x74\x65\163\164"]); qgyaeoqgekocwkmw: $this->get = $ywmkwiwkosakssii["\x67\145\164"] && is_array($ywmkwiwkosakssii["\147\145\164"]) ? $ywmkwiwkosakssii["\147\145\x74"] : []; $this->post = $ywmkwiwkosakssii["\160\x6f\x73\164"] && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\160\157\163\x74"] : []; $this->cookies = $ywmkwiwkosakssii["\x63\x6f\157\x6b\151\x65\x73"] && is_array($ywmkwiwkosakssii["\x63\157\157\153\x69\x65\x73"]) ? $ywmkwiwkosakssii["\143\157\157\153\x69\145\163"] : []; if (!$this->ayueggmoqeeukqmq()) { goto sieykcqauaygcais; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\160\x5f\143\x75\x73\164\x6f\155\x69\x7a\x65" => '']); sieykcqauaygcais: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto cykaikwsaskgeemo; } if ($this->gymgcceeqssmesiu()) { goto uogkcsaewswoaosw; } if ($this->goecwaaykqoaaagg()) { goto omekuqkuugyocmoc; } if ($this->sgsscqasgeyeicoe()) { goto aueiggyawkmkamum; } if (!$this->gooeyogikcusgwuu()) { goto wkqwywgikoyqkyeg; } if (!$this->cskwmweqysskwckg()) { goto ysggiwiksocomkek; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\x73\x75\x63\143\145\x73\x73"]) || !$uiewakwqscemywuo["\163\165\x63\143\x65\x73\x73"]) { goto gkuwmiusoqwesqoo; } if ($this->cskwmweqysskwckg("\x71\x75\x65\162\x79\137\x73\164\x72\151\x6e\147") && !$this->koguieumooaesyww()) { goto qaikeckkiwasykwk; } if ($this->cskwmweqysskwckg("\x72\145\x6a\x65\143\x74\x65\x64\x5f\x63\157\157\153\151\145") && $this->cokqaygwwygweuyk()) { goto cqemkecywkkwaaii; } if ($this->cskwmweqysskwckg("\x69\147\156\x6f\x72\x65\144\137\165\x72\x6c\x73") && $this->sywgeyscigqsokyg()) { goto iuaeeeeggkikuiig; } if (!($this->cskwmweqysskwckg("\x72\x65\163\164") && $this->okimameeykkqkuww())) { goto simkiasocoimioew; } $uamcoiueqaamsqma = "\x49\x67\x6e\157\162\x65\144\40\165\x72\x6c\40\x72\x65\163\x74\40\x72\145\161\x75\145\163\164\163\x2e"; simkiasocoimioew: goto kmiqskugkmaiugae; iuaeeeeggkikuiig: $uamcoiueqaamsqma = "\111\147\156\157\x72\x65\x64\40\165\x72\x6c\x20\x66\157\x75\156\x64\56"; kmiqskugkmaiugae: goto wcioaoeiiawwqqqq; cqemkecywkkwaaii: $uamcoiueqaamsqma = "\x45\170\x63\154\165\x64\145\144\x20\143\x6f\157\x6b\x69\145\40\x66\157\165\x6e\144\x2e"; $mgkceomocowocqyo = ["\x65\x78\x63\x6c\165\144\145\x64\x5f\143\x6f\x6f\153\x69\145\x73" => $this->cokqaygwwygweuyk()]; wcioaoeiiawwqqqq: goto ieoiygycmseqmmgc; qaikeckkiwasykwk: $uamcoiueqaamsqma = "\121\165\145\x72\x79\40\x73\x74\x72\151\156\147\x20\x55\122\114\40\151\163\x20\x65\170\143\x6c\x75\144\145\144\x2e"; ieoiygycmseqmmgc: goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: $uamcoiueqaamsqma = "\116\x6f\40\x63\x6f\156\x66\151\x67\x20\146\x69\154\145\40\146\157\x75\x6e\x64\56"; $mgkceomocowocqyo = ["\x63\157\x6e\x66\x69\147\x5f\160\141\164\x68" => $uiewakwqscemywuo["\x70\141\164\150"]]; wmsiqkyqsiysgcyy: ysggiwiksocomkek: goto wqieuwguumokgyqg; wkqwywgikoyqkyeg: $uamcoiueqaamsqma = "\122\x65\x71\165\x65\163\164\40\x6d\145\164\150\x6f\144\x20\151\163\x20\x6e\157\164\40\141\154\154\x6f\x77\x65\144\x2e\40\x50\x61\x67\x65\x20\143\x61\x6e\156\157\x74\40\x62\x65\x20\x63\x61\143\150\145\x64\56"; $mgkceomocowocqyo = ["\162\x65\x71\165\145\163\x74\x5f\x6d\x65\164\150\157\144" => $this->ciyocmkwssocskiy()]; wqieuwguumokgyqg: goto qswqmgiwiyyqwioa; aueiggyawkmkamum: $uamcoiueqaamsqma = "\103\165\163\x74\157\155\151\x7a\x65\162\x20\x70\x72\x65\x76\x69\145\167\40\151\x73\x20\x65\x78\143\x6c\165\x64\x65\x64\56"; qswqmgiwiyyqwioa: goto giuswooyckooaoms; omekuqkuugyocmoc: $uamcoiueqaamsqma = "\x41\144\x6d\x69\156\x20\x6f\162\40\101\112\x41\x58\x20\125\122\x4c\x20\151\x73\40\145\170\143\154\x75\144\x65\144\x2e"; giuswooyckooaoms: goto miqmoasmioksggkm; uogkcsaewswoaosw: $uamcoiueqaamsqma = "\120\110\x50\54\40\130\115\114\54\40\157\x72\40\130\123\x4c\40\146\151\154\145\x20\x69\x73\40\145\x78\x63\x6c\165\144\x65\144\x2e"; miqmoasmioksggkm: goto eqemoayymokeqaqi; cykaikwsaskgeemo: $uamcoiueqaamsqma = "\x52\157\142\157\x74\163\x2e\164\170\164\x20\x6f\162\x20\56\x68\164\141\143\x63\145\163\163\x20\x66\151\x6c\x65\x20\x69\163\x20\x65\170\143\154\165\144\145\144\x2e"; eqemoayymokeqaqi: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto keewmqmgqegumiwa; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; keewmqmgqegumiwa: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\x5f\141\x6c\x6c\157\167\x5f\x74\x6f\x5f\x6f\x70\164\x69\155\x69\172\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto jkaemsuwyyoamwim; } if (!$this->ocysssyiuaueqiei("\154\x65\166\x65\154\x2d\x31")) { goto cscskwugoamcmqyu; } if (http_response_code() !== 200) { goto yqeqouqemksasmqc; } if ($this->cskwmweqysskwckg("\144\x6f\x6e\x6f\164\x63\x61\x63\x68\145\160\141\x67\x65") && $this->uykysuaiooyewmsc()) { goto ekmogkwmcqsykgsq; } if ($this->cskwmweqysskwckg("\x77\160\x5f\64\x30\x34") && $this->kmmyuiwaogukwqqi()) { goto ayyyeiyaosoacoqm; } if ($this->cskwmweqysskwckg("\x73\145\x61\x72\x63\150") && $this->gouusicsisumuiei()) { goto kumuckkicykgwqqm; } if ($this->cskwmweqysskwckg("\x61\x6a\x61\x78") && $this->mcgoysmkqsqooceq()) { goto moqcomgmwiamuomq; } if ($this->cskwmweqysskwckg("\x63\x72\157\x6e") && $this->auqoeckqueqiiike()) { goto iqamwyasyoqsugeu; } if (!($this->cskwmweqysskwckg("\x72\145\x73\164") && $this->okimameeykkqkuww())) { goto oqsecqsucukywaee; } $this->log("\122\x65\163\x74\40\x41\120\111\x20\122\x65\161\165\x65\163\x74\x20\151\x73\x20\145\170\x63\154\165\x64\x65\x64\x2e"); $yciaosuiyeieceug = false; oqsecqsucukywaee: goto uiqycwuommmmuowy; iqamwyasyoqsugeu: $this->log("\x43\x72\x6f\156\x20\122\x65\161\x75\145\163\x74\x20\151\x73\x20\x65\170\x63\x6c\165\x64\145\x64\x2e"); $yciaosuiyeieceug = false; uiqycwuommmmuowy: goto omgkuuyoiugcymmy; moqcomgmwiamuomq: $this->log("\101\x6a\x61\x78\40\122\145\x71\x75\x65\163\164\40\x69\x73\40\x65\x78\x63\x6c\165\144\145\x64\x2e"); $yciaosuiyeieceug = false; omgkuuyoiugcymmy: goto sguyyaygwyikaggk; kumuckkicykgwqqm: $this->log("\x53\x65\141\162\143\150\x20\x70\x61\x67\x65\x20\x69\163\x20\145\x78\143\x6c\x75\144\145\x64\56"); $yciaosuiyeieceug = false; sguyyaygwyikaggk: goto aiwygewkmigcwusw; ayyyeiyaosoacoqm: $this->log("\127\120\x20\64\60\x34\40\x70\141\x67\x65\40\x69\x73\40\145\170\x63\154\x75\144\x65\144\x2e"); $yciaosuiyeieceug = false; aiwygewkmigcwusw: goto ksoawacwkgasqgmk; ekmogkwmcqsykgsq: $this->log("\104\x4f\116\x4f\124\103\x41\103\x48\x45\120\101\x47\x45\40\151\163\x20\144\145\146\151\x6e\x65\x64\56\x20\120\141\x67\145\x20\x63\141\x6e\x6e\157\164\40\142\145\x20\143\141\x63\150\145\144\x2e"); $yciaosuiyeieceug = false; ksoawacwkgasqgmk: goto wgaqkacekoyiwggi; yqeqouqemksasmqc: $this->log("\120\x61\x67\x65\x20\x69\x73\x20\156\x6f\x74\x20\141\40\x32\x30\x30\x20\110\124\124\120\x20\x72\x65\163\x70\x6f\x6e\x73\x65\40\x61\156\x64\x20\x63\x61\x6e\x6e\157\x74\x20\x62\145\x20\x63\141\x63\150\x65\x64\56"); $yciaosuiyeieceug = false; wgaqkacekoyiwggi: goto emioyucskiowqumg; cscskwugoamcmqyu: $this->log("\156\157\x74\40\x61\154\154\157\167\40\x74\157\x20\x6f\160\164\x69\155\x69\172\x65\40\x74\x68\151\163\x20\160\141\147\145\56"); $yciaosuiyeieceug = false; emioyucskiowqumg: goto suwsiaeoumiwkiqg; jkaemsuwyyoamwim: $this->log("\x42\x75\x66\x66\145\x72\x20\x63\x6f\x6e\x74\145\156\164\x20\x75\156\x64\145\x72\x20\x32\x35\65\40\143\141\162\141\x63\164\145\x72\163\x2e\72\40{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; suwsiaeoumiwkiqg: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto yoauoocuckogmsuw; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto amyaoueckysgmmas; yoauoocuckogmsuw: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); amyaoueckysgmmas: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto koiyaaokigmamqyc; } return $this->eecucukcqkqysiau(__FUNCTION__); koiyaaokigmamqyc: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto qiqegseqwywcmwoe; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); qiqegseqwywcmwoe: $ucasskoyoewwmmii = ["\162\x6f\142\x6f\x74\x73\x2e\x74\x78\x74", "\x2e\x68\164\x61\x63\143\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\57" . $qogsmwakwacwqogk))) { goto kikkkocywiyuyuqw; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kikkkocywiyuyuqw: kwcscewawgicomok: } yosyyiksyyscacus: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto aqeyqwuywqcmuoce; } return $this->eecucukcqkqysiau(__FUNCTION__); aqeyqwuywqcmuoce: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto qayiqaykkywcyisq; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto aymoguycgmuggcik; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aymoguycgmuggcik: qayiqaykkywcyisq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto akoweomooyuwamow; } return $this->eecucukcqkqysiau(__FUNCTION__); akoweomooyuwamow: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto oaociaioauummsey; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oaociaioauummsey: if (!(strtolower($iyiwooigkweeewey) === "\57\x69\x6e\144\145\x78\x2e\x70\150\160")) { goto cueuscqkicwwicei; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cueuscqkicwwicei: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\x78\155\x6c" => 1, "\x78\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\x4f\x49\116\107\137\x41\x4a\x41\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\x77\x70\x5f\143\165\163\164\157\155\151\x7a\145"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\x48\105\x41\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto gcecamucuogcciig; } return $this->eecucukcqkqysiau(__FUNCTION__); gcecamucuogcciig: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto suscosoukqeyyqgs; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); suscosoukqeyyqgs: $yccgiaiouekkouay = [ "\x6c\x61\156\147" => 1, "\x70\x72\145\154\x6f\x61\x64" => 1, "\x6f\160\164\x2d\x70\x72\x65\x6c\x6f\141\x64" => 1, "\x70\145\162\155\141\154\x69\156\x6b\x5f\x6e\141\x6d\145" => 1, "\154\160\x2d\x76\141\162\x69\141\164\151\x6f\x6e\x2d\x69\x64" => 1, "\130\104\105\x42\x55\x47\137\123\105\x53\x53\111\117\116\137\x53\x54\101\x52\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto kiewcwsykccgocuc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); kiewcwsykccgocuc: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\143\141\x63\150\x65\x5f\x71\165\145\x72\x79\137\x73\x74\x72\x69\156\147\x73"); if ($yccgiaiouekkouay) { goto eysuawiooiswaseq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eysuawiooiswaseq: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iecqkqoiqimmisyw; } return $this->eecucukcqkqysiau(__FUNCTION__); iecqkqoiqimmisyw: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto eogomkswkaqwyycm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eogomkswkaqwyycm: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto egiauwuekseyeaeq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); egiauwuekseyeaeq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto kikkkoqiumqoeiyy; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; kikkkoqiumqoeiyy: assoyoeukmqiucyq: } euuekiyqwkowiees: if (empty($eiocugauqgouiuyi)) { goto wyqueeskecameuks; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); wyqueeskecameuks: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\117\120\124\111\115\x49\x5a\101\124\111\x4f\116\137\104\x4f\x4e\x54\137\x43\101\x43\110\105\137\120\101\107\x45") || !OPTIMIZATION_DONT_CACHE_PAGE)) { goto esokkakkumskkmiu; } return false; esokkakkumskkmiu: return !apply_filters("\x63\x61\143\x68\145\x5f\x6f\x76\145\x72\162\x69\144\145\137\144\x6f\156\164\x5f\x63\x61\x63\x68\x65\137\160\141\147\x65", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\151\163\137\x34\x30\64")) { goto msiuqseowuumiwuo; } $weksiguqgqscsoee = is_404(); msiuqseowuumiwuo: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\x70\55\x6a\x73\157\x6e"; if (!function_exists("\x72\x65\x73\x74\x5f\x67\x65\164\x5f\x75\162\x6c\x5f\160\162\145\146\x69\x78")) { goto gqycmyieayoegcsy; } $cccswkigaicmqkkc = rest_get_url_prefix(); gqycmyieayoegcsy: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\x70\137\144\157\x69\x6e\x67\137\143\x72\x6f\x6e")) { goto sqiyuasgusgawuoi; } $weksiguqgqscsoee = wp_doing_cron(); sqiyuasgusgawuoi: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\160\137\144\x6f\x69\x6e\x67\x5f\141\x6a\x61\x78") && wp_doing_ajax()) { goto owiguescmqyqukui; } if (function_exists("\151\x73\137\x61\152\141\x78") && is_ajax()) { goto akyiiioycmgqyuok; } if (!(isset($_SERVER["\110\124\124\x50\x5f\130\137\122\x45\x51\125\x45\x53\124\105\104\x5f\x57\111\124\110"]) && $_SERVER["\x48\124\124\x50\137\130\x5f\x52\105\121\x55\105\x53\x54\x45\104\x5f\x57\111\x54\110"] === "\x58\115\x4c\x48\x74\x74\x70\122\145\x71\x75\x65\x73\x74")) { goto iayguaeseyaemwkk; } $weksiguqgqscsoee = true; iayguaeseyaemwkk: goto ycomeuqeessamows; akyiiioycmgqyuok: $weksiguqgqscsoee = true; ycomeuqeessamows: goto guummoewucyeuiek; owiguescmqyqukui: $weksiguqgqscsoee = true; guummoewucyeuiek: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\x69\163\x5f\163\145\x61\x72\x63\x68") && !is_search())) { goto mqacqosyicuiqwia; } return false; mqacqosyicuiqwia: return !apply_filters("\143\x61\143\x68\145\x5f\143\141\143\150\145\137\163\x65\x61\162\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\x45\x53\124\137\125\122\x49", ''); if (!$iyiwooigkweeewey) { goto mcuoyseuwoueyaie; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\x2f"); mcuoyseuwoueyaie: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto kwowggaooiyqawyq; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); kwowggaooiyqawyq: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\x45\121\125\x45\123\x54\137\115\x45\x54\110\x4f\x44", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto ciiyqsiswkcwsocm; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\143\141\143\x68\x65\x5f\x69\147\156\x6f\x72\x65\144\137\160\141\162\x61\x6d\x65\x74\145\162\x73"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto ieoeeyieoskuyiyw; } ksort($eyagkkkqkwcuygso); ieoeeyieoskuyiyw: ciiyqsiswkcwsocm: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto ugyawwukegyoqmsq; } $icwicymcioeyeyek["\160\145\x72\x6d\x61\x6c\151\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); ugyawwukegyoqmsq: } }

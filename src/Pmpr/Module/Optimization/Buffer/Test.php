<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643273713ba62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Test { use LogTrait, MemoizeTrait; protected array $get = []; protected array $post = []; protected ?array $cookies = []; protected ?Config $config = null; protected array $tests = ["\x75\x72\x69" => 1, "\x61\152\x61\x78" => 1, "\143\x72\157\156" => 1, "\162\145\163\164" => 1, "\x77\160\x5f\x34\60\x34" => 1, "\163\x65\141\162\x63\x68" => 1, "\x71\x75\145\162\x79\137\163\164\x72\151\156\x67" => 1, "\x69\x67\x6e\x6f\x72\145\x64\137\165\x72\x6c\x73" => 1, "\144\157\x6e\157\x74\143\141\x63\150\x65\x70\x61\147\145" => 1, "\x72\x65\152\x65\143\x74\x65\144\x5f\x63\157\x6f\x6b\x69\145" => 1, "\x6d\x61\156\x64\x61\x74\157\x72\171\x5f\x63\157\x6f\x6b\x69\145" => 1]; private array $lastError = []; public function __construct(Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->config = $uiewakwqscemywuo; $ywmkwiwkosakssii = wp_parse_args($ywmkwiwkosakssii, ["\147\x65\164" => is_array($_GET) && $_GET ? $_GET : [], "\160\x6f\x73\164" => is_array($_POST) && $_POST ? $_POST : [], "\x74\x65\163\x74" => [], "\x63\157\x6f\x6b\x69\145\x73" => is_array($_COOKIE) && $_COOKIE ? $_COOKIE : []]); if ($ywmkwiwkosakssii["\x74\x65\163\x74"]) { goto iigmgswcogqemgao; } $this->okkwqquawsoemamu((array) $ywmkwiwkosakssii["\164\145\163\164"]); iigmgswcogqemgao: $this->get = $ywmkwiwkosakssii["\147\145\x74"] && is_array($ywmkwiwkosakssii["\x67\145\x74"]) ? $ywmkwiwkosakssii["\x67\145\x74"] : []; $this->post = $ywmkwiwkosakssii["\160\157\163\x74"] && is_array($ywmkwiwkosakssii["\160\157\x73\164"]) ? $ywmkwiwkosakssii["\160\157\x73\164"] : []; $this->cookies = $ywmkwiwkosakssii["\143\x6f\x6f\153\151\145\163"] && is_array($ywmkwiwkosakssii["\x63\x6f\157\153\x69\145\x73"]) ? $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\x65\x73"] : []; if (!$this->ayueggmoqeeukqmq()) { goto ycaqooeeseougumo; } $this->post = array_intersect_key($this->ayueggmoqeeukqmq(), ["\167\x70\137\x63\165\x73\x74\x6f\155\x69\x7a\145" => '']); ycaqooeeseougumo: } public function aceaeommyuooiqge() : Config { return $this->config; } public function gequwwueqseakeoq() : bool { $uamcoiueqaamsqma = ''; $mgkceomocowocqyo = []; $this->lastError = []; if ($this->kgkoeoeseyuugaao()) { goto eomcuogskessyicy; } if ($this->gymgcceeqssmesiu()) { goto meiqywmwuoogckss; } if ($this->goecwaaykqoaaagg()) { goto okawiaowosqickgq; } if ($this->sgsscqasgeyeicoe()) { goto wasuquysysmqyegg; } if (!$this->gooeyogikcusgwuu()) { goto qykcggwgkweasuii; } if (!$this->cskwmweqysskwckg()) { goto ukmgwuiqwgyiouec; } $uiewakwqscemywuo = $this->aceaeommyuooiqge()->wcsoyaccaqessckk(); if (!isset($uiewakwqscemywuo["\163\x75\x63\x63\145\163\x73"]) || !$uiewakwqscemywuo["\x73\x75\143\143\x65\x73\x73"]) { goto ksqmcugkcmsooeaw; } if ($this->cskwmweqysskwckg("\161\165\145\162\171\137\x73\x74\x72\x69\156\x67") && !$this->koguieumooaesyww()) { goto eomqeimoequmagum; } if ($this->cskwmweqysskwckg("\x72\145\x6a\x65\143\x74\x65\144\137\143\x6f\x6f\x6b\x69\x65") && $this->cokqaygwwygweuyk()) { goto oysyuiqmsokoykaq; } if ($this->cskwmweqysskwckg("\x69\x67\156\x6f\x72\x65\x64\137\165\162\154\163") && $this->sywgeyscigqsokyg()) { goto aeockieewgkequae; } if (!($this->cskwmweqysskwckg("\x72\145\x73\164") && $this->okimameeykkqkuww())) { goto eceeoiwuagocweus; } $uamcoiueqaamsqma = "\x49\147\x6e\x6f\x72\145\144\40\165\x72\154\x20\x72\x65\163\x74\x20\x72\x65\x71\x75\x65\163\x74\163\x2e"; eceeoiwuagocweus: goto omqyuuomwywmqeiq; aeockieewgkequae: $uamcoiueqaamsqma = "\x49\147\156\x6f\x72\145\144\x20\165\x72\x6c\x20\x66\x6f\165\x6e\x64\56"; omqyuuomwywmqeiq: goto misiasooemyskoay; oysyuiqmsokoykaq: $uamcoiueqaamsqma = "\x45\x78\x63\x6c\165\x64\145\144\40\143\157\157\x6b\151\x65\x20\x66\x6f\165\156\144\56"; $mgkceomocowocqyo = ["\x65\170\143\x6c\165\x64\145\144\137\x63\x6f\x6f\153\151\x65\x73" => $this->cokqaygwwygweuyk()]; misiasooemyskoay: goto cqkyumayoemqsueu; eomqeimoequmagum: $uamcoiueqaamsqma = "\x51\x75\x65\x72\171\x20\163\x74\162\151\x6e\x67\x20\125\122\114\x20\x69\x73\40\x65\x78\x63\154\x75\x64\x65\144\x2e"; cqkyumayoemqsueu: goto sukcyismwageqgok; ksqmcugkcmsooeaw: $uamcoiueqaamsqma = "\116\157\40\143\x6f\156\146\x69\147\x20\146\x69\x6c\145\x20\146\157\x75\x6e\144\56"; $mgkceomocowocqyo = ["\x63\x6f\x6e\146\151\x67\x5f\x70\141\164\x68" => $uiewakwqscemywuo["\x70\141\164\150"]]; sukcyismwageqgok: ukmgwuiqwgyiouec: goto geoiegikocwmwosi; qykcggwgkweasuii: $uamcoiueqaamsqma = "\122\145\x71\x75\x65\x73\164\x20\x6d\145\164\x68\157\x64\40\x69\x73\40\x6e\157\x74\40\x61\x6c\x6c\157\167\x65\x64\x2e\40\120\141\x67\145\40\x63\x61\156\x6e\157\164\x20\142\x65\x20\143\141\x63\x68\145\144\56"; $mgkceomocowocqyo = ["\162\145\x71\x75\x65\163\x74\137\x6d\145\x74\150\x6f\144" => $this->ciyocmkwssocskiy()]; geoiegikocwmwosi: goto eqsuaywswuesuika; wasuquysysmqyegg: $uamcoiueqaamsqma = "\103\165\x73\164\x6f\x6d\x69\172\145\x72\x20\160\x72\145\x76\x69\145\x77\x20\x69\163\x20\x65\170\x63\x6c\x75\x64\145\144\x2e"; eqsuaywswuesuika: goto ogciikaecauiwgyk; okawiaowosqickgq: $uamcoiueqaamsqma = "\101\144\155\x69\x6e\x20\x6f\x72\40\101\x4a\101\130\40\125\x52\x4c\x20\x69\163\40\145\170\x63\x6c\165\x64\x65\x64\x2e"; ogciikaecauiwgyk: goto oyeygeykqwcqoeic; meiqywmwuoogckss: $uamcoiueqaamsqma = "\x50\x48\x50\54\x20\130\115\x4c\x2c\40\x6f\x72\40\130\123\x4c\x20\x66\151\x6c\145\40\151\x73\x20\145\x78\x63\x6c\165\x64\x65\x64\x2e"; oyeygeykqwcqoeic: goto isaacywgkascmcsw; eomcuogskessyicy: $uamcoiueqaamsqma = "\122\x6f\x62\x6f\164\163\x2e\x74\170\x74\40\x6f\x72\40\x2e\150\164\x61\x63\143\145\163\x73\x20\146\x69\x6c\x65\x20\x69\x73\40\x65\170\143\154\165\144\x65\144\56"; isaacywgkascmcsw: $yciaosuiyeieceug = true; if (!$uamcoiueqaamsqma) { goto quiguyyimiqeqcwa; } $this->log($uamcoiueqaamsqma, $mgkceomocowocqyo); $yciaosuiyeieceug = false; quiguyyimiqeqcwa: return $yciaosuiyeieceug; } public function ocysssyiuaueqiei($iqaosyayeiuaisqi = null) : bool { return (bool) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\x70\x74\137\141\154\154\x6f\x77\x5f\164\157\137\x6f\x70\x74\x69\155\x69\x7a\145"), false, $iqaosyayeiuaisqi); } public function ccmucyumocoyusaa(string $moooemyaqewumiay) : bool { $yciaosuiyeieceug = true; $this->lastError = []; if (strlen($moooemyaqewumiay) <= 255) { goto sikckcmeiwmyakeu; } if (!$this->ocysssyiuaueqiei("\154\145\166\x65\x6c\x2d\x31")) { goto sckyiekoceuisqyq; } if (http_response_code() !== 200) { goto vokekoceocuskqsm; } if ($this->cskwmweqysskwckg("\x64\x6f\x6e\x6f\164\143\x61\x63\150\x65\x70\x61\147\x65") && $this->uykysuaiooyewmsc()) { goto oeogyayooiwqcmia; } if ($this->cskwmweqysskwckg("\x77\160\137\x34\60\64") && $this->kmmyuiwaogukwqqi()) { goto jyekikocgagcgywq; } if ($this->cskwmweqysskwckg("\x73\145\x61\x72\143\150") && $this->gouusicsisumuiei()) { goto iaywwgssaoecwmeg; } if ($this->cskwmweqysskwckg("\141\152\141\170") && $this->mcgoysmkqsqooceq()) { goto eiegguecasykwmyq; } if ($this->cskwmweqysskwckg("\143\x72\157\156") && $this->auqoeckqueqiiike()) { goto ogwwasqkaageiwwi; } if (!($this->cskwmweqysskwckg("\162\x65\x73\164") && $this->okimameeykkqkuww())) { goto iicaisyekagswmey; } $this->log("\x52\145\163\x74\x20\x41\x50\111\40\x52\145\x71\165\x65\163\x74\40\151\163\40\x65\170\x63\154\165\x64\x65\x64\x2e"); $yciaosuiyeieceug = false; iicaisyekagswmey: goto sosqgaswegsomgkw; ogwwasqkaageiwwi: $this->log("\x43\162\157\156\x20\x52\x65\x71\x75\x65\163\164\40\x69\163\40\x65\170\143\x6c\x75\x64\145\x64\56"); $yciaosuiyeieceug = false; sosqgaswegsomgkw: goto qiiqceousoicgeee; eiegguecasykwmyq: $this->log("\101\x6a\141\x78\40\122\x65\x71\x75\x65\163\x74\x20\x69\163\x20\x65\x78\143\154\165\x64\145\144\x2e"); $yciaosuiyeieceug = false; qiiqceousoicgeee: goto maeueeueqoywkiom; iaywwgssaoecwmeg: $this->log("\123\145\x61\162\143\x68\x20\160\x61\x67\x65\40\151\163\x20\145\x78\143\154\x75\x64\x65\144\56"); $yciaosuiyeieceug = false; maeueeueqoywkiom: goto qoiyiuoyamwimusy; jyekikocgagcgywq: $this->log("\127\120\x20\x34\60\64\x20\x70\141\147\x65\x20\x69\x73\40\x65\170\143\154\165\144\145\x64\x2e"); $yciaosuiyeieceug = false; qoiyiuoyamwimusy: goto uowiiyqmiaaaaoas; oeogyayooiwqcmia: $this->log("\x44\117\116\117\x54\103\x41\103\110\x45\120\101\x47\x45\x20\151\163\x20\x64\x65\146\151\156\145\144\56\x20\x50\141\x67\145\x20\143\x61\x6e\156\157\164\x20\142\x65\x20\143\141\143\150\x65\144\x2e"); $yciaosuiyeieceug = false; uowiiyqmiaaaaoas: goto ooykyoowougqkaso; vokekoceocuskqsm: $this->log("\120\141\x67\145\40\151\163\40\156\157\164\x20\141\x20\x32\x30\60\x20\x48\x54\124\120\40\x72\x65\x73\x70\x6f\156\163\x65\40\141\156\x64\40\143\x61\x6e\x6e\x6f\x74\40\142\x65\40\x63\x61\143\150\x65\x64\56"); $yciaosuiyeieceug = false; ooykyoowougqkaso: goto kusuakkwcuqkcqaw; sckyiekoceuisqyq: $this->log("\156\x6f\164\x20\x61\154\154\x6f\x77\x20\x74\157\40\x6f\x70\x74\x69\x6d\151\x7a\145\40\x74\x68\151\x73\40\160\x61\x67\145\56"); $yciaosuiyeieceug = false; kusuakkwcuqkcqaw: goto qaycycmeqkqcumog; sikckcmeiwmyakeu: $this->log("\102\165\x66\x66\145\162\x20\x63\157\156\164\145\x6e\x74\x20\x75\156\144\x65\162\40\62\65\x35\x20\143\x61\162\141\143\x74\x65\x72\x73\x2e\72\x20{$moooemyaqewumiay}"); $yciaosuiyeieceug = false; qaycycmeqkqcumog: return $yciaosuiyeieceug; } public function kwckyseyuaauaqau() : array { return $this->tests; } public function cskwmweqysskwckg($ymqmyyeuycgmigyo = '') : bool { $ccsoeyocyqiuuwgs = $this->kwckyseyuaauaqau(); if (!$ymqmyyeuycgmigyo) { goto ikuwigsmisimaqoc; } $umuecysoywoumgwo = isset($ccsoeyocyqiuuwgs[$ymqmyyeuycgmigyo]); goto sigukociqouigous; ikuwigsmisimaqoc: $umuecysoywoumgwo = !empty($ccsoeyocyqiuuwgs); sigukociqouigous: return $umuecysoywoumgwo; } public function okkwqquawsoemamu(array $ccsoeyocyqiuuwgs) { $ccsoeyocyqiuuwgs = array_flip($ccsoeyocyqiuuwgs); $this->tests = array_merge($this->kwckyseyuaauaqau(), $ccsoeyocyqiuuwgs); } public function kgkoeoeseyuugaao() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto yagscaikmmuagqcu; } return $this->eecucukcqkqysiau(__FUNCTION__); yagscaikmmuagqcu: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto iyawqekeeawqkymm; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); iyawqekeeawqkymm: $ucasskoyoewwmmii = ["\x72\157\x62\157\164\x73\x2e\164\x78\x74", "\56\150\x74\x61\x63\x63\x65\x73\x73"]; foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(false !== strpos($iyiwooigkweeewey, "\x2f" . $qogsmwakwacwqogk))) { goto qaqooueskgciuqgc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); qaqooueskgciuqgc: qwosyqcomiosguoa: } iumgcesksuawyuyo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function sywgeyscigqsokyg() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto omyquyiguuaociwq; } return $this->eecucukcqkqysiau(__FUNCTION__); omyquyiguuaociwq: $iyiwooigkweeewey = $this->iqyukmiuoisswoei(); $aoigowwskiaosqgo = $this->aceaeommyuooiqge()->goqwamweigigmuuu(); if (!($iyiwooigkweeewey && $aoigowwskiaosqgo && preg_match($aoigowwskiaosqgo, $iyiwooigkweeewey, $meyiiwcswqmuggyg))) { goto mesesokuoomcioom; } if (!($meyiiwcswqmuggyg[0] === $iyiwooigkweeewey)) { goto aqwoykqaquewcaki; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); aqwoykqaquewcaki: mesesokuoomcioom: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function gymgcceeqssmesiu() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto iuwccksomkkouogy; } return $this->eecucukcqkqysiau(__FUNCTION__); iuwccksomkkouogy: $iyiwooigkweeewey = $this->mcqmgiwowqqyiewk(); if ($iyiwooigkweeewey) { goto cceggewquoaemcwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); cceggewquoaemcwq: if (!(strtolower($iyiwooigkweeewey) === "\x2f\x69\156\x64\145\170\56\160\x68\x70")) { goto ioiwoukauoeamuca; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); ioiwoukauoeamuca: $uwumuuykwookaauo = pathinfo($iyiwooigkweeewey, PATHINFO_EXTENSION); $wscgwsmykwacamuy = ["\160\x68\160" => 1, "\170\x6d\x6c" => 1, "\170\x73\154" => 1]; $amacwkesaqcumiwk = $uwumuuykwookaauo && isset($wscgwsmykwacamuy[$uwumuuykwookaauo]); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $amacwkesaqcumiwk); } public function goecwaaykqoaaagg() : bool { return is_admin() || defined("\x44\117\x49\x4e\107\137\x41\x4a\101\130") && DOING_AJAX; } public function sgsscqasgeyeicoe() : bool { return isset($this->ayueggmoqeeukqmq()["\167\x70\x5f\x63\x75\163\164\x6f\x6d\151\x7a\x65"]); } public function gooeyogikcusgwuu() : bool { $ickwkwoiegqacgqq = ["\x47\105\x54" => 1, "\x48\x45\101\x44" => 1]; return isset($ickwkwoiegqacgqq[$this->ciyocmkwssocskiy()]); } public function koguieumooaesyww() : bool { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oqckuigyqswmqcqg; } return $this->eecucukcqkqysiau(__FUNCTION__); oqckuigyqswmqcqg: $eyagkkkqkwcuygso = $this->sgqsyoyomwumyoky(); if ($eyagkkkqkwcuygso) { goto owismwmeqcmukagu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); owismwmeqcmukagu: $yccgiaiouekkouay = [ "\x6c\141\156\147" => 1, "\x70\x72\x65\154\x6f\x61\x64" => 1, "\157\x70\x74\x2d\160\x72\x65\154\157\x61\x64" => 1, "\x70\x65\x72\x6d\141\x6c\x69\x6e\x6b\137\x6e\x61\x6d\x65" => 1, "\154\x70\x2d\x76\x61\x72\x69\141\x74\151\x6f\156\x2d\x69\144" => 1, "\x58\x44\x45\x42\125\x47\x5f\123\x45\x53\x53\x49\117\116\x5f\123\124\101\x52\x54" => 1, ]; if (!array_intersect_key($eyagkkkqkwcuygso, $yccgiaiouekkouay)) { goto oiywguooqeasueqq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], true); oiywguooqeasueqq: $yccgiaiouekkouay = $this->aceaeommyuooiqge()->get("\x63\x61\x63\150\145\137\161\165\145\x72\x79\x5f\x73\x74\162\151\156\147\163"); if ($yccgiaiouekkouay) { goto equwcsciiggsuiam; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); equwcsciiggsuiam: $yciaosuiyeieceug = (bool) array_intersect_key($eyagkkkqkwcuygso, array_flip($yccgiaiouekkouay)); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $yciaosuiyeieceug); } public function cokqaygwwygweuyk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto qsaoyggkqwcgskwk; } return $this->eecucukcqkqysiau(__FUNCTION__); qsaoyggkqwcgskwk: $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg) { goto myooisakyuggoggc; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); myooisakyuggoggc: $eymuoguywceaakys = $this->aceaeommyuooiqge()->wymiuaugeeigmmuc(); if ($eymuoguywceaakys) { goto awkqcyusycccekwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); awkqcyusycccekwq: $eiocugauqgouiuyi = []; foreach (array_keys($osqkgokmuiasuukg) as $aecgggeoymywyumm) { if (!preg_match($eymuoguywceaakys, $aecgggeoymywyumm)) { goto ykogqmmywykgouqy; } $eiocugauqgouiuyi[] = $aecgggeoymywyumm; ykogqmmywykgouqy: kqwyogqqwumumiwg: } yugmwomumkosucsc: if (empty($eiocugauqgouiuyi)) { goto aqksouwmeckaqyaq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $eiocugauqgouiuyi); aqksouwmeckaqyaq: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); } public function uykysuaiooyewmsc() : bool { if (!(!defined("\120\x52\x5f\117\x50\124\x5f\104\x4f\116\124\137\103\101\x43\x48\105\x5f\120\x41\x47\105") || !PR_OPT_DONT_CACHE_PAGE)) { goto gmsyoscesymiwwue; } return false; gmsyoscesymiwwue: return !apply_filters("\143\141\x63\150\145\137\157\166\145\162\162\x69\144\145\137\x64\x6f\x6e\x74\137\x63\141\143\150\145\x5f\x70\141\x67\145", false); } public function kmmyuiwaogukwqqi() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x69\163\137\64\60\64")) { goto eiicmcasqikiyasw; } $weksiguqgqscsoee = is_404(); eiicmcasqikiyasw: return $weksiguqgqscsoee; } public function okimameeykkqkuww() : bool { $cccswkigaicmqkkc = "\x77\160\55\152\163\x6f\156"; if (!function_exists("\x72\x65\163\164\x5f\147\145\x74\x5f\165\x72\x6c\137\160\x72\x65\x66\x69\x78")) { goto ayucsuwsiocgycww; } $cccswkigaicmqkkc = rest_get_url_prefix(); ayucsuwsiocgycww: return false !== strpos($this->iqyukmiuoisswoei(), trailingslashit($cccswkigaicmqkkc)); } public function auqoeckqueqiiike() : bool { $weksiguqgqscsoee = false; if (!function_exists("\x77\x70\137\144\157\151\x6e\147\137\143\x72\157\x6e")) { goto smmagoyuqoigoesc; } $weksiguqgqscsoee = wp_doing_cron(); smmagoyuqoigoesc: return $weksiguqgqscsoee; } public function mcgoysmkqsqooceq() : bool { $weksiguqgqscsoee = false; if (function_exists("\167\160\137\144\157\151\x6e\x67\x5f\141\x6a\x61\x78") && wp_doing_ajax()) { goto kgqgcggccmiwayua; } if (function_exists("\x69\x73\137\141\x6a\141\x78") && is_ajax()) { goto swesqeqmagkicuws; } if (!(isset($_SERVER["\x48\124\x54\x50\x5f\x58\x5f\122\105\x51\125\x45\x53\x54\x45\104\x5f\127\x49\124\x48"]) && $_SERVER["\110\124\x54\120\x5f\x58\137\x52\x45\121\125\x45\123\124\x45\104\137\x57\x49\124\110"] === "\x58\x4d\x4c\x48\164\x74\160\x52\x65\161\165\x65\163\x74")) { goto wsqeiwkgoiekwasy; } $weksiguqgqscsoee = true; wsqeiwkgoiekwasy: goto cwyaysecsakaqgew; swesqeqmagkicuws: $weksiguqgqscsoee = true; cwyaysecsakaqgew: goto kwayumouacgkgyas; kgqgcggccmiwayua: $weksiguqgqscsoee = true; kwayumouacgkgyas: return $weksiguqgqscsoee; } public function gouusicsisumuiei() : bool { if (!(function_exists("\151\x73\137\163\145\x61\x72\x63\150") && !is_search())) { goto rgaagksgsewuwgmo; } return false; rgaagksgsewuwgmo: return !apply_filters("\x63\x61\x63\x68\x65\x5f\143\141\x63\150\x65\137\x73\x65\x61\x72\143\x68", false); } public function iqyukmiuoisswoei() : string { $iyiwooigkweeewey = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x52\x45\121\x55\x45\123\124\x5f\x55\122\111", ''); if (!$iyiwooigkweeewey) { goto mcmcocyuugueaeww; } $iyiwooigkweeewey = "\x2f" . ltrim($iyiwooigkweeewey, "\57"); mcmcocyuugueaeww: return $iyiwooigkweeewey; } public function mcqmgiwowqqyiewk() : string { if (!($iyiwooigkweeewey = $this->iqyukmiuoisswoei())) { goto eucakkcoiiwkwsme; } $iyiwooigkweeewey = explode("\77", $iyiwooigkweeewey); $iyiwooigkweeewey = reset($iyiwooigkweeewey); eucakkcoiiwkwsme: return $iyiwooigkweeewey; } public function ciyocmkwssocskiy() : string { return strtoupper($this->aceaeommyuooiqge()->iuocyymeygwuweag("\122\105\121\x55\105\x53\x54\x5f\115\x45\x54\110\117\104", '')); } public function sgqsyoyomwumyoky() : array { $ouwwgcimmokaqgeq = $this->gkwaaeusmsaywikg(); $eyagkkkqkwcuygso = []; if (!$ouwwgcimmokaqgeq) { goto agsuaimomgsoyiem; } $ekaeqaueouiymaue = (array) $this->aceaeommyuooiqge()->get("\x63\141\x63\150\x65\x5f\x69\147\x6e\157\x72\x65\x64\137\x70\x61\x72\141\155\x65\x74\x65\x72\163"); $eyagkkkqkwcuygso = array_diff_key($ouwwgcimmokaqgeq, $ekaeqaueouiymaue); if (!$eyagkkkqkwcuygso) { goto iwsaaiggkciigsmc; } ksort($eyagkkkqkwcuygso); iwsaaiggkciigsmc: agsuaimomgsoyiem: return $eyagkkkqkwcuygso; } public function wemyikwikgwqwuoc() : ?array { return $this->cookies; } public function ayueggmoqeeukqmq() : array { return $this->post; } public function gkwaaeusmsaywikg() : array { return $this->get; } public function log(string $uamcoiueqaamsqma, array $icwicymcioeyeyek = []) { if (!$this->aceaeommyuooiqge()->kwauqaweosgcsimi()) { goto kygccamgawookukq; } $icwicymcioeyeyek["\x70\145\162\155\x61\154\x69\x6e\x6b"] = $this->iqyukmiuoisswoei(); $this->uiagwusgwcassqua($uamcoiueqaamsqma, $icwicymcioeyeyek); kygccamgawookukq: } }

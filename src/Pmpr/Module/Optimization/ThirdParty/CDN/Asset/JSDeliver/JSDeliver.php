<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d83d7f69c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset\JSDeliver; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\CDNData; use Pmpr\Module\Optimization\ThirdParty\CDN\Asset\Common; use WP_Dependencies; use WP_Scripts; class JSDeliver extends Common { const uaiimqkkiecgmkwm = "\150\x74\x74\160\163\72\x2f\x2f\x63\x64\x6e\x2e\152\163\144\145\154\x69\x76\162\56\156\145\164\57"; const qswqmkwmqmggomug = "\150\x74\164\160\163\72\57\57\144\x61\x74\141\56\x6a\x73\144\145\x6c\x69\x76\x72\x2e\x63\x6f\x6d\x2f\x76\x31\x2f\x6c\157\x6f\x6b\165\x70\x2f\x68\141\163\150\57"; const iqcyaamgiewkaowe = "\57\134\x2f\134\x2a\133\x5c\x73\x5c\x53\x5d\52\77\134\x2a\134\x2f\x7c\134\57\134\57\x2e\52\77\50\x3f\72\134\x6e\174\x24\x29\x2f"; public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu(Process::ANALYZE, [$this, "\x79\x71\147\x69\161\161\141\171\141\x6d\171\145\x65\x6d\x75\x75"])->qcsmikeggeemccuu(Process::akguikecmoggsykg, [$this, "\x61\x73\x71\x77\161\141\x71\157\x77\x67\x65\x79\x79\x61\171\x77"]); } public function init() { Process::symcgieuakksimmu()->cywkaeaiwmweciui(); Process::symcgieuakksimmu()->mciwicaywiwmccoc(); } public function yqgiqqayamyeemuu() { global $wp_scripts, $wp_styles; $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cwkywyqksyucoyia([Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw, Constants::iocouekmygsaocuo => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc]]); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { $uueqecyckaweeyai = $gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, Constants::acyomymuuygeoqks); $iakkeikwceeomgyq = $wp_styles->registered[$uueqecyckaweeyai] ?? $wp_scripts[$uueqecyckaweeyai] ?? false; if (!($iakkeikwceeomgyq->src && ($eeamcawaiqocomwy = $this->giyqgiugumwkewgw($iakkeikwceeomgyq)))) { goto mugeiwyysiemwaym; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::iocouekmygsaocuo => $eeamcawaiqocomwy]); mugeiwyysiemwaym: awimwukcyiceackk: } ycueoqkeakismiqw: } public function asqwqaqowgeyyayw() { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $oammesyieqmwuwyi = $gcskoooiimggowew->cyyqcumykgmwakcs(CDNData::gycwocuuococmiqw); foreach ($oammesyieqmwuwyi as $egsumesakcaaukem) { if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($egsumesakcaaukem, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS * 2)) { goto cyymeyomuakqakwo; } $gcskoooiimggowew->wqikesawekycweoi($egsumesakcaaukem, [Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); cyymeyomuakqakwo: cquikgykuscqmigw: } euymeegkukskiowq: } public function giyqgiugumwkewgw($iakkeikwceeomgyq) : ?string { $myeuaywkqeuqowes = ''; $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; if (!$wsqkocmmsoiquqwm) { goto omekuqkuugyocmoc; } $muqcqaqwsaoagykg = []; $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\x2f"); if (false !== $kuuiuigeacouwmaa) { goto uwscegkmmumymoaq; } $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto gkwoqoeaecgkymeu; uwscegkmmumymoaq: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\x68\164\164\x70\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); gkwoqoeaecgkymeu: if (!$ykscweuoqwqcmsmo) { goto qswqmgiwiyyqwioa; } $mgeemcksyiuqaemy = hash("\x73\150\x61\62\65\x36", $ykscweuoqwqcmsmo); $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); if (isset($icwicymcioeyeyek[Constants::kekgqaemqessuwmq])) { goto ysggiwiksocomkek; } if (preg_match("\x2f\167\x70\55\x63\x6f\156\x74\145\x6e\164\x5c\57\160\x6c\x75\147\151\156\163\134\x2f\50\x3f\74\160\154\x75\147\151\x6e\76\x5b\x5e\x5c\x2f\x5d\x2a\51\x5c\57\50\x3f\x3c\x66\x69\x6c\145\76\x2e\52\51\57\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto gkuwmiusoqwesqoo; } if (!preg_match("\x2f\167\x70\55\x63\157\x6e\x74\x65\156\x74\134\57\x74\x68\145\x6d\x65\x73\134\57\50\77\x3c\x74\x68\x65\155\x65\x3e\133\136\x5c\57\135\52\x29\134\x2f\50\x3f\74\x66\x69\x6c\x65\76\x2e\52\x29\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto ieoiygycmseqmmgc; } if (!($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto qaikeckkiwasykwk; } $mumucmmgemqwqiia = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ogciwyoqgciosgcw($meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]); if (!$mumucmmgemqwqiia->exists()) { goto wcioaoeiiawwqqqq; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\x77\x70\x2f\164\150\x65\155\145\x73\x2f{$meyiiwcswqmuggyg[Constants::memoaagcmqqowsoy]}\57{$mumucmmgemqwqiia->get(Constants::auugqowqueaocgsu)}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto cqemkecywkkwaaii; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; cqemkecywkkwaaii: wcioaoeiiawwqqqq: qaikeckkiwasykwk: ieoiygycmseqmmgc: goto wmsiqkyqsiysgcyy; gkuwmiusoqwesqoo: if (!($meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo] && $meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq])) { goto kmiqskugkmaiugae; } $plugin_file = ABSPATH . "\x77\160\55\143\x6f\156\164\x65\156\164\57\x70\x6c\x75\147\151\x6e\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\56\x70\x68\x70"; if (file_exists($plugin_file)) { goto qgyaeoqgekocwkmw; } $php_files = glob(ABSPATH . "\x77\160\x2d\x63\x6f\156\164\145\156\x74\57\160\x6c\x75\x67\x69\156\x73\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\x2a\56\160\x68\160"); foreach ($php_files as $mkomwsiykqigmqca) { $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto yukacyeckkwagusw; } goto ewoqyogcaksucksk; yukacyeckkwagusw: wgeueumgacuuuama: } ewoqyogcaksucksk: goto sieykcqauaygcais; qgyaeoqgekocwkmw: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); sieykcqauaygcais: if (!$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]) { goto iuaeeeeggkikuiig; } $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "\167\x70\57\x70\154\165\147\151\156\163\x2f{$meyiiwcswqmuggyg[Constants::akoscweoqiuiiooo]}\x2f\164\141\x67\163\57{$muqcqaqwsaoagykg[Constants::auugqowqueaocgsu]}\x2f{$meyiiwcswqmuggyg[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto simkiasocoimioew; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; simkiasocoimioew: iuaeeeeggkikuiig: kmiqskugkmaiugae: wmsiqkyqsiysgcyy: goto wkqwywgikoyqkyeg; ysggiwiksocomkek: if (!("\127\157\x72\x64\x50\x72\x65\163\163\57\127\x6f\x72\x64\120\x72\x65\163\x73" === $icwicymcioeyeyek[Constants::NAME])) { goto ouaoyqugwsagkqaa; } $icwicymcioeyeyek[Constants::auugqowqueaocgsu] = get_bloginfo(Constants::auugqowqueaocgsu); ouaoyqugwsagkqaa: $mckmqeqaekwkwems = self::uaiimqkkiecgmkwm . "{$icwicymcioeyeyek[Constants::squoamkioomemiyi]}\x2f{$icwicymcioeyeyek[Constants::NAME]}\x40{$icwicymcioeyeyek[Constants::auugqowqueaocgsu]}{$icwicymcioeyeyek[Constants::kekgqaemqessuwmq]}"; if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto auaywaskqooasiuq; } $myeuaywkqeuqowes = $mckmqeqaekwkwems; auaywaskqooasiuq: wkqwywgikoyqkyeg: if ($this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo)) { goto wqieuwguumokgyqg; } $myeuaywkqeuqowes = substr_replace($myeuaywkqeuqowes, "\56\155\151\x6e", strrpos($myeuaywkqeuqowes, "\x2e"), 0); wqieuwguumokgyqg: $gqqycaoyaweqigmi = wp_check_filetype($myeuaywkqeuqowes); $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); if (!($wuayakmyggcomiuy["\x65\170\x74"] !== $gqqycaoyaweqigmi["\x65\170\164"])) { goto aueiggyawkmkamum; } $myeuaywkqeuqowes = ''; aueiggyawkmkamum: qswqmgiwiyyqwioa: omekuqkuugyocmoc: return $myeuaywkqeuqowes; } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::iqcyaamgiewkaowe, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(explode("\12", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) : array { $sogksuscggsicmac = []; $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk(self::qswqmkwmqmggomug . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); if (!$ykscweuoqwqcmsmo) { goto giuswooyckooaoms; } $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ykscweuoqwqcmsmo); $sogksuscggsicmac["\x73\x68\x61\x32\65\x36"] = $mgeemcksyiuqaemy; giuswooyckooaoms: return $sogksuscggsicmac; } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->awemwqyugsqgcsyu($eeamcawaiqocomwy, $this->eeykuoewogequiii()); if (!(is_wp_error($keccaugmemegoimu) || (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) !== 200)) { goto uogkcsaewswoaosw; } return false; uogkcsaewswoaosw: $ykscweuoqwqcmsmo = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $kyquyseskckkouak = hash("\x73\150\x61\62\x35\x36", $ykscweuoqwqcmsmo); return $kyquyseskckkouak === $mgeemcksyiuqaemy; } public function agkwcckksaegcsce(?string $ogomymegcoacqisg) : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->skksumsyamssouqc($ogomymegcoacqisg, "\x2f\x2f")) { goto eqemoayymokeqaqi; } $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); goto keewmqmgqegumiwa; eqemoayymokeqaqi: $cgmkimaosyyuqeyg = site_url(); if (str_starts_with($ogomymegcoacqisg, $cgmkimaosyyuqeyg)) { goto miqmoasmioksggkm; } $acqcekoeswseswws = $ogomymegcoacqisg; goto cykaikwsaskgeemo; miqmoasmioksggkm: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\x2f"); cykaikwsaskgeemo: keewmqmgqegumiwa: return $acqcekoeswseswws; } private function eeykuoewogequiii() : array { return ["\x68\x65\141\144\145\x72\x73" => ["\x55\x73\145\x72\55\101\x67\x65\x6e\x74" => "\120\115\120\122\40\x4f\x70\164\151\155\x69\x7a\x61\x74\x69\x6f\x6e\x20\x4d\157\x64\165\x6c\x65\x2f" . $this->couwksyewgyeooqe()->gikwwgqmwccescgy()]]; } }

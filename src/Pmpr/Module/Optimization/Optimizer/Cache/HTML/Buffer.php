<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             666957c99839f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\x68\x69\x6e\x67\137\x70\162\x6f\143\x65\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto gygwewcqsmwqismo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; gygwewcqsmwqismo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\x6f\x6f\x6b\x69\156\147\x20\x66\157\x72\40\x63\x61\143\x68\x65\x20\x66\x69\x6c\145\x2e", ["\160\141\x74\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\151\x70\x5f\145\x6e\x61\142\x6c\145")) { goto gommacygsykyussk; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\x67\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\x41\x43\103\x45\120\x54\x5f\105\116\103\x4f\104\x49\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uougwgeyiokewkkm; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uougwgeyiokewkkm: gommacygsykyussk: if (!@is_readable($xswggycymueygwse)) { goto ukqocwewouckikso; } $this->ecsimoiakyygwais($xswggycymueygwse); ukqocwewouckikso: $this->log("\x53\x74\141\x72\x74\40\x62\x75\x66\146\145\162\x2e", ["\160\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\161\x63\x71\x6b\x6f\161\x77\143\x75\x6f\161\x75\x73\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ucqmumuygcywwqma; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ucqmumuygcywwqma: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto uykousayyomcaeaa; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); uykousayyomcaeaa: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto uimeeckqksqeekqq; } $this->log("\x43\x61\x6e\x20\156\157\x74\x20\x73\164\141\162\x74\x20\142\x75\x66\146\145\162\40\160\162\x6f\x63\x65\163\x73\54\x20\155\141\171\142\x65\40\x70\x61\x67\x65\x20\x6e\157\164\40\145\170\151\163\164\163\x20\x6f\162\x20\156\x6f\164\x20\141\143\164\x69\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; uimeeckqksqeekqq: if ($this->omgegoiwsakgwwug()) { goto iuuuususuuuaieem; } $this->log("\101\166\x6f\x69\x64\40\x63\141\143\150\x65\40\160\141\x67\x65\x20\142\x79\x20\146\151\154\164\145\162", ["\146\x69\154\x74\x65\x72" => "\x70\162\137\x6f\160\164\x69\155\151\x7a\x61\164\x69\157\156\137\143\x61\x63\x68\145\137\x68\x74\155\154\x5f\144\x6f\x5f\x67\x65\x6e\145\x72\141\164\x65\137\x63\x61\143\150\151\x6e\147\x5f\146\151\x6c\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; iuuuususuuuaieem: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto kocqqoyymosmuksu; } $this->log("\143\x61\x63\x68\145\40\144\x69\x72\x65\x63\164\x6f\x72\171\x20\156\157\x74\40\x67\145\x6e\x65\x72\x61\x74\x65\x64\72\x20{$qwqyukkaswwygsyg}"); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); uqokiksoqcwwqgio: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto qukocuwgakemmyga; } header("\x4c\x61\x73\x74\x2d\x4d\157\x64\x69\146\x69\x65\x64\72\x20" . gmdate("\x44\x2c\x20\x64\40\115\40\131\40\110\72\151\72\x73", filemtime($xswggycymueygwse)) . "\x20\107\115\x54"); qukocuwgakemmyga: $this->log("\x50\x61\147\145\40\x63\x61\x63\150\x65\144\56", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\150\x65\x2d\x43\157\x6e\x74\x72\x6f\154\x3a\40\156\x6f\55\163\164\x6f\x72\x65\54\x20\156\157\x2d\x63\141\x63\150\x65\54\x20\x6d\165\x73\x74\55\162\145\x76\141\x6c\x69\144\141\x74\145\x2c\40\155\x61\170\55\x61\147\145\75\x30"); header("\120\x72\x61\147\x6d\141\x3a\x20\156\157\55\x63\x61\x63\150\x65"); header("\x45\170\160\x69\162\145\x73\x3a\x20" . gmdate("\x44\54\40\144\40\115\40\131\x20\110\72\x69\72\x73\40\x5c\107\134\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\163\x74\55\115\157\x64\x69\x66\151\x65\144\x3a\x20" . gmdate("\x44\x2c\x20\144\40\115\x20\x59\40\110\72\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sioekkmekwygemyc; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\151\156\147\40\143\141\x63\150\145\40\x66\151\x6c\145\x2e", ["\160\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\151\x65\x64" => $cocykkikgmcykggu]); sioekkmekwygemyc: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\x74\x2d\115\157\x64\x69\x66\x69\x65\x64\x3a\40" . gmdate("\104\54\x20\x64\x20\x4d\x20\x59\40\110\72\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto yiowgigkkwsoqcci; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\162\166\x69\x6e\147\40\x67\x7a\x69\x70\x20\143\x61\x63\x68\x65\x20\146\x69\x6c\x65\x2e", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\144\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); yiowgigkkwsoqcci: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto ieqesiiageaauiuw; } return; ieqesiiageaauiuw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto gamqcwuwkikwqoay; } return; gamqcwuwkikwqoay: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\172\151\x70\137\145\x6e\x61\142\154\145")) { goto iesekaeqeomeuaui; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\155\x70"; if (!function_exists("\x67\x7a\x65\x6e\143\157\144\145")) { goto oyeyomcgkmgymogq; } $gomewsucumqsiske = apply_filters("\160\162\x5f\x6f\x70\164\x69\155\x69\172\141\164\x69\157\156\137\x63\x61\143\x68\x65\x5f\x68\x74\x6d\154\137\147\x7a\145\x6e\x63\157\144\x65\x5f\x6c\x65\166\145\x6c\137\143\x6f\155\x70\x72\145\163\163\x69\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto mscyggqcesgqqksu; } return; mscyggqcesgqqksu: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); oyeyomcgkmgymogq: iesekaeqeomeuaui: $this->log("\143\x61\x63\x68\145\40\146\x69\154\145\x20\x67\145\x6e\x65\x72\x61\164\x65\144\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto wsesqmcqoiyyqkqi; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\x56\105\x52\x5f\120\122\x4f\124\117\x43\117\x4c", '') . "\40\x33\x30\64\x20\x4e\157\164\40\x4d\157\x64\x69\x66\151\x65\x64", true, 304); header("\x45\170\160\x69\x72\x65\163\72\40" . gmdate("\x44\54\40\144\x20\115\40\x59\40\110\72\x69\72\x73") . "\x20\107\115\x54"); header("\x43\141\x63\150\145\x2d\x43\157\156\164\162\157\154\72\x20\156\x6f\x2d\143\141\143\150\145\54\x20\155\x75\x73\x74\x2d\x72\x65\166\141\154\151\x64\141\164\145"); $this->log("\x53\145\x72\x76\x69\x6e\147\x20\140\x33\60\64\x60\40\x63\x61\x63\x68\145\40\x66\151\x6c\x65\56", ["\x70\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; wsesqmcqoiyyqkqi: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\144\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\133\x30\55\71\101\55\x46\135\x7b\x32\175\x2f", [$this, "\x6d\161\x77\157\x73\x79\151\165\155\145\167\x71\145\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\x74\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x4d\x6f\x62\x69\154\145\137\x44\145\164\x65\143\x74") && $this->aceaeommyuooiqge()->get("\155\x6f\142\x69\x6c\145\137\143\141\143\150\x65"))) { goto wkwamkgkwykeqkec; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto mogkoocsoeuyoqqa; } $wkcwykowmmmwioqs .= "\55\x6d\157\142\x69\154\145"; mogkoocsoeuyoqqa: wkwamkgkwykeqkec: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\137\117\x50\x54\111\115\111\x5a\x41\x54\x49\117\x4e\137\104\x4f\x4e\124\137\117\x50\x54\111\x4d\111\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\x61\x63\150\x65\x5f\162\x65\161\x75\x65\x73\x74\137\150\145\141\144\145\162\163")) { goto oimkeqocuguqqsqk; } $uykgysuswksgmwqy = apache_request_headers(); oimkeqocuguqqsqk: if ($uykgysuswksgmwqy) { goto oeocukauoyosicso; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\111\x46\x5f\115\117\x44\x49\106\x49\x45\104\x5f\123\111\116\103\x45", ''); goto suqceasgacskcmkc; oeocukauoyosicso: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\55\115\x6f\144\x69\x66\x69\x65\x64\x2d\x53\x69\156\143\x65"] ?? ''; suqceasgacskcmkc: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\137\157\160\x74\x69\155\x69\x7a\141\164\x69\157\156\x5f\x63\141\143\150\x65\x5f\150\164\155\154\x5f\144\157\x5f\147\145\x6e\x65\x72\141\x74\x65\x5f\143\141\143\x68\151\x6e\x67\137\x66\x69\154\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\137\117\120\x54\137\x43\x41\x43\x48\105\x5f\x44\117\116\x54\137\x45\x4e\x43\x4f\x44\105\137\x46\111\114\105\x4e\101\115\105\x53")) { goto uckewycoogsogwiy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); uckewycoogsogwiy: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\x66\x69\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ikuuiauwouuqawuw; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ikuuiauwouuqawuw: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\x2d\55\x20\x43\x61\143\150\x65\144\x20\146\x6f\162\x20\x67\162\145\141\x74\40\160\145\162\146\x6f\x72\x6d\x61\156\143\x65\x20\142\x79\40\x50\115\x50\122\x20\117\160\164\151\155\x69\172\141\x74\151\157\156\x20\x4d\157\x64\165\x6c\x65"; if (empty($cqgoimumaewouews)) { goto yoqakewookqoqacm; } $kaaaegwagmaoscys .= "\40\55\x20\104\145\x62\x75\x67\72\40\143\141\x63\x68\145\x64\100{$cqgoimumaewouews}"; yoqakewookqoqacm: $kaaaegwagmaoscys .= "\40\x2d\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\x2a\x29\167\x70\134\x2d\152\x73\157\156\x28\57\56\x2a\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto gswcoeiisamakwii; } return false; gswcoeiisamakwii: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\x61\x6c\x69\x6e\x6b\137\x73\164\162\165\x63\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ocywegekakimmwcq; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\x68"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\x70", "\x2e"], ['', "\x2f"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto yuimwyoywaiiqacs; } $ygygweamcggggmce = ''; yuimwyoywaiiqacs: ocywegekakimmwcq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

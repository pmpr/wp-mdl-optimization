<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668b0fe6d179             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\x63\150\x69\x6e\x67\x5f\x70\x72\x6f\143\145\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\164\x68"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto gygwewcqsmwqismo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; gygwewcqsmwqismo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\x6f\153\151\156\147\40\146\157\x72\40\x63\141\143\x68\x65\40\146\151\154\x65\x2e", ["\160\141\164\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\x70\137\145\x6e\x61\142\154\x65")) { goto gommacygsykyussk; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\172\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\137\x41\103\x43\105\120\124\137\x45\x4e\103\117\104\111\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\x7a\151\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto uougwgeyiokewkkm; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); uougwgeyiokewkkm: gommacygsykyussk: if (!@is_readable($xswggycymueygwse)) { goto ukqocwewouckikso; } $this->ecsimoiakyygwais($xswggycymueygwse); ukqocwewouckikso: $this->log("\x53\164\x61\162\x74\40\142\165\x66\146\145\x72\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\161\x63\161\x6b\x6f\x71\167\x63\x75\x6f\x71\165\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ucqmumuygcywwqma; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ucqmumuygcywwqma: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto uykousayyomcaeaa; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); uykousayyomcaeaa: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto uimeeckqksqeekqq; } $this->log("\103\141\156\x20\156\x6f\x74\x20\x73\164\141\x72\164\x20\x62\165\x66\146\145\x72\40\x70\162\157\x63\x65\163\163\54\x20\x6d\141\171\142\145\40\160\141\x67\145\x20\156\157\164\40\145\170\151\x73\164\x73\40\157\x72\40\156\x6f\164\40\141\143\164\151\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; uimeeckqksqeekqq: if ($this->omgegoiwsakgwwug()) { goto iuuuususuuuaieem; } $this->log("\x41\166\x6f\151\x64\x20\x63\141\x63\150\x65\x20\160\x61\x67\145\40\x62\171\40\x66\x69\154\164\145\x72", ["\146\151\154\164\145\x72" => "\160\x72\x5f\x6f\160\x74\x69\x6d\x69\172\x61\164\x69\x6f\156\137\x63\141\143\x68\x65\x5f\x68\164\x6d\x6c\x5f\x64\157\x5f\147\x65\156\145\162\141\x74\x65\x5f\x63\141\143\x68\x69\156\x67\x5f\x66\x69\154\x65\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; iuuuususuuuaieem: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto kocqqoyymosmuksu; } $this->log("\x63\x61\143\150\x65\x20\144\x69\x72\x65\143\164\x6f\x72\171\x20\x6e\157\164\x20\x67\145\x6e\145\162\x61\x74\145\x64\x3a\40{$qwqyukkaswwygsyg}"); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); uqokiksoqcwwqgio: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto qukocuwgakemmyga; } header("\x4c\x61\x73\x74\x2d\x4d\x6f\x64\151\146\151\145\144\72\40" . gmdate("\104\54\x20\144\40\115\x20\131\x20\x48\x3a\151\x3a\x73", filemtime($xswggycymueygwse)) . "\x20\x47\x4d\x54"); qukocuwgakemmyga: $this->log("\x50\x61\x67\x65\x20\143\x61\143\150\145\144\56", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\x68\145\x2d\x43\x6f\x6e\x74\x72\157\x6c\x3a\x20\x6e\x6f\x2d\163\x74\157\162\145\x2c\x20\x6e\157\55\143\x61\x63\x68\x65\54\40\155\x75\163\164\55\x72\145\166\141\x6c\x69\x64\x61\x74\x65\54\40\x6d\x61\x78\x2d\x61\x67\x65\75\60"); header("\x50\x72\x61\x67\x6d\141\72\40\156\x6f\55\x63\x61\x63\x68\145"); header("\105\170\x70\x69\x72\x65\163\72\x20" . gmdate("\104\54\40\x64\40\115\40\131\x20\x48\x3a\151\72\163\40\x5c\x47\x5c\115\x5c\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\55\115\x6f\x64\x69\146\x69\145\x64\72\40" . gmdate("\104\54\40\x64\x20\x4d\40\x59\40\x48\72\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto sioekkmekwygemyc; } readfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\x6e\x67\x20\x63\x61\x63\150\145\40\146\x69\x6c\145\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\x66\151\x65\144" => $cocykkikgmcykggu]); sioekkmekwygemyc: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\x73\164\55\115\x6f\x64\151\146\151\145\144\72\40" . gmdate("\x44\x2c\40\x64\x20\115\40\131\40\x48\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto yiowgigkkwsoqcci; } readgzfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\151\156\x67\40\147\172\151\x70\40\x63\x61\143\x68\145\x20\146\x69\x6c\x65\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\144\x69\146\x69\145\144" => $cocykkikgmcykggu]); yiowgigkkwsoqcci: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto ieqesiiageaauiuw; } return; ieqesiiageaauiuw: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto gamqcwuwkikwqoay; } return; gamqcwuwkikwqoay: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\x70\137\x65\x6e\141\142\x6c\145")) { goto iesekaeqeomeuaui; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\160"; if (!function_exists("\147\x7a\x65\x6e\x63\x6f\144\145")) { goto oyeyomcgkmgymogq; } $gomewsucumqsiske = apply_filters("\x70\x72\x5f\157\x70\164\151\x6d\x69\x7a\x61\x74\x69\157\x6e\137\143\x61\x63\x68\145\137\150\164\155\154\x5f\x67\x7a\145\x6e\x63\157\x64\x65\137\x6c\145\166\x65\154\x5f\143\x6f\x6d\x70\162\145\x73\x73\151\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto mscyggqcesgqqksu; } return; mscyggqcesgqqksu: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); oyeyomcgkmgymogq: iesekaeqeomeuaui: $this->log("\143\141\x63\x68\145\40\x66\x69\154\145\40\x67\145\156\145\x72\x61\x74\x65\144\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto wsesqmcqoiyyqkqi; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\x52\x56\105\122\x5f\120\x52\117\x54\x4f\103\117\114", '') . "\x20\x33\x30\x34\x20\116\x6f\164\40\115\157\x64\151\146\151\145\x64", true, 304); header("\x45\x78\x70\151\x72\145\163\72\40" . gmdate("\x44\x2c\x20\144\x20\x4d\40\131\40\110\x3a\151\x3a\x73") . "\x20\107\x4d\124"); header("\x43\x61\143\150\x65\x2d\x43\157\x6e\164\x72\x6f\x6c\72\x20\156\157\x2d\143\x61\143\x68\145\54\40\155\165\x73\x74\55\162\x65\x76\141\154\151\144\x61\164\145"); $this->log("\123\145\162\x76\x69\156\147\x20\x60\x33\60\x34\x60\x20\x63\141\143\x68\145\x20\146\151\x6c\x65\x2e", ["\x70\141\x74\150" => $esaqeawoigqgagum, "\x6d\157\144\x69\146\x69\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; wsesqmcqoiyyqkqi: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\x5b\x30\x2d\x39\x41\55\x46\135\173\62\175\x2f", [$this, "\155\161\x77\x6f\x73\x79\151\165\x6d\x65\167\x71\x65\x67\x6d\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\164\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\115\157\x62\x69\x6c\x65\137\104\x65\164\x65\x63\x74") && $this->aceaeommyuooiqge()->get("\155\x6f\142\151\x6c\145\x5f\143\x61\x63\x68\x65"))) { goto wkwamkgkwykeqkec; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto mogkoocsoeuyoqqa; } $wkcwykowmmmwioqs .= "\x2d\x6d\x6f\142\151\154\x65"; mogkoocsoeuyoqqa: wkwamkgkwykeqkec: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\x5f\117\x50\x54\x49\x4d\x49\x5a\101\x54\111\x4f\x4e\x5f\104\117\116\x54\137\x4f\x50\124\x49\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\x70\141\143\150\145\x5f\x72\145\161\165\145\x73\164\x5f\x68\x65\141\144\x65\x72\163")) { goto oimkeqocuguqqsqk; } $uykgysuswksgmwqy = apache_request_headers(); oimkeqocuguqqsqk: if ($uykgysuswksgmwqy) { goto oeocukauoyosicso; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\x50\137\111\x46\137\x4d\x4f\x44\111\x46\111\105\104\x5f\x53\x49\x4e\103\x45", ''); goto suqceasgacskcmkc; oeocukauoyosicso: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\x6f\144\x69\x66\x69\145\144\x2d\123\151\156\x63\x65"] ?? ''; suqceasgacskcmkc: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\157\x70\x74\x69\155\x69\172\141\164\151\157\156\x5f\143\141\x63\x68\x65\x5f\150\164\155\x6c\x5f\x64\157\x5f\147\145\x6e\145\162\141\164\145\137\143\141\143\x68\151\x6e\147\137\146\151\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\x52\137\117\120\124\x5f\x43\x41\x43\x48\105\x5f\104\117\x4e\x54\x5f\x45\116\103\x4f\104\x45\137\x46\111\x4c\105\x4e\101\115\105\123")) { goto uckewycoogsogwiy; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kwiggogcgciwuwqk: } yykqaowwsqgqysmq: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); uckewycoogsogwiy: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\x2f\x66\x69\x6c\145\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ikuuiauwouuqawuw; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ikuuiauwouuqawuw: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\55\x2d\x20\103\141\x63\150\145\144\40\146\157\x72\40\x67\x72\145\141\164\40\160\x65\x72\146\x6f\162\x6d\x61\x6e\143\x65\40\142\171\x20\120\115\120\122\x20\x4f\x70\x74\151\x6d\151\x7a\x61\164\x69\x6f\156\40\115\x6f\144\165\154\145"; if (empty($cqgoimumaewouews)) { goto yoqakewookqoqacm; } $kaaaegwagmaoscys .= "\x20\55\x20\104\x65\x62\165\147\72\x20\x63\141\143\150\x65\144\x40{$cqgoimumaewouews}"; yoqakewookqoqacm: $kaaaegwagmaoscys .= "\40\55\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\x28\x2e\x2a\x29\x77\x70\134\x2d\x6a\163\x6f\156\x28\57\56\x2a\174\x24\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto gswcoeiisamakwii; } return false; gswcoeiisamakwii: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\162\x6d\x61\154\x69\x6e\153\x5f\163\x74\162\x75\143\x74\x75\162\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ocywegekakimmwcq; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\x61\x74\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto yuimwyoywaiiqacs; } $ygygweamcggggmce = ''; yuimwyoywaiiqacs: ocywegekakimmwcq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

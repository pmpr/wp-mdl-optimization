<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663698627f721             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\x68\151\156\147\x5f\160\x72\x6f\143\x65\x73\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\150"], "\x2f") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto qoaawmmcqyacokws; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; qoaawmmcqyacokws: if (!$this->owikigcokkqsukeq()) { goto uwyeycaywowwiquu; } return; uwyeycaywowwiquu: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\157\157\153\x69\156\x67\x20\146\157\x72\x20\143\x61\x63\150\145\x20\x66\x69\x6c\145\56", ["\x70\x61\x74\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\160\x5f\x65\156\141\x62\x6c\145")) { goto eiecgqokmuekaesc; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\147\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\x50\x5f\101\103\103\105\120\124\x5f\x45\x4e\x43\117\104\x49\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto cwmuqmoeauqcewoy; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); cwmuqmoeauqcewoy: eiecgqokmuekaesc: if (!@is_readable($xswggycymueygwse)) { goto ggsugekocmsukuci; } $this->ecsimoiakyygwais($xswggycymueygwse); ggsugekocmsukuci: $this->log("\x53\164\141\x72\164\40\142\165\x66\x66\x65\162\56", ["\x70\141\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\143\x71\153\157\161\x77\143\x75\157\161\165\x73\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ceosmkqgqgwsowwg; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ceosmkqgqgwsowwg: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto kcwgiwimgqesukqu; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); kcwgiwimgqesukqu: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto wicuauokauykwoeu; } $this->log("\x43\x61\x6e\40\x6e\x6f\164\x20\x73\x74\x61\162\164\x20\142\165\x66\146\145\162\40\x70\162\x6f\x63\145\x73\x73\x2c\x20\x6d\x61\x79\x62\x65\40\x70\x61\147\x65\40\x6e\157\164\x20\145\170\151\x73\164\x73\40\x6f\x72\x20\156\x6f\164\x20\x61\x63\164\x69\x76\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; wicuauokauykwoeu: if ($this->omgegoiwsakgwwug()) { goto gcecieuocqawmgci; } $this->log("\101\x76\x6f\151\x64\x20\143\141\x63\x68\x65\40\x70\141\147\x65\40\142\171\40\x66\151\x6c\164\x65\x72", ["\146\x69\x6c\164\145\162" => "\160\162\x5f\157\x70\164\151\x6d\151\x7a\141\164\x69\x6f\x6e\137\x63\x61\143\150\x65\137\x68\x74\155\154\x5f\144\157\x5f\147\x65\156\x65\x72\x61\164\145\137\x63\141\143\150\151\156\x67\x5f\146\x69\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; gcecieuocqawmgci: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $wmgiiumwscoyqkqa = @mkdir($qwqyukkaswwygsyg) || @is_dir($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto msmmiaumiasmsiog; } $this->log("\143\141\x63\150\x65\x20\144\151\x72\145\x63\164\x6f\162\x79\x20\x6e\157\164\x20\x67\145\156\x65\x72\141\x74\x65\144\x3a\x20{$qwqyukkaswwygsyg}"); goto oksqsucimimsswcg; msmmiaumiasmsiog: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); oksqsucimimsswcg: if (!@file_exists($xswggycymueygwse)) { goto gqeoaceyoiicoaec; } header("\x4c\141\163\x74\x2d\115\x6f\144\x69\146\151\145\144\x3a\x20" . gmdate("\x44\x2c\x20\144\x20\115\40\131\40\110\x3a\151\72\163", filemtime($xswggycymueygwse)) . "\x20\107\x4d\124"); gqeoaceyoiicoaec: $this->log("\x50\141\x67\x65\x20\143\141\x63\150\x65\144\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\143\150\x65\x2d\103\x6f\156\x74\162\x6f\154\72\x20\x6e\157\x2d\x73\x74\157\x72\x65\x2c\40\x6e\157\55\x63\141\143\x68\x65\54\40\x6d\x75\x73\x74\55\162\x65\x76\141\x6c\151\x64\141\164\145\x2c\40\155\x61\x78\x2d\141\147\145\75\60"); header("\120\x72\x61\x67\x6d\141\x3a\x20\156\x6f\55\x63\x61\143\150\145"); header("\105\x78\x70\x69\162\x65\163\72\x20" . gmdate("\104\54\x20\x64\x20\x4d\x20\131\40\x48\x3a\151\72\163\40\x5c\107\x5c\x4d\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { if (!($sogksuscggsicmac = $this->gwkimsoowgiwqygs($esaqeawoigqgagum))) { goto kkckyqmcyussauma; } readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\x69\x6e\147\x20\x63\x61\143\x68\x65\x20\146\151\154\x65\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\145\144" => $sogksuscggsicmac]); kkckyqmcyussauma: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { if (!($sogksuscggsicmac = $this->gwkimsoowgiwqygs($esaqeawoigqgagum))) { goto ikukqooiowqywyqo; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\x72\166\151\x6e\147\x20\147\172\151\160\x20\143\141\143\150\145\x20\146\x69\154\x65\56", ["\x70\141\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\151\x66\x69\x65\x64" => $sogksuscggsicmac]); ikukqooiowqywyqo: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\145\155\x70"; if (!@file_exists($egqeikuccqmogcum)) { goto cciakcwuweqmcose; } return; cciakcwuweqmcose: if (@file_put_contents($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto uckusgwkoycmkeam; } return; uckusgwkoycmkeam: @rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\160\137\x65\156\141\142\154\145")) { goto qosswumywsaeyqus; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\x74\x65\155\160"; if (!function_exists("\x67\172\145\156\x63\157\144\145")) { goto mieoguuqiwqioeqa; } $gomewsucumqsiske = apply_filters("\x70\162\137\x6f\x70\x74\x69\155\151\172\x61\x74\151\x6f\x6e\137\143\141\x63\x68\x65\x5f\x68\164\x6d\x6c\x5f\147\x7a\145\x6e\143\x6f\x64\x65\x5f\x6c\x65\x76\x65\x6c\x5f\x63\x6f\x6d\160\162\145\x73\163\151\x6f\156", 6); if (@file_put_contents($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto gscyiqmmegqmqcoe; } return; gscyiqmmegqmqcoe: @rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); mieoguuqiwqioeqa: qosswumywsaeyqus: $this->log("\x63\x61\x63\150\145\x20\146\x69\154\x65\40\x67\x65\156\x65\162\x61\x74\145\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum) { header("\114\x61\x73\x74\x2d\115\x6f\x64\151\x66\151\x65\x64\72\x20" . gmdate("\104\54\40\144\40\115\40\x59\x20\x48\x3a\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto swicauyqusmgeccu; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\105\x52\x56\x45\x52\x5f\120\x52\117\x54\117\x43\117\x4c", '') . "\40\63\60\64\x20\x4e\157\164\40\115\x6f\144\x69\x66\x69\x65\144", true, 304); header("\x45\x78\x70\x69\x72\145\x73\72\40" . gmdate("\104\54\40\144\40\x4d\40\131\40\x48\x3a\x69\x3a\x73") . "\x20\107\115\124"); header("\103\x61\x63\150\145\55\103\x6f\x6e\x74\162\157\x6c\72\40\x6e\x6f\55\x63\x61\x63\x68\x65\x2c\x20\x6d\x75\163\x74\x2d\162\145\x76\x61\154\x69\144\x61\164\145"); $this->log("\123\x65\x72\x76\151\156\147\x20\140\x33\x30\x34\x60\40\x63\x61\143\x68\145\x20\x66\x69\154\145\56", ["\x70\x61\x74\x68" => $esaqeawoigqgagum, "\155\157\x64\x69\146\151\x65\144" => $cocykkikgmcykggu]); exit; swicauyqusmgeccu: return $cocykkikgmcykggu; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $wkcwykowmmmwioqs = "\x69\156\x64\x65\x78"; $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\60\x2d\71\101\x2d\x46\x5d\173\62\x7d\57", [$this, "\155\161\x77\157\x73\171\x69\x75\x6d\x65\x77\x71\145\147\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\x68\164\x6d\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x4d\157\142\x69\154\x65\137\104\145\164\145\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\157\x62\151\154\x65\x5f\143\x61\x63\150\x65"))) { goto icoiqskygugkgmkm; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto maguoggkqamaiuag; } $wkcwykowmmmwioqs .= "\55\x6d\157\x62\151\154\x65"; maguoggkqamaiuag: icoiqskygugkgmkm: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\x52\x5f\x4f\120\124\x49\115\111\x5a\x41\x54\111\117\116\x5f\104\117\116\x54\x5f\x4f\x50\x54\x49\115\111\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\141\x63\150\145\x5f\x72\145\x71\165\x65\163\x74\x5f\150\145\141\x64\145\x72\163")) { goto kocaieyauyiqmyiy; } $uykgysuswksgmwqy = apache_request_headers(); kocaieyauyiqmyiy: if ($uykgysuswksgmwqy) { goto gcqssckowmywoesw; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\x5f\111\106\x5f\x4d\x4f\104\x49\x46\x49\105\104\137\x53\111\116\103\x45", ''); goto eekkcooqswqouoei; gcqssckowmywoesw: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\x4d\x6f\144\151\x66\x69\145\x64\55\123\x69\x6e\143\145"] ?? ''; eekkcooqswqouoei: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\162\137\x6f\160\x74\151\155\151\x7a\x61\x74\x69\x6f\156\137\x63\141\143\x68\145\137\x68\x74\155\154\x5f\144\x6f\x5f\x67\145\156\x65\x72\x61\164\x65\137\x63\141\x63\x68\x69\x6e\x67\x5f\x66\151\154\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\117\120\x54\x49\115\111\x5a\101\124\111\117\116\x5f\x43\101\103\x48\105\137\104\x4f\x4e\x54\x5f\105\x4e\103\117\104\105\x5f\x46\111\114\105\x4e\101\115\105\123")) { goto iomwkkieqcswkkaw; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igmawmwssyskqqag: } cuayqmasemsqsume: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); iomwkkieqcswkkaw: return $mkomwsiykqigmqca . $migiiksoiymissge; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto eussqkkimciywios; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); eussqkkimciywios: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\x2d\x20\x43\x61\x63\150\145\x64\40\x66\157\162\x20\x67\162\145\x61\164\x20\160\145\162\x66\157\x72\x6d\141\156\x63\x65\40\x62\x79\40\120\115\120\122\x20\x4f\160\164\x69\x6d\151\x7a\141\164\151\x6f\156\x20\115\157\144\x75\154\x65"; if (empty($cqgoimumaewouews)) { goto ewsigoeswimiueqe; } $kaaaegwagmaoscys .= "\x20\x2d\40\104\x65\142\x75\x67\x3a\x20\x63\141\143\x68\145\144\x40{$cqgoimumaewouews}"; ewsigoeswimiueqe: $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\x2e\x2a\x29\167\x70\134\x2d\152\x73\x6f\156\50\57\x2e\x2a\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto gaskcgoeywuyukke; } return false; gaskcgoeywuyukke: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\162\x6d\x61\x6c\x69\156\x6b\x5f\x73\x74\162\x75\x63\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto okuqsqaiwwiigmyu; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\150\x70", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto gqaqamewqeaqwcia; } $ygygweamcggggmce = ''; gqaqamewqeaqwcia: okuqsqaiwwiigmyu: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } }

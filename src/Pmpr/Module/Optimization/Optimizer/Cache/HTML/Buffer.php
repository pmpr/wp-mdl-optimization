<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66bd21640c7ca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\x68\151\156\x67\137\160\162\157\143\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto ysiqakyaiooyscwy; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; ysiqakyaiooyscwy: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\x6f\x6f\x6b\x69\x6e\x67\40\x66\x6f\162\40\143\x61\143\x68\145\40\x66\x69\x6c\145\56", ["\160\x61\x74\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\172\151\160\137\145\x6e\x61\142\x6c\x65")) { goto ousmyagwsiooumos; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\x41\x43\103\x45\120\124\x5f\x45\116\x43\117\x44\111\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\151\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto auumaoycmsmsgigs; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); auumaoycmsmsgigs: ousmyagwsiooumos: if (!@is_readable($xswggycymueygwse)) { goto qeuyekusasqmcqms; } qeuyekusasqmcqms: $this->log("\123\164\x61\162\164\x20\x62\165\146\146\x65\162\x2e", ["\x70\141\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\x71\x6b\157\161\x77\143\x75\157\x71\165\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto yiceawuuiusakwiq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; yiceawuuiusakwiq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto sgocecweikecwwgq; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); sgocecweikecwwgq: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto qwisiamkmkkwucyo; } $this->log("\103\x61\x6e\40\156\157\x74\40\163\x74\x61\x72\164\40\142\165\146\x66\x65\x72\x20\160\x72\x6f\143\x65\163\x73\x2c\x20\x6d\x61\171\x62\145\x20\160\x61\147\x65\x20\156\157\164\x20\145\x78\x69\x73\164\x73\x20\x6f\162\x20\156\x6f\164\x20\141\143\x74\151\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; qwisiamkmkkwucyo: if ($this->omgegoiwsakgwwug()) { goto yqcusaeysomccaok; } $this->log("\x41\x76\x6f\x69\x64\x20\x63\x61\x63\x68\x65\x20\x70\141\x67\145\40\x62\171\40\146\x69\x6c\164\145\x72", ["\146\151\154\x74\145\162" => "\160\x72\137\x6f\x70\x74\151\155\151\x7a\141\164\151\x6f\x6e\x5f\143\141\x63\x68\x65\137\x68\164\155\154\137\144\x6f\x5f\x67\145\156\145\x72\141\164\x65\137\x63\x61\x63\150\151\x6e\147\137\x66\151\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; yqcusaeysomccaok: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto iwkckkeimmeoquyq; } $this->log("\143\141\143\x68\145\40\144\151\162\145\143\164\x6f\x72\x79\x20\x6e\x6f\x74\40\x67\x65\156\145\x72\x61\x74\145\144\72\x20{$qwqyukkaswwygsyg}"); goto masakmomqmeocqqg; iwkckkeimmeoquyq: masakmomqmeocqqg: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto yksywwikmeksikqc; } header("\114\141\163\x74\55\x4d\157\144\x69\146\151\x65\144\x3a\x20" . gmdate("\104\54\40\x64\40\x4d\40\x59\40\x48\72\x69\x3a\163", filemtime($xswggycymueygwse)) . "\40\107\x4d\124"); yksywwikmeksikqc: $this->log("\x50\x61\x67\x65\x20\143\141\143\150\x65\144\x2e", ["\160\141\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\143\x68\x65\x2d\103\x6f\x6e\164\162\x6f\x6c\x3a\40\156\157\55\x73\164\157\162\x65\x2c\40\156\x6f\55\x63\x61\143\150\145\54\40\x6d\165\x73\164\x2d\x72\145\166\x61\154\x69\144\x61\164\145\54\40\155\141\x78\x2d\141\147\145\x3d\x30"); header("\x50\162\x61\147\155\141\72\40\x6e\157\55\143\141\143\x68\x65"); header("\x45\x78\160\x69\162\145\x73\72\x20" . gmdate("\104\54\40\144\x20\x4d\x20\131\40\110\x3a\151\x3a\x73\40\134\x47\x5c\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\163\164\55\x4d\x6f\144\x69\x66\151\x65\144\x3a\x20" . gmdate("\104\54\x20\144\40\115\x20\131\x20\x48\72\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto yoqsigmoyaaceqky; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\x69\156\x67\x20\x63\x61\143\150\145\x20\146\x69\x6c\145\56", ["\160\x61\164\150" => $esaqeawoigqgagum, "\155\157\144\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); yoqsigmoyaaceqky: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\163\x74\x2d\115\x6f\x64\151\146\x69\145\x64\x3a\40" . gmdate("\104\54\x20\x64\x20\x4d\x20\131\40\x48\x3a\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto suqckoccuyeeymww; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\x76\x69\156\147\40\x67\172\151\160\40\143\141\143\150\145\40\x66\151\x6c\145\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\144\151\146\151\x65\x64" => $cocykkikgmcykggu]); suqckoccuyeeymww: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto giugwaeuwaomossq; } return; giugwaeuwaomossq: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto acgqaeakoyasgkku; } return; acgqaeakoyasgkku: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\x70\x5f\145\x6e\x61\x62\154\x65")) { goto mqgeseysuwcaqwiy; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\155\160"; if (!function_exists("\147\172\x65\156\x63\x6f\144\x65")) { goto ssagcgqaucssyego; } $gomewsucumqsiske = apply_filters("\160\162\137\157\x70\x74\151\x6d\151\x7a\141\164\151\x6f\x6e\137\x63\141\x63\x68\145\137\x68\x74\155\x6c\137\147\172\x65\x6e\143\157\x64\x65\x5f\x6c\x65\166\x65\154\137\143\x6f\x6d\x70\162\x65\x73\163\151\x6f\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto sycougcyeqmeiagk; } return; sycougcyeqmeiagk: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); ssagcgqaucssyego: mqgeseysuwcaqwiy: pmpr_do_action("\x70\x72\137\x6f\160\164\x69\155\151\x7a\141\x74\151\157\x6e\x5f\143\x61\143\x68\x65\x5f\150\164\155\154\x5f\x67\x65\x6e\x65\x72\x61\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\x68\145\40\x66\x69\154\145\x20\147\145\x6e\145\162\x61\164\x65\x64\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto ekoqieigyoeyauqa; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\122\137\x50\x52\x4f\124\117\103\117\x4c", '') . "\40\63\x30\64\40\116\157\x74\40\x4d\x6f\144\x69\x66\x69\x65\144", true, 304); header("\x45\x78\x70\x69\162\145\x73\x3a\40" . gmdate("\x44\54\x20\144\40\x4d\40\131\40\x48\x3a\x69\72\163") . "\40\x47\x4d\124"); header("\103\141\x63\150\145\55\x43\x6f\156\x74\162\157\154\72\40\156\x6f\55\x63\141\143\150\145\54\x20\x6d\x75\x73\x74\x2d\162\145\166\x61\154\151\x64\141\164\x65"); $this->log("\123\145\162\166\151\x6e\147\x20\x60\63\x30\64\140\x20\x63\141\x63\150\x65\x20\146\151\154\145\x2e", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\157\144\x69\x66\x69\145\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; ekoqieigyoeyauqa: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\144\x65\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\133\x30\x2d\x39\x41\x2d\106\x5d\173\x32\x7d\57", [$this, "\155\x71\167\x6f\x73\171\151\x75\155\145\167\x71\x65\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\150\x74\x6d\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\x65\x74\x65\143\164\151\157\x6e\x5c\x4d\x6f\x62\151\154\x65\x44\145\164\145\x63\164") && $this->aceaeommyuooiqge()->get("\155\157\142\151\154\145\137\x63\x61\x63\150\x65"))) { goto mimacwyuueomgwwy; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto cuwcsamuuqyuyqsu; } $wkcwykowmmmwioqs .= "\55\x6d\157\x62\151\x6c\x65"; cuwcsamuuqyuyqsu: mimacwyuueomgwwy: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\x50\122\x5f\x4f\120\x54\111\115\111\x5a\101\x54\111\x4f\116\137\104\x4f\116\124\137\117\x50\x54\111\115\111\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\141\x63\150\x65\137\x72\x65\161\x75\x65\163\x74\x5f\x68\145\141\144\x65\x72\163")) { goto ksckqkmwiqggykke; } $uykgysuswksgmwqy = apache_request_headers(); ksckqkmwiqggykke: if ($uykgysuswksgmwqy) { goto igwkcikeyoowosoi; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\111\106\x5f\115\117\x44\111\106\111\105\x44\x5f\123\x49\116\103\105", ''); goto iqsgossweywksoia; igwkcikeyoowosoi: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\x4d\x6f\144\151\146\151\145\144\55\123\x69\x6e\x63\145"] ?? ''; iqsgossweywksoia: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\157\160\x74\151\x6d\x69\172\141\164\151\157\156\137\143\141\x63\150\145\137\x68\164\x6d\x6c\x5f\144\157\x5f\147\145\156\x65\162\x61\x74\145\137\x63\141\143\x68\151\156\147\137\146\x69\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\x5f\117\x50\x54\x5f\x43\101\103\110\x45\x5f\x44\117\x4e\x54\x5f\x45\x4e\103\x4f\x44\x45\137\106\x49\114\x45\x4e\x41\x4d\105\123")) { goto ggeoqeowscwkeumy; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); cuommomwmsackoqc: } awaqksikyomsuaeo: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); ggeoqeowscwkeumy: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\x66\151\154\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto qyeswawykmasuqye; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); qyeswawykmasuqye: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\41\55\55\x20\x43\141\x63\150\x65\x64\40\146\x6f\x72\x20\x67\162\x65\141\x74\x20\160\x65\x72\x66\x6f\x72\x6d\141\x6e\x63\x65\40\x62\171\40\120\x4d\120\122\x20\x4f\160\x74\x69\x6d\151\172\x61\x74\x69\x6f\x6e\x20\115\157\144\165\x6c\145"; if (empty($cqgoimumaewouews)) { goto uwaimsisescsgyqk; } $kaaaegwagmaoscys .= "\40\x2d\40\104\x65\x62\165\147\x3a\x20\x63\x61\x63\150\x65\144\x40{$cqgoimumaewouews}"; uwaimsisescsgyqk: $kaaaegwagmaoscys .= "\40\x2d\55\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\x2a\x29\x77\160\x5c\55\152\163\157\156\50\57\56\x2a\x7c\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto uqcsksaywyqeumig; } return false; uqcsksaywyqeumig: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\x65\x72\x6d\x61\154\151\x6e\153\x5f\x73\164\x72\165\x63\164\165\162\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto ukwoswyyogmsygqg; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\x2e\160\x68\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto yggmaskeguaqkusc; } $ygygweamcggggmce = ''; yggmaskeguaqkusc: ukwoswyyogmsygqg: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

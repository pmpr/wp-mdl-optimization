<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c10d873e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Mobile_Detect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\x68\x69\156\x67\137\x70\x72\157\x63\145\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto mgwgiesscqoaqcau; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; mgwgiesscqoaqcau: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\x6f\x6b\x69\x6e\x67\x20\146\x6f\x72\40\143\x61\x63\150\145\40\146\x69\x6c\145\56", ["\x70\141\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\172\151\x70\x5f\x65\156\x61\142\x6c\x65")) { goto bgoygegmogcmeaou; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\x50\x5f\101\x43\103\x45\x50\124\x5f\105\x4e\103\x4f\x44\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\160"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto ioacywuoyuskqmwy; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); ioacywuoyuskqmwy: bgoygegmogcmeaou: if (!@is_readable($xswggycymueygwse)) { goto awgaewwsskasueke; } $this->ecsimoiakyygwais($xswggycymueygwse); awgaewwsskasueke: $this->log("\x53\x74\x61\162\164\x20\142\x75\146\x66\x65\162\56", ["\x70\x61\x74\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\x63\161\x6b\157\161\x77\143\165\157\x71\x75\163\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto cgmcwkmmcmmkiooc; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; cgmcwkmmcmmkiooc: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto iamooqskosymqsmw; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); iamooqskosymqsmw: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto wwccoougkywoaoui; } $this->log("\103\x61\156\x20\x6e\157\x74\40\163\x74\141\x72\x74\x20\x62\165\x66\146\145\162\40\160\162\x6f\x63\145\163\x73\54\40\x6d\x61\171\x62\145\40\x70\x61\147\x65\40\x6e\157\164\x20\145\170\x69\163\164\163\x20\x6f\x72\x20\x6e\x6f\164\40\141\x63\164\151\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; wwccoougkywoaoui: if ($this->omgegoiwsakgwwug()) { goto eygqeoiskweuiuqi; } $this->log("\x41\x76\x6f\151\144\x20\x63\141\143\x68\x65\40\x70\141\x67\x65\x20\x62\171\x20\x66\151\154\x74\x65\x72", ["\146\151\154\x74\x65\x72" => "\x70\x72\x5f\157\160\x74\x69\155\x69\x7a\141\x74\x69\x6f\x6e\x5f\143\x61\143\150\x65\x5f\x68\x74\155\x6c\x5f\x64\157\137\x67\145\x6e\x65\162\141\x74\x65\137\x63\141\143\x68\151\156\147\x5f\x66\x69\x6c\145\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; eygqeoiskweuiuqi: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto uykwmucgoywoesui; } $this->log("\x63\141\143\x68\145\x20\144\x69\x72\145\143\x74\x6f\162\171\x20\x6e\x6f\164\x20\x67\x65\x6e\145\x72\x61\164\145\144\72\40{$qwqyukkaswwygsyg}"); goto iisieuaeyiqwckou; uykwmucgoywoesui: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); iisieuaeyiqwckou: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto oskwkeaemiqcaqkc; } header("\114\x61\x73\x74\55\x4d\x6f\144\x69\x66\x69\x65\144\72\40" . gmdate("\x44\54\40\x64\40\x4d\40\x59\x20\x48\72\151\x3a\163", filemtime($xswggycymueygwse)) . "\x20\107\115\x54"); oskwkeaemiqcaqkc: $this->log("\120\x61\x67\145\40\x63\x61\x63\150\145\x64\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\x61\x63\x68\x65\x2d\x43\x6f\x6e\x74\x72\157\x6c\72\40\156\x6f\55\163\164\157\x72\x65\x2c\x20\156\157\x2d\x63\x61\143\150\145\54\x20\155\165\x73\164\55\162\x65\166\141\154\x69\x64\x61\164\145\x2c\x20\x6d\141\170\x2d\141\147\x65\75\x30"); header("\x50\x72\141\147\155\141\72\40\156\157\55\x63\141\x63\150\x65"); header("\105\x78\x70\x69\x72\145\x73\x3a\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\x20\131\40\110\x3a\151\72\x73\40\x5c\x47\134\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\x74\55\115\157\x64\151\146\x69\145\x64\72\40" . gmdate("\104\54\x20\x64\40\x4d\x20\x59\40\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kiqmcymowosckmii; } readfile($esaqeawoigqgagum); $this->log("\123\145\x72\x76\x69\156\147\40\x63\x61\143\x68\145\x20\x66\151\x6c\145\56", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\x64\x69\x66\151\x65\x64" => $cocykkikgmcykggu]); kiqmcymowosckmii: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\55\x4d\157\144\x69\146\x69\145\x64\72\x20" . gmdate("\104\54\x20\144\x20\115\40\131\x20\x48\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto iaygaasesyymwgss; } readgzfile($esaqeawoigqgagum); $this->log("\123\145\162\166\151\x6e\147\x20\147\172\x69\160\40\143\x61\143\x68\145\x20\x66\151\x6c\x65\56", ["\160\x61\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\146\x69\x65\x64" => $cocykkikgmcykggu]); iaygaasesyymwgss: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\x65\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto iwosouqsesoqcska; } return; iwosouqsesoqcska: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto iacwyogogoccmwsg; } return; iacwyogogoccmwsg: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\160\137\x65\156\141\x62\x6c\145")) { goto issgmmkcgesyeoas; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\x6d\160"; if (!function_exists("\x67\x7a\x65\x6e\143\157\x64\145")) { goto qsyqcokomswykyso; } $gomewsucumqsiske = apply_filters("\x70\x72\137\157\160\x74\x69\155\x69\x7a\141\x74\x69\157\x6e\137\143\x61\143\150\145\137\150\x74\x6d\154\x5f\x67\172\x65\156\x63\x6f\x64\x65\x5f\154\145\x76\145\154\137\x63\157\155\160\162\x65\x73\163\x69\157\156", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto wqmwcuggcisqieao; } return; wqmwcuggcisqieao: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); qsyqcokomswykyso: issgmmkcgesyeoas: $this->log("\x63\141\143\x68\145\x20\146\x69\154\145\40\x67\x65\156\x65\x72\x61\x74\x65\144\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto yeiicwscguyokwyu; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\126\x45\122\137\120\122\117\124\117\x43\x4f\x4c", '') . "\x20\63\60\x34\40\116\x6f\x74\x20\115\x6f\144\151\x66\151\145\144", true, 304); header("\105\x78\160\151\162\x65\163\x3a\40" . gmdate("\104\54\x20\144\x20\115\x20\x59\x20\110\72\151\x3a\x73") . "\40\x47\115\x54"); header("\x43\141\x63\x68\145\x2d\x43\157\156\164\162\157\154\x3a\40\156\x6f\x2d\x63\x61\x63\150\x65\x2c\x20\155\165\x73\x74\55\162\145\166\x61\154\x69\x64\x61\x74\x65"); $this->log("\123\145\162\166\151\156\147\40\x60\x33\x30\x34\x60\40\x63\x61\143\x68\x65\x20\x66\x69\154\145\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\x6f\144\151\146\151\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; yeiicwscguyokwyu: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\151\x6e\144\145\170"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\x25\133\60\x2d\71\x41\55\106\x5d\x7b\62\x7d\x2f", [$this, "\x6d\161\x77\157\x73\171\151\x75\155\x65\167\161\145\x67\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\150\x74\x6d\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x4d\157\x62\x69\x6c\145\137\104\145\x74\145\x63\164") && $this->aceaeommyuooiqge()->get("\x6d\x6f\142\x69\x6c\145\137\143\141\143\x68\145"))) { goto giuoqsumkimmuaya; } $swwqmuqmmyoquiyi = new Mobile_Detect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto yueosioyegouuwqo; } $wkcwykowmmmwioqs .= "\x2d\155\x6f\142\x69\x6c\x65"; yueosioyegouuwqo: giuoqsumkimmuaya: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\x5f\117\x50\x54\111\x4d\x49\x5a\x41\124\111\117\x4e\137\x44\117\116\124\137\x4f\120\x54\x49\115\x49\132\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\x61\x63\150\x65\x5f\x72\x65\x71\x75\145\x73\164\x5f\150\x65\x61\x64\x65\x72\163")) { goto mssaawaiaimogowg; } $uykgysuswksgmwqy = apache_request_headers(); mssaawaiaimogowg: if ($uykgysuswksgmwqy) { goto ccyiggckemwgooco; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\120\137\111\106\137\x4d\x4f\x44\x49\106\111\x45\x44\137\x53\x49\116\103\105", ''); goto umamqqwcoewcigew; ccyiggckemwgooco: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\55\115\x6f\x64\x69\146\x69\145\144\55\x53\151\x6e\x63\145"] ?? ''; umamqqwcoewcigew: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x70\x72\137\157\160\x74\x69\155\x69\x7a\141\x74\151\x6f\x6e\137\x63\141\143\150\x65\137\150\164\155\154\137\144\157\137\147\x65\156\x65\x72\141\x74\145\x5f\x63\x61\143\150\x69\x6e\x67\137\146\151\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\x5f\117\120\x54\x5f\103\x41\x43\110\x45\137\104\x4f\116\x54\x5f\x45\116\103\x4f\104\105\137\x46\x49\114\x45\x4e\101\115\105\123")) { goto kuimgwmkcgcoecko; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); gaiaucesmcqgqwac: } swkeiggkawwgewuw: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kuimgwmkcgcoecko: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\x66\151\154\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto oaskqsoyesmmeaew; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); oaskqsoyesmmeaew: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\x21\x2d\x2d\40\103\141\x63\x68\145\144\x20\x66\x6f\x72\x20\147\x72\x65\141\164\x20\x70\145\x72\x66\x6f\162\x6d\141\156\x63\x65\40\x62\x79\x20\x50\115\x50\x52\40\x4f\x70\164\x69\x6d\151\x7a\141\x74\x69\x6f\156\40\115\157\144\165\x6c\145"; if (empty($cqgoimumaewouews)) { goto aacaoywsaqscgyua; } $kaaaegwagmaoscys .= "\x20\x2d\x20\x44\x65\142\165\x67\x3a\40\x63\141\x63\x68\x65\144\x40{$cqgoimumaewouews}"; aacaoywsaqscgyua: $kaaaegwagmaoscys .= "\40\55\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\x2a\x29\x77\160\x5c\55\152\x73\x6f\x6e\x28\57\56\x2a\174\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto miigqygoawqmkkqm; } return false; miigqygoawqmkkqm: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\x72\x6d\141\154\151\x6e\153\137\163\x74\x72\165\x63\164\165\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if (!('' === $qmgwgiyuicsgkmcs)) { goto eykiuqsamowqykam; } $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\x74\150"])); $sycgeiyakseiumqy = str_replace(["\56\160\150\160", "\56"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto yywwaaiicukuwcao; } $ygygweamcggggmce = ''; yywwaaiicukuwcao: eykiuqsamowqykam: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90c227ba3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\141\x63\150\151\x6e\147\x5f\x70\x72\157\x63\145\163\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\141\x74\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto seieguyaaiqismgo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; seieguyaaiqismgo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\x4c\x6f\157\153\x69\x6e\147\x20\x66\157\162\x20\x63\141\x63\150\145\40\x66\151\x6c\x65\56", ["\x70\141\164\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\x70\137\x65\x6e\141\x62\154\x65")) { goto kkwqmewaksmokuqy; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\137\x67\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\x41\103\103\x45\x50\x54\137\105\x4e\x43\117\104\x49\x4e\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto qgyoesyiasqimcoe; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); qgyoesyiasqimcoe: kkwqmewaksmokuqy: if (!@is_readable($xswggycymueygwse)) { goto gsgkayokisiesciy; } $this->ecsimoiakyygwais($xswggycymueygwse); gsgkayokisiesciy: $this->log("\x53\164\141\162\x74\40\142\x75\x66\146\x65\162\56", ["\x70\x61\164\150" => $xswggycymueygwse]); ob_start([$this, "\157\x71\143\x71\x6b\157\161\x77\143\x75\x6f\x71\x75\163\153\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ascogkesqmuuaesq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ascogkesqmuuaesq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto askukaucmocewkgg; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); askukaucmocewkgg: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto kiemqsgcmouqscao; } $this->log("\103\x61\156\40\x6e\157\x74\40\x73\x74\x61\x72\x74\40\142\x75\x66\x66\145\162\40\x70\x72\x6f\143\x65\x73\x73\54\40\155\141\171\142\x65\40\x70\x61\x67\x65\40\x6e\157\x74\40\145\170\x69\x73\x74\x73\40\x6f\162\40\156\157\x74\x20\141\143\164\151\166\145"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; kiemqsgcmouqscao: if ($this->omgegoiwsakgwwug()) { goto wssaaemscmmiomee; } $this->log("\x41\x76\x6f\x69\x64\x20\143\141\x63\x68\x65\x20\x70\x61\x67\x65\x20\142\x79\x20\146\x69\154\164\145\x72", ["\146\151\154\x74\x65\x72" => "\x70\162\137\x6f\160\164\151\155\x69\x7a\x61\164\x69\x6f\x6e\x5f\x63\x61\x63\x68\145\137\x68\x74\x6d\x6c\x5f\144\x6f\137\x67\x65\x6e\x65\x72\141\x74\145\137\143\x61\143\150\x69\x6e\x67\137\x66\151\154\145\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wssaaemscmmiomee: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto meqmcgmksqiqcoyq; } $this->log("\143\141\143\150\x65\x20\x64\151\162\x65\143\164\157\162\171\40\x6e\x6f\164\40\x67\145\x6e\145\x72\141\x74\145\144\x3a\x20{$qwqyukkaswwygsyg}"); goto euskosgaksmimgug; meqmcgmksqiqcoyq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); euskosgaksmimgug: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto iusaeoimukymskgs; } header("\114\x61\x73\x74\x2d\x4d\x6f\x64\151\146\151\145\144\x3a\40" . gmdate("\x44\54\40\144\40\115\40\x59\40\110\x3a\x69\x3a\163", filemtime($xswggycymueygwse)) . "\40\x47\115\x54"); iusaeoimukymskgs: $this->log("\120\141\147\x65\40\x63\x61\x63\150\145\144\56", ["\x70\x61\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\143\x68\x65\x2d\x43\157\x6e\x74\162\x6f\154\x3a\40\x6e\157\55\x73\164\x6f\x72\x65\54\40\x6e\x6f\55\x63\x61\x63\150\145\54\x20\x6d\x75\x73\164\x2d\x72\145\166\141\x6c\151\x64\141\x74\x65\x2c\x20\155\141\170\55\141\x67\x65\x3d\x30"); header("\x50\162\x61\147\x6d\141\x3a\40\x6e\x6f\55\x63\x61\x63\x68\145"); header("\x45\170\x70\151\162\x65\x73\x3a\40" . gmdate("\x44\x2c\40\x64\40\x4d\40\x59\40\x48\x3a\x69\72\163\x20\134\107\134\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\x2d\115\x6f\x64\151\146\151\x65\x64\x3a\40" . gmdate("\104\x2c\40\144\x20\115\40\x59\40\110\72\151\x3a\163", filemtime($esaqeawoigqgagum)) . "\40\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto asciaakaoygususy; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\x76\151\x6e\147\x20\143\141\143\150\145\40\x66\x69\x6c\x65\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\157\144\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); asciaakaoygususy: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\x61\163\x74\x2d\x4d\x6f\x64\x69\x66\151\145\x64\x3a\x20" . gmdate("\104\x2c\40\144\x20\115\x20\x59\x20\x48\72\x69\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto eaggoasiwogmquwc; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\162\166\x69\x6e\x67\x20\x67\x7a\151\x70\x20\x63\141\x63\150\x65\x20\x66\151\x6c\x65\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\x6f\144\x69\146\151\x65\144" => $cocykkikgmcykggu]); eaggoasiwogmquwc: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\x74\145\x6d\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto meoweqcaaosoomeu; } return; meoweqcaaosoomeu: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ywmoieqkigsykequ; } return; ywmoieqkigsykequ: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\160\x5f\145\156\141\x62\154\145")) { goto muwyuiikuywigwso; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\172\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\145\155\160"; if (!function_exists("\147\x7a\x65\x6e\x63\157\144\x65")) { goto kkwucaoumyayagcq; } $gomewsucumqsiske = apply_filters("\160\x72\137\x6f\160\x74\x69\x6d\151\x7a\x61\164\151\157\156\137\x63\x61\x63\150\x65\x5f\150\x74\x6d\x6c\x5f\147\x7a\145\156\143\157\x64\x65\137\x6c\145\166\145\x6c\x5f\143\157\155\x70\x72\145\163\x73\x69\x6f\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto iaousaauoawkqkkg; } return; iaousaauoawkqkkg: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); kkwucaoumyayagcq: muwyuiikuywigwso: pmpr_do_action("\160\x72\x5f\157\160\164\151\155\151\x7a\x61\x74\x69\x6f\x6e\x5f\x63\x61\143\150\145\137\x68\x74\155\x6c\x5f\147\x65\x6e\145\x72\x61\x74\145\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\x68\145\40\146\x69\x6c\x65\x20\147\x65\156\x65\162\141\164\x65\x64\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto gikaiicgqyueeoco; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\x52\x5f\x50\122\x4f\124\x4f\103\117\x4c", '') . "\40\x33\60\64\x20\x4e\157\x74\40\115\x6f\144\151\146\151\145\x64", true, 304); header("\x45\x78\160\151\162\145\163\72\40" . gmdate("\x44\54\x20\144\40\115\40\131\40\x48\72\x69\x3a\x73") . "\40\x47\115\124"); header("\x43\x61\x63\x68\x65\x2d\x43\157\x6e\164\162\x6f\154\x3a\40\156\x6f\55\143\141\x63\x68\145\x2c\x20\x6d\x75\x73\164\55\162\x65\166\141\154\151\144\x61\164\x65"); $this->log("\123\x65\162\166\x69\x6e\x67\40\x60\63\x30\64\140\40\143\141\143\150\x65\x20\x66\151\x6c\145\56", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\155\157\x64\x69\x66\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; gikaiicgqyueeoco: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\x64\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\x5b\x30\x2d\x39\x41\x2d\x46\x5d\173\x32\x7d\57", [$this, "\155\x71\x77\157\x73\x79\x69\165\x6d\x65\167\x71\x65\147\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\x68\x74\x6d\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\145\164\x65\143\164\151\x6f\x6e\134\115\x6f\x62\151\x6c\145\x44\145\x74\x65\143\x74") && $this->aceaeommyuooiqge()->get("\155\157\142\151\x6c\x65\x5f\x63\x61\x63\150\145"))) { goto akoiqkoqmmmcieug; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto akcakssqcqcouwew; } $wkcwykowmmmwioqs .= "\55\x6d\x6f\142\151\x6c\x65"; akcakssqcqcouwew: akoiqkoqmmmcieug: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\x5f\x4f\120\124\111\115\x49\132\101\124\111\x4f\116\x5f\104\117\116\124\x5f\x4f\120\124\111\x4d\x49\x5a\x45", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\x70\141\143\x68\x65\137\162\145\161\x75\145\x73\x74\x5f\x68\x65\141\x64\x65\x72\x73")) { goto cgasgmiiqegqesic; } $uykgysuswksgmwqy = apache_request_headers(); cgasgmiiqegqesic: if ($uykgysuswksgmwqy) { goto yamoiggaeugmgkku; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\x54\120\137\111\106\x5f\x4d\x4f\104\x49\x46\x49\x45\104\137\x53\111\116\x43\x45", ''); goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\x2d\115\x6f\144\x69\x66\x69\x65\x64\x2d\123\x69\156\143\145"] ?? ''; eqekaoaioiykuaiw: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\x6f\160\x74\x69\155\151\x7a\x61\x74\x69\157\156\x5f\143\141\x63\150\145\137\x68\164\x6d\x6c\x5f\144\157\x5f\147\x65\156\x65\x72\141\x74\145\137\143\141\143\x68\x69\x6e\147\x5f\146\x69\x6c\145\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\x4f\x50\124\137\x43\x41\103\110\105\x5f\x44\x4f\x4e\124\137\x45\x4e\x43\x4f\x44\x45\x5f\x46\111\114\105\116\x41\115\x45\x53")) { goto oyywywoqaqcykucs; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); qkkqiagwgaoyauki: } qoiuwyogucoeaoew: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oyywywoqaqcykucs: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\x66\151\x6c\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iqeqqwcmaiqakawc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iqeqqwcmaiqakawc: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\x2d\x20\103\141\x63\150\145\x64\x20\x66\x6f\x72\x20\147\162\145\x61\x74\40\160\x65\x72\146\x6f\x72\x6d\x61\156\x63\145\40\x62\171\x20\120\115\120\x52\40\117\160\164\151\x6d\151\172\x61\x74\151\x6f\x6e\40\115\157\144\165\154\145"; if (empty($cqgoimumaewouews)) { goto gioqkcywauuckmua; } $kaaaegwagmaoscys .= "\40\55\x20\104\x65\x62\x75\x67\x3a\x20\143\141\x63\150\x65\x64\100{$cqgoimumaewouews}"; gioqkcywauuckmua: $kaaaegwagmaoscys .= "\40\x2d\x2d\x3e"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\52\51\167\160\x5c\x2d\x6a\163\157\x6e\50\57\56\52\174\44\x29"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto miaiggsoiaekmqwy; } return false; miaiggsoiaekmqwy: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\x61\x6c\x69\156\x6b\x5f\163\164\162\165\x63\x74\165\x72\x65"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\x2f" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto uqagqomggiacosqm; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\x70\150\x70", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto suoymucmyegewkmu; } $ygygweamcggggmce = ''; suoymucmyegewkmu: uqagqomggiacosqm: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a58598b21ed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\143\150\151\156\x67\137\160\162\x6f\x63\x65\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\x68"], "\57") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto ywsywoumuaykkeaa; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; ywsywoumuaykkeaa: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\157\157\153\x69\x6e\x67\x20\x66\157\162\x20\143\x61\x63\x68\x65\x20\x66\x69\154\145\x2e", ["\160\141\x74\150" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\147\172\x69\160\x5f\145\156\x61\142\154\x65")) { goto yaumwqeommqigswq; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\137\101\103\103\x45\120\x54\x5f\105\x4e\x43\x4f\x44\111\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\147\172\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto wsqiqkiucakewgou; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); wsqiqkiucakewgou: yaumwqeommqigswq: if (!@is_readable($xswggycymueygwse)) { goto wiiqigwgyuiuksia; } $this->ecsimoiakyygwais($xswggycymueygwse); wiiqigwgyuiuksia: $this->log("\x53\x74\141\162\164\x20\x62\x75\x66\x66\145\x72\x2e", ["\x70\x61\x74\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\161\x63\161\153\x6f\x71\167\143\165\x6f\161\x75\x73\x6b\x75"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto mqoygcuqwacgycek; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; mqoygcuqwacgycek: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto agyycikucwgmysee; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); agyycikucwgmysee: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto aiukiwqmikscoswm; } $this->log("\103\141\156\x20\x6e\157\164\40\163\x74\x61\x72\164\40\142\x75\x66\146\145\x72\40\x70\162\x6f\x63\145\163\163\54\x20\155\x61\171\x62\145\40\x70\141\x67\145\40\x6e\157\164\x20\145\170\x69\x73\x74\163\x20\x6f\x72\x20\156\x6f\164\40\141\143\x74\151\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; aiukiwqmikscoswm: if ($this->omgegoiwsakgwwug()) { goto mcmkqgkwyqoiikcq; } $this->log("\x41\x76\x6f\x69\x64\40\x63\x61\x63\150\x65\x20\x70\141\x67\145\40\x62\x79\40\x66\x69\x6c\x74\x65\x72", ["\146\151\x6c\164\145\x72" => "\160\162\137\157\160\x74\151\155\151\172\141\x74\151\x6f\x6e\x5f\x63\141\x63\x68\x65\x5f\150\x74\x6d\x6c\x5f\144\157\137\147\x65\x6e\145\x72\x61\164\x65\137\143\x61\x63\x68\x69\156\147\x5f\x66\151\154\145\x73"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; mcmkqgkwyqoiikcq: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto ssyukuseoymackeo; } $this->log("\x63\x61\143\x68\145\x20\x64\151\x72\x65\x63\x74\x6f\162\171\x20\156\157\164\40\147\x65\156\x65\162\141\164\x65\x64\72\40{$qwqyukkaswwygsyg}"); goto gskacikgkwcuauko; ssyukuseoymackeo: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); gskacikgkwcuauko: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto yyieomeeqycmikqw; } header("\x4c\x61\163\x74\55\x4d\157\144\x69\146\151\x65\x64\x3a\x20" . gmdate("\x44\x2c\x20\x64\x20\115\x20\131\40\x48\72\x69\x3a\x73", filemtime($xswggycymueygwse)) . "\40\x47\x4d\124"); yyieomeeqycmikqw: $this->log("\120\141\x67\145\x20\143\x61\143\x68\145\144\56", ["\x70\141\x74\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\x61\143\150\x65\55\x43\157\156\x74\x72\x6f\154\x3a\x20\x6e\x6f\55\x73\x74\x6f\x72\145\54\40\156\x6f\55\x63\141\x63\150\x65\x2c\x20\155\x75\x73\164\55\162\x65\166\141\x6c\x69\144\141\x74\x65\x2c\40\x6d\x61\170\55\x61\x67\145\x3d\x30"); header("\x50\162\x61\x67\155\x61\72\40\156\x6f\x2d\143\x61\x63\x68\145"); header("\x45\170\160\x69\x72\145\163\72\x20" . gmdate("\104\54\40\x64\40\115\x20\x59\40\110\72\x69\72\x73\x20\x5c\x47\x5c\115\134\x54", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\x2d\x4d\x6f\144\x69\146\151\x65\144\72\x20" . gmdate("\104\x2c\x20\x64\x20\115\x20\x59\40\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kwiuqqwamsimqgme; } readfile($esaqeawoigqgagum); $this->log("\x53\x65\x72\166\151\156\x67\x20\x63\141\143\150\x65\40\x66\x69\154\x65\x2e", ["\x70\141\164\150" => $esaqeawoigqgagum, "\x6d\157\144\x69\146\x69\x65\x64" => $cocykkikgmcykggu]); kwiuqqwamsimqgme: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\x2d\115\157\x64\x69\x66\151\x65\144\x3a\40" . gmdate("\x44\x2c\x20\144\40\115\x20\131\40\x48\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\40\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto qmegcmqemmywoqas; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\166\x69\156\x67\40\x67\172\151\160\40\x63\x61\143\x68\145\x20\x66\x69\154\x65\56", ["\160\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\x66\151\145\144" => $cocykkikgmcykggu]); qmegcmqemmywoqas: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\145\x6d\160"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto giooasyeqwaaocea; } return; giooasyeqwaaocea: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto uueywyysiicuauem; } return; uueywyysiicuauem: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\x67\x7a\x69\x70\137\145\x6e\x61\142\x6c\145")) { goto kkwqmewaksmokuqy; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\147\172\151\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\155\x70"; if (!function_exists("\x67\172\x65\x6e\x63\x6f\144\x65")) { goto qgyoesyiasqimcoe; } $gomewsucumqsiske = apply_filters("\160\162\137\x6f\160\164\x69\155\151\x7a\x61\164\x69\157\x6e\137\x63\x61\143\150\x65\x5f\x68\164\155\x6c\137\147\x7a\x65\x6e\143\x6f\144\x65\x5f\154\145\166\145\x6c\137\143\x6f\x6d\160\162\x65\163\x73\151\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto seieguyaaiqismgo; } return; seieguyaaiqismgo: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); qgyoesyiasqimcoe: kkwqmewaksmokuqy: pmpr_do_action("\160\x72\x5f\157\x70\x74\x69\155\x69\x7a\x61\164\151\157\x6e\x5f\x63\x61\x63\150\145\x5f\150\164\155\x6c\137\147\145\x6e\x65\162\141\x74\145\144", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\x63\x68\x65\40\146\x69\154\x65\x20\147\145\x6e\145\162\x61\x74\x65\144\56"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto gsgkayokisiesciy; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\x52\137\120\122\117\x54\x4f\x43\117\114", '') . "\40\x33\x30\64\x20\116\x6f\x74\x20\115\157\144\x69\146\x69\x65\144", true, 304); header("\x45\170\x70\x69\162\145\163\72\x20" . gmdate("\104\x2c\x20\x64\40\x4d\40\x59\x20\x48\x3a\151\x3a\163") . "\x20\107\115\124"); header("\103\x61\143\x68\x65\55\103\x6f\156\164\x72\157\x6c\72\40\x6e\x6f\x2d\143\x61\x63\x68\x65\x2c\x20\155\165\163\x74\55\x72\x65\166\x61\154\151\144\x61\164\x65"); $this->log("\123\145\x72\166\x69\156\147\x20\140\63\x30\x34\140\x20\x63\x61\x63\x68\145\x20\x66\x69\x6c\145\56", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\x6d\157\144\151\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; gsgkayokisiesciy: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\x25\x5b\60\55\71\101\x2d\x46\x5d\173\62\175\57", [$this, "\155\161\x77\157\163\171\151\x75\x6d\x65\167\x71\145\x67\155\x6b"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\77", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\x2f" . substr($wkcwykowmmmwioqs, 0, 250) . "\x2e\150\x74\155\x6c"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\145\164\145\x63\x74\151\157\156\x5c\115\157\x62\x69\x6c\x65\x44\x65\x74\145\143\164") && $this->aceaeommyuooiqge()->get("\155\157\x62\151\154\x65\x5f\143\x61\143\x68\145"))) { goto askukaucmocewkgg; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto ascogkesqmuuaesq; } $wkcwykowmmmwioqs .= "\55\155\x6f\x62\151\x6c\145"; ascogkesqmuuaesq: askukaucmocewkgg: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\x52\x5f\x4f\120\x54\111\x4d\x49\132\101\124\111\x4f\116\x5f\104\117\116\x54\137\x4f\120\x54\x49\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\x61\160\141\143\150\145\137\x72\x65\x71\x75\145\x73\164\x5f\x68\x65\141\144\145\162\x73")) { goto kiemqsgcmouqscao; } $uykgysuswksgmwqy = apache_request_headers(); kiemqsgcmouqscao: if ($uykgysuswksgmwqy) { goto wssaaemscmmiomee; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\x54\124\120\137\111\x46\x5f\x4d\x4f\104\111\x46\111\x45\x44\x5f\123\111\x4e\x43\105", ''); goto meqmcgmksqiqcoyq; wssaaemscmmiomee: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\115\x6f\x64\x69\x66\x69\x65\x64\55\x53\x69\156\x63\x65"] ?? ''; meqmcgmksqiqcoyq: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\x5f\157\x70\164\151\155\x69\x7a\141\x74\151\157\x6e\x5f\x63\141\x63\x68\x65\137\x68\x74\155\x6c\x5f\x64\157\137\147\x65\156\145\x72\x61\x74\145\x5f\143\x61\143\150\151\156\147\137\x66\x69\154\145\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\x5f\x43\101\x43\x48\x45\x5f\x44\x4f\116\x54\x5f\x45\x4e\x43\x4f\x44\x45\137\x46\x49\x4c\105\x4e\x41\x4d\105\x53")) { goto asciaakaoygususy; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iusaeoimukymskgs: } euskosgaksmimgug: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); asciaakaoygususy: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\134") . "\57\146\151\x6c\x65\163"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto eaggoasiwogmquwc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); eaggoasiwogmquwc: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\55\40\103\x61\x63\x68\x65\x64\x20\x66\x6f\162\40\x67\x72\145\x61\164\x20\x70\145\x72\146\157\162\155\x61\x6e\x63\145\40\142\171\40\x50\x4d\120\122\40\x4f\160\x74\x69\x6d\x69\x7a\141\x74\151\x6f\x6e\40\x4d\157\x64\165\x6c\x65"; if (empty($cqgoimumaewouews)) { goto meoweqcaaosoomeu; } $kaaaegwagmaoscys .= "\x20\x2d\x20\104\x65\142\165\x67\x3a\x20\143\x61\x63\x68\145\x64\100{$cqgoimumaewouews}"; meoweqcaaosoomeu: $kaaaegwagmaoscys .= "\x20\55\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\x28\56\52\51\x77\x70\134\55\152\163\157\x6e\50\57\x2e\x2a\x7c\x24\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\43{$seooyyaygyioqeue}\x23", $aweiaismcsuikses)) { goto ywmoieqkigsykequ; } return false; ywmoieqkigsykequ: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\145\x72\155\141\x6c\151\156\153\137\x73\164\162\165\143\x74\x75\x72\145"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\57"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto kkwucaoumyayagcq; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\150\160", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy)) { goto iaousaauoawkqkkg; } $ygygweamcggggmce = ''; iaousaauoawkqkkg: kkwucaoumyayagcq: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a69b17b7795             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\141\x63\x68\x69\x6e\x67\137\160\x72\x6f\x63\145\x73\163"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\150"], "\57") . "\57"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { goto seieguyaaiqismgo; } $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; seieguyaaiqismgo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $this->log("\114\x6f\157\153\151\156\147\40\x66\x6f\162\40\143\x61\x63\x68\145\40\x66\x69\x6c\x65\56", ["\x70\x61\164\x68" => $xswggycymueygwse]); if (!$this->aceaeommyuooiqge()->get("\x67\172\151\x70\x5f\x65\x6e\141\x62\x6c\145")) { goto kkwqmewaksmokuqy; } $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\x69\x70"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\120\137\101\103\x43\x45\120\x54\x5f\105\x4e\x43\117\x44\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\172\x69\x70"); if (!($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka))) { goto qgyoesyiasqimcoe; } $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); qgyoesyiasqimcoe: kkwqmewaksmokuqy: if (!@is_readable($xswggycymueygwse)) { goto gsgkayokisiesciy; } $this->ecsimoiakyygwais($xswggycymueygwse); gsgkayokisiesciy: $this->log("\x53\164\141\162\164\x20\x62\x75\146\x66\145\162\x2e", ["\160\x61\164\x68" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\x63\161\x6b\157\161\x77\x63\165\157\x71\x75\163\153\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ascogkesqmuuaesq; } $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; ascogkesqmuuaesq: $kaaaegwagmaoscys = ''; if (!$this->qmyusgwkaqieouwi($moooemyaqewumiay)) { goto askukaucmocewkgg; } $kaaaegwagmaoscys = $this->mgecqegqseukmmwg(); askukaucmocewkgg: if ($this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { goto kiemqsgcmouqscao; } $this->log("\103\141\x6e\40\156\157\x74\x20\x73\164\141\x72\164\40\x62\165\146\x66\145\x72\40\x70\x72\157\143\x65\x73\163\x2c\40\155\x61\171\142\145\40\x70\141\x67\x65\40\x6e\157\164\40\145\170\x69\x73\164\x73\x20\157\162\x20\x6e\157\164\x20\x61\143\x74\x69\x76\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay . $kaaaegwagmaoscys; kiemqsgcmouqscao: if ($this->omgegoiwsakgwwug()) { goto wssaaemscmmiomee; } $this->log("\x41\166\157\x69\x64\x20\x63\x61\143\x68\145\x20\x70\141\x67\145\40\142\171\40\146\x69\154\x74\x65\x72", ["\x66\151\154\164\x65\162" => "\x70\x72\x5f\157\160\164\x69\155\151\172\141\164\x69\157\x6e\137\143\141\x63\x68\x65\x5f\150\x74\155\x6c\137\144\x6f\x5f\x67\x65\156\x65\x72\x61\x74\x65\x5f\x63\x61\x63\150\151\x6e\x67\137\x66\151\154\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; wssaaemscmmiomee: $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { goto meqmcgmksqiqcoyq; } $this->log("\x63\x61\143\x68\145\40\144\151\x72\x65\x63\x74\157\x72\x79\40\156\157\x74\40\x67\145\x6e\x65\x72\x61\x74\x65\144\72\40{$qwqyukkaswwygsyg}"); goto euskosgaksmimgug; meqmcgmksqiqcoyq: $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); euskosgaksmimgug: if (!$swyigkueoywiacam->exists($xswggycymueygwse)) { goto iusaeoimukymskgs; } header("\x4c\141\x73\164\x2d\x4d\157\x64\x69\146\151\145\x64\72\40" . gmdate("\104\54\x20\x64\40\115\40\131\x20\110\72\151\72\x73", filemtime($xswggycymueygwse)) . "\x20\x47\115\124"); iusaeoimukymskgs: $this->log("\x50\141\x67\x65\40\x63\141\x63\x68\x65\144\56", ["\x70\141\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\x43\141\143\150\x65\55\x43\157\x6e\x74\162\x6f\x6c\72\40\156\157\x2d\163\x74\x6f\162\x65\x2c\x20\156\x6f\x2d\143\141\143\150\145\54\40\x6d\x75\x73\x74\x2d\x72\x65\x76\141\154\x69\144\141\164\x65\x2c\x20\x6d\x61\170\x2d\x61\147\x65\75\x30"); header("\120\x72\141\x67\x6d\x61\72\40\156\x6f\55\x63\141\x63\x68\145"); header("\x45\x78\x70\151\x72\x65\x73\72\x20" . gmdate("\104\x2c\40\144\40\x4d\x20\131\x20\110\72\x69\72\x73\40\134\107\x5c\x4d\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\x74\55\x4d\157\x64\x69\x66\151\145\144\72\x20" . gmdate("\x44\54\40\x64\x20\x4d\x20\131\x20\110\x3a\x69\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto asciaakaoygususy; } readfile($esaqeawoigqgagum); $this->log("\x53\145\x72\x76\x69\x6e\147\40\143\141\x63\150\145\x20\146\x69\154\145\56", ["\160\141\164\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\151\145\144" => $cocykkikgmcykggu]); asciaakaoygususy: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\164\x2d\x4d\x6f\x64\151\x66\x69\x65\144\72\40" . gmdate("\104\x2c\40\x64\x20\x4d\x20\x59\40\110\x3a\151\72\x73", filemtime($esaqeawoigqgagum)) . "\x20\107\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto eaggoasiwogmquwc; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\151\156\147\x20\147\x7a\151\160\x20\143\x61\143\x68\x65\x20\x66\151\154\145\x2e", ["\x70\141\164\x68" => $esaqeawoigqgagum, "\155\x6f\144\151\x66\x69\145\144" => $cocykkikgmcykggu]); eaggoasiwogmquwc: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\155\x70"; if (!$swyigkueoywiacam->exists($egqeikuccqmogcum)) { goto meoweqcaaosoomeu; } return; meoweqcaaosoomeu: if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { goto ywmoieqkigsykequ; } return; ywmoieqkigsykequ: $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if (!$this->aceaeommyuooiqge()->get("\147\x7a\x69\x70\x5f\145\156\x61\x62\154\145")) { goto muwyuiikuywigwso; } $ckikaauwqiigkskw = $esaqeawoigqgagum . "\x5f\x67\x7a\x69\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\164\x65\155\160"; if (!function_exists("\147\172\x65\x6e\143\x6f\x64\x65")) { goto kkwucaoumyayagcq; } $gomewsucumqsiske = apply_filters("\160\x72\137\157\160\x74\x69\155\x69\172\141\x74\151\x6f\x6e\137\x63\x61\x63\150\145\137\150\x74\155\x6c\x5f\x67\x7a\x65\156\x63\157\144\x65\x5f\154\x65\166\x65\x6c\x5f\x63\157\155\160\x72\x65\x73\x73\151\157\x6e", 6); if ($swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { goto iaousaauoawkqkkg; } return; iaousaauoawkqkkg: $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); kkwucaoumyayagcq: muwyuiikuywigwso: pmpr_do_action("\160\162\x5f\157\160\164\x69\155\x69\x7a\141\164\151\x6f\x6e\x5f\x63\x61\x63\x68\x65\137\x68\164\x6d\154\x5f\147\x65\x6e\x65\162\x61\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\143\141\x63\x68\x65\x20\146\x69\x6c\145\40\x67\x65\x6e\x65\162\x61\164\x65\x64\x2e"); } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto gikaiicgqyueeoco; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\122\126\x45\x52\137\x50\122\117\x54\x4f\x43\117\x4c", '') . "\x20\63\x30\64\x20\x4e\157\164\40\115\157\144\151\x66\151\x65\x64", true, 304); header("\105\170\x70\x69\x72\145\x73\x3a\x20" . gmdate("\x44\54\x20\144\40\115\40\131\40\110\x3a\x69\x3a\x73") . "\x20\x47\x4d\124"); header("\103\x61\x63\150\145\x2d\103\x6f\x6e\x74\x72\157\154\72\40\x6e\x6f\55\143\x61\143\x68\x65\54\40\155\x75\163\x74\55\x72\145\166\141\x6c\151\144\x61\164\145"); $this->log("\x53\x65\x72\x76\151\156\147\40\140\x33\60\64\140\x20\x63\141\143\150\145\40\x66\151\x6c\x65\x2e", ["\x70\x61\164\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\x69\145\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; gikaiicgqyueeoco: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(array $ywmkwiwkosakssii = []) : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\x6e\x64\x65\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\x2f\45\133\60\55\71\101\55\106\135\173\62\175\x2f", [$this, "\x6d\161\x77\x6f\163\171\151\165\155\x65\x77\161\145\x67\x6d\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\x23", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . "\56\150\x74\155\154"; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (!(class_exists("\x44\145\x74\145\x63\164\x69\x6f\156\134\115\157\142\151\x6c\145\x44\x65\164\145\x63\164") && $this->aceaeommyuooiqge()->get("\155\157\142\151\x6c\145\137\x63\x61\x63\x68\x65"))) { goto akoiqkoqmmmcieug; } $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if (!($iomcqougosimesoq && !$aasascamegmwqmqk)) { goto akcakssqcqcouwew; } $wkcwykowmmmwioqs .= "\x2d\155\x6f\142\151\154\x65"; akcakssqcqcouwew: akoiqkoqmmmcieug: return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\137\117\120\x54\x49\115\x49\132\101\x54\x49\x4f\x4e\x5f\104\117\116\124\137\x4f\120\x54\x49\115\x49\x5a\105", true); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (!function_exists("\141\160\x61\x63\x68\x65\x5f\162\x65\x71\x75\x65\x73\164\137\x68\145\141\x64\145\162\163")) { goto cgasgmiiqegqesic; } $uykgysuswksgmwqy = apache_request_headers(); cgasgmiiqegqesic: if ($uykgysuswksgmwqy) { goto yamoiggaeugmgkku; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\x49\x46\137\x4d\x4f\x44\111\x46\111\x45\x44\137\x53\111\116\x43\105", ''); goto eqekaoaioiykuaiw; yamoiggaeugmgkku: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\x2d\115\157\144\151\x66\x69\x65\144\55\x53\151\x6e\x63\x65"] ?? ''; eqekaoaioiykuaiw: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\x72\x5f\x6f\160\x74\151\x6d\151\172\141\164\x69\157\156\137\x63\141\x63\150\145\x5f\x68\164\155\154\x5f\x64\157\137\147\x65\x6e\145\x72\x61\x74\145\137\143\141\x63\150\151\x6e\147\x5f\146\x69\x6c\x65\163", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if ($this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\120\122\137\x4f\120\x54\137\103\x41\x43\x48\105\x5f\x44\117\x4e\124\137\x45\x4e\x43\x4f\104\105\137\x46\111\114\x45\116\101\x4d\x45\123")) { goto oyywywoqaqcykucs; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); qkkqiagwgaoyauki: } qoiuwyogucoeaoew: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); oyywywoqaqcykucs: return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\x2f\x5c") . "\x2f\x66\151\x6c\x65\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto iqeqqwcmaiqakawc; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); iqeqqwcmaiqakawc: return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\74\41\x2d\x2d\x20\103\x61\143\x68\x65\x64\x20\146\x6f\162\40\147\162\145\x61\164\40\x70\x65\x72\146\x6f\162\x6d\141\156\143\x65\x20\x62\x79\x20\120\x4d\x50\x52\40\x4f\x70\x74\x69\x6d\151\172\x61\x74\x69\x6f\x6e\x20\x4d\157\x64\165\x6c\x65"; if (empty($cqgoimumaewouews)) { goto gioqkcywauuckmua; } $kaaaegwagmaoscys .= "\x20\55\40\x44\x65\x62\x75\147\72\x20\x63\141\x63\150\x65\x64\100{$cqgoimumaewouews}"; gioqkcywauuckmua: $kaaaegwagmaoscys .= "\x20\x2d\55\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\x7c", ["\50\56\x2a\x29\x77\x70\134\x2d\152\x73\x6f\156\x28\x2f\x2e\52\x7c\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (!preg_match("\x23{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { goto miaiggsoiaekmqwy; } return false; miaiggsoiaekmqwy: $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\x70\x65\162\x6d\141\x6c\151\156\x6b\x5f\163\164\x72\165\143\164\165\x72\x65"); $qmgwgiyuicsgkmcs = "\57" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\x2f"; if (!('' === $qmgwgiyuicsgkmcs)) { goto uqagqomggiacosqm; } $ygygweamcggggmce = "\57" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\x70\141\x74\x68"])); $sycgeiyakseiumqy = str_replace(["\x2e\x70\x68\x70", "\x2e"], ['', "\57"], $sycgeiyakseiumqy); if (!("\57" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\x2f") === $sycgeiyakseiumqy)) { goto suoymucmyegewkmu; } $ygygweamcggggmce = ''; suoymucmyegewkmu: uqagqomggiacosqm: return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

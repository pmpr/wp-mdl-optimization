<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b20ad5f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use JsonException; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; class Buffer extends BaseClass { protected ?string $id = "\143\x61\x63\x68\x69\156\x67\137\x70\x72\157\143\145\163\x73"; protected Config $config; protected ?string $path; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = rtrim($ywmkwiwkosakssii["\160\x61\x74\x68"], "\x2f") . "\x2f"; $this->config = $uiewakwqscemywuo; parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->uuaescmsowgiiksa(); $this->gwaoiqgsuaggegwc(); return; } $xswggycymueygwse = $this->gskqygiceygcguyo(); $kqeuymmkaacwmkic = $this->gskqygiceygcguyo("\x2e\x6a\x73\157\156"); $this->log("\x4c\x6f\x6f\153\151\x6e\x67\x20\x66\157\162\x20\x63\141\143\150\145\x20\146\x69\x6c\x65\x2e", ["\x70\x61\x74\150" => $xswggycymueygwse]); if (@is_readable($kqeuymmkaacwmkic)) { $this->egygswiqouyukscu($kqeuymmkaacwmkic); } if ($this->aceaeommyuooiqge()->get("\x67\172\151\x70\137\x65\156\141\x62\x6c\x65")) { $gqkgiwwgeyuauoka = $xswggycymueygwse . "\x5f\147\x7a\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\137\x41\103\x43\105\x50\x54\137\105\116\x43\x4f\x44\x49\116\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && str_contains($wicowimsieqwwsuu, "\x67\172\151\160"); if ($acggykmsksykwyqy && @is_readable($gqkgiwwgeyuauoka)) { $this->qmkgowiegksamcou($gqkgiwwgeyuauoka); } } if (@is_readable($xswggycymueygwse)) { $this->ecsimoiakyygwais($xswggycymueygwse); } $this->log("\123\x74\x61\162\x74\40\x62\165\x66\x66\x65\162\x2e", ["\160\141\x74\150" => $xswggycymueygwse]); ob_start([$this, "\x6f\x71\143\161\x6b\157\161\x77\143\165\157\x71\165\x73\x6b\165"]); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { if (!$this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->gwaoiqgsuaggegwc(); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->wmgoigiyyeauqwaq()->iekaosoqsgqsysoo()) { $this->log("\103\x61\156\40\x6e\157\x74\40\x73\x74\x61\x72\x74\x20\x62\165\146\x66\145\162\40\x70\x72\157\x63\145\x73\x73\x2c\40\x6d\x61\x79\142\x65\40\160\x61\147\x65\x20\x6e\157\x74\40\145\x78\151\163\x74\x73\x20\x6f\162\40\156\x6f\x74\x20\141\143\164\x69\166\x65"); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } if (!$this->omgegoiwsakgwwug()) { $this->log("\101\166\x6f\x69\144\x20\x63\x61\x63\x68\x65\40\x70\141\x67\145\40\x62\x79\40\146\x69\x6c\x74\145\162", ["\x66\x69\154\x74\145\x72" => "\x70\162\137\x6f\160\x74\151\155\x69\x7a\141\164\x69\157\156\137\x63\141\143\x68\145\137\150\164\x6d\x6c\x5f\144\157\x5f\x67\145\156\x65\x72\141\x74\145\x5f\143\141\143\150\x69\x6e\147\x5f\x66\151\x6c\x65\163"]); $this->gaqeieassgeyyioi(); return $moooemyaqewumiay; } $kaaaegwagmaoscys = ''; if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { $moooemyaqewumiay .= $this->mgecqegqseukmmwg(); } $xswggycymueygwse = $this->gskqygiceygcguyo(); $qwqyukkaswwygsyg = dirname($xswggycymueygwse); $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $wmgiiumwscoyqkqa = $swyigkueoywiacam->mkdir($qwqyukkaswwygsyg) || $swyigkueoywiacam->asysewkmisimumay($qwqyukkaswwygsyg); if ($wmgiiumwscoyqkqa) { $this->qsokwouigmyqagkc($this->gskqygiceygcguyo("\x2e\x6a\163\x6f\x6e")); $this->uwoqksyucwysuqeo($xswggycymueygwse, $moooemyaqewumiay); } else { $this->log("\143\141\x63\150\x65\40\144\151\x72\x65\143\164\157\162\x79\x20\x6e\157\x74\40\147\x65\156\x65\x72\x61\164\x65\144\72\x20{$qwqyukkaswwygsyg}"); } if ($swyigkueoywiacam->exists($xswggycymueygwse)) { header("\x4c\x61\163\164\x2d\115\157\x64\151\x66\x69\145\144\72\40" . gmdate("\x44\x2c\x20\144\x20\x4d\40\131\40\x48\72\x69\72\x73", filemtime($xswggycymueygwse)) . "\x20\x47\x4d\x54"); } $this->log("\x50\141\147\x65\x20\x63\141\x63\x68\x65\x64\x2e", ["\x70\x61\164\150" => $xswggycymueygwse]); return $moooemyaqewumiay . $kaaaegwagmaoscys; } private function gaqeieassgeyyioi() { header("\103\141\x63\x68\x65\x2d\x43\157\x6e\164\x72\157\154\x3a\x20\x6e\x6f\55\x73\x74\x6f\162\145\x2c\40\156\157\55\143\141\143\x68\x65\54\x20\155\165\163\164\x2d\162\x65\x76\x61\x6c\x69\x64\141\164\145\x2c\x20\x6d\141\170\x2d\x61\x67\145\x3d\x30"); header("\x50\x72\x61\147\x6d\x61\72\40\x6e\x6f\x2d\143\141\x63\150\x65"); header("\x45\x78\160\151\162\x65\163\72\x20" . gmdate("\104\x2c\40\x64\x20\115\40\x59\40\110\x3a\x69\x3a\163\40\x5c\107\134\115\134\124", time())); } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\x61\x73\x74\x2d\x4d\x6f\x64\151\146\151\x65\144\x3a\40" . gmdate("\x44\54\x20\x64\x20\x4d\40\131\40\x48\x3a\x69\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readfile($esaqeawoigqgagum); $this->log("\123\x65\162\x76\151\156\147\40\x63\x61\143\150\x65\x20\x66\x69\x6c\x65\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); } exit; } private function egygswiqouyukscu(?string $esaqeawoigqgagum) { try { $uykgysuswksgmwqy = json_decode(@file_get_contents($esaqeawoigqgagum), true, 512, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (JsonException $iewosgggaueeyymg) { $uykgysuswksgmwqy = []; } if ($uykgysuswksgmwqy) { foreach ($uykgysuswksgmwqy as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (is_numeric($ymqmyyeuycgmigyo)) { header($eqgoocgaqwqcimie, false); } else { header("{$ymqmyyeuycgmigyo}\72\40{$eqgoocgaqwqcimie}", false); } } $this->log("\x53\145\162\x76\x69\156\147\x20\x63\x61\143\x68\x65\x20\x68\145\141\x64\x65\162\163\x2e", ["\x70\141\x74\x68" => $esaqeawoigqgagum]); } } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\141\x73\164\55\x4d\x6f\144\x69\x66\x69\x65\x64\72\x20" . gmdate("\x44\x2c\40\x64\40\x4d\x20\131\x20\x48\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\40\107\x4d\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if (!$this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { readgzfile($esaqeawoigqgagum); $this->log("\x53\145\162\x76\x69\156\x67\40\x67\x7a\x69\x70\x20\143\x61\143\150\145\40\146\151\x6c\x65\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\x69\x65\144" => $cocykkikgmcykggu]); } exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\x6d\160"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc)) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); if ($this->aceaeommyuooiqge()->get("\147\x7a\151\x70\137\145\156\141\142\x6c\145")) { $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\x7a\x69\x70"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\155\x70"; if (function_exists("\147\172\x65\156\x63\x6f\x64\x65")) { $gomewsucumqsiske = apply_filters("\x70\x72\137\157\x70\x74\151\155\x69\x7a\141\164\151\x6f\x6e\137\143\x61\143\x68\145\137\150\164\155\x6c\x5f\147\172\145\156\143\x6f\144\145\137\x6c\145\x76\x65\x6c\137\x63\157\155\160\162\145\x73\x73\151\157\156", 6); if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske))) { return; } $swyigkueoywiacam->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw); } } pmpr_do_action("\160\162\x5f\x6f\x70\x74\151\155\x69\x7a\x61\164\x69\157\x6e\x5f\143\141\143\150\145\137\x68\x74\x6d\x6c\x5f\x67\x65\x6e\145\162\x61\x74\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x63\x61\143\150\x65\40\146\151\154\145\x20\147\x65\x6e\x65\x72\141\x74\x65\144\x2e"); } private function qsokwouigmyqagkc(?string $esaqeawoigqgagum) { $uykgysuswksgmwqy = apply_filters("\160\162\x5f\x6f\160\164\x69\155\x69\x7a\x61\164\151\x6f\x6e\x5f\x63\x61\x63\x68\145\137\x68\x65\141\x64\145\x72\x73\x5f\x6c\x69\163\x74", []); if ($uykgysuswksgmwqy) { $swyigkueoywiacam = $this->yoaykkqyeucsckwc(); $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\164\x65\x6d\x70"; if ($swyigkueoywiacam->exists($egqeikuccqmogcum)) { return; } if (!$swyigkueoywiacam->kwsmkgyoyaqecwuu($egqeikuccqmogcum, wp_json_encode($uykgysuswksgmwqy, JSON_UNESCAPED_SLASHES))) { return; } $swyigkueoywiacam->rename($egqeikuccqmogcum, $esaqeawoigqgagum); pmpr_do_action("\x70\x72\x5f\157\160\164\x69\x6d\151\172\141\x74\x69\x6f\x6e\137\143\x61\143\x68\x65\137\x68\x65\141\x64\x65\x72\x73\137\x67\x65\x6e\x65\x72\141\164\x65\x64", $esaqeawoigqgagum, $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk()); $this->log("\x68\x65\141\x64\x65\x72\x73\40\x63\x61\143\x68\x65\x20\146\151\x6c\x65\x20\147\x65\x6e\x65\x72\141\x74\x65\x64\56"); } } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if ($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum)) { header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\126\105\x52\137\x50\122\x4f\x54\117\103\x4f\x4c", '') . "\x20\x33\60\x34\x20\116\157\164\40\115\x6f\144\x69\x66\151\x65\144", true, 304); header("\105\x78\160\151\x72\145\163\x3a\40" . gmdate("\104\54\40\144\x20\115\40\x59\40\x48\72\151\x3a\x73") . "\40\107\x4d\x54"); header("\103\141\x63\150\x65\55\103\157\156\x74\x72\x6f\x6c\72\x20\x6e\157\x2d\x63\x61\143\x68\x65\x2c\x20\x6d\165\163\164\x2d\x72\x65\166\141\x6c\x69\144\x61\164\145"); $this->log("\123\145\x72\166\151\156\147\x20\140\63\x30\x34\x60\x20\143\x61\x63\150\145\x20\146\151\154\x65\x2e", ["\160\141\x74\x68" => $esaqeawoigqgagum, "\x6d\157\x64\151\146\151\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; } return $cwacgiwykekaekoq; } public function gskqygiceygcguyo(string $sqeykgyoooqysmca = "\56\x68\164\x6d\154") : string { $osqkgokmuiasuukg = $this->wmgoigiyyeauqwaq()->wemyikwikgwqwuoc(); $qcswgsumcekweawy = $this->scsyywuaiumequqw($osqkgokmuiasuukg); $wkcwykowmmmwioqs = "\x69\156\144\145\x78"; $wkcwykowmmmwioqs = $this->cqmsiiewqgswuiqa($wkcwykowmmmwioqs); $qcswgsumcekweawy = preg_replace_callback("\57\45\133\60\x2d\71\101\55\x46\x5d\173\x32\x7d\57", [$this, "\x6d\161\x77\157\163\x79\x69\165\x6d\145\x77\161\x65\x67\155\153"], $qcswgsumcekweawy); $qcswgsumcekweawy = str_replace("\x3f", "\43", $qcswgsumcekweawy); $qcswgsumcekweawy .= "\57" . substr($wkcwykowmmmwioqs, 0, 250) . $sqeykgyoooqysmca; return $qcswgsumcekweawy; } public function cqmsiiewqgswuiqa(string $wkcwykowmmmwioqs) : string { if (class_exists("\104\x65\164\145\x63\x74\x69\x6f\x6e\x5c\115\157\x62\151\154\145\104\x65\x74\x65\143\x74") && $this->aceaeommyuooiqge()->get("\x6d\157\142\151\154\x65\137\x63\x61\x63\x68\145")) { $swwqmuqmmyoquiyi = new MobileDetect(); $iomcqougosimesoq = $swwqmuqmmyoquiyi->isMobile(); $aasascamegmwqmqk = $swwqmuqmmyoquiyi->isTablet(); if ($iomcqougosimesoq && !$aasascamegmwqmqk) { $wkcwykowmmmwioqs .= "\55\155\157\x62\151\x6c\x65"; } } return $wkcwykowmmmwioqs; } private function uuaescmsowgiiksa() { $this->wmgoigiyyeauqwaq()->wwckmeoskuagomki("\120\122\x5f\117\x50\x54\111\115\x49\132\101\124\111\117\116\x5f\104\117\116\x54\137\117\x50\124\111\x4d\x49\x5a\x45", "\146\x6f\x72\143\x65\144\x20\x62\171\x20\155\x6f\x64\x75\154\145"); } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = false; if (function_exists("\141\160\x61\143\x68\x65\137\162\x65\x71\x75\x65\x73\164\137\150\145\x61\144\x65\162\x73")) { $uykgysuswksgmwqy = apache_request_headers(); } if ($uykgysuswksgmwqy) { $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\146\55\115\157\x64\x69\146\x69\145\144\x2d\123\x69\x6e\x63\x65"] ?? ''; } else { $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\124\120\x5f\111\x46\x5f\115\x4f\x44\111\x46\111\x45\x44\x5f\x53\111\116\x43\x45", ''); } return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\160\162\137\x6f\160\x74\151\155\x69\x7a\x61\x74\x69\157\156\x5f\143\141\x63\150\145\x5f\x68\164\155\154\137\x64\x6f\137\x67\145\x6e\x65\x72\141\x74\145\137\143\141\x63\x68\x69\x6e\x67\x5f\146\x69\x6c\x65\x73", true); } private function scsyywuaiumequqw($osqkgokmuiasuukg) : string { $mkomwsiykqigmqca = $this->amqagusacuuuaswg(); $gwgucoaaqcwwciqq = $this->aceaeommyuooiqge()->mmqyysequeygeaii(); $magawcseesgowoeo = $this->wmgoigiyyeauqwaq()->aakgigyaookyiaqk(); $migiiksoiymissge = $gwgucoaaqcwwciqq . $magawcseesgowoeo; if (!$this->wmgoigiyyeauqwaq()->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x5f\x43\101\x43\110\x45\x5f\x44\117\x4e\x54\137\x45\x4e\103\117\104\105\x5f\x46\x49\x4c\x45\116\x41\115\105\x53")) { $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$momcykaoccoymeig] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); } return $mkomwsiykqigmqca . rtrim($migiiksoiymissge, "\57\x5c") . "\57\137\x70\x72\55\x66\x69\x6c\145\x73"; } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (isset($meyiiwcswqmuggyg[0])) { $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); } return $qcgkuqesqqymcuui; } private function mgecqegqseukmmwg($cqgoimumaewouews = '') : string { $kaaaegwagmaoscys = "\x3c\x21\x2d\55\40\x43\141\x63\x68\x65\x64\x20\x66\x6f\x72\x20\147\162\145\x61\164\40\x70\145\162\146\157\162\x6d\x61\x6e\x63\x65\40\x62\171\x20\x50\115\120\x52\x20\x4f\x70\x74\x69\155\151\x7a\141\x74\151\157\x6e\x20\115\x6f\144\165\154\x65"; if (!empty($cqgoimumaewouews)) { $kaaaegwagmaoscys .= "\40\55\x20\x44\x65\x62\x75\x67\72\40\143\x61\x63\x68\145\144\x40{$cqgoimumaewouews}"; } $kaaaegwagmaoscys .= "\x20\x2d\x2d\76"; return $kaaaegwagmaoscys; } private function owikigcokkqsukeq() : bool { $seooyyaygyioqeue = implode("\174", ["\50\56\52\51\167\x70\134\55\152\x73\x6f\x6e\50\x2f\56\52\174\44\51"]); $aweiaismcsuikses = $this->wmgoigiyyeauqwaq()->cesqesaeyaoysqaa(); if (preg_match("\43{$seooyyaygyioqeue}\43", $aweiaismcsuikses)) { return false; } $mqqisesagsuooios = $this->aceaeommyuooiqge()->get("\160\145\x72\155\141\154\x69\x6e\x6b\137\x73\x74\x72\x75\x63\x74\x75\162\145"); $qmgwgiyuicsgkmcs = "\x2f" !== substr($mqqisesagsuooios, -1) ? '' : "\x2f"; $magawcseesgowoeo = $aweiaismcsuikses; $ygygweamcggggmce = "\57" !== substr($magawcseesgowoeo, -1) ? '' : "\57"; if ('' === $qmgwgiyuicsgkmcs) { $ygygweamcggggmce = "\x2f" === $magawcseesgowoeo ? '' : $ygygweamcggggmce; $sycgeiyakseiumqy = str_replace($this->aceaeommyuooiqge()->mmqyysequeygeaii(), '', basename($this->aceaeommyuooiqge()->wcsoyaccaqessckk()["\160\141\164\150"])); $sycgeiyakseiumqy = str_replace(["\56\x70\x68\160", "\56"], ['', "\x2f"], $sycgeiyakseiumqy); if ("\x2f" !== $magawcseesgowoeo && rtrim($magawcseesgowoeo, "\57") === $sycgeiyakseiumqy) { $ygygweamcggggmce = ''; } } return $qmgwgiyuicsgkmcs !== $ygygweamcggggmce; } public function yoaykkqyeucsckwc() : Filesystem { return Filesystem::symcgieuakksimmu(); } }

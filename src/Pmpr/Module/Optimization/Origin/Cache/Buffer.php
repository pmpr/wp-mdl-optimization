<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\x63\x61\x63\150\x69\x6e\x67\x5f\160\162\157\143\x65\x73\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\164\150"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\141\143\x68\145\x5f\x65\156\x61\142\x6c\x65")) { goto eqmauwqqowsiwaue; } $this->muiwqeouwouegcao(); goto waycokyiesmqgqcg; eqmauwqqowsiwaue: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\155\154"; $this->log("\x4c\x6f\x6f\153\151\x6e\147\40\x66\x6f\162\40\x63\x61\x63\x68\x65\40\146\151\x6c\145\56", ["\160\x61\164\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\137\x67\172\x69\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\110\124\x54\x50\x5f\101\x43\103\x45\120\x54\x5f\105\x4e\x43\x4f\104\x49\x4e\107"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\x69\160"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto saycoceqywiekqsi; } $this->qmkgowiegksamcou($ecggassyswkoyocq); saycoceqywiekqsi: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto sqaowueaequoigsa; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); sqaowueaequoigsa: $this->log("\x53\x74\x61\162\164\40\142\165\x66\146\x65\162\56", ["\x70\141\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\157\x71\x63\161\153\x6f\161\x77\x63\165\x6f\x71\x75\163\153\165"]); waycokyiesmqgqcg: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto ysaumykuimqigeqa; } $yciaosuiyeieceug = false; goto oegaywiwywuyksaq; ysaumykuimqigeqa: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto kkogaccoqmsmmkmo; } $yciaosuiyeieceug = false; goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\x74\155\154"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto yqkyoaiwcyqeaqwu; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); yqkyoaiwcyqeaqwu: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto yuyiqaawwgaywgqo; } header("\x4c\x61\163\x74\55\x4d\x6f\144\151\x66\151\x65\x64\x3a\40" . gmdate("\104\54\x20\x64\40\115\40\x59\40\110\72\x69\x3a\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\107\115\124"); yuyiqaawwgaywgqo: qmiqicgscsuoyeqo: oegaywiwywuyksaq: if ($yciaosuiyeieceug) { goto eyskqaccgeomqmyw; } header("\x43\x61\143\150\x65\x2d\103\x6f\156\164\162\x6f\x6c\x3a\40\x6e\x6f\55\x73\x74\157\162\145\x2c\40\156\x6f\55\x63\141\143\150\145\x2c\40\x6d\x75\x73\x74\x2d\x72\x65\166\x61\x6c\x69\144\141\164\x65\54\40\155\x61\170\x2d\141\147\145\x3d\60"); header("\120\x72\x61\x67\x6d\x61\x3a\40\156\157\55\x63\141\x63\x68\145"); header("\x45\x78\x70\151\x72\x65\163\72\40" . gmdate("\x44\x2c\x20\x64\x20\x4d\x20\x59\40\110\x3a\x69\72\163\x20\134\107\x5c\x4d\134\x54", time())); eyskqaccgeomqmyw: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\x4c\141\x73\x74\55\x4d\157\144\x69\x66\151\x65\x64\x3a\x20" . gmdate("\x44\x2c\40\x64\x20\x4d\40\131\40\110\x3a\151\x3a\x73", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto uiowwckamqucksim; } readfile($esaqeawoigqgagum); $this->log("\123\x65\x72\166\x69\156\147\x20\x63\141\x63\x68\145\x20\146\151\x6c\x65\56", ["\160\x61\164\x68" => $esaqeawoigqgagum, "\155\x6f\x64\x69\146\x69\x65\144" => $cocykkikgmcykggu]); uiowwckamqucksim: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\x4c\x61\x73\164\x2d\x4d\x6f\144\151\x66\151\145\144\72\x20" . gmdate("\x44\54\x20\x64\40\x4d\x20\x59\40\x48\x3a\x69\x3a\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto wscikmsmwmocsqeu; } readgzfile($esaqeawoigqgagum); $this->log("\123\x65\x72\x76\x69\156\x67\40\x67\x7a\x69\x70\x20\143\x61\143\150\145\x20\146\x69\x6c\x65\x2e", ["\160\141\x74\150" => $esaqeawoigqgagum, "\155\x6f\144\x69\x66\x69\x65\x64" => $cocykkikgmcykggu]); wscikmsmwmocsqeu: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\x67\172\x69\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\x5f\164\x65\155\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\x5f\x74\x65\x6d\160"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto imsgusweocmiyygi; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\147\172\x65\x6e\143\157\144\x65")) { goto icawmkaswkmwicsa; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\x61\x63\150\x65\x5f\147\x7a\145\156\x63\157\x64\x65\x5f\x6c\145\166\x65\x6c\x5f\143\x6f\155\160\x72\145\163\x73\151\x6f\x6e", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); icawmkaswkmwicsa: imsgusweocmiyygi: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto qwueqigcisoogaec; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\123\x45\122\x56\105\x52\137\120\122\x4f\x54\117\x43\x4f\114", '') . "\40\63\60\x34\40\x4e\x6f\x74\40\x4d\157\144\151\x66\x69\145\144", true, 304); header("\105\x78\160\151\162\x65\x73\72\x20" . gmdate("\104\54\40\x64\x20\115\40\x59\x20\110\72\151\x3a\x73") . "\x20\x47\115\x54"); header("\x43\x61\143\150\145\55\x43\x6f\156\x74\162\157\154\72\x20\156\x6f\x2d\x63\141\x63\150\x65\54\40\155\x75\x73\164\x2d\x72\x65\x76\141\154\x69\x64\x61\164\145"); $this->log("\x53\x65\x72\166\x69\x6e\147\x20\x60\63\x30\64\140\40\x63\141\x63\150\145\40\x66\x69\154\x65\x2e", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\155\157\144\151\146\151\x65\x64" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; qwueqigcisoogaec: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\x5b\60\55\x39\101\x2d\106\135\173\62\x7d\57", [$this, "\x6d\161\167\157\x73\171\x69\x75\x6d\145\x77\x71\145\147\x6d\153"], $ouwgeioocoeccyik); return str_replace("\77", "\43", $ouwgeioocoeccyik); } private function muiwqeouwouegcao() { if (defined("\104\x4f\x4e\124\x5f\x50\x45\x52\x46\x4f\x52\115\101\x4e\103\105\137\117\120\124\111\x4d\111\x5a\105")) { goto kmeekqukcecuscye; } define("\104\117\x4e\124\137\x50\105\122\x46\117\122\x4d\x41\x4e\x43\x45\x5f\x4f\x50\124\x49\x4d\111\132\x45", true); kmeekqukcecuscye: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto csoeisssoumqqeoa; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\x54\120\x5f\x49\x46\x5f\115\117\104\111\106\111\x45\104\137\123\x49\116\x43\105", ''); goto weuueokkumksgaeo; csoeisssoumqqeoa: $sieoyimycoskwwku = $uykgysuswksgmwqy["\x49\x66\55\x4d\157\x64\151\146\x69\x65\x64\55\123\151\156\143\x65"] ?? ''; weuueokkumksgaeo: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\157\137\143\141\143\x68\x65\x5f\x67\x65\156\145\x72\141\164\x65\x5f\143\141\x63\150\x69\156\147\x5f\146\x69\x6c\145\163", true); } private function scsyywuaiumequqw() : string { return $this->amqagusacuuuaswg() . ManipulateFormat::ocyiomiukusoicuc(ManipulateServer::ekcymmyqoceukosc()); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto igckskemqkqueukg; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); igckskemqkqueukg: return $qcgkuqesqqymcuui; } }

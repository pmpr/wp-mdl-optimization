<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf030b239b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Buffer\Buffer as BaseClass; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; class Buffer extends BaseClass { protected ?string $id = "\143\x61\143\150\x69\156\x67\x5f\160\x72\157\x63\145\163\163"; protected Config $config; protected ?string $path; protected ?Filesystem $filesystem = null; public function __construct(?Test $sssgouqemgcgwgcc, Config $uiewakwqscemywuo, array $ywmkwiwkosakssii = []) { $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\164\x68"]); $this->config = $uiewakwqscemywuo; $this->filesystem = Filesystem::symcgieuakksimmu(); parent::__construct($sssgouqemgcgwgcc); } public function aceaeommyuooiqge() : Config { return $this->config; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function kcciqwskewsuaemk() : ?Filesystem { return $this->filesystem; } public function qqcykaeioiwwaqos() { if ($this->wmgoigiyyeauqwaq()->gequwwueqseakeoq() && $this->wmgoigiyyeauqwaq()->aceaeommyuooiqge()->get("\x63\x61\143\150\145\x5f\145\156\x61\x62\x6c\x65")) { goto qmegcmqemmywoqas; } $this->muiwqeouwouegcao(); goto giooasyeqwaaocea; qmegcmqemmywoqas: $xswggycymueygwse = $this->gskqygiceygcguyo(); $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\56\x68\164\155\154"; $this->log("\114\157\x6f\x6b\151\x6e\x67\x20\146\x6f\x72\x20\x63\x61\x63\x68\x65\40\146\x69\154\145\x2e", ["\160\141\x74\150" => $nsmgceoqaqogqmuw]); $ecggassyswkoyocq = $nsmgceoqaqogqmuw . "\x5f\147\172\151\160"; $wicowimsieqwwsuu = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\124\124\120\137\101\x43\x43\x45\x50\124\137\105\x4e\x43\117\x44\111\116\x47"); $acggykmsksykwyqy = $wicowimsieqwwsuu && false !== strpos($wicowimsieqwwsuu, "\x67\x7a\151\x70"); if (!($acggykmsksykwyqy && $iiaumsgauuyeqksw->coeoweawgagkycwe($ecggassyswkoyocq))) { goto yyieomeeqycmikqw; } $this->qmkgowiegksamcou($ecggassyswkoyocq); yyieomeeqycmikqw: if (!$iiaumsgauuyeqksw->coeoweawgagkycwe($nsmgceoqaqogqmuw)) { goto kwiuqqwamsimqgme; } $this->ecsimoiakyygwais($nsmgceoqaqogqmuw); kwiuqqwamsimqgme: $this->log("\123\x74\x61\x72\x74\x20\142\x75\146\x66\x65\x72\56", ["\160\x61\x74\x68" => $nsmgceoqaqogqmuw]); ob_start([$this, "\x6f\161\143\161\153\x6f\x71\167\143\x75\157\161\165\x73\x6b\165"]); giooasyeqwaaocea: } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $yciaosuiyeieceug = true; if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { goto gsgkayokisiesciy; } $yciaosuiyeieceug = false; goto ascogkesqmuuaesq; gsgkayokisiesciy: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($this->omgegoiwsakgwwug()) { goto qgyoesyiasqimcoe; } $yciaosuiyeieceug = false; goto kkwqmewaksmokuqy; qgyoesyiasqimcoe: $xswggycymueygwse = $this->gskqygiceygcguyo(); $nsmgceoqaqogqmuw = "{$xswggycymueygwse}\x2e\x68\164\155\x6c"; $qwqyukkaswwygsyg = dirname($nsmgceoqaqogqmuw); $wmgiiumwscoyqkqa = $iiaumsgauuyeqksw->mkdir($qwqyukkaswwygsyg); if (!$wmgiiumwscoyqkqa) { goto uueywyysiicuauem; } $this->qsokwouigmyqagkc($qwqyukkaswwygsyg); $this->uwoqksyucwysuqeo($nsmgceoqaqogqmuw, $moooemyaqewumiay); uueywyysiicuauem: if (!$iiaumsgauuyeqksw->exists($nsmgceoqaqogqmuw)) { goto seieguyaaiqismgo; } header("\114\x61\x73\x74\x2d\115\157\x64\x69\146\x69\x65\144\x3a\x20" . gmdate("\104\54\x20\x64\x20\x4d\40\x59\40\x48\72\x69\72\x73", filemtime($nsmgceoqaqogqmuw)) . "\x20\x47\x4d\x54"); seieguyaaiqismgo: kkwqmewaksmokuqy: ascogkesqmuuaesq: if ($yciaosuiyeieceug) { goto askukaucmocewkgg; } header("\x43\x61\143\150\x65\x2d\103\x6f\156\x74\162\x6f\x6c\72\40\156\157\55\x73\164\x6f\x72\145\x2c\40\156\x6f\55\143\x61\x63\150\x65\x2c\x20\155\165\x73\164\55\162\x65\166\141\x6c\151\144\x61\164\145\x2c\40\155\x61\x78\55\141\x67\145\x3d\x30"); header("\120\162\x61\147\155\141\x3a\40\x6e\157\x2d\143\x61\143\x68\145"); header("\x45\x78\160\x69\162\145\x73\x3a\x20" . gmdate("\x44\54\x20\144\x20\x4d\40\x59\x20\110\x3a\x69\72\163\40\x5c\x47\134\x4d\134\x54", time())); askukaucmocewkgg: return $moooemyaqewumiay; } private function ecsimoiakyygwais(?string $esaqeawoigqgagum) { header("\114\141\163\164\x2d\115\157\144\x69\146\x69\x65\144\x3a\x20" . gmdate("\x44\54\x20\144\x20\x4d\x20\x59\40\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\x47\115\x54"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto kiemqsgcmouqscao; } readfile($esaqeawoigqgagum); $this->log("\123\145\162\166\151\156\x67\40\143\141\x63\x68\x65\x20\x66\151\x6c\145\56", ["\x70\x61\x74\150" => $esaqeawoigqgagum, "\x6d\x6f\x64\151\x66\151\x65\144" => $cocykkikgmcykggu]); kiemqsgcmouqscao: exit; } private function qmkgowiegksamcou(?string $esaqeawoigqgagum) { header("\114\141\163\164\55\115\x6f\144\x69\146\151\x65\144\72\x20" . gmdate("\x44\54\x20\144\40\x4d\x20\131\x20\110\72\151\72\163", filemtime($esaqeawoigqgagum)) . "\x20\107\x4d\124"); $cocykkikgmcykggu = $this->eocmmukuauowsqcu(); if ($this->gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu)) { goto wssaaemscmmiomee; } readgzfile($esaqeawoigqgagum); $this->log("\x53\x65\162\x76\x69\156\x67\40\147\x7a\151\x70\x20\x63\141\143\x68\x65\x20\146\151\154\145\x2e", ["\x70\x61\164\x68" => $esaqeawoigqgagum, "\155\157\x64\151\146\x69\145\144" => $cocykkikgmcykggu]); wssaaemscmmiomee: exit; } private function uwoqksyucwysuqeo(?string $esaqeawoigqgagum, ?string $ewgwqamkygiqaawc) { $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); $ckikaauwqiigkskw = $esaqeawoigqgagum . "\137\147\172\x69\160"; $egqeikuccqmogcum = $esaqeawoigqgagum . "\137\x74\x65\155\160"; $wwaeeiuysoqgakwu = $ckikaauwqiigkskw . "\137\164\x65\155\x70"; if ($iiaumsgauuyeqksw->exists($egqeikuccqmogcum)) { goto euskosgaksmimgug; } $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($egqeikuccqmogcum, $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->rename($egqeikuccqmogcum, $esaqeawoigqgagum, true); if (!function_exists("\x67\x7a\x65\x6e\143\157\144\145")) { goto meqmcgmksqiqcoyq; } $gomewsucumqsiske = DecoratorHook::sscegwueamckwmcy("\143\141\x63\150\x65\137\147\172\145\156\x63\157\x64\145\x5f\x6c\x65\x76\145\x6c\137\x63\157\155\160\162\145\163\163\x69\157\156", 6); $iiaumsgauuyeqksw->kwsmkgyoyaqecwuu($wwaeeiuysoqgakwu, gzencode($ewgwqamkygiqaawc, $gomewsucumqsiske)); $iiaumsgauuyeqksw->rename($wwaeeiuysoqgakwu, $ckikaauwqiigkskw, true); meqmcgmksqiqcoyq: euskosgaksmimgug: } private function qsokwouigmyqagkc($mkomwsiykqigmqca) { } private function gwkimsoowgiwqygs($esaqeawoigqgagum, $cocykkikgmcykggu) : bool { $cwacgiwykekaekoq = false; if (!($cocykkikgmcykggu && strtotime($cocykkikgmcykggu) === @filemtime($esaqeawoigqgagum))) { goto iusaeoimukymskgs; } header($this->aceaeommyuooiqge()->iuocyymeygwuweag("\x53\x45\x52\x56\x45\122\137\x50\122\117\124\x4f\103\x4f\x4c", '') . "\x20\x33\60\x34\x20\116\x6f\164\x20\x4d\157\x64\x69\146\x69\x65\x64", true, 304); header("\105\x78\x70\151\x72\x65\163\72\x20" . gmdate("\104\x2c\x20\144\x20\x4d\x20\131\x20\x48\72\x69\x3a\163") . "\40\x47\x4d\124"); header("\103\141\x63\x68\145\55\x43\x6f\156\164\162\x6f\x6c\x3a\40\156\157\55\x63\141\x63\150\x65\54\40\155\165\163\164\55\x72\x65\166\141\154\151\x64\141\x74\x65"); $this->log("\x53\145\x72\166\x69\156\147\40\140\x33\60\x34\140\40\143\x61\143\x68\145\40\x66\151\x6c\145\x2e", ["\x70\141\164\150" => $esaqeawoigqgagum, "\155\157\144\151\146\x69\x65\144" => $cocykkikgmcykggu]); $cwacgiwykekaekoq = true; iusaeoimukymskgs: return $cwacgiwykekaekoq; } public function gskqygiceygcguyo() : string { $ouwgeioocoeccyik = $this->scsyywuaiumequqw(); $ouwgeioocoeccyik = preg_replace_callback("\57\45\133\60\x2d\x39\101\55\x46\135\x7b\x32\x7d\57", [$this, "\155\x71\167\x6f\163\x79\x69\x75\x6d\x65\167\161\145\147\155\x6b"], $ouwgeioocoeccyik); return str_replace("\77", "\43", $ouwgeioocoeccyik); } private final function muiwqeouwouegcao() { if (defined("\x44\x4f\x4e\x54\137\x50\105\122\106\x4f\122\x4d\x41\116\103\x45\x5f\x4f\120\x54\x49\x4d\111\x5a\105")) { goto asciaakaoygususy; } define("\x44\117\x4e\x54\x5f\120\x45\122\106\x4f\x52\115\x41\116\103\x45\x5f\117\120\124\111\115\x49\x5a\x45", true); asciaakaoygususy: } private function eocmmukuauowsqcu() { $uykgysuswksgmwqy = ManipulateServer::iawueuwikeeeseya(); if ($uykgysuswksgmwqy) { goto eaggoasiwogmquwc; } $sieoyimycoskwwku = $this->aceaeommyuooiqge()->iuocyymeygwuweag("\x48\x54\124\x50\137\111\x46\137\x4d\x4f\x44\x49\x46\111\x45\x44\x5f\x53\x49\116\x43\105", ''); goto meoweqcaaosoomeu; eaggoasiwogmquwc: $sieoyimycoskwwku = $uykgysuswksgmwqy["\111\x66\55\115\x6f\x64\151\146\151\x65\x64\55\x53\x69\156\x63\145"] ?? ''; meoweqcaaosoomeu: return $sieoyimycoskwwku; } public function omgegoiwsakgwwug() : bool { return (bool) apply_filters("\x64\x6f\x5f\143\x61\143\150\x65\x5f\147\145\156\145\162\141\164\x65\137\143\x61\x63\150\151\x6e\147\137\146\151\x6c\x65\163", true); } private function scsyywuaiumequqw() : string { $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc(); $migiiksoiymissge = ManipulateFormat::gokuyqsimauyacke($migiiksoiymissge); $migiiksoiymissge = rawurldecode($migiiksoiymissge); return $this->amqagusacuuuaswg() . sha1(untrailingslashit($migiiksoiymissge)); } protected function mqwosyiumewqegmk(?array $meyiiwcswqmuggyg) : ?string { $qcgkuqesqqymcuui = null; if (!isset($meyiiwcswqmuggyg[0])) { goto ywmoieqkigsykequ; } $qcgkuqesqqymcuui = strtolower($meyiiwcswqmuggyg[0]); ywmoieqkigsykequ: return $qcgkuqesqqymcuui; } }

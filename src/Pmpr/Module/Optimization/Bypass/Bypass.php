<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6318774774141             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Bypass; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\Optimization\Manipulate\Manipulate; class Bypass extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x72\x65\137\160\x6f\163\164\x5f\165\160\x64\141\x74\145", [$this, "\x6f\143\x6b\163\141\x63\x69\x79\x6d\147\151\x63\157\x61\141\143"], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\x74\137\143\157\x6e\146\x69\147\x75\x72\x61\164\x69\x6f\x6e\x73"), [$this, "\x77\165\x67\157\x6b\x79\165\x6f\x6d\x73\x69\x69\167\141\167\x69"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\x5f\x69\x73\x5f\x62\x79\160\x61\x73\x73"), [$this, "\x79\x69\167\x73\x77\x65\165\x79\x65\155\x6b\171\x69\x79\x75\x6d"], 10, 2); } public function yiwsweuyemkyiyum($qeoqkiisysuqyeqw, $migiiksoiymissge) { $ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy(); if (!preg_match("\43{$ucccueqywigcukcc}\43", $migiiksoiymissge)) { goto igscwycsqsckmcuq; } $qeoqkiisysuqyeqw = true; igscwycsqsckmcuq: return $qeoqkiisysuqyeqw; } public function ocksaciymgicoaac($yekqqesogweecqyc, $icwicymcioeyeyek) { if (!($mkomwsiykqigmqca = Manipulate::cmaecekuqkwmemms(self::muqmwceaiwwakwws))) { goto syeeegeygawwqiuu; } $iueymcwwscwqkiyq = ManipulatePost::ucwmcwqmqwaymkkc($yekqqesogweecqyc); if (in_array($iueymcwwscwqkiyq, [self::ywskismomwmcsqam, self::sgoswgskyiiwkyuo, self::iuemaweiggauysws], true)) { goto ycskuioouwwemgke; } $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($yekqqesogweecqyc); if (!($aaokuekaimigoyue && $aaokuekaimigoyue !== $icwicymcioeyeyek[self::uiaeiwkkmoayqasu])) { goto wmcaecgwmmwuuqsq; } $this->kcciqwskewsuaemk()->remove($mkomwsiykqigmqca); wmcaecgwmmwuuqsq: ycskuioouwwemgke: syeeegeygawwqiuu: } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function wugokyuomsiiwawi($uiewakwqscemywuo) { if (!($ucccueqywigcukcc = $this->iqkiiwsyqkwkyuyy())) { goto iuieskocqoqkkwus; } $uiewakwqscemywuo["\151\x67\x6e\157\162\145\x64\x5f\x75\162\x6c\163"] = $ucccueqywigcukcc; iuieskocqoqkkwus: return $uiewakwqscemywuo; } public function iqkiiwsyqkwkyuyy() : string { $ucccueqywigcukcc = ''; if (!($auwuoyyagaiegwae = Setting::symcgieuakksimmu()->nwskemwouwsesmus())) { goto moimkkmkooeiyisc; } $gmigwwwmwemyaayy = untrailingslashit(ManipulateServer::auksikwsewaywikq()); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = ManipulateString::wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto caoikoqmyeqsqqqe; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); caoikoqmyeqsqqqe: gwayeyymscmgwqkg: } isiqkeyciyqgkayu: $ucccueqywigcukcc = str_replace("\x5c\x2a", "\56\x2a", implode("\x7c", array_unique($auwuoyyagaiegwae))); moimkkmkooeiyisc: return $ucccueqywigcukcc; } }

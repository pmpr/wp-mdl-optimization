<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400e520636             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto sycygoiaiqqageym; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\164\150"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\164\150"] . "\56\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; sycygoiaiqqageym: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\156\x66\x69\x67\x75\162\x61\x74\x69\157\156\x5f\x66\151\154\x65\163\x5f\x70\141\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\117\120\124\137\x43\x41\103\110\x45\137\104\x4f\116\124\137\x45\116\x43\117\104\105\137\106\x49\114\x45\x4e\x41\x4d\x45\123")) { goto wwkgkaecgiwggcck; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kciouyuaqkyqomam: } gygawoqywkukmqee: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); wwkgkaecgiwggcck: return untrailingslashit($migiiksoiymissge) . "\x2f\146\151\154\145\163\57\151\156\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\x4f\x70\164\x69\x6d\x69\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\145\40\x79\x6f\x75\40\x73\165\162\145\x20\x61\x62\157\x75\x74\40\x72\145\117\x70\x74\x69\x6d\x69\172\145\40\x74\x68\x69\x73\x20\160\141\147\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\163" => "\x6f\160\164\x2d\160\x75\162\147\145\x2d\x70\x6f\x73\164\x2d\x63\x61\x63\x68\145\40\160\162\55\142\x74\156\x20\x62\x74\156\x2d\x70\x72\x69\x6d\x61\x72\171", "\x74\151\164\154\x65" => $meqocwsecsywiiqs, "\x64\x61\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\164\x61\55\155\x69\143\x72\x6f\155\x6f\144\x61\x6c\55\x63\x6c\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\x73" => "\157\x70\164\x2d\160\x61\147\145\55\141\x63\x74\x69\x6f\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\147\145\164\x5f\142\165\x64\147\x65\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\137\x75\x73\145\x64\x5f\x62\165\x64\147\145\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\55\x70\x72\145\x6c\x6f\141\x64") || $this->ccmqswoueyeqkoeq("\160\162\145\154\157\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\x6e\x74\x2d\157\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\154\x6f\x77\137\x74\x6f\137\163\x74\x61\162\164\137\142\x75\146\x66\x65\x72\137\x70\162\x6f\143\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\122\x5f\x4f\120\x54\x49\115\111\x5a\x41\x54\111\117\116\x5f\104\x4f\x4e\124\137\117\120\124\111\x4d\111\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\x79\x70\141\x73\x73\137\x6c\151\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto umgaesggesswoaqe; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); umgaesggesswoaqe: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\163\137\142\171\160\x61\x73\x73", false, $migiiksoiymissge); } }

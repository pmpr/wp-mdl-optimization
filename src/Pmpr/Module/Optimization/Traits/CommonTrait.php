<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668664c7535d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto sycygoiaiqqageym; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\x74\150"); $qogsmwakwacwqogk["\x70\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\x74"]) . $qogsmwakwacwqogk["\160\141\x74\150"] . "\56\160\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; sycygoiaiqqageym: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\146\151\147\x75\162\x61\164\151\x6f\156\x5f\146\151\154\x65\163\137\x70\141\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\x5f\x43\x41\x43\110\105\137\x44\x4f\x4e\124\137\105\116\x43\x4f\104\105\137\106\x49\114\105\116\x41\115\x45\x53")) { goto wwkgkaecgiwggcck; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); kciouyuaqkyqomam: } gygawoqywkukmqee: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); wwkgkaecgiwggcck: return untrailingslashit($migiiksoiymissge) . "\x2f\x66\151\x6c\x65\x73\57\151\156\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\160\x74\x69\x6d\151\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\x72\145\x20\x79\157\x75\40\163\x75\162\x65\x20\141\x62\157\165\x74\x20\x72\145\x4f\160\164\x69\x6d\151\172\x65\40\x74\150\x69\x73\40\x70\141\147\145\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\x61\x73\x73" => "\x6f\160\x74\55\160\x75\162\147\145\x2d\x70\157\x73\164\55\143\141\143\x68\145\x20\x70\x72\55\x62\164\156\x20\x62\164\x6e\55\160\x72\151\155\x61\x72\171", "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\x64\141\164\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\x74\x61\x2d\155\151\x63\162\x6f\x6d\x6f\144\x61\x6c\x2d\x63\154\x6f\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\x73" => "\x6f\160\x74\55\x70\x61\147\145\x2d\x61\x63\x74\x69\x6f\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\x74\x5f\147\x65\x74\x5f\x62\165\x64\x67\x65\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\137\165\163\x65\144\x5f\142\165\x64\x67\x65\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\164\x2d\160\x72\145\x6c\x6f\x61\144") || $this->ccmqswoueyeqkoeq("\x70\162\145\x6c\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\164\55\157\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\x6c\154\x6f\167\137\x74\157\x5f\x73\164\x61\x72\x74\x5f\x62\x75\x66\146\x65\162\137\160\x72\x6f\x63\x65\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\x50\x54\x49\115\x49\x5a\101\x54\x49\x4f\116\x5f\x44\117\116\124\x5f\x4f\x50\x54\111\x4d\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\171\160\x61\x73\x73\x5f\154\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto umgaesggesswoaqe; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); umgaesggesswoaqe: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\142\171\160\141\x73\163", false, $migiiksoiymissge); } }

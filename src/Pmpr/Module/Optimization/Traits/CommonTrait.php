<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6648bed4e3da1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\x68"); $qogsmwakwacwqogk["\x70\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\164\x68"] . "\56\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\146\x69\147\x75\162\x61\164\151\x6f\x6e\x5f\x66\151\154\x65\x73\137\160\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\137\117\120\124\137\103\101\103\x48\105\137\104\117\116\124\137\105\x4e\103\x4f\104\x45\137\x46\x49\x4c\x45\x4e\101\x4d\x45\x53")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\57\x69\156\144\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\x4f\160\x74\151\x6d\151\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\x65\40\x79\157\x75\40\163\165\162\145\x20\141\142\x6f\x75\164\40\x72\145\x4f\160\x74\x69\x6d\151\172\x65\40\x74\150\x69\x73\x20\160\x61\147\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\x73\x73" => "\157\x70\x74\x2d\x70\165\x72\147\x65\x2d\160\x6f\x73\164\x2d\x63\141\143\150\x65\40\x62\x74\x6e\40\x62\164\156\55\160\x72\x69\x6d\141\162\171", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\144\x61\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\164\x61\x2d\x6d\x69\x63\x72\x6f\155\x6f\x64\141\x6c\55\x63\x6c\157\163\145"]]], $meqocwsecsywiiqs, ["\143\x6c\x61\x73\163" => "\157\x70\164\55\160\x61\147\145\55\x61\x63\164\x69\x6f\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\147\x65\164\x5f\142\x75\144\x67\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\137\165\x73\145\x64\x5f\142\165\144\147\145\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\164\x2d\160\x72\x65\154\157\x61\x64") || $this->ccmqswoueyeqkoeq("\x70\162\x65\x6c\157\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\x2d\x6f\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\x6c\154\x6f\167\137\x74\157\x5f\x73\164\141\x72\x74\137\x62\x75\x66\146\x65\x72\x5f\x70\162\157\x63\x65\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\124\x49\x4d\111\x5a\101\124\111\x4f\116\137\x44\x4f\x4e\x54\137\x4f\x50\124\x49\x4d\x49\x5a\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\x79\160\141\163\x73\x5f\x6c\151\x73\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\163\x5f\142\x79\x70\x61\163\x73", false, $migiiksoiymissge); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665adb172afec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\x74\x68"); $qogsmwakwacwqogk["\x70\x61\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\163\x74"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\56\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x63\x6f\x6e\146\x69\x67\x75\162\x61\164\x69\x6f\156\137\x66\151\154\145\x73\x5f\x70\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\x5f\117\x50\x54\x5f\103\101\x43\110\x45\137\x44\117\116\124\x5f\105\x4e\103\117\104\105\x5f\x46\x49\114\105\116\x41\x4d\x45\x53")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\x2f\x66\x69\154\145\163\x2f\x69\x6e\144\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\160\164\x69\155\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\x72\145\x20\x79\157\x75\x20\163\165\162\x65\x20\141\x62\157\x75\164\x20\162\x65\x4f\160\164\151\x6d\x69\172\x65\x20\164\150\x69\x73\40\160\x61\x67\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\x73\x73" => "\157\160\164\x2d\160\165\162\147\x65\x2d\160\x6f\x73\x74\55\x63\141\x63\x68\x65\40\x70\x72\55\142\164\x6e\40\x62\x74\x6e\55\x70\x72\151\155\x61\x72\x79", "\164\151\164\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\x74\141\x2d\155\151\x63\x72\157\155\x6f\x64\x61\x6c\x2d\x63\x6c\157\163\x65"]]], $meqocwsecsywiiqs, ["\x63\x6c\141\x73\163" => "\x6f\160\x74\x2d\160\141\147\x65\55\x61\143\164\x69\x6f\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\x5f\x67\145\x74\x5f\142\165\144\x67\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\164\x5f\165\163\x65\x64\137\142\165\x64\147\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\x2d\x70\162\145\154\157\x61\x64") || $this->ccmqswoueyeqkoeq("\160\x72\145\154\x6f\x61\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\x6e\x74\x2d\x6f\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\x6c\x6c\157\x77\137\x74\x6f\x5f\163\164\141\x72\164\x5f\142\x75\146\x66\x65\x72\137\x70\162\157\x63\x65\163\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\124\x49\x4d\111\132\101\124\111\x4f\x4e\x5f\x44\x4f\x4e\124\137\x4f\120\124\111\115\111\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\171\160\x61\163\163\137\154\x69\x73\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\163\x5f\x62\171\160\141\x73\163", false, $migiiksoiymissge); } }

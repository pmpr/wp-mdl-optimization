<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663757b0e9f86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto aeuosggumiiwoesm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\141\164\x68"); $qogsmwakwacwqogk["\160\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\164"]) . $qogsmwakwacwqogk["\160\141\x74\150"] . "\x2e\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; aeuosggumiiwoesm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\146\151\x67\x75\162\141\x74\x69\157\156\137\146\151\x6c\x65\x73\x5f\160\141\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\x50\124\x5f\103\x41\x43\110\x45\137\104\117\116\x54\137\x45\x4e\x43\x4f\x44\105\x5f\x46\111\x4c\x45\116\101\115\x45\123")) { goto sqmqwqeoygcmqcim; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); uyksacasqywyessc: } wyqmeyoaggwuioak: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); sqmqwqeoygcmqcim: return untrailingslashit($migiiksoiymissge) . "\57\x69\156\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\x70\164\x69\x6d\151\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\x72\145\x20\x79\x6f\165\40\x73\165\162\145\40\141\x62\157\165\164\x20\162\x65\x4f\160\x74\x69\155\x69\x7a\x65\x20\x74\x68\151\163\x20\x70\141\147\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\154\141\163\x73" => "\x6f\160\164\x2d\160\165\162\x67\x65\55\x70\x6f\x73\x74\55\143\141\x63\150\145\x20\x62\x74\x6e\x20\x62\164\156\55\160\162\151\x6d\x61\162\x79", "\164\151\164\154\145" => $meqocwsecsywiiqs, "\144\141\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\141\164\x61\55\155\151\x63\162\x6f\155\157\144\x61\x6c\55\143\154\x6f\163\x65"]]], $meqocwsecsywiiqs, ["\143\x6c\141\163\x73" => "\x6f\160\164\55\160\x61\x67\145\55\x61\x63\164\x69\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\164\137\147\145\x74\137\142\x75\144\x67\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\x5f\x75\163\x65\x64\x5f\x62\x75\144\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\x74\x2d\160\x72\x65\x6c\157\x61\144") || $this->ccmqswoueyeqkoeq("\160\162\x65\154\157\141\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\156\x74\x2d\157\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\154\x6f\x77\x5f\164\157\137\163\x74\141\162\164\x5f\142\165\146\x66\x65\162\137\160\x72\x6f\x63\x65\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\117\x50\x54\111\x4d\x49\x5a\x41\124\111\x4f\116\x5f\x44\117\116\x54\x5f\117\120\x54\x49\115\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\x79\x70\x61\x73\163\x5f\x6c\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto syykqmkiyoekqsek; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); syykqmkiyoekqsek: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\137\142\171\x70\141\x73\x73", false, $migiiksoiymissge); } }

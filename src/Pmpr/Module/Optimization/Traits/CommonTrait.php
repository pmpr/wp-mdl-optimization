<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             666957c99839f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto igymseewwyiocoug; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\x74\150"); $qogsmwakwacwqogk["\160\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\164"]) . $qogsmwakwacwqogk["\x70\x61\164\x68"] . "\56\160\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; igymseewwyiocoug: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\146\151\147\165\x72\x61\x74\151\x6f\156\x5f\x66\151\154\x65\x73\137\160\141\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\124\x5f\103\x41\103\x48\105\137\x44\x4f\116\124\x5f\x45\x4e\x43\117\104\x45\x5f\106\x49\x4c\x45\116\101\x4d\105\123")) { goto twkmiuomimomscew; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); eyiamcekkgkiawqy: } mqccmesakuemceqi: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); twkmiuomimomscew: return untrailingslashit($migiiksoiymissge) . "\x2f\146\151\x6c\x65\x73\x2f\151\x6e\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\160\x74\151\155\x69\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\40\171\x6f\x75\x20\x73\165\162\x65\40\141\142\x6f\x75\x74\x20\x72\145\117\x70\164\x69\155\x69\172\x65\40\164\150\x69\163\40\x70\141\x67\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\x61\163\x73" => "\x6f\160\164\55\x70\165\x72\x67\145\x2d\160\157\163\164\55\x63\141\143\150\x65\40\160\x72\x2d\142\x74\x6e\40\142\164\156\55\160\x72\151\x6d\x61\x72\171", "\164\x69\x74\154\x65" => $meqocwsecsywiiqs, "\144\141\x74\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\55\x6d\x69\143\162\157\x6d\x6f\144\x61\154\x2d\143\154\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\141\163\163" => "\x6f\x70\x74\x2d\x70\x61\147\x65\x2d\141\143\x74\151\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\137\147\145\164\137\142\x75\144\147\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\137\165\x73\145\x64\137\142\x75\x64\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\164\x2d\x70\x72\145\x6c\x6f\x61\144") || $this->ccmqswoueyeqkoeq("\160\162\145\154\157\141\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\x74\x2d\157\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\x6c\x6c\157\x77\137\x74\x6f\137\163\164\x61\x72\164\137\142\165\146\x66\x65\x72\137\160\x72\x6f\143\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\x50\x54\x49\x4d\x49\132\x41\x54\111\x4f\116\x5f\104\x4f\116\x54\137\117\x50\124\111\115\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\142\x79\x70\141\163\163\137\154\151\x73\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto kooskuwkuayiuose; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); kooskuwkuayiuose: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\163\x5f\142\171\160\141\163\163", false, $migiiksoiymissge); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6658781c3e0dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cgewcsueoyaeikgm; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\x74\150"); $qogsmwakwacwqogk["\160\141\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\x74"]) . $qogsmwakwacwqogk["\160\141\164\150"] . "\x2e\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cgewcsueoyaeikgm: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\156\x66\x69\147\x75\x72\141\x74\151\x6f\156\137\146\151\154\x65\x73\137\x70\141\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\137\x4f\x50\124\x5f\103\x41\103\x48\105\137\x44\117\116\x54\137\105\116\x43\117\x44\105\137\106\x49\114\x45\x4e\x41\115\105\123")) { goto mqccmesakuemceqi; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); igymseewwyiocoug: } sukskmcwsoysiuqu: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); mqccmesakuemceqi: return untrailingslashit($migiiksoiymissge) . "\x2f\146\x69\x6c\145\x73\x2f\151\x6e\144\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\x70\164\151\x6d\x69\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\x20\x79\157\x75\40\163\165\162\145\x20\x61\142\x6f\x75\x74\x20\162\x65\x4f\160\164\x69\155\x69\x7a\x65\40\x74\150\151\x73\x20\x70\x61\147\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\x73\163" => "\x6f\x70\164\x2d\160\x75\162\147\145\55\160\157\163\x74\x2d\x63\141\143\x68\x65\40\160\x72\x2d\142\x74\x6e\x20\x62\x74\156\x2d\x70\162\151\155\141\162\171", "\x74\151\x74\x6c\145" => $meqocwsecsywiiqs, "\144\x61\x74\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\x61\55\155\x69\x63\x72\157\x6d\x6f\144\x61\154\x2d\x63\154\x6f\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\141\x73\163" => "\157\160\x74\55\x70\x61\x67\145\x2d\141\x63\164\151\157\156"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\147\x65\164\137\142\x75\x64\147\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\x70\164\x5f\165\163\145\144\x5f\x62\x75\x64\147\145\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\x70\164\x2d\160\x72\x65\154\157\x61\144") || $this->ccmqswoueyeqkoeq("\x70\162\x65\x6c\x6f\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\164\55\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\154\x6c\x6f\x77\137\x74\x6f\137\163\x74\141\x72\164\137\x62\165\x66\x66\x65\162\137\160\x72\x6f\143\x65\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\x54\x49\x4d\111\x5a\101\124\111\x4f\116\137\x44\117\x4e\124\x5f\x4f\x50\x54\x49\x4d\111\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\171\x70\x61\x73\163\137\x6c\x69\x73\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto eyiamcekkgkiawqy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); eyiamcekkgkiawqy: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\142\171\160\141\x73\x73", false, $migiiksoiymissge); } }

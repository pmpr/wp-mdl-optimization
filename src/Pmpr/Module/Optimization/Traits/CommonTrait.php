<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4159a97563             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto momgmqemgcasyuqq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\164\150"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\x74"]) . $qogsmwakwacwqogk["\x70\x61\x74\x68"] . "\56\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; momgmqemgcasyuqq: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\156\146\x69\x67\165\162\x61\164\151\157\x6e\137\x66\x69\154\x65\163\x5f\160\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\x4f\120\x54\137\x43\x41\x43\110\105\x5f\x44\x4f\x4e\124\x5f\105\116\103\x4f\104\105\x5f\106\111\x4c\x45\116\x41\115\x45\x53")) { goto imaiuooqwwokwemw; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); keyiswqkmqqquosw: } qmuikumqukcyaeqa: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); imaiuooqwwokwemw: return untrailingslashit($migiiksoiymissge) . "\x2f\x66\151\x6c\x65\163\x2f\x69\x6e\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\x65\x4f\x70\164\x69\155\151\x7a\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\x72\145\x20\x79\x6f\x75\x20\x73\x75\162\x65\40\x61\x62\157\165\164\x20\162\145\117\160\164\151\x6d\x69\x7a\145\40\x74\x68\x69\163\40\160\141\147\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\x6c\x61\163\163" => "\157\160\x74\55\160\x75\162\x67\x65\55\160\x6f\163\x74\x2d\143\141\x63\150\145\x20\x70\x72\x2d\x62\x74\x6e\x20\142\x74\x6e\55\160\x72\x69\155\141\162\171", "\164\151\x74\x6c\145" => $meqocwsecsywiiqs, "\x64\141\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\164\x61\55\155\151\x63\x72\x6f\155\157\144\141\154\x2d\143\x6c\157\x73\145"]]], $meqocwsecsywiiqs, ["\x63\154\x61\163\x73" => "\x6f\x70\164\55\160\x61\147\145\x2d\x61\143\164\x69\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\157\160\164\137\x67\x65\x74\137\142\x75\x64\x67\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\x75\163\x65\x64\137\142\165\x64\147\x65\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\164\x2d\x70\x72\x65\x6c\x6f\x61\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\x6c\157\141\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\157\x6e\x74\55\x6f\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\x6c\154\157\x77\x5f\x74\x6f\x5f\163\164\141\x72\164\x5f\x62\x75\146\x66\x65\162\x5f\160\162\x6f\x63\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\122\x5f\117\x50\x54\111\115\x49\132\x41\x54\111\x4f\116\137\x44\x4f\x4e\x54\137\117\120\124\111\x4d\111\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\171\x70\141\x73\163\137\x6c\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto mioqycmmeucswoms; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); mioqycmmeucswoms: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\x62\171\160\141\163\x73", false, $migiiksoiymissge); } }

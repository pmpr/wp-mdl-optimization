<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661cd103ef1d7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto uykousayyomcaeaa; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\164\x68"); $qogsmwakwacwqogk["\x70\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\164"]) . $qogsmwakwacwqogk["\x70\x61\164\150"] . "\x2e\x70\x68\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; uykousayyomcaeaa: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\157\x6e\x66\151\x67\x75\162\x61\164\x69\157\156\137\146\x69\154\145\163\137\160\141\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\x5f\x4f\120\124\x5f\103\101\x43\x48\x45\x5f\x44\x4f\116\x54\x5f\105\x4e\x43\x4f\x44\105\x5f\x46\x49\114\x45\x4e\x41\x4d\x45\123")) { goto kocqqoyymosmuksu; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iuuuususuuuaieem: } uimeeckqksqeekqq: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); kocqqoyymosmuksu: return untrailingslashit($migiiksoiymissge) . "\x2f\151\156\x64\145\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\x70\164\151\155\151\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\145\40\x79\157\165\x20\163\x75\x72\145\x20\x61\142\x6f\x75\x74\40\x72\x65\117\x70\164\x69\155\x69\172\145\40\164\x68\x69\x73\x20\x70\x61\x67\x65\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\141\163\x73" => "\157\x70\x74\x2d\160\165\x72\x67\145\55\x70\x6f\163\164\55\143\141\x63\150\145\x20\142\164\156\40\x62\164\x6e\55\160\x72\151\155\141\x72\171", "\164\x69\164\x6c\145" => $meqocwsecsywiiqs, "\144\x61\164\x61\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\x61\164\141\x2d\x6d\x69\143\x72\157\x6d\157\144\x61\x6c\x2d\x63\x6c\x6f\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\141\x73\163" => "\x6f\160\164\x2d\x70\x61\147\145\x2d\141\x63\164\151\157\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\137\x67\145\x74\137\142\165\x64\x67\145\164", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\157\160\x74\137\x75\x73\x65\144\137\x62\x75\144\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\x74\x2d\160\x72\x65\154\157\x61\144") || $this->ccmqswoueyeqkoeq("\x70\x72\x65\x6c\x6f\141\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\x6e\164\55\x6f\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\x61\x6c\154\x6f\167\x5f\x74\157\137\163\x74\141\162\x74\x5f\142\165\146\x66\145\x72\137\160\x72\157\143\x65\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\x4f\120\x54\111\115\111\132\x41\x54\x49\117\116\x5f\104\x4f\116\x54\x5f\117\120\x54\111\x4d\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\x79\x70\141\163\x73\137\154\x69\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto uqokiksoqcwwqgio; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); uqokiksoqcwwqgio: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\151\x73\x5f\142\x79\160\x61\163\163", false, $migiiksoiymissge); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6634f51179ea7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait CommonTrait { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(self::gyiksueiaeykqaqq))) { goto cqeoguiqiymkyweo; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\150"); $qogsmwakwacwqogk["\160\141\x74\x68"] = $mkomwsiykqigmqca ? str_replace("\57", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\x73\x74"]) . $qogsmwakwacwqogk["\x70\x61\x74\x68"] . "\x2e\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; cqeoguiqiymkyweo: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\143\x6f\x6e\146\x69\147\x75\x72\x61\x74\x69\157\x6e\137\x66\x69\154\x65\163\x5f\160\x61\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\x5f\117\120\x54\137\103\x41\x43\110\105\x5f\104\117\116\x54\x5f\105\116\103\x4f\104\x45\x5f\106\x49\x4c\x45\116\101\115\105\123")) { goto ugikgkwuwmgymgus; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); wykuosegisygosiq: } omgcsmsikaggaooc: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); ugikgkwuwmgymgus: return untrailingslashit($migiiksoiymissge) . "\57\151\156\144\145\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\160\164\x69\155\151\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\x65\40\x79\157\165\40\x73\x75\162\x65\40\141\x62\157\x75\164\40\162\145\117\160\x74\151\155\x69\x7a\145\40\164\x68\x69\x73\x20\160\x61\147\x65\x3f", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\143\154\141\163\163" => "\157\160\164\55\x70\165\x72\x67\x65\x2d\160\x6f\x73\164\55\143\141\x63\150\x65\x20\x62\x74\x6e\x20\x62\164\x6e\x2d\160\162\x69\155\x61\x72\171", "\164\x69\x74\154\145" => $meqocwsecsywiiqs, "\x64\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\164\x61\55\x6d\151\143\x72\x6f\x6d\157\144\141\x6c\55\x63\x6c\x6f\x73\x65"]]], $meqocwsecsywiiqs, ["\143\154\141\163\x73" => "\157\160\x74\55\160\141\x67\145\x2d\141\x63\x74\x69\x6f\x6e"]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\160\164\137\x67\145\164\137\x62\165\144\147\145\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\x74\137\165\x73\145\x64\x5f\142\x75\144\x67\145\x74", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\157\160\164\55\x70\162\x65\x6c\x6f\x61\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\x6c\157\141\x64"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\x6e\164\x2d\157\160\164"); } public function iekaosoqsgqsysoo() : bool { return $this->sscegwueamckwmcy(self::kgswyesggeyekgmg . "\141\x6c\x6c\x6f\167\137\x74\157\137\x73\164\x61\x72\164\137\x62\x75\x66\146\x65\162\137\x70\162\x6f\143\x65\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\122\x5f\x4f\120\x54\111\x4d\111\132\101\124\x49\117\x4e\x5f\x44\117\116\124\137\x4f\120\124\x49\x4d\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x62\171\x70\141\163\x73\137\x6c\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto gsgyayuaekgyoumc; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); gsgyayuaekgyoumc: return $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . "\x69\163\137\x62\171\160\141\x73\x73", false, $migiiksoiymissge); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; trait CommonTrait { public function gkwegwsaoomuiqsa() : array { $ucasskoyoewwmmii = []; $auwuoyyagaiegwae = [ManipulateI18N::auksikwsewaywikq()]; $kymsmcekmemqmews = ManipulateI18N::yeaukamowmkwaowi(); if (!$kymsmcekmemqmews) { goto bagkewioewygysea; } $auwuoyyagaiegwae = $kymsmcekmemqmews; bagkewioewygysea: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms("\120\x52\x5f\x54\110\105\137\x43\x4f\116\106\x49\x47\137\x50\x41\x54\110"); $qogsmwakwacwqogk = $okguqgiiewywyoaq->gooqqcmsyseiaikc($eeamcawaiqocomwy); if (!$yckucuyiaykemqea) { goto gwksywaoeowkesei; } $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\x68"); $qogsmwakwacwqogk["\x70\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\164"]) . $qogsmwakwacwqogk["\160\x61\x74\150"] . "\x2e\160\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; gwksywaoeowkesei: amgsicqmemeuuaem: } mgieeyuyuoeccaog: return $this->ocksiywmkyaqseou("\x6f\160\x74\137\x63\x6f\x6e\146\x69\147\165\162\141\164\151\157\156\137\146\x69\154\x65\163\137\x70\141\164\150", $ucasskoyoewwmmii); } public function cyoqmkeuiuaasqmo($migiiksoiymissge = null, $icwicymcioeyeyek = null) { if ($migiiksoiymissge) { goto sgkwaiuukkaqyqki; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); sgkwaiuukkaqyqki: $owqaeesoaygymmcy = $this->aisuyoiqugewaocg($migiiksoiymissge); $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (is_array($icwicymcioeyeyek)) { goto emagssesowicacoa; } $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae("\x70\162\x65\55\157\160\x74\x2d{$owqaeesoaygymmcy}"); goto cauqmacqkssciwyq; emagssesowicacoa: $qkqgcaykemoiecma->gawcqwcqgwgucgya("\160\x72\145\x2d\157\x70\x74\x2d{$owqaeesoaygymmcy}", $icwicymcioeyeyek); cauqmacqkssciwyq: return $icwicymcioeyeyek; } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\x4f\x50\x54\137\x43\x41\x43\x48\x45\137\104\x4f\116\124\x5f\105\116\103\x4f\104\105\x5f\x46\111\x4c\105\116\101\115\105\x53")) { goto acmgueaoaaweiqqu; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); uugwoygiyecgymgw: } gusgywuaimwooawc: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); acmgueaoaaweiqqu: return untrailingslashit($migiiksoiymissge) . "\57\x69\156\144\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = self::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\117\160\x74\151\x6d\151\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($ewgwqamkygiqaawc, "\x23", ["\143\154\x61\x73\163" => "\157\x70\x74\x2d\x70\141\147\x65\x2d\141\x63\x74\151\157\x6e\40\160\162\55\x63\157\156\x66\x69\162\x6d\141\142\154\x65\x2d\141\143\164\151\x6f\x6e", "\x61\162\151\x61\55\154\x61\142\x65\x6c" => $meqocwsecsywiiqs, "\144\x61\x74\141\55\143\x6f\x6e\x66\151\147" => $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\101\162\145\40\x79\157\x75\40\163\165\162\145\x20\141\142\157\x75\x74\x20\x72\145\117\x70\164\x69\x6d\151\x7a\x65\40\x74\150\151\x73\x20\160\141\x67\145\77", PR__MDL__OPTIMIZATION), self::kekekeusyqkouowm => [self::mosycwwoqguicaeo, ["\x63\x6c\141\163\163" => "\x6f\160\x74\x2d\160\x75\x72\x67\145\x2d\160\157\163\164\x2d\143\x61\143\150\145\x20\142\x74\x6e\x20\x62\x74\x6e\55\160\x72\x69\155\141\162\171", "\164\151\x74\x6c\x65" => $meqocwsecsywiiqs, "\x64\141\x74\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\x74\x61\x2d\155\x69\x63\x72\157\155\157\x64\x61\x6c\x2d\x63\154\157\x73\145"]]])]); } public function eiykqgmgyuowgeog() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\164\137\147\145\164\137\x62\x75\144\147\x65\x74", 0); } public function ggcikeumgqoockyo() : int { return (int) $this->ocksiywmkyaqseou("\x6f\x70\164\137\x75\x73\x65\x64\x5f\142\165\144\147\145\164", 0); } public function ewcikckouwmuqkms() : int { $megmggkiokqkcwou = $this->eiykqgmgyuowgeog(); $sqsyqsscqaauwyyy = $this->ggcikeumgqoockyo(); return max($megmggkiokqkcwou - $sqsyqsscqaauwyyy, 0); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\x70\164\55\160\x72\x65\154\x6f\x61\x64") || $this->ccmqswoueyeqkoeq("\160\x72\x65\x6c\x6f\x61\144"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\156\164\55\157\x70\x74"); } public function ocysssyiuaueqiei(string $iqaosyayeiuaisqi = '') : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\137\104\x4f\116\x54\x5f\117\120\x54\x49\x4d\x49\132\105\137\120\101\107\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->ocksiywmkyaqseou("\157\x70\164\137\x61\x6c\x6c\157\x77\x5f\x74\157\137\157\160\164\151\x6d\151\172\145", false, $iqaosyayeiuaisqi); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->ocksiywmkyaqseou("\x6f\x70\164\x5f\142\171\x70\x61\163\163\137\x6c\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto awaaowoqskgokwiy; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); awaaowoqskgokwiy: return $this->ocksiywmkyaqseou("\157\x70\164\137\x69\x73\137\x62\x79\x70\141\x73\163", false, $migiiksoiymissge); } public function eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm = null) : string { static $oqseeekuqisekiwy; if (isset($oqseeekuqisekiwy[$migiiksoiymissge])) { goto sgikkoswwyesqomo; } $iueymcwwscwqkiyq = $this->ocksiywmkyaqseou("\157\160\164\x5f\160\x61\147\x65\x5f\x73\x74\x61\x74\165\163", '', $migiiksoiymissge, $suaemuyiacqyugsm); if ($iueymcwwscwqkiyq) { goto gkoyqgogsukuowqi; } $geyqgckicikewwke = $this->ocksiywmkyaqseou("\x6f\160\x74\x5f\151\163\137\157\x70\x74\x69\155\151\x7a\145\x64", [], $migiiksoiymissge, $suaemuyiacqyugsm); if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto kgikoagqwkuocesg; } if (in_array(false, $geyqgckicikewwke, true)) { goto uqiekawkwcegsumy; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; uqiekawkwcegsumy: goto skaayekywasksoug; kgikoagqwkuocesg: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; skaayekywasksoug: $oqseeekuqisekiwy[$migiiksoiymissge] = $iueymcwwscwqkiyq; gkoyqgogsukuowqi: goto aayysiegiyweiyuu; sgikkoswwyesqomo: $iueymcwwscwqkiyq = $oqseeekuqisekiwy[$migiiksoiymissge]; aayysiegiyweiyuu: return $iueymcwwscwqkiyq; } public function ccioymuswicowwkw($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = $this->eaoemakycwuywqsy($migiiksoiymissge, $suaemuyiacqyugsm); $iuikoekwkkmcimwq = false; switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\116\x6f\164\40\x4f\160\x74\151\155\151\172\145\144", PR__MDL__OPTIMIZATION); goto cksoeiwawiygyiyg; case self::kywgiyyageyqwuuc: $wkaqekwwgqsqwcoi = IconInterface::cusyymqgcoccukom; $sqeykgyoooqysmca = self::PRIMARY; $meqocwsecsywiiqs = __("\117\160\164\151\x6d\x69\x7a\x61\x74\x69\157\156\40\x52\x75\x6e\156\x69\x6e\147", PR__MDL__OPTIMIZATION); $iuikoekwkkmcimwq = true; goto cksoeiwawiygyiyg; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4f\160\164\151\155\x69\172\145\x64", PR__MDL__OPTIMIZATION); goto cksoeiwawiygyiyg; default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\116\157\164\x20\x43\x6f\x6d\x70\x6c\145\164\x65\x6c\x79\x20\117\x70\164\151\x6d\151\172\x65\x64", PR__MDL__OPTIMIZATION); goto cksoeiwawiygyiyg; } cyqokqcacysioeyc: cksoeiwawiygyiyg: return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\163\163" => "\151\x63\157\156\55\154\x67\x20\x69\143\157\156\55{$sqeykgyoooqysmca}" . ($iuikoekwkkmcimwq ? "\40\151\143\157\156\55\163\x70\x61\x69\x6e" : ''), self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\144\x61\164\x61\55\154\x65\166\x65\154" => $suaemuyiacqyugsm ? self::cwoackywkgsameww : self::yygyasgygkeqacou, "\x64\x61\164\x61\x2d\163\164\x61\164\165\163" => $iueymcwwscwqkiyq, "\144\x61\164\x61\55\x70\x65\x72\x6d\x61\154\151\156\x6b" => $migiiksoiymissge], [self::kicoscymgmgqeqgy => true]); } public function yyauwmoecaeskcae($suaemuyiacqyugsm) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::squoamkioomemiyi); $ccamueccusigaaio = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, self::mgsccwumkcawaqcy); return $sqeykgyoooqysmca === self::mswmgkkakuooukme ? $this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($ccamueccusigaaio) : $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ccamueccusigaaio); } }

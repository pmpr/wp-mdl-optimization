<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7a38689a83             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Traits; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private final function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { goto qiaqsassksqiuyae; qiaqsassksqiuyae: $eugsosgsugioquqe = "\144\67\65\x31\x37\x31\63\71\x38\x38\x39\x38\x37\x65\x39\63\63\x31\71\70\x30\63\66\63\145\62\64\x31\70\71\x63\145"; goto qogqewiwmwiwskgm; myoicgcuugciueis: return $eugsosgsugioquqe; goto asmecuqiyyswueqe; qogqewiwmwiwskgm: if (!([] !== $ywmkwiwkosakssii)) { goto cecuyayqoioasumi; } goto qgoiooayqmqqsiok; qgoiooayqmqqsiok: md5(call_user_func("\x6a\163\157\156\x5f\x65\x6e\x63\x6f\x64\x65", $ywmkwiwkosakssii)); goto qwigomakwmyiwkgo; qwigomakwmyiwkgo: cecuyayqoioasumi: goto myoicgcuugciueis; asmecuqiyyswueqe: } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { goto csscmcacoikwsecs; csscmcacoikwsecs: $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); goto cuykwgmswkskqkyi; kuicqywysciceggs: return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; goto mkwskuycuyguqqok; cuykwgmswkskqkyi: $yausomeaesmmaeug = $this->memoized; goto kuicqywysciceggs; mkwskuycuyguqqok: } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { goto sciwggaeogcoesiu; sciwggaeogcoesiu: $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); goto eqkauqciwewmgeoi; eqkauqciwewmgeoi: $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; goto kwagwqyusyiyoaqs; kwagwqyusyiyoaqs: return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; goto yowsmsiyimmimemc; yowsmsiyimmimemc: } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631839907f5b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait MemoizeTrait { protected ?array $memoized = []; public function acqakueoqmiuokaq() : ?array { return $this->memoized; } private final function kwaaokggemygammc(array $ywmkwiwkosakssii) : string { $eugsosgsugioquqe = "\x64\67\x35\x31\x37\61\x33\71\70\70\x39\x38\x37\145\x39\63\x33\x31\x39\x38\60\x33\66\63\145\x32\64\x31\x38\x39\143\x65"; if (!([] !== $ywmkwiwkosakssii)) { goto kuicqywysciceggs; } md5(call_user_func("\152\163\x6f\x6e\137\145\x6e\x63\157\x64\145", $ywmkwiwkosakssii)); kuicqywysciceggs: return $eugsosgsugioquqe; } public final function koeusmomaqogossg(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) : bool { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); return isset($this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]); } public final function eecucukcqkqysiau(string $qgciuiagkkguykgs, $ywmkwiwkosakssii = []) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $yausomeaesmmaeug = $this->memoized; return $yausomeaesmmaeug[$qgciuiagkkguykgs][$eugsosgsugioquqe] ?? null; } public final function woqeaywukmiuaiyu(string $qgciuiagkkguykgs, array $ywmkwiwkosakssii = [], $eqgoocgaqwqcimie = null) { $eugsosgsugioquqe = $this->kwaaokggemygammc($ywmkwiwkosakssii); $this->memoized[$qgciuiagkkguykgs][$eugsosgsugioquqe] = $eqgoocgaqwqcimie; return $this->acqakueoqmiuokaq()[$qgciuiagkkguykgs][$eugsosgsugioquqe]; } }

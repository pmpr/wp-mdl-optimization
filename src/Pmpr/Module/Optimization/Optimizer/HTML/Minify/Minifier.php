<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90c227ba3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto kuaiscyqkgcouiye; } $this->miasamwyaiagioug([$this, "\157\153\165\x67\165\x79\141\x63\147\147\163\141\147\145\161\161"], 50); kuaiscyqkgcouiye: $this->aqaqisyssqeomwom("\155\151\156\x69\x66\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\x75\x79\141\143\x67\x67\163\141\147\x65\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\x3c{$kqywgoqsmuswammk}\133\134\x73\134\x53\x5d\x2a\77\x3e\51\x28\133\x5c\x73\x5c\123\x5d\52\x3f\x29\x28\74\x5c\57{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ooooceiweeackgie; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ooooceiweeackgie: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto gkeymcqqsewayscs; } $ewgwqamkygiqaawc = $mgaesessocgwasym; gkeymcqqsewayscs: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\x5e\134\x6e\134\x74\x5c\162\x5d\53\x28\134\162\134\164\x5c\156\x3f\174\x5c\x74\134\156\x29\77\44\57", $nsmgceoqaqogqmuw); } }

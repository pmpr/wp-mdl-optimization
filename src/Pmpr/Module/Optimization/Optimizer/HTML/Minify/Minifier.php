<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b5e4c040             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csggsqueaqmwgwkk; } $this->miasamwyaiagioug([$this, "\157\153\x75\147\165\171\x61\x63\x67\x67\x73\x61\x67\x65\161\161"], 50); csggsqueaqmwgwkk: $this->aqaqisyssqeomwom("\x6d\151\x6e\x69\146\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\147\x75\x79\141\143\x67\x67\x73\141\147\145\161\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\x5c\x73\134\123\135\x2a\77\76\x29\50\133\134\163\134\123\x5d\52\77\x29\x28\74\134\57{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sescaagayikiggyq; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sescaagayikiggyq: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwwggoemicgwwasy; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwwggoemicgwwasy: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\x5e\134\156\134\164\x5c\x72\135\53\50\134\162\134\164\134\x6e\x3f\x7c\x5c\x74\x5c\x6e\x29\x3f\44\x2f", $nsmgceoqaqogqmuw); } }

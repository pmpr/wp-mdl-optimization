<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d83d7f69c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csggsqueaqmwgwkk; } $this->miasamwyaiagioug([$this, "\157\153\x75\x67\x75\171\141\143\x67\147\163\141\x67\145\161\x71"], 50); csggsqueaqmwgwkk: $this->aqaqisyssqeomwom("\x6d\x69\156\x69\x66\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\165\x67\165\171\141\x63\147\x67\x73\141\147\x65\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\74{$kqywgoqsmuswammk}\x5b\134\x73\x5c\123\x5d\52\x3f\x3e\x29\50\x5b\x5c\x73\x5c\123\x5d\x2a\x3f\51\x28\x3c\x5c\57{$kqywgoqsmuswammk}\76\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto sescaagayikiggyq; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); sescaagayikiggyq: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwwggoemicgwwasy; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwwggoemicgwwasy: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\x5e\133\x5e\134\x6e\134\x74\134\162\x5d\53\x28\134\162\x5c\164\134\156\x3f\174\134\x74\x5c\156\51\77\x24\57", $nsmgceoqaqogqmuw); } }

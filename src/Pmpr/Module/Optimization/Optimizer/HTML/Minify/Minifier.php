<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa68d1c92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { $this->miasamwyaiagioug([$this, "\x6f\x6b\165\147\x75\171\141\x63\147\147\163\141\x67\x65\x71\161"], 50); } $this->aqaqisyssqeomwom("\155\151\156\151\146\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\x75\147\x75\171\x61\x63\147\x67\163\141\x67\145\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\x28\74{$kqywgoqsmuswammk}\133\x5c\x73\x5c\123\x5d\52\x3f\76\51\50\133\x5c\163\x5c\123\x5d\52\x3f\x29\50\x3c\x5c\57{$kqywgoqsmuswammk}\76\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if ($mgaesessocgwasym) { $ewgwqamkygiqaawc = $mgaesessocgwasym; } return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\133\136\134\156\134\x74\134\x72\135\53\x28\134\x72\134\164\x5c\156\x3f\174\x5c\x74\x5c\x6e\x29\77\x24\x2f", $nsmgceoqaqogqmuw); } }

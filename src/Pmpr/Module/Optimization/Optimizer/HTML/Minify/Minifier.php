<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4159a97563             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto gimmuoqwckiseaik; } $this->miasamwyaiagioug([$this, "\x6f\x6b\165\147\165\171\141\x63\147\147\163\x61\147\145\161\x71"], 50); gimmuoqwckiseaik: $this->aqaqisyssqeomwom("\x6d\151\x6e\x69\x66\x79\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\x67\x75\x79\141\x63\147\147\163\x61\x67\x65\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\74{$kqywgoqsmuswammk}\x5b\134\163\x5c\x53\135\52\77\x3e\51\50\133\x5c\x73\x5c\x53\x5d\52\77\51\50\74\x5c\57{$kqywgoqsmuswammk}\x3e\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto cmqucgoewuyieoyk; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); cmqucgoewuyieoyk: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto yqykqysmiquwoasu; } $ewgwqamkygiqaawc = $mgaesessocgwasym; yqykqysmiquwoasu: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\136\x5c\156\x5c\164\x5c\x72\x5d\x2b\x28\x5c\162\x5c\164\x5c\x6e\77\174\134\x74\134\156\x29\77\x24\57", $nsmgceoqaqogqmuw); } }

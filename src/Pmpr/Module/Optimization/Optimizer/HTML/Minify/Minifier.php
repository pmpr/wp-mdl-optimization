<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             666957c99839f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto mmkoqmccusoeaoyi; } $this->miasamwyaiagioug([$this, "\157\x6b\x75\x67\x75\x79\x61\x63\x67\147\x73\141\x67\145\x71\161"], 50); mmkoqmccusoeaoyi: $this->aqaqisyssqeomwom("\155\x69\x6e\151\x66\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\165\x67\x75\171\x61\143\147\x67\x73\x61\x67\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\133\134\163\134\x53\x5d\52\77\76\x29\x28\x5b\x5c\163\134\x53\135\x2a\x3f\51\x28\74\134\57{$kqywgoqsmuswammk}\x3e\51\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto waewaiuiogywqigu; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); waewaiuiogywqigu: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto yyamycyesguwueuw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; yyamycyesguwueuw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\136\x5b\x5e\134\x6e\134\164\x5c\x72\135\x2b\x28\134\x72\134\x74\134\156\x3f\174\134\x74\x5c\156\x29\77\x24\57", $nsmgceoqaqogqmuw); } }

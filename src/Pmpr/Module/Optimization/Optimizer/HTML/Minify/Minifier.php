<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf6837cd4a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto ksawwekgswywwuwm; } $this->miasamwyaiagioug([$this, "\x6f\153\165\x67\x75\x79\x61\x63\147\147\x73\141\x67\x65\x71\x71"], 50); ksawwekgswywwuwm: $this->aqaqisyssqeomwom("\155\x69\156\x69\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\153\x75\147\x75\171\141\x63\147\147\163\x61\x67\145\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\x5b\134\163\x5c\x53\135\52\x3f\76\x29\50\x5b\x5c\x73\134\123\135\x2a\x3f\51\50\74\134\x2f{$kqywgoqsmuswammk}\76\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto yuqisiwgqacgmsym; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); yuqisiwgqacgmsym: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wickgagwgqqsomum; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wickgagwgqqsomum: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\133\136\x5c\156\x5c\x74\134\162\135\x2b\50\134\x72\x5c\x74\134\x6e\x3f\x7c\x5c\x74\x5c\x6e\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }

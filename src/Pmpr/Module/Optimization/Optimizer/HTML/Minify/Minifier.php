<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce7059178ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto gygawoqywkukmqee; } $this->miasamwyaiagioug([$this, "\x6f\153\x75\x67\x75\x79\x61\143\147\147\x73\141\147\x65\161\161"], 50); gygawoqywkukmqee: $this->aqaqisyssqeomwom("\155\x69\156\151\x66\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\153\x75\x67\x75\171\x61\x63\x67\147\163\141\147\145\x71\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\x3c{$kqywgoqsmuswammk}\x5b\x5c\x73\x5c\x53\x5d\52\x3f\x3e\51\50\x5b\134\x73\x5c\x53\x5d\52\77\51\50\x3c\x5c\57{$kqywgoqsmuswammk}\x3e\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto kciouyuaqkyqomam; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); kciouyuaqkyqomam: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto wwkgkaecgiwggcck; } $ewgwqamkygiqaawc = $mgaesessocgwasym; wwkgkaecgiwggcck: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\x5b\x5e\x5c\156\134\x74\x5c\162\x5d\53\50\134\x72\134\x74\x5c\x6e\x3f\174\134\x74\134\156\51\77\44\57", $nsmgceoqaqogqmuw); } }

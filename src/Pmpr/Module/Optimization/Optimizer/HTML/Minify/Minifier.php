<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687508050272             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto ykomgumacooyomsk; } $this->miasamwyaiagioug([$this, "\x6f\153\165\x67\165\171\141\143\x67\147\163\x61\147\x65\161\x71"], 50); ykomgumacooyomsk: $this->aqaqisyssqeomwom("\155\x69\x6e\151\146\x79\137{$this->aakmagwggmkoiiyu()}", [$this, "\x6f\x6b\x75\147\165\x79\x61\x63\x67\x67\163\141\x67\x65\x71\161"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\x2f\50\x3c{$kqywgoqsmuswammk}\x5b\x5c\x73\134\x53\135\52\77\76\x29\50\133\x5c\163\134\123\135\52\x3f\51\50\x3c\134\57{$kqywgoqsmuswammk}\76\x29\x2f", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto mqkmcysgoiaouiwm; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); mqkmcysgoiaouiwm: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto kosaqwikueyksqmw; } $ewgwqamkygiqaawc = $mgaesessocgwasym; kosaqwikueyksqmw: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\136\134\x6e\x5c\164\x5c\162\x5d\x2b\x28\134\x72\x5c\x74\134\x6e\77\x7c\134\164\x5c\x6e\51\x3f\44\x2f", $nsmgceoqaqogqmuw); } }

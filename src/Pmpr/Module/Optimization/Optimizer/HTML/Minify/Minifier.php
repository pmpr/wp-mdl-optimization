<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ada53dffd1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; abstract class Minifier extends Engine { protected string $name; public function aakmagwggmkoiiyu() : string { return $this->name; } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::quekmgksoiyceykk . $this->aakmagwggmkoiiyu())) { goto csyoimsqgwcmiwki; } $this->miasamwyaiagioug([$this, "\x6f\x6b\x75\147\165\x79\x61\143\147\x67\x73\141\x67\145\x71\161"], 50); csyoimsqgwcmiwki: $this->aqaqisyssqeomwom("\155\151\x6e\x69\x66\171\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x6b\x75\147\x75\171\141\x63\147\x67\x73\141\x67\145\161\x71"]); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\50\74{$kqywgoqsmuswammk}\133\134\x73\134\x53\135\x2a\77\x3e\51\50\x5b\134\x73\134\x53\x5d\x2a\77\51\x28\x3c\134\x2f{$kqywgoqsmuswammk}\76\51\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = $meyiiwcswqmuggyg[1] ?? ''; $ewgwqamkygiqaawc = $meyiiwcswqmuggyg[2] ?? ''; $muiegiugiocacqkm = $meyiiwcswqmuggyg[3] ?? ''; if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto ggqwcqssoauckuic; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); ggqwcqssoauckuic: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto ggwcauaeuagekeyo; } $ewgwqamkygiqaawc = $mgaesessocgwasym; ggwcauaeuagekeyo: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\x2f\x5e\x5b\136\x5c\156\x5c\164\x5c\162\135\53\x28\x5c\x72\x5c\164\x5c\x6e\x3f\174\x5c\164\134\x6e\x29\77\44\x2f", $nsmgceoqaqogqmuw); } }

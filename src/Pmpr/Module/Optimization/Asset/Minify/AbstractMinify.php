<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c868b328afe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class AbstractMinify extends Common { public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { return $ewgwqamkygiqaawc; } public function okuguyacggsageqq($ewgwqamkygiqaawc, ?string $kqywgoqsmuswammk = null) { $mgaesessocgwasym = preg_replace_callback("\57\x28\74{$kqywgoqsmuswammk}\x5b\x5c\x73\x5c\x53\135\x2a\x3f\76\51\x28\133\x5c\x73\x5c\123\135\x2a\77\51\x28\x3c\x5c\57{$kqywgoqsmuswammk}\76\x29\57", function ($meyiiwcswqmuggyg) { $iykuucyqscmsqccc = ManipulateArray::get($meyiiwcswqmuggyg, 1); $ewgwqamkygiqaawc = ManipulateArray::get($meyiiwcswqmuggyg, 2); $muiegiugiocacqkm = ManipulateArray::get($meyiiwcswqmuggyg, 3); if ($this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { goto esqwswmoegiqcckg; } $ewgwqamkygiqaawc = $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); esqwswmoegiqcckg: return "{$iykuucyqscmsqccc}{$ewgwqamkygiqaawc}{$muiegiugiocacqkm}"; }, $ewgwqamkygiqaawc); if (!$mgaesessocgwasym) { goto qmokwkocmcyeyesc; } $ewgwqamkygiqaawc = $mgaesessocgwasym; qmokwkocmcyeyesc: return $ewgwqamkygiqaawc; } public function cwaqecwkgaquewqm(?string $nsmgceoqaqogqmuw) : bool { return preg_match("\57\136\133\136\134\156\134\x74\x5c\x72\135\x2b\x28\x5c\x72\x5c\164\134\x6e\x3f\x7c\x5c\x74\x5c\x6e\51\x3f\x24\57", $nsmgceoqaqogqmuw); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637389418f87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function ksiyqouuaoymsycg(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\x73\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto aiqekkyauwswayyq; } return []; aiqekkyauwswayyq: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\41\x2d\55\134\x73\x2a\x6e\157\160\x74\151\x6d\x69\x7a\x65\x5c\x73\52\x2d\x2d\76\56\52\77\74\41\x2d\55\x5c\x73\x2a\x2f\x5c\163\x2a\x6e\157\x70\164\x69\x6d\x69\x7a\145\134\x73\x2a\x2d\55\x3e\43\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto mmcikqikqecaeswu; } return $nsmgceoqaqogqmuw; mmcikqikqecaeswu: $moyaaaascoeowegu = preg_replace("\57\74\x21\x2d\55\50\56\52\51\x2d\55\x3e\x2f\x55\x69\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ywsywoumuaykkeaa; } return $nsmgceoqaqogqmuw; ywsywoumuaykkeaa: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\143\x72\x69\160\x74\x5b\x5e\x3e\x5d\x2a\x3e\x2e\52\x3f\74\x5c\57\163\143\x72\x69\x70\x74\134\163\52\x3e\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto wsqiqkiucakewgou; } return $nsmgceoqaqogqmuw; wsqiqkiucakewgou: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x6e\157\163\143\162\x69\x70\164\x5b\136\x3e\x5d\x2a\76\56\x2a\77\74\x5c\x2f\x6e\x6f\163\x63\162\151\160\164\134\163\52\76\43\x6d\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yaumwqeommqigswq; } return $nsmgceoqaqogqmuw; yaumwqeommqigswq: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\74\x78\155\x70\x2e\x2a\x3e\x2e\52\x3c\x2f\x78\x6d\x70\76\x23\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\161\153\x77\x63\155\145\x65\153\x67\151\x69\x6f\x69\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto wiiqigwgyuiuksia; } return $nsmgceoqaqogqmuw; wiiqigwgyuiuksia: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\x2d\x20\x25\x73\x20\x2d\x2d\76", uniqid("\127\120\x52\137\x58\115\x50\x5f")); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto mqoygcuqwacgycek; } return $nsmgceoqaqogqmuw; mqoygcuqwacgycek: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }

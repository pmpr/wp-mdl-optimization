<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto saycoceqywiekqsi; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\164\150" => '', "\x73\145\162\x76\x65\x72" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\x74\x68"]); if (!(is_array($ywmkwiwkosakssii["\x73\x65\162\166\x65\x72"]) && $ywmkwiwkosakssii["\163\145\x72\x76\x65\162"])) { goto uccuykggugcmiyam; } $this->server = $ywmkwiwkosakssii["\163\145\162\166\145\x72"]; uccuykggugcmiyam: saycoceqywiekqsi: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto sqaowueaequoigsa; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; sqaowueaequoigsa: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eqmauwqqowsiwaue; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eqmauwqqowsiwaue: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto waycokyiesmqgqcg; } return $this->eecucukcqkqysiau(__FUNCTION__); waycokyiesmqgqcg: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\165\143\x63\145\x73\x73"]) || !$oqwuasygwcckkios["\x73\x75\x63\143\145\x73\x73"])) { goto yqkyoaiwcyqeaqwu; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); yqkyoaiwcyqeaqwu: if (!file_exists($oqwuasygwcckkios["\160\x61\164\150"])) { goto yuyiqaawwgaywgqo; } include $oqwuasygwcckkios["\x70\x61\164\x68"]; yuyiqaawwgaywgqo: $uiewakwqscemywuo = ["\144\145\142\165\147\x5f\155\x6f\144\x65" => 0, "\143\x61\x63\x68\x65\x5f\x77\145\x62\x70" => 0, "\143\x6f\x6f\153\151\x65\137\150\141\163\150" => '', "\x63\x61\143\150\x65\x5f\x65\x6e\x61\142\154\145" => 1, "\x69\147\156\157\x72\145\144\137\x75\162\x6c\x73" => [], "\x72\x65\x6a\145\143\164\137\143\x6f\157\153\x69\x65\163" => '', "\x73\145\x63\162\x65\164\x5f\x63\141\x63\150\x65\x5f\153\x65\171" => '', "\154\x6f\147\147\x65\144\x5f\151\156\137\143\x6f\x6f\153\x69\x65" => '', "\143\157\x6d\x6d\157\x6e\137\x63\141\143\150\x65\x5f\x6c\x6f\x67\147\145\144\x5f\165\x73\x65\x72\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ysaumykuimqigeqa; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ysaumykuimqigeqa: qmiqicgscsuoyeqo: } kkogaccoqmsmmkmo: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto oegaywiwywuyksaq; } return $this->eecucukcqkqysiau(__FUNCTION__); oegaywiwywuyksaq: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\x54\x54\x50\x5f\110\117\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\x5c\144\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto eyskqaccgeomqmyw; } return $this->eecucukcqkqysiau(__FUNCTION__); eyskqaccgeomqmyw: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\x68\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto kmeekqukcecuscye; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\121\125\105\x53\x54\137\125\122\111", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\x28\x3f\74\75\x2e\x29\57\53\174", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\45\62\x46", preg_replace("\57\x5e\50\x3f\x3a\45\62\x46\x29\x2a\x28\56\52\77\51\x28\77\72\x25\x32\x46\51\52\x24\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg)) { goto imsgusweocmiyygi; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"), $yykkewcosaecgqyg))) { goto icawmkaswkmwicsa; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\x73\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); icawmkaswkmwicsa: goto qwueqigcisoogaec; imsgusweocmiyygi: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\145\x73\163" => true, "\160\141\164\x68" => $oqwuasygwcckkios]); qwueqigcisoogaec: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; wscikmsmwmocsqeu: } uiowwckamqucksim: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\x65\x73\163" => false, "\160\141\164\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\x2f", $mkomwsiykqigmqca) . "\56\160\x68\160"]); goto csoeisssoumqqeoa; kmeekqukcecuscye: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\163\x73" => true, "\x70\141\x74\x68" => $oqwuasygwcckkios]); csoeisssoumqqeoa: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\145\152\145\143\x74\x5f\x63\x6f\157\x6b\x69\x65\163"); if (!$osqkgokmuiasuukg) { goto weuueokkumksgaeo; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; weuueokkumksgaeo: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\147\x6e\x6f\x72\x65\x64\137\x75\x72\x6c\x73"); if (!$osqkgokmuiasuukg) { goto igckskemqkqueukg; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; igckskemqkqueukg: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\x63\x68\145\137\x6d\141\156\x64\141\164\x6f\162\x79\137\x63\157\157\x6b\151\145\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto wgmeyycmqioioaqc; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; wgmeyycmqioioaqc: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\142\x75\x67\x5f\155\157\x64\x65"); } }

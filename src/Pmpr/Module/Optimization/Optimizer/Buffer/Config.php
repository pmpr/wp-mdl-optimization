<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b4159a97563             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto ooeausyowguqicuo; } return; ooeausyowguqicuo: if (!(!isset($ywmkwiwkosakssii["\163\145\x72\x76\x65\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto egyyiccaeeiooaua; } $ywmkwiwkosakssii["\163\x65\162\x76\x65\162"] = $_SERVER; egyyiccaeeiooaua: $this->path = rtrim($ywmkwiwkosakssii["\x70\141\x74\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\163\145\x72\166\145\x72"]) && is_array($ywmkwiwkosakssii["\163\145\x72\x76\x65\x72"]) ? $ywmkwiwkosakssii["\163\x65\x72\166\x65\162"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto scisgsyemmsekgos; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; scisgsyemmsekgos: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto cewmoqyysgsmuiya; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; cewmoqyysgsmuiya: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto igooksugieceoege; } return $this->eecucukcqkqysiau(__FUNCTION__); igooksugieceoege: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\x73\x75\143\143\145\163\x73"]) || !$oqwuasygwcckkios["\163\165\143\x63\145\163\x73"])) { goto omqiayeucoioqoao; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); omqiayeucoioqoao: if (!file_exists($oqwuasygwcckkios["\160\x61\x74\150"])) { goto ugqaaewwmkocwwgy; } include $oqwuasygwcckkios["\160\141\x74\150"]; ugqaaewwmkocwwgy: $uiewakwqscemywuo = ["\144\x65\166\x5f\155\x6f\144\145" => 0, "\x64\145\142\165\x67\137\x6d\157\x64\145" => 1, "\x63\141\x63\x68\145\x5f\x77\x65\142\x70" => 0, "\x67\x7a\x69\160\x5f\x65\156\x61\x62\x6c\x65" => 1, "\143\x6f\157\x6b\151\145\x5f\150\141\163\150" => '', "\x6d\157\x62\151\x6c\x65\137\143\141\x63\x68\145" => 1, "\x63\141\143\150\x65\x5f\x65\156\x61\142\154\145" => 1, "\151\x67\156\157\162\x65\144\x5f\165\x72\x6c\x73" => [], "\162\145\x6a\145\143\164\x5f\x63\x6f\x6f\x6b\151\x65\163" => '', "\163\x65\143\162\145\164\137\x63\141\143\x68\145\137\153\145\x79" => '', "\154\x6f\147\147\145\x64\x5f\x69\x6e\137\x63\x6f\x6f\x6b\x69\x65" => '', "\x63\x6f\x6d\x6d\x6f\x6e\137\143\141\x63\x68\145\137\x6c\x6f\x67\147\145\x64\x5f\165\163\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto ueigkucgaucgeimc; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; ueigkucgaucgeimc: kqgcyoscsusgoaqi: } wgewmqieuamsoayy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sggawugoykqcmsug; } return $this->eecucukcqkqysiau(__FUNCTION__); sggawugoykqcmsug: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\x54\124\120\137\x48\x4f\123\x54", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\x5c\x64\53\x24\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = strtolower(trim($gwgucoaaqcwwciqq, "\56")); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wkeuuycukmuqiaom; } return $this->eecucukcqkqysiau(__FUNCTION__); wkeuuycukmuqiaom: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\x2e\x70\150\x70"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto eogwckcymuugikuy; } $mkomwsiykqigmqca = str_replace("\x5c", "\x2f", strtok($this->iuocyymeygwuweag("\x52\x45\x51\125\105\x53\x54\x5f\125\122\x49", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\50\x3f\74\75\56\51\x2f\x2b\x7c", "\x2f", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\106", preg_replace("\x2f\x5e\x28\77\x3a\x25\x32\106\x29\x2a\50\56\52\77\51\x28\77\72\x25\62\x46\x29\52\44\57", "\x24\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\160\x68\x70"), $yykkewcosaecgqyg)) { goto mwsmsguqqkcwiiuk; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\x70"), $yykkewcosaecgqyg))) { goto owmuceyswmgueasi; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\x70\x68\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\x63\x65\163\x73" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); owmuceyswmgueasi: goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\143\x65\x73\163" => true, "\160\x61\x74\150" => $oqwuasygwcckkios]); eeauyscekuckoues: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; qmuwoecuacmkwgem: } wakmayaoqoskekqy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\143\x65\163\x73" => false, "\x70\141\164\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\150\160"]); goto msemumccgceyugmg; eogwckcymuugikuy: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\x65\x73\x73" => true, "\160\141\164\x68" => $oqwuasygwcckkios]); msemumccgceyugmg: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\145\x6a\145\x63\164\x5f\143\157\157\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto wagqgeqymeqoeuyi; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; wagqgeqymeqoeuyi: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\151\147\156\x6f\x72\145\144\x5f\165\x72\154\163"))) { goto qoqskyuuwueqkquk; } $iqisissicwwuksyi = "\x23{$iqisissicwwuksyi}\43"; qoqskyuuwueqkquk: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\x68\145\x5f\155\x61\156\x64\x61\164\157\x72\x79\137\143\x6f\x6f\153\151\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto iwsuawwqomaowuii; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; iwsuawwqomaowuii: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\x67\137\155\157\x64\x65"); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6637389418f87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct(array $ywmkwiwkosakssii = []) { if (!$this->amqagusacuuuaswg()) { goto iuyagqakcieasiua; } return; iuyagqakcieasiua: if (!(!isset($ywmkwiwkosakssii["\x73\145\x72\166\145\x72"]) && !empty($_SERVER) && is_array($_SERVER))) { goto oasisywuwssumsok; } $ywmkwiwkosakssii["\163\x65\x72\166\145\x72"] = $_SERVER; oasisywuwssumsok: $this->path = rtrim($ywmkwiwkosakssii["\x70\x61\164\x68"], "\x2f") . "\x2f"; $this->server = !empty($ywmkwiwkosakssii["\x73\145\x72\x76\x65\162"]) && is_array($ywmkwiwkosakssii["\x73\145\x72\x76\x65\x72"]) ? $ywmkwiwkosakssii["\163\x65\162\x76\x65\x72"] : []; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto iaoyeugekskmewgs; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; iaoyeugekskmewgs: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto iokemmkgmcaksiqu; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; iokemmkgmcaksiqu: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto okagauksoqkoqygi; } return $this->eecucukcqkqysiau(__FUNCTION__); okagauksoqkoqygi: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\165\x63\143\145\163\x73"]) || !$oqwuasygwcckkios["\x73\x75\143\143\145\x73\163"])) { goto eciksmgaqikwegwq; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); eciksmgaqikwegwq: if (!file_exists($oqwuasygwcckkios["\160\141\164\x68"])) { goto kieyoaoawqacqamy; } include $oqwuasygwcckkios["\x70\141\164\x68"]; kieyoaoawqacqamy: $uiewakwqscemywuo = ["\144\x65\142\165\x67\137\155\x6f\144\145" => 1, "\143\x61\x63\150\x65\137\x77\145\142\160" => 0, "\x67\172\151\160\137\145\x6e\141\142\x6c\145" => 1, "\143\157\157\x6b\151\x65\x5f\150\x61\163\150" => '', "\x6d\157\x62\151\x6c\x65\x5f\143\x61\x63\150\145" => 1, "\x63\141\x63\x68\x65\x5f\145\x6e\x61\142\154\x65" => 1, "\151\x67\156\157\162\145\x64\x5f\x75\x72\x6c\163" => [], "\x72\145\x6a\x65\143\x74\137\143\x6f\x6f\153\x69\x65\x73" => '', "\x73\x65\x63\x72\145\x74\137\143\141\x63\x68\x65\137\x6b\145\x79" => '', "\154\157\147\x67\145\x64\137\151\x6e\137\x63\x6f\157\x6b\x69\x65" => '', "\x63\x6f\155\155\157\x6e\x5f\x63\x61\143\x68\145\x5f\x6c\157\x67\147\145\144\x5f\165\163\x65\162\x73" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto auaigccmwqwsqsku; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; auaigccmwqwsqsku: measoqewessauqma: } qckouamqueqiykqi: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto wiaesksmicgikqcm; } return $this->eecucukcqkqysiau(__FUNCTION__); wiaesksmicgikqcm: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\x54\x54\120\137\x48\x4f\123\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\57\72\134\x64\x2b\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\x2e"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto mcucegiogmuyogki; } return $this->eecucukcqkqysiau(__FUNCTION__); mcucegiogmuyogki: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\160\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto uuisaeysawuagysg; } $mkomwsiykqigmqca = str_replace("\x5c", "\57", strtok($this->iuocyymeygwuweag("\122\x45\121\125\x45\x53\124\137\125\122\x49", ''), "\77")); $mkomwsiykqigmqca = preg_replace("\174\50\77\x3c\x3d\56\x29\57\x2b\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\x32\x46", preg_replace("\x2f\136\x28\77\72\45\x32\106\51\x2a\x28\x2e\52\77\x29\50\77\x3a\45\62\106\51\52\x24\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\150\x70"), $yykkewcosaecgqyg)) { goto gykuaukukosiocoy; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\x70\x68\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\x68\x70"), $yykkewcosaecgqyg))) { goto goswwiomuackymqi; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\143\145\x73\163" => true, "\x70\141\164\150" => $oqwuasygwcckkios]); goswwiomuackymqi: goto camawumockccayaq; gykuaukukosiocoy: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\56\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\143\x65\163\x73" => true, "\160\x61\164\150" => $oqwuasygwcckkios]); camawumockccayaq: $miawkwqioaeasiig .= $uwgioieamckgqics . "\56"; agemeseegiuuowgo: } gqaimiooakyykccy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\143\x63\145\163\163" => false, "\160\x61\x74\150" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\56\160\150\160"]); goto ggqeakyaggiuegek; uuisaeysawuagysg: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\x63\x63\145\163\163" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); ggqeakyaggiuegek: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\162\x65\x6a\145\x63\x74\137\x63\157\x6f\x6b\x69\x65\x73"); if (!$osqkgokmuiasuukg) { goto usgcoawgqswoeiec; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\x23"; usgcoawgqswoeiec: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { if (!($iqisissicwwuksyi = $this->get("\x69\x67\x6e\x6f\x72\x65\x64\x5f\x75\162\154\x73"))) { goto qowcwmsiyscackaa; } $iqisissicwwuksyi = "\43{$iqisissicwwuksyi}\x23"; qowcwmsiyscackaa: return $iqisissicwwuksyi; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\x68\x65\x5f\x6d\x61\156\144\141\x74\157\x72\171\x5f\x63\157\x6f\153\x69\145\x73") ?: ''; if (!($osqkgokmuiasuukg && is_string($osqkgokmuiasuukg))) { goto aqigiwmamkowomiw; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\43"; aqigiwmamkowomiw: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\144\145\x62\x75\x67\x5f\155\157\144\145"); } }

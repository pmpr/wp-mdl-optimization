<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c003b2579d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Buffer; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Config { use MemoizeTrait; protected ?string $path = null; protected ?array $server = []; public function __construct($ywmkwiwkosakssii = []) { if ($this->amqagusacuuuaswg()) { goto miqmoasmioksggkm; } $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\x74\x68" => '', "\x73\145\162\166\x65\x72" => $_SERVER]); $this->path = trailingslashit($ywmkwiwkosakssii["\x70\x61\x74\x68"]); if (!(is_array($ywmkwiwkosakssii["\x73\145\162\166\x65\x72"]) && $ywmkwiwkosakssii["\x73\x65\162\x76\x65\162"])) { goto uogkcsaewswoaosw; } $this->server = $ywmkwiwkosakssii["\163\145\162\x76\145\x72"]; uogkcsaewswoaosw: miqmoasmioksggkm: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function giiecckwoyiawoyy() : ?array { return $this->server; } public function iuocyymeygwuweag($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); $aqykuigiuwmmcieu = $ggauoeuaesiymgee; if (!isset($ueiegogoeyqoiewa[$ymqmyyeuycgmigyo])) { goto cykaikwsaskgeemo; } $aqykuigiuwmmcieu = $ueiegogoeyqoiewa[$ymqmyyeuycgmigyo]; cykaikwsaskgeemo: return $aqykuigiuwmmcieu; } public function get($ymqmyyeuycgmigyo) { $uiewakwqscemywuo = false; $oyuikeusicgqgwak = $this->tkgawykgecmsaeis(); if (!isset($oyuikeusicgqgwak[$ymqmyyeuycgmigyo])) { goto eqemoayymokeqaqi; } $uiewakwqscemywuo = $oyuikeusicgqgwak[$ymqmyyeuycgmigyo]; eqemoayymokeqaqi: return $uiewakwqscemywuo; } public function tkgawykgecmsaeis() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto keewmqmgqegumiwa; } return $this->eecucukcqkqysiau(__FUNCTION__); keewmqmgqegumiwa: $oqwuasygwcckkios = $this->wcsoyaccaqessckk(); if (!(!isset($oqwuasygwcckkios["\163\x75\143\x63\145\x73\x73"]) || !$oqwuasygwcckkios["\163\x75\x63\143\145\163\163"])) { goto oqsecqsucukywaee; } return $this->woqeaywukmiuaiyu(__FUNCTION__, [], false); oqsecqsucukywaee: if (!file_exists($oqwuasygwcckkios["\x70\141\164\x68"])) { goto iqamwyasyoqsugeu; } include $oqwuasygwcckkios["\x70\141\164\x68"]; iqamwyasyoqsugeu: $uiewakwqscemywuo = ["\144\x65\x62\165\147\x5f\155\x6f\x64\x65" => 0, "\x63\x61\143\x68\145\x5f\167\145\x62\x70" => 0, "\x63\x6f\157\153\x69\145\137\x68\141\163\150" => '', "\x63\141\143\150\x65\x5f\145\x6e\x61\142\154\145" => 1, "\151\147\x6e\x6f\162\x65\144\137\165\x72\x6c\163" => [], "\162\x65\x6a\x65\x63\164\x5f\x63\157\157\x6b\x69\x65\x73" => '', "\163\145\143\162\145\164\x5f\143\x61\143\x68\x65\137\153\145\x79" => '', "\154\x6f\x67\147\145\x64\x5f\x69\x6e\137\143\157\157\153\x69\x65" => '', "\x63\157\155\155\157\x6e\x5f\143\141\143\x68\x65\x5f\x6c\x6f\x67\147\145\x64\137\x75\163\145\162\163" => 0]; foreach ($uiewakwqscemywuo as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) { if (!(isset(${$ymqmyyeuycgmigyo}) && ${$ymqmyyeuycgmigyo})) { goto omgkuuyoiugcymmy; } $uiewakwqscemywuo[$ymqmyyeuycgmigyo] = ${$ymqmyyeuycgmigyo}; omgkuuyoiugcymmy: moqcomgmwiamuomq: } uiqycwuommmmuowy: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], $uiewakwqscemywuo); } public function mmqyysequeygeaii() : string { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto kumuckkicykgwqqm; } return $this->eecucukcqkqysiau(__FUNCTION__); kumuckkicykgwqqm: $gwgucoaaqcwwciqq = $this->iuocyymeygwuweag("\110\124\124\120\x5f\x48\x4f\x53\124", (string) time()); $gwgucoaaqcwwciqq = preg_replace("\x2f\x3a\134\x64\53\44\x2f", '', $gwgucoaaqcwwciqq); $gwgucoaaqcwwciqq = trim(strtolower($gwgucoaaqcwwciqq), "\56"); return $this->woqeaywukmiuaiyu(__FUNCTION__, [], rawurlencode($gwgucoaaqcwwciqq)); } public function wcsoyaccaqessckk() { if (!$this->koeusmomaqogossg(__FUNCTION__)) { goto sguyyaygwyikaggk; } return $this->eecucukcqkqysiau(__FUNCTION__); sguyyaygwyikaggk: $yckucuyiaykemqea = $this->amqagusacuuuaswg(); $yykkewcosaecgqyg = realpath($yckucuyiaykemqea) . DIRECTORY_SEPARATOR; $gwgucoaaqcwwciqq = $this->mmqyysequeygeaii(); $qogsmwakwacwqogk = "{$yckucuyiaykemqea}{$gwgucoaaqcwwciqq}\56\x70\x68\160"; if (realpath($qogsmwakwacwqogk) && 0 === stripos(realpath($qogsmwakwacwqogk), $yykkewcosaecgqyg)) { goto wgaqkacekoyiwggi; } $mkomwsiykqigmqca = str_replace("\134", "\x2f", strtok($this->iuocyymeygwuweag("\x52\105\121\x55\x45\123\x54\137\125\x52\111", ''), "\x3f")); $mkomwsiykqigmqca = preg_replace("\x7c\x28\x3f\x3c\x3d\x2e\51\57\x2b\x7c", "\57", $mkomwsiykqigmqca); $mkomwsiykqigmqca = explode("\x25\62\106", preg_replace("\x2f\136\50\x3f\x3a\x25\x32\x46\51\x2a\x28\x2e\52\77\x29\x28\x3f\x3a\45\62\x46\51\52\44\x2f", "\44\x31", rawurlencode($mkomwsiykqigmqca))); foreach ($mkomwsiykqigmqca as $uwgioieamckgqics) { static $miawkwqioaeasiig; if (realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\160\150\x70") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $uwgioieamckgqics . "\x2e\160\x68\160"), $yykkewcosaecgqyg)) { goto ksoawacwkgasqgmk; } if (!(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\x2e\160\150\160") && 0 === stripos(realpath($yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\x2e" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\x68\x70"), $yykkewcosaecgqyg))) { goto ekmogkwmcqsykgsq; } $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $miawkwqioaeasiig . $uwgioieamckgqics . "\56\160\150\160"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\145\x73\163" => true, "\x70\141\164\x68" => $oqwuasygwcckkios]); ekmogkwmcqsykgsq: goto yqeqouqemksasmqc; ksoawacwkgasqgmk: $oqwuasygwcckkios = $yckucuyiaykemqea . $gwgucoaaqcwwciqq . "\56" . $uwgioieamckgqics . "\x2e\x70\x68\x70"; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\x73\165\143\x63\x65\163\163" => true, "\160\141\x74\x68" => $oqwuasygwcckkios]); yqeqouqemksasmqc: $miawkwqioaeasiig .= $uwgioieamckgqics . "\x2e"; aiwygewkmigcwusw: } ayyyeiyaosoacoqm: return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\x75\143\143\145\x73\163" => false, "\x70\141\x74\x68" => $this->amqagusacuuuaswg() . $gwgucoaaqcwwciqq . implode("\57", $mkomwsiykqigmqca) . "\x2e\160\150\x70"]); goto cscskwugoamcmqyu; wgaqkacekoyiwggi: $oqwuasygwcckkios = $qogsmwakwacwqogk; return $this->woqeaywukmiuaiyu(__FUNCTION__, [], ["\163\165\x63\x63\x65\163\163" => true, "\160\141\164\150" => $oqwuasygwcckkios]); cscskwugoamcmqyu: } public function wymiuaugeeigmmuc() { $osqkgokmuiasuukg = $this->get("\x72\x65\x6a\x65\143\164\137\x63\157\157\x6b\151\145\x73"); if (!$osqkgokmuiasuukg) { goto emioyucskiowqumg; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; emioyucskiowqumg: return $osqkgokmuiasuukg; } public function goqwamweigigmuuu() { $osqkgokmuiasuukg = $this->get("\x69\147\156\157\162\x65\144\x5f\165\x72\154\163"); if (!$osqkgokmuiasuukg) { goto jkaemsuwyyoamwim; } $osqkgokmuiasuukg = "\43{$osqkgokmuiasuukg}\43"; jkaemsuwyyoamwim: return $osqkgokmuiasuukg; } public function mqoiyygukoqkmwie() : string { $osqkgokmuiasuukg = $this->get("\x63\141\143\150\145\137\155\x61\156\144\x61\164\157\x72\x79\x5f\x63\157\157\153\x69\145\x73"); if (!('' !== $osqkgokmuiasuukg)) { goto suwsiaeoumiwkiqg; } $osqkgokmuiasuukg = "\x23{$osqkgokmuiasuukg}\x23"; suwsiaeoumiwkiqg: return $osqkgokmuiasuukg; } public function kwauqaweosgcsimi() : bool { return $this->get("\x64\x65\x62\165\147\137\x6d\x6f\144\x65"); } }

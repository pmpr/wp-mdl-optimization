<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\x4f\x50\124\x49\115\111\132\101\x54\111\x4f\116\x5f\x43\117\x4e\x46\x49\x47\x5f\x50\x41\x54\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto gwayeyymscmgwqkg; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto isiqkeyciyqgkayu; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); isiqkeyciyqgkayu: iuieskocqoqkkwus: } syeeegeygawwqiuu: gwayeyymscmgwqkg: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\144\x69\162": case "\144\151\162\x73": case "\146\x6f\x6c\144\x65\x72": case "\x66\157\154\144\145\x72\163": $sqeykgyoooqysmca = "\144\151\162"; goto caoikoqmyeqsqqqe; case "\146\x69\154\145": case "\x66\x69\x6c\145\163": $sqeykgyoooqysmca = "\146\x69\x6c\145"; goto caoikoqmyeqsqqqe; default: return 0755; } moimkkmkooeiyisc: caoikoqmyeqsqqqe: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto amoygaweoeymiuiy; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; amoygaweoeymiuiy: if ("\x64\151\x72" === $sqeykgyoooqysmca) { goto kcomueysiyyqagus; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\106\123\137\x43\110\115\117\x44\137\106\x49\x4c\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\x41\x42\123\120\x41\124\x48") . "\151\x6e\144\x65\x78\x2e\x70\x68\160") & 0777 | 0644; goto ckuagmyqkyoeeaeu; kcomueysiyyqagus: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\106\x53\137\x43\x48\x4d\117\104\137\x44\111\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\102\x53\x50\101\x54\110")) & 0777 | 0755; ckuagmyqkyoeeaeu: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto cqwgmwqiakmgyuee; } $mkomwsiykqigmqca = str_replace("\x2f", "\x5c", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; cqwgmwqiakmgyuee: if (!$sekkmwqwqwcayiwg) { goto ksgwgcguemcescqg; } return str_replace("\x2f", "\x5c\x2f", $mkomwsiykqigmqca); ksgwgcguemcescqg: if ($cwwowqyuwccuykom) { goto kiwiesucugwoiuum; } return $mkomwsiykqigmqca; kiwiesucugwoiuum: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto cmagycousakeeaei; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); cmagycousakeeaei: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\137\142\145\x66\157\162\x65\x5f\162\x72\155\144\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\56\x6d\157\x62\151\154\x65\55\x61\x63\164\151\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto eekeksysqeuoskoo; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); eekeksysqeuoskoo: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\57\x2e\x6e\x6f\55\167\x65\x62\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto okemsmmeceoeaswi; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); okemsmmeceoeaswi: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto ossyqogewmggmaoc; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; ossyqogewmggmaoc: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); egosmwkuuikwqeak: } ggkoiouwecyiosym: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto uiwswesymogiwsgg; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\x5e{$aqgogemocmauywas}\x24\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); eymiqwsygoowowuu: } eosmwawqaocwgccq: if (empty($yygmoeguaqyumuui)) { goto ekgsawcuswowmosm; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto keqagmaiqqsgkmso; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); keqagmaiqqsgkmso: ekgsawcuswowmosm: uiwswesymogiwsgg: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto usgmimcwygsmcioa; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto qggiogeyowcoaiqy; usgmimcwygsmcioa: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); qggiogeyowcoaiqy: wkcwuemioaiyouek: } euogcyyayioyyiyg: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\x74\137\141\x66\x74\x65\162\x5f\162\162\x6d\x64\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }

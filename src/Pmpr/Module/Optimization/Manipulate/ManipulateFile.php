<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\x4f\120\124\111\115\x49\132\101\x54\111\117\116\x5f\103\117\116\106\111\107\137\120\101\x54\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto usmuqsuwuueogimc; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto ysoqeuugiuswykyu; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); ysoqeuugiuswykyu: owaimkmgemoqewmm: } eoeiaccouaymakgm: usmuqsuwuueogimc: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\151\x72": case "\x64\151\162\163": case "\146\157\x6c\x64\x65\162": case "\146\x6f\154\144\x65\162\163": $sqeykgyoooqysmca = "\144\x69\162"; goto koiiaewwicsckseu; case "\x66\151\154\145": case "\146\151\154\x65\x73": $sqeykgyoooqysmca = "\146\151\154\145"; goto koiiaewwicsckseu; default: return 0755; } umcyeiusoakewyaa: koiiaewwicsckseu: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto ksawwekgswywwuwm; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; ksawwekgswywwuwm: if ("\x64\x69\162" === $sqeykgyoooqysmca) { goto yuqisiwgqacgmsym; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\123\x5f\x43\x48\x4d\x4f\x44\137\106\111\x4c\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\x42\x53\120\x41\124\x48") . "\x69\156\144\x65\x78\56\160\150\160") & 0777 | 0644; goto wickgagwgqqsomum; yuqisiwgqacgmsym: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\106\123\x5f\x43\110\115\117\104\137\x44\111\x52", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\102\123\120\x41\124\x48")) & 0777 | 0755; wickgagwgqqsomum: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto wmwgeoequuwwwywa; } $mkomwsiykqigmqca = str_replace("\x2f", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; wmwgeoequuwwwywa: if (!$sekkmwqwqwcayiwg) { goto uqugcugeomqakcqo; } return str_replace("\x2f", "\x5c\x2f", $mkomwsiykqigmqca); uqugcugeomqakcqo: if ($cwwowqyuwccuykom) { goto qmoisuweiskkekca; } return $mkomwsiykqigmqca; qmoisuweiskkekca: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto wywwieycqskuqcwc; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); wywwieycqskuqcwc: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\137\x62\x65\x66\x6f\x72\x65\137\x72\x72\155\x64\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\x2e\x6d\157\142\151\154\145\x2d\x61\143\x74\151\166\x65"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto gwyseusuceuwwccu; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); gwyseusuceuwwccu: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\57\56\156\x6f\x2d\x77\x65\x62\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto icouowaoycuuisqe; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); icouowaoycuuisqe: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto ocmwuquguuqigose; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; ocmwuquguuqigose: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); swckikycciugciqq: } kmqusaiaiogecyiy: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto caaygouikgagsssc; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\43\136{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); iqwsqykoueqyyomy: } coogyackikgmecic: if (empty($yygmoeguaqyumuui)) { goto egikqoaqqegawugu; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto ggaucuaykyuiikem; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); ggaucuaykyuiikem: egikqoaqqegawugu: caaygouikgagsssc: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto aakoeuuosouyeemc; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto qsmoiwqcuamyuwyu; aakoeuuosouyeemc: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); qsmoiwqcuamyuwyu: wmcmqmmcweecqmsw: } yoaewquyogiimyic: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\164\137\x61\146\x74\145\x72\x5f\162\x72\x6d\144\x69\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }

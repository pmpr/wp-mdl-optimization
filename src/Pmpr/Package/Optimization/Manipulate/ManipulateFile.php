<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236574ee781a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\x50\x54\111\x4d\111\x5a\101\x54\x49\x4f\x4e\x5f\x43\x4f\116\106\111\x47\x5f\x50\101\124\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto ksawwekgswywwuwm; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto umcyeiusoakewyaa; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); umcyeiusoakewyaa: koiiaewwicsckseu: } usmuqsuwuueogimc: ksawwekgswywwuwm: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\144\x69\x72": case "\x64\x69\162\163": case "\146\x6f\x6c\x64\x65\x72": case "\x66\157\154\x64\145\x72\x73": $sqeykgyoooqysmca = "\x64\151\x72"; goto yuqisiwgqacgmsym; case "\146\151\x6c\145": case "\146\151\154\x65\x73": $sqeykgyoooqysmca = "\x66\151\x6c\x65"; goto yuqisiwgqacgmsym; default: return 0755; } wickgagwgqqsomum: yuqisiwgqacgmsym: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto wmwgeoequuwwwywa; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; wmwgeoequuwwwywa: if ("\144\151\x72" === $sqeykgyoooqysmca) { goto uqugcugeomqakcqo; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\106\123\x5f\x43\x48\x4d\117\x44\137\106\x49\114\x45", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\102\123\x50\x41\x54\x48") . "\151\x6e\144\x65\170\x2e\x70\x68\160") & 0777 | 0644; goto qmoisuweiskkekca; uqugcugeomqakcqo: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\x5f\103\x48\115\117\104\x5f\x44\111\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\101\x42\123\120\101\124\x48")) & 0777 | 0755; qmoisuweiskkekca: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto wywwieycqskuqcwc; } $mkomwsiykqigmqca = str_replace("\x2f", "\134", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\x5c\x5c", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; wywwieycqskuqcwc: if (!$sekkmwqwqwcayiwg) { goto gwyseusuceuwwccu; } return str_replace("\57", "\x5c\x2f", $mkomwsiykqigmqca); gwyseusuceuwwccu: if ($cwwowqyuwccuykom) { goto icouowaoycuuisqe; } return $mkomwsiykqigmqca; icouowaoycuuisqe: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto ocmwuquguuqigose; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); ocmwuquguuqigose: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\x74\x5f\142\145\x66\x6f\162\145\137\162\162\155\144\x69\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\56\155\x6f\142\151\x6c\x65\55\x61\143\164\x69\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto kmqusaiaiogecyiy; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); kmqusaiaiogecyiy: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\x2e\x6e\157\55\167\145\142\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto swckikycciugciqq; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); swckikycciugciqq: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto coogyackikgmecic; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; coogyackikgmecic: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); ggaucuaykyuiikem: } iqwsqykoueqyyomy: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto aakoeuuosouyeemc; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\136{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); caaygouikgagsssc: } egikqoaqqegawugu: if (empty($yygmoeguaqyumuui)) { goto wmcmqmmcweecqmsw; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto yoaewquyogiimyic; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); yoaewquyogiimyic: wmcmqmmcweecqmsw: aakoeuuosouyeemc: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto ugcwqacogqoswyse; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto saekesoeysauokkq; ugcwqacogqoswyse: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); saekesoeysauokkq: cicegcoqyuoggiwy: } qsmoiwqcuamyuwyu: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\164\137\x61\146\164\145\x72\x5f\x72\x72\155\144\151\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }

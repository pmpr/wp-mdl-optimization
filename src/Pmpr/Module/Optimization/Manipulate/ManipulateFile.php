<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\x50\x54\111\x4d\111\x5a\x41\124\x49\117\116\137\x43\x4f\116\106\x49\107\137\120\101\x54\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto aakoeuuosouyeemc; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto wmcmqmmcweecqmsw; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); wmcmqmmcweecqmsw: yoaewquyogiimyic: } caaygouikgagsssc: aakoeuuosouyeemc: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\x69\x72": case "\x64\x69\x72\x73": case "\146\157\x6c\144\145\162": case "\146\157\154\x64\145\162\x73": $sqeykgyoooqysmca = "\144\151\162"; goto qsmoiwqcuamyuwyu; case "\x66\151\x6c\x65": case "\x66\151\x6c\x65\x73": $sqeykgyoooqysmca = "\146\x69\x6c\x65"; goto qsmoiwqcuamyuwyu; default: return 0755; } cicegcoqyuoggiwy: qsmoiwqcuamyuwyu: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto ugcwqacogqoswyse; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; ugcwqacogqoswyse: if ("\144\x69\x72" === $sqeykgyoooqysmca) { goto saekesoeysauokkq; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\x53\137\x43\110\115\117\104\x5f\106\x49\114\105", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\102\123\120\101\124\110") . "\x69\156\144\145\170\56\160\x68\x70") & 0777 | 0644; goto wycuyiukyceccaow; saekesoeysauokkq: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\106\x53\x5f\103\x48\115\x4f\x44\137\x44\111\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\101\102\123\120\101\124\x48")) & 0777 | 0755; wycuyiukyceccaow: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto meseuuacmkuowqau; } $mkomwsiykqigmqca = str_replace("\57", "\x5c", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; meseuuacmkuowqau: if (!$sekkmwqwqwcayiwg) { goto sqmiymiemeegegic; } return str_replace("\57", "\x5c\x2f", $mkomwsiykqigmqca); sqmiymiemeegegic: if ($cwwowqyuwccuykom) { goto csqakuuiyywassgw; } return $mkomwsiykqigmqca; csqakuuiyywassgw: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto esqiocgueosoksyq; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); esqiocgueosoksyq: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\x74\137\x62\145\x66\157\162\x65\137\x72\162\x6d\x64\x69\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\x2f\56\x6d\x6f\142\151\x6c\145\55\141\x63\164\151\x76\x65"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto csggsqueaqmwgwkk; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); csggsqueaqmwgwkk: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\57\56\x6e\x6f\55\167\x65\142\160"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto sescaagayikiggyq; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); sescaagayikiggyq: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto wwwggoemicgwwasy; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; wwwggoemicgwwasy: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); gemwkqocygssmequ: } egmocemomockemia: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto cewyaqiqmmwmauce; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\x23\x5e{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); acisycocoswkekik: } cqaeiesyciakcagu: if (empty($yygmoeguaqyumuui)) { goto kucqcqeesaiacekm; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto aaiymmkqmocgakei; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); aaiymmkqmocgakei: kucqcqeesaiacekm: cewyaqiqmmwmauce: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto ciwggusyecgskagy; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto sccqekuwywiisami; ciwggusyecgskagy: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); sccqekuwywiisami: ycweseaccsomkioa: } scyqmcegwikkoesw: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\164\137\141\146\164\x65\x72\x5f\162\x72\155\x64\x69\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6280d28b3a80d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\120\x54\111\115\111\x5a\x41\x54\111\117\116\137\x43\x4f\116\x46\111\107\x5f\x50\101\124\x48"); $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto sockocsycmkaeosg; } $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto uoewiggumomegksg; } $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); uoewiggumomegksg: ywokggauuiosegog: } yqqseqskcqeqkacm: sockocsycmkaeosg: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { static $acymccsiqqqsmkyo = []; switch ($sqeykgyoooqysmca) { case "\x64\151\x72": case "\x64\x69\162\163": case "\x66\x6f\154\x64\x65\x72": case "\146\157\x6c\x64\x65\162\163": $sqeykgyoooqysmca = "\x64\x69\x72"; goto ugkwqaywmwqucoeo; case "\146\151\154\145": case "\146\x69\154\x65\x73": $sqeykgyoooqysmca = "\x66\x69\154\145"; goto ugkwqaywmwqucoeo; default: return 0755; } syisomgawcsqeemk: ugkwqaywmwqucoeo: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto asoecuscmsyusmkg; } return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; asoecuscmsyusmkg: if ("\x64\151\x72" === $sqeykgyoooqysmca) { goto kwasqmcyiswoaiuu; } $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\x46\x53\137\103\x48\115\117\104\137\x46\111\114\105", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms("\101\102\x53\120\101\124\x48") . "\151\156\x64\x65\x78\56\160\x68\x70") & 0777 | 0644; goto kiskwawumeiiieuk; kwasqmcyiswoaiuu: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\x53\x5f\103\x48\x4d\117\x44\137\104\x49\122", 0); $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms("\x41\102\x53\120\x41\x54\110")) & 0777 | 0755; kiskwawumeiiieuk: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto oaqeoqsksuyyggmg; } $mkomwsiykqigmqca = str_replace("\x2f", "\x5c", $mkomwsiykqigmqca); return $sekkmwqwqwcayiwg ? str_replace("\134", "\134\x5c", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; oaqeoqsksuyyggmg: if (!$sekkmwqwqwcayiwg) { goto kkmuuoscccmokkiw; } return str_replace("\57", "\x5c\57", $mkomwsiykqigmqca); kkmuuoscccmokkiw: if ($cwwowqyuwccuykom) { goto awuwuuuagqysukku; } return $mkomwsiykqigmqca; awuwuuuagqysukku: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { if ($iiaumsgauuyeqksw) { goto miugmimciywcgswm; } $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); miugmimciywcgswm: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\x70\164\137\x62\x65\x66\157\x72\145\x5f\x72\x72\155\144\x69\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\x2e\x6d\157\142\x69\154\145\x2d\x61\143\x74\x69\166\145"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto aqekkeqmmewoyawu; } $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); aqekkeqmmewoyawu: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\x2e\x6e\157\55\167\x65\142\x70"; if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto mcqwuawosciucemq; } $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); mcqwuawosciucemq: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto emeeocqaisksyioq; } $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); return; emeeocqaisksyioq: $owouacqkcukeeomw = []; try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); csaksaisgawusswg: } maggecymmmesqmqs: } catch (Exception $iewosgggaueeyymg) { } if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto mcagemacuqyskogs; } $yygmoeguaqyumuui = []; foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { $meyiiwcswqmuggyg = preg_grep("\43\136{$aqgogemocmauywas}\44\x23", $owouacqkcukeeomw); $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); qkiyyywwuiuackao: } ecgwgamiseokmise: if (empty($yygmoeguaqyumuui)) { goto ossakckwskyqusmm; } $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); if (empty($yygmoeguaqyumuui)) { goto gyskcwykkyakeims; } $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); gyskcwykkyakeims: ossakckwskyqusmm: mcagemacuqyskogs: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto easuiqiooiwgswmm; } self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto saiuoomgskwgyeya; easuiqiooiwgswmm: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); saiuoomgskwgyeya: cimascmiesomqgqs: } aamgqoqyyooimqkm: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\x74\137\x61\146\164\145\162\137\162\x72\x6d\144\151\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); } }

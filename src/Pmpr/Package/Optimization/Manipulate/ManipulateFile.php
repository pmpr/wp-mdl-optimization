<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Exception; use FilesystemIterator; use Pmpr\Common\Foundation\Decorator\DecoratorFile; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\ManipulateFile as BaseClass; class ManipulateFile extends BaseClass { public static function kmyyisssekummkcg() { goto giiqogwyoikiiqyi; iqiwimyamykmuiwo: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto egyuciuossumacuy; yqckgyeeuyayosww: ymiosikicyqkaiaa: goto qmsyaycokgmmwycs; qmsyaycokgmmwycs: ysmessckmysogeua: goto geqakgsumkyosuca; egwuecigeyuooiam: $mcowwqgmkuemoumu = self::kiygcugekegoqauw($yckucuyiaykemqea); goto sieccokukwgmuggw; sieccokukwgmuggw: foreach ($mcowwqgmkuemoumu as $igqsaukqcqscimok) { goto yemwekyegaywgoug; oyeswuecyaiiawyg: moeeimaaoaycycmi: goto kkscsmuyumawosyc; yemwekyegaywgoug: if (!self::mecmkmogggamegic($igqsaukqcqscimok)) { goto mggyiwyuuiwswaks; } goto wqgecqaciyakecys; wqmgwcsuccoweocq: mggyiwyuuiwswaks: goto oyeswuecyaiiawyg; wqgecqaciyakecys: $iiaumsgauuyeqksw->remove(self::scikcaaaiwcsqowm($igqsaukqcqscimok)); goto wqmgwcsuccoweocq; kkscsmuyumawosyc: } goto yqckgyeeuyayosww; giiqogwyoikiiqyi: $yckucuyiaykemqea = self::cmaecekuqkwmemms("\117\x50\x54\x49\115\x49\x5a\x41\124\x49\117\x4e\137\x43\x4f\116\106\111\107\x5f\x50\x41\x54\x48"); goto iqiwimyamykmuiwo; egyuciuossumacuy: if (!($yckucuyiaykemqea && $iiaumsgauuyeqksw->exists($yckucuyiaykemqea))) { goto ysmessckmysogeua; } goto egwuecigeyuooiam; geqakgsumkyosuca: } public static function cqciwowseqkmwcwg(?string $sqeykgyoooqysmca) : int { goto qucoecmmmacqooek; ieauiumamygiuckc: moyqaggmqqimwusm: goto eookussqeicycoio; qucoecmmmacqooek: static $acymccsiqqqsmkyo = []; goto qeggwmykewcoieic; weocosykwsaimaks: suewugkisoommmgy: goto gmywmsmiayimqygy; ogwaiqiccywqqiwk: $qecuaowsssqskeqe = (int) self::cmaecekuqkwmemms("\106\123\137\x43\x48\115\117\x44\137\106\111\x4c\x45", 0); goto wsomqsmeououqiwu; qeggwmykewcoieic: switch ($sqeykgyoooqysmca) { case "\x64\151\x72": case "\144\151\x72\x73": case "\x66\157\154\144\x65\x72": case "\146\157\154\x64\x65\x72\163": $sqeykgyoooqysmca = "\144\151\x72"; goto qicekkeggigkwqeu; case "\146\x69\154\x65": case "\146\x69\x6c\x65\163": $sqeykgyoooqysmca = "\146\x69\x6c\x65"; goto qicekkeggigkwqeu; default: return 0755; } goto ieauiumamygiuckc; xaiaogcwcaeweoiu: if ("\x64\x69\x72" === $sqeykgyoooqysmca) { goto suewugkisoommmgy; } goto ogwaiqiccywqqiwk; dmwmgeswweekqyuw: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; goto moeseousgukmygmy; kcaysyweukeimoik: $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qkmeeoscasiwuega > 0 ? $qkmeeoscasiwuega : fileperms(self::cmaecekuqkwmemms(self::ABSPATH)) & 0777 | 0755; goto eakoykqcmyemgyum; aqyimgoegakwgoum: return $acymccsiqqqsmkyo[$sqeykgyoooqysmca]; goto qmiouyoeguiqymgi; wsomqsmeououqiwu: $acymccsiqqqsmkyo[$sqeykgyoooqysmca] = $qecuaowsssqskeqe > 0 ? $qecuaowsssqskeqe : fileperms(self::cmaecekuqkwmemms(self::ABSPATH) . "\x69\x6e\144\145\170\x2e\160\150\160") & 0777 | 0644; goto eouugaqkgamwmgmo; moeseousgukmygmy: kawgkswoygkmgmao: goto xaiaogcwcaeweoiu; eookussqeicycoio: qicekkeggigkwqeu: goto icqaiqyewuyegkeq; eakoykqcmyemgyum: tsywwmwawwgcwmuc: goto aqyimgoegakwgoum; icqaiqyewuyegkeq: if (!isset($acymccsiqqqsmkyo[$sqeykgyoooqysmca])) { goto kawgkswoygkmgmao; } goto dmwmgeswweekqyuw; eouugaqkgamwmgmo: goto tsywwmwawwgcwmuc; goto weocosykwsaimaks; gmywmsmiayimqygy: $qkmeeoscasiwuega = (int) self::cmaecekuqkwmemms("\x46\123\137\103\110\115\x4f\x44\x5f\x44\x49\x52", 0); goto kcaysyweukeimoik; qmiouyoeguiqymgi: } public static function cgwcgscqeqauaagi($mkomwsiykqigmqca, $sekkmwqwqwcayiwg = false, $cwwowqyuwccuykom = false) : string { goto iisgwcgceeygauyk; yigmeqsygwgioyaa: return $mkomwsiykqigmqca; goto iwciaqcioigqwiys; iwciaqcioigqwiys: uqwsiocauuswgwok: goto awgamseuywgciius; wskcqwywmwmwigce: if (!$sekkmwqwqwcayiwg) { goto wcoekawkkswkgamc; } goto iiuwcsgwcguceiko; wkycksmmuskouies: wcoekawkkswkgamc: goto emucccmcoiwcyioq; iisgwcgceeygauyk: if (!self::ikeooymesgsuggoe($mkomwsiykqigmqca)) { goto noswwaawyacomwyo; } goto oqyosskkgcuckmes; giueuuwusgmgeick: return $sekkmwqwqwcayiwg ? str_replace("\x5c", "\134\134", $mkomwsiykqigmqca) : $mkomwsiykqigmqca; goto eksamuqymmeumqsg; awgamseuywgciius: return DecoratorFile::cgwcgscqeqauaagi($mkomwsiykqigmqca); goto cmqocusuososcwqk; emucccmcoiwcyioq: if ($cwwowqyuwccuykom) { goto uqwsiocauuswgwok; } goto yigmeqsygwgioyaa; oqyosskkgcuckmes: $mkomwsiykqigmqca = str_replace("\57", "\x5c", $mkomwsiykqigmqca); goto giueuuwusgmgeick; iiuwcsgwcguceiko: return str_replace("\57", "\x5c\57", $mkomwsiykqigmqca); goto wkycksmmuskouies; eksamuqymmeumqsg: noswwaawyacomwyo: goto wskcqwywmwmwigce; cmqocusuososcwqk: } public static function cseoaieqoukqgcay($miawkwqioaeasiig, array $gwyacgiwokuuwouo = [], $iiaumsgauuyeqksw = null) { goto yygqgeukeuaciewa; wmskawmisgksegwe: $yygmoeguaqyumuui = array_filter($yygmoeguaqyumuui); goto usasekcgsyyqymgy; yygqgeukeuaciewa: if ($iiaumsgauuyeqksw) { goto eswgqkmomsiauqqy; } goto kysaqkaiksosyegu; imymswaceomsasks: $kaggcuumyeuscqui = $miawkwqioaeasiig . "\x2f\56\156\x6f\x2d\x77\x65\142\160"; goto sacmqsciuaucgaww; mekaesaeskqmgqii: DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\157\160\164\x5f\x61\146\164\145\x72\x5f\x72\162\x6d\144\151\x72"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); goto kuigwocyaagakags; agaomyyqaaswykui: $miawkwqioaeasiig = untrailingslashit($miawkwqioaeasiig); goto caocoiecwueosoig; gymqkieyuiawacwi: aikuwguwuiekouoo: goto eskcocwimiseewmu; iymwycosumimggmu: foreach ($owouacqkcukeeomw as $uwsgakoiqomwikmy) { goto ccymqyyaikauqaiq; meyowgukekkkkuqe: $iiaumsgauuyeqksw->remove($uwsgakoiqomwikmy); goto mgocagiwqsgaisyq; cooiowgwqgssuqcw: goto csmqeagwuisqiuym; goto uyouccoiyogmuwey; ccymqyyaikauqaiq: if (!$iiaumsgauuyeqksw->asysewkmisimumay($uwsgakoiqomwikmy)) { goto qkycyqgwwoiuaomq; } goto ygaggwgwiceegasy; wkumckmusackacmi: eageyyymyekskmue: goto wayyiemaccqkmqeg; mgocagiwqsgaisyq: csmqeagwuisqiuym: goto wkumckmusackacmi; ygaggwgwiceegasy: self::cseoaieqoukqgcay($uwsgakoiqomwikmy, $gwyacgiwokuuwouo, $iiaumsgauuyeqksw); goto cooiowgwqgssuqcw; uyouccoiyogmuwey: qkycyqgwwoiuaomq: goto meyowgukekkkkuqe; wayyiemaccqkmqeg: } goto wmismwqqqagsomky; scymgswieuyiqwmm: yguicqcomwueokwm: goto gymqkieyuiawacwi; sacmqsciuaucgaww: if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($kaggcuumyeuscqui))) { goto yqwkgwucqwqyuqmw; } goto mqywccygymoeaoym; gkwyuumqeuikwiku: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); goto mekaesaeskqmgqii; cwmkgosooecsywcm: foreach ($gwyacgiwokuuwouo as $aqgogemocmauywas) { goto umekgwemiaygomky; egauqkuumkisssaa: uyowywywqeagqcuw: goto kqsyuyukgswmwcys; umekgwemiaygomky: $meyiiwcswqmuggyg = preg_grep("\43\136{$aqgogemocmauywas}\44\43", $owouacqkcukeeomw); goto aoewemyqigugysua; aoewemyqigugysua: $yygmoeguaqyumuui[] = reset($meyiiwcswqmuggyg); goto egauqkuumkisssaa; kqsyuyukgswmwcys: } goto ooqwuoiqmiswgkyu; qsuyqoeocsmkomwy: $eagqciqqakiuokus = $miawkwqioaeasiig . "\57\56\x6d\x6f\x62\x69\x6c\x65\55\141\143\164\x69\x76\x65"; goto ioyyiaguqyiaeaqs; uqggmkmmysmeqkmy: $owouacqkcukeeomw = array_diff($owouacqkcukeeomw, $yygmoeguaqyumuui); goto scymgswieuyiqwmm; ooqwuoiqmiswgkyu: aesukugmkcsuocwc: goto uieeaeqciogamoqe; sccaumocseyiqsue: try { foreach (new FilesystemIterator($miawkwqioaeasiig) as $uwsgakoiqomwikmy) { $owouacqkcukeeomw[] = $uwsgakoiqomwikmy->scikcaaaiwcsqowm(); maycimoaceiiuemu: } uyyieiuceauoecyq: } catch (Exception $iewosgggaueeyymg) { } goto cmmoyuuegqguakga; kysaqkaiksosyegu: $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu(); goto iwawqgcgskysqyaa; uieeaeqciogamoqe: if (empty($yygmoeguaqyumuui)) { goto aikuwguwuiekouoo; } goto wmskawmisgksegwe; cmsyegseqcwmyycy: icckscyoesgiyksu: goto wiiaiqiomosmyuwq; wiiaiqiomosmyuwq: $owouacqkcukeeomw = []; goto sccaumocseyiqsue; ooccckeeomycucao: $yygmoeguaqyumuui = []; goto cwmkgosooecsywcm; wiomewyyumkmwsum: yqwkgwucqwqyuqmw: goto uacekkwiaagmuieg; wmismwqqqagsomky: kyaysckiwskgogci: goto gkwyuumqeuikwiku; caocoiecwueosoig: DecoratorHook::cqscqicucmeamkyq(self::usoyisqwsqsegiam("\x6f\160\x74\137\x62\x65\146\157\x72\145\x5f\162\162\155\144\x69\162"), $miawkwqioaeasiig, $gwyacgiwokuuwouo); goto qsuyqoeocsmkomwy; iwawqgcgskysqyaa: eswgqkmomsiauqqy: goto agaomyyqaaswykui; cmmoyuuegqguakga: if (!(!empty($gwyacgiwokuuwouo) && !empty($owouacqkcukeeomw))) { goto wicguyksogckqums; } goto ooccckeeomycucao; uacekkwiaagmuieg: if ($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig)) { goto icckscyoesgiyksu; } goto seiysueoskimiaam; seiysueoskimiaam: $iiaumsgauuyeqksw->remove($miawkwqioaeasiig); goto gawswamyawcmsmei; musiyggyqaiwwouu: qoysygagyigwsiwm: goto imymswaceomsasks; usasekcgsyyqymgy: if (empty($yygmoeguaqyumuui)) { goto yguicqcomwueokwm; } goto uqggmkmmysmeqkmy; mqywccygymoeaoym: $iiaumsgauuyeqksw->remove($kaggcuumyeuscqui); goto wiomewyyumkmwsum; eskcocwimiseewmu: wicguyksogckqums: goto iymwycosumimggmu; ywyqmwuswkcoyqsy: $iiaumsgauuyeqksw->remove($eagqciqqakiuokus); goto musiyggyqaiwwouu; ioyyiaguqyiaeaqs: if (!($iiaumsgauuyeqksw->asysewkmisimumay($miawkwqioaeasiig) && $iiaumsgauuyeqksw->exists($eagqciqqakiuokus))) { goto qoysygagyigwsiwm; } goto ywyqmwuswkcoyqsy; gawswamyawcmsmei: return; goto cmsyegseqcwmyycy; kuigwocyaagakags: } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6fa77e922c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Package\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Package\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto qwsmiaegmcwuskwi; } $fkgqmwkusywysaus = false; qwsmiaegmcwuskwi: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto yyyyawaqcowsgqcs; } $fkgqmwkusywysaus = false; yyyyawaqcowsgqcs: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\143\163\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\143\163\163"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\x2f\x40\x63\x68\141\x72\163\x65\x74\40\42\x5b\136\x22\x5d\x2b\53\x22\x3b\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto usmagcaocwiugqum; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); usmagcaocwiugqum: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\x2f\x40\x63\150\x61\162\163\145\164\x20\42\133\136\x22\x5d\53\53\42\73\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\15", "\12"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\11"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\57\134\52\x2e\52\x3f\134\52\x2f\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\x5c\163\x5c\163\x2b\57", "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\x3b"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\57\x40\x6d\x65\144\x69\x61\56\x2a\x3f\x5b\136\173\135\53\x5c\x7b\50\133\134\163\134\123\135\x2b\77\134\x7d\51\x5c\x73\x2a\134\175\174\100\x6b\x65\171\x66\x72\141\155\145\163\x2e\52\x3f\133\x5e\173\x5d\x2b\x5c\173\50\133\134\x73\x5c\123\x5d\53\x3f\x5c\175\x29\134\x73\52\x5c\x7d\x7c\x40\x73\x75\160\x70\157\x72\x74\163\x2e\52\77\133\136\173\135\53\134\173\x28\x5b\134\163\x5c\123\x5d\x2b\77\x5c\x7d\51\x5c\x73\52\134\x7d\174\100\x66\157\x6e\164\55\x66\141\x63\145\x2e\x2a\77\x5b\x5e\173\135\x2b\x28\133\134\x73\134\x53\135\53\77\x29\x5c\163\52\134\x7d\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto wammkmaqucqagqww; } $icyaoosaykeskiuu = ''; goto iuooqassskiyeemo; wammkmaqucqagqww: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); iuooqassskiyeemo: wmycwscioqackeig: } sikmqkecsiyciaei: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\164\162\151\155")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto ykuqeyogsasokqis; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\100\155\x65\144\x69\x61\40\x70\x72\151\156\x74")) { goto eokikuciuqkyauum; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\x7d", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); eokikuciuqkyauum: goto mqaamqyoywyekiko; ykuqeyogsasokqis: $sogksuscggsicmac = (array) explode("\x7d", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); mqaamqyoywyekiko: if (!$sogksuscggsicmac) { goto smkakiyekkqoggao; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); smkakiyekkqoggao: imykswegcuekqwio: } cquyuwsisgqscemm: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\57\x3b\x28\x3f\x3d\x28\133\136\134\50\135\x2a\x5c\50\133\136\x5c\50\135\52\134\51\51\x2a\133\136\134\51\x5d\52\44\51\x28\77\75\x28\x5b\136\x5c\42\x5d\x2a\134\42\133\x5e\x5c\42\135\x2a\134\42\51\x2a\x5b\x5e\x5c\42\x5d\52\x24\51\50\x3f\x3d\x28\x5b\x5e\x5c\x27\135\52\134\x27\133\136\x5c\x27\x5d\52\x5c\47\x29\52\133\x5e\134\47\x5d\x2a\44\51\57", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto gcsosokicycukoyc; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; gcsosokicycukoyc: yisoawmmammassqk: } zggweikegkcgkmma: return trim(implode("\x20", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); ekgkiioywougquka: } umccwcqwkoiaakmu: coskmuqsawiaeyqg: } seqammocqkyswaim: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\x7b", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto smksoismyouykeoa; } $sgksuwkwyimqgaii = (array) explode("\x2c", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); imquwacukaswoyka: } wyyowcsciaqkuiuq: smksoismyouykeoa: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto gcoeaokkagaaeuse; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; gcoeaokkagaaeuse: maeccckgcsaaumkw: } qwgkwokcyocqiyee: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto kcqueaewmayywqeq; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\x74\x72\x69\x6d", explode("\x3a", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); kcqueaewmayywqeq: return $mksyucucyswaukig; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b5db635063d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Property; use Pmpr\Module\Optimization\Asset\Critical\CSS\Data\Rule; use Pmpr\Module\Optimization\Asset\Critical\Manipulate as BaseClass; class Manipulate extends BaseClass { public static function uigyooscomiegggk(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (!Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto umemmgiwimkymaya; } $fkgqmwkusywysaus = false; umemmgiwimkymaya: return $fkgqmwkusywysaus; } public static function aaoqaaaoaewyokkw(?string $migiiksoiymissge = null) { $fkgqmwkusywysaus = Manipulate::csyeqcysyissgowm($migiiksoiymissge); if (Filesystem::symcgieuakksimmu()->exists($fkgqmwkusywysaus)) { goto omsmaougqkqigogw; } $fkgqmwkusywysaus = false; omsmaougqkqigogw: return $fkgqmwkusywysaus; } public static function guugkagukymokgas(?string $mkomwsiykqigmqca = null) : string { return parent::guugkagukymokgas("\57\x63\x73\x73"); } public static function csyeqcysyissgowm(?string $migiiksoiymissge = null, ?string $mkomwsiykqigmqca = null) : ?string { return parent::csyeqcysyissgowm($migiiksoiymissge, "\x2f\143\x73\x73"); } public static function ogmguwgoqkqkkisa($iesegggmcccqyquo) { preg_match_all("\57\100\x63\x68\x61\162\163\145\x74\x20\42\x5b\136\x22\x5d\x2b\x2b\42\73\57", $iesegggmcccqyquo, $meyiiwcswqmuggyg); if (!($guuwoyaeoeeaauug = reset($meyiiwcswqmuggyg))) { goto geasgywiogoeamek; } $guuwoyaeoeeaauug = reset($guuwoyaeoeeaauug); geasgywiogoeamek: return $guuwoyaeoeeaauug; } private static function ieckauqqqiksqksc(string $iesegggmcccqyquo) : string { $iesegggmcccqyquo = preg_replace("\57\x40\x63\x68\x61\162\163\145\164\x20\x22\x5b\x5e\42\135\53\x2b\42\x3b\57", '', $iesegggmcccqyquo); return self::sqsemkikkiaaqeig($iesegggmcccqyquo); } private static function sqsemkikkiaaqeig(string $sociqikgoyemqaac) : string { $sociqikgoyemqaac = str_replace(["\xd", "\xa"], '', $sociqikgoyemqaac); $sociqikgoyemqaac = str_replace(["\x9"], "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\174\57\134\52\x2e\x2a\x3f\x5c\52\57\x7c", '', $sociqikgoyemqaac); $sociqikgoyemqaac = preg_replace("\x2f\134\x73\x5c\x73\x2b\57", "\x20", $sociqikgoyemqaac); $sociqikgoyemqaac = trim($sociqikgoyemqaac); return rtrim($sociqikgoyemqaac, "\73"); } public static function oowkueqscaoakmck(string $icyaoosaykeskiuu) : array { $ymkqyawksmqcgsei = []; $oqaacwamwqqwsmgc = []; $qiacwcmymioiqyia = "\x2f\100\x6d\x65\x64\x69\141\56\52\77\x5b\136\173\x5d\53\x5c\x7b\50\x5b\134\163\x5c\123\135\x2b\x3f\x5c\175\51\x5c\163\52\x5c\x7d\174\x40\153\145\171\x66\x72\141\155\x65\163\x2e\x2a\77\x5b\136\x7b\135\x2b\134\173\50\x5b\134\163\134\123\x5d\53\x3f\134\x7d\51\x5c\163\x2a\134\175\x7c\100\163\165\160\160\x6f\162\164\163\x2e\52\77\133\x5e\173\x5d\53\x5c\x7b\50\133\134\163\134\123\135\53\77\x5c\175\51\134\163\x2a\134\175\x7c\100\x66\157\x6e\x74\55\x66\141\143\145\56\52\x3f\133\x5e\x7b\135\x2b\x28\133\134\x73\x5c\123\135\x2b\x3f\51\x5c\x73\x2a\134\x7d\x2f"; preg_match_all($qiacwcmymioiqyia, $icyaoosaykeskiuu, $oqaacwamwqqwsmgc); $oqaacwamwqqwsmgc = reset($oqaacwamwqqwsmgc); foreach ($oqaacwamwqqwsmgc as $momcykaoccoymeig => $mwcwkymkagwwoyow) { $skueimwaqauscmoc = explode($mwcwkymkagwwoyow, $icyaoosaykeskiuu); $uusmaiomayssaecw = array_key_first($skueimwaqauscmoc); $ymkqyawksmqcgsei[] = ManipulateArray::unset($skueimwaqauscmoc, $uusmaiomayssaecw); $ymkqyawksmqcgsei[] = $mwcwkymkagwwoyow; if ($skueimwaqauscmoc && is_array($skueimwaqauscmoc)) { goto mccimkgwkkamsime; } $icyaoosaykeskiuu = ''; goto ucaoyoamaycsiacq; mccimkgwkkamsime: $icyaoosaykeskiuu = join('', $skueimwaqauscmoc); ucaoyoamaycsiacq: guqmgiqaaowaauyo: } qweyymyuuqwcmkqg: $ymkqyawksmqcgsei[] = $icyaoosaykeskiuu; $ymkqyawksmqcgsei = array_filter(array_filter($ymkqyawksmqcgsei, "\x74\162\x69\x6d")); $ycoqoegmwiiwyeuo = []; $umwmyskgiuekmemq = []; foreach ($ymkqyawksmqcgsei as $momcykaoccoymeig => $agywggmyywaimwuy) { $sogksuscggsicmac = []; if (!preg_match($qiacwcmymioiqyia, $agywggmyywaimwuy)) { goto iokemmkgmcaksiqu; } $kmmsieagmcwqiako = substr($agywggmyywaimwuy, 0, strpos($agywggmyywaimwuy, "\x7b")); if (!(trim($kmmsieagmcwqiako) !== "\x40\x6d\145\x64\151\x61\x20\x70\x72\151\156\x74")) { goto iaoyeugekskmewgs; } $mckgwmgmgigaiuwg = substr($agywggmyywaimwuy, strpos($agywggmyywaimwuy, "\173") + 1); $mckgwmgmgigaiuwg = substr($mckgwmgmgigaiuwg, 0, -1); $sogksuscggsicmac = (array) explode("\175", $mckgwmgmgigaiuwg); $umwmyskgiuekmemq[][$kmmsieagmcwqiako] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); iaoyeugekskmewgs: goto okagauksoqkoqygi; iokemmkgmcaksiqu: $sogksuscggsicmac = (array) explode("\x7d", $agywggmyywaimwuy); $umwmyskgiuekmemq[][''] = array_diff($sogksuscggsicmac, $ycoqoegmwiiwyeuo); okagauksoqkoqygi: if (!$sogksuscggsicmac) { goto eciksmgaqikwegwq; } $ycoqoegmwiiwyeuo = array_merge($ycoqoegmwiiwyeuo, $sogksuscggsicmac); eciksmgaqikwegwq: oasisywuwssumsok: } iuyagqakcieasiua: return $umwmyskgiuekmemq; } public static function musqiscwwwkyuosg(string $gmawcgiwcmsukeiu) : array { $gmawcgiwcmsukeiu = self::sqsemkikkiaaqeig($gmawcgiwcmsukeiu); $oammesyieqmwuwyi = (array) preg_split("\x2f\73\50\x3f\x3d\50\x5b\x5e\x5c\x28\x5d\x2a\134\50\133\136\x5c\x28\x5d\52\x5c\x29\51\x2a\x5b\x5e\x5c\x29\135\x2a\x24\x29\50\77\75\50\133\136\134\x22\135\52\134\42\x5b\136\134\x22\135\x2a\x5c\42\x29\x2a\x5b\136\x5c\x22\x5d\x2a\x24\51\50\77\75\50\x5b\x5e\134\x27\135\x2a\134\x27\133\136\134\x27\135\x2a\134\47\x29\x2a\x5b\136\x5c\47\x5d\52\x24\51\x2f", $gmawcgiwcmsukeiu); return array_values($oammesyieqmwuwyi); } public static function eeewcumgoiuaygow(array $gmawcgiwcmsukeiu) : string { $ukgsssmgkskkuoow = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { if (!$oaukocmsckciqaok instanceof Property) { goto measoqewessauqma; } $ukgsssmgkskkuoow[] = trim($oaukocmsckciqaok->__toString(), "\73") . "\x3b"; measoqewessauqma: qckouamqueqiykqi: } kieyoaoawqacqamy: return trim(implode("\40", $ukgsssmgkskkuoow), "\x3b"); } public static function mysegoauqwiccoeo(array $acqqmqmcquukaqsc) : array { $mguygkocuoaoqqkg = []; foreach ($acqqmqmcquukaqsc as $umwqusowiqmyseom => $ssaikkeuusoagacm) { foreach (reset($ssaikkeuusoagacm) as $ekuqiqmikiicgoss) { $ekuqiqmikiicgoss = self::wsokikoeayomqico(key($ssaikkeuusoagacm), $ekuqiqmikiicgoss, $umwqusowiqmyseom); $mguygkocuoaoqqkg = array_merge($mguygkocuoaoqqkg, $ekuqiqmikiicgoss); gqaimiooakyykccy: } mcucegiogmuyogki: wiaesksmicgikqcm: } auaigccmwqwsqsku: return $mguygkocuoaoqqkg; } public static function uosumyqkueiykgiu(string $iesegggmcccqyquo) { $iesegggmcccqyquo = self::ieckauqqqiksqksc($iesegggmcccqyquo); $acqqmqmcquukaqsc = self::oowkueqscaoakmck($iesegggmcccqyquo); return self::mysegoauqwiccoeo($acqqmqmcquukaqsc); } public static function wsokikoeayomqico(string $qsmqqqccagyuaiso, string $ekuqiqmikiicgoss, int $umwqusowiqmyseom) : array { $ekuqiqmikiicgoss = self::sqsemkikkiaaqeig($ekuqiqmikiicgoss); $ukgsssmgkskkuoow = explode("\173", $ekuqiqmikiicgoss); $wcwugqcsqsmmiuqi = 0; $gkywegkkgiaaqqom = 1; $acqqmqmcquukaqsc = []; if (!isset($ukgsssmgkskkuoow[$gkywegkkgiaaqqom])) { goto gykuaukukosiocoy; } $sgksuwkwyimqgaii = (array) explode("\54", trim($ukgsssmgkskkuoow[$wcwugqcsqsmmiuqi])); $gmawcgiwcmsukeiu = self::musqiscwwwkyuosg($ukgsssmgkskkuoow[$gkywegkkgiaaqqom]); foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) { $yuumukkaswwoywya = trim($yuumukkaswwoywya); $gmawcgiwcmsukeiu = self::gowgwikayqgeqgca($gmawcgiwcmsukeiu); $acqqmqmcquukaqsc[] = new Rule($qsmqqqccagyuaiso, $yuumukkaswwoywya, $gmawcgiwcmsukeiu, $umwqusowiqmyseom); goswwiomuackymqi: } agemeseegiuuowgo: gykuaukukosiocoy: return $acqqmqmcquukaqsc; } public static function gowgwikayqgeqgca(array $gmawcgiwcmsukeiu) : array { $mguygkocuoaoqqkg = []; foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $mksyucucyswaukig = self::gcamqqaucqewaucu($oaukocmsckciqaok); if (!$mksyucucyswaukig) { goto ggqeakyaggiuegek; } $mguygkocuoaoqqkg[] = $mksyucucyswaukig; ggqeakyaggiuegek: uuisaeysawuagysg: } camawumockccayaq: return $mguygkocuoaoqqkg; } public static function gcamqqaucqewaucu(string $oaukocmsckciqaok) : ?Property { $mksyucucyswaukig = null; if (!(strpos($oaukocmsckciqaok, "\72") !== false)) { goto usgcoawgqswoeiec; } [$ymqmyyeuycgmigyo, $eqgoocgaqwqcimie] = array_map("\164\x72\151\155", explode("\72", $oaukocmsckciqaok, 2)); $mksyucucyswaukig = new Property($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); usgcoawgqswoeiec: return $mksyucucyswaukig; } }

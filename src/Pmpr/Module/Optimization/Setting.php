<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65311c76e01aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; class Setting extends BaseClass { const miaqqqiaweeausws = "\x74\157\160\137\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\146\x61\151\154\x5f\163\x61\x66\145"; const myaesiuicoigkems = "\x6f\160\x74\137"; const ayeokkuakcuqemya = "\160\165\x72\147\145\137\141\x6c\x6c"; const ukcoqoawagmcmoym = "\x70\165\x72\x67\x65\x5f\162\145\154\141\164\x65\144"; const peewqscymaoqeqga = self::myaesiuicoigkems . "\x70\x75\x72\x67\x65\x5f"; const mksoyoqiigaecgyo = self::peewqscymaoqeqga . "\x70\x61\147\151\156\x61\164\145\x64"; const kaameuiyaywqsswo = self::peewqscymaoqeqga . "\x6f\156\x5f\x63\x6f\155\x6d\145\x6e\x74\163"; const imswwygkikwowcqy = self::peewqscymaoqeqga . "\x61\x75\x74\x6f\x6d\141\x74\151\x63\141\154\154\171"; const kamcoqgmemeeqmsc = self::peewqscymaoqeqga . "\x6f\x70\x63\141\143\150\145\x5f\x6f\x6e\x5f\x66\x6c\165\163\150"; const iamiyykuiqwgqwss = self::peewqscymaoqeqga . "\x6f\x6e\x5f\165\x70\x67\x72\141\x64\x65\162\137\x63\157\155\160\154\x65\x74\x65"; const pbwqekksoeskciae = self::myaesiuicoigkems . "\x6c\151\143\145\156\163\x65\x5f"; const mkuaccemgegcsyuq = self::pbwqekksoeskciae . "\x73\145\143\162\x65\x74\x5f\153\x65\x79"; const cmgikuaeswggsasy = self::iccwcygaeqmomooo . "\137\x64\145\142\x75\147\137\x6d\157\x64\x65"; public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->name = $wksoawcgagcgoask; $this->parentMenu = $wksoawcgagcgoask; parent::__construct(); } public function gogaagekwoisaqgu() { $this->menuTitle = __("\x53\x65\164\164\x69\156\147", PR__MDL__OPTIMIZATION); $this->pageTitle = __("\x4f\x70\164\151\x6d\x69\x7a\141\164\151\157\156\40\123\x65\164\x74\151\x6e\x67", PR__MDL__OPTIMIZATION); } public function ecwgiiuacoaokqkw() { parent::ecwgiiuacoaokqkw(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$this->aakmagwggmkoiiyu()}\137\144\141\163\x68\x62\x6f\141\x72\144", __("\x44\x61\163\x68\142\157\x61\x72\x64", PR__MDL__OPTIMIZATION))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::myaesiuicoigkems . self::ioomakeyqiqowgmk, __("\107\145\x6e\145\x72\x61\154", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::cmgikuaeswggsasy, __("\x45\x6e\x61\x62\x6c\x65\x20\104\x65\x62\165\147\40\x4d\157\144\x65", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mkuaccemgegcsyuq, __("\x53\x65\x63\x72\145\164\40\x4b\145\171", PR__MDL__OPTIMIZATION), __("\x55\163\145\144\40\146\x6f\162\40\160\162\145\x6c\x6f\x61\x64\40\x61\156\144\x20\160\x75\x72\x67\x65\40\x63\x72\157\x6e\152\157\142\56", PR__MDL__OPTIMIZATION))->yskkmqiusguummwa()->eyygsasuqmommkua(wp_generate_password(20, false, false))->oykaosmaegqwmoga())->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\137\160\165\162\147\x65", __("\120\x75\x72\x67\x65", PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::imswwygkikwowcqy, __("\101\165\x74\157\155\x61\x74\x69\x63\141\x6c\154\x79\40\x50\165\x72\x67\x65\40\103\x61\143\x68\x65", PR__MDL__OPTIMIZATION), [self::ukcoqoawagmcmoym => sprintf("\x25\x73\x20\55\40\45\163", __("\120\x75\x72\x67\145\x20\x63\x61\143\x68\x65\x20\x66\157\x72\x20\162\x65\x6c\141\x74\x65\x64\x20\x70\x61\x67\145\x73\40\157\x6e\154\x79", PR__MDL__OPTIMIZATION), __("\50\162\x65\x63\x6f\x6d\x6d\145\x6e\144\145\x64\x29", PR__MDL__OPTIMIZATION)), self::ayeokkuakcuqemya => __("\120\165\162\147\145\40\167\150\x6f\154\145\x20\x63\x61\x63\150\145", PR__MDL__OPTIMIZATION)], __("\x41\165\x74\157\155\x61\x74\151\x63\x61\x6c\x6c\x79\x20\x70\x75\x72\x67\145\x20\x74\150\x65\40\x63\141\x63\x68\145\x20\167\150\x65\156\40\163\x6f\155\145\164\x68\151\156\147\x20\143\x68\141\x6e\147\145\163\40\x6f\156\40\164\x68\x65\40\167\145\x62\x73\151\x74\145\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::iamiyykuiqwgqwss, __("\120\165\162\147\145\x20\x43\141\x63\150\145\40\x4f\156\x20\x55\160\x67\x72\x61\x64\x65\x72\x20\x43\x6f\x6d\x70\154\145\x74\145", PR__MDL__OPTIMIZATION), __("\x41\x75\164\157\155\141\164\151\143\141\x6c\154\171\x20\160\165\x72\147\x65\x20\x74\150\x65\40\x63\141\x63\150\x65\x20\x77\150\x65\x6e\40\164\150\145\x20\x75\x70\147\x72\141\144\145\162\x20\160\162\x6f\143\x65\x73\163\x20\151\163\40\143\x6f\x6d\x70\154\145\164\145", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kaameuiyaywqsswo, __("\120\165\x72\x67\x65\x20\103\141\143\150\x65\x20\x4f\x6e\x20\x43\157\155\x6d\145\x6e\164", PR__MDL__OPTIMIZATION), __("\101\x75\164\157\x6d\x61\x74\x69\143\x61\x6c\x6c\171\x20\x70\165\162\x67\x65\40\163\x69\156\147\x6c\145\40\160\x6f\163\164\40\143\141\x63\x68\x65\40\167\x68\145\x6e\40\x61\x20\156\145\167\x20\143\157\155\155\x65\x6e\x74\x20\151\x73\40\x69\x6e\163\x65\x72\x74\x65\x64\40\151\x6e\164\x6f\40\164\150\x65\40\x64\141\164\141\142\x61\x73\x65\x20\157\162\40\167\x68\x65\156\x20\x61\40\143\x6f\155\x6d\x65\x6e\164\x20\151\163\40\x61\x70\x70\x72\157\166\145\x64\40\x6f\162\x20\144\x65\154\145\164\145\144\56", PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::mksoyoqiigaecgyo, __("\120\x61\x67\151\x6e\141\164\x69\x6f\156\x20\120\x75\162\147\x65", PR__MDL__OPTIMIZATION), __("\x43\150\157\x69\143\x65\40\x68\x6f\167\x20\x6d\141\x6e\x79\x20\157\146\40\x70\141\x67\x69\x6e\x61\164\x65\144\40\x70\x61\x67\x65\163\x2c\40\x61\165\164\x6f\155\141\x74\151\143\x61\x6c\154\171\40\160\165\162\x67\145\40\x6f\x66\40\x70\165\162\x67\x69\x6e\x67\x20\141\x72\143\x68\151\166\x65\x73\x2e", PR__MDL__OPTIMIZATION))->escqqisecooswqgo(0)->eyygsasuqmommkua(10))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kamcoqgmemeeqmsc, __("\120\x75\x72\147\x65\40\117\x50\x43\x61\143\150\x65\40\157\x6e\40\x46\154\165\163\150", PR__MDL__OPTIMIZATION), __("\x41\165\164\157\155\x61\x74\151\x63\x61\154\x6c\x79\40\160\x75\162\x67\x65\x20\x74\x68\145\x20\x4f\120\x63\141\x63\150\x65\40\167\150\x65\x6e\40\143\141\x63\x68\x65\x20\x69\x73\40\x70\x75\x72\x67\145\x64\x2e", PR__MDL__OPTIMIZATION)))->saemoowcasogykak(IconInterface::wuyemouocmmciyca))->saemoowcasogykak(IconInterface::oeusgoaisyyskcqa)->uwymwiymwwekwuwe($this->ueiyqqwuiqmmqymc())->jyumyyugiwwiqomk(1)); } public function oaigquiewemaussm() { $this->ywwugmwioawwikwq([self::mksoyoqiigaecgyo => 5, self::kaameuiyaywqsswo => true, self::cmgikuaeswggsasy => false, self::imswwygkikwowcqy => self::ukcoqoawagmcmoym, self::kamcoqgmemeeqmsc => true, self::iamiyykuiqwgqwss => true]); $this->syuyisqgcskmaymc($this->kuaemyukkkeywccc(self::miaqqqiaweeausws, __("\124\157\160\x20\x53\160\145\x65\144", PR__MDL__OPTIMIZATION))->wwocyigoyasocsik())->syuyisqgcskmaymc($this->kuaemyukkkeywccc(self::okeoeeywmosegiiy, __("\x46\141\x69\x6c\x20\x53\141\146\x65", PR__MDL__OPTIMIZATION))); } public function ueiyqqwuiqmmqymc() : MetaBox { $qkweikswegyciaie = self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\x5f\144\x61\163\150\142\x6f\141\x72\144\x5f\x71\165\x69\x63\153\x5f\141\143\x74\151\x6f\x6e\163", __("\x51\x75\151\x63\x6b\x20\101\x63\164\151\x6f\x6e\163", PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::kyayumiaimokygsm); $meqocwsecsywiiqs = __("\x53\164\x61\x72\164\40\x50\x72\145\154\157\x61\144", PR__MDL__OPTIMIZATION); $qkweikswegyciaie->mkksewyosgeumwsa(self::qoeiescseggagsqs("\x6f\x70\164\137\160\162\145\x6c\157\x61\x64", $meqocwsecsywiiqs, __("\x53\x74\141\162\164\x20\160\162\145\154\x6f\141\x64\151\x6e\147\x20\146\157\162\40\156\x6f\x74\x20\157\160\x74\x69\155\x69\172\145\144\40\160\145\162\x6d\x61\154\x69\156\153\163\56", PR__MDL__OPTIMIZATION))->ukmcmuaawacquume([self::squoamkioomemiyi => self::ckcawaoawwioqecq, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\111\x74\x27\163\40\164\x61\153\145\40\163\157\155\145\x20\164\151\155\145\x2c\40\141\162\x65\x20\171\157\165\x20\163\165\x72\145\x20\141\142\x6f\165\x74\x20\x73\164\141\x72\164\x20\x70\x72\145\x6c\x6f\x61\x64\x69\156\x67\x3f", PR__MDL__OPTIMIZATION), "\142\165\x74\164\x6f\x6e\x73" => [self::mosycwwoqguicaeo, ["\143\x6c\141\x73\163" => "\157\x70\164\x2d\163\164\x61\162\x74\x2d\160\x72\x65\x6c\157\141\144\x20\x62\164\156\40\142\x74\156\55\x70\x72\151\x6d\141\162\x79", "\x74\x69\x74\x6c\145" => __("\123\x74\141\x72\x74", PR__MDL__OPTIMIZATION)]]])->ygagwkucacyassau()->mweyuoqsqugqwcca(true))->jyumyyugiwwiqomk(10); return $qkweikswegyciaie; } public static function siwumcgggquiyyiu($wmekckkyoiyickmk = null) : bool { $wyoiusauqaouuukk = self::eiwcuqigayigimak(self::imswwygkikwowcqy); return !$wmekckkyoiyickmk && in_array($wyoiusauqaouuukk, [self::ayeokkuakcuqemya, self::ukcoqoawagmcmoym], true) || $wmekckkyoiyickmk && $wmekckkyoiyickmk === $wyoiusauqaouuukk; } public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume) { ManipulateFile::kmyyisssekummkcg(); parent::scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume); } public static function ocyemqkgwaiyeioe() : bool { return (bool) self::eiwcuqigayigimak(self::kaameuiyaywqsswo); } }

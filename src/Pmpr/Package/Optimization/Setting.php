<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f0fae008             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const TOP_SPEED = "\164\x6f\x70\137\x73\x70\145\145\144"; const FAIL_SAFE = "\x66\x61\x69\x6c\x5f\163\141\146\x65"; const WEEKLY_FREQUENCY = "\x77\145\x65\x6b\154\x79"; const MONTHLY_FREQUENCY = "\155\x6f\156\x74\150\154\x79"; const OPT_ = "\157\x70\164\x5f"; const SCHEDULE_AUTOMATIC_CLEANUP = self::OPT_ . "\163\143\150\x65\x64\x75\154\x65\x5f\x61\x75\x74\157\x6d\x61\x74\151\x63\x5f\x63\x6c\145\141\x6e\165\160"; const AUTOMATIC_CLEANUP_FREQUENCY = self::OPT_ . "\x61\165\164\x6f\155\x61\164\x69\x63\x5f\143\x6c\x65\x61\x6e\x75\160\x5f\146\x72\145\161\x75\145\x6e\143\x79"; const AUTO_PURGE_ALL = "\x70\x75\162\x67\145\x5f\141\154\154"; const AUTO_PURGE_RELATED = "\160\165\162\147\145\x5f\x72\x65\x6c\141\164\145\x64"; const PURGE_ = self::OPT_ . "\x70\165\162\x67\x65\137"; const PURGE_PAGINATED = self::PURGE_ . "\160\x61\147\x69\x6e\x61\164\x65\144"; const PURGE_ON_COMMENTS = self::PURGE_ . "\157\x6e\137\143\x6f\x6d\x6d\145\x6e\x74\x73"; const PURGE_AUTOMATICALLY = self::PURGE_ . "\141\x75\x74\157\155\x61\164\151\143\141\154\154\x79"; const PURGE_OPCACHE_ON_FLUSH = self::PURGE_ . "\x6f\160\143\x61\x63\x68\x65\x5f\157\156\137\x66\154\165\163\x68"; const PURGE_AUTOMATICALLY_WOO_PRODUCT_PAGE = self::PURGE_AUTOMATICALLY . "\137\x77\x6f\157\x5f\x70\162\x6f\144\165\x63\164\x5f\x70\141\147\145"; const PURGE_AUTOMATICALLY_WOO_SCHEDULED_SALES = self::PURGE_AUTOMATICALLY . "\x5f\167\x6f\x6f\137\x73\143\150\x65\x64\165\154\145\144\137\x73\x61\154\x65\163"; const LICENSE_ = self::OPT_ . "\x6c\151\x63\x65\156\x73\x65\x5f"; const SECRET_KEY = self::LICENSE_ . "\x73\x65\143\162\145\164\x5f\153\145\x79"; const ENABLE_DEBUG_MODE = self::ENABLE . "\137\x64\x65\142\165\x67\x5f\x6d\157\x64\x65"; public function __construct() { goto aycyouisaiokysqw; mgkwqmyqgswasocy: $this->parentMenu = $wksoawcgagcgoask; goto iuimkcgcsyemcuei; iuimkcgcsyemcuei: parent::__construct(); goto qmukeceewgmekoae; aycyouisaiokysqw: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto moequykwukcqmiga; moequykwukcqmiga: $this->name = $wksoawcgagcgoask; goto mgkwqmyqgswasocy; qmukeceewgmekoae: } public function gogaagekwoisaqgu() { $this->menuTitle = __("\x53\x65\x74\x74\151\156\147", PR__PKG__OPTIMIZATION); $this->pageTitle = __("\x4f\x70\x74\x69\155\x69\x7a\x61\164\151\157\156\x20\123\x65\164\164\151\x6e\x67", PR__PKG__OPTIMIZATION); } public function ecwgiiuacoaokqkw() { parent::ecwgiiuacoaokqkw(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$this->aakmagwggmkoiiyu()}\137\x64\141\x73\150\x62\x6f\141\162\144", __("\104\141\x73\150\x62\157\x61\162\x64", PR__PKG__OPTIMIZATION))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::OPT_ . self::GENERAL, __("\107\x65\156\145\162\x61\x6c", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE_DEBUG_MODE, __("\105\x6e\x61\142\154\145\x20\x44\x65\x62\x75\x67\x20\x4d\x6f\x64\145", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::SECRET_KEY, __("\123\x65\143\162\145\164\40\x4b\145\x79", PR__PKG__OPTIMIZATION), __("\x55\163\x65\144\40\x66\157\162\40\160\x72\145\x6c\157\x61\x64\40\x61\156\144\x20\160\165\x72\147\x65\x20\143\x72\157\x6e\152\157\x62\x2e", PR__PKG__OPTIMIZATION))->yskkmqiusguummwa()->eyygsasuqmommkua(wp_generate_password(20, false, false))->oykaosmaegqwmoga())->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\137\160\x75\x72\147\x65", __("\120\165\162\147\x65", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$this->aakmagwggmkoiiyu()}\137\160\165\162\x67\x65\x5f\x67\x65\x6e\x65\162\x61\154", __("\107\145\156\145\x72\x61\x6c", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::PURGE_AUTOMATICALLY, __("\x41\165\164\x6f\155\141\164\x69\x63\x61\154\x6c\171\x20\120\165\x72\147\145\x20\103\141\x63\150\x65", PR__PKG__OPTIMIZATION), [self::AUTO_PURGE_RELATED => sprintf("\45\163\x20\55\x20\x25\x73", __("\120\x75\x72\x67\145\40\x63\x61\143\x68\x65\x20\x66\157\162\x20\162\x65\154\141\164\145\144\40\160\141\147\x65\x73\x20\x6f\x6e\154\x79", PR__PKG__OPTIMIZATION), __("\50\162\145\x63\157\x6d\155\145\x6e\144\145\x64\x29", PR__PKG__OPTIMIZATION)), self::AUTO_PURGE_ALL => __("\120\x75\162\147\145\x20\167\150\157\154\145\x20\x63\141\x63\x68\x65", PR__PKG__OPTIMIZATION)], __("\101\165\164\x6f\x6d\x61\164\151\x63\x61\154\x6c\x79\x20\160\x75\162\147\x65\40\x74\x68\145\x20\143\141\143\150\x65\x20\167\150\x65\156\40\x73\157\155\x65\164\x68\151\156\147\x20\x63\150\x61\x6e\x67\x65\x73\40\157\156\x20\164\150\145\40\x77\x65\x62\x73\151\164\145\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_ON_COMMENTS, __("\x50\x75\162\x67\x65\x20\x43\141\x63\150\x65\40\117\156\40\103\x6f\155\x6d\x65\x6e\x74", PR__PKG__OPTIMIZATION), __("\101\165\x74\x6f\x6d\141\x74\151\x63\x61\154\154\171\x20\x70\x75\x72\147\x65\x20\x73\x69\x6e\147\x6c\145\x20\x70\157\163\164\x20\143\x61\x63\150\x65\40\167\x68\x65\x6e\x20\141\40\156\x65\x77\x20\x63\x6f\x6d\155\x65\x6e\x74\x20\151\163\40\151\x6e\x73\145\x72\x74\x65\144\40\151\156\x74\x6f\40\x74\x68\x65\40\x64\141\164\141\x62\x61\163\x65\40\157\162\x20\x77\150\145\x6e\x20\141\x20\143\157\155\155\145\x6e\x74\40\x69\163\x20\x61\x70\x70\x72\157\166\x65\144\x20\x6f\162\x20\x64\145\x6c\x65\x74\x65\144\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PURGE_PAGINATED, __("\x50\x61\147\x69\x6e\141\164\x69\x6f\x6e\x20\120\165\162\147\145", PR__PKG__OPTIMIZATION), __("\103\150\157\151\143\x65\40\x68\x6f\x77\40\155\x61\156\171\x20\157\146\40\160\141\x67\151\x6e\x61\x74\x65\x64\40\160\141\x67\x65\163\54\x20\x61\x75\164\x6f\x6d\141\164\x69\143\x61\x6c\154\171\40\x70\x75\x72\x67\145\x20\157\146\x20\x70\165\x72\x67\151\156\147\x20\x61\x72\x63\x68\151\x76\145\x73\56", PR__PKG__OPTIMIZATION))->escqqisecooswqgo(0)->eyygsasuqmommkua(10))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_OPCACHE_ON_FLUSH, __("\120\x75\162\x67\145\x20\117\120\x43\x61\x63\150\x65\x20\157\156\x20\x46\154\165\x73\150", PR__PKG__OPTIMIZATION), __("\101\165\164\157\155\x61\x74\151\x63\141\x6c\x6c\x79\40\x70\x75\x72\147\x65\40\x74\150\x65\x20\x4f\120\143\141\x63\x68\145\40\x77\150\145\x6e\x20\x63\141\x63\150\x65\40\x69\163\40\x70\165\162\147\x65\144\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\157\x70\x74\151\x6d\x69\172\x61\x74\x69\x6f\156\137\x63\154\x6f\165\x64\146\154\141\162\x65\x5f\x70\x6c\x75\x67\x69\x6e\163\x5f\167\x6f\157\143\157\x6d\x6d\x65\162\143\145", __("\127\157\157\x63\x6f\x6d\155\145\x72\x63\145", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_AUTOMATICALLY_WOO_PRODUCT_PAGE, __("\x50\x75\x72\147\x65\40\157\156\x20\121\x75\x61\156\x74\151\x74\x79\40\103\x68\141\x6e\x67\145\163", PR__PKG__OPTIMIZATION), __("\x41\x75\x74\x6f\x6d\141\x74\151\143\141\154\x6c\171\40\x70\x75\x72\x67\x65\40\x63\141\x63\x68\145\x20\146\x6f\162\40\160\x72\157\x64\x75\x63\x74\40\x70\x61\x67\x65\40\x61\156\x64\x20\x72\x65\154\x61\164\x65\x64\40\x63\x61\164\x65\147\x6f\x72\x69\145\163\x20\x77\150\x65\x6e\40\163\x74\x6f\143\153\x20\x71\x75\x61\x6e\x74\x69\x74\171\40\x63\150\x61\x6e\147\145\163\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::PURGE_AUTOMATICALLY_WOO_SCHEDULED_SALES, __("\120\x75\162\147\145\x20\146\157\x72\40\x51\x75\x61\x6e\164\151\164\171\x20\123\143\150\x65\x64\165\x6c\145\144\x20\123\x61\154\145\163", PR__PKG__OPTIMIZATION), __("\101\x75\164\157\x6d\141\x74\151\x63\141\154\x6c\x79\40\x70\165\162\x67\145\40\143\141\x63\x68\145\40\146\157\162\x20\x73\143\x68\145\x64\165\x6c\x65\144\x20\163\x61\154\145\x73\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_STORE))->saemoowcasogykak(IconFontawesomeInterface::ICON_BROOM)->wiukukykqcgssssq(ManipulateWoocommerce::ayseokmqycoqaigc()))->saemoowcasogykak(IconFontawesomeInterface::ICON_HOME)->jyumyyugiwwiqomk(1)); } public function oaigquiewemaussm() { $this->ywwugmwioawwikwq([self::PURGE_PAGINATED => 5, self::PURGE_ON_COMMENTS => true, self::ENABLE_DEBUG_MODE => false, self::PURGE_AUTOMATICALLY => self::AUTO_PURGE_RELATED, self::PURGE_OPCACHE_ON_FLUSH => true, self::PURGE_AUTOMATICALLY_WOO_PRODUCT_PAGE => true, self::PURGE_AUTOMATICALLY_WOO_SCHEDULED_SALES => true]); $this->syuyisqgcskmaymc($this->kuaemyukkkeywccc(self::TOP_SPEED, __("\x54\157\x70\40\x53\x70\x65\x65\x64", PR__PKG__OPTIMIZATION), [])->wwocyigoyasocsik())->syuyisqgcskmaymc($this->kuaemyukkkeywccc(self::FAIL_SAFE, __("\106\141\x69\154\40\x53\x61\146\x65", PR__PKG__OPTIMIZATION), [])); } public function ueiyqqwuiqmmqymc() : MetaBox { goto somsmcmoyaiiwuyk; somsmcmoyaiiwuyk: $qkweikswegyciaie = self::cgygmuguceeosoey("{$this->aakmagwggmkoiiyu()}\x5f\144\x61\163\x68\x62\157\141\x72\x64\x5f\x71\165\151\143\153\137\141\x63\164\151\x6f\156\163", __("\x41\143\x74\151\157\156\163", PR__PKG__OPTIMIZATION))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEARS); goto msqmakqaiawgqeau; iuukukcykqykisaa: $qkweikswegyciaie->mkksewyosgeumwsa(self::qoeiescseggagsqs("\x6f\x70\x74\137\160\x75\x72\147\145\137\x63\141\x63\150\x65", $meqocwsecsywiiqs, __("\x50\x75\162\x67\x65\x20\x61\154\154\x20\143\141\143\150\145\40\151\156\143\x6c\x75\144\145\x20\x68\x74\155\154\x20\x61\156\x64\40\141\x73\x73\145\x74\40\141\156\144\40\x63\154\x6f\x75\x64\x66\x6c\x61\x72\x65\40\x63\x61\x63\x68\145\56", PR__PKG__OPTIMIZATION))->ukmcmuaawacquume(["\x74\x79\160\145" => self::WARNING, "\164\151\164\154\x65" => $meqocwsecsywiiqs, "\x63\157\156\x74\x65\156\x74" => __("\x41\x72\x65\40\171\157\165\x20\163\x75\162\x65\40\x61\142\x6f\165\x74\x20\x70\x75\162\147\x65\x20\141\154\154\x20\x63\x61\x63\x68\145\x73\x3f", PR__PKG__OPTIMIZATION), "\142\165\x74\x74\157\x6e\x73" => ["\143\141\156\143\x65\x6c", ["\x63\154\x61\163\x73" => "\157\160\x74\x2d\x70\x75\162\147\x65\55\x63\x61\x63\150\x65\40\x62\x74\x6e\x20\142\x74\x6e\55\160\162\151\x6d\141\162\171", "\x74\151\164\x6c\x65" => __("\120\x75\x72\147\145", PR__PKG__OPTIMIZATION)]]])->ygagwkucacyassau()->muywawimuacwmkgw(true)); goto aaoekkysuimcamyu; msqmakqaiawgqeau: $meqocwsecsywiiqs = __("\120\165\x72\x67\x65\x20\x43\x61\143\x68\145", PR__PKG__OPTIMIZATION); goto iuukukcykqykisaa; aaoekkysuimcamyu: return $qkweikswegyciaie; goto wugqaoggyqusmaoa; wugqaoggyqusmaoa: } public static function iwgikkiwuiaiemui() : bool { return (bool) self::eiwcuqigayigimak(self::SCHEDULE_AUTOMATIC_CLEANUP, false); } public static function gugmuuowmsiyqagu() : bool { return (string) self::eiwcuqigayigimak(self::AUTOMATIC_CLEANUP_FREQUENCY, self::WEEKLY_FREQUENCY); } public static function siwumcgggquiyyiu($wmekckkyoiyickmk = null) : bool { $wyoiusauqaouuukk = self::eiwcuqigayigimak(self::PURGE_AUTOMATICALLY); return !$wmekckkyoiyickmk && in_array($wyoiusauqaouuukk, [self::AUTO_PURGE_ALL, self::AUTO_PURGE_RELATED]) || $wmekckkyoiyickmk && $wmekckkyoiyickmk == $wyoiusauqaouuukk; } public static function ocyemqkgwaiyeioe() : bool { return (bool) Setting::eiwcuqigayigimak(Setting::PURGE_ON_COMMENTS); } public function imsomwwswyoquoqk() { parent::imsomwwswyoquoqk(); $this->cqscqicucmeamkyq("\x65\156\161\x75\x65\x75\x65\x5f\x73\x63\x72\151\160\x74\x5f{$this->cisyiemkeykgkomc()}", $this); } }

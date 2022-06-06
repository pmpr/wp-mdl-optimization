<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\x5f\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto aymoguycgmuggcik; } if (function_exists("\147\x65\x74\137\156\145\x74\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto kikkkocywiyuyuqw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto aqeyqwuywqcmuoce; kikkkocywiyuyuqw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\x73\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); aqeyqwuywqcmuoce: aymoguycgmuggcik: return $ucaaeyusaoameywi; } }

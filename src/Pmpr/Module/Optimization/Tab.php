<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf32654208             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\x5f\163\x70\145\145\144"; const okeoeeywmosegiiy = "\146\141\151\154\137\x73\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gimmuoqwckiseaik; } if (function_exists("\x67\145\x74\137\156\145\164\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto quwcqmyokicssyew; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto iqcogmsguwoikame; quwcqmyokicssyew: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\x70\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); iqcogmsguwoikame: gimmuoqwckiseaik: return $ucaaeyusaoameywi; } }

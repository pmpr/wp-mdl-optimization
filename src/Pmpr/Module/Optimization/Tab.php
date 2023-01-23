<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce1908259ad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\x73\x70\x65\x65\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\x5f\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gimmuoqwckiseaik; } if (function_exists("\147\145\x74\137\x6e\x65\164\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto quwcqmyokicssyew; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto iqcogmsguwoikame; quwcqmyokicssyew: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); iqcogmsguwoikame: gimmuoqwckiseaik: return $ucaaeyusaoameywi; } }

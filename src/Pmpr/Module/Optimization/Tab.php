<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d04ce34c3b0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\x73\x70\x65\145\x64"; const okeoeeywmosegiiy = "\146\x61\151\x6c\137\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gimmuoqwckiseaik; } if (function_exists("\x67\145\x74\137\x6e\x65\x74\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto quwcqmyokicssyew; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto iqcogmsguwoikame; quwcqmyokicssyew: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\x70\163\72\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); iqcogmsguwoikame: gimmuoqwckiseaik: return $ucaaeyusaoameywi; } }

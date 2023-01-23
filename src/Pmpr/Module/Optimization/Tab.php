<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce42dbc0828             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\163\160\145\x65\144"; const okeoeeywmosegiiy = "\x66\141\151\154\x5f\163\x61\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto gimmuoqwckiseaik; } if (function_exists("\147\x65\x74\x5f\x6e\x65\x74\167\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto quwcqmyokicssyew; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto iqcogmsguwoikame; quwcqmyokicssyew: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); iqcogmsguwoikame: gimmuoqwckiseaik: return $ucaaeyusaoameywi; } }

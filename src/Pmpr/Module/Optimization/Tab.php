<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624f0c0d6af12             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\x70\x5f\163\160\145\x65\144"; const okeoeeywmosegiiy = "\146\141\x69\x6c\x5f\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto aqmiewawgseaqeqk; } if (function_exists("\147\x65\164\x5f\156\x65\164\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto sugumgeqcwgekcqs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto imeaiksowuukikui; sugumgeqcwgekcqs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\x73\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); imeaiksowuukikui: aqmiewawgseaqeqk: return $ucaaeyusaoameywi; } }

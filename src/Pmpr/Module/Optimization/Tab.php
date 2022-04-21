<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261aa1543cbb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\x73\x70\145\145\x64"; const okeoeeywmosegiiy = "\146\141\151\154\137\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto aqmiewawgseaqeqk; } if (function_exists("\x67\145\164\x5f\x6e\145\x74\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto sugumgeqcwgekcqs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto imeaiksowuukikui; sugumgeqcwgekcqs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\x70\163\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); imeaiksowuukikui: aqmiewawgseaqeqk: return $ucaaeyusaoameywi; } }

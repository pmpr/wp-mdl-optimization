<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d83b2421d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\x73\160\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\137\x73\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kiqmcymowosckmii; } if (function_exists("\147\145\x74\137\x6e\145\x74\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto iisieuaeyiqwckou; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto oskwkeaemiqcaqkc; iisieuaeyiqwckou: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\x73\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); oskwkeaemiqcaqkc: kiqmcymowosckmii: return $ucaaeyusaoameywi; } }

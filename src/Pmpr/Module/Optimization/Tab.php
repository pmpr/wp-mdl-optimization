<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e645a0a3356             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\160\145\x65\x64"; const okeoeeywmosegiiy = "\146\141\x69\x6c\137\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto sickakeesgcgwisw; } if (function_exists("\x67\145\x74\137\x6e\x65\164\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto eywcgeccsmquugsw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto wwskeewecyukygeg; eywcgeccsmquugsw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\x74\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wwskeewecyukygeg: sickakeesgcgwisw: return $ucaaeyusaoameywi; } }

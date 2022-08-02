<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e8fa75eb5af             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\x5f\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\151\x6c\137\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto sickakeesgcgwisw; } if (function_exists("\x67\145\164\137\x6e\x65\x74\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto eywcgeccsmquugsw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto wwskeewecyukygeg; eywcgeccsmquugsw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\x73\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wwskeewecyukygeg: sickakeesgcgwisw: return $ucaaeyusaoameywi; } }

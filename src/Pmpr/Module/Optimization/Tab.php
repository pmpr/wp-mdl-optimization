<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0e3312730f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\163\160\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\x5f\163\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kacgiqwewyeeyyam; } if (function_exists("\147\x65\164\137\x6e\x65\x74\x77\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto ewooakeuigcyuemu; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto wceiuqaeywmgscww; ewooakeuigcyuemu: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\x70\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wceiuqaeywmgscww: kacgiqwewyeeyyam: return $ucaaeyusaoameywi; } }

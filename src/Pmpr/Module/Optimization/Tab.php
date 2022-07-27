<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0dd9fa068f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\x70\137\163\x70\145\145\144"; const okeoeeywmosegiiy = "\x66\x61\x69\154\x5f\163\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kacgiqwewyeeyyam; } if (function_exists("\147\x65\164\x5f\x6e\x65\164\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto ewooakeuigcyuemu; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto wceiuqaeywmgscww; ewooakeuigcyuemu: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\x73\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wceiuqaeywmgscww: kacgiqwewyeeyyam: return $ucaaeyusaoameywi; } }

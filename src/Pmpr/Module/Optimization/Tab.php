<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e900b909935             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\x5f\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\137\163\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wwskeewecyukygeg; } if (function_exists("\147\x65\164\x5f\x6e\x65\164\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto wamkaouokmyoyuqu; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto eywcgeccsmquugsw; wamkaouokmyoyuqu: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\163\x3a\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); eywcgeccsmquugsw: wwskeewecyukygeg: return $ucaaeyusaoameywi; } }

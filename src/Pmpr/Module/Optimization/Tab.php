<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62ea46af9a44c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\137\163\x70\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto wwskeewecyukygeg; } if (function_exists("\147\x65\164\137\156\x65\x74\x77\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto wamkaouokmyoyuqu; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto eywcgeccsmquugsw; wamkaouokmyoyuqu: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\x73\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); eywcgeccsmquugsw: wwskeewecyukygeg: return $ucaaeyusaoameywi; } }

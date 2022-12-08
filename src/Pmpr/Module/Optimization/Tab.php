<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\160\x5f\x73\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\141\151\154\x5f\163\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yamoiggaeugmgkku; } if (function_exists("\x67\x65\x74\137\156\x65\164\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto akoiqkoqmmmcieug; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto cgasgmiiqegqesic; akoiqkoqmmmcieug: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cgasgmiiqegqesic: yamoiggaeugmgkku: return $ucaaeyusaoameywi; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             634ceeff4f14f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\x5f\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\151\x6c\x5f\x73\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eqekaoaioiykuaiw; } if (function_exists("\x67\145\x74\x5f\x6e\145\x74\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cgasgmiiqegqesic; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto yamoiggaeugmgkku; cgasgmiiqegqesic: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\160\x73\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); yamoiggaeugmgkku: eqekaoaioiykuaiw: return $ucaaeyusaoameywi; } }

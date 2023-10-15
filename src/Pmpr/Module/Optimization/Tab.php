<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652bc1a0098e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\137\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\x5f\163\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eiicmcasqikiyasw; } if (function_exists("\x67\145\x74\x5f\156\145\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto aqksouwmeckaqyaq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto gmsyoscesymiwwue; aqksouwmeckaqyaq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\x70\x73\72\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gmsyoscesymiwwue: eiicmcasqikiyasw: return $ucaaeyusaoameywi; } }

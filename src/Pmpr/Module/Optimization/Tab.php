<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65195c0b0f495             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\x73\160\145\145\144"; const okeoeeywmosegiiy = "\x66\x61\x69\x6c\137\x73\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eiicmcasqikiyasw; } if (function_exists("\x67\145\x74\x5f\x6e\x65\164\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto aqksouwmeckaqyaq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto gmsyoscesymiwwue; aqksouwmeckaqyaq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\x73\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); gmsyoscesymiwwue: eiicmcasqikiyasw: return $ucaaeyusaoameywi; } }

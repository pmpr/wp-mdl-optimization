<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e84fe9c69b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\x70\145\x65\144"; const okeoeeywmosegiiy = "\x66\141\151\154\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ayucsuwsiocgycww; } if (function_exists("\x67\145\164\x5f\x6e\x65\164\167\x6f\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto gmsyoscesymiwwue; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto eiicmcasqikiyasw; gmsyoscesymiwwue: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\x74\x70\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); eiicmcasqikiyasw: ayucsuwsiocgycww: return $ucaaeyusaoameywi; } }

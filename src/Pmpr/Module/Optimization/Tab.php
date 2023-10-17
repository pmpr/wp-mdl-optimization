<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61ac134c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\137\163\x70\x65\x65\x64"; const okeoeeywmosegiiy = "\146\x61\151\x6c\x5f\163\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ayucsuwsiocgycww; } if (function_exists("\x67\x65\x74\137\156\x65\164\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto gmsyoscesymiwwue; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto eiicmcasqikiyasw; gmsyoscesymiwwue: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); eiicmcasqikiyasw: ayucsuwsiocgycww: return $ucaaeyusaoameywi; } }

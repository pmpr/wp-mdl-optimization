<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643273713ba62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\x73\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\154\x5f\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ussceseaimqywuiy; } if (function_exists("\x67\x65\x74\x5f\156\x65\x74\167\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto cgmgqucewwssmicq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto mkomygccqkmkumsi; cgmgqucewwssmicq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); mkomygccqkmkumsi: ussceseaimqywuiy: return $ucaaeyusaoameywi; } }

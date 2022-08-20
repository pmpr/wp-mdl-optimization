<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630109f80ebad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\163\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eysuawiooiswaseq; } if (function_exists("\x67\x65\x74\x5f\x6e\x65\x74\167\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto suscosoukqeyyqgs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto kiewcwsykccgocuc; suscosoukqeyyqgs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\164\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kiewcwsykccgocuc: eysuawiooiswaseq: return $ucaaeyusaoameywi; } }

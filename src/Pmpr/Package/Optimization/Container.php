<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; class Container extends BaseClass { const OPTIMIZATION = "\160\155\x70\162\x2d\x6f\x70\164\x69\155\151\172\x61\x74\x69\157\x6e"; const DO_OPTIMIZATION = "\x64\157\55\157\160\x74"; const DONT_OPTIMIZATION = "\x64\157\156\164\55\x6f\x70\164"; const OPTIMIZATION_CONFIG_PATH = "\x4f\120\124\111\115\x49\x5a\x41\124\x49\117\x4e\137\103\x4f\116\x46\x49\107\x5f\120\101\124\110"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function getAllBudget() : int { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\147\x65\164\137\142\165\x64\x67\x65\164"), 0); } public function isAllowToOptimize($iqaosyayeiuaisqi = null) : bool { return !is_admin() && !ManipulateAjax::mcgoysmkqsqooceq() && !DecoratorUser::ksgkoukcicwkkaum() && !$this->eeegakaauwcyugqy() && $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\x5f\141\154\x6c\x6f\x77\137\x74\x6f\x5f\x6f\160\x74\x69\155\151\172\x65"), false, $iqaosyayeiuaisqi); } public function eeegakaauwcyugqy() : bool { return ManipulateServer::get(self::DONT_OPTIMIZATION) || ManipulateServer::gmsemuiwicucmcok(self::DONT_OPTIMIZATION); } public function ukacwyckseuqsqgc($ogomymegcoacqisg) { goto qoceommegsyqswsi; uwsmweegoueoawau: return $ogomymegcoacqisg; goto uaysaomocomaomaw; qoceommegsyqswsi: if (!strpos($ogomymegcoacqisg, "\x76\145\x72\75")) { goto ygiycusyssyegauq; } goto agukockguesiwmim; agukockguesiwmim: $ogomymegcoacqisg = DecoratorQuery::oiamiqcuyksmmomm("\166\145\162", $ogomymegcoacqisg); goto iaawmomcqiokucac; iaawmomcqiokucac: ygiycusyssyegauq: goto uwsmweegoueoawau; uaysaomocomaomaw: } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { return ManipulateFormat::aoaeiwswyagmesku($eeamcawaiqocomwy); } public function omkiaysccawouqig($egsumesakcaaukem) : bool { goto omoayecymwmcysyw; mgykqueoqmyucwky: return $eekyacmiyoweyeea; goto coegigeuyugiwuou; wqgmqkugcksgscke: kcyaqgaosmmscquy: goto mgykqueoqmyucwky; eeusamaykaysmgoq: foreach ($couiucmsqaieciue as $yemgmmgogcwccuky) { goto igygkagcaiiiumqo; qmiugaqisqiwooio: mcegmykimgwocisg: goto usgcuuuscucqesug; igygkagcaiiiumqo: if (!(strpos($egsumesakcaaukem, $yemgmmgogcwccuky) !== false)) { goto wwwsqwyegoowkmik; } goto qicikuqekgkawwqo; ommomcekkekaceme: goto kcyaqgaosmmscquy; goto ugguwkkgqoyseuma; ugguwkkgqoyseuma: wwwsqwyegoowkmik: goto qmiugaqisqiwooio; qicikuqekgkawwqo: $eekyacmiyoweyeea = true; goto ommomcekkekaceme; usgcuuuscucqesug: } goto wqgmqkugcksgscke; weyegmawkwggekgi: $eekyacmiyoweyeea = false; goto eeusamaykaysmgoq; omoayecymwmcysyw: $couiucmsqaieciue = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\137\x65\x78\x63\x6c\165\x64\145\x5f\163\x6f\x75\x72\x63\145\x73"), [], $egsumesakcaaukem); goto weyegmawkwggekgi; coegigeuyugiwuou: } public function qwmkuasciiicwaie() : bool { return DecoratorUser::ksgkoukcicwkkaum() && DecoratorUser::scmcyesmmikkucie(); } public function wacwioycsccuuieg() : ?string { return $this->weysguygiseoukqw(Setting::API_KEY); } public function aumueocimuaiwyee() : ?string { return $this->weysguygiseoukqw(Setting::SECRET_KEY); } public function quycagwoqskgemms($ccamueccusigaaio) : bool { goto ecikykuqgeaqamwk; gsyagiygoyamakyu: return $swecuewakscmiogg && $emoqwwkmassqsoaw && $aiamqeawckcsuaou && $emoqwwkmassqsoaw == $this->aumueocimuaiwyee(); goto ucgagqogckeuiewi; gekkisqyegwkwcmg: $aiamqeawckcsuaou = ManipulateServer::get(self::OPTIMIZATION . "\x2d{$ccamueccusigaaio}"); goto caicmucqkokaecsg; caicmucqkokaecsg: $swecuewakscmiogg = ManipulateServer::get(self::OPTIMIZATION); goto gsyagiygoyamakyu; ecikykuqgeaqamwk: $emoqwwkmassqsoaw = ManipulateServer::get(self::OPTIMIZATION . "\x2d\163\145\143\x2d\x6b\145\x79"); goto gekkisqyegwkwcmg; ucgagqogckeuiewi: } public function miueaekaaugaccmg(&$iswcokucwmiosiaq, $aiowsaccomcoikus = self::AJAX_NONCE_NAME) : bool { goto eusygaeoggqeuuki; cgckkkoaumakemuc: $iswcokucwmiosiaq = __("\x50\x65\162\x6d\151\163\x73\151\x6f\x6e\40\x64\x65\x6e\x69\145\144", PR__PKG__OPTIMIZATION); goto qiuouckkycciwuyo; eusygaeoggqeuuki: $kuuugksiksqcaaaa = parent::miueaekaaugaccmg($iswcokucwmiosiaq, $aiowsaccomcoikus); goto skqiqqeyqokasmeg; skqiqqeyqokasmeg: if (!($kuuugksiksqcaaaa && !$this->qwmkuasciiicwaie())) { goto weecgesamaiayuqo; } goto cgckkkoaumakemuc; qiuouckkycciwuyo: weecgesamaiayuqo: goto gyuiwqyyauwqokmc; gyuiwqyyauwqokmc: return $kuuugksiksqcaaaa; goto oeqaiwecuckgoyky; oeqaiwecuckgoyky: } }

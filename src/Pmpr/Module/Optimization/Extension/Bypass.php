<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Extension; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\Optimization\Bypass\Setting as BypassSetting; abstract class Bypass extends Common { protected string $name = ''; public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\151\x6e\151\164", [$this, "\x71\161\157\x63\x61\143\141\155\151\x69\x69\167\x75\x77\151\163"]); } public function qqocacamiiiwuwis() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto goqmywuiicciasyk; } $omqquekswieeogws = "\x6f\160\164\137\141\165\x74\157\x5f\x62\x79\160\141\x73\x73\x5f{$this->aakmagwggmkoiiyu()}\x5f\141\x64\144\x65\x64"; $oakymgscysyssksa = DecoratorOption::get($omqquekswieeogws, false); if (!(!$oakymgscysyssksa && ($uescmseksquycukc = $this->ekkycgeasgwaqiwu()))) { goto oyiuyywyeoskckuw; } $uuycqiugegwuigqc = $this->weysguygiseoukqw(BypassSetting::koqiyueekmymguyq, []); $this->kmuweyayaqoeqiyw()::eiaacegkigqiwawg(BypassSetting::koqiyueekmymguyq, array_merge($uuycqiugegwuigqc, $uescmseksquycukc), false); DecoratorOption::update($omqquekswieeogws, 1); oyiuyywyeoskckuw: goqmywuiicciasyk: } public function wauacaemuqggkyue($oysoyeaucuawyaky, string $sqeykgyoooqysmca) : array { $yqisouqmuqkgmwuy = [self::squoamkioomemiyi => BypassSetting::kowaogweeucieykc, BypassSetting::ymycaemoukukoqoe => $sqeykgyoooqysmca]; $ccamueccusigaaio = self::ucoiewcoucauqwko; if (!in_array($sqeykgyoooqysmca, ManipulatePost::mwoyqeeigwqoamiw(), true)) { goto siecswkggyikqkga; } $ccamueccusigaaio = self::qgmuskygocwmouos; siecswkggyikqkga: if (is_array($oysoyeaucuawyaky)) { goto qkuiwoqksgayqqmg; } $oysoyeaucuawyaky = [$oysoyeaucuawyaky]; qkuiwoqksgayqqmg: $yqisouqmuqkgmwuy[$ccamueccusigaaio] = $oysoyeaucuawyaky; return $yqisouqmuqkgmwuy; } public function kcmqkuugeukkkiug(string $ekuqiqmikiicgoss) : array { return [self::squoamkioomemiyi => BypassSetting::qeesogequqsoiymo, BypassSetting::kcwcmkwmmwqimwyk => $ekuqiqmikiicgoss]; } public abstract function ekkycgeasgwaqiwu() : array; }

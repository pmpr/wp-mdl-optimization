<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const FILENAME = "\x61\144\x76\141\156\x63\145\144\55\143\x61\143\x68\145\x2e\160\x68\160"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\151\x6e\x69\164", [$this, "\171\145\171\151\147\165\x79\145\x67\x6d\155\171\x75\163\145\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { goto keyoygyawmmuiysi; keyoygyawmmuiysi: if (ManipulateAjax::mcgoysmkqsqooceq()) { goto esyqewcegauewswi; } goto muamuiocsyikcmou; muamuiocsyikcmou: $this->qeoakmiowssoqaom(); goto eyeayegkquuoikii; eyeayegkquuoikii: esyqewcegauewswi: goto omwseuoiosmmksik; omwseuoiosmmksik: } public function qeoakmiowssoqaom() { goto caeakwsemagcwswc; wqeeammwsuusmyum: $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); goto gsikauqawyoasewq; wwuoaqqiaaguyyiu: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); goto uccmgkcygwcoqqmc; cyiwyicwqagqigyw: ikaeueycwmsyseia: goto caqisoicuegsemyy; kwywuqumeioqgcme: $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); goto ueuqqoamggagceok; qouwgawyockmkiqw: $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); goto wqeeammwsuusmyum; gsikauqawyoasewq: if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto waukqcouoysuesec; } goto wwuoaqqiaaguyyiu; qwcmwosyocyqyomq: $acqcekoeswseswws = $mkomwsiykqigmqca . self::FILENAME; goto qouwgawyockmkiqw; wwswgqyqcewsqkek: $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy("\x6f\x70\x74\151\x6d\x69\x7a\141\x74\x69\x6f\156\137\x61\144\x76\141\x6e\x63\x65\x64\137\143\x61\143\150\x65\x5f\146\x69\x6c\145", $ewgwqamkygiqaawc); goto qcsiiiieegyokook; uccmgkcygwcoqqmc: if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto ikaeueycwmsyseia; } goto wwuiqmaaemswyeas; ueuqqoamggagceok: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\141\156\x63\x65\x64\56\160\150\x70", ["\x75\x73\x65\x73" => [Test::class, Buffer::class, Config::class], "\143\154\141\163\163\145\x73" => $cmkqisoeyioisqaw, "\x6e\x61\x6d\145\x73\160\x61\x63\145" => $this->gysieksskcaeyuom(Cache::class), "\166\145\156\144\x6f\x72\x5f\x70\141\x74\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\141\x63\150\x65\x5f\x70\x61\x74\x68" => $this->gskqygiceygcguyo(), "\143\x6f\156\x66\x69\147\x5f\160\141\x74\150" => Manipulate::cmaecekuqkwmemms("\x4f\120\124\x49\x4d\x49\x5a\x41\x54\x49\117\116\137\x43\x4f\x4e\x46\x49\107\137\x50\101\x54\110")]); goto wwswgqyqcewsqkek; caeakwsemagcwswc: $mkomwsiykqigmqca = $this->moassygiomssikqe(); goto qwcmwosyocyqyomq; qcsiiiieegyokook: $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::FILENAME, $ewgwqamkygiqaawc); goto iaeuoauagoisyium; caqisoicuegsemyy: waukqcouoysuesec: goto suaiaeakuwkeaggc; wwuiqmaaemswyeas: $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, BaseManipulateFormat::class, ConstantInterface::class]; goto kwywuqumeioqgcme; iaeuoauagoisyium: Notice::info(sprintf(__("\117\160\164\x69\x6d\x69\x7a\141\x74\x69\157\x6e\40\x41\144\166\141\x6e\x63\x65\144\x20\x43\141\x63\x68\145\x20\146\x69\154\145\x20\147\145\x6e\x65\162\x61\x74\x65\x64\40\163\x75\143\x63\x65\163\163\x66\x75\154\x6c\x79\40\x69\156\x20\x25\163\x2e", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\141\156\143\x65\x2d\x63\141\143\150\145"); goto cyiwyicwqagqigyw; suaiaeakuwkeaggc: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { goto ceyyuykckoayuosu; aumygwwssywsogem: foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); uwkuaykqqqkwgcey: } goto gsaiaaeooukaeygk; ceyyuykckoayuosu: $aqykuigiuwmmcieu = []; goto aumygwwssywsogem; gsaiaaeooukaeygk: igyikaemwiwqyeqq: goto kokqmecseosgceak; kokqmecseosgceak: return $aqykuigiuwmmcieu; goto swmkwwkoguyyoogq; swmkwwkoguyyoogq: } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { goto iiyuccyiiyoguicm; iuaauoycciukeqaw: if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\101\103\110\105\x5f\x41\x44\x56\101\116\x43\x45\104\x5f\103\101\x43\110\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\137\143\x61\x63\x68\145\x5f\x67\x65\156\x65\162\x61\164\145\x5f\141\x64\x76\141\156\143\x65\144\x5f\x63\x61\143\150\x65\137\146\x69\154\x65"), true))) { goto oggqgmiqwuceekqm; } goto amegcwiaikcwyuws; ycsgumakqqweigca: return $umuecysoywoumgwo; goto uismokoooeicygyy; iiyuccyiiyoguicm: $umuecysoywoumgwo = true; goto iuaauoycciukeqaw; amegcwiaikcwyuws: $umuecysoywoumgwo = false; goto emcskqgacoswgmog; guouwiieuysyiewm: oggqgmiqwuceekqm: goto ycsgumakqqweigca; emcskqgacoswgmog: Notice::ymqcyaqqcyuicwqu("\143\x61\x63\150\145\x5f\x61\x64\166\x61\156\x63\x65\x64\137\143\141\143\x68\145\137\x70\145\x72\155\151\x73\163\x69\x6f\x6e\163", $this->moassygiomssikqe(), __("\x43\x61\x63\x68\145", PR__PKG__OPTIMIZATION)); goto guouwiieuysyiewm; uismokoooeicygyy: } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }
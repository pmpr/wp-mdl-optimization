<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf030b239b1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateComponent; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Notice\Traits\NoticeTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\ErrorTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\x64\x76\141\x6e\x63\x65\144\55\x63\x61\143\x68\x65\x2e\x70\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\151\156\151\x74", [$this, "\171\x65\171\151\147\165\x79\x65\147\155\155\x79\x75\x73\145\x61"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6f\160\x74\137\144\151\163\141\x62\154\145\x64"), [$this, "\x73\167\x69\x65\x61\x79\145\171\163\141\167\143\145\x65\x6b\153"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto wiiqigwgyuiuksia; } $this->qeoakmiowssoqaom(); wiiqigwgyuiuksia: } public function swieayeysawceekk() { if (!($iiaumsgauuyeqksw = $this->kcciqwskewsuaemk())) { goto mqoygcuqwacgycek; } $iiaumsgauuyeqksw->remove($this->moassygiomssikqe() . self::aeoikmkskgikaqmk); mqoygcuqwacgycek: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto aiukiwqmikscoswm; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto agyycikucwgmysee; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, ErrorTrait::class, NoticeTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, ManipulateSetting::class, BaseManipulateType::class, ManipulateComponent::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\166\x61\x6e\143\x65\144\56\160\x68\x70", ["\x75\163\145\163" => [Test::class, Buffer::class, Config::class], "\143\x6c\x61\163\x73\x65\163" => $cmkqisoeyioisqaw, "\x6e\141\x6d\145\x73\x70\x61\x63\145" => $this->gysieksskcaeyuom(Cache::class), "\x76\145\156\144\157\162\x5f\160\141\164\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\143\x61\143\150\145\x5f\x70\141\x74\150" => $this->gskqygiceygcguyo(), "\x63\x6f\156\146\151\x67\137\x70\141\164\150" => Manipulate::cmaecekuqkwmemms("\x4f\120\x54\x49\115\x49\132\x41\x54\111\117\116\x5f\x43\x4f\x4e\x46\x49\x47\x5f\x50\x41\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x70\164\x5f\141\144\166\141\156\143\145\x64\137\143\x61\x63\150\145\x5f\146\151\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); $this->cimaucgayqyyccoc(sprintf(__("\x4f\160\164\x69\x6d\151\x7a\x61\x74\x69\157\x6e\x20\101\x64\166\141\x6e\143\x65\x64\40\103\x61\x63\x68\x65\x20\x66\x69\x6c\145\x20\x67\x65\156\x65\x72\x61\164\x65\x64\40\x73\x75\x63\143\x65\x73\163\146\165\x6c\154\x79\40\151\156\40\x25\163\x2e", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\141\x6e\x63\x65\x2d\143\141\143\x68\x65", self::smkwuwawwaqyimcq); agyycikucwgmysee: aiukiwqmikscoswm: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); ssyukuseoymackeo: } mcmkqgkwyqoiikcq: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\101\x43\110\x45\x5f\x41\104\x56\x41\116\x43\x45\104\137\103\x41\x43\x48\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\x74\x5f\143\141\143\150\145\x5f\x67\x65\156\145\162\141\x74\145\x5f\141\144\166\141\x6e\x63\x65\144\x5f\143\x61\x63\x68\145\137\146\x69\154\145"), true))) { goto gskacikgkwcuauko; } $umuecysoywoumgwo = false; $this->syiuacooagmooima("\x61\144\166\141\156\x63\x65\x64\137\x63\141\143\150\x65", __("\103\141\x63\150\145", PR__MDL__OPTIMIZATION), $this->moassygiomssikqe()); gskacikgkwcuauko: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5223571c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Module\Optimization\Buffer\Config; use Pmpr\Module\Optimization\Buffer\Test; use Pmpr\Module\Optimization\Manipulate\Manipulate; use Pmpr\Module\Optimization\Manipulate\ManipulateFile; use Pmpr\Module\Optimization\Manipulate\ManipulateFormat; use Pmpr\Module\Optimization\Notice; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\MemoizeTrait; use Pmpr\Module\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\x61\144\x76\141\156\x63\x65\144\55\x63\x61\143\x68\x65\56\160\x68\x70"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\151\156\x69\164", [$this, "\x79\x65\x79\151\x67\x75\x79\x65\147\x6d\x6d\x79\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto qwsmiaegmcwuskwi; } $this->qeoakmiowssoqaom(); qwsmiaegmcwuskwi: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto usmagcaocwiugqum; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto yyyyawaqcowsgqcs; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\x64\166\141\156\143\145\x64\x2e\x70\x68\x70", ["\x75\163\145\x73" => [Test::class, Buffer::class, Config::class], "\143\154\x61\x73\x73\x65\x73" => $cmkqisoeyioisqaw, "\x6e\141\155\145\163\160\141\x63\x65" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\x6e\144\x6f\162\137\160\141\x74\150" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\x63\x68\x65\x5f\160\x61\x74\x68" => $this->gskqygiceygcguyo(), "\143\157\x6e\x66\151\147\137\x70\141\164\x68" => Manipulate::cmaecekuqkwmemms("\117\120\124\x49\x4d\x49\132\101\124\111\117\116\x5f\x43\x4f\116\x46\111\107\137\120\101\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\160\164\137\x61\x64\x76\x61\x6e\143\145\144\137\143\141\143\150\x65\137\x66\151\154\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\x4f\x70\x74\x69\155\x69\172\x61\164\151\x6f\156\x20\x41\x64\166\141\x6e\x63\x65\144\40\x43\x61\143\150\145\40\146\x69\154\x65\40\147\145\156\x65\162\141\164\145\144\x20\163\x75\143\143\145\x73\163\x66\x75\154\x6c\x79\40\151\156\40\45\163\56", PR__MDL__OPTIMIZATION), $mkomwsiykqigmqca), "\x61\x64\166\x61\x6e\x63\x65\x2d\143\x61\143\150\x65"); yyyyawaqcowsgqcs: usmagcaocwiugqum: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); wmycwscioqackeig: } sikmqkecsiyciaei: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\x5c")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\103\x41\x43\110\105\x5f\x41\104\x56\101\116\103\105\104\137\x43\101\103\110\x45") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\164\137\143\141\143\x68\145\x5f\147\145\x6e\x65\162\141\x74\x65\137\x61\144\166\141\x6e\143\x65\144\x5f\143\141\143\x68\145\137\x66\x69\154\145"), true))) { goto wammkmaqucqagqww; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\143\141\143\150\x65\x5f\x61\x64\166\x61\156\x63\x65\x64\x5f\x63\x61\143\x68\145\137\160\145\x72\x6d\x69\163\x73\x69\157\156\x73", $this->moassygiomssikqe(), __("\x43\141\x63\150\145", PR__MDL__OPTIMIZATION)); wammkmaqucqagqww: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }

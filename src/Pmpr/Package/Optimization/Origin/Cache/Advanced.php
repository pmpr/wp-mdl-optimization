<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d68de54c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Origin\Cache; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Container\Storage; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Decorator\Decorator; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Filesystem; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Logger\Engine; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\Common as BaseManipulateType; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat as BaseManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AjaxTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use Pmpr\Common\Foundation\Traits\TranslateTrait; use Pmpr\Package\Optimization\Buffer\Config; use Pmpr\Package\Optimization\Buffer\Test; use Pmpr\Package\Optimization\Manipulate\Manipulate; use Pmpr\Package\Optimization\Manipulate\ManipulateFile; use Pmpr\Package\Optimization\Manipulate\ManipulateFormat; use Pmpr\Package\Optimization\Notice; use Pmpr\Package\Optimization\Optimization; use Pmpr\Package\Optimization\Traits\MemoizeTrait; use Pmpr\Package\Optimization\Buffer\Buffer as BaseBuffer; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseManipulate; class Advanced extends Common { const aeoikmkskgikaqmk = "\141\144\166\x61\156\x63\145\x64\55\143\141\x63\x68\x65\56\x70\150\160"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\x6e\151\x74", [$this, "\x79\145\x79\151\147\165\171\145\x67\155\155\x79\x75\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto omqyuuomwywmqeiq; } $this->qeoakmiowssoqaom(); omqyuuomwywmqeiq: } public function qeoakmiowssoqaom() { $mkomwsiykqigmqca = $this->moassygiomssikqe(); $acqcekoeswseswws = $mkomwsiykqigmqca . self::aeoikmkskgikaqmk; $easioyqacwuockya = ManipulateFile::qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = ManipulateFile::qucagkayiequsiia(Optimization::class); if (!($easioyqacwuockya && $gwcwqmuggecygcca)) { goto misiasooemyskoay; } $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if (!(!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk())) { goto oysyuiqmsokoykaq; } $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, Engine::class, Storage::class, Container::class, Filesystem::class, Decorator::class, DecoratorHook::class, LogTrait::class, AjaxTrait::class, HookTrait::class, SettingTrait::class, MemoizeTrait::class, TemplateTrait::class, SingletonTrait::class, ComponentTrait::class, TranslateTrait::class, BaseManipulate::class, ManipulateHook::class, ManipulateArray::class, ManipulateFormat::class, ManipulateString::class, ManipulateServer::class, BaseManipulateType::class, ManipulateValidation::class, BaseManipulateFormat::class, ConstantInterface::class]; $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\x64\166\141\x6e\x63\145\x64\x2e\160\150\160", ["\x75\163\145\x73" => [Test::class, Buffer::class, Config::class], "\143\154\141\163\163\145\x73" => $cmkqisoeyioisqaw, "\156\x61\155\x65\x73\160\141\x63\145" => $this->gysieksskcaeyuom(Cache::class), "\x76\x65\x6e\144\157\162\137\160\141\164\x68" => Foundation::couwksyewgyeooqe()->aksiegmauqiaueis(), "\x63\x61\143\x68\145\x5f\160\x61\x74\x68" => $this->gskqygiceygcguyo(), "\x63\157\156\146\x69\x67\137\160\141\164\x68" => Manipulate::cmaecekuqkwmemms("\117\x50\124\x49\115\x49\x5a\101\x54\x49\117\116\x5f\x43\117\116\106\x49\x47\x5f\120\x41\124\x48")]); $ewgwqamkygiqaawc = (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\160\x74\137\141\x64\166\x61\156\143\145\x64\x5f\143\x61\143\150\x65\x5f\x66\151\x6c\x65"), $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, self::aeoikmkskgikaqmk, $ewgwqamkygiqaawc); Notice::info(sprintf(__("\117\160\164\x69\155\x69\172\x61\x74\151\x6f\x6e\40\x41\144\x76\141\156\x63\x65\x64\x20\103\x61\143\150\145\x20\x66\x69\154\x65\40\x67\x65\x6e\x65\162\x61\x74\145\144\40\163\165\x63\x63\x65\163\x73\x66\x75\154\154\x79\40\151\x6e\x20\45\163\x2e", PR__PKG__OPTIMIZATION), $mkomwsiykqigmqca), "\141\x64\x76\x61\x6e\143\x65\x2d\x63\141\143\150\x65"); oysyuiqmsokoykaq: misiasooemyskoay: } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = ManipulateFile::eyqooeqgoyokqeoq($egkyssmuqcwaciya); cqkyumayoemqsueu: } eomqeimoequmagum: return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, "\134")); } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; if (!(!$this->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->moassygiomssikqe()) && !Manipulate::cmaecekuqkwmemms("\x43\101\x43\x48\105\x5f\x41\x44\126\101\116\x43\105\x44\137\x43\101\x43\x48\105") && !$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x70\164\137\x63\x61\143\x68\145\137\147\145\x6e\x65\x72\141\x74\145\x5f\x61\144\x76\141\x6e\143\x65\144\x5f\x63\x61\143\x68\145\x5f\146\151\154\145"), true))) { goto ksqmcugkcmsooeaw; } $umuecysoywoumgwo = false; Notice::ymqcyaqqcyuicwqu("\x63\141\143\150\145\137\x61\144\x76\x61\156\143\x65\144\x5f\x63\141\143\x68\145\x5f\160\145\x72\x6d\x69\163\x73\x69\157\x6e\163", $this->moassygiomssikqe(), __("\x43\x61\x63\150\x65", PR__PKG__OPTIMIZATION)); ksqmcugkcmsooeaw: return $umuecysoywoumgwo; } public function moassygiomssikqe() : ?string { return trailingslashit(WPMU_PLUGIN_DIR); } }

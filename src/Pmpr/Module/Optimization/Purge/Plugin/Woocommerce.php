<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dbab4ba54             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Plugin; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; class Woocommerce extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\x6d\145\162\143\145\x5f\x75\x70\144\141\x74\x65\x64\x5f\160\162\x6f\x64\x75\143\x74\137\x73\164\x6f\143\x6b", [$this, "\x61\143\153\143\143\x63\x6f\167\155\147\163\x63\x6f\171\x75\153"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\143\137\x61\x66\x74\145\162\137\160\x72\157\x64\165\x63\x74\x73\137\x65\156\x64\151\156\147\x5f\x73\141\154\x65\163", [$this, "\155\x75\151\147\151\x65\x67\x73\x71\141\171\x6f\167\x63\157\x63"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\x63\137\141\146\164\145\162\x5f\x70\x72\x6f\144\165\143\x74\163\137\163\x74\141\162\x74\x69\156\x67\x5f\x73\141\x6c\145\x73", [$this, "\x6d\x75\151\147\151\x65\147\163\161\x61\x79\157\x77\143\x6f\143"], PHP_INT_MAX); } public function ackcccowmgscoyuk($product) { if (!function_exists("\x77\143\137\x67\x65\x74\137\157\162\x64\145\x72")) { goto kicwiowcogmauwiy; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\163\150\157\160"))) { goto cwikoaeqmmoimmso; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); cwikoaeqmmoimmso: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); kaiesowkgwogqseg: } egaymskkosukqeao: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\x50\165\162\x67\x65\40\x70\162\157\144\165\x63\x74\40\160\x61\x67\x65\163\40\x61\x6e\x64\40\143\x61\x74\x65\x67\157\162\151\x65\x73\x20\146\x6f\x72\x20\127\x6f\157\103\x6f\x6d\x6d\x65\x72\143\x65\x20\x6f\x72\144\x65\162"); kicwiowcogmauwiy: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto csieaismmmocyacu; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto suuskagowwgsouqw; } $auwuoyyagaiegwae[] = $migiiksoiymissge; suuskagowwgsouqw: kgmeiwiakwicgkkk: } cwswueuqoamqasya: if (!$auwuoyyagaiegwae) { goto omykokikgocoikec; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); omykokikgocoikec: csieaismmmocyacu: } }

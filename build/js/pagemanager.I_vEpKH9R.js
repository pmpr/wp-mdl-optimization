/*! For license information please see pagemanager.I_vEpKH9R.js.LICENSE.txt */
(()=>{var e={510:(e,t,n)=>{"use strict";n.r(t)}},t={};function n(a){var r=t[a];if(void 0!==r)return r.exports;var i=t[a]={exports:{}};return e[a](i,i.exports,n),i.exports}n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n(510),function(){const e=PRHelper.getHTML(),t=PRHelper.getType(),n=PRHelper.getHook(),a=PRHelper.getForm(),r=PRHelper.getFormat(),i=PRHelper.getSetting(),o=PRHelper.getRequest(),l=PRBackendHelper.getForm(),p=PRBackendHelper.getModal();function g(t,a){n.bubbling("click",(n=>{let l=e.getTarget(n,`.opt-pattern-${t}`),g=l.closest(".pr-modal-container");e.setElementActivity(l,!1),o.ajax(i.getOption(`pagemanager.ajax.${a}_pattern`)).addNonce().onSuccess((e=>{window.location.reload()})).onError((e=>{p.getCurrent().showMessage(r.error2string(e))})).onFinally((()=>{e.setElementActivity(l,!0)})).send({link:e.getValue(e.getElement("input[name=candidate_page_link]",g)),pattern:e.getData(l,"pattern")})}),`.opt-pattern-${t}`)}n.on("change paste input",(n=>{let p=e.getTarget(n,"input");a.getFieldContainer(p),a.inputDelay(p,(()=>{let n=e.getValue(p),a=p.closest(".pr-modal-container"),g=e.getElement(".opt-pattern-optimize",a);if(t.isEmpty(n))e.setElementActivity(g,!0,!1);else if(!r.isURL(n)||r.isExternalURL(n))l.showFieldMessage(p,i.getOption("pagemanager.invalid_url"));else{let t=e.getValue(e.getElement("input[name=pattern]",a));e.setElementActivity(g,!1,!1),o.ajax(i.getOption("pagemanager.ajax.check_candidate_link")).addNonce().onSuccess((t=>{l.showFieldMessage(p,"",!1),e.setElementActivity(g,!0,!1)})).onError((e=>{l.showFieldMessage(p,r.error2string(e))})).send({link:n,pattern:t})}}),1500)}),"input[name=candidate_page_link]"),g("setup","setup"),g("re-optimize","reoptimize")}()})();
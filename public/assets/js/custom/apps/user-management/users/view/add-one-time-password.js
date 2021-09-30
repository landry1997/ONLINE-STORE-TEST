"use strict";
var KTUsersAddOneTimePassword = function() {
    const t = document.getElementById("kt_modal_add_one_time_password"),
        e = t.querySelector("#kt_modal_add_one_time_password_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function() {
            (() => {
                var o = FormValidation.formValidation(e, { fields: { otp_mobile_number: { validators: { notEmpty: { message: "Valid mobile number is required" } } }, otp_confirm_password: { validators: { notEmpty: { message: "Password confirmation is required" } } } }, plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } });
                t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (t => { t.preventDefault(), Swal.fire({ text: "Are you sure you would like to close?", icon: "warning", showCancelButton: !0, buttonsStyling: !1, confirmButtonText: "Yes, close it!", cancelButtonText: "No, return", customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" } }).then((function(t) { t.value && n.hide() })) })), t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => { t.preventDefault(), Swal.fire({ text: "Are you sure you would like to cancel?", icon: "warning", showCancelButton: !0, buttonsStyling: !1, confirmButtonText: "Yes, cancel it!", cancelButtonText: "No, return", customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" } }).then((function(t) { t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({ text: "Your form has not been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, compris!", customClass: { confirmButton: "btn btn-primary" } }) })) }));
                const i = t.querySelector('[data-kt-users-modal-action="submit"]');
                i.addEventListener("click", (function(t) { t.preventDefault(), o && o.validate().then((function(t) { console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function() { i.removeAttribute("data-kt-indicator"), i.disabled = !1, Swal.fire({ text: "Form has been successfully submitted!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, compris!", customClass: { confirmButton: "btn btn-primary" } }).then((function(t) { t.isConfirmed && n.hide() })) }), 2e3)) : Swal.fire({ text: "Désolé, il semble que des erreurs aient été détectées, veuillez réessayer..", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, compris!", customClass: { confirmButton: "btn btn-primary" } }) })) }))
            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function() { KTUsersAddOneTimePassword.init() }));
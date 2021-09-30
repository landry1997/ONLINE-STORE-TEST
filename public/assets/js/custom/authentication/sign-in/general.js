"use strict";
var KTSigninGeneral = (function() {
    var e, t, i;
    return {
        init: function() {
            (e = document.querySelector("#kt_sign_in_form")),
            (t = document.querySelector("#kt_sign_in_submit")),
            (i = FormValidation.formValidation(e, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })),
            t.addEventListener("click", function(n) {
                n.preventDefault(),
                    i.validate().then(function(i) {
                        "Valid" == i
                            ?
                            (t.setAttribute("data-kt-indicator", "on"),
                                (t.disabled = !0),
                                setTimeout(function() {
                                    t.removeAttribute("data-kt-indicator"),
                                        (t.disabled = !1),
                                        Swal.fire({
                                            text: "You have successfully logged in!",
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, compris!",
                                            customClass: {
                                                confirmButton: "btn btn-warning"
                                            }
                                        }).then(function(t) {
                                            t.isConfirmed &&
                                                ((e.querySelector(
                                                        '[name="email"]'
                                                    ).value = "email"),
                                                    (e.querySelector(
                                                        '[name="password"]'
                                                    ).value = "password"));
                                            window.location = "/home";
                                        });
                                }, 2e3)) :
                            Swal.fire({
                                text: "Désolé, il semble que des erreurs aient été détectées, veuillez réessayer..",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, compris!",
                                customClass: {
                                    confirmButton: "btn btn-danger"
                                }
                            });
                    });
            });
        }
    };
})();
KTUtil.onDOMContentLoaded(function() {
    KTSigninGeneral.init();
});
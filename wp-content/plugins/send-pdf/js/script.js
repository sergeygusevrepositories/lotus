(function( $ ) {
    'use strict';

    $("input:radio").on("click", function () {
        if ($(this).next().html() === "NO" && $(this).parent().parent().parent().next().text().trim().indexOf('If yes', 0) != -1) {
            $(this).parent().parent().parent().next().hide();
        } else if ($(this).next().html() === "YES") {
            $(this).parent().parent().parent().next().show();
        }
    });

    let submit = $(".sgus-submit");

    submit.on('click', (el) => {

        let printName = $("input[class^=printed_name]").val();
        let signImg = false;
        let insuranceForm = false;
        let feedbackForm = false;
        let appointForm = false;
        let html = "";
        let title = "";
        let firstName = "";
        let flag = false;
        let appointFlag = false;
        let inputArray = [];
        let areaArray = [];
        let chkbArray = [];
        let radioArray = [];

        switch (el.target.id) {

            case "submit1":

                break;

            case "submit2":

                sgusInput([
                    "date2",
                    "printed_name",
                    "patient-inp",
                    "emergency-inp",
                    "reason-inp",
                    "date1"
                ], [
                    "patient-inp",
                    "emergency-inp",
                    "reason-inp",
                    "date1"
                ]);

                sgusArea([
                    "communication-area"
                ], [
                    "communication-area"
                ]);

                sgusChkb([
                    "parent-chkb",
                    "executor-chkb",
                    "court-chkb",
                    "power-chkb"
                ], [
                    "parent-chkb",
                    "executor-chkb",
                    "court-chkb",
                    "power-chkb"
                ]);

                break;

            case "submit3":

                sgusRadio([
                    "bull1",
                    "bull2",
                    "bull3",
                    "bull4",
                    "bull5",
                    "bull6",
                    "bull7",
                    "bull8",
                    "bull9",
                    "bull10"
                ]);

                sgusChkb([
                    "depressed-chkb",
                    "excessive-chkb",
                    "unreasonable-chkb",
                    "lost-chkb",
                    "racing-chkb",
                    "fear-chkb",
                    "not-chkb",
                    "easily-chkb",
                    "repetitive-chkb",
                    "too-chkb",
                    "over-chkb",
                    "upsetting-chkb",
                    "sluggish-chkb",
                    "impulsive-chkb",
                    "recent-chkb",
                    "agitated-chkb",
                    "see-chkb",
                    "work-chkb",
                    "never-chkb",
                    "suspect-chkb",
                    "violent-chkb",
                    "cannot-chkb",
                    "tense-chkb",
                    "self-chkb",
                    "afraid-chkb",
                    "worry-chkb",
                    "anger-chkb",
                    "inflated-chkb",
                    "panic-chkb",
                    "careless-chkb",
                    "feel-chkb",
                    "thoughts-chkb",
                    "financial-chkb"
                ]);

                sgusInput([
                    "date",
                    "contract-phone-inp",
                    "social-inp",
                    "zip-inp",
                    "email-inp",
                    "childrens-inp",
                    "main-phone-inp",
                    "other-phone-inp",
                    "first-inp",
                    "last-inp",
                    "gender-inp",
                    "address-inp",
                    "city-inp",
                    "state-inp",
                    "contract-first-inp",
                    "contract-last-inp",
                    "contract-relation-inp",
                    "primary-inp",
                    "describe-inp",
                    "recreational-inp",
                    "tobacco-inp",
                    "birth-place-inp",
                    "grow-up-inp",
                    "separated-inp",
                    "fathers-inp",
                    "mothers-inp",
                    "siblings-inp",
                    "development-inp",
                    "victim-inp",
                    "highest-inp",
                    "jobs-inp",
                    "current-inp",
                    "duration-inp",
                    "desc-rel-inp",
                    "spouse-inp",
                    "how-many-inp",
                    "activities-inp",
                    "details-inp"
                ]);

                sgusArea([
                    "problems-area",
                    "where-area",
                    "whom-area",
                    "when-area",
                    "medication-area",
                    "please-area",
                    "list-area",
                    "which-area",
                    "yes-area",
                    "history-area",
                    "additional-area"
                ]);

                break;

            case "submit4":

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp",
                    "5-inp",
                    "6-inp",
                    "7-inp",
                    "8-inp",
                    "9-inp",
                    "10-inp",
                    "11-inp",
                    "12-inp",
                    "13-inp",
                    "date1"
                ]);

                break;

            case "submit5":

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp",
                    "5-inp",
                    "6-inp",
                    "7-inp",
                    "8-inp",
                    "9-inp",
                    "10-inp",
                    "11-inp",
                    "12-inp",
                    "13-inp",
                    "14-inp",
                    "15-inp",
                    "16-inp",
                    "17-inp",
                    "18-inp",
                    "19-inp",
                    "20-inp",
                    "21-inp",
                    "22-inp",
                    "23-inp",
                    "24-inp",
                    "25-inp",
                    "26-inp",
                    "27-inp"
                ], [
                    "16-inp",
                    "18-inp",
                    "23-inp",
                    "26-inp",
                    "27-inp"
                ]);

                sgusChkb([
                    "1-chkb",
                    "2-chkb",
                    "3-chkb",
                    "4-chkb",
                    "5-chkb",
                    "6-chkb",
                    "7-chkb",
                    "8-chkb",
                    "9-chkb",
                    "10-chkb",
                    "11-chkb",
                    "12-chkb",
                    "13-chkb",
                    "14-chkb",
                    "15-chkb"
                ]);

                break;

            case "submit6":

                sgusInput([
                    "1-inp",
                    "2-inp",
                ]);

                break;

            case "submit8":

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp",
                    "5-inp"
                ]);

                break;

            case "submit9":

                sgusInput([
                    "1-inp",
                    "2-inp"
                ]);

                break;

            case "submit10":

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp",
                    "5-inp"
                ]);

                break;

            case "submit11":

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp"
                ]);

                break;

            case "submit12":

                el.preventDefault();
                insuranceForm = true;
                firstName = $("#1-inp").val();
                flag = true;

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp",
                    "5-inp",
                    "6-inp",
                    "7-inp",
                    "8-inp"
                ], true);

                sgusChkb([
                    "1-chkb"
                ]);

                break;

            case "submit13":

                el.preventDefault();
                feedbackForm = true;
                firstName = $("#1-inp").val();
                flag = true;

                sgusInput([
                    "1-inp",
                    "2-inp"
                ]);

                sgusArea([
                    "1-area"
                ]);

                break;

            case "submit14":

                el.preventDefault();
                appointForm = true;
                firstName = $("#1-inp").val();
                flag = true;
                appointFlag = true;

                sgusInput([
                    "1-inp",
                    "2-inp",
                    "3-inp",
                    "4-inp"
                ]);

                sgusArea([
                    "1-area"
                ]);

                break;
        }

        function sgusRadio(ids) {
            ids.forEach(el => {
                let radioWrapper = $("input[name=" + el ).parent().parent();

                if (radioWrapper.find('input:checked').length === 0) {
                    radioWrapper.addClass("error-red").css({
                        float: 'left',
                        padding: '17px 0 10px 0'
                    }).parent().next().css({
                        clear: 'both'
                    });
                } else {
                    radioWrapper.removeClass("error-red");
                }
            });

            radioArray = ids;
        }

        function sgusInput(ids, unrequired = []) {
            // if ($(".forma input:text").length > 0) {
                ids.forEach(el => {
                    let thisEl = $("#" + el);
                    if (unrequired.includes(el))
                        return;
                    if (thisEl.val().length === 0) {
                        thisEl.addClass("error-red");
                    } else {
                        thisEl.removeClass("error-red");
                    }
                });

                inputArray = ids;
            // }
        }

        function sgusArea(ids, unrequired = []) {
            ids.forEach(el => {
                if (unrequired.includes(el))
                    return;
                let thisEl = $("#" + el);
                if (thisEl.length) {
                    if (thisEl.val().replace(/\s/g, '').length === 0 && thisEl.parent().prev().find("input:radio:checked").next().text() != "NO") {
                        thisEl.addClass("error-red");
                    } else {
                        thisEl.removeClass("error-red");
                    }
                }
            });

            areaArray = ids;
        }

        function sgusChkb(ids, unrequired = []) {
            ids.forEach(el => {
                if (!unrequired.includes(el)) {
                    let chkbWrapper = $("#" + ids[0]).parent().parent();

                    if (chkbWrapper.find('input:checked').length === 0) {
                        chkbWrapper.addClass("error-red").css({
                            padding: '10px'
                        });
                    } else {
                        chkbWrapper.removeClass("error-red");
                    }
                }
            });

            chkbArray = ids;
        }

        function sgusAddSignature(id) {
            let signature = document.getElementById("signature-pad");
            signature.remove();
            signImg ?
                $(id).append("<img src='/wp-content/plugins/send-pdf/includes/output/image.png' />") :
                ''
        }

        if (!$(".error-red").length) {
            if (!$("input.error-red").length) {
                inputArray.forEach(el => {
                    let inputParent = $("#" + el).parent();
                    let inputValue = document.getElementById(el).value;
                    $("#" + el).remove();
                    inputParent.append("<div style='background: #f8f8f8; padding: 10px;'>" + inputValue + "</div>")
                });
            }

            if (!$("textarea.error-red").length) {
                areaArray.forEach(el => {
                    let areaParent = $("#" + el).prev();
                    let areaValue = $("#" + el).val();
                    $("#" + el).remove();
                    areaParent.after("<div style='background: #f8f8f8; padding: 10px;'>" + areaValue + "</div>")
                })
            }

            let chkbWrapper = $("#" + chkbArray[0]).parent().parent();

            if (chkbWrapper.length && chkbWrapper.attr("class").indexOf("error-red") === -1 && $("input:checkbox").length !== $("input:checkbox:checked").length) {
                chkbArray.forEach(el => {
                    !document.getElementById(el).checked ? $("#" + el).parent().remove() : $("#" + el).next().prepend("<img src='/wp-content/plugins/send-pdf/img/800990.svg' height='10' width='10' /> ");
                });
            }

            radioArray.forEach(el => {
                let radioWrapper = $("input[name=" + el ).parent().parent();

                if (radioWrapper.length && radioWrapper.attr("class").indexOf("error-red") === -1) {
                    let bull1 = $("input[name=" + el + "]:checked");
                    let bull1Text = bull1.next().text();
                    let bull1Parent = bull1.parent().parent();
                    bull1Parent.html('');
                    bull1Parent.append('<p>' + bull1Text + '</p>')
                }
            });

            submit.html('<div id="noTrespassingOuterBarG">\n' +
                '\t<div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t\t<div class="noTrespassingBarLineG"></div>\n' +
                '\t</div>\n' +
                '</div>').css({
                padding: '0px',
                transition: 'none'
            });

            let url = '/wp-content/plugins/send-pdf/includes/ajax.php';

            if (!insuranceForm && !feedbackForm && !appointForm) {
                let canvas = document.getElementById("signature-canvas");
                let img = canvas.toDataURL("image/png");

                $.ajax({
                    type: "POST",
                    async: false,
                    url: url,
                    data: {
                        action: "createImgFromCanvas",
                        signature: img
                    },
                    success: function(resp) {
                        if (resp == "success") {
                            signImg = true;
                            sgusAddSignature(".forma_sign");
                        }
                    }
                });

                html = '<section class="forma">' + $(".forma").html() + '</section>';
                title = printName + " sent form: «" + $("h1").text() + "»";
            } else {
                if (!feedbackForm && !appointForm) {
                    title = firstName + " sent form: «" + $(".seven_title").text() + "»";
                    html = '<section class="seven">' + $(".seven").html() + '</section>';
                } else {
                    if (!appointForm) {
                        title = firstName + " sent form: «" + $(".feedback_title").text() + "»";
                        html = '<section class="feedback">' + $(".feedback").html() + '</section>';
                    } else {
                        title = firstName + " sent form: «" + $(".appoint_title").text() + "»";
                        html = '<section class="appoint">' + $(".appoint").html() + '</section>';
                    }
                }
            }

            $.ajax({
                type: "POST",
                async: true,
                url: '/wp-content/plugins/send-pdf/includes/ajax.php',
                data: {
                    html: html.replace(/>\s+?</g, '><'),
                    title: title,
                    flag: flag,
                    action: ""
                },
                success: function(resp) {
                    console.log(resp)
                    if (resp === "success") {
                        if (flag) {
                            if (appointFlag) {
                                $("#" + submit.attr('id') + "2").click();
                            } else {
                                if (insuranceForm) {
                                    location.reload();
                                    return false;
                                }
                                $(".sgus-mess-sent").css({
                                    display: 'block',
                                    position: 'fixed',
                                    top: '50%',
                                    left: '50%',
                                    transform: 'translate(-50%, -50%)',
                                    zIndex: '99999'
                                });
                            }
                        } else {
                            $("#" + submit.attr('id') + "2").click();
                        }

                        submit.remove();
                        $(".fancybox-content").css({
                            padding: '0px'
                        });

                        $(".fancybox-container, .fancybox-close-small").on('click', () => {
                            location.reload();
                            return false;
                        });
                    }
                }
            });
        } else {
            let errorTop = $(".error-red").eq(0).offset().top - 70;
            $('html, body').animate({scrollTop: errorTop + 'px'}, 1000);
        }
    });

})( jQuery );

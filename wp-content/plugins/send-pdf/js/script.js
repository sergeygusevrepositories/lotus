(function( $ ) {
    'use strict';

    // let url = '/wp-content/plugins/send-pdf/includes/ajax.php';
    // let html1 = '<section class="forma">' + $(".forma").html() + '</section>';
    // html1 = html1.replace(/>\s+?</g, '><');
    //
    // $.ajax({
    //     type: "POST",
    //     async: false,
    //     url: url,
    //     data: {
    //         action: "test",
    //         html: html1,
    //         title: "title"
    //     },
    //     success: function(resp) {
    //         console.log(resp);
    //     }
    // });
    //
    // return false;









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
                ]);

                sgusArea([
                    "communication-area"
                ]);

                sgusChkb([
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

                if (radioWrapper.length && radioWrapper.attr("class").indexOf("error-red") === -1) {
                    let bull1 = $("input[name=" + el + "]:checked");
                    let bull1Text = bull1.next().text();
                    let bull1Parent = bull1.parent().parent();
                    bull1Parent.html('');
                    bull1Parent.append('<p>' + bull1Text + '</p>')
                }
            });
        }

        function sgusInput(ids) {
            ids.forEach(el => {
                let thisEl = $("#" + el);
                if (thisEl.val().length === 0) {
                    thisEl.addClass("error-red");
                } else {
                    thisEl.removeClass("error-red");
                }
            });

            if (!$("input.error-red").length) {
                ids.forEach(el => {
                    let inputParent = $("#" + el).parent();
                    let inputValue = document.getElementById(el).value;
                    $("#" + el).remove();
                    inputParent.append("<div style='background: #f8f8f8; padding: 10px;'>" + inputValue + "</div>")
                })
            }
        }

        function sgusArea(ids) {
            ids.forEach(el => {
                let thisEl = $("#" + el);
                if (thisEl.length) {
                    if (thisEl.val().replace(/\s/g, '').length === 0) {
                        thisEl.addClass("error-red");
                    } else {
                        thisEl.removeClass("error-red");
                    }
                }
            });

            if (!$("textarea.error-red").length) {
                ids.forEach(el => {
                    let areaParent = $("#" + el).prev();
                    let areaValue = $("#" + el).val();
                    $("#" + el).remove();
                    areaParent.after("<div style='background: #f8f8f8; padding: 10px;'>" + areaValue + "</div>")
                })
            }
        }

        function sgusChkb(ids) {
            let chkbWrapper = $("#" + ids[0]).parent().parent();

            if (chkbWrapper.find('input:checked').length === 0) {
                chkbWrapper.addClass("error-red").css({
                    padding: '10px'
                });
            } else {
                chkbWrapper.removeClass("error-red");
            }

            if (chkbWrapper.length && chkbWrapper.attr("class").indexOf("error-red") === -1) {
                ids.forEach(el => {
                    !document.getElementById(el).checked ? $("#" + el).parent().remove() : $("#" + el).next().prepend("<img src='/wp-content/plugins/send-pdf/img/800990.svg' height='10' width='10' /> ");
                });
            }
        }

        function sgusAddSignature(id) {
            let signature = document.getElementById("signature-pad");
            signature.remove();
            signImg ?
                $(id).append("<img src='/wp-content/plugins/send-pdf/includes/output/image.png' />") :
                ''
        }

        if (!$(".error-red").length) {
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
                title = printName + " отправил форму: «" + $("h1").text() + "»";
            } else {
                if (!feedbackForm && !appointForm) {
                    title = firstName + " отправил форму: «" + $(".seven_title").text() + "»";
                    html = '<section class="seven">' + $(".seven").html() + '</section>';
                } else {
                    if (!appointForm) {
                        title = firstName + " отправил форму: «" + $(".feedback_title").text() + "»";
                        html = '<section class="feedback">' + $(".feedback").html() + '</section>';
                    } else {
                        title = firstName + " отправил форму: «" + $(".appoint_title").text() + "»";
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
                    flag: flag
                },
                success: function(resp) {
                    if (resp === "success") {
                        if (flag) {
                            if (appointFlag) {
                                $("#" + submit.attr('id') + "2").click();
                            } else {
                                $(".fancybox-container").remove();
                            }
                        } else {
                            $("#" + submit.attr('id') + "2").click();
                        }
                    }
                }
            });
        } else {
            let errorTop = $(".error-red").eq(0).offset().top - 70;
            $('html, body').animate({scrollTop: errorTop + 'px'}, 1000);
        }
    });

})( jQuery );

(function( $ ) {
    'use strict';

    let submit = document.querySelector(".sgus-submit");

    submit.addEventListener('click', (el) => {

        let signImg = false;
        let url = '/wp-content/plugins/send-pdf/includes/ajax.php';

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
                }
            }
        });

        let html = "";

        switch (el.target.id) {

            case "submit1":

                break;

            case "submit2":

                signImg ? sgusAddSignature() : '';

                sgusInput("date2");
                sgusInput("printed_name");
                sgusInput("patient-inp");
                sgusInput("emergency-inp");
                sgusInput("reason-inp");
                sgusInput("date1");

                sgusArea("communication-area");

                sgusChkb("parent-chkb");
                sgusChkb("executor-chkb");
                sgusChkb("court-chkb");
                sgusChkb("power-chkb");

                break;

            case "submit3":

                sgusRadio("bull1");
                sgusRadio("bull2");
                sgusRadio("bull3");
                sgusRadio("bull4");
                sgusRadio("bull5");
                sgusRadio("bull6");
                sgusRadio("bull7");
                sgusRadio("bull8");
                sgusRadio("bull9");
                sgusRadio("bull10");

                sgusChkb("depressed-chkb");
                sgusChkb("excessive-chkb");
                sgusChkb("unreasonable-chkb");
                sgusChkb("lost-chkb");
                sgusChkb("racing-chkb");
                sgusChkb("fear-chkb");
                sgusChkb("not-chkb");
                sgusChkb("easily-chkb");
                sgusChkb("repetitive-chkb");
                sgusChkb("too-chkb");
                sgusChkb("over-chkb");
                sgusChkb("upsetting-chkb");
                sgusChkb("sluggish-chkb");
                sgusChkb("impulsive-chkb");
                sgusChkb("recent-chkb");
                sgusChkb("agitated-chkb");
                sgusChkb("see-chkb");
                sgusChkb("work-chkb");
                sgusChkb("never-chkb");
                sgusChkb("suspect-chkb");
                sgusChkb("violent-chkb");
                sgusChkb("cannot-chkb");
                sgusChkb("tense-chkb");
                sgusChkb("self-chkb");
                sgusChkb("afraid-chkb");
                sgusChkb("worry-chkb");
                sgusChkb("anger-chkb");
                sgusChkb("inflated-chkb");
                sgusChkb("panic-chkb");
                sgusChkb("careless-chkb");
                sgusChkb("feel-chkb");
                sgusChkb("thoughts-chkb");
                sgusChkb("financial-chkb");

                sgusInput("date");
                sgusInput("contract-phone-inp");
                sgusInput("social-inp");
                sgusInput("zip-inp");
                sgusInput("email-inp");
                sgusInput("childrens-inp");
                sgusInput("main-phone-inp");
                sgusInput("other-phone-inp");
                sgusInput("first-inp");
                sgusInput("last-inp");
                sgusInput("gender-inp");
                sgusInput("address-inp");
                sgusInput("city-inp");
                sgusInput("state-inp");
                sgusInput("contract-first-inp");
                sgusInput("contract-last-inp");
                sgusInput("contract-relation-inp");
                sgusInput("primary-inp");
                sgusInput("describe-inp");
                sgusInput("recreational-inp");
                sgusInput("tobacco-inp");
                sgusInput("birth-place-inp");
                sgusInput("grow-up-inp");
                sgusInput("separated-inp");
                sgusInput("fathers-inp");
                sgusInput("mothers-inp");
                sgusInput("siblings-inp");
                sgusInput("development-inp");
                sgusInput("victim-inp");
                sgusInput("highest-inp");
                sgusInput("jobs-inp");
                sgusInput("current-inp");
                sgusInput("duration-inp");
                sgusInput("desc-rel-inp");
                sgusInput("spouse-inp");
                sgusInput("how-many-inp");
                sgusInput("activities-inp");
                sgusInput("details-inp");

                sgusArea("problems-area");
                sgusArea("where-area");
                sgusArea("whom-area");
                sgusArea("when-area");
                sgusArea("medication-area");
                sgusArea("please-area");
                sgusArea("list-area");
                sgusArea("which-area");
                sgusArea("yes-area");
                sgusArea("history-area");
                sgusArea("additional-area");

                break;

            case "submit4":
                sgusInput("1-inp");
                sgusInput("2-inp");
                sgusInput("3-inp");
                sgusInput("4-inp");
                sgusInput("5-inp");
                sgusInput("6-inp");
                sgusInput("7-inp");
                sgusInput("8-inp");
                sgusInput("9-inp");
                sgusInput("10-inp");
                sgusInput("11-inp");
                sgusInput("12-inp");
                sgusInput("13-inp");
                sgusInput("date1");

                break;

            case "submit5":
                sgusInput("1-inp");
                sgusInput("2-inp");
                sgusInput("3-inp");
                sgusInput("4-inp");
                sgusInput("5-inp");
                sgusInput("6-inp");
                sgusInput("7-inp");
                sgusInput("8-inp");
                sgusInput("9-inp");
                sgusInput("10-inp");
                sgusInput("11-inp");
                sgusInput("12-inp");
                sgusInput("13-inp");
                sgusInput("14-inp");
                sgusInput("15-inp");
                sgusInput("16-inp");
                sgusInput("17-inp");
                sgusInput("18-inp");
                sgusInput("19-inp");
                sgusInput("20-inp");
                sgusInput("21-inp");
                sgusInput("22-inp");
                sgusInput("23-inp");
                sgusInput("24-inp");
                sgusInput("25-inp");
                sgusInput("26-inp");
                sgusInput("27-inp");

                sgusChkb("1-chkb");
                sgusChkb("2-chkb");
                sgusChkb("3-chkb");
                sgusChkb("4-chkb");
                sgusChkb("5-chkb");
                sgusChkb("6-chkb");
                sgusChkb("7-chkb");
                sgusChkb("8-chkb");
                sgusChkb("9-chkb");
                sgusChkb("10-chkb");
                sgusChkb("11-chkb");
                sgusChkb("12-chkb");
                sgusChkb("13-chkb");
                sgusChkb("14-chkb");
                sgusChkb("15-chkb");

                break;

            case "submit6":
                sgusInput("1-inp");
                sgusInput("2-inp");

                break;

            case "submit8":
                sgusInput("1-inp");
                sgusInput("2-inp");
                sgusInput("3-inp");
                sgusInput("4-inp");
                sgusInput("5-inp");

                break;

            case "submit9":
                sgusInput("1-inp");
                sgusInput("2-inp");

                break;

            case "submit10":
                sgusInput("1-inp");
                sgusInput("2-inp");
                sgusInput("3-inp");
                sgusInput("4-inp");
                sgusInput("5-inp");

                break;

            case "submit11":
                sgusInput("1-inp");
                sgusInput("2-inp");
                sgusInput("3-inp");
                sgusInput("4-inp");

                break;
        }

        function sgusRadio(id) {
            let bull1 = $("input[name=" + id + "]:checked");
            let bull1Text = bull1.next().text();
            let bull1Parent = bull1.parent().parent();
            bull1Parent.html('');
            bull1Parent.append('<p>' + bull1Text + '</p>')
        }

        function sgusInput(id) {
            $("#" + id).attr("value", document.getElementById(id).value);
        }

        function sgusArea(id) {
            $("#" + id).text(document.getElementById(id).value);
        }

        function sgusChkb(id) {
            !document.getElementById(id).checked ? $("#" + id).parent().remove() : '';
        }

        function sgusAddSignature() {
            let signature = document.getElementById("signature-pad");
            signature.remove();
            $(".forma_sign").append("<img src='/wp-content/plugins/send-pdf/includes/output/image.png' />");
        }

        html = '<section class="forma">' + document.querySelector(".forma").innerHTML + '</section>';

        $.ajax({
            type: "POST",
            async: false,
            url: '/wp-content/plugins/send-pdf/includes/ajax.php',
            data: {
                html: html.replace(/>\s+?</g, '><'),
            },
            success: function(resp) {
                console.log(resp)
            }
        });
    });

})( jQuery );

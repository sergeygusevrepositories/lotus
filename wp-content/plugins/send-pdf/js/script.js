(function( $ ) {
    'use strict';

    let submit = document.querySelector(".sgus-submit");


    submit.addEventListener('click', (el) => {
        let html = "";
        let data = {};

        switch (el.target.id) {

            case "submit1":
                console.log(1);
                break;

            case "submit2":
                html = '<section class="forma">' + document.querySelector(".forma").innerHTML + '</section>';
                data.id = 2;
                data.date = document.getElementById("date2").value;
                data.printedName = document.getElementById("printed_name").value;
                data.parentChkb = document.getElementById("parent-chkb").checked;
                data.executorChkb = document.getElementById("executor-chkb").checked;
                data.courtChkb = document.getElementById("court-chkb").checked;
                data.powerChkb = document.getElementById("power-chkb").checked;
                break;

            case "submit3":
                html = '<section class="forma">' + document.querySelector(".forma").innerHTML + '</section>';
                console.log(3);
                break;

            case "submit4":
                html = '<section class="forma">' + document.querySelector(".forma").innerHTML + '</section>';
                break;

            case "submit5":
                console.log(5);
                break;

            case "submit6":
                console.log(6);
                break;

            case "submit8":
                console.log(8);
                break;

            case "submit9":
                console.log(9);
                break;

            case "submit10":
                console.log(10);
                break;

            case "submit11":
                console.log(11);
                break;
        }

        $.ajax({
            type: "POST",
            async: false,
            url: '/wp-content/plugins/send-pdf/includes/ajax.php',
            data: {
                action: "getStreetNP",
                html: html.replace(/>\s+?</g, '><'),
                data: data
            },
            success: function(resp) {
                console.log(resp)
            }
        });
    });

})( jQuery );

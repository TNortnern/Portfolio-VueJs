$("document").ready(function () {

if ($(this).scrollTop() >= 763) {
    if(!$("#content").hasClass("flipNav")){
    $("#content").addClass("flipNav");
    }


};
    // navbar slide up on scroll down, slide down on scroll up
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {

        if ($(this).scrollTop() >= 763) {
            $("#content").addClass("flipNav");


        } else {
            $("#content").removeClass("flipNav");
            $("#content").fadeIn("fast");
        }

        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $(".flipNav").fadeIn("fast");
        } else {
            $(".flipNav").slideUp(100);
        }
        prevScrollpos = currentScrollPos;
    }


    //intialzing animate on scroll
    AOS.init({
        easing: 'ease-out-back',
        duration: 500,
        delay: 120,
        once: true,
        disable: 'mobile'
    });


    // intializing materialize js
    $('#content').pushpin({
        top: $('#content').offset().top
    });
    $('.scrollspy').scrollSpy({
        scrollOfffset: 0
    });
    $('.parallax').parallax();
    $('.tabs').tabs();


    // intializing materialze form validation

    $("#responsiveBars").click(function () {
        if (($("#nav-mobile").css("display") == "none")) {
            $("#nav-mobile").slideDown();
            $("#content").addClass("height-60");
        } else {
            $("#nav-mobile").slideUp(function () {
                $("#content").removeClass("height-60");
            });

        }


    })

    // ajax contact form
    $('#contact-form').on('submit', function (e) {
        //Stop the form from submitting itself to the server.
        e.preventDefault();
        $('#contact-form').attr("onsubmit", "return false");
        let name = $('#name').val();
        let email = $('#email').val();
        let number = $('#number').val();
        let message = $('#message').val();
        let submit = $('#sendmessage').val();

        $("#sendmessage").addClass("disabled");
        $.ajax({
            type: "POST",
            url: 'ajax.php',
            data: {
                name: name,
                email: email,
                number: number,
                message: message,
                sendmessage: submit
            },
            success: function (data) {
                let contactinputs = document.querySelectorAll("#contact-form input");
                
                $("#sendmessage").removeClass("disabled");
                $("#messagesent").fadeIn();
                $("#message").val("");
                $("#contact-form input").each(function () {
                    $(this).val("");
                });
            }
        });
    });

$("#message").keyup(function(){
     $("#messagesent").fadeOut("fast");
});
$("#contact-form input").each(function () {
    $(this).keyup(function(){
        $("#messagesent").fadeOut("fast");
    });
});






});
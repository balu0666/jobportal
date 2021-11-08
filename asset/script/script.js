$('document').ready(function() {
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

    $('#select_all').click(function () {
        $('.email_checkbox').prop('checked', this.checked);

        $('.email_checkbox').change(function () {
            var check = ($('.email_checkbox').filter(":checked").length == $('.email_checkbox').length);
            $('#select_all').prop("checked", check);
        });
    });

    if (window.location.href.indexOf("index") > -1) {
        $('#id_home').addClass('active_1');
    }
    // else if (window.location.href.indexOf("http://localhost/jobportal/") > -1) {
    //     $('#id_home').addClass('active');
    // }
    else if (window.location.href.indexOf("pricing") > -1) {
        $('#id_pricing').addClass('active_1');
    }
    else if (window.location.href.indexOf("candidatelisting") > -1) {
        $('#id_candidate').addClass('active_1');
    }
    else if (window.location.href.indexOf("whyus") > -1) {
        $('#id_whyus').addClass('active_1');
    }
    else if (window.location.href.indexOf("contact") > -1) {
        $('#id_contact').addClass('active_1');
    }

    var counted = 0;

    function counter_start () {
        if ($('.number_board-counter').length) {
            var oTop = $(".number_board-counter").offset().top - window.innerHeight;
            if (counted == 0 && $(window).scrollTop() > oTop) {
                $(".number_board-counter .counter").each(function () {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate(
                        {
                            countNum: countTo,
                        },
                        {
                            duration: 4000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                            },
                        }
                    );
                });
            counted = 1;
            }
        }
    }

    if (window.location.href.indexOf("jobportal") > -1) {
        $(window).scroll(function () {
            counter_start();
        });
    }

    if (window.location.href.indexOf("whyus") > -1) {
        counter_start();
    }


    
    $("#filter_show-button").click(function(){
      $(".candidate_filter-sub").css({
          'left' : '0',
          'opacity' : '1'
      });
    });
    
    $("#filter_hide-button").click(function(){
      $(".candidate_filter-sub").css({
        'left' : '-100%',
        'opacity' : '0'
    });
    });

    // footer arrow

	$(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    
    // input tags

    $("#inputTag").tagsinput('items');

    // input multi select

    $('.select_skills').select2({
        placeholder : 'Choose by Skills'
    });

    $('.select_skills').on('select2:close', function() {
        let select = $(this);
        $(this).next('span.select2').find('ul').html(function() {
          let count = select.select2('data').length;
          if(count < 1) {
            return "<li>Choose by Skills</li>";
          }
          else {
            return "<li>" + count + " skills selected</li>";
          }
        });
    });

});



    
    
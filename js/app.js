"use strict";
// var $ = document.querySelector.bind(document);
// var $$ = document.querySelectorAll.bind(document);

function maskPhone(selector, masked = '+7 (___) ___-__-__') {
    const elems = document.querySelectorAll(selector);
    function mask(event) {
        const keyCode = event.keyCode;
        const template = masked,
            def = template.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        // console.log(template);
        let i = 0,
            newValue = template.replace(/[_\d]/g, function (a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
            });
        i = newValue.indexOf("_");
        if (i !== -1) {
            newValue = newValue.slice(0, i);
        }
        let reg = template.substr(0, this.value.length).replace(/_+/g,
            function (a) {
                return "\\d{1," + a.length + "}";
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
            this.value = newValue;
        }
        // if (event.type === "blur" && this.value.length < 5) {
        if (event.type === "blur" && this.value.length < masked.length) {
            // if ( this.required ) {
            this.value = "";
            // }
        }
    }
    for (const elem of elems) {
        elem.addEventListener("input", mask);
        elem.addEventListener("focus", mask);
        elem.addEventListener("blur", mask);
        // if (elem.required) {
        // elem.setAttribute('minlength', masked.length);
        // elem.minLength = masked.length;
        // }
    }
}

jQuery.getJSON('https://api.ipify.org?format=jsonp&callback=?', function(data) {
	jQuery("form").each(function() {
		jQuery(this).append('<input type="hidden" class="ip" name="ip" value=' + data.ip + '>');
		jQuery(this).append('<input type="hidden" class="cm_id" name="cm_id" value=' + sessionStorage.getItem("cm_id") + '>');
	});
});

window.addEventListener('load', function () {

    this.setTimeout(()=>{
        $(`body`).removeAttr('style');
    }, 4000);

    maskPhone('.phoneField'); // РњР°СЃРєР° С‚РµР»РµС„РѕРЅР°
    $('.phoneField').attr('required', 1);

    const menuItems = $(`.menu__item`);

    menuItems.each(function () {
        $(this).mouseenter(function () {
            $(this).find('.menu__sub').addClass('active');
        });
        $(this).mouseleave(function () {
            $(this).find('.menu__sub').removeClass('active');
        });
    });

    $(`.saleBox__title`).click(function () {
        $(this).toggleClass(`saleBox__title--open`);
    });

    $("#topSlider").slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: true,
        fade: true,
        dots: true,
        // arrows: true,
        nextArrow: '.slider__nav--next',
        prevArrow: '.slider__nav--prev',
        appendDots: '.slider__dots',
        dotsClass: 'slider__dotsList'
    });

    $("#rewievs").slick({
        slidesToScroll: 1,
        slidesToShow: 2,
        infinite: true,
        fade: false,
        dots: false,
        arrows: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 651,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    if ( $(`body`).width() <= 768 ) {
        $(".mainMasters__list").slick({
            slidesToScroll: 1,
            slidesToShow: 3,
            infinite: true,
            fade: false,
            dots: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 651,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    }

    if ( window.location.pathname == '/reviews/' ) {
        let revOnPage = 5;
        let revs = $(`.reviews__item`);
        let revCount = revs.length;
        let revCountPage = Math.ceil(revCount/revOnPage);
        console.log(`РЎС‚СЂР°РЅРёС†Р° РѕС‚Р·С‹РІРѕРІ`);
        function revPage (p = 1) {
            let lEloP = p*revOnPage;
            let fEloP = lEloP - revOnPage;
            revs.hide();
            let i = 0;
            revs.each(function(){
                if ( i >= fEloP && i < lEloP ) {
                    $(this).show();
                }
                i++;
            });
        }
        if ( revCount < revOnPage ) {
            $(`.reviews__navs`).hide();
        } else {
            // revs.hide();
            for (let index = 1; index <= revCountPage; index++) {
                if ( index == 1 ) {
                    $(`.reviews__nav--pages`).append(`<a href='#' data-page='${index}' class='active'>${index}</a>`);
                } else {
                    $(`.reviews__nav--pages`).append(`<a href='#' data-page='${index}'>${index}</a>`);
                }
            }
            revPage(1);

            $(`.reviews__nav--pages a`).click(function (event) {
                event.preventDefault();
                if ( !$(this).hasClass('active') ) {
                    $(`.reviews__nav--pages a.active`).removeClass('active');
                    $(this).addClass('active');
                    revPage($(this).text());
                }
            });

            $(`.reviews__nav--prev`).click(function(event){
                event.preventDefault();
                $(`.reviews__nav--next`).removeClass('disable');
                if ( $(`.reviews__nav--pages a.active`).text() == '1' ) {
                    return false;
                } else {
                    let prev = $(`.reviews__nav--pages a.active`).text()-1;
                    if ( prev == '1' ) {
                        $(this).addClass('disable');
                    } else {
                        $(this).removeClass('disable');
                    }
                    $(`.reviews__nav--pages a.active`).removeClass('active')
                    $(`.reviews__nav--pages a[data-page='${prev}']`).addClass('active')
                    revPage(prev);
                }
            });

            $(`.reviews__nav--next`).click(function(event){
                event.preventDefault();
                $(`.reviews__nav--prev`).removeClass('disable');
                if ( $(`.reviews__nav--pages a.active`).text() == revCountPage ) {
                    return false;
                } else {
                    let next = parseInt($(`.reviews__nav--pages a.active`).text())+1;
                    if ( next == revCountPage ) {
                        $(this).addClass('disable');
                    } else {
                        $(this).removeClass('disable');
                    }
                    $(`.reviews__nav--pages a.active`).removeClass('active')
                    $(`.reviews__nav--pages a[data-page='${next}']`).addClass('active')
                    revPage(next);
                }
            });
        }

        $(`.addReview__toggle`).click(function(event){
            event.preventDefault();
            $(`.addReview`).addClass('addReview--border');
            $(`.addReview__form`).show();
            $(`.addReview__toggle`).hide();
        });
    }

    function bodyPadding414 () {
        $('html').css('padding-top', $('.header').outerHeight()+'px');
    }

    function bp () {
        if( $('body').width() <= 414 ) {
            bodyPadding414();
        } else {
            $('html').css('padding-top', 0);
        }
    }

    bp();
    $(window).resize(()=>{
        bp();
    });

    $(`.navToggle`).click(function (event) {
        event.preventDefault();
        $(this).toggleClass('navToggle--open');
        $(`.menu`).css('top', $('.header').outerHeight());
        $(`.menu`).toggleClass('menu--show');
        return false;
    });

    $(`.mainDevicesItem__text`).click(function (event) {
        event.preventDefault();
        $(this).toggleClass('mainDevicesItem__text--open');
        return false;
    });

    $(`.mainFaqsItem__q`).click( function (event) {
        $(this).siblings('.mainFaqsItem__a').toggleClass('open');
        event.preventDefault();
        return false;
    } );

	//$('.menu__item > .menu__link').click(function (event) {
    //    if( $('body').width() <= 550 ) {
	//
    //        event.preventDefault();
    //        return false;
    //    }
    //});

    $('.headerCovid__close').click(function () {
        $('.headerCovid').removeClass('active');
    });
    $('.headerCovid__icon').click(function () {
        $('.headerCovid').addClass('active');
    });
    $('.headerCovid__text').mouseleave(function () {
        $('.headerCovid').removeClass('active');
    });
    $('.footerCovid__close').click(function () {
        $('.footerCovid').removeClass('active');
    });
    $('.footerCovid__icon').click(function () {
        $('.footerCovid').addClass('active');
    });
    $('.footerCovid__text').mouseleave(function () {
        $('.footerCovid').removeClass('active');
    });

    $('.FormSend__close, .FormSend__closeBttn').click(function () {
        $('.FormSend').removeClass('active');
    });

    function formAnswer ( text ) {
        $('.FormSend__text').html(text);
        $('.FormSend').addClass('active');

    }
	/*
    $("form").submit(function() {
		console.log("data");
        var form = $(this);
        var error = false;
        form.find('.phone').each( function(){
            if ($(this).val() == '') {
                $(this).addClass("form_red");
                error = true; // ошибка
            }
        });
        $('input').click(function () {
            $(this).removeClass('form_red');
        });

        if (!error) {
            var data = form.serialize();
            var phone = $(this).find('input[name=phone]').val();
			var cm_id = $(this).find('input[name=cm_id]').val();
			var ip = $(this).find('input[name=ip]').val();
            $.ajax({
                type: "POST",
                url: "/zakaz.php",
                data: $(this).serialize(),
                beforeSend: function(data) {
					console.log("data2");
                    form.find('input[type="submit"]').attr('disabled', 'disabled');
                },
                success: function(data){
					console.log("data1");
                    if (data['error']) {
                        alert(data['error']);
                    } else {

						
						

						fetch("https://api.zoola.ru/send_order_plus", {
							method: "POST",
							body: JSON.stringify({
								phone: phone,
								ad_marker: cm_id,
								ip: ip,
							})
						}).then(res => res.json()).then(res => {
							if (res["ok"] === true) {
								try {
									ComagicWidget.sitePhoneCall({
									phone: phone
									})
								} catch (err) {
									console.log("No UIS")
							};
						}
						});						
						

						
						
                        $('form').trigger('reset');
                        formAnswer();
                    }
                },
                complete: function(data) {
                    form.find('input[type="submit"]').prop('disabled', false);
                }
            });
        }
        return false;
    });
    $('form').submit(function (event) {
        event.preventDefault();
        let form = new FormData(this);
        let revForm = $(this).hasClass('addReview__form');
        let data = {
            '_url': window.location.href,
            '_title': $('title').text(),
        };
        if ( revForm ) {
            data['РўРёРї'] = 'РћС‚Р·С‹РІ';
            data['РРјСЏ'] = form.get('name');
            data['РџРѕС‡С‚Р°'] = form.get('email');
            data['РўРµРєСЃС‚'] = form.get('text');
            data['РћС†РµРЅРєР°'] = form.get('rate');
            data['Р РµРєРѕРјРµРЅРґР°С†РёСЏ'] = (form.get('recomends') != null ? 'Р”Р°' : 'РќРµС‚');
        } else {
            data['РўРёРї'] = 'Р—Р°СЏРІРєР°';
            data['РўРµР»РµС„РѕРЅ'] = form.get('phone');

            let mangoTel = data['РўРµР»РµС„РѕРЅ'].replaceAll(' ', '').replaceAll('+', '').replaceAll('(', '').replaceAll(')', '').replaceAll('-', '');
            console.log(mangoTel);
            if ( typeof mgo != 'undefined' ) {

            }
        }

        $(this).trigger('reset');
        return false;
    });
*/
    $('.BigService').mouseenter(function () {
        $('.BigService.active').removeClass('active');
        $(this).addClass('active');
    });

    $(`.topLine__sale, .topLineForm__close, .topLineForm__closeBttn, .mobileTopLine__icon`).on( "click", function() {
        event.preventDefault();
        $(`.topLineForm`).toggleClass(`topLineForm--show`);
        return false;
    });

    let bMl = true;
    // let bMlTrue = ()=>{
    // 	bMl = true;
    // }

    $(document).mouseleave(function (e) {
        if ( bMl ) {
            // $(`.topLineForm`).toggleClass(`topLineForm--show`);
            bMl = false;
            setTimeout(()=>{
                bMl = true;
            }, 30000);
        }
        e.preventDefault();
    });

    $(`.mainMalfunctions__list--hidden span`).click(function () {
        $('.mainMalfunctions__list--hidden').removeClass('mainMalfunctions__list--hidden');
    });

    $(`.botPhone`).click(function(event){
        if ( $(`body`).width() > 650 ) {
            $(`.topLineForm`).toggleClass(`topLineForm--show`);
            event.preventDefault();
        }
    });



});
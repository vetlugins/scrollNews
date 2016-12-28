$(document).ready(function () {

    var selector = $('.slider');

    // Слайды текущий, следующий, предыдущий
    var current        = selector.find('.current'),
        next           = current.next('.slide'),
        prev           = current.prev('.slide');

    //Опредилим высоту текущего, следующего и предыдущего слайда
    var height_current = current.height(),
        height_next    = next.height(),
        height_prev    = prev.height();

    //Увеливаем скролл
    var height         = height_current + height_next;
    selector.after('<div style="height: '+height+'px"></div>');

    //Конец текущего и начало следующего слайда
    var top = height_current +10;

    window.onscroll = (function() {

        //Считаем высоту скролла
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;

        if(scrolled > 0){
            var  z_n = 9998 - 1,
                 z_p = 9998 + 1;
            next.css({'top': 0, 'z-index': z_n});
            prev.css({'z-index': z_p});
        }

        // Меняем класс .current если текущий класс вышел за пределы видимости окна и вешаем его на следующий слайд
        if(scrolled > height_current){
            next.css('top',top+'px'); // Не катаем слайд вместе с текущим
            current.removeClass('current');
            next.addClass('current');
        }

        //console.log(scrolled);

    });

})
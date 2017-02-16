var news = [],
    index = 0,
    inProgress = false,
    item_id;

$(document).ready(function () {

    var selector = $('.slider'),
        first = selector.find('.slide').eq(0);

    news[first.attr('id')] = {
        id:    first.attr('id'),
        title: first.find('h4').html(),
        text:  first.find('.text').html(),
        date:  first.find('h5').html(),
        url:   first.find('h5').attr('data-url')
    };

    index++;

    if(index == 1){
        getNews(index,function(){
            index++;
            appendNews(selector);

        });

    }

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height()-200 && !inProgress) {

            getNews(index,function(){
                index++;
                appendNews(selector);


            });

        }

        var current = selector.find('div.slide.current'),
            next = current.next('div.slide'),
            next_offset = next.offset(),
            scroll = $(this).scrollTop();


        if(typeof next_offset != 'undefined' && scroll > next_offset.top - 70){

            //next.css('opacity',1);

            selector.find('.current').removeClass('current');
            next.addClass('current');

            var id = selector.find('.current').attr('data-id');

            $('title').html(news[id].title);
            history.pushState(',',news[id].title,'?url='+news[id].url);


        }

        var prev = current.prev('div.slide'),
            prev_offset = prev.offset();

        if(typeof prev_offset != 'undefined' && scroll < prev_offset.top - 30){

            selector.find('.current').removeClass('current');
            prev.addClass('current');

            var id = selector.find('.current').attr('data-id');

            $('title').html(news[id].title);
            history.pushState(',',news[id].title,'?url='+news[id].url);

        }

        if(typeof prev_offset != 'undefined' && scroll == prev_offset.top){

            selector.find('.current').removeClass('current');
            prev.addClass('current');

            var id = selector.find('.current').attr('data-id');

            $('title').html(news[id].title);
            history.pushState(',',news[id].title,'?url='+news[id].url);

        }

    });

});

function getNews(index,callback) {

    $.ajax({
        url: 'php/news/get.php',
        method: 'POST',
        data: {"item": index},
        beforeSend: function () {
            inProgress = true;
        }
    }).done(function (data) {

        var obj = jQuery.parseJSON(data);

        if (obj.length > 0) {

            for (var i in obj) {

                var th = obj[i];
                news[th.id] = {
                    id: th.id,
                    title: th.title,
                    text: th.text,
                    date: th.date,
                    url: th.url
                };
                item_id = th.id;
            }
        }

        inProgress = false;

        if (callback) callback();


    });

}

function appendNews(selector){

    if(news.length > 0){

        item = news[item_id];

        selector.append(
            '<div class="slide p-1 mb-1" data-id="'+ item.id +'">' +
            '<h4>'+ item.title +'</h4>'+
            '<h5>'+ item.date +' </h5>'+
            '<div class="group-image mt-2 mb-2">'+
            '<div class="col-md-4 pl-0 image"><img src="images/foto2.png"></div>'+
            '<div class="col-md-4 pl-0 image"><img src="images/foto19.png"></div>'+
            '<div class="col-md-4 pl-0 image"><img src="images/1227635_drift-japan.jpg"></div>'+
            '<div class="clearfix"></div>'+
            '</div>'+
            '<div class="text">'+ item.text +'</div>'+
            '<div class="group-image mt-2 mb-2">'+
            '<div class="col-md-4 pl-0 image"><img src="images/foto2.png"></div>'+
            '<div class="col-md-4 pl-0 image"><img src="images/foto19.png"></div>'+
            '<div class="col-md-4 pl-0 image"><img src="images/1227635_drift-japan.jpg"></div>'+
            '<div class="clearfix"></div>'+
            '</div>'+
            '</div>'
        );


    }

}
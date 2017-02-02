var news = [],
    start = 1,
    index = start,
    inProgress = false,
    height = 0;

$(document).ready(function () {

    var selector = $('.slider');

    /*if(index == start){
        getNews(index, function(){

            index++;

            appendNews(selector);



        });

    }*/

     $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {


            getNews(index, function(){

                index++;

                //appendNews(selector);


            });

        }

    });

    window.onscroll = (function() {

        var scrolled = window.pageYOffset || document.documentElement.scrollTop;


        if(news.length > 0){

            item = news[index-1];

            selector.append(
                '<div class="slide p-1 mb-1" id="'+ item.id +'">' +
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

            var current = selector.find('.current'),
                next = current.next('div.slide'),
                hgt         = current.height() + next.height();

            height += current.height();

            if(scrolled >= current.height()) selector.after('<div style="height: '+hgt+'px"></div>');



             /* var scrolled = $(window).scrollTop();

             if(scrolled > height){

             selector.find('.current').removeClass('current');
             next.addClass('current');

             $('title').html(item.title);
             history.pushState(',',item.title,'?url='+item.url);
             }*/

            console.log(height + ' '+ scrolled);

            /*
             */

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
                news[index] = {
                    id: th.id,
                    title: th.title,
                    text: th.text,
                    date: th.date,
                    url: th.url
                };
            }
        }

        inProgress = false;

        if (callback) callback();


    });

}

function appendNews(selector){

    if(news.length > 0){

        item = news[index-1];

        selector.append(
            '<div class="slide p-1 mb-1" id="'+ item.id +'">' +
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


        var current = selector.find('.current'),
            next = current.next('div.slide'),
            hgt         = current.height() + next.height();

        height += current.height();

        selector.after('<div style="height: '+hgt+'px"></div>');

        var scrolled = $(window).scrollTop();

        if(scrolled > height){

            selector.find('.current').removeClass('current');
            next.addClass('current');

            $('title').html(item.title);
            history.pushState(',',item.title,'?url='+item.url);
        }

        console.log(height + ' '+ scrolled);

    }

}
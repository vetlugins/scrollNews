var selector = $('.slider'),
    item = 1,
    inProgress = false;

console.log($(window).scrollTop() + $(window).height());

$(window).scroll(function() {

    if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {

        $.ajax({
            url: 'php/news/get.php',
            method: 'POST',
            data: {"item" : item},
            beforeSend: function() {inProgress = true;}
        }).done(function(data){

            data = jQuery.parseJSON(data);

            if (data.length > 0 || data != 'null' ) {

                selector.append(data);

                var height = selector.find('div.current').height() + selector.find('div.current').next('div.slide').height();

                selector.after('<div style="height: '+height+'px"></div>');

                if($(window).scrollTop() + $(window).height() >= height) {
                    selector.find('div.slide.current').removeClass('current');
                    selector.find('div.slide').eq(item).addClass('current');
                }


                console.log($(window).scrollTop() + $(window).height());

                inProgress = false;

                item++;

            }

        });
    }


});

console.log(news);

if(news.length > 0){

    selector.append(
        '<div class="slide p-1 mb-1" id="'+ news[item].id +'">' +
        '<h4>'+ news[item].title +'</h4>'+
        '<div class="group-image mt-2 mb-2">'+
        '<div class="col-md-4 pl-0 image"><img src="images/foto2.png"></div>'+
        '<div class="col-md-4 pl-0 image"><img src="images/foto19.png"></div>'+
        '<div class="col-md-4 pl-0 image"><img src="images/1227635_drift-japan.jpg"></div>'+
        '<div class="clearfix"></div>'+
        '</div>'+
        '<div class="text">'+ news[item].text +'</div>'+
        '<div class="group-image mt-2 mb-2">'+
        '<div class="col-md-4 pl-0 image"><img src="images/foto2.png"></div>'+
        '<div class="col-md-4 pl-0 image"><img src="images/foto19.png"></div>'+
        '<div class="col-md-4 pl-0 image"><img src="images/1227635_drift-japan.jpg"></div>'+
        '<div class="clearfix"></div>'+
        '</div>'+
        '</div>'
    );

}

if($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !inProgress) {

    $.ajax({
        url: 'php/news/get.php',
        method: 'POST',
        data: {"item" : item},
        beforeSend: function() {inProgress = true;}
    }).done(function(data){

        var obj = $.parseJSON(data);

        if (obj.length > 0) {

            $.each(obj,function(){
                news[item] = {
                    id: this.id,
                    title: this.title,
                    text: this.text,
                    date: this.date
                };
            });



            /*var height = selector.find('div.current').height() + selector.find('div.current').next('div.slide').height();

             selector.after('<div style="height: '+height+'px"></div>');

             if($(window).scrollTop() + $(window).height() >= height) {
             selector.find('div.slide.current').removeClass('current');
             selector.find('div.slide').eq(item).addClass('current');
             }

             */



            inProgress = false;

            item++;

        }

    });
}


var selector = $('.slider'),
    item = 0;



getNewsAjax(item);

function getNewsAjax(item){
    $.ajax({
        url: '/php/news/get.php',
        type: 'POST',
        data: { item: item },
        success: function (data) {
            selector.append(data);
        }
    });
}

window.onscroll = (function() {

    var scrolled = window.pageYOffset || document.documentElement.scrollTop;



    console.log(scrolled)

});

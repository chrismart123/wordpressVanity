// DEV JS

var classCustomExist = document.getElementsByClassName(
    "page-template-page-custom"
);
// var ajxUrl = $('#hiddenUrl').value;
var ajxUrl = document.getElementById("hiddenUrl").value;
console.log("ajxUrl", ajxUrl);
if (classCustomExist.length > 0) {
    console.log("perform ajx");
    if (ajxUrl != undefined) {
        $('.loading').show();
        $('.carousel').hide();
        $.ajax({
            url: ajxUrl, // Since WP 2.8 ajaxurl is always defined and points to admin-ajax.php
		    dataType: "json",
            success:function(data) {
                $('.loading').hide();
                $('.carousel').empty()
                $('.carousel').show();
                $(data).each(
                    function() {
                        var title = this.title['rendered'];
                        var author = this._embedded.author[0].name;
                        var img = this._embedded["wp:featuredmedia"][0].source_url;
                        var link  = this.link 
                        $('.carousel').append('<div>'+
                            '<a href="'+link+'" target="_blank"> '+
                            '<div class="contentBox">'+
                                '<img src="'+img+'" class="img-fluid" alt="">'+
                                '<h2>'+title+'</h2>'+
                                '<span>'+author+'</span>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                        '</a>'+
                    '</div>'
                        )
                    }
                );
               
                setTimeout(() => {
                    $(".carousel").slick({
                        dots: false,
                        infinite: true,
                        speed: 500,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        arrows: true,
                        responsive: [
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 400,
                                settings: {
                                    arrows: false,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                },
                            },
                        ],
                    });
                }, 0);
                // This outputs the result of the ajax request (The Callback)
                // window.alert(data);
            },
            error: function(errorThrown){
                console.log('error',errorThrown);
                $('.loading').hide();
                $('.carousel').show();
                setTimeout(() => {
                    $('.carousel').append('<p>ERROR API</p>'); 
                },0);
               
            }
        });
    }
    
    
}





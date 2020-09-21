$(document).ready( function() {
    var items = [];
    $(".map-cases-menu").each(function(index, el){
        let new_elemente = document.createElement("a")
        $(new_elemente)
            .html( $(el).html() )
            .attr("href", `#${ $(el).attr("name") }`)    
            .addClass("item-menu")
            .click( function(ev){
                let target = $(this).attr("href").replace("#", "");
                let position = $( `a[name='${target}']` );
                $('html, body').animate({ scrollTop: position.offset().top }, 1000);
                return false;
            }); 
            
        

        items.push( new_elemente );        
    });

    $("#cases-menu-target").html(items);



    // $(".overflow-table-sm").customScrollbar();
    // https://github.com/mzubala/jquery-custom-scrollbar


    // function observer_scroll(self) {
    //     var todo = $(self).children("div").children("table").width()
    //     var tamanho_content = $(self).width()
    //     var posicao_scroll = $(self).scrollLeft()
    
    //     var p_distancia_scroll = Math.round( (posicao_scroll*100)/(todo-tamanho_content) )
    //     var tamanho_scroll = Math.round( ((todo-tamanho_content)*100)/todo )
    //     var distancia_scroll = (p_distancia_scroll*tamanho_scroll)/100
    
    //     var target_scroll = $(self).parent("div").children(".scroll-table-sm").children(".scroll")
    
    //     target_scroll.each( ( index, el) => {
    //         $(el).width( `${100 - tamanho_scroll}%`)
    //             .css({ marginLeft: `${distancia_scroll}%` })
    //     })

    // }

    // observer_scroll($(".overflow-table-sm"))

    // $(".overflow-table-sm").scroll( function(ev) {
    //     observer_scroll(this)
    // });


    // $(".scroll-table-sm > .scroll").click( function(){
    //     console.log(this)
    // });






});
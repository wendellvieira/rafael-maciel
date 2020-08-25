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



});
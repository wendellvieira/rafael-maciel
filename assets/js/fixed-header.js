$(document).ready( function() {
    var items = [];
    $(".map-cases-menu").each(function(index, el){
        let new_elemente = document.createElement("a")
        $(new_elemente)
            .html( $(el).html() )
            .attr("href", `#${ $(el).attr("name") }`)    
            .addClass("item-menu")    

        items.push( new_elemente )        
    });
    $("#cases-menu-target").html(items)
});
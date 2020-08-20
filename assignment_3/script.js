let url1 = "http://localhost/assi/text.json";

let url2 = "https://davids-restaurant.herokuapp.com/menu_items.json";

// let stateDiv = document.querySelector("#state");

// document.querySelector("#state").addEventListener("change",loadCity);

let menu_items=null;

$('document').ready(function(){

    $.get(url2, function(data, success){
             menu_items=data.menu_items;
             console.log(menu_items.length)
            
            createoptions();
    });
});
function createoptions(){
    let i=0;
    if(menu_items != null){
        for(const jsonobj of menu_items){
            console.log(i++, jsonobj.name);
            let opt = document.createElement("option");
            opt.textContent = jsonobj.name
            opt.value = i;
            document.querySelector('#menu').appendChild(opt);
        }
    }
}

document.querySelector("#menu").addEventListener("change",function loadCity(index) {
    let e=index.target.value-1;
    $("table").css("display", "block");
    if(menu_items != null){
        let data=menu_items[e];
        $(".sname").html(data.short_name);
        $(".name").html(data.name);
        $(".desc").html(data.description);
        $(".psmall").html(data.price_small);
        $(".plarge").html(data.price_large);
    }    
});


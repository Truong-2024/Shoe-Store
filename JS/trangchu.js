$(document).ready(function(){
    //Tìm tất cả các li có sub-menu và thêm vào nó class has-child
    $('.sub-menu').parent('li').addClass('has-child');
});
//Cuộn trang giữ menu 
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $("header").addClass('sticky');
        }
        else{
            $("header").removeClass('sticky');
         }
    });
});

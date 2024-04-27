$(document).ready(function(){
    //Tìm tất cả các li có sub-menu và thêm vào nó class has-child
    $('.sub-menu').parent('li').addClass('has-child');
});
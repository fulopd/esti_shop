$(document).ready(function(){
    
    $('.addcart').click(function(){
       let id = $(this).data('id'); 
        console.log(id);
        $.ajax({
            url : 'addtocart.php',
            method: 'POST',
            data: {id : id},
            success: function(){
                alert("Kosárhoz adva");
            },
            error: function(){
                alert("hiba");
            }
        });
    });
    
    
});//ready
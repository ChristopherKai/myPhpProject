    $(document).ready(function(){
    $('#search input[name="keyword"]').on('keyup',function(){
        var keyword=$('#search input[name=keyword]').val();
        if (keyword != '')
        {
    
        $.ajax({
            url:"test.php",
            type:"post",
            data:{
                keyword:keyword
            },
            success:function(response){
                
                $('#video').html(response);
            }
        }
            
        );
        }
    
    });
    
    });


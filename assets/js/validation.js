$(document).ready(function() {
    $.validator.addMethod("phoneNumber", function(value) {
        regEx = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})+$/;
            return regEx.test(value);
    });
    $.validator.addMethod("fileTest", function(value) {
        regEx = /(gif|png|jpg|jpeg)/;
            return regEx.test(value);
    });    
    $('.validate').validate({
        rules:{
            firstname:{
                required:true
            },
            lastname:{
                required:true
            },
            username:{
                required:true
            },
            email:{
                required:true
            },
            password:{
                required:true
            },
            phone:{
                phoneNumber:true,
                required:true,
                maxlength:11
            },
            birthday:{
                required:true
            },
            avatar:{
                fileTest:true,
                required:true
            },
            role:{
                required:true
            }
        },
        messages:{
            firstname:{
                required:"Required"
            },
            lastname:{
                required:"Required"
            },
            username:{
                required:"Required"
            },
            email:{
                required:"Required"
            },
            password:{
                required:"Required"
            },
            phone:{
                phoneNumber:'Please enter correct phone number',
                required:"Required"
            },
            birthday:{
                required:"Required"
            },
            avatar:{
                fileTest:'Please select image file',
                required:"Required"
            },
            role:{
                required:"Required"
            }
        }
    });
});
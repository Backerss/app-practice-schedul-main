

//check register
$(document).ready(function () {


    //when click reg-submit button
    $('#reg-submit').click(function () {
        
            var full_name = $('[name=full_name]').val();
            var id_student = $('[name=id_student]').val();
            var email = $('[name=user_email]').val();
            var tel = $('[name=user_tel]').val(); 
            var birthday = $('[name=user_birthday]').val();
            var sex = $('[name=user_sex]').val();
            var password = $('[name=user_password]').val();
            var password_confirmation = $('[name=user_confirm_password]').val();


            if(full_name == "" || id_student == "" || email == "" || tel == "" || birthday == "" || sex == "" || password == "" || password_confirmation == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all fields!',
                });
                return false;
            }

            if(password != password_confirmation){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password and Confirm Password does not match!',
                });
                return false;
            }


            $.ajax({
                
                url: '../inc/auth/check_register.php',
                method: 'POST',
                data: {
                    full_name: full_name,
                    id_student: id_student,
                    email: email,
                    tel: tel,
                    birthday: birthday,
                    sex: sex,
                    password: password,
                },
                success: function (data) {
                    if(data == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Registration Successful!',
                            comfirmButtonText: 'Ok'
                        }).then(function () {
                            window.location = '../index.php';
                        });
                        
                    }else{
                        console.log(data);
                    }
                }


            })
        
    });


});
//check register


//check login
$(document).ready(function () {


    $('#submit_login').click(function () {


        var id_student = $('[name=id_student]').val();
        var password = $('[name=password]').val();



        if(id_student == '' || password == ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill all fields!',
            });
            return false;
        }



        $.ajax({
            url: 'inc/auth/check_login.php',
            method: 'POST',
            data: {
                id_student: id_student,
                password: password
            },
            success: function (data) {
                if(data == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Login Successful!',
                        comfirmButtonText: 'Ok'
                    }).then(function () {
                        window.location = './page/home.php';
                    });
                    
                }else if(data == "not found"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'User not found!',
                    });
                }else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'none',
                    });
                }
            }
        })
    });


});

//check login


//check register
$(document).ready(function () {


    //when click reg-submit button
    $('#reg-submit').click(function () {
        
            var full_name = $('[name=full_name]').val();
            var email = $('[name=email]').val();
            var password = $('[name=password]').val();
            var password_confirmation = $('[name=password_confirmation]').val();
            var id_student = $('[name=id_student]').val();
            var sex = $('[name=flexRadioDefault]:checked').val();
            var birth_date = $('[name=birthday]').val();

            console.log(sex);

            if(full_name == '' || email == '' || password == '' || password_confirmation == '' || birth_date == ""){
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
                    email: email,
                    password: password,
                    sex: sex,
                    id_student: id_student,
                    birth_date: birth_date
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
                    
                }else{
                    console.log(data);
                }
            }
        })
    });


});

//check login
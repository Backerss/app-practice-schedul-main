

//
$(document).ready(function () {


    // Function to update time
    function updateTime() {
        var d = new Date();
        var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        var date = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate();

        $('#_gettime').text(time);
    }

    // Initial update
    updateTime();

    // Update time every second (1000 milliseconds)
    setInterval(updateTime, 1000);

});
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


//add - schedule
$(document).ready(function () {

    $('#add-schedule').click(function () {

        var date_start = $('[name=date_start]').val();
        var time_start = $('[name=time_start]').val();
        var time_end = $('[name=time_end]').val();
        var s_deteil = $('[name=s_deteil]').val();
        var s_note = $('[name=s_note]').val();

        if(date_start == "" || time_start == "" || time_end == "" || s_deteil == "" || s_note == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill all fields!',
            });
            return false;
        }


        //get time now
        var d = new Date();
        var time_now = d.getHours() + ":" + d.getMinutes();
        var date_now = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate();


        //split date
        var date_start_split = date_start.split("-");
        
        if(date_start_split[0] < d.getFullYear()){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select date again!',
            });
            return false;
        }
        else if(date_start_split[0] == d.getFullYear() && date_start_split[1] < (d.getMonth() + 1)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select date again!',
            });
            return false;
        }
        else if(date_start_split[0] == d.getFullYear() && date_start_split[1] == (d.getMonth() + 1) && date_start_split[2] < d.getDate()){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select date again!',
            });
            return false;
        }

        if(date_start == date_now && time_start < time_now){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select time again!',
            });

            console.log("DATE" + date_start + " " + date_now + " " + time_start + " " + time_now);
            return false;
        }
        else if(date_start != date_now && time_start > time_end){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select time again!',
            });
            console.log("TIME" + date_start + " " + date_now + " " + time_start + " " + time_now);
            return false;
        }



        $.ajax({
            url: '../../inc/auth/schedule_system.php',
            method: 'POST',
            data: {
                type: 'add',
                date_start: date_start,
                time_start: time_start,
                time_end: time_end,
                s_deteil: s_deteil,
                s_note: s_note
            },
            success: function (data) {
                if(data == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Add Schedule Successful!',
                        comfirmButtonText: 'Ok'
                    }).then(function () {
                        //window.location = '../page/home.php';
                    });
                    
                }else if(data == "date and time have in database")
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Date and Time have in database!',
                    });
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'none',
                    });

                    console.log(data);
                }
            }
        });





    });


});

//view - schedule
$(document).ready(function () {


    $(this).on('click', '.card', function () {

       //check data-bs-toggle="modal"
        var data_bs_toggle = $(this).attr('data-bs-target');

        if(data_bs_toggle == "#card-view-s"){

            //card-title 
            var card_title = $(this).find('.card-title').text();
            $.ajax({
                url: '../inc/auth/schedule_system.php',
                method: 'POST',
                data: {
                    type: 'view',
                    name: card_title
                },
                success: function (data) {
                    
                    var data = JSON.parse(data);

                    //set S_time - S_endtime
                    var time = data.S_time + " - " + data.S_endtime;

                    
                    
                    $('[name=s_name]').text(data.S_deteil);
                    $('[name=s_date]').text(data.S_date);
                    $('[name=s_time]').text(data.S_time + " - " + data.S_endtime);
                    $('[name=s_note]').text(data.S_note);
                }
            });

        }
    
    });

});

//when file-upload complete
$(document).ready(function () {

    $('#file-upload').on('change', function() {
        var file = this.files[0];
        var fileType = file["type"];
        var img_url;

        if(fileType == "image/jpeg" || fileType == "image/png"){
            var reader = new FileReader();
            reader.onload = function () {
                img_url = reader.result;
                $('#img-preview').attr('src', img_url);
            }
            reader.readAsDataURL(file);
        }

        //size file > 2MB
        if(file.size > 5000000){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'File size is too large!',
            });
            return false;
        }


        reader.onloadend = function () {
            var tempImg = new Image();
            tempImg.src = reader.result;
            tempImg.onload = function () {
                var MAX_WIDTH = 200;
                var MAX_HEIGHT = 200;
                var tempW = tempImg.width;
                var tempH = tempImg.height;
                if (tempW > tempH) {
                    if (tempW > MAX_WIDTH) {
                        tempH *= MAX_WIDTH / tempW;
                        tempW = MAX_WIDTH;
                    }
                } else {
                    if (tempH > MAX_HEIGHT) {
                        tempW *= MAX_HEIGHT / tempH;
                        tempH = MAX_HEIGHT;
                    }
                }

                var canvas = document.createElement('canvas');
                canvas.width = tempW;
                canvas.height = tempH;
                var ctx = canvas.getContext("2d");
                ctx.drawImage(this, 0, 0, tempW, tempH);
                var dataURL = canvas.toDataURL("image/png");
                $("#pro-file-ch").attr("src", dataURL);

                


                $.ajax({
                    url: '../inc/auth/upload_profile.php',
                    method: 'POST',
                    data: {
                        img: dataURL
                    },
                    success: function (data) {
                        if(data == true){
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Upload Successful!',
                            })
                            
                        }else
                        {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'none',
                            });
        
                            console.log(data);
                        }
                    }
                });

            }
        }


        



    });

});
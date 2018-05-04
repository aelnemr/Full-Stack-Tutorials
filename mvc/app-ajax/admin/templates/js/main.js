$(function () {
    /*$(".del").click(function () {
        var id = $(this).attr("user-id");
        $.ajax({
            url:"http://localhost:9000/admin/ajax/user.php?del=" + id,
            success:function (data) {
                alert(data);
                getAllUsers();
            }
        });
    });*/
    getAllUsers();
});

function getAllUsers() {
    $.ajax({
        url:"http://localhost:9000/admin/ajax/user.php",
        type:"POST",
        data:{getAll:""},
        success:function (pageCode) {
            $("#users-data").html(pageCode);
        }
    });
}


$(document).on("click", ".del", function () {
    var id = $(this).attr("user-id");
    $.ajax({
        url:"http://localhost:9000/admin/ajax/user.php",
        type: "POST",
        data:{del:id},
        success:function (result) {
            alert(result);
            getAllUsers();
        }
    });
});

/** ********************************************
 * Courses
 *********************************************
 */

$("#form-course").submit(function (e) {

    var formData = new FormData(this);

    $.ajax({
        url: "http://localhost:9000/admin/ajax/courses.php",
        type: "POST",
        data:formData,
        processData: false,
        contentType: false,
        success:function (returnData) {
            alert(returnData);
        }
    });

    e.preventDefault();// not reload
});

$(document).on("click", ".btn-del", function () {
    var id = $(this).attr("course-id");

    $.ajax({
        url: "http://localhost:9000/admin/ajax/courses.php",
        type: "POST",
        data: {edit:id},
        success:function (returnData) {

            var course = JSON.parse(returnData); // from json to js object

            $("input#name").val(course.name);
            $("input#course_id").val(course.id);
            $("select#user_id option[value="+ course.user_id +"]").attr("selected", "selected");
            // $("input#user_id").val(course.user_id);

        }
    });

});

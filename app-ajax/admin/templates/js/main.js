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
})

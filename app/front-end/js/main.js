$(document).on("click", "#create", function () {
    var form = document.querySelectorAll(".input");
    var query = [];
    for (var index in form) {
        if (index < form.length) {
            if (form[index].value !== "") {
                form[index].classList.remove("not-valid");
                query.push({col: form[index].name, value: form[index].value});
            } else {
                form[index].classList.add("not-valid");
            }
        }
    }
    var notValid = document.querySelectorAll(".not-valid");
    if (query.length > 0 && notValid.length === 0) {
        $.ajax({
            type: "POST",
            url: "employee/create",
            data: {"create": query},
            success: function (data) {
                $(".form-block").addClass("hidden");
                $("main").append("<div class='loader'></div>");
                setTimeout(function () {
                    var answer = JSON.parse(data);
                    $(".message").html(answer.message);
                    $(".form-block").removeClass("hidden");
                    $(".loader").remove();
                }, 1000);
            }
        })
    } else {
        console.log("query does not exist");
    }
});

$(document).on("click", ".menu-item", function () {
    var action = $(this).data('action');
    $.ajax({
        type: "GET",
        url: "employee",
        data: {action: action},
        response: "html",
        success: function (data) {
            $("main").html("<div class='loader'></div>");
            setTimeout(function () {
                $(".loader").remove();
                var formBlock = $(data).find(".form-block");
                $("main").html(formBlock);
            }, 1000)
        }
    })
});

$(document).on("click", "#read", function () {
    var form = document.querySelectorAll(".input");
    var query = [];
    for (var index in form) {
        if (index < form.length) {
            if (form[index].value !== "") {
                query.push({col: form[index].name, value: form[index].value});
            }
        }
    }
    if (query.length > 0) {
        console.log(query);
        $.ajax({
            type: "POST",
            url: "employee/read",
            data: {"read": query},
            success: function (data) {
                $(".form-block").addClass("hidden");
                $("main").append("<div class='loader'></div>");
                setTimeout(function () {
                    // var answer = JSON.parse(data);
                    $(".result-block").html(data);
                    $(".form-block").removeClass("hidden");
                    $(".loader").remove();
                }, 1000);
            }
        })
    } else {
        $(".message").text("Хочаб одне поле маєбуты заповнене!")
    }
});

$(document).on("click", "#update", function () {
    var form = document.querySelectorAll(".input");
    var query = [];
    for (var index in form) {
        if (index < form.length) {
            if (form[index].value !== "") {
                query.push({col: form[index].name, value: form[index].value});
            }
        }
    }
    if (query.length > 0) {
        console.log(query);
        $.ajax({
            type: "POST",
            url: "employee/update",
            data: {"update": query},
            success: function (data) {
                $(".form-block").addClass("hidden");
                $("main").append("<div class='loader'></div>");
                setTimeout(function () {
                    // var answer = JSON.parse(data);
                    $(".result-block").html(data);
                    $(".form-block").removeClass("hidden");
                    $(".loader").remove();
                }, 1000);
            }
        })
    } else {
        $(".message").text("Хочаб одне поле має бути заповнене!")
    }
});
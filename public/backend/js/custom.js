jQuery(document).ready(function () {
    showData();
    function showData() {
        $.ajax({
            url: "catshow",
            type: "GET",
            dataType: "json",
            success: function (result) {
                var sl = 1;
                jQuery(".tbody").html("");
                $.each(result.data, function (key, item) {
                    if (item.status == "1") {
                        var status =
                            '<span class="badge badge-info">Active</span>';
                    } else {
                        var status =
                            '<span class="badge badge-danger">Inactive</span>';
                    }
                    jQuery(".tbody").append(
                        "<tr>\
              <td>" +
                            sl +
                            "</td>\
              <td>" +
                            item.name +
                            "</td>\
              <td>" +
                            item.des +
                            "</td>\
              <td>" +
                            item.tag +
                            "</td>\
              <td>" +
                            status +
                            '</td>\
              <td>\
              <button type="button" value="' +
                            item.id +
                            '" data-target="#catEditModal" data-toggle="modal" class="catedit btn btn-sm btn-info"><i class="fa fa-edit"></i></button>\
                <button type="button" value="' +
                            item.id +
                            '" data-target="#catDelModal" data-toggle="modal" class="catedit btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>\
                </td>\
            </tr>'
                    );
                    sl++;
                });
            },
        });
    }

    //   Category Edit
    jQuery(document).on("click", ".catedit", function (e) {
        e.preventDefault();
        var catId = jQuery(this).val();

        $.ajax({
            url: "catedit/" + catId,
            type: "GET",
            dataType: "json",
            success: function (result) {
                if (result.error == "400") {
                    jQuery(".msg").append(
                        '<div class="alert alert-danger">' +
                            result.error +
                            "</div>"
                    );
                } else {
                    jQuery("#categoryId").val(result.data.id);
                    jQuery("#name").val(result.data.name);
                    jQuery("#des").val(result.data.des);
                    jQuery("#tag").val(result.data.tag);
                    jQuery("#stsVal").val(result.data.status);
                    jQuery("#stsVal").text(result.data.status);
                    showData();
                }
            },
        });
    });

    // Category Update

    jQuery(document).on("click", ".updateCategory", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var catId1 = jQuery("#categoryId").val();

        var name1 = jQuery("#name").val();
        var des1 = jQuery("#des").val();
        var tag1 = jQuery("#tag").val();
        var status1 = jQuery("#status").val();

        $.ajax({
            url: "update/" + catId1,
            type: "POST",
            dataType: "json",
            data: {
                catId: catId1,
                name: name1,
                des: des1,
                tag: tag1,
                status: status1,
            },
            success: function (result) {
                console.log(result.message);
                if (result.error == "400") {
                    jQuery(".updateMsg").append(
                        '<div class="alert alert-danger">' +
                            result.error +
                            "</div>"
                    );
                } else {
                    jQuery(".msg").append(
                        '<div class="alert alert-success">' +
                            result.message +
                            "</div>"
                    );
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#catEditModal").modal("hide");
                    jQuery("#catEditModal").find("input").val("");
                    jQuery("#catEditModal").find("textare").val("");
                    showData();
                }
            },
        });
    });

    // Add Category

    jQuery(".addCategory").click(function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var name = jQuery(".name").val();
        var des = jQuery(".des").val();
        var tag = jQuery(".tag").val();
        var status = jQuery(".status").val();

        $.ajax({
            url: "catstore",
            type: "POST",
            dataType: "json",
            data: {
                name: name,
                des: des,
                tag: tag,
                status: status,
            },
            success: function (result) {
                if (result.status == "faild") {
                    jQuery(".nameError").text(result.errors.name);
                    jQuery(".desError").text(result.errors.des);
                    jQuery(".tagError").text(result.errors.tag);
                } else {
                    jQuery(".msg").append(
                        '<div class="alert alert-success">' +
                            result.message +
                            "</div>"
                    );
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#addCategory").modal("hide");
                    jQuery("#addCategory").find("input").val("");
                    jQuery("#addCategory").find("textare").val("");
                    showData();
                }
            },
        });
    });

    // Delete Category

    jQuery(document).on("click", ".delCategory", function (e) {
        e.preventDefault();
        var catId2 = jQuery("#categoryId").val();

        $.ajax({
            url: "catdelete/" + catId2,
            type: "GET",
            dataType: "json",
            success: function (result) {
                console.log(result.message);
                if (result.error == "400") {
                    jQuery(".modalMsg").append(
                        '<div class="alert alert-danger">' +
                            result.error +
                            "</div>"
                    );
                } else {
                    jQuery(".msg").append(
                        '<div class="alert alert-success">' +
                            result.message +
                            "</div>"
                    );
                    jQuery(".msg").fadeOut(5000);
                    jQuery("#catDelModal").modal("hide");
                    jQuery("#catDelModal").find("input").val("");
                    jQuery("#catDelModal").find("textare").val("");
                    showData();
                }
            },
        });
    });
});

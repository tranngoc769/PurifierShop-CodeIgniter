try {

    Dropzone.autoDiscover = false;
} catch (error) {

}
var dropzone;
$(document).ready(function() {
    console.log("ready");
    try {
        dropzone = new Dropzone("#dropzone", {
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            dictRemoveFile: "Loại bỏ"
        });
    } catch (error) {

    }
    console.log(dropzone)
        // $(".note-editable")[0].innerHTML
    $("#addProperty").on("click", function() {
        $('#thongsoTable tr:last').after(` 
            <tr tag="prop">
                <td>
                    <input class="form-control form-control-sm" type="text" placeholder="Tên thuộc tính">
                </td>
                <td>
                    <input class="form-control form-control-sm" type="text" placeholder="Thông số">
                </td>
                <td>
                    <div class="custom-control mb-3">
                        <input type="checkbox" checked>
                        <label for="customCheck-outlinecolor2">Active</label>
                    </div>
                </td>
            </tr>
        `);
    })
    $("#save_params").on("click", function() {
        var list_div = $("div[tag='keys']");
        var formData = new FormData()
        formData.append('totalkeys', list_div.length)
        for (let index = 0; index < list_div.length; index++) {
            const element = list_div[index];
            k_id = element.children[0].value
            k_text = element.children[1].value
            formData.append('keys_' + index, k_id)
            formData.append('val_' + index, k_text)
        }
        var settings = {
            url: "params_update",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Cập nhật tham số", "Cập nhật tham số không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Cập nhật tham số", "Cập nhật tham số không thành công " + dt.msg, "erro");
                } else {
                    swal("Cập nhật tham số", "Cập nhật tham số thành công", "success");
                    location.reload();
                }
            });
    })

    $("#save_product").on("click", function(e) {
        e.preventDefault();
        let name = $("#p_name").val();
        let price = $("#p_price").val();
        let p_saleAmount = $("#p_saleAmount").val();
        let p_isSale = $("#p_isSale").val();
        let category = $("#p_category").val();
        let full_description = $(".note-editable")[0].innerHTML;
        // 
        let short_description = "";
        let list_prop = $("#thongsoTable tr[tag='prop']")
        if (name == "") {
            swal("Thêm sản phẩm", "Điền tên sản phẩm", "error");
            return;
        }
        if (price == "") {
            swal("Thêm sản phẩm", "Điền giá sản phẩm", "error");
            return;
        }
        for (let index = 0; index < list_prop.length; index++) {
            const prop = list_prop[index];
            let list_td = prop.getElementsByTagName("td");
            let prop_name = list_td[0].getElementsByTagName("input")[0].value;
            let prop_des = list_td[1].getElementsByTagName("input")[0].value;
            let prop_active = list_td[2].getElementsByTagName("input")[0].checked
            if (prop_active == true) {
                if (prop_name != "" && prop_des != "") {
                    short_description += `"${prop_name.replace("|", ",").replace(":", "")}":"${prop_des.replace("|", ",").replace(":", "")}"|`
                }
            }
        }
        if (short_description.length > 0) {
            short_description = short_description.slice(0, -1)
        }
        if (list_prop.length == 0 || short_description == "") {
            swal("Thêm sản phẩm", "Ít nhất một thuộc tính", "error");
            return;
        }
        let file_arr = dropzone.files;
        if (file_arr.length == 0) {
            swal("Thêm sản phẩm", "Vui lòng chọn ít nhất 1 hình ảnh", "error");
            return;
        }
        if (full_description == "") {
            swal("Thêm sản phẩm", "Soạn mô tả", "error");
            return;
        }
        full_description = full_description.replace(`\\"`, `"`);
        full_description = full_description.replace(`\\"`, `"`);
        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("name", name);
        formData.append("saleAmount", p_saleAmount);
        formData.append("isSale", p_isSale);
        formData.append("price", price);
        formData.append("category", category);
        formData.append("short", short_description);
        formData.append("full", full_description);
        for (let index = 0; index < file_arr.length; index++) {
            const element = file_arr[index];
            formData.append("file" + index, element);
        }
        var settings = {
            url: "add",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Thêm sản phẩm", "Thêm sản phẩm không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Thêm sản phẩm", "Thêm sản phẩm không thành công " + dt.msg, "erro");
                } else {
                    swal("Thêm sản phẩm", "Thêm sản phẩm thành công", "success");
                    location.reload();
                }
            });
    })

    $("#update_product").on("click", function(e) {
        e.preventDefault();
        let id = $("#p_id").val();
        let p_saleAmount = $("#p_saleAmount").val();
        let p_isSale = $("#p_isSale").val();
        let name = $("#p_name").val();
        let price = $("#p_price").val();
        let category = $("#p_category").val();
        let full_description = $(".note-editable")[0].innerHTML;
        // 
        let short_description = "";
        let list_prop = $("#thongsoTable tr[tag='prop']")
        if (name == "") {
            swal("Thêm sản phẩm", "Điền tên sản phẩm", "error");
            return;
        }
        if (price == "") {
            swal("Thêm sản phẩm", "Điền giá sản phẩm", "error");
            return;
        }
        for (let index = 0; index < list_prop.length; index++) {
            const prop = list_prop[index];
            let list_td = prop.getElementsByTagName("td");
            let prop_name = list_td[0].getElementsByTagName("input")[0].value;
            let prop_des = list_td[1].getElementsByTagName("input")[0].value;
            let prop_active = list_td[2].getElementsByTagName("input")[0].checked
            if (prop_active == true) {
                if (prop_name != "" && prop_des != "") {
                    short_description += `"${prop_name.replace("|", ",").replace(":", "")}":"${prop_des.replace("|", ",").replace(":", "")}"|`
                }
            }
        }
        if (short_description.length > 0) {
            short_description = short_description.slice(0, -1)
        }
        if (list_prop.length == 0 || short_description == "") {
            swal("Thêm sản phẩm", "Ít nhất một thuộc tính", "error");
            return;
        }

        if (full_description == "") {
            swal("Thêm sản phẩm", "Soạn mô tả", "error");
            return;
        }
        full_description = full_description.replace(`\\"`, `"`);
        full_description = full_description.replace(`\\"`, `"`);
        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("id", id);
        formData.append("name", name);
        formData.append("price", price);
        formData.append("saleAmount", p_saleAmount);
        formData.append("isSale", p_isSale);
        formData.append("category", category);
        formData.append("short", short_description);
        formData.append("full", full_description);
        var settings = {
            url: "update_product",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Thêm sản phẩm", "Thêm sản phẩm không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Thêm sản phẩm", "Thêm sản phẩm không thành công " + dt.msg, "erro");
                } else {
                    swal("Thêm sản phẩm", "Thêm sản phẩm thành công", "success");
                    location.reload();
                }
            });
    })
    $("#save_blog").on("click", function(e) {
        e.preventDefault();
        let title = $("#title").val();
        let file_arr = $("#images")[0].files;
        if (file_arr.length == 0) {
            swal("Thêm bài đăng", "Vui lòng chọn ít nhất 1 hình ảnh", "error");
            return;
        }
        if (title == "") {
            swal("Thêm bài đăng", "Điền title", "error");
            return;
        }
        let full_description = $(".note-editable")[0].innerHTML;
        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("title", title);
        formData.append("file", file_arr[0]);
        formData.append("detail", full_description);
        var settings = {
            url: "blog_add",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Thêm bài viết", "Thêm bài viết không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Thêm bài viết", "Thêm bài viết không thành công " + dt.msg, "erro");
                } else {
                    swal("Thêm bài viết", "Thêm bài viết thành công", "success");
                    location.reload();
                }
            });
    })
    $("#update_blog").on("click", function(e) {
        e.preventDefault();
        let id = $("#id").val();
        let title = $("#title").val();
        if (title == "") {
            swal("Cập nhật bài đăng", "Điền title", "error");
            return;
        }
        let full_description = $(".note-editable")[0].innerHTML;
        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("id", id);
        formData.append("title", title);
        formData.append("detail", full_description);
        var settings = {
            url: "blog_update",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Cập nhật bài viết", "Cập nhật bài viết không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Cập nhật bài viết", "Cập nhật bài viết không thành công " + dt.msg, "erro");
                } else {
                    swal("Cập nhật bài viết", "Cập nhật bài viết thành công", "success");
                    location.reload();
                }
            });
    })
    $("#category_select").on("change", function() {
        let val = $(this).val();
        $(`#top_select option`).attr('hidden', true)
        if (val == "") {
            $(`#top_select option`).attr('hidden', false)
        } else {
            $(`#top_select option[tag='${val}']`).attr('hidden', false)
        }
    })
    $("#save_top_product").on("click", function(e) {
        e.preventDefault();
        let vals = $("#top_select").val();
        if (vals.length == 0) {
            swal("Cập nhật sản phẩm nổi bật", "Chọn ít nhất một", "error");
            return;
        }
        var formData = new FormData();
        formData.append("list_product", vals);
        var settings = {
            url: "top_update",
            method: "POST",
            timeout: 0,
            processData: false,
            mimeType: "multipart/form-data",
            contentType: false,
            data: formData,
        };
        $.ajax(settings)
            .fail((result, status, error) => {
                swal("Cập nhật sản phẩm nổi bật", "Cập nhật sản phẩm nổi bật không thành công", "error");

            })
            .success((result, status, error) => {
                let dt = JSON.parse(result);
                if (dt.code != 200) {
                    swal("Cập nhật sản phẩm nổi bật", "Cập nhật sản phẩm nổi bật không thành công " + dt.msg, "erro");
                } else {
                    swal("Cập nhật sản phẩm nổi bật", "Cập nhật sản phẩm nổi bật thành công", "success");
                    location.reload();
                }
            });
    })
});
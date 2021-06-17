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
    $("#category_select").on("change", function() {
        let val = $(this).val();
        $(`#top_select option`).attr('hidden', true)
        if (val == "") {
            $(`#top_select option`).attr('hidden', false)
        } else {
            $(`#top_select option[tag='${val}']`).attr('hidden', false)
        }
    })
    $("#save_top_product").on("click", function() {
        let val = $("#top_select").val();
        console.log(val);
    })
    $("#save_product").on("click", function(e) {
        e.preventDefault();
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
                    short_description += `"${prop_name.replace("|", ",")}":"${prop_des.replace("|", ",")}"|`
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

        // full_description = full_description.replace("<b>", `<strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">`);
        // full_description = full_description.replace("</b>", `</span></strong>`);
        // full_description = full_description.replace("<h1>", `<strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">`);
        // full_description = full_description.replace("</h1>", `</span></strong>`);
        // full_description = full_description.replace("<h3>", `<strong><span style="font-size: 90%; color: #000000;">`);
        // full_description = full_description.replace("</h3>", `</span></strong>`);
        // full_description = full_description.replace("</b>", `</span></strong>`);


        // full_description = full_description.replace("<li>", `<li style="text-align: left;"><span style="font-size: 110%; color: #000000;">`);
        // full_description = full_description.replace("</li>", `</span></li>`);
        // full_description = full_description.replace("<img src=", `<img width="1000" height="563" sizes="(max-width: 1000px) 100vw, 1000px" class="alignnone wp-image-1359 size-full" src="`);
        full_description = full_description.replace(`\\"`, `"`);
        full_description = full_description.replace(`\\"`, `"`);

        //         "<p style=\"text-align: center; \"><b>xdasdasdassdasd</b></p><p>asdasdas&nbsp; <b>adasdadasd </b>s asd</p><p>213123123</p><ul><li>231231</li><li>1231231</li></ul><p><br></p>

        // <div class="product-info__slide">

        //         <div>
        //             <p style="text-align: center;"><strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">MÁY LỌC NƯỚC KAROFI KAQ-U95 AioTec</span></strong></p>
        //         </div>
        //         <h3><strong><span style="font-size: 90%; color: #000000;"><span id="bo-sung-khoang-chat-tot-qua-6-loi-chuc-nang">Bổ sung khoáng chất tốt qua 6 lõi chức năng</span></span></strong></h3>
        //         <ul>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Tạo nước Hydrogen hoạt tính bằng phương pháp tự nhiên, hỗ trợ ngăn ngừa lão hoá.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Bổ sung khoáng chất K, Na…cân bằng pH giúp nước ngon ngọt hơn.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Lõi lọc Tourmaline mới giúp hoạt hoá, chia nhỏ phân tử nước giúp nước dễ dàng thẩm thấu vào cơ thể khi cần bù nước nhanh.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Lõi lọc Nano bạc kháng khuẩn tốt nhất thị trường.</span></li>
        //         </ul>

        //         <p><span style="color: #000000;"><strong>MÁY THÍCH HỢP LẮP TRONG CÁC KHÔNG GIAN NHỎ GỌN</strong></span></p>

        //         <h3 class="product-info__slide-main__item slide-video" style="text-align: center;"><strong>NƯỚC UỐNG TRƯỢC TIẾP (TIÊU CHUẨN QCVN06-1 BỘ Y TẾ)</strong></h3>

        //         <p style="text-align: center;"><strong><span style="font-size: 150%; color: #00aae7;">PHỐI CẢNH VỊ TRÍ LẮP ĐẶT</span></strong></p>

        //         </div>

        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("name", name);
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
                    short_description += `"${prop_name.replace("|", ",")}":"${prop_des.replace("|", ",")}"|`
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

        // full_description = full_description.replace("<b>", `<strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">`);
        // full_description = full_description.replace("</b>", `</span></strong>`);
        // full_description = full_description.replace("<h1>", `<strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">`);
        // full_description = full_description.replace("</h1>", `</span></strong>`);
        // full_description = full_description.replace("<h3>", `<strong><span style="font-size: 90%; color: #000000;">`);
        // full_description = full_description.replace("</h3>", `</span></strong>`);
        // full_description = full_description.replace("</b>", `</span></strong>`);


        // full_description = full_description.replace("<li>", `<li style="text-align: left;"><span style="font-size: 110%; color: #000000;">`);
        // full_description = full_description.replace("</li>", `</span></li>`);
        // full_description = full_description.replace("<img src=", `<img width="1000" height="563" sizes="(max-width: 1000px) 100vw, 1000px" class="alignnone wp-image-1359 size-full" src="`);
        full_description = full_description.replace(`\\"`, `"`);
        full_description = full_description.replace(`\\"`, `"`);

        //         "<p style=\"text-align: center; \"><b>xdasdasdassdasd</b></p><p>asdasdas&nbsp; <b>adasdadasd </b>s asd</p><p>213123123</p><ul><li>231231</li><li>1231231</li></ul><p><br></p>

        // <div class="product-info__slide">

        //         <div>
        //             <p style="text-align: center;"><strong style="color: #00aae7; font-size: 25.92px;"><span style="font-size: 25.92px;">MÁY LỌC NƯỚC KAROFI KAQ-U95 AioTec</span></strong></p>
        //         </div>
        //         <h3><strong><span style="font-size: 90%; color: #000000;"><span id="bo-sung-khoang-chat-tot-qua-6-loi-chuc-nang">Bổ sung khoáng chất tốt qua 6 lõi chức năng</span></span></strong></h3>
        //         <ul>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Tạo nước Hydrogen hoạt tính bằng phương pháp tự nhiên, hỗ trợ ngăn ngừa lão hoá.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Bổ sung khoáng chất K, Na…cân bằng pH giúp nước ngon ngọt hơn.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Lõi lọc Tourmaline mới giúp hoạt hoá, chia nhỏ phân tử nước giúp nước dễ dàng thẩm thấu vào cơ thể khi cần bù nước nhanh.</span></li>
        //             <li style="text-align: left;"><span style="font-size: 110%; color: #000000;">Lõi lọc Nano bạc kháng khuẩn tốt nhất thị trường.</span></li>
        //         </ul>

        //         <p><span style="color: #000000;"><strong>MÁY THÍCH HỢP LẮP TRONG CÁC KHÔNG GIAN NHỎ GỌN</strong></span></p>

        //         <h3 class="product-info__slide-main__item slide-video" style="text-align: center;"><strong>NƯỚC UỐNG TRƯỢC TIẾP (TIÊU CHUẨN QCVN06-1 BỘ Y TẾ)</strong></h3>

        //         <p style="text-align: center;"><strong><span style="font-size: 150%; color: #00aae7;">PHỐI CẢNH VỊ TRÍ LẮP ĐẶT</span></strong></p>

        //         </div>

        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("id", id);
        formData.append("name", name);
        formData.append("price", price);
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
        if (title == "") {
            swal("Thêm bài đăng", "Điền title", "error");
            return;
        }
        let full_description = $(".note-editable")[0].innerHTML;
        full_description = `<div class="product-info__slide">` + full_description + `</div>`
        var formData = new FormData();
        formData.append("title", title);
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
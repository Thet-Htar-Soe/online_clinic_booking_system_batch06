$("body").on("click", ".btn_remove_row", function () {
    if (confirm("Are you sure to delete?")) {
        $(this).closest("tr").remove();
        grand_total();
    }
});
$("body").on("keyup", ".price", function () {
    var price = Number($(this).val());
    var qty = Number($(this).closest("tr").find(".qty").val());
    $(this).closest("tr").find(".total").val(price * qty);
    grand_total();
});
$("body").on("keyup", ".qty", function () {
    var qty = Number($(this).val());
    var price = Number($(this).closest("tr").find(".price").val());
    $(this).closest("tr").find(".total").val(price * qty);
    grand_total();
});
$("tfoot").on("keyup", ".doctor_charges", function () {
    var doctor_charges = Number($(this).val());
    $(this).closest("tfoot").find(".total").val(doctor_charges);
    grand_total();
});
function grand_total() {
    var tot = 0;
    $(".total").each(function () {
        tot += Number($(this).val());
    });
    $("#grand_total").val(tot);
}
$("body").on("change", ".mySelect", function () {
    var text = $(this).find('option:selected').text();
    $(this).closest("tr").find(".product").text(text);
    var price = Number($(this).val());
    $(this).closest("tr").find(".price").val(price);
});

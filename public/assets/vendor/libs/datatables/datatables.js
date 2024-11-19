$(document).ready(function () {
    $("#table").DataTable({
        paging: true,
        searching: true,
        ordering: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Rechercher dans le tableau...",
            lengthMenu: "Afficher _MENU_ entrées",
            info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
            infoEmpty: "Aucune entrée à afficher",
            infoFiltered: "(filtré de _MAX_ total entrées au total)",
            zeroRecords: "Aucun résultat trouvé.",
            paginate: {
                previous: '<i class="ti ti-chevron-left ti-sm"></i>',
                next: '<i class="ti ti-chevron-right ti-sm"></i>',
            },
        },
        lengthMenu: [5, 10, 25, 50],
        pageLength: 10,
    });
});

// function initializeTables() {
//     new DataTable("#table"),
//         new DataTable("#scroll-vertical", {
//             scrollY: "210px",
//             scrollCollapse: !0,
//             paging: !1,
//         }),
//         new DataTable("#scroll-horizontal", { scrollX: !0 }),
//         new DataTable("#alternative-pagination", {
//             pagingType: "full_numbers",
//         }),
//         new DataTable("#fixed-header", { fixedHeader: !0 }),
//         new DataTable("#model-datatables", {
//             responsive: {
//                 details: {
//                     display: $.fn.dataTable.Responsive.display.modal({
//                         header: function (a) {
//                             a = a.data();
//                             return "Details for " + a[0] + " " + a[1];
//                         },
//                     }),
//                     renderer: $.fn.dataTable.Responsive.renderer.tableAll({
//                         tableClass: "table",
//                     }),
//                 },
//             },
//         }),
//         new DataTable("#buttons-datatables", {
//             dom: "Bfrtip",
//             buttons: ["copy", "csv", "excel", "print", "pdf"],
//         }),
//         new DataTable("#ajax-datatables", {
//             ajax: "assets/json/datatable.json",
//         });
//     var a = $("#add-rows").DataTable(),
//         e = 1;
//     $("#addRow").on("click", function () {
//         a.row
//             .add([
//                 e + ".1",
//                 e + ".2",
//                 e + ".3",
//                 e + ".4",
//                 e + ".5",
//                 e + ".6",
//                 e + ".7",
//                 e + ".8",
//                 e + ".9",
//                 e + ".10",
//                 e + ".11",
//                 e + ".12",
//             ])
//             .draw(!1),
//             e++;
//     }),
//         $("#addRow").trigger("click");
// }
// document.addEventListener("DOMContentLoaded", function () {
//     initializeTables();
// });

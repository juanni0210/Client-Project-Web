function main() {

    //PARALAX JQUERY SELECTOR
    $(this).paroller()
    /*--------------------------------------------*/




    //MODALS 
    //GENERAL COUNSELLING POPUP
    $(this).ready(function () {

        $("#gcBtn").click(function () {
            $("#gcModal").modal();
        });

        $("#vawBtn").click(function () {
            $("#vawModal").modal();
        });

        $("#eapBtn").click(function () {
            $("#eapModal").modal();
        });

        $("#parBtn").click(function () {
            $("#parModal").modal();
        });




        $("#cckBtn").click(function () {
            $("#cckModal").modal();
        });

        $("#wicBtn").click(function () {
            $("#wicModal").modal();
        });

        $("#mssaBtn").click(function () {
            $("#mssaModal").modal();
        });

        $("#ccBtn").click(function () {
            $("#ccModal").modal();
        });




        $("#scmBtn").click(function () {
            $("#scmModal").modal();
        });

        $("#tayBtn").click(function () {
            $("#tayModal").modal();
        });

        $("#bsBtn").click(function () {
            $("#bsModal").modal();
        });

        $("#urBtn").click(function () {
            $("#urModal").modal();
        });

        $("#ccbBtn").click(function () {
            $("#ccbModal").modal();
        });




    });
}
/*--------------------------------------------*/




$(document).ready(main);

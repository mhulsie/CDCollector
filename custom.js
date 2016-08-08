jQuery(document).ready(function ($) {
    getAll();
});

function getAll(){
    $.ajax({
        url:'get.php',
        data:'',
        dataType: '',
        success: function (result) {
            $("#collectionData").html(result);
        }
    });
}

function add() {
    //catch addform submit and handle with ajax
    var addrequestdata = $("#addForm").serialize();
    $.ajax({
        type: 'POST',
        url:'add.php',
        data: addrequestdata,
        success: function (result) {
            if(result === 'completed') {
                getAll();
            } else {
                alert('Something went wrong!');
            }
        }
    });
}
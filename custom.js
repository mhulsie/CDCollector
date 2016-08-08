/**
 * Created by Maarten on 6-8-2016.
 */
$(function () {
    getAll();
})

function getAll(){
    $.ajax({
        url:'get.php',
        data:'',
        dataType: '',
        success: function(html)
        {
            $("#collectionData").html(html);
        }
    });
}

function add(){
    //catch addform submit and handle with ajax
    var addrequestdata = $("#addForm").serialize();
    console.log(addrequestdata);
//     $.ajax({
//         type: 'POST',
//         url:'add.php',
//         data:addrequestdata,
//         success:function (data) {
//             console.log("Album has been added");
//         }
// });
}
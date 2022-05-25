var fileobj;


function upload_file(e){
    e.preventDefault();
    fileobj =e.dataTransfer.files[0];
    console.log(fileobj)

    // ajax_file_upload(fileobj);
}
function file_explorer(){
    // console.log(document.getElementById('browse_file'));
    document.getElementById('browse_file').click();
    document.getElementById('browse_file').onchange=function(){
        fileobj =document.getElementById('browse_file').files[0];
        // ajax_file_upload(fileobj);
        console.log(fileobj)

    };
}
function ajax_file_upload(fileobj){
    if(fileobj != undefined){

    }
}
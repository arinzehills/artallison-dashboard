window.onload=function(e){
    var dropArea=document.querySelector('.upload-container');
    var btn=document.getElementById('submit_contact_details');
    // var dropArea=document.getElementById('upload-container');
    console.log(btn)
    console.log(dropArea)
        dropArea.addEventListener("dragover", dragOver);
        dropArea.addEventListener("dragleave", dragLeave);
        dropArea.addEventListener("drop", (event)=>{
            event.preventDefault();
            dropItem(event)
        });

    
        function dragOver(){
            console.log('File is over drag area');
        }
        function dragLeave(){
            console.log('File is over drag area');
        }
        function dropItem(event){
          
            console.log('User dropped fileds');

        }
}
    // function init(){
        // console.log(dropArea)
        // //if user drag fileover drag area
        // dropArea.addEventListener('dragover',()=>{
        //     console.log('File is over drag area');
        // });
        
        
        // //if user leave dragged file from drag area
        // dropArea.addEventListener('dragleave',()=>{
        //     console.log('File is outside drag area');
        // });
    // }
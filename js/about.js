

function validate_about(){
    var biography=document.getElementById('biography')
    var statement=document.getElementById('statement')
    var form=document.getElementById('about_form')  
    var error=document.getElementById('error')
    // console.log(form)
        save_data()
    // form.addEventListener('submit',(e)=>{
   
        
    //     let messages=[]
    //     if(biography.value==='' 	|| biography.value===null){
    //         messages.push('biography is required')
    //     }
    //     if(statement.value==='' 	|| statement.value===null){
    //         messages.push('statement is required')
    //     }
    //     if(messages.length>0){
    //         e.preventDefault();
    //         error.innerText=messages.join(', ')
    //     }else{
    //         save_data();
    //     }
       
    // });
}

    function save_data(){
        var btn=document.getElementById('submit');
         console.log(btn);
      var form_element =document.getElementsByClassName('form_data');
      form_data=new FormData();

      for(var count=0; count<form_element.length; count++){
        form_data.append(form_element[count].name,form_element[count].value);
  
      }
      document.getElementById('submit').disabled=true;
     
      var ajax_request=new XMLHttpRequest();
  
      ajax_request.open('POST','./addabout.php');
  
      ajax_request.send(form_data);
  
      ajax_request.onreadystatechange=function(){
        if(ajax_request.readyState==4 && ajax_request.status==200){
          document.getElementById('submit').disabled=false;
        //   document.getElementById('about_form').reset();
            
          document.getElementById('message').innerHTML=ajax_request.responseText;
  
          setTimeout(function(){
          document.getElementById('message').innerHTML='';
  
          },2500)
        }   
      }
    }
  
  
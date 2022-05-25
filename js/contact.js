function save_contact_desc(){

    var btn=document.getElementById('submit_desc');
    console.log(btn)
  var form_element =document.getElementsByClassName('form_data');
  form_data=new FormData();
  for(var count=0; count<form_element.length; count++){
    form_data.append(form_element[count].name,form_element[count].value);
    document.getElementById('submit_desc').disabled=true;

    var ajax_request=new XMLHttpRequest();
    ajax_request.open('POST','./addcontactdesc.php');

    ajax_request.send(form_data);

    ajax_request.onreadystatechange=function(){
        if(ajax_request.readyState==4 && ajax_request.status==200){
          document.getElementById('submit_desc').disabled=false;
        //   document.getElementById('about_form').reset();
            
          document.getElementById('description_message').innerHTML=ajax_request.responseText;
    
        //   setTimeout(function(){
        //   document.getElementById('message').innerHTML='';
    
        //   },2500)
        }  
  }
}
}
function save_contact_details(){

    var btn=document.getElementById('submit_contact_details');
    console.log(btn)
  var form_element =document.getElementsByClassName('form_data');
  form_data=new FormData();
  for(var count=0; count<form_element.length; count++){
    form_data.append(form_element[count].name,form_element[count].value);
    document.getElementById('submit_contact_details').disabled=true;

    var ajax_request=new XMLHttpRequest();
    ajax_request.open('POST','./addcontact.php');

    ajax_request.send(form_data);

    ajax_request.onreadystatechange=function(){
        if(ajax_request.readyState==4 && ajax_request.status==200){
          document.getElementById('submit_contact_details').disabled=false;
        //   document.getElementById('about_form').reset();
            
          document.getElementById('contact_details_message').innerHTML=ajax_request.responseText;
    
        //   setTimeout(function(){
        //   document.getElementById('message').innerHTML='';
    
        //   },2500)
        }  
  }
}
}
function sendCalltouch(userName, userPhone) {
  try {
      var ct_site_id = '8112';
      var ct_data = {             
          fio: userName,
          phoneNumber: userPhone.replace(/[^0-9]/g,""),
          subject: 'Заявка с сайта',
          requestUrl: location.href,
          sessionId: window.ct('calltracking_params','a8b290ef').sessionId 
      };
      jQuery.ajax({  
          url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',      
          dataType: 'json',         
          type: 'POST',          
          data: ct_data
      });
      
      return true;
      
  } catch (error) {
  
      return false;
      
  }
}

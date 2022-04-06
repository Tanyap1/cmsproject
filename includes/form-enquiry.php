
<div id="success_message" class="alert alert-success" style="display:none"></div>

<form class="contact" id="enquiry">
      <h2 class="h2-contact">Contact</h2>
      <input type="text" placeholder="Name" id="name" name="name" class="full-half">
      <input type="email" placeholder="Email" id="email" name="email" class="full-half">
      <input type="text" placeholder="Subject" id="subject" name="subject">
      <textarea placeholder="Message" id="message" name="message"></textarea>
      <input type="submit" value="Send">
    </form>

<script>
(function($){

$('#enquiry').submit(function(event){

event.preventDefault();
var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

var form =$('#enquiry').serialize();

var formdata = new FormData;
formdata.append('action', 'enquiry');
formdata.append('enquiry' , form);
//we send the form and if success show "thank you..." if not error out.
$.ajax(endpoint, {
    type:'POST',
    data:formdata,
    processData:false,
    contentType:false,
    success: function(res){
//if success then show message 
        $('#enquiry').fadeOut(200);
        $('#success_message').text('thanks for your enquiry').show();
        $('#enquiry').trigger('reset');

        $('#enquiry').fadeIn(800);

    },
//if error
    error:function(error)
    {

    }
})

})

})(jQuery)
 </script>
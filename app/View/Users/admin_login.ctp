
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>

                <div class="panel-body">
                    <?php echo $this->Session->flash();?>
                    <?php echo $this->Form->create();?>
                        <fieldset>
                            <div class="form-group">
                                <?php echo $this->Form->input('username',array('class'=>"form-control", "placeholder"=>"Username", "autofocus"));?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input('password', array('type'=>'password',"class"=>"form-control", "placeholder"=>"Password"));?>
                            </div>
                        </fieldset>
                    <?php echo $this->Form->button('Login',array('class'=>'btn btn-success'));
                            
                    ?>
                     <?php echo $this->Html->link('register', array('controller'=>'users','action'=>'add'),array('escape'=>false))?>
                    <fb:login-button 
                      scope="public_profile,email"
                      onlogin="checkLoginState();">
                    </fb:login-button>
                    <div class="g-signin2" data-longtitle="true" data-onsuccess="Google_signIn" data-theme="light" data-width="200"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '962138180604741',
      cookie     : true,
      xfbml      : true,
      version    : '2.11'
    });
  };
      (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    function statusChangeCallback(response){
    if(response.status === 'connected'){
     buildApi();
      alert('Đăng nhập thành công: ');
    }else{
      console.log('Error: ');
    }
  };
   function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }
    function buildApi(){
      var result = '';
        FB.api('/me?fields=name,email', function(response){
            $.ajax({
            type  : 'POST',
            url   : '<?php echo $this->Html->url(array('controller'=>'users','action'=>'facebook')) ?>',
            data  :response,
            success : function (result){
              window.location.href = '<?php echo $this->Html->url(array('controller'=>'users','action'=>'list')) ?>';
              }
              });
        });
             }
</script>
<script type="text/javascript">
  
  
  function Google_signIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId());
  console.log('Name: ' + profile.getName());
  console.log('Email: ' + profile.getEmail());
  console.log(profile);
  //pass information to server to insert or update the user record
  update_user_data(profile);
}
  function update_user_data(response) 
{
    console.log(response);
      $.ajax({
            type: "POST",
            datatype: 'json',
            data: response,
            url: '<?php echo $this->Html->url(array('controller'=>'users','action'=>'google')) ;?>',
            success: function(response) {
             var obj = jQuery.parseJSON(response);
             console.log(obj);
              if(msg.error== 1)

               {
                alert('Something Went Wrong!');
               }

              alert('Đăng nhập thành công: ');
              // window.location.href = "<?php echo $this->Html->url(array('controller'=>'users','action'=>'list')) ?>";
            } 
      });
}

</script>    
<script src="https://apis.google.com/js/platform.js" async defer></script>
<?php require APPROOT . '/views/inc/header1.php';?>
<body>
<style>
        .error {
            border: 1.4px solid red;
            padding: 6px;
        }
        .success {
            border: 1.4px solid green;
            padding: 6px;
        }
        span {
            color: red;
            font-size: 13px;
        }
</style>

  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <?php flash2('register_danger');?>
        <h2>Login</h2>
        <p>Please fill in your credentials to log in</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post" id="form">
          <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control form-control-lg" id="email">
            <span  id="email_error"></span>
          </div>
          <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control form-control-lg" id="password">
            <span id="password_error"></span>
          </div>
          <div class="row">
            <div class="col">
              <input  type='submit' value="Login" id="btn" class="btn btn-success btn-block" >
            </div>

          </div>
        </form>

      </div>
    </div>
  </div>
 
  <script>
      // let btn = document.getElementById('btn')
let email = document.getElementById('email')
let password = document.getElementById('password')
let email_error = document.getElementById('email_error')
let password_error = document.getElementById('password_error')
let form = document.getElementById('form')

// const number = /^\d+.?\d*$/
form.addEventListener('submit' , e => {
  e.preventDefault()


    if(validateEmail(email , email_error) & validatePassword(password , password_error)) {
   
      form.submit()

    } 
  
})

function validateEmail(email ,email_error) {
    if(email.value=== '') {
        email_error.innerHTML = 'Email must be filled in'
       email.classList.add('error')
      email.classList.remove('success')
      return false;
    } else {
        email_error.innerHTML = ''
        email.classList.add('success')
        email.classList.remove('error')
        return true;
    }
}

function validatePassword(password , password_error) {
    if(password.value === '') {
        password_error.innerHTML = 'Password must be filled in'
        password.classList.add('error')
        password.classList.remove('success')
        return false;
    } else if(password.value.length >6){
      password_error.innerHTML = 'Password must be last than 6 caracteres'
        password.classList.add('error')
        password.classList.remove('success')
    }
    else {
        password_error.innerHTML = ''
        password.classList.add('success')
        password.classList.remove('error')
        return true;

    }
}
  </script>
</body>





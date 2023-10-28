<html>
    <head>

          <style>
       
            body{
              background-image: url(img/ko.jpg);
            background-size: cover;
            }
            .login{
            
              width: 40%;
              height: 300px;
              margin: 100px auto;
              border: 2px solid black;
              text-align: center;
              padding: 50px;
              box-shadow: 0 0 2px 2px orange;
            }.logins{
              margin-top: -20px;
            }
            .login input,.login button{
              margin-bottom: 20px;
              width: 60%;
              height: 30px;
              border-radius: 5px;
              border: 1px solid black;
            }
            .login button{
              margin: auto;
              display: flex;
              align-items: center;
              justify-content: center;
              height: 20px;
              width: 60%;
              padding: 20px;
              background-color: cornflowerblue;
              border-radius: 10px;
              font-size: 18px;
              text-align: center;
            }.login h2{
              font-size: 34px;
            }span{
              color: blueviolet;
            }h3{
              margin-top: -15px;
            } 
          </style>
        </head>
        <body>
          <?php 
          session_start();

if(isset($_COOKIE['key'])){
  $_POST['nama']==$_COOKIE['nama'];
  $_SESSION["login"]=true;
}

          if(isset($_SESSION["login"])){
            header("Location:index.php");
            exit;
          }

          if(isset($_POST["submit"])){
            //seleksi
            if($_POST["nama"]=="admin" && $_POST["password"]=="123"){
              //loncat
              $_SESSION ["login"]=true;
              setcookie('key',hash('sha256',$_POST['nama']),time()+60);
              header("Location:tambah.php");
              exit;
            }else{
              $error=true;
            }
          }
          ?>
 
 
          <div class="login">
            <div class="logins">
              <?php if(isset($error)) :?>
                <h3>Password Salah!!</h3>
                <?php endif;?>
            <h2>Login</h2>
            <form action="" method="post">
                <!-- <label for="email">Email</label> -->
              <input type="text" name="nama" id="text" placeholder="Name" autocomplete="off" required><br>
              <!-- <label for="pw">Password</label> -->
              <input type="password" name="password" id="pw" placeholder="Password" autocomplete="off" required><br>
              <button type="submit" name="submit">Login</button><br>
            </form>
          </div>
        </div>
        </body>
        </html>

      </div>
    </section>
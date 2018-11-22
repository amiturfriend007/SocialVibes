<html>
  <head>
    <title>Social Vibes</title>
  </head>
  <body>
    <form action="http://localhost:8080/SocialVibes/Server/authenticate.php" method="post">
      <table align="center" style="margin-top:50px;background-color: #AEC8EC;width:350px">
        <thead>
          <th colspan="2" align="center">
            <a href="http://localhost:8080/SocialVibes/Client/login.php"
              >LOGIN</a
            >/<a href="http://localhost:8080/SocialVibes/Client/SignUp.php"
              >SIGN UP</a
            >
          </th>
        </thead>
        <tr><td colspan="2" align="center" style="color: red">Invalid Credentials !</td></tr>
        <tr>
            <td colspan="2" align="center" style="color: white">Username<span style="color: black">*</span></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="email" name="username" required /></td>
          </tr>
        <tr>
          <td colspan="2" align="center" style="color: white">Password<span style="color: black">*</span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="text" name="password" required /></td>
        </tr>
        
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="submit" value="Login" style="background-color: 	#4272C4;"/>
          </td>
        </tr>
      </table>
    </form>
</html>

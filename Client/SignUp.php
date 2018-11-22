<html>
  <head>
    <title>Social Vibes</title>
  </head>
  <body>
    <form action="http://localhost:8080/SocialVibes/Server/insert.php" method="post">
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
        <tr>
            <td colspan="2" align="center" style="color: white">Email Id <span style="color: black">*</span></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="email" name="email" required /></td>
          </tr>
        <tr>
          <td colspan="2" align="center" style="color: white">First Name <span style="color: black">*</span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="text" name="firstname" required /></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="color: white">Last Name <span style="color: black">*</span></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="text" name="lastname" required /></td>
          </tr>
          <tr>
              <td colspan="2" align="center" style="color: white">D.O.B <span style="color: black">*</span></td></tr><tr>
              <td colspan="2" align="center"><input type="date" name="dob" required /></td>
            </tr>
            <tr><td colspan="2" align="center" style="color: white">Address <span style="color: black">*</span></td></tr>
            <tr>
                <td colspan="2" align="center" style="color: white">Line 1 <span style="color: black">*</span></td></tr><tr>
                <td colspan="2" align="center"><input type="text" name="line1" required /></td>
              </tr>
              <tr>
                  <td colspan="2" align="center" style="color: white">Line 2</td></tr>
                  <tr>
                  <td colspan="2" align="center"><input type="text" name="line2" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="color: white">CITY <span style="color: black">*</span></td></tr>
                    <tr>
                    <td colspan="2" align="center"><input type="text" name="city" /></td>
                  </tr>
                  <tr>
                      <td colspan="2" align="center" style="color: white">STATE <span style="color: black">*</span></td></tr>
                      <tr>
                      <td colspan="2" align="center"><input type="text" name="state" /></td>
                    </tr>
            <tr>
                <td colspan="2" align="center" style="color: white">Pin Code <span style="color: black">*</span></td></tr>
                <tr>
                <td colspan="2" align="center"><input type="number" name="pincode" minlength=9 required /></td>
              </tr>
              <tr>
                  <td colspan="2" align="center" style="color: white">Password <span style="color: black">*</span></td></tr><tr>
                  <td colspan="2" align="center"><input type="password" name="password" required /></td>
                </tr>
                <!-- <tr>
                    <td colspan="2" align="center" style="color: white">Confirm Password <span style="color: black">*</span></td></tr>
                    <tr>
                    <td colspan="2" align="center"><input type="password" name="cpassword" required /></td>
                  </tr> -->
              <tr><td style="color: yellow">Fields marked with <span style="color: black">*</span> are mandatory!</td></tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="submit" value="Register" style="background-color: 	#4272C4;"/>
          </td>
        </tr>
      </table>
    </form>
</html>

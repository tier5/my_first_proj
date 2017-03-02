<form action="/store" method="post">
{{csrf_field()}}
   <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"> <br><br>
    Email:
 <input type="text" name="email"> <br><br>
 Password:
  <input type="password" name="password"> <br><br>
  Confirm Password:
  <input type="password" name="confirmpassword"> <br><br>
<input type="submit" value="Submit">
  </fieldset>
</form>
<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
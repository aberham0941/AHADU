
<p><h1 align="center">Add Client</h1></p>
  <form method="post" action="addclient1.php">
     Name:
    <input type="text" name="lname" class="form-control" required="required" />
   
    last Name:
    <input type="text" name="fname" class="form-control" required="required"/>
   
    Meter Number:
    <input type="text" name="mi" class="form-control" required="required"/>
   SUBCITY:
  
  <title> sub city</title>
    <select id="subcity" name="subcity" placeholder="Enter your subcity" class="form-control input-md" >
   <option value=" ">subcity</option>
  <option value="kirkos">KIRKOS</option>
  <option value="ledeta">LEDETA</option>
  <option value="kolfe">KOLFE</option>
  <option value="yeka">YEKA</option>
  <option value="arada">ARADA</option>
  <option value="bole">BOLE</option>
  <option value="lafto">LAFTO</option> </select>
    houseno#:<input type="text" name="houseno"  class="form-control" required="required"/>
    First Meter Reading:
    <input type="text" name="meterReader" class="form-control" required="required"/>
    <br />
    <input type="submit" name="add" value="ADD"  class="btn btn-success form-control"/>
  
 

</form>


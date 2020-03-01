<!DOCTYPE html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <title>Sandwich Maker</title>

        <!-- Bootstrap CSS & Own style sheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="SandwichStyle.css">
    </head>



    <body>




        <div class="headerContainer">
            <img  src="sandwich.jpg" class="sandwich">

            <h1> Order your sandwich </h1>
            <form action="FormProgram.php" method="POST" >  

        </div>

        <!-------------------DETAILS--------------------> 

        <div class="container-sm">
            <h2>Your details</h2>

            <div class="formBlock"> 


                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="firstName">First Name</label>
                            <input  type="text" class="form-control" placeholder="Enter your first name"  name="firstName" id="firstName" value="" required autofocus="true" />          
                        </div>
                        <div class="col">
                            <label for=”lastName”>Last Name</label>
                            <input  type="text" class="form-control" placeholder="Enter your last name"  name="lastName" id="lastName" value="" required size="35" />
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input  type="email" class="form-control" placeholder="Enter your email address"  name="email" id="email" value="" required size="35" />          
                    <small id="email" class="form-text text-muted">
                        Your email must contain a valid @ symbol.
                    </small>

                </div>

            </div> 



            <!-------------------SANDWICH BUILDER---------------> 
            <h2>Choose your sandwich</h2>

            <div class="formBlock"> 
                <div class="form-group">
                    <label for="breadType">Select type of bread</label>
                    <select class="custom-select" name="breadType" id="breadType"  size="1">
                        <option value="Granary Bread">Granary Bread</option>
                        <option value="Ciabatta">Ciabatta</option>
                        <option value="White Loaf">White Loaf</option>
                        <option value="Wrap">Wrap</option>
                        <option value="Roll">Roll</option>
                    </select>
                    <small id="breadType" class="form-text text-muted">
                        Gluten free options are available. Please state requirements in comments box.
                    </small>
                </div></br>

                <div class="form-group">
                    <label for="Mayo">Mayo?  </label>                    </br>


                    <div class="form-check form-check-inline">
                        <input  class="form-check-input" type="radio"  name="mayo" id="mayo1" value="Yes" required /> 
                        <label  for="mayo1">Yes  </label></div>



                    <div class="form-check form-check-inline">
                        <input  class="form-check-input" type="radio"  name="mayo" id="mayo2" value="No" required />
                        <label  for="mayo2">No  </label></div>

                </div></br>




                <div class="form-group">
                    <label for="filling">Choose your fillings:</label></br>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Cheese">
                        <label class="form-check-label" for="filling">Cheese </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Ham">
                        <label class="form-check-label" for="filling">Ham </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Salad">
                        <label class="form-check-label" for="filling">Salad </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Egg">
                        <label class="form-check-label" for="filling">Egg </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Bacon">
                        <label class="form-check-label" for="filling">Bacon </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input name="filling[]" class="form-check-input" type="checkbox" id="filling" value="Cucumber">
                        <label class="form-check-label" for="filling">Cucumber </label>
                    </div>

                </div></br>


                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input name="toasted" type="checkbox" class="custom-control-input" id="toasted" value="Yes">
                        <label class="custom-control-label" for="toasted">Toasted?</label>
                    </div></div></br>



                <div class="form-group">
                    <label for="otherRequests">Any other requests?</label>
                    <textarea class="form-control" placeholder="Add your comments here..."  name="otherRequests" id="otherRequests" value=""  rows=”4” cols=”50”></textarea>     
                </div>

            </div>
            </br>


            <!-------------------SUBMIT---------------> 
            <button class="btn btn-primary"type=“submit” id=“submit” onclick=“alert(’Thanks!!’)”>Make my sandwich</button>
            </br>
            </br>
            </br>
            </br>


        </div>

    </form>










    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

<!--<div class="form-group">
               <label for="Toast">Toasted?</label>
               <input  type="radio"  name="toasted" id="toasted" value="Yes" required />   
               <input  type="radio"  name="toasted" id="toasted" value="No" required />
           </div></br>--->


 <!--Email: <input  type="email"   name="email" id="email" value="" required/>                

        Date of Birth: <input  type="date"   name="birthdate" id="birthdate" value="" />   

        Country: <input  type="text"   name="country" id="country" value="" />           

        Email preferences, do you want to opt in to email marketing?
        <input  type="radio"   name="preferences" id="preferencesField1" value="Yes" required/>     
        <input  type="radio"   name="preferences" id="preferencesField2" value="No" required/>

        <button type=“submit” id=“submit” onclick=“alert(’Thanks!!’)”>Submit</button>
        <!--<input  type="submit" value="OK" />--> 
</html>



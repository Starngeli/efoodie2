    </main>

    <footer class="container">
      <p>Copyright &copy; eFoodie</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script>
        var comment = 'wake up';
        var usersT = $.ajax({
            type: "post",
            method: "POST",
            data: {comment:comment},
            url: "phpscripts/countUsers.php",
            dataType: 'json',
            statusCode: {
                500: function () {
                    console.log('err');
                }
            }
        });
        usersT.done(function(response22){
            console.log('oooooooooooo',response22);
            document.getElementById('custT').innerHTML = response22;
        });


        var chefT = $.ajax({
            type: "post",
            method: "POST",
            data: {comment:comment},
            url: "phpscripts/recipeTotal.php",
            dataType: 'json',
            statusCode: {
                500: function () {
                    console.log('err');
                }
            }
        });
        chefT.done(function(response23){
            console.log('oooooooooooo',response23);
            document.getElementById('chefT').innerHTML = response23;
        });


        var beefT = $.ajax({
            type: "post",
            method: "POST",
            data: {comment:comment},
            url: "phpscripts/countRole.php",
            dataType: 'json',
            statusCode: {
                500: function () {
                    console.log('err');
                }
            }
        });
        beefT.done(function(response3){
            console.log('oooooooooooo',response3);
            document.getElementById('adminT').innerHTML = response3;
        });
    </script>
  </body>
</html>
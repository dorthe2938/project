@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create shoppinglist</div>
                            <div id="myDIV" class="header">
                                <h2>Shopping List</h2>
                                <input type="text" id="myInput" placeholder="Title...">
                                <span onclick="newElement()" class="addBtn">Add</span>
                            </div>
                            <form action='saveShoppingList' method="post">
                                <ul id="myUL"></ul>
                                <br>
                                <input class="btn delete-btn" type="submit" name="saveShoppingList" value="Save">
                            </form>

                            <script>


                      $( function() {
                              <?PHP
                        //CREATE CONNECTION
                        $con=mysqli_connect('87.118.68.154','c1dbu1','vwhgMY726M');
                        //select database
                        if(!mysqli_select_db($con,'c1db7')) {
                            echo "database not selected";
                        }
                        //select query
                        //select random question
                        $sql=   
                            "select name, id from `products`";
                        //execute sql query
                        $records= (mysqli_query($con,$sql));
                        $str = 'var availableTags = ['; 
                            while ($row=mysqli_fetch_array($records)) {

                                $str.='"'.$row['name']." ".$row['id'].'"'.",";

                            }
                            $str = substr($str,0,strlen($str)-1);
                            echo $str;

                            echo '];';
                    ?>
                        $( "#myInput" ).autocomplete({
                          source: availableTags
                        });
                      } );


                    // Click on a close button to hide the current list item
                    var close = document.getElementsByClassName("close");
                    var i;
                    for (i = 0; i < close.length; i++) {
                      close[i].onclick = function() {
                        var div = this.parentElement;
                        div.style.display = "none";
                      }
                    }

                    // Add a "checked" symbol when clicking on a list item
                    var list = document.querySelector('ul');
                    list.addEventListener('click', function(ev) {
                      if (ev.target.tagName === 'LI') {
                        ev.target.classList.toggle('checked');
                      }
                    }, false);

                    // Create a new list item when clicking on the "Add" button
                    function newElement() {
                      var li = document.createElement("li");
                      var inputValue = document.getElementById("myInput").value;
                      var t = document.createTextNode(inputValue);
                      li.appendChild(t);
                      if (inputValue === '') {
                        alert("You must write something!");
                      } else {
                        document.getElementById("myUL").appendChild(li);
                      }
                      document.getElementById("myInput").value = "";

                      var span = document.createElement("SPAN");
                      var txt = document.createTextNode("\u00D7");
                      span.className = "close";
                      span.appendChild(txt);
                      li.appendChild(span);

                      for (i = 0; i < close.length; i++) {
                        close[i].onclick = function() {
                          var div = this.parentElement;
                          div.style.display = "none";
                        }
                      }
                    }
                            </script>


                         <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FHashing%2FQuickTaTest%2Fviews%2FshoppingList%2FshoppingList.php&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></body>
            </div>
        </div>
    </div>
</div>
@endsection

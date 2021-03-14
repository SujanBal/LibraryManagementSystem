
    <!-- backlink to repo on GitHub, and affiliate link to Rackspace if you want to support the project -->
    <div class="footer" style="background-color: black;min-height:45px;width: 100%">
       <h3 style="padding:12px;color:white;font-size: 18px;">&copy; 2017 Herald College, Kathmandu</h3>
    </div>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>
</body>


    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("my");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_book");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
function search1() {
    document.getElementById("input1").style.display = "initial";
    document.getElementById("input2").style.display = "none";
    document.getElementById("input3").style.display = "none";
    document.getElementById("input4").style.display = "none";
    document.getElementById("input5").style.display = "none";
}
</script>

<script>
function search2() {
    document.getElementById("input1").style.display = "none";
    document.getElementById("input2").style.display = "initial";
    document.getElementById("input3").style.display = "none";
    document.getElementById("input4").style.display = "none";
    document.getElementById("input5").style.display = "none";
}
</script>
<script>
function search3() {
    document.getElementById("input1").style.display = "none";
    document.getElementById("input2").style.display = "none";
    document.getElementById("input3").style.display = "initial";
    document.getElementById("input4").style.display = "none";
    document.getElementById("input5").style.display = "none";
}
</script>
<script>
function search4() {
    document.getElementById("input1").style.display = "none";
    document.getElementById("input2").style.display = "none";
    document.getElementById("input3").style.display = "none";
    document.getElementById("input4").style.display = "initial";
    document.getElementById("input5").style.display = "none";
}
</script>
<script>
function search5() {
    document.getElementById("input1").style.display = "none";
    document.getElementById("input2").style.display = "none";
    document.getElementById("input3").style.display = "none";
    document.getElementById("input4").style.display = "none";
    document.getElementById("input5").style.display = "initial";
}
</script>
    <script>
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_student");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

  <script>
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_student");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 
  <script>
function myFunction3() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_student");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 <script>
function myFunction4() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_student");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 <script>
function myFunction5() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput5");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_student");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

 <script>
function myFunctionR() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("registration");
  filter = input.value.toUpperCase();
  table = document.getElementById("record_registration");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
    $(document).ready(function(){
      $("#selectall").click(function() {
    
    $(".second").prop("checked", $("#selectall").prop("checked"))
      })
    });
      
</script>

<script>
function del() {
    document.getElementById("confirmation").style.display = "initial";
    
}
</script>
<script>
function del1() {
    document.getElementById("confirmation1").style.display = "initial";
    
}
</script>
<script>
function del2() {
    document.getElementById("confirmation2").style.display = "initial";
    
}
</script>
<script>
function del3() {
    document.getElementById("confirmation3").style.display = "initial";
    
}
</script>
<script>
function cancel() {
    document.getElementById("confirmation").style.display = "none";
    
}
</script>
<script>
function cancel1() {
    document.getElementById("confirmation1").style.display = "none";
    
}
</script>
<script>
function cancel2() {
    document.getElementById("confirmation2").style.display = "none";
    
}
</script>
<script>
function cancel3() {
    document.getElementById("confirmation3").style.display = "none";
    
}
</script>
   
</html>

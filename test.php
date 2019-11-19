<!DOCTYPE html>

<html>
  <script>
  var xhttp = new XMLHttpRequest();
  //document.writeln("test");
  //document.getElementById("0-name").innerHTML = "toast";
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
      var toParse = this.responseText;

      toParse = JSON.parse(toParse);
      var toWrite = new Array();
      document.writeln(toParse.length);

      for(var i=0; i<toParse.length; i++){
        toWrite[i] = toParse[i].split("\t");
      }
      document.writeln(toWrite.length);
      document.getElementById("0-name").innerHTML = toWrite[0][2];
    }
  };

  xhttp.open("GET", "getUploads.php", true);
  xhttp.send();


  </script>
</html>

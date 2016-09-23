@include('admin.adminheader')
  <script>
function listofproducts(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getlist/"+str);
        xmlhttp.send();
    }
}
</script>

<form>
 <b><select class="form-control input-md"  name="users" onchange="listofproducts(this.value)">
 <option value="">Select A type of food</option>
  @foreach ($lists as $list)
  <option value="{{$list->id}}">{{$list->name}}</option>
  @endforeach
   </select></b>
</form>

<div id="txtHint"><b>Food will be listed here...</b></div>
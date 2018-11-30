<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <form>
        <legend>Version 1<small>Single buttons</small></legend>
        <div class="checkbox">
          <input type="button" id="checkall1" class="btn btn-link" value="Un/check All">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"  value="yes" class="save-cb-state check1" id="mycheckbox1"> Check me out
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"  value="yes" class="save-cb-state check1" id="mycheckbox2"> Check me out
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"  value="yes" class="save-cb-state check1" id="mycheckbox3"> Check me out
          </label>
        </div>
      </form>
    </div>
   
    </div>
  </div>
</div>

<script>
// v1
function checkAll1() {

  var inputs = document.querySelectorAll('.check1');
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].checked = true;
  }

  this.onclick = uncheckAll1;
}

function uncheckAll1() {
  var inputs = document.querySelectorAll('.check1');
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].checked = false;
  }

  this.onclick = checkAll1; //function reference to original function
}

var el = document.getElementById("checkall1"); //let for ES6 aficionados 
el.onclick = checkAll1; //again, function reference, no ()


</script>
	<script>
// Avoid scoping issues by encapsulating code inside anonymous function
(function() {
  // variable to store our current state
  var cbstate;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    
    
    var test = document.getElementById("checkall1"); //let for ES6 aficionados 
    test.addEventListener('click', function(evt) {
        alert('ss');
        // If checkboxe is checked then save to state
    for(var i in cbstate) {
      var el = document.querySelector('input[id="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('save-cb-state');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.id] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.id]) {
          delete cbstate[this.id];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
      });
    }
      });
    
    for(var i in cbstate) {
      var el = document.querySelector('input[id="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('save-cb-state');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.id] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.id]) {
          delete cbstate[this.id];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
      });
    }
  });
})();
</script>
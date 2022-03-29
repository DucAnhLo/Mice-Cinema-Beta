<?php
include('header.php');
?>


    
<head>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="/cinema/css/addTheaterAdmin.css" rel="stylesheet">
</head>

<main>
    <section >
      <h1>
        Add Theatre
      </h1>
      <ol>
        <li><a href="index.php"><i></i> Home</a></li>
        <li >Add Theatre</li>
      </ol>
    </section>


    <section>

      <div >
        <div >
            <form action="process_add_theatre.php" method="post" id="form1">
              <div>
                <label>Theatre Name</label>
                <input type="text" name="name" placeholder="Enter theater name"/>
                
              </div>
              <div>
                <label>Theatre Address</label>
                <input type="text" name="address" placeholder="Address"/>
                
              </div>
              <div>
                <label>Place</label>

                <input type="text" name="place" placeholder="Enter Place">
                
              </div>
              <div>
                 <label >State</label>
                <input type="text" name="state" s placeholder="State" >
                
              </div>
              <div >
                <label >Pin Code</label>
                 <input type="text" name="pin" s placeholder="Zip code" >
                 
              </div>
              <?php
                start:
                $username="THR".rand(123456,999999);
                $u=mysqli_query($con,"select * from login where username='$username'");
                if(mysqli_num_rows($u))
                {
                  goto start;
                }
              ?>
              <div >
                <label>Username</label>
                <input type="text" name="username"  value="<?php echo $username ?>">
                
              </div>
              <div>
                <label>Password</label>
                <input type="text" name="password" value="<?php echo "PWD".rand(123456,999999);?>">
              </div>
              <div >
                <button >Add Theatre</button>
              </div>
            
            </form>
        </div> 

      </div>


    </section>
  </main>
 
  <?php
include('footer.php');
?>
 <script>
        // google auto complete API
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'long_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfO40iueprTDv0WCf0BCIlbj56JO-HylA&libraries=places&callback=initAutocomplete"
            async defer></script>
            <script>
    </script>